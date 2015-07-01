<?php

// This is my first name
$name = "Hampton";


$location = "Orlando, FL";

/*
This is my Full Name
of Welsh Origin
*/
$full_name = "Hampton Paulk";

// use full name as our name
$name = $full_name;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <title><?php echo $name ?> | Treehouse Profile</title>
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
<section class="sidebar text-center">
    <div class="avatar">
        <img src="img/avatar.png" alt="<?php echo $name ?>">
    </div>
    <h1><?php echo $name ?></h1>
    <p><?php echo $location ?></p>
    <hr />
    <p>Welcome to PHP Basics!</p>
    <hr />
    <ul class="social">
        <li><a href=""><span class="icon twitter"></span></a></li>
    </ul>
</section>
<section class="main">
      <pre>
        <?php
        $names = array(
            'chris',
            'mike',
            'amy',
            'jane'
        );

        $one = 1;
        $two = 2;

        echo $one;

        print_r($names);
        ?>
      </pre>
</section>
</body>
</html>