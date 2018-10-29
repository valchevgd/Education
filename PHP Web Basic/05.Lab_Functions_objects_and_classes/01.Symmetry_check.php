<?php

function isPalindrome($string){

    for ($i = 0; $i < strlen($string) / 2; $i++){

        if ($string[$i] != $string[strlen($string) - 1 - $i]){
            return false;
        }
    }

    return true;
}

if (isPalindrome(readline())){
    echo 'true';
}else{
    echo 'false';
}