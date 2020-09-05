<?php

   $id = $_GET["id"];
    if ($id==NULL){
        header("Location:index.php");

    }
   $servername = "localhost";
   $username = "root";
   $password = "su0214145";
   $dbname = "bbs";
    // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);  
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //使用SQL delete data指令
    $sql = "DELETE FROM news WHERE id='$id' LIMIT 1";  //選取全部資料
      //$sql = "SELECT id, message, postdate FROM nems";
    $result = $conn->query($sql);
    $conn->close();
    header("Location:index.php");
    exit;


?>