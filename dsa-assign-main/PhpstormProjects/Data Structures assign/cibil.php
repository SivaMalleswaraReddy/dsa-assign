<?php
function difference($a,$b){
    if($b<$a){
        $a-=$b;
        return $a;
    }
    elseif ($b>$a){
        echo("High Risk");
    }
}

function credit($i,$x)
{
    if ($i >= 600 && $i <= 900) {
        if ($x >= 2000 && $x <= 10000) {
            return ($i / 900) * 8000;
        } elseif ($x > 10000 && $x <= 30000) {
            return ($i / 900) * 10000;
        } elseif ($x > 30000 && $x <= 50000) {
            return ($i / 900) * 12000;
        } elseif ($x > 50000) {
            return ($i / 900) * 15000;
        } else
            echo("Risk Credit Score");
    }

}
function buy($a,$b){
        if($a >$b){
        $a -= $b;
        return $a;}
        else{
            print("\nPayment is Not Possible");
        }

}
//Driver code
// details like credit Score,networth,liabiltes will be feteched from databases.
//for running purpose fake driver code is used.

$creditScore =readline("Enter credit Score:");
$networth=readline("\nEnter  net Worth:");
$liabiltes=readline("\nEnter liabiltes:");
$difference=difference($networth,$liabiltes);
$creditLimit = credit($creditScore,$difference);
echo("\n$creditLimit\n");
$costOfItem = readline("\nEnter cost of the item:");
$result = buy($creditLimit,$costOfItem);
echo("\nUpdated Credit Limit :$result");