#admin id:murat
#admin sifre:1436

#admin kay�t alan� yoktur admin kaydetmek icin yonetim klasoru icinde yonet.php dosyas�ndan
eklene bilir.
	-bu projede admin kay�t alan� koymad�m cunku as�l amac�m kullan�c� ile olan k�s�md�
	-admin kay�t yoktur ancak admin giris vard�r admin giris yaparak istedigi uyeyi silebilir
	-istedigi sark�n�n bilgilerini degistirebilir
	-istediginde yeni sark� ekleyebilir

#kullan�c� kay�t alan� ve giris alan� vard�r mesela ornek kullan�c� ad� ve sifre s�ras�yla
(murat,1234) dur ama isterseniz anasayfadak� kay�t ol butonuna t�klayarak yeni kay�t ekleye
bilirsiniz

#kullan�c�n�n yetkiler:
	-kullan�c�n�n tek yetkisi siteye giris yap�p arad�g� sark�n�n sozlerini gorebilmektir
	-bask bir yetkisi yoktur

#db ile bilgi:
	-db adi:sarkilar
	-db sarki_sozleri ve uye olmak uzere 2 k�s�mdan olu�ur
	-sarki_sozlerinin icindekiler:
		-sarki_id :gelen kayda bir id atar auto increamentder yani otomatik artar
		-sarki_adi:sarkinin ad�n� tutar
		-sarki_sozleri:sarki sozlerini tutar
		-baslik:sarkinin turunu tutar
		-sanatci:sanatcin ad�n�n tutldugu yer
		-aciklama: sarki hakk�nda aciklamalar piyasay c�kt� y�l gibi

	uye nin icindekiler:
		-id:gelen kayda bir id atar auto increment dir
		-ad: uyenin ad�
		-kullaniciadi:uye nin kullanici adini tutar
		-sifre:sifreyi tutar
		-email:email adresini tutar
############EN GENEL AC�IKLAMA###########################

-BU S�TEN�N DB S�N� WAMP SERVERDA OLU�TURDUM AYRICA S�TEY� DE WAMP SERVERDA TEST ETT�M
