<?php 
session_start();
?>
<!DOCTYPE html>
<?php 
$cookie_name = "Gagan";
$cookie_value = 12345;
setcookie($cookie_name, $cookie_value, time() + 60, "/")
?>
<html>
<head>
	<title>Learning....</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 id="main_heading">PHP Tutorial</h1>
<h2>Syntax</h2>
<?php 
echo "Hello";
?>


<h2>Variables</h2>
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


<h2>Echo/Print</h2>
<p>echo can use multiple parameter but print can't and echo is fast</p>


<h2>Data Types</h2>
<p>use var_dump($x) to check typeof data and result will be string, integer, float, null, array, object</p>


<h2>Strings</h2>
<p>strlen("Hello") - string length output= 5. It also counts blank spaces</p>
<p>str_word_count() - Count Words in a String</p>
<p>strrev() - Reverse a String</p>
<p>strpos("Hello", "o") - Search For a Text Within a String, output= 4</p>
<p>str_replace("world", "Dolly", "Hello world!") - Replace Text Within a String</p>


<h2>Numbers</h2>
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


<h2>Math</h2>
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


<h2>Constants</h2>
<p>Constants can't be changed or undefined</p>
<p>Use define(name, value, case insensitive)</p>
<?php
define("price", "15rs", true);
echo "Price of x is" . Price;
?>
<p>see in the next line we can still call the constant</p>
<?php echo Price; ?>
<p>Also we can define array in the constant vakue</p>


<h2>Operators</h2>
<p>Arithmetc, Assignment, Comparison, Increment/Decrement, Logical, String(. to add), Array, Conditional(?: and  ??)</p>


<h2>If...Else...Elseif</h2>
<p>Below one is the Example using all these statements and time is shown at gmt 00</p>
<?php
$t = date("H");
echo "Hours now is " . $t . "<br>";
if ($t < "6") {
  echo "Have a good day!";
}elseif ($t < 10 ) {
 echo "Good afetrnoon";
 } elseif ($t < 14) {
 echo "Good Evening";
 } else {
 echo "Good Night";
 }
?>


<h2>Switch</h2>
<p>Same as JS switch statement</p>


<h2>Loops</h2>
<p>while loop: ($x <= 5) and $x= 15; returns no output</p>
<p>do while loop: ($x <=5) and $x= 15; will give one output (15)</p>
<p>for loop: Declare all in one  for($x=0; x<=10; $x++)</p>
<p>foreach loop: Used for array</p>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>
<p>break and continue</p>


<h2>Functions</h2>
<p>php have more than 1000 of predefined functions and also we can create our own function</p>
<?php
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
?>


<h2>Arrays</h2>
<p>Indexed Array</p>
<?php 
$cars = array("Audi", "BMW", "Swift");
$len = count($cars);

for ($x=0; $x < $len ; $x++) { 
	echo $cars[$x];
	echo "<br>";
}
?>
<p>Associative array</p>
<p>A array as object</p>
<p>use foreach to print complete array</p>
<p>Multidimensional array</p>
<?php 
$cars = array(
array("Audi",50, 30),
array("BMW",50,40),
array("Swift",100, 80)
);
echo "Car Name:" . $cars[0][0] . ", Stock:" . $cars[0][1] . ", Sold" . $cars[0][2] . "<br>";
echo "Car Name:" . $cars[1][0] . ", Stock:" . $cars[1][1] . ", Sold" . $cars[1][2] . "<br>";
echo "Car Name:" . $cars[2][0] . ", Stock:" . $cars[2][1] . ", Sold" . $cars[2][2] . "<br>"
?>
<p>Sorting arrays: sort()- ascending on value, rsort()- descending, asort()- associative sort by value, ksort()- associative sort by key and similarly arsort(), krsort()</p>


<h2>Superglobals</h2>
<p>Globals can be called anywhere by- $GLOBALS["name"]</p>
<p>$_SERVER['PHP_SELF'] used in the next line and there are many more types that shows detials of the site.</p>
<?php 
echo $_SERVER['PHP_SELF'];
 ?>
 <p>Enter text and press submit, this will get data and display in the next line.</p>
 <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
 	Type Anything: <input type="text" name="any_text" value="">
 	<input type="submit" name="">
 </form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = htmlspecialchars($_REQUEST["any_text"]);
	if (empty($any_text)) {
		echo "Empty Box";
	} else {
		echo $name;
	}
}
?>
<p>form method POST and GET</p>


<h1 id="main_heading">PHP Forms</h1>
<style type="text/css" >
	.error {
		color: red;
	}
</style>
<?php 
$nameErr = $mailErr = $webErr = $genderErr = "";
$name = $mail = $web = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$nameErr = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			$nameErr = "Only alphabets and whitespace is allowed";
		}
	}
	if (empty($_POST["mail"])) {
		$mailErr = "Email required";
	} else {
		$mail = test_input($_POST["mail"]);
		if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
			$mailErr = "Invalid format";
		}
	}
	if (empty($_POST["web"])) {
		$web = "";
	} else {
		$web = test_input($_POST["web"]);
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $web)) {
			$webErr = "Invalid URL";
		}
	}
	if (empty($_POST["gender"])) {
		$genderErr = "Field required";
	} else {
		$gender = test_input($_POST["gender"]);
	}
}
function test_input($data) {
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<h3>Form with required field and test input data have correct syntax.</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name: <input type="text" name="name" value="<?php echo $name;?>"><span class="error">*<?php echo $nameErr;?></span><br><br>
	Email: <input type="text" name="mail" value="<?php echo $mail;?>"><span class="error">*<?php echo $mailErr;?></span><br><br>
	Website: <input type="text" name="web" value="<?php echo $web;?>"><span class="error"><?php echo $webErr;?></span><br><br>
	Gender:
	<input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>> Male

	<input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>> Female

	<input type="radio" name="gender" value="other" <?php if (isset($gender) && $gender=="other") echo "checked";?>> Other
	<span class="error">*<?php echo $genderErr;?></span>  <br><br>

	<input type="submit" name="" value="Submit Data">
	<span class="error">* fields are req.</span>
</form>
<?php 
echo "<h3>Your Input:</h3>";
echo $name;
echo "<br>";
echo $mail;
echo "<br>";
echo $web;
echo "<br>";
echo $gender;
?>


<h1 id="main_heading">PHP Advanced</h1>
<h2>Cookies and Session</h2>

<a href="session_test.php" target="_blank">Session Test page</a><br>
<?php 
$_SESSION["Name"] = "Gagan";
$_SESSION["Age"] = 24;
?>

<br>
<br>
<p>Cookie time I set is one minute</p>
<?php 
if (!isset($_COOKIE[$cookie_name])) {
	echo "Cookie named " . $cookie_name . " is not set.";
} else {
	echo "Cookie named " . $cookie_name . " is set.<br>";
	echo "Value is: " . $_COOKIE[$cookie_name];
}
?>


</body>
</html>