<?php
  include_once('config/init.php');
  include_once('database/user.php');
  
  $username = trim(strip_tags($_POST['username']));
  $password = $_POST['password'];  

  $user_id = verifyUser($username, $password);
  if ($user_id != NULL) {
    $_SESSION['user_id'] = $user_id;
  }

  
  header('Location: ' . $_SERVER['HTTP_REFERER']);  
?>
