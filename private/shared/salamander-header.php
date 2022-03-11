<?php
  if(!isset($page_title)) { $page_title = 'Salamanders'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>SAS - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/salamanders.css'); ?>" />
  </head>

  <body>
    <header>
      <h1><a href="<?= WWW_ROOT; ?>">Southern Appalachian Salamanders (SAS)</a></h1>
      <navigation>
        <ul>
        <li><a href="<?= url_for('salamanders/'); ?>">Salamanders</a></li>
        </ul>
      </navigation>
    </header>

