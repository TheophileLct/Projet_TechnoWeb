<?php

$id=$_POST[""];


echo 'vous avez selectionné ';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bddprojet";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO order_products (quantity, )
    VALUES (1, )";
   
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


?>