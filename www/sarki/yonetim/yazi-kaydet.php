<title>Yaz�-Kaydet</title>
<?php 
include("cevirme.php"); /*include ile cevirme.php bu sayfaya eklendi*/
include("baglanti.php"); 

$s_adi=$_POST['s_adi']; /*�ark� ad�n�n yaz�ld��� text kutusuna s_adi ismini vermi�tik. $_POST ile text kutusundaki veri al�n�p $s_adi de�i�kenine atan�yor.*/ 
$icerik=$_POST['elm1']; /*tinymce edit�r�ndeki metin alan�n�n (textarea) ad� elm1'di. �ark� s�zleri $icerik de�i�kenine aktar�ld�.*/ 
$baslik=$_POST['baslik'];
$aciklama=$_POST['aciklama'];
$sanatci=$_POST['sanatci'];

mysql_query("insert into `sarki_sozleri` (`sarki_adi`,`sarki_sozleri`,`baslik`,`sanatci`,`aciklama`) values ('$s_adi','$icerik','$baslik','$sanatci','$aciklama')");
/*insert into ile formdan gelen bilgileri veritaban�na kaydeden sql yaz�l�yor ve mysql_query ile sql komutu i�letiliyor.
sarki_id alan�na bilgi giri�i yap�lmaz. ��nk�; bu alan A_I (otomatik artan say�)olarak belirlendi. Mysql kendisi buraya otomatik de�er atar.*/
echo "Kay�t edildi</br></br>";
echo " <a href=\"yeni-yazi.php\"> �ark� Kay�t Alan�na D�n </a> </br></br>";
echo " <a href=\"yonet.php\"> Y�netim Paneli Ana Sayfas�na D�n </a> </br></br>";
?>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->
</style></head>
<body>