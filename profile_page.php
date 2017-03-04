<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'mbax4dc9');

// If connection failed, display the connection error
if(!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
session_start();

// Take the variables from the session
$ID = $_SESSION['ID'];

$name = $_SESSION['username'];

?> 

<!DOCTYPE html>
<html>
<head>
	<title> Profile page </title>
</head>

<body>
  This is <?php echo $name ?>
</body>
</html>

