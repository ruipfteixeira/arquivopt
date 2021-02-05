<?php
  include_once('config/init.php');
  include_once('database/adoption.php');

  if ($_SESSION['csrf'] !== $_POST['csrf']) {
    showError ( "Invalid CSRF token." );
  } else {
    $requestor_id = $_SESSION['user_id'];
    $pet_id = trim(strip_tags($_POST['pet_id']));
    $owner_id = trim(strip_tags($_POST['owner_id']));
    $pet_name = trim(strip_tags($_POST['pet_name']));

    addAdoptionRequest($owner_id, $pet_id, $pet_name, $requestor_id, 1);
  }
  
  
  header('Location: search_pets.php');  
?>