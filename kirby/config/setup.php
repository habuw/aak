<?php
// Placeholder to avoid fatal "Failed opening required 'kirby/config/setup.php'" when Kirby isn't installed yet.
http_response_code(503);
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Kirby fehlt</title>
    <style>
        body { font-family: Arial, Helvetica, sans-serif; max-width: 760px; margin: 3rem auto; padding: 0 1.5rem; line-height: 1.6; }
        h1 { font-size: 1.6rem; margin-bottom: 0.75rem; }
        ol { padding-left: 1.2rem; }
        li { margin: 0.25rem 0; }
        code { background: #f5f5f5; padding: 0.2rem 0.35rem; border-radius: 4px; }
        .box { border: 1px solid #ddd; border-radius: 6px; padding: 1rem; background: #fffdee; }
    </style>
</head>
<body>
    <h1>Kirby-Core nicht installiert</h1>
    <p class="box">Diese Datei ist nur ein Platzhalter. Bitte installiere den Kirby-Core, damit die Seite läuft.</p>
    <ol>
        <li><strong>Empfohlen:</strong> <code>composer install</code> im Projektstamm ausführen.</li>
        <li><strong>Offline/Proxy:</strong> Kirby-Release von <a href="https://github.com/getkirby/cms/releases">github.com/getkirby/cms/releases</a> laden und den entpackten <code>kirby</code>-Ordner hierhin (<code>kirby/config/setup.php</code>) kopieren.</li>
        <li>Server neu starten.</li>
    </ol>
</body>
</html>
