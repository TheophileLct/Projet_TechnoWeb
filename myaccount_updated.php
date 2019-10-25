<?php

$billing_address = $_POST["billing_address"];
$billing_address2 = $_POST["billing_address2"];
$code_postal = $_POST["postal"];
$pays = $_POST["country"];
$ville = $_POST["city"];

echo 'ur account has been updated';


try {
    include "bdd.php";
 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user_addresses (address_one,address_two,postal_code,city, country)
    VALUES ('$billing_address','$billing_address2', '$code_postal', '$pays', '$ville')";
 
    $conn->exec($sql);
    echo "New record created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
