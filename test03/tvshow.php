<?php 
    $pid = $_GET["pid"];
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
            font-family:微軟正黑體;background-color:#FFF5EE	;color: #774836; }
    </style>
</head>

<body>
<img src="/mysite/0903/images/playlist titl.png" height="100"> 
<hr>
<?php include"../includes/menu.php"?>
<hr>
<?php

$tags = "<iframe width='560' height='315' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";

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


$sql = "SELECT * FROM video WHERE pid='$pid'";  //選取全部資料
//$sql = "SELECT id, message, postdate FROM nems";
$result = $conn->query($sql);
  if ($user_type==NULL){
     echo "<form method=POST action='chkpass.php'>";
     echo "Enter password:<input type=password name=password>";
     echo "<input type=submit value=GO! >";
     echo "</form>";
    } else {
      echo "<form method=POST action='post.php'>";
      echo "New Video:<input type=text name='name' size=30>";
      echo "<input type =submit value=Post!!>";
      echo "</form>";

      echo "<button><a href=logout.php>Log-out</a></button>"; //登出按鈕
    }

if ($result->num_rows > 0) {   //檢查紀錄的數量,看看是否有資料
    // output data of each row
echo "<table border=0.3 width=800 bgcolor=#75ACC0>";
if ($user_type==NULL) {
echo "<tr bgcolor=#F3CDA9 align=center><td>Video Title</td><td>Video</td></tr>";
} else {
  echo"<tr bgcolor=#E1B878 align=center><td>Video Title</td><td>Video</td><td colspan='2'>Edit</td></tr>";
 }


while($row = $result->fetch_assoc()) {
  $id=$row["id"]; 
  echo "<tr bgcolor=#F3CDA9>"  ;   
   echo "<td>".$row["title"] ."</td><td><button><a href='tvshow.php?pid=".$pid."&v=".$row["vid"]."'>PLAY!</a></button</td>";
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
 
$VID=$_GET["v"] ;
echo str_replace("^^^^", $VID, $tags);

?>

<hr>
<?php include"../includes/footer.php";?>   
</body>
</html>