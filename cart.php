<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css">
	<script src="https://kit.fontawesome.com/b1ef133372.js" crossorigin="anonymous"></script>
</head>

</header>

<body>
	<div class=Cart>
		<div class=gauche>
			<div class="gaucheG">
				<div class=CartImage>
					<img src="./images/img1.jpg">
				</div>
			</div>
			<div class=gaucheD>
				<div class=CartPrix>
					<input type="text" id="showamount" value="0">
					<input type="text" id="priceshow" value="10">
					<button>ADD</button>
				</div>
				<div class=CartPromo>
					<input type="text" name="promo" placeholder="PROMO" id="promo">
					<input type="submit" name="submit" onclick="promo()">
				</div>
			</div>
		</div>

	</div>

	<div class=droit>
		<h1>Panier</h1>
		<p>nombre d'article</p>
		<p>sous total</p>
		<hr>
		<h2>Reduction<span id="reductionresult"></span></h2>
		<hr>
		<hr>
		<h2>Promo<span id="promoresult"></span></h2>
		<hr>
		<div class=CartCountry>
			<select name="Country" id="lol">
				<option value="0" id="belgium">BELGIUM</option>
				<option value="2.5" id="eu">EU +2.5</option>
				<option value="5" id="other">OTHER +5</option>
			</select>
			<h2>Delivery<span id="deliveryresult"></span></h2>
			<h1><span> Total Price </span>
				<p id="pricetotal"></p>
			</h1>
		</div>

	</div>
	</div>

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