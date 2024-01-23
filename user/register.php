<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <p>Already have an account? <a href="/user/login.php">Login</a></p>
    
    <form action="/user/registrationHandler.php" method="post">
        <label for="fName">First Name</label> <br>
        <input type="text" name="fName"> <br> <br>
        <label for="lName">Last Name</label> <br>
        <input type="text" name="lName"> <br> <br>
        <label for="email">Email</label> <br>
        <input type="email" name="email"> <br> <br>
        <label for="password">Choose Password</label> <br>
        <input type="text" name="password"> <br> <br>
        <input type="submit" value="Register">
    </form>



</body>
</html>