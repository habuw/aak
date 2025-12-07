<?php
// Front controller for PHP's built-in server. Delegates to Kirby's router if available
// and shows a helpful message when the file is missing (e.g., wrong working directory).

$kirbyRouter = __DIR__ . '/kirby/router.php';

if (!is_file($kirbyRouter)) {
    http_response_code(503);
    echo '<!doctype html><html><head><meta charset="utf-8"><title>Kirby-Router fehlt</title>';
    echo '<style>body{font-family:Arial,Helvetica,sans-serif;max-width:720px;margin:3rem auto;padding:0 1.5rem;line-height:1.6;}';
    echo 'h1{font-size:1.6rem;margin-bottom:0.5rem;}code{background:#f5f5f5;padding:0.15rem 0.35rem;border-radius:4px;}</style></head><body>';
    echo '<h1>Router nicht gefunden</h1>';
    echo '<p>Bitte starte den PHP-Server aus dem Projektstamm oder stelle sicher, dass <code>kirby/router.php</code> existiert.</p>';
    echo '<p>Beispiel:</p>';
    echo '<pre>cd /pfad/zum/projekt
php -S localhost:8000 router.php</pre>';
    echo '<p>Alternativ die Datei <code>kirby/router.php</code> aus einem Kirby-Download hinzufügen.</p>';
    echo '</body></html>';
    return;
}

require $kirbyRouter;
