<?php 
require_once('../../private/initialize.php'); 

if (is_post_request()) {
    $salamanderName = $_POST['salamanderName'];
    echo "Salamander Name: $salamanderName";
} else {
   // redirect_to(url_for('/salamanders/new.php'));
}

$pageTitle = "Create";
include (SHARED_PATH . '/salamander-header.php');
?>
<a href= "<?= url_for('/salamander/index.php'); ?>">&laquo; Back to List</a>
<h1>Create Salamander</h1>
<!-- add label -->
<form action="<?= url_for('/salamanders/create.php'); ?>" method="post">
    <label for="salamanderName">Name</label><br>
    <input type="text" name="salamanderName"/><br>
    <input type="submit" value="Create Salamander"/>
</form>

<?php include (SHARED_PATH . '/salamander-footer.php'); ?>