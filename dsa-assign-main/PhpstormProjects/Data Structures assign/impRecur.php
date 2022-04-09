<?php

//Print Odd Numbers

function odd($n){
    $odd = 1;
    for($i=0;$i<=$n;$i++){
        print($odd.",");
        $odd+=2;
    }
}
//odd(5);


//3rd Question
function isFib($n){
    $first = 0;
    $second = 1;
    $third = $first+$second;
    if($n==0){
        return 0;
    }
    while($third <=$n){
        $first = $second;
        $second = $third;
        $third = $first+$second;
    }
     if(abs($third - $n) >= abs($second-$n)){
        echo( $second);
    }
    else{
        echo($third);
    }
}
function isPrime($n){
    for($i=2;$i<= $n/2;$i++){
        if($n % $i ==0){
            return 0;}
        return $n;
    }
}
function isEven($n){
    if($n%2==0){
        echo($n);
    }
    else if(isPrime($n)) {
        echo($n);
    }
    else{
        isFib($n);
    }
}
isEven(16);