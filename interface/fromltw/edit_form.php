<?php
  include_once('config/init.php');
  include_once('database/category.php');
  include_once('database/pets.php');
  include_once('database/user.php');
  include_once('database/favourite.php');
  include_once('database/adoption.php');

/*  $username = $_GET['owner'];*/

  $pets = getPetsFromUser($_SESSION['user_id']);
  $user = getUser($_SESSION['user_id']);
  $favourites = getFavouritesFromUser($_SESSION['user_id']);
  $adoptionrequests = getAdoptionRequestsFromUser($_SESSION['user_id']);

  include ('templates/header.php');
  include ('templates/edit_form_final.php');
  include ('templates/footer.php');
?>
