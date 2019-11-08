<?php 
$research = $_POST["research"];
try {
        session_start ();
        include "bdd.php";
        $req = $conn->prepare("SELECT id FROM products WHERE name LIKE '%$research%' ");
        $req->execute();
        $data = $req->fetch();
    }

    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
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

    <div class="section">
        <?php $img_src = "img/Produit_".$data["id"].".jpg" ?>
        <img id="Chic" src=<?php echo $img_src ?> alt="Soutien-gorge corbeille"/>
        <aside>
            <h1><a href="product_3.php" style="text-decoration: none ; color: black"> <?php echo $data["name"]?> </a></h1>
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
            <div class="price"> <?php echo $data["unit_price"]?>€ </div>
            <form action="cart_save.php?id=<?php echo $data['id']?>" method="post">
            <div class="quantity"><input type="submit" id="submit" value="Ajouter au panier"> </div>
            <p> <?php echo $data["description"]?></p>
            </form>
        </aside>
    </div>

    <footer>
    
    </footer>
</body>


</html>