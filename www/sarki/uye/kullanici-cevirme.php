<?php 

$kullaniciadi=$_COOKIE["kullanici"]; 
if($kullaniciadi==""){ 

 

echo "giris yapýlmamýþ lutfen ";
echo "<a href=kullanici-giris.php><font color='#ff0000'<big>Giriþ</big></font></a> yapýnýz";

exit(); 
}else{ 

setcookie("kullanici"); 
session_start();

    
} 

?> 
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->
</style></head>
<body>