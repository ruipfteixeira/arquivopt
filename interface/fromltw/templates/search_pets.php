<div class="container background-color-green">
  <img class="img-left-up" src="img/brush.png">
  <div class="centered">
    <div>
      <h2>Look4Pets</h2>
      <br><br>
    </div>    
    <!-- Location filter -->
    <div class="centerelement">
      <div class="flex-container">
      <form action="list_pets.php" method="post">
        <input type="hidden" name="csrf" value="<?=$_SESSION['csrf']?>">
        <label>Category:</label>
        <select name="category">
            <option value="emptycategory"></option>
            <option value="1">Dog</option>
            <option value="2">Cat</option>
          </select>
        <label>Location:</label>
        <select name="location">
          <option value="emptylocation"></option>
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
        <label>Size:</label>
        <select name="size">
          <option value="emptysize"></option>
          <option value="Small">Small</option>
          <option value="Medium">Medium</option>
          <option value="Big">Big</option>
        </select>
        <input type="submit">
      </form>
      </div>    
    </div>
  </div>
  <img class="img-right-down" src="img/brush.png">
</div>