<?php 
session_start();
$ad=$_SESSION["ad"]; 
$sifre=$_SESSION["sifre"]; 

if (($ad<>"murat") && ($sifre<>"1436")){
header ("Location: admin-giris.php");

}
?>