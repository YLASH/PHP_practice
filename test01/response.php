<?php
      $year = $_POST["year"] + 1911;
      $month = $_POST["month"];
      $day = $_POST["day"];
      $birthday = "你的生日是:民國 $year/$month/$day";

      $mon = $month ;
      switch ($mon) {
        case '1':
          $mon= "摩羯座,水瓶座";
          break;
        case '2':
          $mon= "水瓶座,雙魚座";
          break;  
        case '3':
          $mon= "雙魚座,牡羊座";
          break;
        case '4':
          $mon= "牡羊座,金牛座";
          break;
        case '5':
          $mon= "金牛座,雙子座";
          break;
        case '6':
          $mon= "雙子座,巨蠍座";
          break;
        case '7':
          $mon= "巨蠍座,獅子座";
          break;
        case '8':
          $mon= "獅子座,處女座";
          break;             
        case '9':
          $mon= "處女座,天秤座";
          break; 
        case '10':
          $mon= "天秤座,天蠍座";
          break;
        case '11':
          $mon= "天蠍座,射手座";
          break;  
        case '12':
          $mon= "射手座,魔羯座";
          break;        
      }

        $scop = explode(',', $mon);
         $t = $day ;



        if ($month=1 ||$month=4){
          if ($t > "19") {
             $iAstro=$scop[1];
           } else {
             $iAstro=$scop[0];
           }
        }else if($month=3 || $month=5){
           if ($t > "20"){
            $iAstro=$scop[1];
           } else {
             $iAstro=$scop[0];
           }
        }else if($month=6 || $month=12){
           if ($t > "21"){
             $iAstro=$scop[1];
           } else {
             $iAstro=$scop[0];
           }
        }else if($month=7 || $month=8 || $month=9 ||$month=11 ){
           if ($t > "22"){
             $iAstro=$scop[1];
           } else {
             $iAstro=$scop[0];
           }
        }else if($month=10){
           if ($t > "23"){
             $iAstro=$scop[1];
           } else {
             $iAstro=$scop[0];
           }
        }else{
          if ($t > "18"){
             $iAstro=$scop[1];
           } else {
             $iAstro=$scop[0];
           }
        }

        $Astro= " 你的星座是".$iAstro ; 


       echo "<script>";
       echo "alert('$birthday . $Astro');";
       echo "</script>";
     //echo  $birthday.$iAstro ;
 
    date_default_timezone_set('Asia/Tokyo');
     $today = date("Y-m-d");
    echo $today ;
    
     $star =$iAstro;
      switch ($iAstro) {
        case "牡羊座":
          $star= '0';
          break;
        case "金牛座":
          $star= '1';
          break; 
        case "雙子座":
          $star= '2';
          break;
        case "巨蠍座":
          $star= '3';
          break;
        case "獅子座":
          $star= '4';
          break;
        case "處女座":
          $star= '5';
          break;
        case "天秤座":
          $star= '6';
          break;
        case "天蠍座":
          $star= '7';
          break;
        case "射手座":
          $star= '8';
          break;
        case "魔羯座":
          $star= '9';
          break;
        case "水瓶座":
          $star= '10';
          break;
        case "雙魚座":
          $star= '11';
          break;                                                
        }
    echo "<br>" ;
  
    echo "<button><a href=https://astro.click108.com.tw/daily_". $star.".php?iAcDay=". $today. "&iAstro=".$star.">go>>你的每日運勢</a></button>";
   //astro.click108.com.tw/daily_$星座.php?iAcDay="2020-10-26"&iAstro=$星座(0~11).   
   //astro.click108.com.tw/daily_$星座.php?iAcDay=". $today. "&iAstro=$星座(0~11).   
?>       


<br>
<button><a href="index.php">Choose agian</a></button>



