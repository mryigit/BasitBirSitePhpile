<title>Þarký Düzenle</title>
<?php include("cevirme.php"); ?>
<?php include("baglanti.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Full featured example</title>

<!-- TinyMCE -->
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->
</style></head>
<body>
<?php 

$id=$_GET['id'];
echo $id;
$sonuc=mysql_query("select * from sarki_sozleri where sarki_id='$id'");
$kayit=mysql_fetch_row($sonuc);
$sarki_adi=$kayit[1];
$sarki_sozleri=$kayit[2];
$baslik=$kayit[3];
$sanatci=$kayit[4];
$aciklama=$kayit[5];
?>
<form method="post" action="duzen-kaydet.php">
	<div>
		
		<!-- Gets replaced with TinyMCE, remember HTML in a textarea should be encoded -->
		<div>
		  <p>Þarký Adý: 
		    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input name="s_adi" type="text" id="s_adi" value="<?php echo $sarki_adi; ?>" size="80" />
		    </label>
		  </p>
		  <p>Sayfa Baþlýðý: 
		    <label>&nbsp;&nbsp;&nbsp;&nbsp;
		    <input name="baslik" type="text" id="baslik" value="<?php echo $baslik; ?>" size="80" />
		    &nbsp;</label>
		  </p>
		  <p>Sanatcý Adý: 
		    <label></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input name="sanatci" type="text" id="sanatci" value="<?php echo $sanatci; ?>" size="80" />
		    &nbsp;&nbsp;&nbsp;</p>
		  <p>Açýklama: 
		    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    <input name="aciklama" type="text" id="aciklama" value="<?php echo $aciklama; ?>" size="80" />
		    &nbsp;</label>
		  </p>
		  <p>Þarký Sözleri: <br />
		    <textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 80%">
				<?php echo $sarki_sozleri; ?>
			</textarea>
          </p>
		  
		  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
		  
	    </div>

		
		<input type="submit" name="save" value="kaydet" />
		<input type="reset" name="reset" value="sýfýrla" />
	</div>
</form>

</body>
</html>
