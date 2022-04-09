<?php

function linearSearch($arr,$l,$r,$x){

    if ($r < $l)
        return -1;
    if ($arr[$l] == $x)
        return $l;
    if ($arr[$r] == $x)
        return $r;
    return linearSearch($arr, $l+1, $r-1, $x);
}
$arr = array(10,30,40,50);
$x=30;
$l = 0;
$r = sizeof($arr) -1;
$i = linearSearch($arr,$l,$r,$x);
if($i != -1){
    echo $x," is present at index ",$i;
}
else{
    echo $x," is not Found";
}