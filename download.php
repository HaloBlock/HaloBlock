<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/config.php';
$key = isset($_GET['platform']) && is_string($_GET['platform']) ? strtolower($_GET['platform']) : '';
if ($key === 'all') {
    $filename = 'HaloBlock-All-Platforms-v4.4.zip';
} elseif (isset(PLATFORMS[$key])) {
    $filename = PLATFORMS[$key]['file'];
} else {
    http_response_code(404);
    header('Content-Type: text/plain; charset=UTF-8');
    exit('The requested HaloBlock package was not found.');
}
$base = realpath(__DIR__ . '/downloads');
$path = realpath(__DIR__ . '/downloads/' . $filename);
if (!$base || !$path || !str_starts_with($path, $base . DIRECTORY_SEPARATOR) || !is_file($path)) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=UTF-8');
    exit('That download is currently unavailable.');
}
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
header('Content-Length: ' . filesize($path));
header('Cache-Control: public, max-age=3600');
header('X-Content-Type-Options: nosniff');
readfile($path);
exit;
