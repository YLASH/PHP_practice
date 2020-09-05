<?php  
   $target =$_POST["target"];
   if($target!=NULL){
       header("Location: $target");
       exit;
     }
   $menudata = array (
       array("name"=>"Home", "link"=>"/mysite/0903/index.php"),
       array("name"=>"Brithday", "link"=>"/mysite/0903/test01"),
       array("name"=>"GGGossip Broad", "link"=>"/mysite/0903/test02"),
       array("name"=>"Myplaylist", "link"=>"/mysite/0903/test03"),
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