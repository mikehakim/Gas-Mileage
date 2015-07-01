<?php


$file = "gasoline.txt";

$content = file_get_contents($file);



$lines = explode("\n", $content);

foreach ($lines as $newline)  {

    echo $newline . '<br>';
}


?>
