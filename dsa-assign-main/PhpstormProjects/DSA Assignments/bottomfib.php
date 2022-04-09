<?php

function fib($n){
    if($n=1){
        return $n;
    }
    return fib($n-1) +fib($n-2);
}
echo(fib(5));
function knapSack($W, $wt, $val, $n)
{
    // Base Case
    if ($n == 0 || $W == 0)
        return 0;

    if ($wt[$n - 1] > $W)
        return knapSack($W, $wt, $val, $n - 1);

    // Return the maximum of two cases:
    // (1) nth item included
    // (2) not included
    else
        return max($val[$n - 1] +
            knapSack($W - $wt[$n - 1],
                $wt, $val, $n - 1),
            knapSack($W, $wt, $val, $n-1));
}
