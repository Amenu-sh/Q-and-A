<?php

//import necessary files
require_once '../../helpers/init.php';

// print "<pre>";
// print_r($_POST);
print_r($_SESSION);


$uid = "";
$tid = "";
$explanation = "";
$explanation = "";
$userHash = "";
$userInfo = array();


//Grab the values from the form
if(isset($_SESSION["uHash"])){
    $userHash = $_SESSION["uHash"];
    $userInfo = getUserInfoFromHash($userHash);
    if(!empty($userInfo)){
        print_r($userInfo);
        if(isset($userInfo["uid"])){
            $uid = $userInfo["uid"];
        }  
    }
} 
if(isset($_POST['topic'])){
    $tid = $_POST['topic'];
}
if(isset($_POST['explanation'])){
    $explanation = $_POST['explanation'];
}
if(isset($_POST['question'])){
    $question = $_POST['question'];
}
//add the question to the database
if($uid != "" && $tid != "" && !empty($question)){
    addQuestion($uid, $tid, $question, $explanation);
}



?>