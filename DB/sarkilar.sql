-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 29 Mayıs 2011 saat 13:18:53
-- Sunucu sürümü: 5.5.8
-- PHP Sürümü: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `sarkilar`
--
CREATE DATABASE `sarkilar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sarkilar`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sarki_sozleri`
--

CREATE TABLE IF NOT EXISTS `sarki_sozleri` (
  `sarki_id` int(11) NOT NULL AUTO_INCREMENT,
  `sarki_adi` varchar(160) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sarki_sozleri` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(160) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `sanatci` varchar(160) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(160) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`sarki_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `sarki_sozleri`
--

INSERT INTO `sarki_sozleri` (`sarki_id`, `sarki_adi`, `sarki_sozleri`, `baslik`, `sanatci`, `aciklama`) VALUES
(6, 'try again', '<p>ıt&rsquo;s been a long time, long time&nbsp;<br />ı shouldn&rsquo;t have left you, left you&nbsp;<br />without a dope beat to step to&nbsp;<br />step to, step to, step to&nbsp;<br />step to, step to&nbsp;<br />freaky freaky&nbsp;<br />ıt&rsquo;s been a long time&nbsp;<br />ı shouldn&rsquo;t have left you&nbsp;<br />without a dope beat to step to&nbsp;<br />step to, step to, step to&nbsp;<br />step to, step to&nbsp;<br />freaky freaky, baby girl uh&nbsp;<br /><br />what would you do?&nbsp;<br />to get to me&nbsp;<br />what would you say?&nbsp;<br />to have your way&nbsp;<br />would you give up?&nbsp;<br />or try again&nbsp;<br />ıf ı hesitate&nbsp;<br />to let you in&nbsp;<br />now would you be yourself&nbsp;<br />or play your role&nbsp;<br />tell all the boys&nbsp;<br />or keep it low&nbsp;<br />ıf ı say no&nbsp;<br />would you turn away?&nbsp;<br />or play me off&nbsp;<br />or would you stay, oh&nbsp;<br /><br />and if at first you don&rsquo;t succeed&nbsp;<br />then dust yourself off and try again&nbsp;<br />you can dust it off and try again, try again&nbsp;<br />cause if at first you don&rsquo;t succeed&nbsp;<br />you can dust it off and try again&nbsp;<br />dust yourself off and try again, try again&nbsp;<br /><br />ı&rsquo;m in to you&nbsp;<br />you into me&nbsp;<br />but ı can&rsquo;t let it go&nbsp;<br />so easily&nbsp;<br />not till ı see&nbsp;<br />whether this could be&nbsp;<br />eternity&nbsp;<br />or just a week&nbsp;<br />you know our chemistry&nbsp;<br />ıs off the chain&nbsp;<br />ıt&rsquo;s perfect now&nbsp;<br />but will it change?&nbsp;<br />this ain&rsquo;t a yes&nbsp;<br />this ain&rsquo;t a no&nbsp;<br />just do your thing&nbsp;<br />we&rsquo;ll see how it goes&nbsp;<br /><br />and if at first you don&rsquo;t succeed&nbsp;<br />then dust yourself off and try again&nbsp;<br />you can dust it off and try again, try again&nbsp;<br />cause if at first you don&rsquo;t succeed&nbsp;<br />you can dust it off and try again&nbsp;<br />dust yourself off and try again, try again&nbsp;<br /><br />see you don&rsquo;t wanna throw it all away&nbsp;<br />ı might be shy on the first date&nbsp;<br />what about the next date?&nbsp;<br />huh? huh? huh? huh?&nbsp;<br />ı said you don&rsquo;t wanna throw it all away&nbsp;<br />ı might be buggin&rsquo; on the first date&nbsp;<br />what about the next date?&nbsp;<br />huh? huh? huh? huh?&nbsp;<br /><br />and if at first you don&rsquo;t succeed&nbsp;<br />then dust yourself off and try again&nbsp;<br />you can dust it off and try again, try again&nbsp;<br />cause if at first you don&rsquo;t succeed&nbsp;<br />you can dust it off and try again&nbsp;<br />dust yourself off and try again, try again&nbsp;<br /><br />and at first you don&rsquo;t succeed yeeeaaahhh&nbsp;<br />dust yourself off and try again&nbsp;<br />you can dust it off and try again, try again&nbsp;<br />cause if at first you don&rsquo;t succeed&nbsp;<br />you can dust it off and try again&nbsp;<br />dust yourself off and try again, try again&nbsp;<br /><br />check it, uh&nbsp;<br />ıt&rsquo;s been a long time,long time&nbsp;<br />shouldn&rsquo;t have left you,left you&nbsp;<br />without a dope beat to step to&nbsp;<br />step to, step to, step to&nbsp;<br />step to, step to, step to, step to&nbsp;<br />freaky-freaky&nbsp;<br />ıt&rsquo;s been a long time&nbsp;<br />we shouldn&rsquo;t have left you&nbsp;<br />without a dope beat to step to&nbsp;<br />step to, step to, step to&nbsp;<br />step to, step to&nbsp;<br />freaky freaky&nbsp;<br /><br /><br />and if at first you don&rsquo;t suceed&nbsp;<br />then dust yourself off and try again&nbsp;<br />you can dust it off and try again, try again&nbsp;<br />cause if at first you don&rsquo;t succeed&nbsp;<br />you can dust it off and try again&nbsp;<br />dust yourself off and try again, try again</p>', 'yabancı', 'Aaliyah', '2004'),
(7, 'ıslak ıslak', '<p>Gecenin nemi mi d&uuml;şm&uuml;ş g&ouml;zlerine?&nbsp;<br style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;" />Ne olur ıslak ıslak bakma &ouml;yle&nbsp;<br style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;" />Sa&ccedil;ını d&ouml;k sineme derdini s&ouml;yle&nbsp;<br style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;" />Yeter ki ıslak ıslak bakma &ouml;yle&nbsp;<br style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;" /><br style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;" />S&uuml;rerim buluttan tarlaları&nbsp;<br style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;" />Yağmurlar ekerim g&ouml;ğ&uuml;n g&ouml;ğs&uuml;ne&nbsp;<br style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;" />G&uuml;neşte demlerim senin &ccedil;ayını&nbsp;<br style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;" />Y&uuml;reğimden s&uuml;zer &ouml;yle veririm&nbsp;<br style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;" /><br style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;" />Ben feleğin şu &ccedil;arkına &ccedil;omak sokarım&nbsp;<br style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;" />Ben feleğin tekerine &ccedil;omak sokarım&nbsp;<br style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;" />Yeter ki ıslak ıslak bakma &ouml;yle<span style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;"><br style="-webkit-box-shadow: none !important; border-top-left-radius: 0px 0px !important; border-top-right-radius: 0px 0px !important; border-bottom-right-radius: 0px 0px !important; border-bottom-left-radius: 0px 0px !important;" /><br /></span></p>', 'Turk rock', 'Cem Karaca', '1984'),
(8, 'dil yarası', '<p><strong>Kim bilecek daha neler neler bekliyor ikimizi&nbsp;<br />Belki de &ccedil;ok mutlu olacaktık tutsaydık dilimizi&nbsp;<br />Bu inat bu kapris bu kavgalar yıprattı sevgimizi&nbsp;<br />En acı s&ouml;zler bile s&ouml;ylerken tutmadık dilimizi&nbsp;<br /><br />Dil yarası dil yarası en acı yara imiş&nbsp;<br />Dudaktan kalbe bir yol varki sevgi ve şefkattenmiş&nbsp;<br />Belki de &ccedil;ok mutlu olacaktık tutsaydık dilimizi&nbsp;<br />Tam aşkı bulduk derken nasılda kaybettik sevgimizi&nbsp;<br /><br />Aşka doğru ilk adımlar ne &uuml;mitle doluydu&nbsp;<br />Seviyorum seni demek g&ouml;nl&uuml;m&uuml;n tek yoluydu&nbsp;<br />Hasret bizi bekler sevmek bizi bekler&nbsp;<br />Koybolan tek biz değiliz bunca yıllık emekler&nbsp;<br /><br />Dil yarası dil yarası en acı yara imiş&nbsp;<br />Dudaktan kalbe bir yol var ki saygı ve sevgidenmiş&nbsp;<br />Dil yarası dil yarası en acı yara imiş&nbsp;<br />Dudaktan kalbe bir yol varki sevgi ve şefkattenmiş&nbsp;<br />Dil yarası dil yarası en acı yara imiş&nbsp;<br />Dudaktan kalbe bir yol varki sevgi ve şefkattenmiş</strong></p>', 'arabesk', 'Orhan Gencebay', '1993'),
(9, 'arnavut kaldırımı', '<p>Biten sevgilerin ardından&nbsp;<br />Ağlayamam ben b&ouml;yle yas tutamam&nbsp;<br />Her s&ouml;zde her&nbsp;g&ouml;zde&nbsp;şefkat aramam&nbsp;<br />Kırıyor kalbimi sonunda nasıl olsa&nbsp;<br /><br />Giden aşklarımın ardından&nbsp;<br />Ağlayamam ben b&ouml;yle yas tutamam&nbsp;<br />Her s&ouml;zde her g&ouml;zde şefkat aramam&nbsp;<br />Kırıyor kalbimi sonunda nasıl olsa&nbsp;<br /><br />D&uuml;n seni g&ouml;rd&uuml;m r&uuml;yamda&nbsp;<br />Arnavut kaldırımlı taş sokakta&nbsp;<br />Ah&nbsp;bir&nbsp;dili olsa da bir konuşsa&nbsp;<br />Anlatırdı masumca seni bana&nbsp;<br /><br />&Ouml;psem&nbsp;bebek&nbsp;g&ouml;zlerinden&nbsp;&ccedil;ok&nbsp;ağlatırlar&nbsp;<br />Sarsam seni kollarımdan bir g&uuml;n alırlar&nbsp;<br />Sevsem seni doyasıya yıpratırlar&nbsp;<br />Bir s&uuml;r&uuml; kuru g&uuml;r&uuml;lt&uuml; par&ccedil;alar sevgimizi ey kader&nbsp;<br /><br />B&ouml;yle mi olmalı solmalı sevgililer</p>', 'pop', 'Demet', '2003');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE IF NOT EXISTS `uye` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(20) NOT NULL,
  `kullaniciadi` varchar(20) NOT NULL,
  `sifre` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Tablo döküm verisi `uye`
--

INSERT INTO `uye` (`id`, `ad`, `kullaniciadi`, `sifre`, `email`) VALUES
(13, 'murat', 'murat', '1234', 'murat@hotmail.com'),
(14, 'sedat', 'sedat2245', '14362245', 'sedat@hotmail.com');
