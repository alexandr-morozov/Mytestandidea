<?php

/**
 * @param $number
 * @return string
 */


function palindrome16($number)
{
    $NewNumber = dechex($number);
    $ReverseNumber = strrev($NewNumber);
    if (strcmp($ReverseNumber, $NewNumber) == 0) {
        $result="Palindrome";
    } else {
        $result="Not palindrome";
    }
    return $result;
}
print_r(palindrome16(170));
