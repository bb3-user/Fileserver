<?php
// connect to the database engine
$con =@mysqli_connect("localhost", "cyber", "security", "webappsdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// construct and execute query
$querypost = "SELECT username FROM customers WHERE customerid = "
    . $_POST["customeridpost"];
$resultpost = mysqli_query($con, $querypost);
if (!$resultpost) {
   die("Failed to execute query [$querypost]: " . mysqli_error());
}
// show the result
while ($rowpost = mysqli_fetch_assoc($resultpost)) {
    echo "USERNAME retrieved using POST = " . $rowpost["username"] . "<br>";
}
// close the connection
mysqli_close($con);

echo "<br /><a href='index.html'>GET vs. POST Page</a>";
echo "<br />";	
echo "<br /><a href='../index.html'>Main Page</a>";
?>

