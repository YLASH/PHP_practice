<?php

   $Message = $_POST["message"];
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

    $sql = "INSERT INTO news(message) value ('$Message')";  //選取全部資料
      //$sql = "SELECT id, message, postdate FROM nems";
    $result = $conn->query($sql);
    $conn->close();
    header("Location:index.php");
    exit;


?>