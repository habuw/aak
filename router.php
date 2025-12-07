<?php
// Front controller for PHP's built-in server and shared hosting.
// Serves existing static files directly and delegates everything else to Kirby.

// If the PHP built-in server is used, let it serve files that actually exist
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $file = realpath(__DIR__ . '/' . ltrim($path, '/'));

    if ($file && is_file($file)) {
        return false;
    }
}

// Safety: ensure the Kirby front controller is available
$index = __DIR__ . '/index.php';

if (!is_file($index)) {
    http_response_code(503);
    echo '<!doctype html><html><head><meta charset="utf-8"><title>Startdatei fehlt</title>';
    echo '<style>body{font-family:Arial,Helvetica,sans-serif;max-width:720px;margin:3rem auto;padding:0 1.5rem;line-height:1.6;}';
    echo 'h1{font-size:1.6rem;margin-bottom:0.5rem;}code{background:#f5f5f5;padding:0.15rem 0.35rem;border-radius:4px;}</style></head><body>';
    echo '<h1>index.php nicht gefunden</h1>';
    echo '<p>Stelle sicher, dass du den Server im Projektstamm startest:</p>';
    echo '<pre>cd /pfad/zum/projekt
php -S localhost:8000 router.php</pre>';
    echo '</body></html>';
    return;
}

require $index;
