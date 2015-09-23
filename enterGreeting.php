<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect ( $servername, $username, $password );

// Check connection
if (! $conn) {
	die ( "Connection failed: " . mysqli_connect_error () );
}
echo "Connected successfully";
?>
<?php

$name = "world";

print ("<b>Hello, $name</b>") ;

?>
<form action="results.php" method="post">
		<input type="hidden" name="name" value="<?php print($name); ?>" /> 
		<input type="text" name="greeting" value="" />
		<input type="submit" value="Submit" />
	</form>
</body>
</html>