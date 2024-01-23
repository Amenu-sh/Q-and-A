<?php
//import necessary files
require_once '../helpers/init.php';


// print "<pre>";
// print_r($_POST);



$fname = "";
$lname = "";
$email = "";
$password = "";

//Grab the values from the form
if(isset($_POST['fName'])){
    $fname = $_POST['fName'];
}
if(isset($_POST['lName'])){
    $lname = $_POST['lName'];
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    registerUser($fname, $lname, $email, $password);
}