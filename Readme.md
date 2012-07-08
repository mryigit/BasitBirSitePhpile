#admin id:murat
#admin sifre:1436

#admin kayýt alaný yoktur admin kaydetmek icin yonetim klasoru icinde yonet.php dosyasýndan
eklene bilir.
	-bu projede admin kayýt alaný koymadým cunku asýl amacým kullanýcý ile olan kýsýmdý
	-admin kayýt yoktur ancak admin giris vardýr admin giris yaparak istedigi uyeyi silebilir
	-istedigi sarkýnýn bilgilerini degistirebilir
	-istediginde yeni sarký ekleyebilir

#kullanýcý kayýt alaný ve giris alaný vardýr mesela ornek kullanýcý adý ve sifre sýrasýyla
(murat,1234) dur ama isterseniz anasayfadaký kayýt ol butonuna týklayarak yeni kayýt ekleye
bilirsiniz

#kullanýcýnýn yetkiler:
	-kullanýcýnýn tek yetkisi siteye giris yapýp aradýgý sarkýnýn sozlerini gorebilmektir
	-bask bir yetkisi yoktur

#db ile bilgi:
	-db adi:sarkilar
	-db sarki_sozleri ve uye olmak uzere 2 kýsýmdan oluþur
	-sarki_sozlerinin icindekiler:
		-sarki_id :gelen kayda bir id atar auto increamentder yani otomatik artar
		-sarki_adi:sarkinin adýný tutar
		-sarki_sozleri:sarki sozlerini tutar
		-baslik:sarkinin turunu tutar
		-sanatci:sanatcin adýnýn tutldugu yer
		-aciklama: sarki hakkýnda aciklamalar piyasay cýktý yýl gibi

	uye nin icindekiler:
		-id:gelen kayda bir id atar auto increment dir
		-ad: uyenin adý
		-kullaniciadi:uye nin kullanici adini tutar
		-sifre:sifreyi tutar
		-email:email adresini tutar
############EN GENEL ACÇIKLAMA###########################

-BU SÝTENÝN DB SÝNÝ WAMP SERVERDA OLUÞTURDUM AYRICA SÝTEYÝ DE WAMP SERVERDA TEST ETTÝM
