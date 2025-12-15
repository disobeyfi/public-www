<?php
$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH); // Remove query string

// Serve static files directly (css, js, images, favicon, etc.)
if (file_exists(__DIR__ . $path) && !is_dir(__DIR__ . $path)) {
    return false;
}

// Extract year from path, e.g. /2025/
if (preg_match('#^/(\d{4})#', $path, $matches)) {
    $year = $matches[1];
    if ($year < 2023) {
        // Or handle as a 404 not found
        http_response_code(404);
        echo "Not Found";
        exit;
    }
} else {
    // Default to 2026 for root access or paths without a year
    $year = '2026';
}

// Serve assets in subfolders (e.g., glitch_logo, vendor)
if (preg_match("#^/$year/(css|js|img|fonts|webfonts|videos)(/.*)?$#", $path)) {
    $file = __DIR__ . $path;
    if (file_exists($file)) {
        return false;
    }
}

// Page rewrites for pretty URLs
$pages = [
    'tickets', 'about', 'practical', 'ctf', 'ctfchallenge', 'faq', 'contact',
    'program', 'privacy', 'communityvillage', 'competitions', 'venue', 'HackerPuzzle'
];

foreach ($pages as $page) {
    if ($path === "/$year/$page") {
        require __DIR__ . "/$year/$page.php";
        exit;
    }
}

// Profile asset rewrite
if (preg_match("#^/$year/profile/(css|img|js)/(.*)$#", $path, $m)) {
    $file = "/$year/{$m[1]}/{$m[2]}";
    if (file_exists(__DIR__ . $file)) {
        return false;
    }
}

// Profile URL rewrite
if (preg_match("#^/$year/profile/([^/]*)$#", $path, $m)) {
    $_GET['profile'] = $m[1];
    require __DIR__ . "/$year/profile.php";
    exit;
}

// Favicon rewrite
if ($path === "/$year/profile/favicon.ico" || $path === "/$year/favicon.ico") {
    require __DIR__ . "/$year/favicon.ico";
    exit;
}

// Default: serve index
require __DIR__ . "/$year/index.php";
