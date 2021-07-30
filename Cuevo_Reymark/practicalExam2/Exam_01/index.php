<?php

$string = "madam";

function isPalindrome($str) {
    $str = preg_replace('/[^a-zA-Z]/', '', $str);
    $str = strtolower($str);
    $rev = strrev($str);

    if ($str == $rev) {
        return true;
    } else {
        return false;
    }
}

if (isPalindrome($string)) {
    echo $string.' is a palindrome';
} else {
    echo $string.' is not a palindrome';
}

?>