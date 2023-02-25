<?php
include_once '../database/databaseconnection.php';
session_start();
  
    if(!isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = password_verify($_POST['password'], $password) ;

    //query that check if user exist
        $check_user= "SELECT * FROM users WHERE email='$email'";

        $result=mysqli_query($conn,$check_user);
         
         if (mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){

                if(password_verify('$password', $row['$password'])){
                    $email=$row['email'];
                    header("Location: ../form.php/dashboad.php");
                }
                else{
                    header("Location: ..form.php/login.php?message=invalid email");
                 }   
               
                }  
            
         }
        
    }

?>