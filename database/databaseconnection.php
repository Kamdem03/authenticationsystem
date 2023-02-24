<?php
 $dbServername = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbName= "authentication_system";

 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName );

    if(!$conn) {
        echo "Connection failed";

    } else{
        echo "Connected successfully";
    }

?>