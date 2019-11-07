<!-- HEADER -->

<!DOCTYPE html>
<html>

<head>
<title></title>
</head>
<body>

<div>
    <img src="./images/img1.jpg">
</div>
        <input type="text" id="priceshow" value="10">
        <div>
        	<input type="text" id="showamount" value="0">
        </div>

 <input type="submit" value="+" onclick ="plus()">    
 <input type="submit" value="-" onclick = "moins()">
		

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


    <h1 ><span> TOTAL PRICE </span><p id="pricetotal" ></p></h1><hr>
    <h2>REDUCTION <span id = "reductionresult"></span></h2><hr>
    <h2>DELIVERY <span id = "deliveryresult"></span></h2><hr>
    <h2>PROMO <span id = "promoresult"></span></h2><hr>
    <h1 ><span> TOTAL PRICE + DEDUCTIONS </span><p id="totaldeduct" ></p></h1><hr>
<div>
</div>
<button onclick = "clickTotal()">DEDUCT TOTAL</button>
<script type="text/javascript">


const select = document.getElementById("lol");


document.getElementById("pricetotal").innerHTML = pricetotal;
document.getElementById("pricetotal").value = pricetotal;
var val = parseInt(document.getElementById("showamount").value);
document.getElementById("showamount").value = val;

price = 10;
var pricetotal = plus();
console.log(plus())

	function plus() {
			var val = parseInt(document.getElementById("showamount").value);
			val++

			if (val < 5) {
			price = 10;
			}

			else {
			var reductionshow = " -5% " ;
			document.getElementById("reductionresult").innerHTML = reductionshow;
			price = 9.5;
			}

			document.getElementById("showamount").value = val;
			var pricetotal = price * val
			return pricetotal

			}



	function moins() {

		var val = parseInt(document.getElementById("showamount").value);
			val-- ;

		
		if (val >= 5) {
		var reduction =  (pricetotal - (pricetotal * 5/100)) + " -5% "  ;
		console.log(reduction)
		
		document.getElementById("reductionresult").value = reduction;
		document.getElementById("reductionresult").innerHTML = reduction;
		
		}

		 else if (val < 5){
		reduction = 0;
	
		document.getElementById("reductionresult").value = reduction;
		document.getElementById("reductionresult").innerHTML = reduction;
		}

		


		document.getElementById("pricetotal").innerHTML = pricetotal;
		document.getElementById("showamount").value = val;


		return val

			}

select.onchange = function() {

var pricetotalCountry = document.getElementById("pricetotal").innerHTML;

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
    console.log("promo" + promo)

        if ('MikeEstTropCool' == promo) {
            console.log("you get 10% reduction")
        document.getElementById("promoresult").innerHTML = "you get 10% reduction";
        document.getElementById("promoresult").value = 10/100;
        var mikereduc = (document.getElementById("promoresult").value);
        console.log("mikereduc " + mikereduc)
		return mikereduc
        }

        else {
        console.log("wrong PROMOCODE")
        document.getElementById("promoresult").innerHTML = "WRONG CODE";
        mikereduc = 0
        return mikereduc

        }
}


function clickTotal() {


	
		console.log("promo " + promo())
		console.log("total " + plus())
		console.log("total " + moins())


    console.log("pricetotal " + pricetotal)

    var currentoption = select.options[select.selectedIndex].value;
	console.log("currentoption " + currentoption)


    totaldeduct = (promo() * plus()) + plus();
    document.getElementById("totaldeduct").innerHTML = totaldeduct;
    console.log("totaldeduct " + totaldeduct);

}

</script>


</body>
</html>

