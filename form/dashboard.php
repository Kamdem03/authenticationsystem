<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>HELLO <?php echo $_SESSION['name'];?></h2>
    <div>
        <h3>Welcome to your dashboard.</h3>

        <a href="../php/logout.php">Logout</a>
    </div>
</body>
</html>