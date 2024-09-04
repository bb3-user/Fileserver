<html>
<head>
  <title>Customer Comments</title>
</head>
<body>
<?php
//include the function to clean data
include "cleanData.php"; //I am keeping this for now

//create an array for errors
$errors=array();

//start cleaning the data
$choice = $_REQUEST['choice'];
$choice =  cleanData($choice); //I am keeping this for now

//set an array to hold valid choice values
$choice_array = array("Add Comment", "add", "view"); //I am keeping this for now

//main logic of what to do when
if(in_array($choice, $choice_array))
{
	print "You selected $choice";
	if($choice == "Add Comment")
	{
	//clean data before adding to text file
	$name = cleanData($_POST['name']);
	$comment =  cleanData($_POST['comment']);
	//validate
	validate($name, $comment);
	}
	elseif($choice=="add")
		addForm($name, $comment, $errors);
	elseif($choice=="view")
		showComments();
	else
		displayForm();
}else{
	displayForm();
}	

//--------begin functions--------------
function validate($name, $comment){
  global $errors;
  if($name=="")
    $errors[0]= "You must fill in a name.";
  if($comment=="")
    $errors[1]= "You must fill in a comment. ";

//see if there are errors
$size = count($errors);
	if($size > 0)
  	  addForm($name, $comment, $errors);
  	else
  	  addComment($name, $comment);  
}//end validate

function addComment($name, $comment){
	// include header file
	include "header.html";

	//open textfile and write data to file
	$fp=fopen("comments.txt", "a");
	fwrite($fp, "$name\t $comment\n");
	print "comment added";
	fclose($fp);
		
	//include html footer file
	include "footer.html";
}//end addComment

function addForm($name, $comment, $errors){
	// include header file
	$self = $_SERVER['PHP_SELF'];
	include "header.html";
print <<<HERE
	<form method="post" action="$self">
	<p> Enter a new comment to add: </p>
	<p>Name: <input name="name" type="text" id="name" size="80" value="$name" />$errors[0]
	<br />
	Comment: <input name="comment" type="text" id="comment" size="200" value="$comment" />$errors[1]
	</p>
	<p>
	<input name="choice" type="submit" id="choice" value="Add Comment" />
	</p>
	</form>
HERE;
	//include html footer file
	include "footer.html";
}//end addForm

function displayForm(){
	// include header file
	include "header.html";
	//include html footer file
	include "footer.html";
} //end displayForm

function showComments(){
	include "header.html";

$fp = fopen("comments.txt", "r") or die("Unable to open file!");
 
echo "<table>";
while(!feof($fp)) {
  echo "<tr><td>";
  echo fgets($fp) . "<br>";
  echo "</td></tr>";
}
echo "</table>";
fclose($fp);
	
	include "footer.html";
}//end showComments

echo "<br />";	
echo "<br /><a href='../index.html'>Main Page</a>";
?>

</body>
</html>
