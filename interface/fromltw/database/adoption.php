<?php
  function addAdoptionRequest($ownerid, $petid, $petname, $requestorid , $status) {
    global $conn;
    
    $stmt = $conn->prepare('INSERT INTO adoptionrequest VALUES (NULL, ?, ?, ?, ?, ?)');
    $stmt->execute(array($ownerid, $petid, $petname, $requestorid , $status));
    return $stmt->fetch();  
  }

  function removeRequest($userid, $petid) {
    global $conn;
    
    $stmt = $conn->prepare('DELETE FROM adoptionrequest WHERE requestor_id = $userid AND pet_id = $petid');
    $stmt->execute(array($userid, $petid));
    return $stmt->fetch();  
  }

  function getAdoptionRequestsFromUser($userid) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM adoptionrequest WHERE requestor_id = $userid');
    $stmt->execute(array($userid));
    return $stmt->fetchAll();
  }
?>
