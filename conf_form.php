<?php

$username1 =$_POST["username"];
$email =$_POST["email"];
$password1 = $_POST["password"];

/*echo 'Bonjour '. $username1 .'votre compte est créé' ;*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bddprojet";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (username,email,password)
    VALUES ('$username1','$email', '$password1')";
    // use exec() because no results are returned
    $conn->exec($sql);
    /*echo "New record created successfully";*/
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