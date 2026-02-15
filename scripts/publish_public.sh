#!/usr/bin/env bash
# publish_public.sh — monthly publish from private (master) -> public (main)
# Public remote: git@github.com:disobeyfi/public-www.git

set -euo pipefail

# -------- config (env-overridable) --------
PRIVATE_BRANCH="${PRIVATE_BRANCH:-master}"
PUBLIC_REMOTE="${PUBLIC_REMOTE:-public}"
PUBLIC_BRANCH="${PUBLIC_BRANCH:-main}"
PUBLIC_LOCAL_BRANCH="${PUBLIC_LOCAL_BRANCH:-public-main}"
TAG_PREFIX="${TAG_PREFIX:-public-sync-}"
PUBLIC_URL_DEFAULT="git@github.com:disobeyfi/public-www.git"

# -------- args --------
DRY_RUN=0
PUSH_ONLY=0
FROM_TAG=""

while [[ $# -gt 0 ]]; do
  case "$1" in
    --dry-run) DRY_RUN=1; shift ;;
    --push-only) PUSH_ONLY=1; shift ;;
    --from-tag) FROM_TAG="${2:-}"; shift 2 ;;
    -h|--help) sed -n '1,200p' "$0"; exit 0 ;;
    *) echo "Unknown argument: $1"; exit 1 ;;
  esac
done

fail() { echo "ERROR: $*" >&2; exit 1; }
need_cmd() { command -v "$1" >/dev/null 2>&1 || fail "Missing command: $1"; }

need_cmd git
git rev-parse --is-inside-work-tree >/dev/null 2>&1 || fail "Not inside a git repository."

# Ensure origin/private branch exists and is fetched
git remote get-url origin >/dev/null 2>&1 || fail "No 'origin' remote. Add your private remote as 'origin'."
git fetch origin "${PRIVATE_BRANCH}" >/dev/null 2>&1 || fail "Could not fetch origin/${PRIVATE_BRANCH}."

# Ensure PUBLIC_REMOTE exists (create if missing)
if ! git remote get-url "${PUBLIC_REMOTE}" >/dev/null 2>&1; then
  echo "==> Adding public remote '${PUBLIC_REMOTE}' -> ${PUBLIC_URL_DEFAULT}"
  git remote add "${PUBLIC_REMOTE}" "${PUBLIC_URL_DEFAULT}"
fi

# Sanity fetch public
git fetch "${PUBLIC_REMOTE}" >/dev/null 2>&1 || fail "Could not fetch from ${PUBLIC_REMOTE}."

# Create/refresh local tracking branch for public
if ! git rev-parse --verify "${PUBLIC_LOCAL_BRANCH}" >/dev/null 2>&1; then
  git fetch "${PUBLIC_REMOTE}" "${PUBLIC_BRANCH}:${PUBLIC_LOCAL_BRANCH}" >/dev/null 2>&1 || \
    fail "Could not fetch ${PUBLIC_REMOTE}/${PUBLIC_BRANCH}."
  git branch --set-upstream-to="${PUBLIC_REMOTE}/${PUBLIC_BRANCH}" "${PUBLIC_LOCAL_BRANCH}" >/dev/null 2>&1 || true
fi

# Determine starting tag
if [[ -z "${FROM_TAG}" ]]; then
  LAST_TAG="$(git tag --list "${TAG_PREFIX}*" | sort | tail -n1 || true)"
else
  LAST_TAG="${FROM_TAG}"
fi

if [[ -z "${LAST_TAG}" && "${PUSH_ONLY}" -eq 0 ]]; then
  fail "No '${TAG_PREFIX}*' tag found. Provide --from-tag <tag> for the first run after your initial snapshot."
fi

# Compute range (what to publish)
RANGE=""
if [[ "${PUSH_ONLY}" -eq 0 ]]; then
  RANGE="${LAST_TAG}..origin/${PRIVATE_BRANCH}"
  echo "==> Commits to publish (${RANGE}):"
  if ! git log --oneline --no-decorate "${RANGE}" | sed 's/^/   /'; then
    echo "   (none or invalid range)"
  fi
  if [[ -z "$(git log --oneline --no-decorate "${RANGE}" || true)" ]]; then
    echo "No commits to publish since '${LAST_TAG}'."
    exit 0
  fi
fi

# Dry-run?
if [[ "${DRY_RUN}" -eq 1 ]]; then
  echo "Dry-run only. No changes made."
  exit 0
fi

# Move local public branch to remote state and cherry-pick
git checkout -q "${PUBLIC_LOCAL_BRANCH}"
git reset --hard "${PUBLIC_REMOTE}/${PUBLIC_BRANCH}" >/dev/null 2>&1

if [[ "${PUSH_ONLY}" -eq 0 ]]; then
  echo "==> Cherry-picking ${RANGE} onto ${PUBLIC_LOCAL_BRANCH}…"
  set +e
  git cherry-pick --empty=drop ${RANGE}
  CHERRYPICK_STATUS=$?
  set -e

  if [[ ${CHERRYPICK_STATUS} -ne 0 ]]; then
    cat <<EOF
------------------------------------------------------------------------------
Cherry-pick hit conflicts and is paused.

Resolve conflicts, then:
  git add -A
  git cherry-pick --continue

When done, push + tag with:
  git push ${PUBLIC_REMOTE} ${PUBLIC_LOCAL_BRANCH}:${PUBLIC_BRANCH}
  git checkout ${PRIVATE_BRANCH}
  git tag -a ${TAG_PREFIX}$(date +%Y%m) -m "Public sync for $(date +%Y-%m)"
  git push origin --tags

Or re-run this script with:
  ./scripts/publish_public.sh --push-only
------------------------------------------------------------------------------
EOF
    exit 2
  fi
else
  echo "==> Push-only mode: skipping cherry-pick."
fi

# Push to public
echo "==> Pushing ${PUBLIC_LOCAL_BRANCH} -> ${PUBLIC_REMOTE}/${PUBLIC_BRANCH}"
git push "${PUBLIC_REMOTE}" "${PUBLIC_LOCAL_BRANCH}:${PUBLIC_BRANCH}"

# Tag on private branch
echo "==> Tagging private branch ${PRIVATE_BRANCH}"
git checkout -q "${PRIVATE_BRANCH}"
NEW_TAG="${TAG_PREFIX}$(date +%Y%m)"
if git rev-parse -q --verify "refs/tags/${NEW_TAG}" >/dev/null; then
  NEW_TAG="${TAG_PREFIX}$(date +%Y%m%d%H%M%S)"
fi
git tag -a "${NEW_TAG}" -m "Public sync for $(date +%Y-%m)"
git push origin --tags

echo "==> Done. Created tag: ${NEW_TAG}"