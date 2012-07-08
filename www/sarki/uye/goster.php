<title>Sözler</title><?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php 

include("baglanti.php");
$id=$_GET['id'];
$soz=mysql_query(" select * from sarki_sozleri where sarki_id='$id'");
$kayitlar=mysql_fetch_array($soz);
$sarki_sozleri=$kayitlar['sarki_sozleri'];
echo "<font color='#ff0000'</font><center><big><big><big><u>ÞARKININ SÖZLERÝ</u></big></big></big></center>";
echo " <a href=\"muzik.php\"><font color='#ff0000'</font> Þarkýlar Sayfasýna Dön </a> </br></br>";echo "<td><center><font color='#ff0000'</font>".$sarki_sozleri."</center></td>";


?>
<style type="text/css">
<!--
body {
	background-image: url(../sarkii2.jpg);
}
-->
</style>