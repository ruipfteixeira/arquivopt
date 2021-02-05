<?php
  include_once('config/init.php');
  include_once('database/favourite.php');
  
  if ($_SESSION['csrf'] !== $_POST['csrf']) {
    showError ( "Invalid CSRF token." );
  } else {
    $user_id = $_SESSION['user_id'];
    $pet_id = trim(strip_tags($_POST['pet_id']));
    $pet_name = trim(strip_tags($_POST['pet_name']));

    addFavourite($user_id, $pet_id, $pet_name);
  }
  
  header('Location: search_pets.php');  
?>