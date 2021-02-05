<?php
  include_once('config/init.php');
  include_once('database/messages.php');
  
  if ($_SESSION['csrf'] !== $_POST['csrf']) {
    showError ( "Invalid CSRF token." );
  } else {
    $receiver_id = trim(strip_tags($_POST['receiver_id']));
    $sender_id = $_SESSION['user_id'];
    $pet_id = trim(strip_tags($_POST['pet_id']));
    $message = trim(strip_tags($_POST['message']));

    createMessage($receiver_id, $sender_id, $pet_id , $message);
  }

  
  
  header('Location: list_messages.php');  
?>
