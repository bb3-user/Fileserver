<?php
// connect to the database engine
$con =@mysqli_connect("localhost", "cyber", "security", "webappsdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
session_start();	# starts session

session_unset();	# removes all the variables in session

session_destroy(); # destroys session

if($_SESSION['userName'])
	echo "Logged out successfully<br />";
	else 
	echo "Logout unsuccessful<br />";
	echo "<br /><a href='index.html'>Main Page</a>";

?>
