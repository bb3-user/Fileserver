<?php
// connect to the database engine
$con =@mysqli_connect("localhost", "cyber", "security", "webappsdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// construct and execute query
$queryget = "SELECT username FROM customers WHERE customerid = "
    . $_REQUEST["customeridget"];
$resultget = mysqli_query($con, $queryget);
if (!$resultget) {
   die("Failed to execute query [$queryget]: " . mysqli_error());

}

// show the result
while ($rowget = mysqli_fetch_assoc($resultget)) {

    echo "USERNAME retrieved using GET= " . $rowget["username"] . "<br>";

}
    echo "<br />";	
    echo "Here's the SQL statement: " ;
    echo "<br />";	
    echo $queryget ."<br>";

// close the connection
mysqli_close($con);

echo "<br /><a href='index.html'>GET vs. POST Page</a>";
echo "<br />";	
echo "<br /><a href='../index.html'>Main Page</a>";
?>

