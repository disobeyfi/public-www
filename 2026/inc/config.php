<?php
/**
 * Disobey 2026 - Configuration
 *
 * Centralized configuration for environment detection and settings.
 *
 * Environments:
 * - Development: localhost:8080
 * - Staging: staging.disobey.fi
 * - Production: disobey.fi
 */

// Environment detection
$serverName = $_SERVER['SERVER_NAME'] ?? 'localhost';
define('IS_PRODUCTION', $serverName === 'disobey.fi');
define('IS_STAGING', $serverName === 'staging.disobey.fi');
define('IS_DEVELOPMENT', !IS_PRODUCTION && !IS_STAGING);

// Security headers
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: strict-origin-when-cross-origin');

// Content Security Policy
// font-src: Typekit only (no Google Fonts). object-src/base-uri: hardening against injection.
$csp = "default-src 'self'; " .
       "script-src 'self' 'unsafe-inline' https://code.jquery.com https://cdnjs.cloudflare.com https://use.typekit.net; " .
       "style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com https://use.typekit.net; " .
       "img-src 'self' data: https:; " .
       "font-src 'self' https://use.typekit.net; " .
       "frame-src https://www.google.com https://www.youtube.com; " .
       "connect-src 'self' https://use.typekit.net; " .
       "media-src 'self'; " .
       "object-src 'none'; " .
       "base-uri 'self';";
header("Content-Security-Policy: $csp");

// Error reporting - only show errors in development
if (!IS_PRODUCTION) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    // In production, errors should be logged to a file instead
    ini_set('log_errors', 1);
}

// Base URL configuration
$baseurl = '/2026/';
$suffix = '';
