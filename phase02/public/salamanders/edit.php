<?php

require_once('../../private/initialize.php');

if (!isset($_GET['id'])) {
  redirect_to(url_for('salamanders/index.php'));
}

$id = $_GET['id'];
$name = '';

if (is_post_request()) {

  $name = $_POST['name'] ?? '';

  echo "Salamander Name: " . $name . "<br>";
}

?>

<?php $page_title = 'Edit Salamander' ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">
  <a href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div>
    <h1>Edit Salamander</h1>

    <form action="<?php echo url_for('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
      <label for="name">Name</label><br>
      <input type="text" name="name" value="<?php echo $name; ?>">
      <div>
        <input type="submit" value="Edit Salamander">
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>