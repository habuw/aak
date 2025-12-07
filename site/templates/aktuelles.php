<?php snippet('header') ?>
<section class="section">
  <h1><?= esc($page->title()) ?></h1>
  <?php if ($page->intro()->isNotEmpty()): ?>
    <p class="meta"><?= esc($page->intro()) ?></p>
  <?php endif ?>
  <div class="grid">
    <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as $article): ?>
      <article class="card">
        <h3><a href="<?= $article->url() ?>"><?= esc($article->title()) ?></a></h3>
        <p class="meta"><?= $article->date()->toDate('d.m.Y') ?></p>
        <p><?= esc($article->intro()->or($article->text()->excerpt(140))) ?></p>
        <a class="button" href="<?= $article->url() ?>">Weiterlesen</a>
      </article>
    <?php endforeach ?>
  </div>
</section>
<?php snippet('footer') ?>
