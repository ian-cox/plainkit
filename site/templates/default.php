<?php snippet('header') ?>

<main>
  <h1><?=$page->title()->text()?></h1>
  <?= $page->blocks()->toBlocks() ?>  
</main>

<?php snippet('footer') ?>