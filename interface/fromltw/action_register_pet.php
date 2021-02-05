<?php
  include_once('config/init.php');
  include_once('database/pets.php');
  
  if ($_SESSION['csrf'] !== $_POST['csrf']) {
    showError ( "Invalid CSRF token." );
  } else {
    $name = trim(strip_tags($_POST['name']));
    $description = trim(strip_tags($_POST['description']));
    $size = trim(strip_tags($_POST['size']));
    $location = trim(strip_tags($_POST['location']));
    $gender = trim(strip_tags($_POST['gender']));
    $type = trim(strip_tags($_POST['type']));
    $cat_id = trim(strip_tags($_POST['cat_id']));
    $img = $_POST['fileToUpload'];
    $owner_id = trim(strip_tags($_SESSION['user_id']));
    $adopted_at =NULL;

    createPet($name, $description, $size , $location, $gender, $type, $cat_id, $owner_id, $adopted_at);
  }
  
  header('Location: search_pets.php');  
?>
