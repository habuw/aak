<?php snippet('header') ?>
<section class="section prose">
  <h1><?= esc($page->title()) ?></h1>
  <?php if ($page->intro()->isNotEmpty()): ?>
    <p class="meta"><?= esc($page->intro()) ?></p>
  <?php endif ?>
  <div class="grid">
    <?php foreach ($page->services()->toStructure() as $service): ?>
      <article class="card">
        <h3><?= esc($service->title()) ?></h3>
        <p class="meta"><?= esc($service->tagline()) ?></p>
        <p><?= esc($service->detail()) ?></p>
      </article>
    <?php endforeach ?>
  </div>
</section>
<?php snippet('footer') ?>
