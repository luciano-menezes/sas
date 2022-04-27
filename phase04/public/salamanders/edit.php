<?php

require_once('../../private/initialize.php');

include(SHARED_PATH . '/salamander-header.php');

$pageTitle = "Edit Salamander";

$id = $_GET['id'];

if (is_post_request()) {

  $salamander = [];
  $salamander['id'] = $id;
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  update_salamander($salamander);

  redirect_to(url_for('salamanders/show.php?id=' . $id));
} else {

  $salamander = find_salamander_by_id($id);
}

?>

<form action="<?= url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">

  <label for="name">Name:</label><br>
  <input type="text" name="name" value="<?= h($salamander['name']); ?>"><br>

  <label for="habitat">Habitat:</label><br>
  <textarea rows="4" cols="50" name="habitat"> <?= h($salamander['habitat']); ?></textarea><br>

  <label for="description">Description:</label><br>
  <textarea rows="4" cols="50" name="description"><?= h($salamander['description']); ?></textarea><br>

  <input type="submit" value="Edit Salamander" />
</form><br>


<?php include(SHARED_PATH . '/salamander-footer.php'); ?>