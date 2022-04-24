<?php 

require_once('../../private/initialize.php');

$salamander_set = find_all_salamanders(); 
$page_title = 'Salamanders';
include(SHARED_PATH . '/salamander-header.php'); 

?>
    <h1>Salamanders</h1>
    
    <a href="<?= url_for('salamanders/create.php'); ?>">Create Salamander</a>
    
    <table border="1">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Habitat</th>
  	    <th>Desc</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>
      
      <?php while($salamander = mysqli_fetch_assoc($salamander_set)) { ?>
        <tr>
          <td><?= h($salamander['id']); ?></td>
          <td><?= h($salamander['name']); ?></td>
          <td><?= h($salamander['habitat']); ?></td>
          <td><?= h($salamander['description']); ?></td>
          <td><a href="<?= url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
          <td><a href="<?= url_for('salamanders/edit.php?id=' . h(u($salamander['id']))); ?>">Edit</a></td>
          <td><a href="<?= url_for('salamanders/delete.php?id=' . h(u($salamander['id']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
  <?php mysqli_free_result($salamander_set); ?>
  Thanks to <a href="https://herpsofnc.org">Ampibians and Reptiles of North Carolina</a>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
