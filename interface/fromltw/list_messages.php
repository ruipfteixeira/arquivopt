<?php
  include_once('config/init.php');
  include_once('database/messages.php');

  $messages = getAllMessages();

  include ('templates/header.php');
  include ('templates/list_messages.php');
  include ('templates/footer.php');
?>
