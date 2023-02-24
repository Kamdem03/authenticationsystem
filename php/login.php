<?php
include_once '../database/databaseconnection.php';
session_start();
  
    if(!isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = password_hash( $_POST['password'], PASSWORD_DEFAULT);

    //query that check if user exist
        $check_user= "SELECT * FROM users WHERE 'email'=['$email'], AND 'password' = ['$password']";

        $result=mysqli_query($conn,$check_user);
         
         if (mysqli_num_rows($result)>0){
            echo "login successfully";
            header("Location: ../form.php/dashboad.php");
         }
         else{
            header("Location: ..form.php/login.php?message=password_error");
         }

        

    
    }

?>