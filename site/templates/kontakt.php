<?php snippet('header') ?>
<section class="section prose">
  <h1><?= esc($page->title()) ?></h1>
  <?php if ($page->intro()->isNotEmpty()): ?>
    <p class="meta"><?= esc($page->intro()) ?></p>
  <?php endif ?>
  <div class="grid">
    <div class="card">
      <h3>Kontakt</h3>
      <p><?= kirbytext($page->contact()) ?></p>
    </div>
    <div class="card">
      <h3>Öffnungszeiten</h3>
      <p><?= kirbytext($page->openinghours()) ?></p>
    </div>
  </div>
  <?php if ($page->text()->isNotEmpty()): ?>
    <?= $page->text()->kirbytext() ?>
  <?php endif ?>
</section>
<?php snippet('footer') ?>
