<?php

session_start();

if (empty($_SESSION['login'])) {
  header('Location: account.php');
  exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/myaccount.css" />
  <title>Diabolo : My account</title>
</head>

<body>
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

    <form id="logout" action="index.php?page=logout">
      <input type="submit" id="submit" value="Log out">
    </form>
  </center>
</body>
<footer>

</footer>

</html>