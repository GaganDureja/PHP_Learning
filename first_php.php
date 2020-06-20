<!DOCTYPE html>
<html>
<head>
	<title>Learn it....</title>
</head>
<body>


<h1>PHP Syntax</h1>
<?php 
echo "Hello";
?>


<h1>Variables</h1>
<?php 
$car = "Swift";
echo $car;
?>
<p>Example of Variables Scope- local, global, static</p>
<?php 
$x = 5;
function my_first() {
static $x = 99;
echo $x;
$x++;
}
my_first();
echo "<br>";
my_first();
echo "<br>";
print ($x);
?>


<h1>Echo/Print</h1>
<p>echo can use multiple parameter but print can't and echo is fast</p>


<h1>Data Types</h1>
<p>use var_dump($x) to check typeof data and result will be string, integer, float, null, array, object</p>


<h1>Strings</h1>
<p>strlen("Hello") - string length output= 5. It also counts blank spaces</p>
<p>str_word_count() - Count Words in a String</p>
<p>strrev() - Reverse a String</p>
<p>strpos("Hello", "o") - Search For a Text Within a String, output= 4</p>
<p>str_replace("world", "Dolly", "Hello world!") - Replace Text Within a String</p>


<h1>Numbers</h1>
<p>Use var_dump(is_int($x)) to check input is number or not.</p>
<p>is_float()</p>
<p>echo is_finite(2145) returns 1</p>
<p>echo is_infinite(215) returns blank but 1.9e411 value is infinite and the function returns 1</p>
<p>var_dump(is_numeric("57")) returns true</p>
<p>PHP Casting Strings and Floats to Integers</p>
<?php 
$x = 55.69;
$y = (int)$x;
echo $y . "<br>";
$x = "55.69";
$y = (int)$x;
echo $y;
?>


<h1>Math</h1>
<p>The pi() function returns the value of PI</p>
<p>The min() and max() functions can be used to find the lowest or highest value in a list of arguments</p>
<p>The abs() function returns the absolute (positive) value of a number</p>
<p>The sqrt() function returns the square root of a number</p>
<p>The round() function rounds a floating-point number to its nearest integer</p>
<p>The rand(10, 100) function generates a random number</p>
<?php 
echo(pi()) . "<br>";
echo(min(0, 150, 30, 20, -8, -200)) . "<br>";  
echo(max(0, 150, 30, 20, -8, -200)) . "<br>";
echo(abs(-6.7)) . "<br>";
echo(sqrt(64)) . "<br>";
echo(round(0.60)) . "<br>";  
echo(round(0.49)) . "<br>"; 
echo(rand(10, 100)) . "<br>";
?>


<h1></h1>
</body>
</html>