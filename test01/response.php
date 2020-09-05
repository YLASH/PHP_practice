<?php
      $year = $_POST["year"] + 1911;
      $month = $_POST["month"];
      $day = $_POST["day"];

      $birthday = "Your Birhday: $year/$month/$day";
      echo "<script>";
      echo "alert('$birthday')" ;
      echo "</script>";
?>       
<button><a href="index.php">Choose agian</a></button>