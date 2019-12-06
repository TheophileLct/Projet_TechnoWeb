<?php

try {
    $req1 = $conn->prepare('SELECT name, description, unit_price, id FROM products WHERE id="1"');
    $req1->execute();
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>

<!DOCTYPE html>
<html>

<head>
    <title>Diabolo</title>
    <link rel="stylesheet" href="css/product.css" />
</head>

<body>
    <header>
        
    </header>
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
                <div class="price"> <?php echo $data["unit_price"] ?>€ </div>
                <form action="index.php?page=cart_save&id=<?php echo $data['id'] ?>" method="post">
                    <div class="quantity"><input type="submit" id="submit" value="Add to cart"> </div>
                    <p> <?php echo $data["description"] ?></p>
                </form>
            </aside>
        </div>
        <?php } ?>
    <footer>
       
    </footer>
</body>

</html>