<?php

/* Question 1
/$color = array(' blue ', 'green', ' black', ' white ', ' red'); Write a scriptwhich will display the following string -The memory of that scene for me is like a frame of film forever frozen at thatmoment: the red carpet, the green lawn, the white house, the leaden sky.and the words 'red', 'green' and 'white' will come from $color.
*/
 $color = array(' blue ', 'green', ' black', ' white ', ' red');
echo "The memory of that scene for me is like a frame of film forever frozen at thatmoment: the $color[4] carpet, the $color[1] lawn, the. $color[3] house, the leaden sky.";

/* Question 2
// $color = array('Black', 'green', 'red'')
// Write a PHP script which will display the colors in the following way:
// Output:1.Black, Green, Red,
// •green
// •red
// •white
// $color = array('Black', 'green', 'red'); */

foreach($color as $val){
     echo $val.", ";
 }
echo "\n";
echo "<ul>";
foreach($color as $val){
    echo "<li>".$val."</li>";
 }
echo "</ul>";
//Question 3
// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg","Belgium"=> "Brussels", "Denmark"=>"Copenhagen","Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava","Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens","Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon","Spain"=>"Madrid", "Sweden"=>"Stockholm", "UnitedKingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius","Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest","Latvia"=>"Riga", "Malta"=>"Valetta", "Austria"=> "Vienna", "Poland"=>"Warsaw") ;
//Create a PHP script which displays the capital and country name from theabove array $ceu. Sort the list by the capital of the country.Sample Output :The capital of Netherlands is Amsterdam The capital of Greece is Athens

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg","Belgium"=> "Brussels", "Denmark"=>"Copenhagen","Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava","Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens","Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon","Spain"=>"Madrid", "Sweden"=>"Stockholm", "UnitedKingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius","Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest","Latvia"=>"Riga", "Malta"=>"Valetta", "Austria"=> "Vienna", "Poland"=>"Warsaw") ;

foreach($ceu as $key=>$val){
   echo "The capital of ".$key." is ".$val."\n";
 }
//Question 4
// $x = array(1, 2, 3, 4, 5);Delete an element from the above PHP array. After deleting the element,integer keys must be normalized.
// Sample Output :
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }
$x = array(1, 2, 3, 4, 5);
var_dump($x);
unset($x[3]);
$x = array_values($x);
echo '';
var_dump($x);

//Question 5
// $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to get the first element of the above array.
// Expected result : white
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4];

//Question 6
// Write a PHP script that inserts a new item in an array in any position.
// Expected Output :
// Original array :1 2 3 4 5
// After inserting '$' the array is :1 2 3 $ 4 5
$num = array(1,2,3,4,5);
foreach($num as $val){
     echo $val." ";
 }
echo "\n";
array_splice($num,3,0,"$");
 foreach($num as $val){
     echo $val." ";
 }

//Question 7
// Write a PHP script to sort the following associative
// array :array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
// a)ascending order sort by value
// b)ascending order sort by Key
// c)descending order sorting by Value
// d)descending order sorting by Key
$data=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
 echo "Ascending -> value \n";
asort($data);
foreach($data as $key=>$val){
    echo $key." ".$val."\n";
}
 echo "\n";
 echo "Ascending -> Key \n";
 ksort($data);
 foreach($data as $key=>$val){
     echo $key." ".$val."\n";
 }
 echo "\n";
 echo "Decending -> value \n";
 arsort($data);
 foreach($data as $key=>$val){
     echo $key." ".$val."\n";
 }
 echo "\n";
 echo "Descending -> value \n";
 krsort($data);
foreach($data as $key=>$val){
    echo $key." ".$val."\n";
 }

//Question 8
// Write a PHP script to calculate and display average temperature, fivelowest and highest temperatures.
// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,73, 68, 62, 73,72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// Expected Output :Average Temperature is : 70.6
// List of seven lowest temperatures : 60, 62, 63, 63, 64,
// List of seven highest temperatures : 76, 78, 79, 81, 85,

$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73];
$totalTemp=0;
foreach($temp as $val){
     $totalTemp+=$val;
 }
 $avg=$totalTemp/(count($temp));
echo "Average Temperature is : ".$avg;
echo "\n";
 sort($temp);
 echo "List of seven lowest temperatures : ";
 $i=0;
 while($i<7){
     echo $temp[$i]." ";
     $i+=1;
 }
 echo "\n";
 echo "List of seven highest temperatures: ";
 $i=count($temp)-7;
 while($i<count($temp)){
     echo $temp[$i]." ";
     $i+=1;
 }

