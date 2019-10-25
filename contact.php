<!DOCTYPE html>
<html>

<head>
    <title>Diabolo</title>
    <link rel="stylesheet" href="css/account.css" />
    <?php include 'header.php'?>
</head>

<body>
    <br>
    <br>
    <h1> N'hésitez pas à nous contacter notre équipe technique vous répondra dans les 48h. </h1>
    <pre>
    <form METHOD=POST ENCTYPE="text/plain" ACTION="mailto:diabolo@gmail.com"> 
    Nom:     <INPUT NAME=Nom size=35></br>
    Prénom:  <INPUT NAME=Prenom size=35></br>
    Mail:    <INPUT NAME=MAIL size=35></br>
    Message: <TEXTAREA NAME=Message rows=10 cols=40></TEXTAREA>
    </br>
             <INPUT TYPE=SUBMIT VALUE=Envoyer> <INPUT TYPE=RESET VALUE=Effacer>
    
    </form>
    </pre>
</body>

<footer>
    <?php include 'footer.php'?>
</footer>
</html>