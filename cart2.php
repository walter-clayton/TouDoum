<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css">
	<script src="https://kit.fontawesome.com/b1ef133372.js" crossorigin="anonymous"></script>
</head>
<section class="Nb">
	<div class="container-header-section">
		<header class="header">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a href="./index.php"><img src="./images/Logo-TouDoum.png" alt="logo" id="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<!--  Depending on location: href="../index.php OR href="./index.php-->
							<a class="nav-link" href="./index.php"><i class="fas fa-home fa-2x"></i> <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a href="./films.php" class="btn btn-rounded" style="margin:5">Films</a>
						</li>
						<li class="nav-item">
							<a href="./series.php" class="btn btn-rounded" style="margin:5">Series</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0" style="margin-right:100">
						<a href="gallery.php" class="btn btn-outline-success my-2 my-sm-0">Search</a>
					</form>
					<li class="nav-item">
						<a href="./cart.php" class="btn btn-rounded" style="padding-top: 14%; margin:7"><i class="fas fa-shopping-cart"></i></a>
					</li>
				</div>
				<div class="signIn">
					<div class="signIn">
						<?php if (isset($_SESSION['auth'])) : ?>
							<a href="./account.php" class="btn btn-rounded-user"><span>Account</span>
								<a href="./logout.php" class="btn btn-rounded"><i class="fas fa-sign-in-alt"></i><span class="smIcon"> Log Out </span></a>
							<?php else : ?>
								<a href="./register.php" class="btn btn-rounded"><i class="fas fa-user-plus"></i><span class="smIcon"> Register </span></a>
								<a href="./login.php" class="btn btn-rounded"><i class="fas fa-sign-in-alt"></i><span class="smIcon"> Log In </span></a>
							<?php endif; ?>
					</div>

			</nav>

</section>

<section class="cart">
	<div id="center_column" class="center_column col-xs-12 col-md-12">
		<span class="cart_navigation">
			<a id="continuer" href="gallery.php" classe='continuer'><i class="fas fa-chevron-left"></i> Continuer mes achat</a>
		</span>
		<H1>Panier</H1>
		<div class="container">
			<div class="row">
				<div class="col">Produit</div>
				<div class="col">Description</div>
				<div class="col">Prix unitaire</div>
				<div class="col">Quantité</div>
				<div class="col">Supprimer</div>
				<div class="col">Total</div>
			</div>
			<div class="row">
				<div class="col"><a href="LIEN LALITA"><img src="./images/img1.jpg" alt="filme lalita" 100" height="120"></a></div>
				<div class="col"> Première sortie : 31 janvier 2019 <br>(Leicester Square) Réalisateur : Robert Rodriguez</div>

				<div class="col"><input type="text" id="priceshow" value="10"></div>
				<div class="col"><input type="text" id="showamount" value="0"></div>
				<div class="col">Supprimer</div>
				<div class="col">Total</div>
			</div>

		</div>




	</div>



</section>
<script type="text/javascript">
	const select = document.getElementById("lol");

	function add() {
		var val = parseInt(document.getElementById("showamount").value);
		console.log(val);
		val++
		var priceshow = parseInt(document.getElementById("priceshow").value);
		console.log(priceshow);
		price = 10;
		var pricetotal = price * val;
		console.log(pricetotal)

		if (val >= 5) {

			var reduction = (pricetotal - (pricetotal * 5 / 100)) + " you get 5% reduction ";
			console.log(reduction)
			document.getElementById("reductionresult").value = reduction;
		}


		var priceshow = pricetotal;
		document.getElementById("pricetotal").innerHTML = pricetotal;
		document.getElementById("showamount").value = val;
		document.getElementById("priceshow").innerHTML = priceshow;
		document.getElementById("reductionresult").innerHTML = reduction;

	}



	select.onchange = function() {

		var pricetotalCountry = document.getElementById("pricetotal").innerHTML;


		var belgium = document.getElementById("belgium").value;
		var addition = (pricetotalCountry + currentoption) + " FREE DELIVERY";

		var eu = document.getElementById("eu").value;
		var addition = (pricetotalCountry + currentoption) + " $2.5 FEE DELIVERY";

		var other = document.getElementById("other").value;
		var addition = (pricetotalCountry + currentoption) + " $5 FEE DELIVERY";


		document.getElementById("deliveryresult").innerHTML = currentoption;

		var currentoption = select.options[select.selectedIndex].value;
		console.log(currentoption);



	}


	function promo() {


		var promo = document.getElementById("promo").value;
		console.log(promo)


		if ('MikeEstTropCool' == promo) {
			console.log("you get 10% reduction")
			document.getElementById("promoresult").innerHTML = "you get 10% reduction";

		} else {
			console.log("wrong PROMOCODE")
			document.getElementById("promoresult").innerHTML = "wrong PROMOCODE";

		}
	}
</script>






</body>

</html>