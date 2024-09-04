<?php
//This is the ORIGINAL function for cleaning the data.
//function cleanData($data)
//{
//  $data = trim($data);
//  $data = stripslashes($data);
//  $data = strip_tags($data); //removes HTML and PHP tags from a string
//  return $data;
//}//end cleanData

//This is the MODIFIED function for cleaning the data. I commented out the original cleanData function (above), and invoked a modified/"neutralizied" version of it below (it does not do anything). To use the original function, uncomment the function above with its arguments and comment the fucntion below:
function cleanData($data)
{
$data = $data;

return $data;
}//end cleanData

?>
