<?php
require('vendor/autoload.php');

use Acme\Colors\Orange;
use Acme\Fruit\Orange as Orangef;

$o = new Orange;

$o->getName();

$o = new Orangef;

$o->getName();

