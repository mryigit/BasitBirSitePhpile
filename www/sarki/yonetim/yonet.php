<title>Y�netim Paneli</title>
<?php 
$giris=0;

session_start();/*Oturum a��l�yor.*/
if ((isset($_SESSION['ad'])) && (isset($_SESSION['sifre'])))
{ 
 $ad=$_SESSION["ad"]; /*Oturumun ad de�i�keni $ad de�i�kenine al�nd�.*/
 $sifre=$_SESSION["sifre"]; 
 if (($ad=="murat") && ($sifre=="1436")) {$giris=1;}
}/*�st sat�rde oturumdan gelen ad ve �ifre kontrol ediliyor. E�er do�ruysa giri� de�i�keni 1 yap�l�yor.*/

if ((isset($_POST['ad'])) && (isset($_POST['sifre'])))
{/*�st sat�rda formdan gelen veri varsa kontrole ba�la �art� var. E�er bu sayfaya daha �nceden giri� yapm�� biri gelmi�se formdan bilgi gelmemi�tir ve bu kontrol yap�lmassa hata olu�ur.*/
$ad=$_POST['ad']; 
$sifre=$_POST['sifre']; 
if (($ad=="murat") && ($sifre=="1436")) {$giris=1;}
}/*�st sat�da formdan gelen kullan�c� ad� ve �ifre kontrol ettiriliyor.*/


if ($giris<>1)/*E�er oturum ve formdan do�ru �ifre gelmemi�se*/
{
echo "Hatal� Giri� Yapt�n�z... </br> </br>";
echo " <a href=\"admin-giris.php\"> Bi daha denemek istermisin :) </a> ";
} 
 else
 {
	echo "<center><b><big><big><big>Ho� Geldiniz Admin</big></big></big></b></center><br></br><br></br>";
	echo "<b><u><big>Men�</big></u></b><br></br>";
	echo " <a href=\"kullanici-islem.php\"><button>Kullan�c� Sil</button></a> </br></br>";
	echo " <a href=\"yeni-yazi.php\"><button>Yeni �ark� Giri�i</button></a> </br></br>";
	echo " <a href=\"yazi-islem.php\"><button>�ark� Bilgisi D�zenle/�ark� Sil</button></a> </br></br>";
	echo "<b>��k�� yapmak i�in</b> <a href=\"admin-cikis.php\"><button>TIKLAYINIZ</button></a> </br></br>";
	
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