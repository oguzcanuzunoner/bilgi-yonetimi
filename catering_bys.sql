-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Eyl 2020, 02:56:56
-- Sunucu sürümü: 10.4.14-MariaDB
-- PHP Sürümü: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `catering_bys`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

CREATE TABLE `musteriler` (
  `id` int(2) NOT NULL,
  `adSoyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `telefonNumarasi` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `dogum_tarihi` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`id`, `adSoyad`, `telefonNumarasi`, `mail`, `dogum_tarihi`) VALUES
(1, 'Oğuzcan Uzunöner', '05300000000', 'deneme@deneme.com', '1998-11-07'),
(2, 'Kişi 2', '01234567890', 'deneme2@deneme.com', '1990-01-01'),
(3, 'Canan Arabacı', '01234569870', 'deneme3@deneme.com', '1999-02-01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

CREATE TABLE `personel` (
  `id` int(11) NOT NULL,
  `kullaniciAdi` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`id`, `kullaniciAdi`, `sifre`) VALUES
(1, 'personel', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `id` int(11) NOT NULL,
  `ad_soyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `telefon_numarasi` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `menu` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `adet` int(11) NOT NULL,
  `adres` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`id`, `ad_soyad`, `telefon_numarasi`, `mail`, `menu`, `adet`, `adres`, `tarih`) VALUES
(1, 'Oğuzcan Uzunöner', '05300000000', 'deneme@deneme.com', 'Geleneksel Menü', 3, 'Karadeniz Teknik Üniversitesi, 61080, Trabzon, Türkiye\r\n\r\n', '19.05.2020 23:53:02'),
(2, 'Kişi 2', '01234567890', 'deneme2@deneme.com', 'Modern Sofra Menü', 5, 'Üniversite İktisadi ve İdari Bilimler Fakültesi Karadeniz Teknik Üniversitesi, 61080 Ortahisar/Trabzon\r\n', '22.05.2020 01:48:47'),
(3, 'Canan Arabacı', '01234569870', 'deneme3@deneme.com', 'Kış Menü', 7, 'Huzur Mh., Türk Telekom Arena Stadyumu, 34396 Sarıyer, İstanbul, Türkiye\r\n', '22.05.2020 14:36:35');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `musteriler`
--
ALTER TABLE `musteriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `musteriler`
--
ALTER TABLE `musteriler`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `personel`
--
ALTER TABLE `personel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
