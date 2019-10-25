<?php

$username1 =$_POST["username"];
$email =$_POST["email"];
$password1 = $_POST["password"];

/*echo 'Bonjour '. $username1 .'votre compte est créé' ;*/

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bddprojet";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (username,email,password)
    VALUES ('$username1','$email', '$password1')";
  
    $conn->exec($sql);
  
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/confirmation_creation_compte.css" />
    <?php include 'header.php'?>
    <title>Diabolo</title>
</head>

<body>
    </br>
    </br>
    </br>
    <h1>Votre compte a été créé avec succès.</h1>
    </br>
</body>

<footer>
    <?php include 'footer.php'?>
</footer>
</html>