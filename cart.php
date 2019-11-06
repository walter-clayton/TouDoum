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
		<input type="submit" name="submit" onclick="promo()" >
	</div>


		<h1 ><span>	TOTAL PRICE </span><p id="pricetotal" ></p></h1><hr>
		<h2>REDUCTION <span id = "reductionresult"></span></h2><hr>
		<h2>DELIVERY <span id = "deliveryresult"></span></h2><hr>
		<h2>PROMO <span id = "promoresult"></span></h2><hr>
		<h1 ><span>	TOTAL PRICE + DEDUCTIONS </span><p id="totaldeduct" ></p></h1><hr>

<div>
</div>





<script type="text/javascript">

const select = document.getElementById("lol");

	function add() {
var val = parseInt(document.getElementById("showamount").value);
console.log(val);
	val++
	price = 10;
var pricetotal = price * val;
console.log(pricetotal)

if (val >= 5) {

		var reductionshow =  " -5% " ;
		document.getElementById("reductionresult").innerHTML = reductionshow;


		}


document.getElementById("pricetotal").innerHTML = pricetotal;
document.getElementById("pricetotal").value = pricetotal;
document.getElementById("showamount").value = val;


	}

add();


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
			document.getElementById("promoresult").value = 10/100;
			var mikereduc = document.getElementById("promoresult").value;

			}

			else {
			console.log("wrong PROMOCODE")
			document.getElementById("promoresult").innerHTML = "WRONG CODE";

			}
	}


		document.getElementById("pricetotal").value = pricetotal;
		pricetotal = document.getElementById("priceshow").value;

		document.getElementById("reductionresult").value = 5/100;

		var reduction = document.getElementById("reductionresult").value;
		console.log(reduction);

		var currentoption = select.options[select.selectedIndex].value;

promo();

		var totaldeduct = pricetotal +  (pricetotal * mikereduc)
		console.log(totaldeduct);
		document.getElementById("totaldeduct").innerHTML = totaldeduct;


</script>






</body>
</html>