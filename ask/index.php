<?php
//import necessary files
require_once '../helpers/init.php';

$topics = getTopics();

// print "<pre>";
// print_r($_POST);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask</title>
</head>
<body>
    <h1>Ask Your Question</h1>
    <form action="/ask/received/index.php" method="post">
        <label for="question">Your Question</label> <br>
        <input type="text" name="question" /> <br> <br>
        <textarea name="explanation" id="" cols="30" rows="10"></textarea> <br> <br>
        <select name="topic" >
            <?php foreach($topics as $key => $value) 
            {
                
                print '<option value="'.$value['tid'].'">'.$value['topicName'].'</option>';


            }
            ?>
        </select> <br> <br>


        <input type="submit" value="Ask">
    </form>
    
</body>
</html>



