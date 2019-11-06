<!-- HEADER -->


<!DOCTYPE html>
<html>
</style>
<head>
	<title></title>
</head>
<body>

	<div>
		
		<input type="text" id="showamount" value="0">
		<input type="text" id="priceshow" value="10">
		<button >ADD</button>	
 <img src="./images/img1.jpg" onclick ="add()">
	</div>
	<div>
	<select name="Country" id="lol" >
  <option value="0" id="belgium">BELGIUM</option>
  <option value="2.5" id="eu">EU +2.5</option> 
  <option value="5" id="other">OTHER +5</option> 
	</select>

	</div>
	<div>
		<input type="text" name="promo" placeholder="PROMO" id="promo">

	</div>	
	<div>
		<input type="submit" name="submit" onclick="promo()">
	</div>


		<h1 ><span>	TOTAL PRICE </span><p id="pricetotal" ></p></h1><hr>
		<h2>REDUCTION <span id = "reductionresult"></span></h2><hr>
		<h2>DELIVERY <span id = "deliveryresult"></span></h2><hr>
		<h2>PROMO <span id = "promoresult"></span></h2><hr>
	
<div>
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

		var reduction =  (pricetotal - (pricetotal * 5/100)) + " -5% " ;
		console.log(reduction)
		document.getElementById("reductionresult").value = reduction;
		document.getElementById("reductionresult").innerHTML = reduction;

		}


	var priceshow = pricetotal;
document.getElementById("pricetotal").innerHTML = pricetotal;
document.getElementById("showamount").value = val;
document.getElementById("priceshow").innerHTML = priceshow;

	}



select.onchange = function() {

var  pricetotalCountry = document.getElementById("pricetotal").innerHTML;

var currentoption = select.options[select.selectedIndex].value;
console.log(currentoption);
document.getElementById("deliveryresult").innerHTML = currentoption;

if (currentoption === "0") {
	var addition = " FREE";
}

else if (currentoption === "2.5"){
	var addition = " +$2.5";
}

else {

var addition = " +$5";

}


document.getElementById("deliveryresult").innerHTML = addition;

	}


		function promo() {


		var promo = document.getElementById("promo").value;
		console.log(promo)


			if ('MikeEstTropCool' == promo) {
				console.log("you get 10% reduction")
			document.getElementById("promoresult").innerHTML = "you get 10% reduction";

			}

			else {
			console.log("wrong PROMOCODE")
			document.getElementById("promoresult").innerHTML = "WRONG CODE";

			}
	}

</script>






</body>
</html>