<?php

require __DIR__ . '/vendor/autoload.php';

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
