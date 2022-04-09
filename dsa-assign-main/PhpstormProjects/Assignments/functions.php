<?php
/* 1)Write a function to calculate the factorial of a number (a non-negativeinteger). The function accepts the number as an argument */
function fact($n)
    {
        if($n==1){
            return 1;}

            else {return ($n) * fact($n - 1);}

    }
    print_r(fact(5));

/*2.Write a function to check whether a number is prime or not.Note: A prime number (or a prime) is a natural number greater than 1 thathas no positive divisors other than 1 and itself. */
function prime($num){
    if($num==0) return 0;
    for($i=2;$i<=$num/2;$i++){
        if($num % $i==0) return 0;

    }
    return 1;
}
$a=15;
$p = prime($a);
if($p ==0){ echo ("$a is prime number");}
else {echo("$a is not prime number");}
/*3.Write a function to reverse a string.*/
function reverse($string){
    return strrev($string);
}
echo reverse(andna);

/* 4.)Write a function to sort an array. */
function sorting($numbers)
{
    sort($numbers);

    $arrlength = count($numbers);
    for ($x = 0; $x < $arrlength; $x++) {
        print_r($numbers[$x]." ");
    }
}

    $numbers = array(45, 64, 3, 23, 14);
    $p = sorting($numbers);
/* 5.)Write a function to calculate the factorial of a number (a non-negativeinteger). The function accepts the number as an argument.2.Write a function to check whether a number is prime or not.Note: A prime number (or a prime) is a natural number greater than 1 thathas no positive divisors other than 1 and itself.3.Write a function to reverse a string.4.Write a function to sort an array.5.Write a PHP function that checks whether a string is all lowercase.
*/function strlow($str){
    for($c=0;$c <strlen($str);$c++){
        if(ord($str[$c])>= ord('A') && ord($str[$c])<= ord('Z')) {
            return false;
        }
    }
    return true;
}
var_dump(strlow('abc def ghi'));
/*Write a PHP function that checks whether a passed string is apalindrome or not? */

function palind($str) {
    if($str == strrev($str)) return 1;
    else return 0;
}
$b = 'madam';
$r = palind($b);
if($r == 1){
    print_r(" $b is a Palindrome");
}
else{
    print_r("$b is not a Palindrome");
}

