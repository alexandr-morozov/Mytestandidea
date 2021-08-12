
<?php

$patternName = '/\w{3,}/'; // minimum 3 symbol
$patternMail = '/\w+@\w+\.\w+/'; // not limited symbol
$patternPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
//minimum 8 symbol, 1 one small and capital letter and 1 number

function CheckInput($pattern){
    $flag=false;
    while ($flag == false){
        $inputUser = readline(" ");
        if (preg_match($pattern, $inputUser) == 0) {
            echo "\nPlease, try again \n";
        } else {
            $flag=true;
        }
    }
}
echo"Your name: ";
CheckInput($patternName);
echo"Your mail: ";
CheckInput($patternMail);
echo"Your password: ";
CheckInput($patternPassword);
echo"Successfully!";