<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p></p>
	<?php 
	echo "My name is " . $_SESSION["Name"] . " and I am " . $_SESSION["Age"] . "yrs old.<br>";
	print_r($_SESSION);
	?>
	

</body>
</html>