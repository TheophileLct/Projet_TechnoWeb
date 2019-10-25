<?php

$id=$_POST[""];


echo 'vous avez selectionné ';

try {
    session_start();
    include "bdd.php";

    $req = $conn->prepare('SELECT username FROM users WHERE username = :username');
    $req->execute(array(':username'=>$username1));
    $donnees = $req->fetch();
    if ($donnees) 
    {
        $req1 = $conn->prepare('SELECT password FROM users WHERE username = :username');
        $req1->execute(array(':username'=>$username1));
        $donnees1 = $req1->fetch();

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


?>