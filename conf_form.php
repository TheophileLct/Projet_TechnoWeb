<?php

$username1 = $_POST["username"];
$email = $_POST["email"];
$password1 = $_POST["password"];



try {
    $req = $conn->prepare('SELECT username FROM users WHERE username = :username');
    $req->execute(array(':username'=>$username1));
    $donnees = $req->fetch();
    $myid = $donnees["username"];
    if (empty($myid)) 
    {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (username,email,password)
    VALUES ('$username1','$email', '$password1')";
    $conn->exec($sql);
    $sql2 = "INSERT INTO `user_addresses`(`human_name`, `address_one`, `address_two`, `postal_code`, `city`, `country`, `created_at`, `updated_at`) 
    VALUES ('$username1','','','','','',NOW(),NOW())";
    $conn->exec($sql2);
    }
    else{
        echo ("problem");
    }

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/confirmation_creation_compte.css" />
    <title>Diabolo</title>
</head>

<body>
    </br>
    </br>
    </br>
    <h1>Your account has been successfully updated</h1>
    </br>
</body>

<footer>

</footer>

</html>