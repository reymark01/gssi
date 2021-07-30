<?php

$n = 10;

function isPerfectSquare($num) {
    $s = (int)(sqrt($num));
    if ($s * $s == $num) {
        return true;
    } else {
        return false;
    }
}

for ($i = 1; $i <= $n; $i++) {
    if (isPerfectSquare(5 * $i * $i + 4)) {
        echo $i." is a Fibonacci Number<br>";
    } elseif (isPerfectSquare(5 * $i * $i - 4)) {
        echo $i." is a Fibonacci Number<br>";
    } else {
        echo $i." is not a Fibonacci Number<br>";
    }
}