<?php
  include_once('config/init.php');
  include_once('database/messages.php');
  
  if ($_SESSION['csrf'] !== $_POST['csrf']) {
    showError ( "Invalid CSRF token." );
  } else {
    $receiver_id = trim(strip_tags($_POST['owner_id']));
    $sender_id = $_SESSION['user_id'];
    $pet_id = trim(strip_tags($_POST['pet_id']));
    $message = trim(strip_tags($_POST['question']));

    createMessage($receiver_id, $sender_id, $pet_id , $message);
  }
  
  header('Location: search_pets.php');  
?>