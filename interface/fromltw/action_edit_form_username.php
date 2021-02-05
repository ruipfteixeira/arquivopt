<?php
  include_once('config/init.php');
  include_once('database/user.php');
  
  if ($_SESSION['csrf'] !== $_POST['csrf']) {
    showError ( "Invalid CSRF token." );
  } else {
    $user_id = $_SESSION['user_id'];
    $newusername = trim(strip_tags($_POST['name']));

    updateUser($user_id, $newusername);
  }
  
  header('Location: index.php');  
?>
