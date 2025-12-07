<?php
// Lightweight placeholder autoloader used when Composer dependencies
// (including Kirby) are not installed. This avoids fatal errors and
// prints clear guidance to set up the project correctly.
http_response_code(503);
header('Content-Type: text/html; charset=utf-8');

$doc = <<<'HTML'
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <title>Kirby ist nicht installiert</title>
  <style>
    body{font-family:Arial,Helvetica,sans-serif;max-width:760px;margin:3rem auto;padding:0 1.5rem;line-height:1.6;}
    h1{font-size:1.6rem;margin-bottom:0.75rem;}
    code{background:#f5f5f5;padding:0.15rem 0.35rem;border-radius:4px;}
    ol{padding-left:1.1rem;}
    li{margin:0.35rem 0;}
    .box{border:1px solid #ddd;border-radius:6px;padding:1rem;background:#fffdee;}
  </style>
</head>
<body>
  <h1>Kirby-Core fehlt</h1>
  <p class="box">Diese Datei ist nur ein Platzhalter. Bitte installiere die echten Abhängigkeiten, damit die Seite läuft.</p>
  <ol>
    <li><strong>Empfohlen:</strong> <code>composer install</code> im Projektstamm ausführen.</li>
    <li><strong>Offline/Proxy:</strong> Das Kirby-Paket von <a href="https://github.com/getkirby/cms/releases">github.com/getkirby/cms/releases</a> laden und den entpackten <code>kirby</code>-Ordner ins Projekt kopieren (Pfad muss <code>kirby/config/setup.php</code> enthalten).</li>
    <li>Falls vorhanden, den generierten <code>vendor/autoload.php</code> aus einer funktionierenden Installation übernehmen.</li>
  </ol>
  <p>Starte den Server danach neu.</p>
</body>
</html>
HTML;

echo $doc;
exit;
