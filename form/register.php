<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="../php/register.php" method="post">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        Password: <input type="password" name="password"> <br><br>
        Confirm password: <input type="password" name="confirmpassword"> <br><br>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>