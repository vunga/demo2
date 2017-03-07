<!doctype html>
<html>
<body>
<a href="https://www.w3schools.com/php/php_superglobals.asp">ABC</a>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text=" name="fname"><br>
email: <input type="text" name="femail"><br>
<input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$name = $_POST['fname'];
	if (empty($name)) {
		echo "Name is empty";
	} else {
		echo $name;

	}
}
?>
</body>
</html>