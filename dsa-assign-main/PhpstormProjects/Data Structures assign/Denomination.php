<?php

function denomination($amount,$coins)
{

    $size = count($coins)-1;
    $counter = [];
    for ($i = 0; $i < $size; $i++) {
        if ($amount >= $coins[$i]) {
            $counter[$i] = intval($amount / $coins[$i]);
            $amount -= $counter[$i] * $coins[$i];
        }
        echo($coins[$i] . " Rupee Coins : " . $counter[$i] . "\n");


    }
}
$coins = array(10, 5, 2, 1);
denomination(47,$coins);
