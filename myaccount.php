<?php

session_start();

if (empty($_SESSION['login'])) {
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: account.php');
  exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/myaccount.css" />
  <title>Mon compte</title>
  <?php include 'header.php' ?>
</head>

<body>
  <center>
    <form id="user_address" action="myaccount_updated.php" method="post">
      <h1><?php
          // Ici on est bien loggué, on affiche un message
          echo 'Bienvenue ', $_SESSION['login'];
          ?></h1>
      <fieldset id="inputs">
        <input name="billing_adress" id="username" type="text" placeholder="Adresse de livraison" autofocus required>
        <h1></h1>
        <input name="billing_address2" id="password" type="text" placeholder="Complément d'adresse" autofocus required>
        <h1></h1>
        <input name="postal" id="password" type="text" placeholder="Code postal" autofocus required>
        <h1></h1>
        <input name="country" id="password" type="text" placeholder="Pays" autofocus required>
        <h1></h1>
        <input name="city" id="password" type="text" placeholder="Ville" autofocus required>
      </fieldset>
      <fieldset id="actions">
        <input type="submit" id="submit" value="Save">
      </fieldset>
    </form>

    <form id="logout" action="logout.php">
      <input type="submit" id="submit" value="Déconnecter">
    </form>
  </center>
</body>
<footer>
  <?php include 'footer.php' ?>
</footer>

</html>