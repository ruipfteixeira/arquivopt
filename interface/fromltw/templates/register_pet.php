<div class="container background-color-green">
  <img class="img-left-up" src="img/brush.png">
  <div class="centered">
    <div>
      <h2>Create Pet Profile</h2>
      <br><br>
    </div>
    <section class="flex-container">
      <!--<h2>Register Pet</h2>-->
      <form action="action_register_pet.php" method="post">
        <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
        <label>Name:
          <input type="text" name="name" required="required">
        </label>
        <br><br>
        <label>Color:
          <input type="text" name="description" required="required">
        </label>
        <br><br>
        <label>Size:
          <input type="radio" name="size" value="small" required="required">Small
          <input type="radio" name="size" value="medium" required="required">Medium
          <input type="radio" name="size" value="big" required="required">Big
        </label>
        <br><br>
        <label>Location:</label>
        <select name="location">
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
        <br><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="male" required="required">Male
        <input type="radio" name="gender" value="female" required="required">Female

        <br><br>
        <label>Type:
          <input type="text" name="type" required="required">
        </label>
        <br><br>
        <label>Category:
          <input type="radio" name="cat_id" value="1" required="required">Dog
          <input type="radio" name="cat_id" value="2" required="required">Cat
        </label>
        <br><br>
        <form action="upload_file.php" method="post" enctype="multipart/form-data">
          <label for="picture">Pet Picture</label>
          <input type="file" name="fileToUpload" id="fileToUpload">
          <br><br>
          <input class="centered" type="submit" value="Submit" name="submit">
        </form>
        <!-- <input type="submit"> -->
      </form>
    </section>
    <br><br>
  </div>
</div>