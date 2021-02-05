<!DOCTYPE html>
<html>

<head>
  <title><?php echo $title; ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <title>FindYourBff</title>
  <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
  <div id="container">
    <header>
      <!--<h1>FindYourBFF</h1>-->
      <div class="container">
        <a href="main.php"><img src="img/logo.png"></a>

        <nav>
          <div class="container">
            <li><a href="about.php">Sobre</a></li>
            <li><a href="search_pets.php">Procurar Lei</a></li>
            <?php if (!isset($_SESSION['user_id'])) { ?>
              <li><a href="register.php">Register</a></li>
              <?php } else { ?>
                <li><a href="register_pet.php">Register Pet</a></li>
                <li><a href="list_messages.php">Messages</a></li>
            <?php } ?>
          </div>
        </nav>

        <?php
        if (isset($_SESSION['user_id'])) {
          include('templates/logout_form.php');
          include('templates/edit_form.php');
        } else
          include('templates/login_form.php');
        ?>
      </div>
    </header>
  </div>
</body>