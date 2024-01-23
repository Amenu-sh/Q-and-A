<?php
require_once("../helpers/init.php");

print "<pre>";
print_r($_POST);

$topicName = "";

//grab the values from the form
if(isset($_POST['topicName'])){
    $topicName = $_POST['topicName'];
}

//Add the topic to the database
if(!empty($topicName)){
    addTopic($topicName);
}
