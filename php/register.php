<?php
include_once '../database/databaseconnection.php';
session_start();

    if(isset($_POST['register'])){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
        $confirmpassword=$_POST['confirmpassword'];

    if(empty($name) || empty( $email) || empty($password) || empty($confirmpassword)){
        echo "All fields are required";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL )){
        echo "Invalid email";
    }

    if($password !== $confirmpassword){
        echo "Password does not match";
    }

//query to check if user exits
        $check_user = "SELECT * FROM  users  WHERE  email='$email'";

        $result= mysqli_query($conn,$check_user);
        if(mysqli_num_rows($result)>0){
            echo "User already exist. Try another name.";
            exit();
        }

//query to insert users
        $insert_users = "INSERT INTO users (name,email,password) VALUES('$name','$email','$password')";
            
        if(mysqli_query($conn,$insert_users)>0){
            header("Location: ../form/dashboard.php");
        } 
        else{
            echo "query did not run well";
        }
    }

?>