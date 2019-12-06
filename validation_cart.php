<?php

try {
    
    $id = $_SESSION['id'];
    $req = $conn->prepare('UPDATE orders SET type = "ORDER", status = "BILLED",updated_at=NOW() WHERE user_id= :id');
    $req->execute(array(':id'=>$id));

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
header('Location: index.php');

?>