// Question 9
// Write a PHP program to sort an array of positive integers using theBead-Sort Algorithm.
// According to Wikipedia "Bead-sort is a natural sortingalgorithm, developed by Joshua J. Arulanandham, Cristian S. Calude andMichael J. Dinneen in 2002. Both digital and analog hardwareimplementations of bead sort can achieve a sorting time of O(n); however,the implementation of this algorithm tends to be significantly slower insoftware and can only be used to sort lists of positive integers".
// Input array : Array ( [0] => 5 [1] => 3 [2] => 1 [3] => 3 [4] => 8 [5] => 7 [6] => 4[7] => 1 [8] =>1 [9] => 3 )Expected Result : Array ( [0] => 8 [1] => 7 [2] => 5 [3] => 4 [4] => 3 [5] => 3 [6]=> 3 [7] => 1[8] => 1 [9] => 1 )
 function columns($arr)
 {
     $n=$arr;
     if (count($n) == 0)
         return array();
     else if (count($n) == 1)
         return array_chunk($n[0], 1);
     array_unshift($arr, NULL);
     $transpose = call_user_func_array('array_map', $arr);
     return array_map('array_filter', $transpose);
 }
 function bead_sort($arr)
 {
     foreach ($arr as $e)
         $poles []= array_fill(0, $e, 1);
         return array_map('count', columns(columns($poles)));
 }
 echo 'Original Array : '.'';
 print_r(array(5,3,1,3,8,7,4,1,1,3));
echo ''.'After Bead sort : '.'';
print_r(bead_sort(array(5,3,1,3,8,7,4,1,1,3)));

//Question 10
// Write a PHP program to merge (by index) the following two arrays. Go to the editor
// Sample arrays :
// $array1 = array(array(77, 87), array(23, 45));
// $array2 = array("w3resource", "com");
// Expected Output :

// Array
// (
// [0] => Array
// (
// [0] => w3resource
// [1] => 77
// [2] => 87
// )
// [1] => Array
// (
// [0] => com
// [1] => 23
// [2] => 45
// )
// )

$temp=[];
 $i=0;
 $array1 = array(array(77, 87), array(23, 45));
 $array2 = array("w3resource", "com");
 $temp = array();
 $temp[] = $array2;
 function callBack($x, $y)
 {
     $temp = array();
     $temp[] = $x;
     if(is_scalar($y))
     {
         $temp[] = $y;
     }
     else
     {
         foreach($y as $k => $v)
         {
             $temp[] = $v;
         }
     }
     return $temp;
 }
 print_r(array_map(callBack,$array2,$array1));

//Question 11
// Write a PHP function to change the following array's all values toupper or lower case.
// Sample arrays :$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
// Expected Output :
// Values are in lower case.Array ( [A] => blue [B] => green [c] => red )
// Values are in upper case.Array ( [A] => BLUE [B] => GREEN [c] => RED )

// $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

function change_case($input, $ucase)
 {
     $case = $ucase;
     $narray = array();
     if (!is_array($input)) {
         return $narray;
     }
     foreach ($input as $key => $value) {
         if (is_array($value)) {
             $narray[$key] = array_change_value_case($value, $case);
             continue;
         }
         $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
     }
     return $narray;
 }
 echo 'Actual array ';
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
 echo 'Values are in lower case.';
 $myColor = change_case($Color, CASE_LOWER);
 print_r($myColor);
 echo 'Values are in upper case.';
 $myColor = change_case($Color, CASE_UPPER);
 print_r($myColor);

//Question 12
// Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
// Note : Do not use any PHP control statement.'
// Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248

echo implode(", ",range(200,250,4))."\n";

//Question 13
// Write a PHP script to get the shortest/longest string length from anarray.
// Sample arrays : ("abcd","abc","de","hjjj","g","wer")
// Expected Output :
// The shortest array length is 1.
// The longest array length is 4.

$arr = array("abcd","abc","de","hjjj","g","wer");
$res = array_map('strlen', $arr);
echo "The shortest array length is " . min($res) .
". The longest array length is " . max($res).'.';

//Question14
// Write a PHP script to generate unique random numbers within a range.
// Sample Range : (11, 20)
// Sample Output : 17 16 13 20 14 19 18 15 11 12

$res=range(11,20);
shuffle($res);
echo $res;
for ($x=0; $x< 10; $x++)
{
 echo $res[$x].' ';
 }
 echo "\n";

