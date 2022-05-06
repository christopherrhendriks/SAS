<?php

require_once('../../private/initialize.php');
if(is_post_request()) {
  $salamander_name = $_POST['sName'] ?? '';
  echo("Salamander name: " . $salamander_name);
}
else {
  header("Location: " . url_for('salamanders/new.php'));
}

?>