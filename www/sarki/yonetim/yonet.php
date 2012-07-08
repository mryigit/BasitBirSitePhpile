<title>Yönetim Paneli</title>
<?php 
$giris=0;

session_start();/*Oturum açýlýyor.*/
if ((isset($_SESSION['ad'])) && (isset($_SESSION['sifre'])))
{ 
 $ad=$_SESSION["ad"]; /*Oturumun ad deðiþkeni $ad deðiþkenine alýndý.*/
 $sifre=$_SESSION["sifre"]; 
 if (($ad=="murat") && ($sifre=="1436")) {$giris=1;}
}/*üst satýrde oturumdan gelen ad ve þifre kontrol ediliyor. Eðer doðruysa giriþ deðiþkeni 1 yapýlýyor.*/

if ((isset($_POST['ad'])) && (isset($_POST['sifre'])))
{/*üst satýrda formdan gelen veri varsa kontrole baþla þartý var. Eðer bu sayfaya daha önceden giriþ yapmýþ biri gelmiþse formdan bilgi gelmemiþtir ve bu kontrol yapýlmassa hata oluþur.*/
$ad=$_POST['ad']; 
$sifre=$_POST['sifre']; 
if (($ad=="murat") && ($sifre=="1436")) {$giris=1;}
}/*üst satýda formdan gelen kullanýcý adý ve þifre kontrol ettiriliyor.*/


if ($giris<>1)/*Eðer oturum ve formdan doðru þifre gelmemiþse*/
{
echo "Hatalý Giriþ Yaptýnýz... </br> </br>";
echo " <a href=\"admin-giris.php\"> Bi daha denemek istermisin :) </a> ";
} 
 else
 {
	echo "<center><b><big><big><big>Hoþ Geldiniz Admin</big></big></big></b></center><br></br><br></br>";
	echo "<b><u><big>Menü</big></u></b><br></br>";
	echo " <a href=\"kullanici-islem.php\"><button>Kullanýcý Sil</button></a> </br></br>";
	echo " <a href=\"yeni-yazi.php\"><button>Yeni Þarký Giriþi</button></a> </br></br>";
	echo " <a href=\"yazi-islem.php\"><button>Þarký Bilgisi Düzenle/Þarký Sil</button></a> </br></br>";
	echo "<b>çýkýþ yapmak için</b> <a href=\"admin-cikis.php\"><button>TIKLAYINIZ</button></a> </br></br>";
	
	$_SESSION["ad"]=$ad;
    $_SESSION["sifre"]=$sifre;
 }
 
?>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->
</style>