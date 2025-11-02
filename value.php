<?php

function addFive($num){
    $num += 25;
}

$x = 25;
addFive($x);
echo "$x  <br>";

function addFiveRef(&$num){
    $num *= 4;
}

$x = 15;
addFiveRef($x);
echo "$x <br>";

echo "Hello World";

?>