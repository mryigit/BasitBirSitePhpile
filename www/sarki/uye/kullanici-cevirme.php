<?php 

$kullaniciadi=$_COOKIE["kullanici"]; 
if($kullaniciadi==""){ 

 

echo "giris yap�lmam�� lutfen ";
echo "<a href=kullanici-giris.php><font color='#ff0000'<big>Giri�</big></font></a> yap�n�z";

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