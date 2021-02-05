<div class="container background-color-green">
  <img class="img-left-up" src="img/brush.png">
  <div class="centered">
    <div>
      <h2>Messages</h2>
      <br><br>
    </div>
    <div class="centerelement">
      <h2>Messages</h2>
      <div class="flex-container">
      <a> Sent messages: </a>
        <?php foreach ($messages as $message) { ?>
          <?php if ($_SESSION['user_id'] === $message['sender_id']) { ?>
            <a><li>Pet: <?= $message['pet_id'] ?></a>
            <a><li>Sender: <?= $message['sender_id'] ?></a>
            <a><li>Receiver: <?= $message['receiver_id'] ?></a>
            <a><li>Message Text: <?= $message['message'] ?></a>
            <?php } ?>
        <?php } ?>
      <a> Received messages: </a>
        <?php foreach ($messages as $message) { ?>
          <?php if ($_SESSION['user_id'] === $message['receiver_id']) { ?>
            <a><li>Pet: <?= $message['pet_id'] ?></a>
            <a><li>Sender: <?= $message['sender_id'] ?></a>
            <a><li>Receiver: <?= $message['receiver_id'] ?></a>
            <a><li>Message Text: <?= $message['message'] ?></a>
            <?php } ?>
        <?php } ?>
        <a href="add_message.php">Send message</a>
      </div>
    </div>
  </div>
  <img class="img-right-down" src="img/brush.png">
</div>