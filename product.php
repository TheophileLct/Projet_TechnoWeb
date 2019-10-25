<!DOCTYPE html>
<html>
<head>
    <title>Diabolo</title>
    <link rel="stylesheet" href="css/product.css" />
</head>
<body>
   
    <header>
    <?php include 'header.php'?>
    </header>

    <div class="section">
        <img id="Monica" src="img/Produit_1.jpg" alt="Soutien-gorge avec armatures0"/> 
        <aside>
            <h1>Monica - Soutien-gorge avec armatures </h1>
            <div class="size">Taille:
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
            <form action="cart_save.php" method="post">
        <div class="quantity"><input type="submit" id="submit" value="Ajouter au panier"> </div>
            <div class="price"> 59 € </div>
            <p>Moderne et féminin, voici l’iconique Soutien-gorge avec armatures, en dentelle 100% française. forme corbeille emboîtant. Dos cheminée et doublure renforcée. Confére un très bon maintien. Convient davantage aux potrines moyennes à généreuses. Disponible jusqu'au bonnet F.</p>
            
        </form>
        </aside>
    </div>

    <div class="section">
        <img id="Josephine" src="img/Produit_2.jpg" alt="Soutien-gorge avec armatures"/>
        <aside>
            <h1>Josephine - Soutien-gorge avec armatures </h1>
            <div class="size">Taille:
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
        <div class="quantity">Quantité: <input class="number" type="number" value="1" min="0" max="99"> </div>
            <div class="price"> 59 € </div>
            <p>La nouvelle dentelle française. Soutien-gorge avec armatures, en dentelle 100% française, stretch et douce. Motif floral et géométrique délicat. Forme emboitante pour un maintien optimal jusqu'au bonnet F. Modèle sans coques. Excellent maintien. Convient à toutes les poitrines.<p>
        </aside>
    </div>

    <div class="section">
        <img id="Chic" src="img/Produit_3.jpg" alt="Soutien-gorge corbeille"/>
        <aside>
            <h1>Chic - Soutien-gorge corbeille</h1>
            <div class="size">Taille:
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
        <div class="quantity">Quantité: <input class="number" type="number" value="1" min="0" max="99"> </div>
            <div class="price"> 69 € </div>
            <p> La dentelle Leavers Soutien-gorge corbeille, en dentelle française, strech et douce. Festons de dentelle sophistiqués. Bonnets doublés pour un maintien renforcé. Modèle avec armatures, sans coques. Bon maintien. Convient à toutes les poitrines.</p>
        </aside>
    </div>

    <footer>
    <?php include 'footer.php'?>
    </footer>
</body>


</html>