<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="img/Logo_Diabolo_2.png" />
    <link rel="stylesheet" href="css/header.css" />
    <title>Diabolo</title>
</head>


<body>

    <div class="header">


        <div class='logo'>
            <a target="_blank" href="index.php?page=product">
                <img src="img/Logo_Diabolo_2.png" alt="logo" class=logo>
            </a>
        </div>

        <div id="searchbar">
            <form action="index.php?page=research" class="formulaire" method="post">
                <input name=research class="champ" type="text" placeholder="Search..." />
                <input type="submit" id="submit" value="Search" />

            </form>
        </div>

        <div class=connexion>
            <form id="login1" action="index.php?page=connected" method="post">
                <fieldset id="inputs">
                    <input name="username1" id="username" type="text" placeholder="Username" autofocus required>
                    <h1></h1>
                    <input name="password1" id="password" type="password" placeholder="Password" autofocus required>
                </fieldset>
                <fieldset id="actions">
                    <input type="submit" id="submit" value="Connect">
                </fieldset>
            </form>

        </div>
    </div>

    <div class='produit'>
        <a href="index.php?page=product" style="text-decoration: none ; color: white" class=test> Products </a>
<?php

        if (!empty($_SESSION['login'])) {
                echo ('<a href="index.php?page=myaccount" style="text-decoration: none; color: white" class=test> My account </a><a href="index.php?page=cart" style="text-decoration: none ; color: white" class=test> Cart</a><a href="index.php?page=order_list" style="text-decoration: none ; color: white" class=test> Order</a>');
                }

        if (empty($_SESSION['login'])) {
                echo ('<a href="index.php?page=account" style="text-decoration: none; color: white" classe=test> Login/Sign In </a>');
                }
?>
    </div>

</body>

</html>