$conn = mysqli_connect('localhost', 'root', '', 'mbax4dc9');

// If connection failed, display the connection error
if(!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
session_start();
