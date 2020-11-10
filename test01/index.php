<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yi Lin 0903_test01</title>
    <style>
        body {
            font-family:微軟正黑體;color: #660066; }
    </style>
</head>

<body>
<h2>YiLin PHP Practicing 01</h2> 
<hr>
<?php  include "../includes/menu.php";?>
<hr>
 <form method=POST action="response.php">
     <select name=year>民國
         <?php 
         for($i=106; $i>=40;$i--){
            echo "<option value=$i>$i</option>";
         }
          ?>
    </select>年
    <select name=month>
         <?php 
         for($i=1; $i<=12 ; $i++) {
            echo "<option value=$i>$i</option>";
         }
          ?>
    </select>月
    <select name=day>
         <?php 
         for($i=1; $i<=31 ;$i++) {
            echo "<option value=$i>$i</option>";
         }
          ?>
    </select>日

     <input type=submit>

 </form>

<hr>
<?php  include "../includes/footer.php";?>


