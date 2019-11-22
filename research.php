<?php 
$research = $_POST["research"];
try {
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

    <?php
        if ($data['id']==1) {
                include('product_1.php');;
                }
        if ($data['id']==2) {
                include('product_2.php');;
                }
        if ($data['id']==3) {
                include('product_3.php');;
                }
        ?>

    <footer>
    
    </footer>
</body>


</html>