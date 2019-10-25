<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="css/search.css" />
    <?php include 'header.php'?>
    <title>Diabolo</title>
</head>

<body>
 	
<div id="searchbar" action="research.php" method="post">
    <form action="" class="formulaire">
    <input name="research"class="champ" type="text" placeholder="Search..."/>
    <input type="submit" id="submit" value="Search">                
    </form>
</div>

</body>

<footer> <?php include 'footer.php'?></footer>
</html>