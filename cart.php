<?php


    try {
        session_start ();
        include "bdd.php";
        $NOM = $_SESSION['login'];
        $req = $conn->prepare('SELECT id FROM users WHERE username = ?');
        $req->execute(Array($NOM));
        $donnees = $req->fetch();

        $req1 = $conn->prepare('SELECT name, description, products.unit_price, order_products.quantity, products.id FROM products, order_products, orders WHERE (orders.type = "CART" AND order_products.order_id = orders.id AND products.id = order_products.product_id AND orders.user_id = ?)');
        $req1->execute(Array($donnees[0]));

        $req2 = $conn->prepare('SELECT SUM(products.unit_price*order_products.quantity) FROM products, order_products, orders WHERE (orders.type = "CART" AND order_products.order_id = orders.id AND products.id = order_products.product_id AND orders.user_id = ?)');
        $req2->execute(Array($donnees[0]));
        $Price_Total = $req2->fetch();

        $req3 = $conn->prepare('SELECT SUM(order_products.quantity) FROM products, order_products, orders WHERE (orders.type = "CART" AND order_products.order_id = orders.id AND products.id = order_products.product_id AND orders.user_id = ?)');
        $req3->execute(Array($donnees[0]));
        $Quantity = $req3->fetch();
    }

    catch(PDOException $e){
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
        <?php include 'header.php'?>
        </header>

        <?php 
            while ($data = $req1->fetch()) {
        ?>
            <section>
            <?php $img_src = "img/Produit_".$data[4].".jpg" ?>
                <img id="Monica" src=<?php echo $img_src ?> alt="Soutien-gorge avec armatures"/> 
                <aside>
                <h1><?php echo $data[0] ?></h1>
                <p><?php echo $data[1] ?></p>
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
                <div class="quantity">Quantity: <input class="number" type="number" value=<?php echo $data[3] ?> min="0" max="99"> </div>
                <div class="price"> <?php echo $data[2]?>€ </div>
                </aside>
            </section>
            <?php } ?>

        <section>
            <h1>Votre Commande:</h1>
            <h2><p>Vous avez <?php echo $Quantity[0]; ?> produits pour un total de:</p></h2>
            <div class="price_final"> <?php echo $Price_Total[0]; ?>€ </div>
            <input class="bouton_1" type="button" value="Valider" />
        </section>

        <footer>
        <?php include 'footer.php'?>
        </footer>
    </body>
</html>