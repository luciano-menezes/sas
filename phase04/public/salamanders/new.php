<?php
require_once('../../private/initialize.php');

if (is_post_request()) {
  $salamanderName = $_POST['salamanderName'];
  echo "Salamander Name: $salamanderName";
} else {
  // redirect_to(url_for('/salamanders/new.php'));
}

$pageTitle = "Create";
include(SHARED_PATH . '/salamander-header.php');
?>
<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
<h1>Create Salamander</h1>
<!-- add label -->
<form action="<?= url_for('/salamanders/create.php'); ?>" method="post">
  <label for="salamanderName">Name:</label><br>
  <input type="text" name="name" /><br>

  <label for="salamanderHabitat">Habitat:</label><br>
  <textarea rows="4" cols="50" name="habitat"></textarea><br>

  <label for="salamanderDescription">Description:</label><br>
  <textarea rows="4" cols="50" name="description"></textarea><br>

  <input type="submit" value="Create Salamander" />
</form><br>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>