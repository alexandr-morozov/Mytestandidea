<?php

/**
 * @param int $number
 * @return string
 */
echo"Input number: ";
$input=readline(" ");

function PalindromeAllSystem($number)
{
    //16 system
    $NewNumberSystem16 = dechex($number);
    $ReverseNumberSystem16 = strrev($NewNumberSystem16);

    if (strcmp($ReverseNumberSystem16, $NewNumberSystem16) == 0) {
        $resultSystem16="Palindrome in 16 System ($NewNumberSystem16)";
    } else {
        $resultSystem16="Not palindrome in 16 System ($NewNumberSystem16)";
    }

    //2 system
    $NewNumberSystem2 = decbin($number);
    $ReverseNumberSystem2 = strrev($NewNumberSystem2);

    if (strcmp($ReverseNumberSystem2, $NewNumberSystem2) == 0) {
        $resultSystem2="Palindrome in 2 System($NewNumberSystem2)";
    } else {
        $resultSystem2="Not palindrome in 2 System($NewNumberSystem2)";
    }

    //8 system
    $NewNumberSystem8 = decoct($number);
    $ReverseNumberSystem8 = strrev($NewNumberSystem8);

    if (strcmp($ReverseNumberSystem8, $NewNumberSystem8) == 0) {
        $resultSystem8="Palindrome in 8 System($NewNumberSystem8)";
    } else {
        $resultSystem8="Not palindrome in 8 System($NewNumberSystem8)";
    }

    //10 system
    $NewNumberSystem10=$number;
    $ReverseNumberSystem10 = strrev($NewNumberSystem10);

    if (strcmp($ReverseNumberSystem10, $NewNumberSystem10) == 0) {
        $resultSystem10="Palindrome in 10 System($NewNumberSystem10)";
    } else {
        $resultSystem10="Not palindrome in 10 System($NewNumberSystem10)";
    }

    return array($resultSystem16, $resultSystem2, $resultSystem8, $resultSystem10);
}


list ($answer16, $answer2, $answer8, $answer10)=PalindromeAllSystem($input);
echo $answer16, "\n", $answer2, "\n", $answer8, "\n", $answer10;
