<?php

$ad = $_POST['ad'];
$kullaniciadi = $_POST['kullaniciadi'];
$sifre = $_POST['sifre'];
$posta = $_POST['posta'];

if(empty($ad)){
echo("<center><b>Ad�n�z� Yazmad�n�z. L�tfen Geri D�n�p Doldurunuz.</b></center>");
}elseif(empty($kullaniciadi)){
echo("<center><b>Kullan�c� Ad�n�z� Yazmad�n�z. L�tfen Geri D�n�p Doldurunuz.</b></center>");
}elseif(empty($sifre)){
echo("<center><b>�ifrenizi Yazmad�n�z. L�tfen Geri D�n�p Doldurunuz.</b></center>");
}elseif(empty($posta)){
echo("<center><b>E-Postan�z� Yazmad�n�z. L�tfen Geri D�n�p Doldurunuz.</b></center>");
}else{
include("baglanti.php");
$sql = "insert into uye (ad, kullaniciadi, sifre, email)
values ('$ad', '$kullaniciadi', '$sifre', '$posta')";
$kayit = mysql_query($sql);
}
if (isset ($kayit)){
echo "<center><font color='#ff0000'</font><big>�ye Kayd�n�z Yap�lm��t�r</big></center><br></br>";
echo "<td><a href='kullanici-giris.php'><b>Girise Git</b></a></td>";
}
else {
echo "<center><font color='#ff0000'</font><big>Kay�t Ba�ar�s�z</big></center>";
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