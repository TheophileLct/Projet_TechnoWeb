<?php
$id = $_SESSION['id'];
try {

    $req1 = $conn->prepare('SELECT id  FROM orders WHERE(type="ORDER" AND user_id='.$id.')');
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

    <?php
    while ($data = $req1->fetch()) {
        ?>
        <div class="section">
                <form action="index.php?page=order_details&id=<?php echo $data['id'] ?>" method="post">
                    <div class="order">
                    	<input type="submit" id="submit" value="ORDER <?php echo $data["id"] ?>"> 
                    </div>
                </form>
        </div>

    <?php } ?>

</body>


</html>