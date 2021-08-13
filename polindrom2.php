<?php

$startWord = "dovod";

$new_word = strrev($startWord);
if (strcmp($startWord, $new_word) == 0) {
    echo("True");
} else {
    echo("False");
}