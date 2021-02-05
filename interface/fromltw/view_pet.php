<?php
  include_once('config/init.php');
  include_once('database/pets.php');
  include_once('database/favourite.php');
  include_once('database/adoption.php');

  $pet_id = $_GET['pet_id'];
  $pet = getPet($pet_id);
  $user_id = $_SESSION['user_id'];

  $favourites = getFavouritesFromUser($user_id);
  $requests = getAdoptionRequestsFromUser($user_id);

  $isOwner = false;
  $isFavourite = false;
  $isRequested = false;

  if (isset($_SESSION['user_id'])) 
    $isOwner = $_SESSION['user_id']==$pet['owner_id'];

  foreach ($favourites as $favourite) {
    if($favourite['pet_id'] == $pet_id)
      $isFavourite = true;
  }

  foreach ($requests as $request) {
    if($request['pet_id'] == $pet_id)
      $isRequested = true;
  }

  include ('templates/header.php');
  include ('templates/view_pet.php');
  include ('templates/footer.php');
?>