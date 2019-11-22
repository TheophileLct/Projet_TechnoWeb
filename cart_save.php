<?php

$userid = $_SESSION['id'];
$idstg = $_GET['id'];

try {

    $req = $conn->prepare('SELECT id FROM orders WHERE user_id = :user_id');
    $req->execute(array(':user_id'=>$userid));
    $donnees = $req->fetch();
    $orderid = $donnees["id"];

    if ($orderid) 
    {
        $req1 = $conn->prepare('SELECT id FROM order_products WHERE (product_id = :product_id AND order_id = '.$orderid.')');
        $req1->execute(array(':product_id'=>$idstg));
        $donnees1 = $req1->fetch();
        $productid = $donnees1["id"];


        if (!empty($productid)) 
        {
            header ('location: index.php');
        }
        else{

            $sql = "INSERT INTO order_products (order_id,product_id,quantity)
            VALUES ('$orderid','$idstg', '1')";
            $conn->exec($sql);
            header ('location: index.php');

        }

    }
    else{

        $sql1 = "INSERT INTO orders (user_id,type,status)
            VALUES ('$userid','CART', 'CART')";
        $conn->exec($sql1);
        $req2 = $conn->prepare('SELECT id FROM orders WHERE user_id = :user_id');
        $req2->execute(array(':user_id'=>$userid));
        $donnees2 = $req2->fetch();
        $orderid2 = $donnees2["id"];
        $sql1 = "INSERT INTO order_products (order_id,product_id,quantity)
            VALUES ('$orderid2','$idstg', '1')";
        $conn->exec($sql1);
        header ('location: index.php');

    }
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


?>