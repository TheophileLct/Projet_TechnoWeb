<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/account.css" />
    <?php include 'header.php' ?>
    <title>Diabolo</title>
</head>

<body>
    <center>
        <form id="login" action="connected.php" method="post">
            <h1>Log In</h1>
            <fieldset id="inputs">
                <input name="username1" id="username" type="text" placeholder="Username" autofocus required>
                <h1></h1>
                <input name="password1" id="password" type="password" placeholder="Password" autofocus required>
            </fieldset>
            <fieldset id="actions">
                <input type="submit" id="submit" value="Log in">
            </fieldset>
        </form>
    </center>

    <center>
        <form id="create" action="conf_form.php" method="post">
            <h2>Create</h2>
            <fieldset id="inputs">
                <input name="username" id="username" type="text" placeholder="Username" autofocus required>
                <h2></h2>
                <input name='email' id="email" type="text" placeholder="E-mail" autofocus required>
                <h2></h2>
                <input name='password' id="password" type="password" placeholder="Password" autofocus required>
                <h2></h2>
                <input id="password" type="password" placeholder="Verify password" autofocus required>
            </fieldset>
            <fieldset id="actions">
                <input type="submit" id="submit" value="Create">
            </fieldset>
        </form>
    </center>
</body>

<footer>
    <?php include 'footer.php' ?>
</footer>

</html>