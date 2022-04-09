<?php
$json = file_get_contents("inverted.txt");
$arr=array();
$lines = explode("\n", $json);
foreach ($lines as $line){
    $ags = explode(" ",$line);

            array_push($arr, $ags);


}
$json = json_encode($arr);
file_put_contents("a-z.txt",print_r($arr,true));
