<nav aria-label="Hauptnavigation">
  <ul>
    <li><a href="/" <?= $page->isHomePage() ? 'aria-current="page"' : '' ?>>Startseite</a></li>
    <?php foreach ($site->children()->listed() as $item): ?>
      <li>
        <a href="<?= $item->url() ?>" <?= $item->isOpen() ? 'aria-current="page"' : '' ?>>
          <?= esc($item->title()) ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</nav>
