<?php snippet('header') ?>
<section class="section prose">
  <h1><?= esc($page->title()) ?></h1>
  <?php if ($page->intro()->isNotEmpty()): ?>
    <p class="meta"><?= esc($page->intro()) ?></p>
  <?php endif ?>
  <div class="grid">
    <?php foreach ($page->vehicles()->toStructure() as $vehicle): ?>
      <article class="card">
        <h3><?= esc($vehicle->title()) ?></h3>
        <p class="meta"><?= esc($vehicle->price()) ?></p>
        <p><?= esc($vehicle->specs()) ?></p>
        <?php if ($vehicle->link()->isNotEmpty()): ?>
          <a class="button" href="<?= $vehicle->link() ?>" target="_blank" rel="noopener">Details ansehen</a>
        <?php endif ?>
      </article>
    <?php endforeach ?>
  </div>
</section>
<?php snippet('footer') ?>
