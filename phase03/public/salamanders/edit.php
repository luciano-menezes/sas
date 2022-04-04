
<?php 
require_once('../../private/initialize.php'); 

if (!isset($_GET['id'])) {
    redirect_to(url_for('salamanders/index.php'));
}
$id = $_GET['id'];
$salamanderName = '';
if (is_post_request()) {
    $salamanderName = $_POST['salamanderName'];
    echo "Salamander Name: $salamanderName<br>";
} 

$pageTitle = "Edit";
include (SHARED_PATH . '/salamander-header.php');
?>
<a href= "<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>
<h1>Edit Salamander</h1>
<!-- add label -->
<form action="<?= url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
    <label for="salamanderName">Name</label><br>
    <input type="text" name="salamanderName" value="<?= $salamanderName; ?>"/><br>
    <input type="submit" value="Edit Salamander"/>
</form>

 <?php include(SHARED_PATH . '/salamander-footer.php'); ?>
