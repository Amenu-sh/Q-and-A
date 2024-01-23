<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once($root."/config.php");

// Create connection
$con = @mysqli_connect($sql_db_host, $sql_db_user, $sql_db_pass, $sql_db_name);


// // Check connection
// if ($con) {
//    echo "Connected successfully!!";
// } else {
//     echo "Not Connected!!";
// }


//query file
$queryFile = "dbQuery.sql";
//Temporary variable, used to store current query
$templine = '';
//Read in entire file
$lines = file($queryFile);
//Loop through each line
foreach ($lines as $line)
{   
    //Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;
     
    //Add this line to the current segment
    $templine .= $line;
    $query = false;
    //If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';')
    {   
        //Perform the query
        $query = mysqli_query($con, $templine); 
        //Reset temp variable to empty
        $templine = '';
    }
}
 echo "Done";
