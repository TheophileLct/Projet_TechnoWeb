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
           <a target="_blank" href = "product.php"   >
            <img src="img/Logo_Diabolo_2.png" alt="logo" class=logo >
            </a>
        </div>

       <div id="searchbar">
               <form action="research.php" class="formulaire" method="post">
               <input name=research class="champ" type="text" placeholder="Search..."/>
                    <input type="submit" id="submit" value="Search" />
                    
                </form>
                </div>

    <div class = connexion >
        <form id="login1" action="connected.php" method="post">
        <fieldset id="inputs">
            <input name="username1"  id="username" type="text" placeholder="Username" autofocus required>  
            <h1></h1>
            <input name="password1" id="password" type="password" placeholder="Mot de Passe" autofocus required>
        </fieldset>
        <fieldset id="actions">
            <input type="submit" id="submit" value="Se connecter">
        </fieldset>
    </form>

    </div>
        </div>
        
        <div class='produit'>
            <a href="product.php" style="text-decoration: none ; color: white" class=test > Produit </a>
            <a href="myaccount.php" style="text-decoration: none; color: white" class=test> Mon Compte </a>
            <a href="account.php" style="text-decoration: none; color: white" classe=test> Login/Sign In </a>
            <a href="cart.php" style="text-decoration: none ; color: white" class=test> Panier</a>
            </div> 

       

       
    </body>
</html>