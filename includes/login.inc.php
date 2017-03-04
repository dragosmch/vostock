<?php 

// Connect to the database
//Connect to the local database 
$conn = mysqli_connect('localhost', 'root', '', 'mbax4dc9');

// If connection failed, display the connection error
if(!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
session_start();

// Take the values entered by the user
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Decrypt the entered password
$sql = "SELECT * FROM users WHERE name = '$username'"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

// If the passwords don't match 
if($count == 0)
{
  header("Location: ../index.html");
  exit();
}

// If they do match
else 
{
  $sql = "SELECT * FROM users WHERE name = '$username' AND pwd = '$password'"; 
  $result = mysqli_query($conn, $sql);

  // If the user is not found in the database
  if(!$row = mysqli_fetch_assoc($result))
  {
    header("Location: ../index.html");
    exit();
  }

  // If the user is found in the database
  else
  { 
    $_SESSION['ID'] = $row['ID'];
    $_SESSION['username'] = $row['name'];
     header("Location: ../profile_page.php");

  }
}

// Go back to the login page
