\<?php
/*1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will
be no hyphen(-) at starting and ending position. */
for($i=1;$i<11;$i++){
       if($i!=10) {

           print($i . '-');
       }
       else{
           print($i);
       }

}
/* 2. Create a script using a for loop to add all the integers between 0 and
30 and display the total. */
for($i=0;$i<=30;$i++){
    $total += $i;
}
print("\n".$total);


/*3. Create a script to construct the following pattern, using nested for loop.
*
* *
* * *
* * * *
* * * * *
 * *
 */
for($i=0;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "* ";
    }
    echo "\n"
;}

/*
4. Create a script to construct the following pattern, using a nested for loop.
*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*
 * */
for($i=0;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "* ";
    }
    echo "\n"
    ;}
for($i=5;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo "* ";
    }
    echo "\n"
    ;}
/*
5. Write a program to calculate and print the factorial of a number
using a for loop. The factorial of a number is the product of all
integers up to and including that number, so the factorial of 4 is
4*3*2*1= 24.*/
$fact=1;
for($x=1;$x<=5;$x++){
    $fact *= $x;
}
print($fact);

/*6. Write a program which will give you all of the potential combinations of
a two-digit decimal combination, printed in a comma delimited format :
Sample output :
00, 01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41,
42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62,63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83,
84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99,*/
for($a=0;$a<10;$a++){
    for($b=0;$b<10;$b++){
        print($a.$b.",");
    }
}
/*7. Write a program which will count the "e" characters in the text "I am
learning PHP code".
*/

$d = "I am
learning PHP code";
print(substr_count($d,'e'));
/*8.)Write a PHP script that creates the following table using for loops. Add
cellpadding="3px" and cellspacing="0px" to the table tag.
*/
for($i=1;$i<=6;$i++)
{
    echo"<tr>";
    for ($j=1;$j<=5;$j++)
    {
        echo "<td>$i * $j = ".$i*$j."</td>";
    }
    echo "</tr>";
/* 9. Write a PHP script using nested for loop that creates a chess board
as shown below. Use table width="270px" and take 30px as cell
height and width. */
for($row=1;$row<=8;$row++)
{
    echo "<tr>";
    for($col=1;$col<=8;$col++)
    {
        $total=$row+$col;
        if($total%2==0)
        {
            echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
        }
        else
        {
            echo "<td height=30px width=30px bgcolor=#000000></td>";
        }
    }
    echo "</tr>";
}
/* 10 Write a PHP script that creates the following table (use for loops).
*/
for ($row=1; $row <= 10; $row++) {
    echo "<tr> \n";
    for ($col=1; $col <= 10; $col++) {
        $p = $col * $row;
        echo "<td> $p </td> \n";
    }
    echo "</tr>";
}
		echo "</table>";

/* 11)Write a PHP program which iterates the integers from 1 to 50. For
multiples of three print "Fizz" instead of the number and for the multiples
of five print "Buzz". For numbers which are multiples of both three and
five print "FizzBuzz".
*/
for($c=1;$c<=50;$c++){
    if($c % 15 ==0){
        print("\nFizzBuzz");
    }
    elseif ($c % 3 ==0){
        print("\nFizz");
    }
    elseif($c % 5 ==0){
        print("\nBuzz");
    }
    else{
        print("\n".$c);
    }
}

/* 12.Write a PHP program to generate and display the first n lines of a Floyd
triangle. (use n=5 and n=11 rows)
*/
$n =5;
$value = 1;
for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
      echo "$value ";
      $value++;
    }
    print("\n");
  }
$n =11;
$value = 1;
for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo "$value ";
        $value++;
    }
    print("\n");

}

/*
 * Write a PHP program to print alphabet pattern 'E'.
Expected Output:
*****
*
*
****
*
*
*****
 */

$row_length = 7;
$column_length = 5;
$row_middle = ceil($row_length / 2);

for ($row = 1; $row <= $row_length; $row++) {
    for ($column = 1; $column <= $column_length; $column++) {
        if ($row == 1 || $row == $row_middle || $row == $row_length) {
            echo "*&nbsp;";
        } else if ($column == 1) {
            echo "*&nbsp;";
        } else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
}
/*
 * 14) Write a PHP program to print alphabet pattern 'I'.
Expected Output:
*****
*
*
*
*
*
*****
 * */
$row_length = 7;
$column_length = 5;
$column_middle = ceil($column_length/ 2);

for ($row = 1; $row <= $row_length; $row++) {
    for ($column = 1; $column <= $column_length; $column++) {
        if ($row == 1 || $row == $row_length) {
            echo "*&nbsp;";
        } else if ($column == $column_middle) {
            echo "*&nbsp;";
        } else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
}

/*
 15)Write a PHP program to print alphabet pattern 'L'.
Expected Output:
*
*
*
*
*
*
*****
*/
$row_length = 7;
$column_length = 5;

for ($row = 1; $row <= $row_length; $row++) {
    for ($column = 1; $column <= $column_length; $column++) {
        if ($row == $row_length) {
            echo "*&nbsp;";
        } else if ($column == 1) {
            echo "*&nbsp;";
        } else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
}


