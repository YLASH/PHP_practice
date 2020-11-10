<?php
   session_start();
   $user_type = $_SESSION["user_type"]; 
?>
<?php include"../includes/boostrap.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yi Lin 0903</title>
    <style>
        body {
            font-family:微軟正黑體;background-color:#A1CEFC;color: #660066; }
		       
    </style>

</head>

<body>
<h2>YiLin PHP Practicing web</h2> 
<hr>
<?php include"../includes/menu.php"; 
?>

<hr>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "su0214145";
	$dbname = "estore";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM uploaded_images order by id desc";  //選取全部資料
	//$sql = "SELECT id, message, postdate FROM nems";
	$result = $conn->query($sql);
	   if ($user_type!=NULL){
	   	echo "<button><a href='/mysite/0903/upload.php'>go upload</a></button>"; 
	   	//upload file practicing not success yet
	   }
		
		  $conn->close();


?>
<br>
	<div class=container>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <center><img src="../images/image_02.jpg" class="d-block" alt="Brisbane city" height="500" ></center>
		    </div>
		    <div class="carousel-item">
		      <center><img src="../images/image_03.jpg" class="d-block" alt="zucchini farm" height="500" ></center>
		    </div>
		    <div class="carousel-item">
		      <center><img src="../images/image_07.jpg" class="d-block" alt="zucchini picker" height="500" ></center>
		    </div>
		    <div class="carousel-item">
		      <center><img src="../images/image_08.jpg" class="d-block" alt="Bundaberg sky" height="500" ></center>
		    </div>
		    <div class="carousel-item">
		      <center><img src="../images/image_10.jpg" class="d-block" alt="Brisbane story bridge" height="500" ></center>
		    </div>
		    <div class="carousel-item">
		      <center><img src="../images/image_05.jpg" class="d-block" alt="tomato picking" height="500"></center>
		    </div>
		    <div class="carousel-item">
		      <center><img src="../images/image_06.jpg" class="d-block" alt="lomen picking" height="500"></center>
		    </div>
		     <div class="carousel-item">
		      <center><img src="../images/image_09.jpg" class="d-block" alt="barista inter" height="500"></center>
		    </div>
		     <div class="carousel-item">
		      <center><img src="../images/image_11.jpg" class="d-block" alt="barista practicing"height="500"></center>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>

<br>
<?php include"includes/footer.php";?>   
</body>
</html>