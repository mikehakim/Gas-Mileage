<?php



$valid_passwords = array ("mhakim" => "jonathan");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated) {
	header('WWW-Authenticate: Basic realm="My Realm"');
	header('HTTP/1.0 401 Unauthorized');
	die ("Not authorized");
}

// If arrives here, is a valid user.
echo "<p>Welcome $user.</p>";
echo "<p>Congratulation, you are into the system.</p>";











include 'dbconnection.php';

$num1 = @$_POST['num1'];
$num2 = @$_POST['num2'];
$result = @($_POST['num1'] / $_POST['num2']);

$calc = false;

if ($num1 < 0 || $num2 < 0) {
	echo "Not a <strong> POSITIVE </strong> number!";
	header('Location: ');
} else {

	$calc = true;

}





date_default_timezone_set('UTC');







if ($calc && isset($_POST['submit'])) {
	$currentDir = getcwd();
	header('Location: table.php');
	$sql = "INSERT INTO gascalc (numberOfGallons, milesTravelled, gasMileage, currentDate) VALUES (" . $_POST['num1'] . " , " . $_POST['num2'] . ", " . $result . ", NOW())";
	if(mysqli_query($link, $sql)) {
		echo "Records added successfully.";
	}  else {
		echo 'Did <strong> NOT </strong> enter an <strong>INTEGER</strong>';
		mysqli_error($link); header('Location: ');
	}
	/*if ($result->num_rows > 0) {
          echo "<table><tr><th>Number of Gallons</th><th>Miles Travelled</th></tr>";
          // output data of each row
          while ($row = $result->fetch_assoc()) {
             echo "<tr><td>" .$row["Number of Gallons"]. "" .$row["Miles Travelled"]."</td></tr>";
          }
          echo "</table>";
       } else {
          echo "0 results";
       }
       $conn->close();*/
	// Close Connection
	// mysqli_close($link);
	// Old connection writing to text file I know am writing to the databse.
	//$file = ($currentDir . "/gasoline.txt");
	# string concatenation
	// print_r($result);
	//$ser = serialize($$result);
	// $ser = serialize($ser);
	//file_put_contents($array . PHP_EOL, FILE_APPEND);
	//file_put_contents($file, $current_date . PHP_EOL, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html lang ="en">

<head>

	<style>

		body {

			background-color: peachpuff;


		}
		p {
			color: purple;
			font-size: 20px;
		}
		h5 {
			color: orangered;
			font-size: 40px;
			padding-left: 320px;
		}
		h1 {
			color: orangered;
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

	<a href="/table.php">Gas Mileage Data</a>

</head>



<html>


<body>
<h1>Gas Mileage Calculator </h1>


<form action="#" method="post">

	<h5><p>Miles Travelled:<input name="num1"></p></h5>
	<h2><p>Number of Gallons Used:<input name="num2"</p></h2>


	<h4><input type="submit" name="submit"></h4>







	</table>
</form>













</body>



</html>