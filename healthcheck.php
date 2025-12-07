<?php
// Simple health check to validate the local Kirby/Kirby bootstrap setup.
// Run with: php healthcheck.php

$base = __DIR__;
$checks = [
    'project root' => is_file($base . '/index.php'),
    'router.php (root)' => is_file($base . '/router.php'),
    'kirby/router.php' => is_file($base . '/kirby/router.php'),
    'composer.json' => is_file($base . '/composer.json'),
    'vendor/autoload.php' => is_file($base . '/vendor/autoload.php'),
    'vendor/kirby/config/setup.php' => is_file($base . '/vendor/kirby/config/setup.php'),
    'content directory' => is_dir($base . '/content'),
    'site directory' => is_dir($base . '/site'),
];

$allOk = true;
foreach ($checks as $label => $ok) {
    $allOk = $allOk && $ok;
}

$lines = [];
foreach ($checks as $label => $ok) {
    $lines[] = sprintf("[%s] %s", $ok ? 'OK ' : 'MISS', $label);
}

$recommendedCommand = "php -S localhost:8000 router.php";
$serveScript = $base . '/serve.sh';
if (is_file($serveScript) && is_executable($serveScript)) {
    $recommendedCommand = './serve.sh';
}

$intro = "Kirby Setup Healthcheck (local)";

if (php_sapi_name() === 'cli') {
    echo $intro, "\n";
    echo str_repeat('=', strlen($intro)), "\n\n";
    echo implode("\n", $lines), "\n\n";
    echo "Recommendation: start the built-in server via: {$recommendedCommand}\n";
    if (!$checks['vendor/kirby/config/setup.php'] || !$checks['vendor/autoload.php']) {
        echo "Note: install dependencies with 'composer install' or copy Kirby to vendor/kirby/.\n";
    }
    exit($allOk ? 0 : 1);
}

// Fallback HTML output when invoked through the web server.
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Kirby Setup Healthcheck</title>
    <style>
        body { font-family: Arial, Helvetica, sans-serif; max-width: 760px; margin: 3rem auto; padding: 0 1.5rem; line-height: 1.6; }
        h1 { font-size: 1.6rem; margin-bottom: 0.75rem; }
        ul { padding-left: 1.2rem; }
        li { margin: 0.25rem 0; }
        .ok { color: #1a7f37; font-weight: 700; }
        .miss { color: #d0021b; font-weight: 700; }
        code { background: #f5f5f5; padding: 0.2rem 0.35rem; border-radius: 4px; }
        .box { border: 1px solid #ddd; border-radius: 6px; padding: 1rem; background: #fffdee; }
    </style>
</head>
<body>
    <h1>Kirby Setup Healthcheck</h1>
    <p>Diese Seite prüft, ob die wichtigsten Projektdateien vorhanden sind.</p>
    <ul>
        <?php foreach ($checks as $label => $ok): ?>
            <li class="<?php echo $ok ? 'ok' : 'miss'; ?>"><?php echo $ok ? '✓' : '✗'; ?> <?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></li>
        <?php endforeach; ?>
    </ul>
    <div class="box">
        <p><strong>Empfohlenes Startkommando:</strong> <code><?php echo htmlspecialchars($recommendedCommand, ENT_QUOTES, 'UTF-8'); ?></code></p>
        <p>Fehlt <code>vendor/kirby/</code> oder <code>vendor/autoload.php</code>, bitte <code>composer install</code> ausführen oder das Kirby-Paket manuell nach <code>vendor/kirby/</code> kopieren.</p>
    </div>
</body>
</html>
