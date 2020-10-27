<?php
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
?>