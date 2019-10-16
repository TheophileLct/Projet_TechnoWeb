
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/account.css" />
    <?php include 'header.php'?>
    
</head>

<body>
    <center>
 	  <form id="login">
        <h1>Log In</h1>
        <fieldset id="inputs">
            <input id="username" type="text" placeholder="E-mail" autofocus required>  
            <h1></h1>
            <input id="password" type="password" placeholder="Mot de Passe" autofocus required>
        </fieldset>
        <fieldset id="actions">
            <input type="submit" id="submit" value="Se connecter">
        </fieldset>
    </form>
</center>

<center>
    <form id="create" action="conf_form.php" method="post">
        <h2>Create</h2>
        <fieldset id="inputs">
         <input id="username" type="text" placeholder="Username" autofocus required> 
            <h2></h2>
            <input id="email" type="text" placeholder="E-mail" autofocus required> 
            <h2></h2>
            <input id="password" type="password" placeholder="Mot de passe" autofocus required>
            <h2></h2>
            <input id="password" type="password" placeholder="Vérifier votre mot de passe" size="22"autofocus required>
        </fieldset>
        <fieldset id="actions">
            <input type="submit" id="submit" value="Créer">
        </fieldset>
        </form>
</center>
</body>

<footer>
<?php include 'footer.php'?>
</footer>
</html>
