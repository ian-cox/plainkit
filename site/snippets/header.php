<!DOCTYPE html>
<html lang="en">

<head>
  <?= css('assets/css/screen.css') ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $site->title()?> | <?= $page->title()?></title>
</head>

<body class="template-<?=$page->template()?>">

<header>
  <a class="logo" href="/"><?= $site->title()?></a>
  <nav>
    <ul>
    <?php foreach($site->children()->listed() as $item):?>
      <li><a href="<?=$item->url()?>"><?=$item->title()?></a></li>
    <?php endforeach ?>
    </ul>
  </nav>
</header>