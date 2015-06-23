<!DOCTYPE html>
<html lang ="en">

<?php

if (isset($_POST['submit']))
{
	$result=$_POST['num1']/$_POST['num2'];
}
?>
<html>

<body>
<h1>Gas Mileage Calculator </h1>


<form action="#" method="post">

	<p>Miles Travelled:<input name="num1"></p>
	<p>Number of Gallons Used:<input name="num2"</p>
	<p>Gas Mileage: <input value="<?php if (isset($result)) echo $result ?>"></p>
	<style>


	p {

		color: darkred;

		font-size: 20px;
	}

	h1 {

		color: darkcyan;
		font-size: 40px;

	}
	</style>
	<input type="submit" name="submit">

</table>
</form>



</body>



</html>
