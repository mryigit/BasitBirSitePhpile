<title>�ark� Silindi</title>
<?php 
include("cevirme.php"); 
include("baglanti.php"); 
$id=$_GET['id'];
mysql_query("DELETE FROM sarki_sozleri WHERE sarki_id='$id'");
echo "Kay�t Silindi.</br></br>";
echo " <a href=\"yazi-islem.php\"> D�zenleme Sayfas�na D�n </a> </br></br>";
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