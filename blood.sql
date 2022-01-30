-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Oca 2022, 11:57:49
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `blood`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blood`
--

CREATE TABLE IF NOT EXISTS `blood` (
  `ad` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(15) NOT NULL,
  `kan_grubu` varchar(15) NOT NULL,
  `yas` int(11) NOT NULL,
  `kilo` int(11) NOT NULL,
  `kronik_hastalik` varchar(15) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sehir` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `blood`
--

INSERT INTO `blood` (`ad`, `soyad`, `cinsiyet`, `kan_grubu`, `yas`, `kilo`, `kronik_hastalik`, `telefon`, `email`, `sehir`) VALUES
('Zeynep', 'Ceylan', 'Kadin', '0-', 48, 63, 'Yok', '5552960022', 'zynpcyln@gmail.com', 'Ankara'),
('Miray', 'Bezcier', 'Kadin', 'AB+', 25, 57, 'Yok', '5324785423', 'bezciermiray@hotmail.com', 'Antalya'),
('Mert', 'Yergin', 'Erkek', 'A+', 27, 80, 'Yok', '5069871782', 'yerginmeert@hotmail.com', 'İzmir'),
('Emine', 'Kermen', 'Kadin', 'AB-', 56, 65, 'Yok', '5334908567', 'eminekermenn@gmail.com', 'Rize'),
('Barbaros', 'Ataer', 'Erkek', '0+', 32, 76, 'Yok', '5532315698', 'barbarosata@gmail.com', 'Osmaniye'),
('Furkan', 'Turan', 'Erkek', 'B+', 37, 81, 'Yok', '5057802673', 'furkanturan@hotmail.com', 'Yozgat'),
('Su', 'Akarca', 'Kadin', 'A-', 45, 78, 'Yok', '5324679815', 'akansu@hotmail.com', 'Yalova'),
('Firuze', 'Eren', 'Kadin', 'B-', 39, 52, 'Yok', '5348901156', 'firuz_eren@gmail.com', 'Muğla'),
('Turgay', 'Demir', 'Erkek', 'A+', 24, 78, 'Yok', '5562704555', 'turgay16@hotmail.com', 'Bursa'),
('Cennet', 'Dereli', 'Kadin', 'B+', 48, 90, 'Yok', '5322348750', 'cennetdere@gmail.com', 'Rize');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
