<?php snippet('header') ?>
<section class="hero">
  <div class="wrapper">
    <p class="meta">Ihre Mobilitätspartner im Norden</p>
    <h1><?= esc($page->hero_title()->or($page->title())) ?></h1>
    <p><?= esc($page->hero_text()->or('Werkstatt, Fahrzeuge und Beratung aus einer Hand – Auto aber Klein verbindet Erfahrung mit persönlichem Service.')) ?></p>
    <?php if ($contact = page('kontakt')): ?>
      <a class="button" href="<?= $contact->url() ?>">Termin vereinbaren</a>
    <?php endif ?>
  </div>
</section>

<section class="section">
  <h2>Unsere Schwerpunkte</h2>
  <div class="grid">
    <?php foreach ($page->services()->toStructure() as $service): ?>
      <article class="card">
        <h3><?= esc($service->title()) ?></h3>
        <p class="meta"><?= esc($service->tagline()) ?></p>
        <p><?= esc($service->text()) ?></p>
      </article>
    <?php endforeach ?>
  </div>
</section>

<section class="section">
  <h2>Aktuelles aus dem Autohaus</h2>
  <div class="grid">
<?php foreach ($site->children()->listed() as $p): ?>      <article class="card">
        <h3><a href="<?= $article->url() ?>"><?= esc($article->title()) ?></a></h3>
        <p class="meta"><?= $article->date()->toDate('d.m.Y') ?></p>
        <p><?= esc($article->intro()->or($article->text()->excerpt(140))) ?></p>
      </article>
    <?php endforeach ?>

  </div>
</section>
<?php snippet('footer') ?>
