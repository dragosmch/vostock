<?php

//Connect to the local database 
$conn = mysqli_connect('dbhost.cs.man.ac.uk', 'mbax4dc9', 'SBirinalola96', 'mbax4dc9');

// If connection failed, display the connection error
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}