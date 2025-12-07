<?php

$autoload = __DIR__ . '/vendor/autoload.php';
$kirbySetup = __DIR__ . '/vendor/kirby/config/setup.php';

if (!is_file($autoload) || !is_file($kirbySetup)) {
    http_response_code(503);
    echo '<!doctype html><html><head><meta charset="utf-8"><title>Kirby fehlt</title>';
    echo '<style>body{font-family:Arial,Helvetica,sans-serif;max-width:720px;margin:3rem auto;padding:0 1.5rem;line-height:1.6;}';
    echo 'h1{font-size:1.6rem;margin-bottom:0.5rem;}code{background:#f5f5f5;padding:0.15rem 0.35rem;border-radius:4px;}';
    echo 'ol{padding-left:1.2rem;}li{margin:0.25rem 0;}</style></head><body>';
    echo '<h1>Kirby-Installation fehlt</h1>';
    echo '<p>Die Anwendung benötigt die Kirby-Core-Dateien unter <code>vendor/kirby/</code> und den Composer-Autoloader unter <code>vendor/autoload.php</code>. '; 
    echo 'Bitte stelle beides bereit, bevor du die Seite aufrufst.</p>';
    echo '<ol>';
    echo '<li>Falls Internetzugang besteht: <code>composer install</code> im Projektstamm ausführen.</li>';
    echo '<li>Ohne Internet/Proxy: Lade das Kirby-Paket manuell von <a href="https://github.com/getkirby/cms/releases">github.com/getkirby/cms/releases</a> herunter und entpacke den <code>kirby</code>-Ordner nach <code>vendor/kirby/</code>.</li>';
    echo '<li>Kopiere den passenden <code>vendor/autoload.php</code> aus einer funktionierenden Kirby-Installation oder generiere ihn mit Composer.</li>';
    echo '</ol>';
    echo '<p>Nach dem Bereitstellen der Dateien den Server neu laden.</p>';
    echo '</body></html>';
    return;
}

require $autoload;

use Kirby\Cms\App as Kirby;

$kirby = new Kirby([
    'roots' => [
        'index' => __DIR__,
        'base' => __DIR__,
        'content' => __DIR__ . '/content',
        'site' => __DIR__ . '/site',
        'assets' => __DIR__ . '/assets',
        'media' => __DIR__ . '/media',
    ],
]);

echo $kirby->render();
