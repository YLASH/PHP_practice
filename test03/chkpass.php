<?php 
    session_start();  
    $password = $_POST["password"];
    if ($password==123){
        $_SESSION["user_type"] = 1 ;
    } 
    //redirect to test02.php
    header("Location: index.php");
    exit;
?>