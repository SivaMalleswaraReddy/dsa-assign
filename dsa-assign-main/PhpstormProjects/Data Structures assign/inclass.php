<?php
//Digit Extraction
function digitExtract($n){
    while($n >0){
        $a = $n %10;
        $n = $n - $a;
        $n = $n/10;
        echo"\r".$a;
    }

}
digitExtract(751);
//Plaindrome

function palindrome($str){
    if(strlen($str)==1){
        echo "\nPalindrome";
    }
    else {
        if(substr($str,0,1)==substr($str,strlen($str)-1,1)){
            return palindrome(substr($str,1,strlen($str)-2));
        }
        else{
            echo "\nNot a Palindrome";
        }
    }
}

function printDigits($n)
{
    if ($n > 0) {
        $digit = $n % 10;
        printDigits(intval($n / 10));
        print($digit . PHP_EOL);

    }
}

printDigits(751);