<?php
  if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stellar Interest - <?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <link href="<?php echo url_for('/stylesheets/staff.css'); ?>"  media="all" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1>SI Staff Area</h1>
    </header>
    <nav>
      <ul>
        <li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
      </ul>
    </nav>