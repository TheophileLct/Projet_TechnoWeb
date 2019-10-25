<?php


    try {
        session_start ();
        include "bdd.php";
        $NOM = $_SESSION['login'];
        $req = $conn->prepare('SELECT id FROM users WHERE username = ?');
        $req->execute(Array($NOM));
        $donnees = $req->fetch();
        $req1 = $conn->prepare('SELECT name, description, prod.unit_price, ord_prod.quantity FROM products prod, order_products ord_prod, orders ord WHERE (ord.type = "CART" AND ord_prod.order_id = ord.id AND prod.id = ord_prod.product_id AND ord.user_id = ?)');
        $req1->execute(Array($donnees[0]));
        $Name = [];
        $Description = [];
        $Price =  [];
        $Quantity = [];
        while($donnees1 = $req1->fetch()){
                array_push($Name, $donnees1[0]);
                array_push($Description, $donnees1[1]);
                array_push($Price, $donnees1[2]);
                array_push($Quantity, $donnees1[3]);
            }
            for($k=0;$k<sizeof($Name);$k++){
                echo $Name[$k];
                echo "  ";
                echo $Description[$k];
                echo "  ";
                echo $Price[$k];
                echo "  ";
                echo $Quantity[$k];
                echo "  ";
            }
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
        <section>
            <img id="Monica" src="img/Produit_1.jpg" alt="Soutien-gorge avec armatures"/> 
            <aside>
            <h1>Monica - Soutien-gorge avec armatures </h1>
            <p>Moderne et féminin, voici l’iconique Soutien-gorge avec armatures, en dentelle 100% française. forme corbeille emboîtant. Dos cheminée et doublure renforcée. Confére un très bon maintien. Convient davantage aux potrines moyennes à généreuses. Disponible jusqu'au bonnet F.</p>
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
            <div class="quantity">Quantity: <input class="number" type="number" value="1" min="0" max="99"> </div>
            <div class="price"> 59 € </div>
            </aside>
        </section>

        <section>
            <h1>Votre Commande:</h1>
            <h2><p>Vous avez acheté 3 produits pour un total de:</p></h2>
            <div class="price_final"> 200 € </div>
            <input class="bouton_1" type="button" value="Valider" />
        </section>

        <footer>
        <?php include 'footer.php'?>
        </footer>
    </body>
</html>