<?php
// Vercel entry point
$url = parse_url($_SERVER['REQUEST_URI']);
$path = $url['path'];

// Route to the correct file
if (strpos($path, '/api/portal_api') !== false) {
    require __DIR__ . '/backend/portal_api.php';
} elseif (strpos($path, '/api/register') !== false) {
    require __DIR__ . '/backend/register.php';
} elseif (strpos($path, '/api/admin_posts') !== false) {
    require __DIR__ . '/backend/admin_posts.php';
} else {
    http_response_code(404);
    echo '404 Not Found';
}
