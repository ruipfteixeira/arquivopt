  <div class="container background-color-green">
    <img class="img-left-up" src="img/brush.png">
    <div class="centered">
      <div>
        <h2>List Pets</h2>
        <br><br>
      </div>
      <div class="centered">
        <!--<section class="centered centered" id="content">-->
        <br><br>
        <div class="flex-container">
          <?php foreach ($pets as $pet) { ?>
            <div>
              <img class="petpic" src="img/pets/<?= $pet['id'] ?>.png">
              <br>
              <a href="view_pet.php?pet_id=<?= $pet['id'] ?>">
                <?= $pet['name'] ?>
              </a>
              <br><br>
            </div>
          <?php } ?>
        </div>
      </div>
      <!--</section>-->
    </div>
  </div>