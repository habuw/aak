<?php
// Placeholder to avoid fatal "Failed opening required 'vendor/kirby/config/setup.php'".
http_response_code(503);
header('Content-Type: text/html; charset=utf-8');

echo '<!doctype html><html lang="de"><head><meta charset="utf-8"><title>Kirby-Core fehlt</title>';
echo '<style>body{font-family:Arial,Helvetica,sans-serif;max-width:760px;margin:3rem auto;padding:0 1.5rem;line-height:1.6;}';
echo 'h1{font-size:1.6rem;margin-bottom:0.75rem;}code{background:#f5f5f5;padding:0.15rem 0.35rem;border-radius:4px;}li{margin:0.35rem 0;}ol{padding-left:1.1rem;}';
echo '.box{border:1px solid #ddd;border-radius:6px;padding:1rem;background:#fffdee;}</style></head><body>';
echo '<h1>Kirby-Core nicht installiert</h1>';
echo '<p class="box">Bitte installiere die Kirby-Dateien nach <code>vendor/kirby/</code> oder führe <code>composer install</code> aus.</p>';
echo '<ol><li><strong>Empfohlen:</strong> <code>composer install</code></li>';
echo '<li><strong>Offline:</strong> <a href="https://github.com/getkirby/cms/releases">Kirby-Release</a> laden und den Ordner <code>kirby</code> nach <code>vendor/kirby/</code> kopieren.</li>';
echo '<li>Server danach neu starten.</li></ol>';
echo '</body></html>';
exit;
