<?php
  include_once('config/init.php');
  include_once('database/adoption.php');
  
  if ($_SESSION['csrf'] !== $_POST['csrf']) {
    showError ( "Invalid CSRF token." );
  } else {
    $user_id = $_SESSION['user_id'];
    $pet_id = trim(strip_tags($_POST['pet_id']));

    removeRequest($user_id, $pet_id);
  }
  
  header('Location: search_pets.php');  
?>