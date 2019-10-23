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
    <form id="user_address" action="connected.php" method="post">
      <h1><?php
          // Ici on est bien loggué, on affiche un message
          echo 'Bienvenue ', $_SESSION['login'];
          ?></h1>
      <fieldset id="inputs">
        <input name="username1" id="username" type="text" placeholder="Adresse de livraison" autofocus required>
        <h1></h1>
        <input name="password1" id="password" type="password" placeholder="Complément d'adresse" autofocus required>
        <h1></h1>
        <input name="password1" id="password" type="password" placeholder="Code postal" autofocus required>
        <h1></h1>
        <input name="password1" id="password" type="password" placeholder="Pays" autofocus required>
        <h1></h1>
        <input name="password1" id="password" type="password" placeholder="Ville" autofocus required>
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