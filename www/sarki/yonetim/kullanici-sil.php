<title>Kullanýcý Silindi</title>
<?php 
include("cevirme.php"); 
include("baglanti.php"); 
$id=$_GET['id'];
mysql_query("DELETE FROM uye WHERE id='$id'");
echo "Kayýt Silindi.</br></br>";
echo " <a href=\"kullanici-islem.php\"> Düzenleme Sayfasýna Dön </a> </br></br>";
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