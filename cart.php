<?php

    try {
    
        $NOM = $_SESSION['login'];
        $userid = $_SESSION['id'];

        $req5 = $conn->prepare('SELECT id FROM orders WHERE user_id = :user_id');
        $req5->execute(array(':user_id'=>$userid));
        $donnees = $req5->fetch();
        $orderid = $donnees["id"];

        $req = $conn->prepare('SELECT id FROM users WHERE username = ?');
        $req->execute(Array($NOM));
        $donnees = $req->fetch();

        if(isset($_POST['id_produit'])){
            $id_produit=$_POST['id_produit'];

            if(isset($_POST['quantity'])){
                $quantity=$_POST['quantity'];
                echo $quantity;
                
                try {
                    if($quantity == 0){
                        echo ("ok");
                        $req4 = $conn->prepare('DELETE FROM order_products WHERE (product_id = '.$id_produit.' AND order_id = '.$orderid.')');
                    }else{
                        $req4 = $conn->prepare('UPDATE order_products SET quantity = '.$quantity.' WHERE (product_id = '.$id_produit.' AND order_id = '.$orderid.')');
                    }                    
                    $req4->execute();
                }
                catch(PDOException $e){
                    echo $sql . "<br>" . $e->getMessage();
                }
            }
        }

        $req1 = $conn->prepare('SELECT name, description, products.unit_price, order_products.quantity, products.id FROM products, order_products, orders WHERE (orders.type = "CART" AND order_products.order_id = orders.id AND products.id = order_products.product_id AND orders.user_id = ?)');
        $req1->execute(Array($donnees[0]));

    $req2 = $conn->prepare('SELECT SUM(products.unit_price*order_products.quantity) FROM products, order_products, orders WHERE (orders.type = "CART" AND order_products.order_id = orders.id AND products.id = order_products.product_id AND orders.user_id = ?)');
    $req2->execute(array($donnees[0]));
    $Price_Total = $req2->fetch();

    $req3 = $conn->prepare('SELECT SUM(order_products.quantity) FROM products, order_products, orders WHERE (orders.type = "CART" AND order_products.order_id = orders.id AND products.id = order_products.product_id AND orders.user_id = ?)');
    $req3->execute(array($donnees[0]));
    $Quantity = $req3->fetch();
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>

<!DOCTYPE html>
<html>

<head>
    <title>Diabolo</title>
    <link rel="stylesheet" href="css/cart.css" />
</head>

<body>

    <?php
    while ($data = $req1->fetch()) {
        ?>

        <div class="section">
            <?php $img_src = "img/Produit_" . $data["id"] . ".jpg" ?>
            <img id="Chic" src=<?php echo $img_src ?> alt="Soutien-gorge corbeille" />
            <aside>
                <?php $href = "product_" . $data["id"] . ".php" ?>
                <?php $dest = "index.php?page=product_".$data["id"] ?>
                <h1><a href=<?php echo $dest?> style="text-decoration: none ; color: black"> <?php echo $data["name"] ?> </a></h1>
                <div class="size">Size:
                    <FORM>
                        <SELECT name="size" size="1">
                            <OPTION>90B
                            <OPTION>90C
                            <OPTION>90D
                            <OPTION selected>90E
                            <OPTION>90F
                        </SELECT>
                    </FORM>
                </div>
                <div class="price"> <?php echo $data["unit_price"]?>€ </div>
                <form action='' method='post'>
                    <div class="quantity">Quantity: <input class="number" type="number" name="quantity" value=<?php echo $data["quantity"] ?> min="0" max="99"> </div>
                    <input type="hidden" name="id_produit" value=<?php echo $data["id"] ?>>
                    <input class="bouton_1" type="submit" value="Valider"/>
                    <p><?php echo $data["description"] ?></p>
                </form>
            </aside>
        </div>
    <?php } ?>

    <div class="section">
        <h1>Your order</h1>
        <aside>
            <h2><p>You have <?php echo $Quantity[0]; ?> products for a total of:</p></h2>
            <h3><div class="price_final"> <?php echo $Price_Total[0]; ?>€ </div></h3>
            <h3><input class="bouton_1" type="button" value="Valider" /></h3>
        </aside>
    </div>

</body>

</html>