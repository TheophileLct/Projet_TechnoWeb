<?php

$username1 = $_POST["username1"];
$password1 = $_POST["password1"];


try {
    include "bdd.php";
    $req = $conn->prepare('SELECT username FROM users WHERE username = :username');
    $req->execute(array(':username'=>$username1));
    $donnees = $req->fetch();
    if ($donnees) 
    {
        $req1 = $conn->prepare('SELECT password FROM users WHERE username = :username');
        $req1->execute(array(':username'=>$username1));
        $donnees1 = $req1->fetch();

    if ($donnees1["password"]==$password1) 
        {
            session_start ();

            $_SESSION['login'] = $_POST["username1"];
            $_SESSION['password'] = $_POST["password1"];
            header ('location: product.php');
        }
        else{
            echo 'Mot de passe FAUX';
        }
    }
    else{
        echo 'Pseudo Inconnu';
    }
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>