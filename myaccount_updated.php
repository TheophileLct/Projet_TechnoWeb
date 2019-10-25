<?php
session_start();

if (empty($_SESSION['login'])) {
    header('Location: account.php');
    exit();
}

$billing_address = $_POST["billing_address"];
$billing_address2 = $_POST["billing_address2"];
$code_postal = $_POST["postal"];
$pays = $_POST["country"];
$ville = $_POST["city"];

echo 'ur account has been updated';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bddprojet";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $NOM = $_SESSION['login'];
    $req = $conn->prepare('SELECT id FROM user_addresses WHERE human_name ="' . $NOM . '"');
    $req->execute();
    $donnees = $req->fetch();
    $req1 = $conn->prepare('UPDATE user_addresses SET address_one="' . $billing_address . '",address_two="' . $billing_address2 . '",postal_code="' . $code_postal . '",city="' . $ville . '",country="' . $pays . '",updated_at=NOW() WHERE id=?');
    $req1->execute(array($donnees[0]));
    echo "New record created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
