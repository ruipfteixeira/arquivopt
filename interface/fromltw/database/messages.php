<?php
  function getAllMessages() {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM message');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function createMessage($receiver_id, $sender_id, $pet_id , $message) {
    global $conn;
    
    $stmt = $conn->prepare('INSERT INTO message VALUES (NULL, ?, ?, ?, ?, NULL)');
    $stmt->execute(array($receiver_id, $sender_id, $pet_id , $message));
    return $stmt->fetch();  
  }

  function getMessage($user_id) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM message WHERE user_id = ?');
    $stmt->execute(array($username));
    return $stmt->fetch();  
  }
?>
