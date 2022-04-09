<?php

function is_balanced($s)
{
    $str = str_split($s);
    $stack = array();
    $strk = array();
    $strk2=array();
    foreach ($str as $value) {
        if ($value == '(') {
            array_push($stack, $value);
        } else if ($value == ')') {
            array_pop($stack);}


       else {
            array_push($strk, $value);
        }
    }
    foreach($strk as $vals){
        if ($vals == '*' || $vals== '-'){
             $r=array_pop($vals);
             array_push($strk2,$r);
        } else {
            array_push($strk2,$vals);
        }
    }
    print_r($strk2);
    if (sizeof($stack) % 2 == 0) {
            echo "Not Balanced";
        } else
            echo "Balanced";

    }
$arr = '((2*3)-4)';
is_balanced($arr);
