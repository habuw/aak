<?php

$autoload = __DIR__ . '/vendor/autoload.php';
$kirbySetup = __DIR__ . '/vendor/kirby/config/setup.php';

if (!file_exists($autoload) || !file_exists($kirbySetup)) {
    die(
        'Kirby konnte nicht geladen werden. Bitte zuerst die Abhängigkeiten installieren (z. B. "composer install" '
        . 'oder das Kirby-Paket manuell in vendor/kirby/ bereitstellen).'
    );
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
