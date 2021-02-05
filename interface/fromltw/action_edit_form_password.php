<?php
  include_once('config/init.php');
  include_once('database/user.php');
  
  if ($_SESSION['csrf'] !== $_POST['csrf']) {
    showError ( "Invalid CSRF token." );
  } else {
    $user_id = $_SESSION['user_id'];
    $newpassword = $_POST['pass'];  
  
    updateUserPassword($user_id, $newpassword);
  }
  
  header('Location: index.php');  
?>
