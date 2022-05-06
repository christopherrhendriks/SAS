<?php 

require_once('../../private/initialize.php');

$test = $_GET['test'] ?? '';
if($test == '404') {
  error_404();
}
elseif($test == '500') {
  error_500();
}
elseif($test == 'redirect') {
  header("Location: " . url_for('salamanders/index.php'));
}

$page_title = 'Salamanders';
require_once(SHARED_PATH . '/salamander-header.php');
?>

<h1>Create salamander</h1>
<form action=<?php url_for("create.php") ?> method="POST">
  <label for="sName">Salamander Name: </label>
  <input name="sName" id="sName" type="text"><br>
  <input type="submit" value="Submit Salamander">
</form>