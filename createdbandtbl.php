

// Creating Table and the Database
<?php


 select db
mysqli_select_db($db);

$sql="SELECT * FROM gascalc";

$records=mysql_query($sql);*/



//  " are for special char strings and ' are for non special char strings


 Create database

   $sql = "CREATE DATABASE IF NOT EXISTS myDB";
    if ($link->query($sql) === TRUE) {
        echo "Database created successfully <br />";
    } else {
        echo "Error: creating database " . $db->error;

    }

$link->close();




if(!$db) {
    die('error connecting to database');
}

echo 'you have connected successfully <br />';


 Create the Table
$tbl = "CREATE TABLE `myDB`.`gascalc` (
`uniqueid` INT NOT NULL ,
`numberOfGallons` INT NOT NULL ,
`milesTravelled` INT NOT NULL ,
`gasMileage` INT NOT NULL ,
`date` INT NOT NULL )
ENGINE = InnoDB";

if ($link->query($tbl) === TRUE) {
    echo "Table MyDB created successfully";
} else {
    echo "Error creating table: " . $link->error;
}

    // close connection
   //  $link->close();*/

?>


<!--<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

</body>
</html>-->







