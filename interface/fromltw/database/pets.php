<?php
  function createPet($name, $description, $size , $location, $gender, $type, $cat_id, $owner, $adopted_at) {
    global $conn;
    
    $stmt = $conn->prepare('INSERT INTO pets VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute(array($name, $description, $size , $location, $gender, $type, $cat_id, $owner, $adopted_at));
    return $stmt->fetch();  
  }

  function getPet($pet_id) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM pets WHERE id = ?');
    $stmt->execute(array($pet_id));
    $pet = $stmt->fetch(); 
    return $pet;
  }

  function getPetsFromUser($user_id) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM pets WHERE owner_id = ?');
    $stmt->execute(array($user_id));
    return $stmt->fetchAll();
  }

  function getPetsSearch($category, $location, $size) {
    global $conn;

    //User gives category.
    if($category != "emptycategory" && $location == "emptylocation" && $size == "emptysize") {
      return getPetsFromCategory($category);
    }
    //User gives location.
    if($category == "emptycategory" && $location != "emptylocation" && $size == "emptysize") {
      return getPetsFromLocation($location);
    }
    //User gives size.
    if($category == "emptycategory" && $location == "emptylocation" && $size != "emptysize") {
      return getPetsFromSize($size);
    }
    //User gives location and size.
    if($category == "emptycategory" && $location != "emptylocation" && $size != "emptysize") {
      return getPetsFromLocationAndSize($location, $size);
    }
    //User gives size and category.
    if($category != "emptycategory" && $location == "emptylocation" && $size != "emptysize") {
      return getPetsFromSizeAndCategory($size, $category);
    }
    //User gives category and location.
    if($category != "emptycategory" && $location != "emptylocation" && $size == "emptysize") {
      return getPetsFromCategoryAndLocation($category, $location);
    }
    //User gives everything.
    if($category != "emptycategory" && $location != "emptylocation" && $size != "emptysize") {
      return getPetsFromCategoryAndLocationAndSize($category, $location, $size);
    }

    return getAllPets();
  }

  function getPetsFromLocation($location) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM pets WHERE location = ?');
    $stmt->execute(array($location));
    return $stmt->fetchAll();
  }

  function getPetsFromCategory($cat_id) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM pets WHERE cat_id = ?');
    $stmt->execute(array($cat_id));
    return $stmt->fetchAll();
  }

  function getPetsFromSize($size) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM pets WHERE size = ?');
    $stmt->execute(array($size));
    return $stmt->fetchAll();
  }

  function getPetsFromLocationAndSize($location, $size) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM pets WHERE location = ? AND size = ?');
    $stmt->execute(array($location, $size));
    return $stmt->fetchAll();
  }

  function getPetsFromCategoryAndLocation($cat_id, $location) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM pets WHERE cat_id = ? AND location = ?');
    $stmt->execute(array($cat_id, $location));
    return $stmt->fetchAll();
  }

  function getPetsFromSizeAndCategory($size, $cat_id) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM pets WHERE size = ? AND cat_id = ?');
    $stmt->execute(array($size, $cat_id));
    return $stmt->fetchAll();
  }

  function getPetsFromCategoryAndLocationAndSize($cat_id, $location, $size) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM pets WHERE cat_id = ? AND location = ? AND size = ?');
    $stmt->execute(array($cat_id, $location, $size));
    return $stmt->fetchAll();
  }

  function getAllPets() {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM pets');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function updatePetName($pet_id, $newname) {
    global $conn;  

    $stmt = $conn->prepare('UPDATE pets SET name = ? WHERE id = ?');
    $stmt->execute(array($newname, $pet_id));
  }

  function updatePetLocation($pet_id, $newlocation) {
    global $conn;  

    $stmt = $conn->prepare('UPDATE pets SET location = ? WHERE id = ?');
    $stmt->execute(array($newlocation, $pet_id));
  }

  function removePet($petid) {
    global $conn;
    
    $stmt = $conn->prepare('DELETE FROM pets WHERE id = ?');
    $stmt->execute(array($petid));
    return $stmt->fetch();  
  }

?>