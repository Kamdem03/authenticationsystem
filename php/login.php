<?php
include_once '../database/databaseconnection.php';
session_start();
  
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'] ;

    //query that check if user exist
        $check_user= "SELECT * FROM users WHERE email='$email'";

        $result=mysqli_query($conn,$check_user);
         
         if (mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){

                if(password_verify($password, $row['password'])){
                    $email=$row['email'];
                    $_SESSION['name'] = $row['name'];
                    //var_dump($row);
                header("Location: ../form/dashboard.php");
                }
                else{
                    header("Location: ..form.php/login.php?message=invalid email");
                 }   
               
                }  
            
         }
        
    }

?>