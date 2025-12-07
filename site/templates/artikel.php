<?php snippet('header') ?>
<article class="section prose">
  <p class="meta">Veröffentlicht am <?= $page->date()->toDate('d.m.Y') ?></p>
  <h1><?= esc($page->title()) ?></h1>
  <?php if ($page->intro()->isNotEmpty()): ?>
    <p class="meta"><?= esc($page->intro()) ?></p>
  <?php endif ?>
  <?= $page->text()->kirbytext() ?>
</article>
<?php snippet('footer') ?>