//Question 15
// Write a PHP script to get the largest key in an array.
$array1 = array(12=>12,33=>33,4=>4);
 echo max(array_keys($array1));

//Question 16
// Write a PHP function that returns the lowest integer that is not 0.
function min_values_not_zero(Array $values)
{
    return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(-1,0,1,12,-100,1))."\n");


//Question 17
// Write a PHP function to floor decimal numbers with precision.
// Note:Accept three parameters number, precision, and $separator
// Sample Data : 1.155, 2, "."100.25781, 4, "."-2.9636, 3, "."
function floorDec($number, $precision, $separator)
{
     $number_part = explode($separator, $number);
     $number_part[1] = substr_replace($number_part[1], $separator, $precision, 0);
     if ($number_part[0] >= 0) {$number_part[1] = floor($number_part[1]);} else { $number_part[1] = ceil($number_part[1]);}

     $ceil_number = array($number_part[0], $number_part[1]);
     return implode($separator, $ceil_number);
 }
 print_r(floorDec(1.155, 2, ".") . "\n");
 print_r(floorDec(100.25781, 4, ".") . "\n");
 print_r(floorDec(-2.9636, 3, ".") . "\n");

//Question 18
// Write a PHP script to print "second" and Red from the following array.
// Sample Data :$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" =>"White"), "numbers" => array ( 1, 2, 3, 4, 5, 6 ),"holes" => array ( "First", 5 => "Second", "Third"));

$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));
echo $color["holes"][5]."\n";
echo $color["color"]["a"]."\n";


//Question 19
// Write a PHP function to sort an array according to another array actingas a priority list.
function list_cmp($a, $b)
 {
     global $order;

     foreach ($order as $key => $value) {
         if ($a == $value) {
             return 0;
            break;
         }

         if ($b == $value) {
            return 1;
             break;
         }
     }
 }

 $order[0] = 1;
$order[1] = 3;
$order[2] = 4;
$order[3] = 2;

 $array[0] = 2;
$array[1] = 1;
$array[2] = 3;
 $array[3] = 4;
 $array[4] = 2;
 $array[5] = 1;
 $array[6] = 2;

 usort($array, "list_cmp");

 print_r($array);

//Question 20
// Write a PHP script to sort the following array by the day (page_id) andusername.


$arra[0]["transaction_id"] = "2025731470";
$arra[1]["transaction_id"] = "2025731450";
$arra[2]["transaction_id"] = "1025731456";
$arra[3]["transaction_id"] = "1025731460";
$arra[0]["user_name"] = "Sana";
$arra[1]["user_name"] = "Illiya";
$arra[2]["user_name"] = "Robin";
$arra[3]["user_name"] = "Samantha";

function convert_timestamp($timestamp){ //date
     $limit=date("U");
     $limiting=$timestamp-$limit;
     return date ("Ymd", mktime (0,0,$limiting));
 }

function cmp ($a, $b) {     //user define compare function
     $l=convert_timestamp($a["transaction_id"]);
     $k=convert_timestamp($b["transaction_id"]);
     if($k==$l){
         return strcmp($a["user_name"], $b["user_name"]);
     }else{
         return strcmp($k, $l);
     }
 }
//sort array
usort($arra, "cmp");

///print sorted info
while (list ($key, $value) = each ($arra)) {
     echo "\$arra[$key]: ";
     echo $value["transaction_id"];
    echo " user_name: ";
     echo $value["user_name"];
     echo "\n";
 }


//Question 21
// Write a PHP program to sort a multi-dimensional array set by aspecific key.
function my_Sort($unsorted, $column) {
     $sorted = $unsorted;
     for ($i=0; $i < sizeof($sorted)-1; $i++) {
       for ($j=0; $j<sizeof($sorted)-1-$i; $j++)
         if ($sorted[$j][$column] > $sorted[$j+1][$column]) {
           $tmp = $sorted[$j];
          $sorted[$j] = $sorted[$j+1];
           $sorted[$j+1] = $tmp;
               }}return $sorted;
 }
 $arr = array();
$arr[0]['name'] = 'Sana';
 $arr[0]['email'] = 'sana@example.com';
 $arr[0]['phone'] = '111-111-1234';
 $arr[0]['country'] = 'USA';

$arr[1]['name'] = 'Robin';
 $arr[1]['email'] = 'robin@example.com';
 $arr[1]['phone'] = '222-222-1235';
 $arr[1]['country'] = 'UK';
 $arr[2]['name'] = 'Sofia';
