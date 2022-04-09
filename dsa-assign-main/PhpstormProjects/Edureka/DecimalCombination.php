<?php

for($i=0;$i<10;$i++){
    for($a=0;$a<10;$a++){
        if($i==9 && $a==9){
            echo $i.$a;
            break;
        }
        else {
            echo $i.$a.',';
        }
    }

}