<?php
  include_once('config/init.php');
  include_once('database/user.php');
  
  if ($_SESSION['csrf'] !== $_POST['csrf']) {
    showError ( "Invalid CSRF token." );
  } else {
    $username = trim(strip_tags($_POST['username']));
    $password = $_POST['password'];  

    createUser($username, $password);
  }
  
  header('Location: search_pets.php');  
?>
