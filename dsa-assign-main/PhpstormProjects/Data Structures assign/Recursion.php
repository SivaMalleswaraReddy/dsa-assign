<?php

/* Without Using Recursion
function factorial($n){
    $fact = 1;
    for($i =1;$i<=$n;$i++){

            $fact = $fact * $i;
    }
    return $fact;

}
echo (factorial(5));

//With Using Recursion
function fact($n){
    if($n==1) return $n;
    else return $n * fact($n-1);
}
echo(fact(4));*/

function gcd($a,$b){
    if($b==0){
        return $a;
    }
    else{
        return gcd($b,($a %$b));
    }
}
function lcm($a,$b){
    return ($a / gcd($a,$b)) * $b;
}

echo(gcd(14,18));
echo(lcm(2,3));