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
               <form action="" class="formulaire">
               <input class="champ" type="text" placeholder="Search..."/>
                    <input class="bouton" type="button" value="Search" />
                    
                </form>
                </div>

            <div class="connexion">
                <div>
                <label for="username">Pseudo :</label>
                <input type="text" id="username" name="username">
            </div>

            <div>
                <label for="pass">Mot de passe :</label>
                <input type="password" id="pass" name="password"
                    minlength="8" required>
            </div>
        

        <input type="submit" value="Sign in">
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