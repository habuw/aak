<?php
// Kirby router for PHP's built-in server and shared hosting setups.
// Routes static files directly and defers everything else to the Kirby front controller.

// Serve existing files directly when using the built-in PHP server
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $file = realpath(__DIR__ . '/../' . ltrim($path, '/'));

    if ($file && is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../index.php';
