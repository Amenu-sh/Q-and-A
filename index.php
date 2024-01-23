<?php

require_once ('helpers/init.php');

// $_SESSION['Test'] = "Hello World";

// print "<pre>";
// print_r($_POST);
// print_r($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home pqge</title>
</head>
<body>
  <h1>Home Page</h1>

  <?php if(isset($_SESSION['uHash'])): ?>
    <h2>Visible only When logged in</h2>
  <?php endif; ?>
  <?php if(!isset($_SESSION['uHash'])): ?>
    <h2>Visible only When logged out</h2>
  <?php endif; ?>



 
  
</body>
</html>