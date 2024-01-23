<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <p>Don't have an account? <a href="/user/register.php">Register</a></p>
    <form action="/user/loggedin.php" method="post">
        <label for="email">Email</label> <br>
        <input type="email" name="email"> <br> <br>
        <label for="password">Password</label> <br>
        <input type="password" name="password"> <br> <br>
        <input type="submit" value="Login">
    </form>

</body>
</html>