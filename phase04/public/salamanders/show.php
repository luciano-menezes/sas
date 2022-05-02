<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$sql = "SELECT * FROM salamander ";
$sql .= "WHERE id='" . $id . "'";
$result = mysqli_query($db, $sql);
confirm_result_set($result);


$salamander = mysqli_fetch_assoc($result);
mysqli_free_result($result);

$page_title = 'View Salamander';
include(SHARED_PATH . '/salamander-header.php');

?>

<h2>Salamander Details</h2>

<div>
  <p> ID: <?= h($salamander['id']); ?> </p>
  <p> Name: <?= h($salamander['name']); ?></p>
  <p> Habitat: <?= h($salamander['habitat']); ?></p>
  <p> Description: <?= h($salamander['description']); ?></p>
</div>

<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>


<?php include(SHARED_PATH . '/salamander-footer.php'); ?>