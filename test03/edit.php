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

    $sql = "SELECT * FROM playlist WHERE id='$id' LIMIT 1";  //選取全部資料
      //$sql = "SELECT id, message, postdate FROM nems";
    
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {   
        $row = $result->fetch_assoc();
        $id=$row["id"]; 
        $name= $row["name"];
        echo "以下為欲修改資料 : <br>";
        echo "<form method=POST action='update.php'>";
        echo "<input type=hidden value=$id name=id >";
        echo "Message :<input type=text value='$name' name=name size=30>";
        echo "<input type=submit value=修改>";
        echo "</form>";
        echo "<a href='index.php'>回上頁</a>";
        
    }else {
        echo "找不到你要編輯的留言~~<br>";
        echo "<a href='index.php'>回上頁</a>";
      }


    $conn->close();
    

?>