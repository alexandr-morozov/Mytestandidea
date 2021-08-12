<?php

$patternName = '/\w{3,}/'; // minimum 3 symbol
$patternMail = '/\w+@\w+\.\w+/'; // not limited symbol
$patternPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
//minimum 8 symbol, 1 one small and capital letter and 1 number

$flag = false;
while ($flag == false) {
    echo "Your name: ";
    $nameUser = readline();
    if (preg_match($patternName, $nameUser) == 0) {
        echo "\nPlease, try again (minimum 3 symbol)\n";
    } else {
        $flag=true;
    }
}

$flag = false;
while ($flag == false) {
    echo "Your email: ";
    $mailUser = readline(" ");
    if (preg_match($patternMail, $mailUser) == 0) {
        echo "\nPlease, try again \n";
    } else {
        $flag = true;
    }
}

$flag = false;
while ($flag == false) {
    echo "Your password: ";
    $passwordUser = readline(" ");
    if (preg_match($patternPassword, $passwordUser) == 0) {
        echo "\nPlease, try again (minimum 8 number)\n";
    } else {
        $flag = true;
        echo "Successfully!";
    }
}