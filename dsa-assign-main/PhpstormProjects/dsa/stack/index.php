<?php
include("src/Stack.php");


$stackObj =  new Stack();
$stackObj->push(10);
$stackObj->push(12);
$stackObj->push(13);
$stackObj->push(14);
$stackObj->push(15);
$stackObj->push(20);
$stackObj->push(22);
$stackObj->push(23);
$stackObj->push(24);
$stackObj->pop();
$stackObj->print();


