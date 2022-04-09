<?php
$d = readline("Enter The Account no");
$amt = readline("Enter Amount");

$json = file_get_contents('imp.json');

$json_data = json_decode($json, true);

$json_data['users'][$d]['Amount'] =  $json_data['users'][$d]['Amount']  + $amt ;
$json_newdata =  json_encode($json_data);
file_put_contents('imp.json',$json_newdata);