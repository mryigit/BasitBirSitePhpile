<?php 
$baglan=mysql_connect("localhost","root");
if(!($baglan))
{
die('Veritabani baglantisi kurulamadi: '.mysql_error());
}
mysql_select_db("sarkilar",$baglan);
setlocale(LC_COLLATE, 'turkish');
mysql_query("SET NAMES 'latin5'");  

?>