<?php

$kullaniciadi = $_POST['kullaniciadi'];
$sifre = $_POST['sifre'];


if ((!$kullaniciadi =="") and (!$sifre =="")) {
include("baglanti.php");
$sql = "select * from uye where kullaniciadi='$kullaniciadi' and sifre='$sifre' ";
$kontrol = mysql_query($sql);
$kayitsayisi = mysql_num_rows($kontrol);
if ($kayitsayisi == "0") {
header ("Location: kullanici-giris.php?hata=yes");
} else {
$kontrol_ok = mysql_fetch_array($kontrol);
setcookie ("kullanici", "$kontrol_ok[kullaniciadi]");
header ("Location: kullanici-panel.php");
}
}
else {
header ("Location: kullanici-giris.php?hata=yes");
}
?>