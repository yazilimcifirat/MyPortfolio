-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Kas 2023, 10:51:54
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mywebpage`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `introduction`
--

CREATE TABLE `introduction` (
  `introductionID` int(11) NOT NULL,
  `introductionWrite` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `introduction`
--

INSERT INTO `introduction` (`introductionID`, `introductionWrite`) VALUES
(1, 'Hello, I am Fırat Işıldak, a fourth-year Computer Engineering student. Throughout my academic years, I have gained knowledge in both theoretical and practical aspects of programming and I am eager to continue my development in this field. Right now I am looking for a summer internship where I can apply what I have learned until now and continue my development. \r\n\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`introductionID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `introduction`
--
ALTER TABLE `introduction`
  MODIFY `introductionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
