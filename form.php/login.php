<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication System</title>
</head>
<body>
    <form action="dashboard.php" method="post">
        Name: <input type="text" name="name"> <br><br>
        Password: <input type="password" name="password"> <br><br>
        <input type="submit" name="submit" value="Login">
    </form>

    <?php
    function login(){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $submit=$_POST['submit'];
        $hashedpwdindb = password_hash( $_POST['password'], PASSWORD_DEFAULT);
        if(!isset($_POST['submit'])){
            echo "welcome $name";
        }
    }
    ?>
</body>
</html>