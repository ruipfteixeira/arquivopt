<div class="container background-color-green">
  <img class="img-left-up" src="img/brush.png">
  <div class="centered">
    <section id="content">
      <h2><?= $pet['name'] ?></h2>
      <div class="centered">
        <?php { ?>
          <div class="petpic">
            <img id="pets" src="img/pets/<?= $pet['id'] ?>.png">
            <a>Name: <?= $pet['name'] ?></a>
            <br><br>
            <a>Color: <?= $pet['description'] ?></a>
            <br><br>
            <a>Location: <?= $pet['location'] ?></a>
            <br><br>
            <a>Gender: <?= $pet['gender'] ?></a>
            <br><br>
          </div>
          <?php if ($isOwner) { ?>
            <a>Edit pet:</a>
            <form action="action_edit_pet_name.php" method="post">
              <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
              <label>New name:
                <input type="text" name="newname">
                <input type="submit">
              </label>
              <input type="hidden" name="pet_id" value="<?=$pet['id']?>">
            </form>
            <form action="action_edit_pet_location.php" method="post">
            <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
            <label>Location:</label>
              <select name="newlocation">
                <option value="Aveiro">Aveiro</option>
                <option value="Beja">Beja</option>
                <option value="Braga">Braga</option>
                <option value="Bragança">Bragança</option>
                <option value="Castelo Branco">Castelo Branco</option>
                <option value="Coimbra">Coimbra</option>
                <option value="Évora">Évora</option>
                <option value="Faro">Faro</option>
                <option value="Guarda">Guarda</option>
                <option value="Leiria">Leiria</option>
                <option value="Lisboa">Lisboa</option>
                <option value="Portalegre">Portalegre</option>
                <option value="Porto">Porto</option>
                <option value="Santarém">Santarém</option>
                <option value="Setúbal">Setúbal</option>
                <option value="Viana de Castelo">Viana do Castelo</option>
                <option value="Vila Real">Vila Real</option>
                <option value="Viseu">Viseu</option>
              </select>
              <input type="submit">
              <input type="hidden" name="pet_id" value="<?=$pet['id']?>">
            </form>
            <form action="action_remove_pet.php" method="post">
              <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
              <input type="hidden" name="pet_id" value="<?=$pet['id']?>">
              <input class="centered" type="submit" value="Delete Pet" name="delete">
            </form>
            <input class="centered" type="submit" value="Adoption Requests" name="requests">
            <input class="centered" type="submit" value="Messages" name="messages">
          <?php } else { ?>
            <div>
            <?php if ($isRequested) { ?>
              <form action="action_remove_request.php" method="post">
                  <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
                  <input class="centered" type="submit" value="Remove Request for Adoption" name="remrequest">
                </form>
              <?php } else { ?>
                <?php if (isset($_SESSION['user_id'])) { ?>
                  <form action="action_adoption_request.php" method="post">
                    <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
                    <input class="centered" type="submit" value="Request for Adoption" name="adopt">
                  </form>
              </form>
                  <?php } ?>
              <?php } ?>
              <?php if ($isFavourite) { ?>
                <form action="action_remove_favourites.php" method="post">
                  <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
                  <input type="hidden" name="pet_id" value="<?=$favourite['pet_id']?>">
                  <input class="centered" type="submit" value="Remove from Favourites" name="remfavourite">
                </form>
              <?php } else { ?>
                <?php if (isset($_SESSION['user_id'])) { ?>
                  <form action="action_add_favourites.php" method="post">
                  <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
                  <input class="centered" type="submit" value="Add to favourites" name="favourite">
                  <input type="hidden" name="pet_id" value="<?=$pet['id']?>" />
                  <input type="hidden" name="pet_name" value="<?=$pet['name']?>" />
                </form>
                  <?php } ?>
              <?php } ?>
              <?php if (isset($_SESSION['user_id'])) { ?>
                <form action="action_send_message.php" method="post">
                <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
                <label>Question:
                  <input type="name" name="question">
                  <input type="hidden" name="pet_id" value="<?=$pet['id']?>" />
                  <input type="hidden" name="owner_id" value="<?=$pet['owner_id']?>" />
                </label>
                <input type="submit">
              </form>
                  <?php } ?>
              <br><br>
            </div>
          <?php } ?>
        <?php
        } ?>
      </div>
    </section>
  </div>
</div>

