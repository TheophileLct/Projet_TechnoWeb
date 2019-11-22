
<?php
session_start();
?>
<!DOCTYPE html>
<html>

<header>
        <?php include 'header.php' ?>
</header>

</html>

<?php
include "bdd.php";

if (!empty($_GET)&&!empty($_GET['page'])){
	if ($_GET['page'] === 'product'){
		include ('product.php');
	} elseif($_GET['page']=== 'cart_save'){
		include('cart_save.php');
	} elseif($_GET['page']==='about'){
		include('about.php');	
	} elseif($_GET['page']==='account'){
		include('account.php');
	}elseif($_GET['page']==='cart'){
		include('cart.php');
	}elseif($_GET['page']==='conf_form'){
		include('conf_form.php');
	}elseif($_GET['page']==='connected'){
		include('connected.php');
	}elseif($_GET['page']==='contact'){
		include('contact.php');
	}elseif($_GET['page']==='myaccount'){
		include('myaccount.php');
	}elseif($_GET['page']==='myaccount_updated'){
		include('myaccount_updated.php');
	}elseif($_GET['page']==='research'){
		include('research.php');
	}elseif($_GET['page']==='researchpage'){
		include('researchpage.php');
	}elseif($_GET['page']==='search'){
		include('search.php');
	}elseif($_GET['page']==='product_1'){
		include('product_1.php');
	}elseif($_GET['page']==='product_2'){
		include('product_2.php');
	}elseif($_GET['page']==='product_3'){
		include('product_3.php');
	}elseif($_GET['page']==='logout'){
		include('logout.php');
	}

}else {
	include ('product.php');
}

?>
<html>

<footer>
        <?php include 'footer.php' ?>
</footer>
</html>
