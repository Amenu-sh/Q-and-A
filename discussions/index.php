<?php

require_once ('../helpers/init.php');

//place to handle the question form submission

// print "<pre>";
// print_r($_POST);
// print_r($_SESSION);

$tenQuestions = getQuestions(10);

// print_r($tenQuestions);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussions</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <h1>Questions asked</h1>
    <div>
        <?php foreach($tenQuestions as $key => $value) {
            $question = $value['question'];
            $explanation = $value['explanation'];
            $askedDate = $value['askedDate'];

            print "<div class='questionWrapper'>
                <div class='qtitle'>".$question."</div>
                <div class='qexplanation'>".$explanation."</div>
                <div class='qdate'>".$askedDate."</div>
               
            </div>";
          }  
        ?>
    </div>
    
</body>
</html>