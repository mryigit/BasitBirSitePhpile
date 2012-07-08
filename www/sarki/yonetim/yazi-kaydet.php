<title>Yazý-Kaydet</title>
<?php 
include("cevirme.php"); /*include ile cevirme.php bu sayfaya eklendi*/
include("baglanti.php"); 

$s_adi=$_POST['s_adi']; /*Þarký adýnýn yazýldýðý text kutusuna s_adi ismini vermiþtik. $_POST ile text kutusundaki veri alýnýp $s_adi deðiþkenine atanýyor.*/ 
$icerik=$_POST['elm1']; /*tinymce editöründeki metin alanýnýn (textarea) adý elm1'di. Þarký sözleri $icerik deðiþkenine aktarýldý.*/ 
$baslik=$_POST['baslik'];
$aciklama=$_POST['aciklama'];
$sanatci=$_POST['sanatci'];

mysql_query("insert into `sarki_sozleri` (`sarki_adi`,`sarki_sozleri`,`baslik`,`sanatci`,`aciklama`) values ('$s_adi','$icerik','$baslik','$sanatci','$aciklama')");
/*insert into ile formdan gelen bilgileri veritabanýna kaydeden sql yazýlýyor ve mysql_query ile sql komutu iþletiliyor.
sarki_id alanýna bilgi giriþi yapýlmaz. Çünkü; bu alan A_I (otomatik artan sayý)olarak belirlendi. Mysql kendisi buraya otomatik deðer atar.*/
echo "Kayýt edildi</br></br>";
echo " <a href=\"yeni-yazi.php\"> Þarký Kayýt Alanýna Dön </a> </br></br>";
echo " <a href=\"yonet.php\"> Yönetim Paneli Ana Sayfasýna Dön </a> </br></br>";
?>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->
</style></head>
<body>