<?php
 $dbServername = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbName= "authentication_system";

 $conn = mysqli_connect($dbServername, $dbUsername, $dbpassword, $dbname );

    if(!conn) {
        echo "connection failed";

    } else{
        echo "connected successfully";
    }

?>