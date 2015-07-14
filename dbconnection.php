<?php



$user = 'root';
$password = 'root';
$db = 'myDB';
$host = 'localhost:8889';


// Establish MySQL Connection

/*$link = mysql_connect(
    "$host:$port",
    $user,
    $password
);
$db_selected = mysql_select_db(
    $db,
    $link
);*/

// Create connection
$link = new mysqli($host, $user, $password, $db);
//Check Connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}


if(!$db) {
    die('error connecting to database');
}

// echo "You have connected successfully!<br />";





?>