<title>Þarkýlar</title>
<?php 
 
include("baglanti.php");

echo "<form id=\"form1\" name=\"form1\" method=\"post\" action=\"\"></br>";
echo "<input name=\"aranan\" type=\"text\" size=\"60\" />";
echo " <input type=\"submit\" name=\"Submit\" value=\"Ara\" />";echo " <a href=\"anasayfa.php\"> <button>Anasayfa</button></a> </br></br>";
echo "</form>";

$arama_var=0;
if (isset($_POST['aranan']))
{$aranan=$_POST['aranan'];
$arama_var=1;
}

echo "<table cellpadding=\"6\">";
echo "<tr>";
echo "<td><b><u>Þarký Adý</u></b></td>";
echo "</tr>";

if ($arama_var==0)
{$liste=mysql_query("select * from sarki_sozleri");}
else 
{$liste=mysql_query("select * from sarki_sozleri where sarki_adi like '%$aranan%'");}

while ($kayitlar=mysql_fetch_array($liste))
{

$sarki_adi=$kayitlar['sarki_adi'];
$sarki_id=$kayitlar['sarki_id'];
echo "<tr>";
echo "<td><font color='#ff0000'</font>".$sarki_adi."</td>";
echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"goster.php?id=".$sarki_id."\"><button>göster</button></a></td>";

echo "</tr>";
}
echo "</table>";
?>
<style type="text/css">
<!--
body {
	background-image: url(../sarkii.JPG);
}
-->
</style>