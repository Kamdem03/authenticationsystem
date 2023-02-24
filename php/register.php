<?php
include_once '../database/databaseconnection.php';
session_start();

    if(isset($_POST['register'])){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
        $confirmpassword=$_POST['confirmpassword'];

   /* if(empty($name) || ( $email) || ($password) || ($confirmpassword)){
        echo "All fields are required";
    }

    if(filter_var($email, FILTER_VALIDATE_EMAIL == false)){
        echo "Invalid email";
    }

    if($password!==$confirmpassword){
        echo "Password does not match";
    }*/

//query to check if user exits
        $check_user = "SELECT * FROM  users  WHERE 'name'=$name, 'email'=$email, 'password'=$password";

        $result= mysqli_query($conn,$check_user);
        if(mysqli_num_rows($result)>0){
            echo "User already exist. Try another name.";
        }

//query to insert users
        $insert_users = "INSERT INTO users(name,email,password) VALUES($name,$email,$password)";
        $run = mysqli_query($comn,$insert_users);
        
        if(mysqli_num_rows($run)>0){
            header("Location: ../form/dashboard.php");
        } else{
            header("Location: ../form/login.php");
        }
    }

?>