<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/salamander-header.php'); 

if(is_post_request()) {
    $salamander = [];
    $salamander['name'] = $_POST['name'] ?? '';
    $salamander['habitat'] = $_POST['habitat'] ?? '';
    $salamander['description'] = $_POST['description'];

    insert_salamander($salamander);
    $newID = mysqli_insert_id($db);
    redirect_to(url_for('salamanders/show.php?id=' . $newID  ));
}
include(SHARED_PATH . '/salamander-footer.php'); 
?>
