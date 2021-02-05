<?php
  include_once('config/init.php');
  include_once('database/category.php');
  include_once('database/pets.php');

  if ($_SESSION['csrf'] !== $_POST['csrf']) {
    showError ( "Invalid CSRF token." );
  } else {
    $category = trim(strip_tags($_POST['category']));
    $location = trim(strip_tags($_POST['location']));
    $size = trim(strip_tags($_POST['size']));
    $pets = getPetsSearch($category, $location, $size);
  }

  include ('templates/header.php');
  include ('templates/list_pets.php');
  include ('templates/footer.php');
?>
