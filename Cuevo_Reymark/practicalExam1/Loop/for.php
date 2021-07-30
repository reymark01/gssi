<?php

$num1 = 0;
$num2 = 1;
$x = 10;


echo $num1.' ';
echo $num2.' ';

for ($i=2; $i < $x; $i++) {
    $new = $num1 + $num2;   
    echo $new.' ';
    $num1 = $num2;
    $num2 = $new;
}

?>
