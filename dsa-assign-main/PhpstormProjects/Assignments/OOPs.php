<?php

//1.Write a simple PHP class which displays the following string.'MyClass class has initialized !'
class my {
    public function __construct() {
        echo 'MyClass has initialized ! ';
    }
}
$user = new my;

//2.Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class

class alert{
   public $alert = 'Hello all, I am';
   public function msg($name){
       return $this->alert.$name;
   }
}
$myalert = new alert();
echo $myalert->msg(' Scott')."\n";

//3.Write a PHP class that calculates the factorial of an integer.

class factorial {
    public $n;

    public function result($n){
        $fact=1;
        for($i =1;$i<=$n;$i++){
            $fact *= $i;
        }
        return $fact;
    }
}
$newfact = new  factorial();
echo $newfact->result(5);

//4.Write a PHP class that sorts an ordered integer array with the help ofsort()function.Sample array :array(11, -2, 4, 35, 0, 8, -9)Output :Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )

class sortClass{
    public $array = [];
    public function sort(){
        sort($this->array);
        return $this->array;
    }

}
$newarray=array(11,-2,4,35,0,8,-9);
$sorted =  new sortClass($newarray);
print_r($sorted->sort());


//5.Calculate the difference between two dates using PHP OOP approach.


    $date1 = new DateTime("1981-11-03");
    $date2 = new DateTime("2013-09-04");
    $interval = $date1->diff($date2);
    echo "Difference : ".$interval->y. "years,". $interval->m."months,".$interval->d."days";

//6. Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.For example :$mycalc = new MyCalculator( 12, 6);echo $mycalc-> add(); // Displays 18echo $mycalc-> multiply(); // Displays 72

class MyCalculator {
    private $_fval, $_sval;
    public function __construct( $fval, $sval ) {
        $this->_fval = $fval;
        $this->_sval = $sval;
    }
    public function add() {
        return $this->_fval + $this->_sval;
    }
    public function subtract() {
        return $this->_fval - $this->_sval;
    }
    public function multiply() {
        return $this->_fval * $this->_sval;
    }
    public function divide() {
        return $this->_fval / $this->_sval;
    }
}
$mycalc = new MyCalculator(12, 6);
echo $mycalc-> add()."\n"; // Displays 18
echo $mycalc-> multiply()."\n"; // Displays 72
echo $mycalc-> subtract()."\n"; // Displays 6
echo $mycalc-> divide()."\n"; // Displays 2


//7. Write a PHP script to convert a string to Date and DateTime.Sample Date :'12-08-2004'Expected Output :2004-12-08Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format.

$dt = DateTime::createFromFormat('m-d-Y', '02-11-1998')->format('Y-m-d');
echo $dt;