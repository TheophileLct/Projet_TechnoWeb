<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bddprojet;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT username FROM users');

while ($donnees = $reponse->fetch())
{
	echo $donnees['username'] . '<br />';
}

$reponse->closeCursor();

?>