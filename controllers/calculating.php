
<style>
.errors{
	padding: 10px;
	font-weight: 700;
	color: red;
	text-shadow: 2px 2px black;
	font-size: 55px;
	font-family: cursive;
	font-weight: bold;
}
.ok{
	padding: 10px;
	font-weight: 700;
	color: green;
	text-shadow: 2px 2px black;
	font-size: 55px;
	font-family: cursive;
	font-weight: bold;
}
</style>
<?php
require_once '../db.php';
require_once 'function.php';
$data = $_POST;




if (isset($data['do_answer'])) {
	$errors = array();
	if($data['userAnswer'] == $data['trueAnswer']){
		echo "  ";
		echo '<div class="ok" style = "color: green;">Šaunu tu atsakei teisingai !!! </div><hr>';
	}
	else{
		echo '<div class="errors" style="color: red;"> Atsakymas neteisingas! Teisingas atsakymas yra:'. $data['trueAnswer'] .' </div><hr>';

	}
}

?>