<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($page->title()) ?> | <?= esc($site->title()) ?></title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
  <header class="site-header">
    <div class="wrapper">
      <a class="brand" href="/"><?= esc($site->title()) ?></a>
      <?php snippet('nav') ?>
    </div>
  </header>
  <main class="wrapper">
