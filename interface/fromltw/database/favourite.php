<?php
  function addFavourite($user_id, $pet_id, $pet_name) {
    global $conn;
    
    $stmt = $conn->prepare('INSERT INTO favourite VALUES (?, ?, ?)');
    $stmt->execute(array($user_id, $pet_id, $pet_name));
    return $stmt->fetch();  
  }

  function removeFavourite($userid, $petid) {
    global $conn;
    
    $stmt = $conn->prepare('DELETE FROM favourite WHERE user_id = $userid AND pet_id = $petid');
    $stmt->execute(array($userid, $petid));
    return $stmt->fetch();  
  }

  function getFavouritesFromUser($user_id) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM favourite WHERE user_id = ?');
    $stmt->execute(array($user_id));
    return $stmt->fetchAll();
  }
?>
