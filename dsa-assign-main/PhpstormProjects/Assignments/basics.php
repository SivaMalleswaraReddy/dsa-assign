<?php
//1. Write a PHP script to get the PHP version and configuration information.
phpinfo();

//2. Write a PHP script to display the following strings.Sample String :'Tomorrow I \'ll learn PHP global variables.''This is a bad command : del c:\\*.*
echo "Tomorrow I \'ll learn PHP global variables."."\n";
echo "This is a bad command : del c:\\*.*"."\n";
?>

//3. $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as ananchor text within an HTML document
<?php
$var = 'PHP Tutorial';?>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title><?php echo $var; ?> - W3resource!</title>
  </head>
  <body>
  <h3><?php echo $var; ?></h3>
  <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
  <p><a href="https://www.w3resource.com/php/php-home.php">Go to the <?php echo $var; ?></a>.</p>
</body>
</html>
//
4. Create a simple HTML form and accept the user name and display the namethrough PHP echo statement.Sample output of the HTML form :

<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
?>
</body>
</html>
//5. Write a PHP script to get the client IP address.
<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
echo $ip_address;
?>

//6. Write a simple PHP browser detection script.Sample Output : Your User-Agent is: Mozilla/5.0 (Windows NT 6.1)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36

<?php
echo "Your User Agent is :" . $_SERVER ['HTTP_USER_AGENT'];
?>
//7. Write a PHP script to get the current file name

<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";
?>

//8. Write a PHP script, which changes the color of the first character of a word.

<?php
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i', '<span style="color:#a600ff;">\1</span>',$text);
echo $text;
?>

//9. Write a PHP script, to check whether the page is called from 'https' or 'http'.

<?php
if (!empty($_SERVER['HTTPS']))
{
    echo 'https is enabled';
}
else
{
    echo 'http is enabled'."\n";
}
?>

//10. Write a simple PHP program to check that emails are valid

<?php
// pass valid/invalid emails
$email = "mail@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo '"' . $email . '" = Valid'."\n";
}
else
{
    echo '"' . $email . '" = Invalid'."\n";
}
?>
// 11. Write a e PHP script to display string, values within a table.

<?php
$a=1000;
$b=1200;
$c=1400;
echo "<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=blue>Salary of Mr. A is</td> <td>$a$</font></td></tr> 
<tr> <td><font color=blue>Salary of Mr. B is</td> <td>$b$</font></td></tr>
<tr> <td><font color=blue>Salary of Mr. C is</td> <td>$c$</font></td></tr>
</table>";
?>

//12. Write a PHP script to display source code of a webpage (e.g."http://www.example.com/")

<?php
$all_lines = file('https://www.w3resource.com/');
foreach ($all_lines as $line_num => $line)
{
    echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
}
?>

//13.Write a PHP script to count number of lines in a file
<?php
$file = basename($_SERVER['PHP_SELF']);
$no_of_lines = count(file($file));
echo "There are $no_of_lines lines in $file"."\n";
?>

//14.Write a PHP script to print current PHP version.

<?php
echo 'Current PHP version : ' . phpversion();
// prints e.g. '2.0' or nothing if the extension isn't enabled
echo phpversion('tidy')."\n";
?>

//15. Write a PHP script to delay the program execution for the given number ofseconds

<?php
// current time
echo date('h:i:s') . "\n";
// sleep for 5 seconds
sleep(5);
// wake up
echo date('h:i:s')."\n";
?>

//16.Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers.

<?php
$d = 'A00';
for ($n=0; $n<5; $n++)
{
    echo ++$d ."\n";
}
?>

//17. Write a PHP script to get the last occurred error

<?php
print_r(error_get_last());
?>

//18. Write a PHP function to test whether a number is greater than 30, 20 or 10using ternary operator.

<?php
function trinary_Test($n){
    $r = $n > 30
        ? "greater than 30"
        : ($n > 20
            ? "greater than 20"
            : ($n >10
                ? "greater than 10"
                : "Input a number atleast greater than 10!"));
    echo $n." : ".$r."\n";
}
trinary_Test(32);
trinary_Test(21);
trinary_Test(12);
trinary_Test(4);
?>

//19. Write a PHP script to get the full URL.

<?php
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $full_url."\n";
?>

//20. Write a PHP script to compare the PHP version.

<?php
if (version_compare(PHP_VERSION, '6.0.0') >= 0) {
    echo 'I am at least PHP version 6.0.0, my version: ' . PHP_VERSION . "\n";
}
if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
    echo 'I am at least PHP version 5.3.0, my version: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
    echo 'I am using PHP 5, my version: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.0.0', '<')) {
    echo 'I am using PHP 4, my version: ' . PHP_VERSION . "\n";
}
?>


//21. Write a PHP script to get the document root directory under which the currentscript is executing, as defined in the server's configuration file.

<?php
// getenv() gets the value of an environment variable
$rd = getenv('DOCUMENT_ROOT');
echo $rd."\n";
?>

//22. Write a PHP script to get the information about the operating system PHP isrunning on.

<?php
echo php_uname()."\n";
echo PHP_OS."\n";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    echo 'This is a server using Windows!';
} else {
    echo 'This is a server not using Windows!'."\n";
}
?>

// 23. Write a PHP script to get the directory path used for temporary files.


<?php
// Create a temporary file in the temporary
// files directory using sys_get_temp_dir()
$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
echo $temp_file."\n";
?>

//24. Write a PHP script to get the time of the last modification of the current page

<?php
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod())."\n";
?>

//25. Write a PHP program to swap two variables.
<?php
$a = 50;
$b = 70;

// Swap Logic

echo "\nThe number before swapping is:\n";
echo "Number a =".$a." and b=".$b;

$temp = $a;
$a = $b;
$b = $temp;

echo "\nThe number after swapping is: \n";
echo "Number a =".$a." and b=".$b."\n";
?>


