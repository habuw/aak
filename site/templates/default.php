<?php snippet('header') ?>
<section class="section prose">
  <h1><?= esc($page->title()) ?></h1>
  <?php if ($page->intro()->isNotEmpty()): ?>
    <p class="meta"><?= esc($page->intro()) ?></p>
  <?php endif ?>
  <?= $page->text()->kirbytext() ?>
</section>
<?php snippet('footer') ?>
