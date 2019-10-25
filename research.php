<?php 
$research = $_POST["research"];
try {
        session_start ();
        include "bdd.php";
        $req = $conn->prepare("SELECT id FROM products WHERE name LIKE '%$research%' ");
        $req->execute();
        $data = $req->fetch();
        echo $data['id'];
        echo $research;

    }

    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
?>

