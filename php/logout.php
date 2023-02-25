<?php
    include_once '../database/databaseconnection.php';
    session_start();
    session_unset();
    session_destroy();

    echo header("Location: ../form/login.php");
?>