<?php

$x = 10;
$sum = 0;
$i = 0;

while($i <= $x) {
    if($i % 2 == 0) {
        $sum = $sum + $i;
    }
    $i++;
}

echo $sum;

?>