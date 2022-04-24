<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1'; // PHP > 7.0

?>
<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>


<?php include(SHARED_PATH . '/salamander-footer.php'); ?>