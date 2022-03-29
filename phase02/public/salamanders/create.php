<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

  $name = $_POST['name'] ?? '';
  
  echo "Salamander Name: " . $name . "<br>";
}else {
  redirect_to(url_for('salamanders/new.php'));
}
