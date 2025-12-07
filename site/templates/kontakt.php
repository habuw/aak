<?php snippet('header') ?>
<section class="section prose">
  <h1><?= esc($page->title()) ?></h1>
  <?php if ($page->intro()->isNotEmpty()): ?>
    <p class="meta"><?= esc($page->intro()) ?></p>
  <?php endif ?>
  <div class="grid">
    <article class="card">
      <h3>Kontakt</h3>
      <p class="meta">Adresse &amp; Erreichbarkeit</p>
      <p><?= nl2br(esc($page->contact())) ?></p>
    </article>
    <article class="card">
      <h3>Öffnungszeiten</h3>
      <p class="meta">Werkstatt &amp; Verkauf</p>
      <p><?= nl2br(esc($page->openinghours())) ?></p>
      <?php if ($page->text()->isNotEmpty()): ?>
        <p><?= esc($page->text()) ?></p>
      <?php endif ?>
    </article>
  </div>
</section>
<?php snippet('footer') ?>
