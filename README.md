# Collaborative repository for Disobey website development

Contents:

* `2017.disobey.fi`
* `2018.disobey.fi`
* `2019.disobey.fi` -- 2019 placeholder site
* `2019.disobey.fi_full` -- 2019 full website
* `2020.disobey.fi`
* `2021.disobey.fi`
* `2022.disobey.fi`
* `2023`
* `2024`
* `2025`
* `2026`

---

## Development Environment

### How to run locally:
1. Clone the repository
2. In the base directory, run `php -S localhost:8080 router-dev.php`
3. Open your browser and go to `http://localhost:8080/` to see the site

---

## Maintainers: Publishing Workflow (Private → Public)

> Development happens in the **private repository** on branch `master`.  
> The **public repository** (`git@github.com:disobeyfi/public-www.git`) is updated occasionally with real commits, but no full history prior to the first snapshot.

### Initial Setup (one-time)

Run this in your **private** repo:

```bash
# Add (or verify) the public remote
git remote add public git@github.com:disobeyfi/public-www.git
```

---

### Publishing from private repository (as needed)

Publishing with a helper script (`scripts/publish_public.sh`) that:
- Detects the latest `public-sync-*` tag,
- Cherry-picks the new commits,
- Pushes to the public repo,
- Creates the new sync tag automatically.

Run it from the private repo:
```bash
./scripts/publish_public.sh
```
or preview changes only:
```bash
./scripts/publish_public.sh --dry-run
```
