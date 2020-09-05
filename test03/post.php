<?php

   $name = $_POST["name"];
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

    $sql = "INSERT INTO playlist(name) value ('$name')";  //選取全部資料
      //$sql = "SELECT id, message, postdate FROM nems";
    $result = $conn->query($sql);
    $conn->close();
    header("Location:index.php");
    exit;


?>