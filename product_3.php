<!DOCTYPE html>
<html>

<head>
    <title>Diabolo</title>
    <link rel="stylesheet" href="css/product.css" />
</head>

<body>
    <header>
        <?php include 'header.php' ?>
    </header>

    <div class="section">
        <img id="Chic" src="img/Produit_3.jpg" alt="Soutien-gorge corbeille" />
        <aside>
            <h1>Chic - Soutien-gorge corbeille</h1>
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
            <div class="quantity">Quantité: <input class="number" type="number" value="1" min="0" max="99"> </div>
            <div class="price"> 69 € </div>
            <div class="quantity"><input type="submit" id="submit" value="Add to cart"> </div>
            <p> La dentelle Leavers Soutien-gorge corbeille, en dentelle française, strech et douce. Festons de dentelle sophistiqués. Bonnets doublés pour un maintien renforcé. Modèle avec armatures, sans coques. Bon maintien. Convient à toutes les poitrines.</p>
        </aside>
    </div>
    <footer>
        <?php include 'footer.php' ?>
    </footer>
</body>

</html>