<?php
   session_start();
   $user_type = $_SESSION["user_type"]; 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yi Lin 0903</title>
    <style>
        body {
            font-family:微軟正黑體;background-color:black;color: lightgray; }
    </style>
</head>

<body>
<img src="/mysite/0903/images/test02-head0904.png" width="500" > 
<hr>
<?php include"../includes/menu.php"?>
<hr>
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

$sql = "SELECT * FROM news order by postdate desc";  //選取全部資料
//$sql = "SELECT id, message, postdate FROM nems";
$result = $conn->query($sql);
  if ($user_type==NULL){
     echo "<form method=POST action='chkpass.php'>";
     echo "Enter password:<input type=password name=password>";
     echo "<input type=submit value=GO! >";
     echo "</form>";
    } else {
      echo "<form method=POST action='post.php'>";
      echo "Gossip:<input type=text name=message size=30>";
      echo "<input type =submit value=Post!!>";
      echo "</form>";

      echo "<button><a href=logout.php>Log-out</a></button>"; //登出按鈕
    }

if ($result->num_rows > 0) {   //檢查紀錄的數量,看看是否有資料
    // output data of each row
echo "<table border=0.8 width=500 bgcolor=#696969>";
if ($user_type==NULL) {
echo "<tr bgcolor=#000080 align=center><td>Context</td><td>postdate</td></tr>";
} else {
  echo"<tr bgcolor=#000080 align=center><td>Context</td><td>Postdate</td><td colspan='2'>Edit</td></tr>";
 }


while($row = $result->fetch_assoc()) {
  $id=$row["id"]; 
  echo "<tr bgcolor=#000000>"  ;   
   echo "<td>". $row["message"]."</td><td>".$row["postdate"] ."</td>";
   if ($user_type!=NULL) {
    echo "<td>";
    echo "<a href='edit.php?id=$id'><center>Edit</center></a></td>";
    echo"<td>";
    echo"<a href='delet.php?id=$id'><center>Delet</center></a></td>";
   }
   echo "</tr>";
    }
} else {
    echo "0 results";
  }
  $conn->close();
echo "</table>";
echo "<br> ";

?>

<hr>
<?php include"../includes/footer.php";?>   
</body>
</html>