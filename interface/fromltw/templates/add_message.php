<section id="content">
  <h2>Add Message</h2>
  <form action="action_add_message.php" method="post">
    <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
    <label>Send to:
      <input type="name" name="receiver_id">
    </label>
    <label>Pet_ID:
      <input type="name" name="pet_id">
    </label>
    <label>Message:
      <input type="name" name="message">
    </label>
    <input type="submit">
  </form>
</section>
