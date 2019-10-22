<?php

session_start(); 

if(empty($_SESSION['login'])) 
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: account.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Mon compte</title>
  </head>
  <body>
 <?php
    // Ici on est bien loggué, on affiche un message
    echo 'Bienvenue ', $_SESSION['login'];
	?>
	<form id="logout" action="logout.php">
	<input type="submit" id="submit" value="Déconnecter">
	</form>
  </body>
</html>