<?php
// connect to the database engine
$con =@mysqli_connect("localhost", "cyber", "security", "webappsdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
session_start();

	$u_name	= $_POST['uname'];
	$p_word	= $_POST['pword'];
// construct and execute query
	$sql	= "SELECT * FROM login WHERE(username='".$u_name."' and password='".$p_word."')";
	echo "$sql<BR>\n";
	$result	= mysqli_query($con, $sql);

if (!$result) {
	die("Failed to execute query [$sql]: " . mysqli_error());
}
// show the result
	if ($result->num_rows > 0) {
		while($row = mysqli_fetch_array($result)) {
			echo "Login Successfully";
			$_SESSION['userName']	= $u_name;
			echo "<br />Welcome " .$_SESSION['userName']."!<BR>\n";
			echo "Below find your ID, username, and password, respectively:<BR>\n";
			echo "$row[0], $row[1], $row[2]<BR>\n";
			echo "<br /><a href='logout.php'>Log Out</a><BR>\n";
			echo "<br />";
			echo "<br />";
						
		} 
		
	} else {
		echo "Try Again";
	}
			

echo "<br /><a href='index.html'>Registration Page</a>";
echo "<br />";	
echo "<br /><a href='../index.html'>Main Page</a>";

?>
