-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Haz 2021, 18:53:29
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `aracservis`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `araclar`
--

CREATE TABLE `araclar` (
  `arac_id` int(11) NOT NULL,
  `arac_sahibi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `arac_marka` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `arac_plaka` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `araclar`
--

INSERT INTO `araclar` (`arac_id`, `arac_sahibi`, `arac_marka`, `arac_plaka`) VALUES
(2, 'Batuhan Kocabıyık', 'Fiat Egea 2021', '34BK147'),
(3, 'Ahmet Veli', 'Ford Focus 2015', '34KS887'),
(4, 'Aydın Kaya', 'Volkswagen Golf 2011', '34PR415');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `k_bilgiler`
--

CREATE TABLE `k_bilgiler` (
  `id` int(255) NOT NULL,
  `k_kullaniciadi` text COLLATE utf8_turkish_ci NOT NULL,
  `k_sifre` text COLLATE utf8_turkish_ci NOT NULL,
  `k_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `k_bilgiler`
--

INSERT INTO `k_bilgiler` (`id`, `k_kullaniciadi`, `k_sifre`, `k_date`) VALUES
(1, 'asd', '1234', '0000-00-00 00:00:00'),
(2, 'admin', '123', '0000-00-00 00:00:00'),
(3, 'batu', '123', '0000-00-00 00:00:00'),
(4, 'deneme', '12345', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `servise_gelenler`
--

CREATE TABLE `servise_gelenler` (
  `servis_id` int(11) NOT NULL,
  `arac_plaka` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_marka` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_model` text COLLATE utf8_turkish_ci NOT NULL,
  `arac_sahibi` text COLLATE utf8_turkish_ci NOT NULL,
  `servis_giris` date NOT NULL,
  `arac_durum` text COLLATE utf8_turkish_ci NOT NULL,
  `Telefon` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `servise_gelenler`
--

INSERT INTO `servise_gelenler` (`servis_id`, `arac_plaka`, `arac_marka`, `arac_model`, `arac_sahibi`, `servis_giris`, `arac_durum`, `Telefon`) VALUES
(1, '34BK147', 'Fiat', 'Egea', 'Batuhan Kocabıyık', '2021-06-25', 'BeklemeAsamasi', '05526324785'),
(2, '34PR415', 'Ford', 'Focus', 'Ahmet Veli', '2021-06-24', 'ServisBasladi', '05526965741'),
(3, '34PT054', 'Nissan', 'Juke', 'Murat Kara', '2021-06-24', 'BeklemeAsamasi', '05374115296'),
(4, '47SF469', 'Audi', 'A3', 'Orkun Can', '2021-06-27', 'BeklemeAsamasi', '05369875241'),
(5, '27ST854', 'BMW', '3.16i', 'Mustafa Aydın', '2021-06-27', 'BeklemeAsamasi', '05435268475'),
(6, '41ST588', 'Fiat', 'Linea', 'Kadir Kaya', '2020-05-27', 'BeklemeAsamasi', '05378524152'),
(7, '64UT824', 'Seat', 'Leon', 'Kemal Bayrak', '2021-06-22', 'TeslimEdildi', '05362147854'),
(8, '54KT411', 'Toyota', 'Corolla', 'Doğuhan Boz', '2020-04-16', 'TeslimEdildi', '05524158574'),
(9, '52FU724', 'Honda', 'Civic', 'Yusuf Can', '2021-06-17', 'TamirEdildi', '05435248965');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `araclar`
--
ALTER TABLE `araclar`
  ADD PRIMARY KEY (`arac_id`);

--
-- Tablo için indeksler `k_bilgiler`
--
ALTER TABLE `k_bilgiler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `servise_gelenler`
--
ALTER TABLE `servise_gelenler`
  ADD PRIMARY KEY (`servis_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `araclar`
--
ALTER TABLE `araclar`
  MODIFY `arac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `k_bilgiler`
--
ALTER TABLE `k_bilgiler`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `servise_gelenler`
--
ALTER TABLE `servise_gelenler`
  MODIFY `servis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
