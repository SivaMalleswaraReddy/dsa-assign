<?php
//pat
function pattern($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            if($j<=($n-$i)){
                print(" "."*"." ");}
            else {
                echo " * ";}
        }
        print ("\n");
    }
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($j <= ($n - $i)) {
                echo("  ");

            } else {
                echo "* ";
            }

        }
        echo PHP_EOL;
    }

function pattern2($row){
for($i=0; $i < $row; $i++){
    for($j = $i; $j < $row-1; $j++ ){
        print(" ");
    }

    for($k=0;$k<=$i;$k++){
        print("* ");
    }
    print(PHP_EOL);


}
}
pattern2(6);

}
pattern(5);

//exponent
function expo($n,$r){
    if($r!=0){
        return ($n * expo($n,$r-1));
    }
    return 1;
}
echo(expo(2,3));