<?php require_once('../../private/initialize.php'); 
include(SHARED_PATH . '/salamander-header.php');
if(!isset($_GET['id'])) {
    redirect_to(url_for('salamanders/index.php'));
  }
  $id = $_GET['id'];
  
  $salamander = find_salamander_by_id($id);
  
  if(is_post_request()) {
  
  }
  
  $pageTitle = 'Delete Salamander'; ?>
  
    <a href="<?php echo url_for('salamanders/index.php'); ?>">&laquo; Back to Salamanders</a>
      <h1>Delete Salamander</h1>
      <p>Are you sure you want to delete this salamander?</p>
      <p><?php echo h($salamander['name']); ?></p>
  
      <form action="<?php echo url_for('salamanders/delete.php?id=' . h(u($salamander['id']))); ?>" method="post">
          <input type="submit" name="commit" value="Delete Salamander" />
      </form>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>