<?php

    try {
        session_start ();
        include "bdd.php";
        $NOM = $_SESSION['login'];
        $req = $conn->prepare('SELECT id FROM users WHERE username = ?');
        $req->execute(Array($NOM));
        $donnees = $req->fetch();

        if(isset($_POST['id'])){
            $id=$_POST['id'];

            if(isset($_POST['quantity'])){
                $quantity=$_POST['quantity'];
                
                try {
                    include "bdd.php";
                    $req4 = $conn->prepare('UPDATE order_products SET quantity = '.$quantity.' WHERE product_id = '.$id);
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
    <link rel="stylesheet" href="css/cart.css" />
    <title>Diabolo</title>
</head>

<body>

    <header>
    
    </header>

    <?php
    while ($data = $req1->fetch()) {
        ?>
            <section>
            <?php $img_src = "img/Produit_".$data["id"].".jpg" ?>
                <img id="Monica" src=<?php echo $img_src ?> alt="Soutien-gorge avec armatures"/> 
                <aside>
                <h1><?php echo $data["name"] ?></h1>
                <p><?php echo $data["description"] ?></p>
                <div class="size">Size:
                        <FORM>
                            <SELECT name="size" size="1">
                                <OPTION>F
                                <OPTION>E
                                <OPTION>D
                                <OPTION selected>C
                                <OPTION>B
                                <OPTION>A
                            </SELECT>
                        </FORM>
                    </div>
                <form action='' method='post'>
                    <div class="quantity">Quantity: <input class="number" type="number" name="quantity" value=<?php echo $data["quantity"] ?> min="0" max="99"> </div>
                    <input type="hidden" name="id" value=<?php echo $data["id"] ?>>
                    <input class="bouton_1" type="submit" value="Valider"/>
                </form>
                <div class="price"> <?php echo $data["unit_price"]?>€ </div>
                </aside>
            </section>
            <?php } ?>

        <section>
            <h1>Votre Commande:</h1>
            <h2><p>Vous avez <?php echo $Quantity[0]; ?> produits pour un total de:</p></h2>
            <div class="price_final"> <?php echo $Price_Total[0]; ?>€ </div>
            <input class="bouton_1" type="button" value="Valider" />
        </section>
    <?php } ?>

    <section>
        <h1>Your order</h1>
        <h2>
            <p>You have <?php echo $Quantity[0]; ?> products for a total of :</p>
        </h2>
        <div class="price_final"> <?php echo $Price_Total[0]; ?>€ </div>
        <input class="bouton_1" type="button" value="Confirm" />
    </section>

    <footer>
        
    </footer>
</body>

</html>