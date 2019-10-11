
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/account.css" />
    <?php include 'header.php'?>
    
</head>

<body>
    
 	  <form id="login">
        <h1>Log In</h1>
        <fieldset id="inputs">
            <input id="username" type="text" placeholder="E-mail" autofocus required>  
            <h1></h1>
            <input id="password" type="password" placeholder="Password" autofocus required>
        </fieldset>
        <fieldset id="actions">
            <input type="submit" id="submit" value="Log in">
        </fieldset>
    </form>


    <form id="create">
        <h2>Create</h2>
        <fieldset id="inputs">
         <input id="name" type="text" placeholder="Name" autofocus required> 
            <h2></h2>
            <input id="surname" type="text" placeholder="Surname" autofocus required> 
            <h2></h2>
            <input id="email" type="text" placeholder="E-mail" autofocus required> 
            <h2></h2>
            <input id="password" type="password" placeholder="Password" autofocus required>
            <h2></h2>
            <input id="password" type="password" placeholder="Verified Password" autofocus required>
        </fieldset>
        <fieldset id="actions">
            <input type="submit" id="submit" value="Create">
        </fieldset>
        </form>

</body>

<footer>
<?php include 'footer.php'?>
</footer>
</html>
