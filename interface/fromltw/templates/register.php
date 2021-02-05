<div class="container background-color-green">
  <img class="img-left-up" src="img/brush.png">
  <div class="centered">
    <div>
      <h2>Register</h2>
      <br><br>
    </div>
    <div class="flex-container">
      <form action="action_register.php" method="post">
        <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
        <fieldset>
          <label>Username:
            <input type="text" name="username">
          </label>
          <br><br>
          <label>Password:
            <input type="password" name="password">
          </label>
          <br><br>
          <input type="submit">
        </fieldset>
      </form>
    </div>
  </div>
  <img class="img-right-down" src="img/brush.png">
</div>