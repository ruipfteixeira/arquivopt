<?php
  include_once('config/init.php');
  include_once('database/pets.php');
  
  if ($_SESSION['csrf'] !== $_POST['csrf']) {
    showError ( "Invalid CSRF token." );
  } else {
    $pet_id = trim(strip_tags($_POST['pet_id']));
    $newname = $_POST['newname'];  

    updatePetName($pet_id, $newname);
  }  
  
  header('Location: index.php');  
?>
