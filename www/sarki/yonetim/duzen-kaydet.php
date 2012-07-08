<title>Duzen-Kaydet</title>
<?php 
include("cevirme.php"); 
include("baglanti.php"); 

$icerik=$_POST['elm1'];
$s_adi=$_POST['s_adi'];
$baslik=$_POST['baslik'];
$aciklama=$_POST['aciklama'];
$sanatci=$_POST['sanatci'];
$id=$_POST['id'];

mysql_query("update sarki_sozleri set sarki_adi='$s_adi',sarki_sozleri='$icerik',baslik='$baslik',sanatci='$sanatci',aciklama='$aciklama' where sarki_id='$id'");

echo "Deðiþiklikler Kaydedildi.</br></br>";
echo " <a href=\"yazi-islem.php\"> Düzenleme Sayfasýna Dön </a> </br></br>";
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