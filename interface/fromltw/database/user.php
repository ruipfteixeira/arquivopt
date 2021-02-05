<?php
  function createUser($username, $password) {
    global $conn;  
      
    $options = ['cost' => 12];
    $hash = password_hash($password, PASSWORD_DEFAULT, $options);

    $stmt = $conn->prepare('INSERT INTO users(username, password) VALUES (?, ?)');
    $stmt->execute(array($username, $hash));
  }

  function updateUser($userid, $newusername) {
    global $conn;  

  
    $stmt = $conn->prepare('UPDATE users SET username = ? WHERE user_id = ?');
    $stmt->execute(array($newusername, $userid));
    $_SESSION['username'] = $newusername;
     
  }

  function updateUserPassword($userid, $newpassword) {
    global $conn;  
    $options=['cost'=>12];
   

    $stmt = $conn->prepare('UPDATE users SET password = ? WHERE user_id = ?');
    $stmt->execute(array(password_hash($newpassword, PASSWORD_DEFAULT, $options), $userid));
}

  function verifyUser($username, $password) {
    global $conn;  
    $stmt = $conn->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute(array($username));
    $user = $stmt->fetch();
    if ($user !== false && password_verify($password, $user['password'])){
      return $user['user_id'];
    } else {
      return NULL;
    }
  }

  function getUser($user_id) {
    global $conn;
    
    $stmt = $conn->prepare('SELECT * FROM users WHERE user_id = ?');
    $stmt->execute(array($user_id));
    $user = $stmt->fetch(); 
    return $user;
  }

?>
