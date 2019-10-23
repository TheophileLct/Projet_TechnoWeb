<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bddprojet";

    try {
        session_start ();
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $NOM = $_SESSION['login'];
        print($NOM);
        $req = $conn->prepare('SELECT id FROM users WHERE username ="'.$NOM.'"');
        $req->execute();
        $donnees = $req->fetch();
        if($donnees){
            print($donnees[0]);
        }else{
            print("PAS OK");
        }
        $req1 = $conn->prepare('SELECT name, description, prod.unit_price, ord_prod.quantity FROM products prod, order_products ord_prod, orders ord WHERE (ord.type = "CART" AND ord_prod.order_id = ord.id AND prod.id = ord_prod.product_id AND ord.user_id ="'.$donnees[0].'")');
        $req1->execute();
        $donnees1 = $req1->fetch();
        if ($donnees1) {
            foreach($donnees1 as $elem){
                print($elem);
                print(" ");
            }
        }else{
            print("PAS OK");
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
            <img id="Josephine" src="img/Produit_2.jpg" alt="Soutien-gorge avec armatures"/>
            <aside>
                <h1>Josephine - Soutien-gorge avec armatures </h1>
                <p>La nouvelle dentelle française. Soutien-gorge avec armatures, en dentelle 100% française, stretch et douce. Motif floral et géométrique délicat. Forme emboitante pour un maintien optimal jusqu'au bonnet F. Modèle sans coques. Excellent maintien. Convient à toutes les poitrines.<p>
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
            <img id="Chic" src="img/Produit_3.jpg" alt="Soutien-gorge corbeille"/>
            <aside>
                <h1>Chic - Soutien-gorge corbeille</h1>
                <p> La dentelle Leavers Soutien-gorge corbeille, en dentelle française, strech et douce. Festons de dentelle sophistiqués. Bonnets doublés pour un maintien renforcé. Modèle avec armatures, sans coques. Bon maintien. Convient à toutes les poitrines.</p>
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
                <div class="price"> 69 € </div>
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