<title>Kullanýcý Sil</title>
 
<?php 
 
include("baglanti.php");
include("cevirme.php");
echo "<form id=\"form1\" name=\"form1\" method=\"post\" action=\"\"></br>";
echo "<input name=\"aranan\" type=\"text\" size=\"60\" />";
echo " <input type=\"submit\" name=\"Submit\" value=\"Ara\" />"; echo " <a href=\"yonet.php\"> <button>GERÝDÖN</button></a> </br></br>";
echo "</form>";



$arama_var=0;
if (isset($_POST['aranan']))
{$aranan=$_POST['aranan'];
$arama_var=1;
}

echo "<table cellpadding=\"6\">";
echo "<tr>";
echo "<td><b><u>Kullanýcý Adý</u></b></td>";

echo "</tr>";

if ($arama_var==0)
{$liste=mysql_query("select * from uye");}
else 
{$liste=mysql_query("select * from uye where kullaniciadi like '%$aranan%'");}

while ($kayitlar=mysql_fetch_array($liste))
{
$kullaniciadi=$kayitlar['kullaniciadi'];
$id=$kayitlar['id'];
echo "<tr>";
echo "<td><font color='#ff0000'</font>".$kullaniciadi."</td>";
echo " <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"kullanici-sil.php?id=".$id."\"><button>Sil</button></a></td>";
echo "</tr>";
}
echo "</table>";

?>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->
</style></head>
<body>