$arr[2]['email'] = 'sofia@example.com';
$arr[2]['phone'] = '333-333-1236';
$arr[2]['country'] = 'India';
print_r(my_Sort($arr, 'country'));

//question 22

//Write a PHP script to sort an array using case-insensitive natural ordering.
 $Name = array(
     "abhishek", "honey", "Neha", "Khushi","ishita"
 ); sort($Name,SORT_FLAG_CASE | SORT_NATURAL );
foreach ($Name as $key => $val) {
   echo "Colors[" . $key . "] = " . $val . "\n";
 }
//Question 23
// Write a PHP function to sort entity letters.

function entity_sort($my_array) {
    $total = count($my_array);
    for ($i=0;$i<$total;$i++) {
        if ($my_array[$i]{0} == '&') {
            $my_array[$i] = $my_array[$i]{1}.$my_array[$i];
        } else {
            $my_array[$i] = $my_array[$i]{0}.$my_array[$i];
        }
    }
    sort($my_array);
    for ($i=0;$i<$total;$i++) {
        $my_array[$i] = substr($my_array[$i],1);
    }
    return $my_array;
}
$arr = array(" ","&", "<");
print_r(entity_sort($arr));

//Question 24
// Write a PHP function to shuffle an associative array, preserving key,value pairs.
function shuffle_assoc($my_array)
	{
         $keys = array_keys($my_array);

         shuffle($keys);

         foreach($keys as $key) {
             $new[$key] = $my_array[$key];
             echo $key;
         }

        $my_array = $new;

         return $my_array;
     }

 $Name = array("abhishek", "honey", "Neha", "Khushi","ishita");
 print_r(shuffle_assoc($Name));


//Ouestion25
// Write a PHP function to generate a random password (containsuppercase, lowercase, numeric and other) using shuffle() function.
$password=[];
for($i=0;$i<3;$i++){
     $password[]=chr(rand(65,90));
 }
 for($i=0;$i<3;$i++){
     $password[]=chr(rand(97,122));


 }
 for($i=0;$i<3;$i++){
     $password[]=chr(rand(47,57));
 }
 for($i=0;$i<3;$i++){
     $password[]=chr(rand(33,46));
 }
shuffle($password);
 for($i=0;$i<count($password);$i++){
     echo $password[$i];
 }

//Question 26
// Write a PHP script to sort an array in reverse order (highest to lowest).
$Name = array("abhishek", "honey", "neha", "Aman","ishita");
 print_r($Name);
 rsort($Name);
 print_r($Name);


//Question 27
// Write a PHP program to generate an array with a range taken from a string.
function string_range($str1)
{
    preg_match_all("/([0-9]{1,2})-?([0-9]{0,2}) ?,?;?/", $str1, $a);
    $x = array ();
    foreach ($a[1] as $k => $v)
    {
        $x  = array_merge ($x, range ($v, (empty($a[2][$k])?$v:$a[2][$k])));
    }
    return ($x);
}
$test_string = '1-2 18-20 9-11';
print_r(string_range($test_string));


//Question 28
// Write a PHP program to get the index of the highest value in an associative array.

$arr = array('val1' => 78,'val2' => 43,'val3' => 12,'val4' => 3232,'val5' => 4335);
arsort($arr);
 echo "Index of the highest value : ".key($arr)."\n";

// ouestion 29
// Write a PHP function to search a specified value within the values ofan associative array
$arr = array(
    "Language1"=>"Python",
     "Language2"=>"Java",
     "Language3"=>"Javascript",
     "Language4"=>"C",
     "Language5"=>"SQL"
 );
 function search_val($arr,$tobesearched){
     foreach($arr as $key=>$val){
         if($val==$tobesearched){
             echo $tobesearched." is Present is ".$key."\n";
             return;
         }
     }
     echo $tobesearched." is not Present";
 }
 search_val($arr,"SQL:");

//30.Write a PHP function to search a specified value within the values ofan associative array.


function arraysearch($arra1, $search)
{
    reset($arra1);
    while (list ($key, $val) = each ($arra1))
    {
        if (preg_match ("/$search/i", $val))
        {
            echo $search." has found in ".$key."\n";
        }
        else
        {
            echo $search." has not found in ".$key."\n";
        }
    }
}
$exercises = array("part1"=>"PHP array", "part2"=>"PHP String", "part3"=>"PHP Math");
arraysearch($exercises, "Math");








