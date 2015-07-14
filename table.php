<html>
<body>
<style type="text/css">
    th,td{
        border-width:0px 1px 1px 0px;
        width: 370px;
        color: purple;
        font-family: Tahoma;
        border-color: olive;
        background:lightcyan;
    }




</style>

<?php

include 'dbconnection.php';


// result = query
// row = res

$sql = "SELECT numberOfGallons, milesTravelled, gasMileage, currentDate FROM gascalc";
$result = $link->query($sql);

if ($result->num_rows > 0) {

    echo'<table border="1"><th > Number of Gallons </th><th> Miles Travelled </th><th> Gas Mileage </th> <th>Date</th>';

    while($row = $result->fetch_assoc() ) {

        echo "<tr><td>" . $row['numberOfGallons']. "</td><td>" . $row['milesTravelled']. "</td><td> " . $row['gasMileage']. "</td><td>" . $row['currentDate'] .  "</td></tr>";

}
    echo "</table>";
}



$link->close();


?>