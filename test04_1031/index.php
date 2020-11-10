<!DOCTYPE html>
<html>
<head>
	<title>隨機選圖</title>
</head>
<body>
<h2>練習隨機選圖</h2>
<!--<p>選取你有興趣的商品 隨機在所有商品中取3個,
	非現在所看到之商品
	推薦此用戶->商品非此用戶所上傳 p->userid!= uid

</p>
<img src='images/image_02'>
if (userid != uid &&pid != id )
   rand(id)
-->
<script>
function checkID(formElement){
    re - /^[A-Z]\d{9}$/;
    if(!re.test(formElement.value){
    alert("輸入格式錯誤!");
    } else{
    	alert("ok");
    }
}
</script>

<form >
<input type="text" value="A123456789">
<input type="button" onclick="checkID()">

</form>

</body>
</html>

