<?php 
  require_once("../../private/initialize.php");

$salamanders = array(['id'=>'1', 'salamanderName'=>'Red-Legged Salamander'], ['id'=>'2', 'salamanderName'=>'Pigeon Mountain Salamander'], ['id'=>'3','salamanderName'=>'ZigZag Salamander'], ['id'=>'4', 'salamanderName'=>'Slimy Salamander']);

$page_title = 'Salamanders';
require_once(SHARED_PATH . '/salamander-header.php');

?>

<h1>Salamanders</h1>

  <a href=<?= url_for('salamanders/new.php') ?>>Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php foreach($salamanders as $salamander) { ?>
        <tr>
          <td><?php echo($salamander['id']); ?></td>
    	    <td><?php echo($salamander['salamanderName']); ?></td>
          <td><a class="action" href="<?= url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
          <td><a class="action" href=<?= url_for('/salamanders/edit.php?id=') . h(u($salamander['id'])); ?>>Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
