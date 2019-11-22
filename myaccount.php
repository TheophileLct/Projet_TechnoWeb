<?php

if (empty($_SESSION['login'])) {
  header('Location: account.php');
  exit();
}
try {

  $NOM = $_SESSION['login'];

  $req1 = $conn->prepare('SELECT address_one FROM user_addresses WHERE human_name = ?');
  $req1->execute(array($NOM));
  $donnees1 = $req1->fetch();

  $req2 = $conn->prepare('SELECT address_two FROM user_addresses WHERE human_name = ?');
  $req2->execute(array($NOM));
  $donnees2 = $req2->fetch();

  $req3 = $conn->prepare('SELECT postal_code FROM user_addresses WHERE human_name = ?');
  $req3->execute(array($NOM));
  $donnees3 = $req3->fetch();

  $req4 = $conn->prepare('SELECT city FROM user_addresses WHERE human_name = ?');
  $req4->execute(array($NOM));
  $donnees4 = $req4->fetch();

  $req5 = $conn->prepare('SELECT country FROM user_addresses WHERE human_name = ?');
  $req5->execute(array($NOM));
  $donnees5 = $req5->fetch();
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/myaccount.css" />
  <title>Diabolo : My account</title>
</head>

<body>
  <center>
    <form id="user_address">
      <h2><?php
          echo 'Welcome ', $_SESSION['login'];
          ?></h2>
      <fieldset id="informations">
        <h1>Delivery address :<?php
                              echo $donnees1[0], " ", $donnees2[0];
                              ?></h1>
        <h1>Postcode :<?php
                      echo $donnees3[0];
                      ?></h1>
        <h1>City :<?php
                  echo $donnees4[0];
                  ?></h1>
        <h1>Country :<?php
                      echo $donnees5[0];
                      ?></h1>

      </fieldset>
    </form>
  </center>
  <center>
    <form id="user_address" action="index.php?page=myaccount_updated" method="post">
      <h1><?php
          echo 'Welcome ', $_SESSION['login'];
          ?></h1>
      <fieldset id="inputs">
        <input name="billing_address" id="username" type="text" placeholder="Delivery Address" autofocus required>
        <h1></h1>
        <input name="billing_address2" id="password" type="text" placeholder="Additional address" autofocus required>
        <h1></h1>
        <input name="postal" id="password" type="text" placeholder="ZIP code" autofocus required>
        <h1></h1>
        <input name="country" id="password" type="text" placeholder="Country" autofocus required>
        <h1></h1>
        <input name="city" id="password" type="text" placeholder="City" autofocus required>
      </fieldset>
      <fieldset id="actions">
        <input type="submit" id="submit" value="Save">
      </fieldset>
    </form>

    <form id="inputs2" action="index.php?page=logout" method="post">
      <fieldset id="actions">
        <input type="submit" id="submit" value="Log out">
      </fieldset>
    </form>
  </center>
</body>
<footer>

</footer>

</html>