<!DOCTYPE html>
<html lang ="en">



<?php

if (isset($_POST['submit'])) {

	$result = @($_POST['num1'] / $_POST['num2']);

	$result = @($_POST['num1'] / $_POST['num2']);

	$current_date = date("d-m-y");

	date_default_timezone_set('America/Los_Angeles');




	$file = "/Users/mhakim/Sites/Gas-Mileage/gasoline.txt";

	// print_r($result);

	$ser = serialize($result);
	$ser = serialize($ser);


	file_put_contents($file, $result . PHP_EOL, FILE_APPEND);
	file_put_contents($file, $current_date, FILE_APPEND);
}

?>







<html>

<body>
<h1>Gas Mileage Calculator </h1>


<form action="#" method="post">

	<h5><p>Miles Travelled:<input name="num1"></p></h5>
	<h2><p>Number of Gallons Used:<input name="num2"</p></h2>

	<style>






		p {

			color: darkred;

			font-size: 20px;
		}

		h5 {

			color: darkcyan;
			font-size: 40px;
			padding-left: 320px;


		}
		h1 {

			color: darkcyan;
			font-size: 40px;
			padding-left: 290px;

		}

		h2 {

			padding-left: 244px;
		}

		h3 {

			padding-left: 410px;
		}

		h4 {

			padding-left: 490px;
		}

	</style>
	<h4><input type="submit" name="submit"></h4>

	</table>
</form>

<h3><p>Gas Mileage:<?php if (count($_POST)>0) echo "$result"; ?></p></h3>




</body>



</html>
