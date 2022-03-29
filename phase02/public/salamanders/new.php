<?php

require_once('../../private/initialize.php');

$test = $_GET['test'] ?? '';

if ($test == '404') {
  error_404();
} elseif ($test == '500') {
  error_500();
} elseif ($test == 'redirect') {
  redirect_to(url_for('/salamanders/index.php'));
}

?>

<?php $page_title = 'Create Salamander' ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">
  <a href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div>
    <h1>Create Salamander</h1>

    <form action="<?php echo url_for('salamanders/create.php'); ?>" method="post">
      <label for="name">Name</label><br>
      <input type="text" name="name" value="">
      <div>
        <input type="submit" value="Create Salamander">
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>