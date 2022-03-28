<?php

include_once('../private/initialize.php');

//echo "<p>Private path: " . SHARED_PATH . "</p>";

//echo "<p>WWW_ROOT: " . WWW_ROOT . "</p>";

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
//echo $public_end;

// var_dump($_SERVER);
// /web182/sas/sas/public/initialize-test.php

 $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
// var_dump($_SERVER);
echo $doc_root;