<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once($root."/config.php");

// Create connection
$sqlConnect = mysqli_connect($sql_db_host, $sql_db_user, $sql_db_pass, $sql_db_name);


// Check connection
if ($sqlConnect) {
//    echo "Connected successfully!!";
} else {
    // echo "Not Connected!!";
}