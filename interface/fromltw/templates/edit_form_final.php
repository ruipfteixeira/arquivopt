<div class="container background-color-green">
  <img class="img-left-up" src="img/brush.png">
  <div class="centered">
    <div>
      <h2>MY AREA</h2>
    </div>
    <fieldset>
      <div class="flex-container">
        <section id="content">
          <h2>My Profile</h2>
          <div class="centered">
            <?php { ?>
              <div class="petpic">
                <img id="users" src="img/users/<?= $user['username'] ?>.png">
                <a>Name: <?= $user['username'] ?></a>
                <br><br>
              </div>
            <?php } ?>
          </div>
        </section>
      </div>
      <div class="flex-container">
        <section id="content">
          <h2>Edit Form</h2>
          <form action="action_edit_form_username.php" method="post">
            <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
            <fieldset>
              <label>New username:
                <input type="text" name="name">
              </label>
              <input type="submit">
            </fieldset>
          </form>
          <form action="action_edit_form_password.php" method="post">
          <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
            <fieldset>
              <br><br>
              <label>New Password:
                <input type="text" name="pass">
              </label>
              <br><br>
              <input type="submit">
            </fieldset>
          </form>
        </section>
      </div>
      <div class="flex-container">
        <section id="content">
          <h2>My Favourites</h2>
          <?php
          foreach ($favourites as $favourite) { ?>
            <div>
              <img class="petpic" src="img/pets/<?= $pet['id'] ?>.png">
              <br>
              <a href="view_pet.php?pet_id=<?= $pet['id'] ?>">
                <?= $favourite['pet_name'] ?>
              </a>
              <br><br>
              
              <form action="action_remove_favourites.php" method="post">
                <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
                <input type="hidden" name="pet_id" value="<?=$favourite['pet_id']?>">
                <input class="centered" type="submit" value="Remove from Favourites" name="remfavourite">
              </form>
            </div>
          <?php } ?>
        </section>
      </div>
      <div class="flex-container">
        <section id="content">
          <h2>My Pets</h2>
          <?php
          foreach ($pets as $pet) { ?>
            <div>
              <img class="petpic" src="img/pets/<?= $pet['id'] ?>.png">
              <br>
              <a href="view_pet.php?pet_id=<?= $pet['id'] ?>">
                <?= $pet['name'] ?>
              </a>
              <br><br>
            </div>
          <?php } ?>
        </section>
      </div>
      <div class="flex-container">
        <section id="content">
          <h2>My Adoption Requests</h2>
          <?php
          foreach ($adoptionrequests as $request) { ?>
            <div>
              <img class="petpic" src="img/pets/<?= $request['pet_id'] ?>.png">
              <br>
              <a href="view_pet.php?pet_id=<?= $request['pet_id'] ?>">
                <?= $request['pet_name'] ?>
              </a>
              <?= $request['pet_name'] ?>
              <br><br>
            </div>

            <form action="action_remove_request.php" method="post">
                <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
                <input type="hidden" name="pet_id" value="<?=$favourite['pet_id']?>">
                <input class="centered" type="submit" value="Remove Request" name="remrequest">
              </form>
          <?php } ?>
        </section>
      </div>
    </fieldset>
  </div>
</div>