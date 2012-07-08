<?php

$ad = $_POST['ad'];
$kullaniciadi = $_POST['kullaniciadi'];
$sifre = $_POST['sifre'];
$posta = $_POST['posta'];

if(empty($ad)){
echo("<center><b>Adýnýzý Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($kullaniciadi)){
echo("<center><b>Kullanýcý Adýnýzý Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($sifre)){
echo("<center><b>Þifrenizi Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}elseif(empty($posta)){
echo("<center><b>E-Postanýzý Yazmadýnýz. Lütfen Geri Dönüp Doldurunuz.</b></center>");
}else{
include("baglanti.php");
$sql = "insert into uye (ad, kullaniciadi, sifre, email)
values ('$ad', '$kullaniciadi', '$sifre', '$posta')";
$kayit = mysql_query($sql);
}
if (isset ($kayit)){
echo "<center><font color='#ff0000'</font><big>Üye Kaydýnýz Yapýlmýþtýr</big></center><br></br>";
echo "<td><a href='kullanici-giris.php'><b>Girise Git</b></a></td>";
}
else {
echo "<center><font color='#ff0000'</font><big>Kayýt Baþarýsýz</big></center>";
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