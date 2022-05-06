<?php 
  require_once("../../private/initialize.php");

$salamanders = array(['id'=>'1', 'salamanderName'=>'Red-Legged Salamander'], ['id'=>'2', 'salamanderName'=>'Pigeon Mountain Salamander'], ['id'=>'3','salamanderName'=>'ZigZag Salamander'], ['id'=>'4', 'salamanderName'=>'Slimy Salamander']);

$page_title = 'Salamanders';
require_once(SHARED_PATH . '/salamander-header.php');

?>

<h1>Salamanders</h1>

  <a href="#">Create Salamander</a>

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
          <!------------------------------------------------------------------

        Add the table data for the
        row 1: salamander id
        row 2: salamander name
        rows 3, 4, and 5 are already done for you.
        
        You will need to reference the salamander id and name from the salamanders array
      ------------------------------------------------------------------>
          <td><?php echo($salamander['id']); ?></td>
    	    <td><?php echo($salamander['salamanderName']); ?></td>
          <td><a class="action" href="<?= url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
