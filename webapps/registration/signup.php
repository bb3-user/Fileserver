<?php
// connect to the database engine
$con =@mysqli_connect("localhost", "cyber", "security", "webappsdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	$user	= $_POST['usr'];
	$pass	= $_POST['pwd'];
	$sql	= "INSERT into login (username, password) values('".$user."','".$pass."')";
	$qry	= mysqli_query($con, $sql);
	
	
		
	if(!$qry)
	{
		echo "Failed" .mysqli_error();
		echo "<br /><a href='index.html'>Main Page</a>";
	}
	else
	{
		echo "Submitted successfully";
		echo "<br /><a href='index.html'>Registration Page</a>";
		echo "<br />";	
		echo "<br /><a href='../index.html'>Main Page</a>";
	}
?>
