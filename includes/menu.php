<?php  
   $target =$_POST["target"];
   if($target!=NULL){
       header("Location: $target");
       exit;
     }
   $menudata = array (
       array("name"=>"Home", "link"=>"../index"),
       array("name"=>"Brithday", "link"=>"../test01"),
       array("name"=>"GGGossip Broad", "link"=>"../test02"),
       array("name"=>"Myplaylist", "link"=>"../test03"),
       array("name"=>"NTHU", "link"=>"https://www.nthu.edu.tw/")
   );

   echo "<form method=POST action=index.php>";
   echo "<select name=target>";
      foreach ($menudata as $item) {
          echo "<option value=".$item["link"].">".$item["name"]."</option>";      
      }
   
   echo "</select>";
   echo "<input type=submit value=GO! >";
   echo "</form>";

?>