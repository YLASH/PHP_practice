<?php 
    require "../includes/configs.php";
    $pid = $_GET["pid"];
    $name = $_GET["name"];
    $vid = $_GET["vid"];
    if ($vid==NULL) {
      $vid = "AN0rQR0RlOM";
    }
    session_start();
    $user_type = $_SESSION["user_type"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yi Lin 0908</title>
    <style>
        body {
            font-family:微軟正黑體;background-color:#FFF5EE	;color: #774836; }
        button {background-color: #F7A992;border-radius: 10px;border:0.5px;padding: 4px;margin: 1px 1px;box-shadow: 2px 3px #888888}
    </style>
</head>

<body>
<img src="/mysite/0903/images/playlist titl.png" height="100"> 
<hr>
<?php include "../includes/menu.php"?>
<hr>
<?php
 $tags = "<iframe width='600' height='330' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
 $imgtags="https://i.ytimg.com/vi/^^^^/hqdefault.jpg";

//以下建立SQL查詢指令
$sql = "SELECT * FROM video WHERE pid='$pid'";
//以下執行SQL查詢指令，並把結果傳回給$result變數
$result = $conn->query($sql);
if ($user_type!=NULL) {
  //如果已經登入的話，要有可以新增影片的表單
  echo "<form method=POST action=addvideo.php>";
  echo "<input type=hidden value='$pid' name=pid>";
  echo "<input type=hidden value='$name' name=name>";
  echo "影片名稱：<input type=text name=title size=40>";
  echo "影片ID：<input type=text name=vid size=15>";
  echo "<input type=submit value=新增>";
  echo "</form>";
}
if ($result->num_rows > 0) { //檢查記錄的數量，看看是否有資料
  // output data of each row
  echo "<center>";

  echo "<table width=800 border=1>";
  echo "<tr><td align=center>";
  echo str_replace("^^^^", $vid, $tags);
  echo "</td></tr>";
  echo "</table>";

  echo "<table width=800 >";
  /*下面這行是表格的標題列
  if ($user_type==NULL) {
    //如果未登入的話，就維持原有的標題
    echo "<tr bgcolor=#bbbbbb><td>影片標題</td><td>影片ID</td></tr>";
  } else {
    //如果已經登入的話，就加上「貼文管理」欄位
    echo "<tr bgcolor=#bbbbbb><td>影片標題</td><td>影片ID</td><td>貼文管理</td></tr>";
  }*/
  $vc = 0;
    echo "<tr bgcolor=#ffffcc>";
  while($row = $result->fetch_assoc()) {
    $id = $row["id"];
    $vidindb = $row["vid"];
    echo "<td>" ; 
    echo "<a href='tvshow.php?pid=$pid&name=$name&vid=$vidindb'>";
    echo "<img src='" . str_replace("^^^^", $row["vid"], $imgtags). "' width=250 align=center><br>";
    echo  $row["title"]. "<a><br>"; 
    // 如果是已登入使用者，要加上貼文管理（連結）的欄位
    if ($user_type!=NULL) {
      echo "<a href='delvideo.php?id=$id&pid=$pid&name=$name&vid=$vidindb'>刪除</a>";
    }
    $vc++;
    //echo"<br>$vc";
    echo "</td>";
    if($vc%3==0){   //3個後 產生新的一列
      echo"</tr><tr bgcolor=#ffffcc>"; 
    } 
    
  }echo "</tr>";
  echo "</table></center>";
} else {
  echo "0 results"; // 如果資料表中沒有記錄，要顯示的內容
}
$conn->close();

 
?>
<br>
<button align=center><a href="index.php">Back</a></button>
<hr>
<?php include"../includes/footer.php";?>   
</body>
</html>