-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 10:30 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trigger`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_about`
--

CREATE TABLE `ms_about` (
  `ID_About` int(11) NOT NULL,
  `Judul` text NOT NULL,
  `JudulSEO` text NOT NULL,
  `Keterangan` text NOT NULL,
  `FlagActive` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_about`
--

INSERT INTO `ms_about` (`ID_About`, `Judul`, `JudulSEO`, `Keterangan`, `FlagActive`) VALUES
(1, 'About Us', 'AboutUs', 'Trigger merupakan Jasa penyelenggara Jasa Event Organizer yang berpusat di Jakarta.<br>Seiring dengan perkembangan zaman dan perubahan dunia yang begitu cepat, saat ini setiap perusahaan akan selalu dituntut untuk memilik SDM yang mumpuni setiap saat agar tetap dapat bersaing dalam bisnisnya.<br>Kami dari Trigger Event Organizer siap membantu setiap perusahaan dalam mewujudkan Sumber Daya Manusia yang berkualitas dan lebih baik. Sebagai penyelenggara jasa Event Organizer yang professional, kami akan selalu mengedepankan kepuasan pelanggan dan selalu berkomitmen untuk menjadi mitra yang terpercaya bagi anda', 'Y'),
(2, 'Visi & Misi', 'VisiMisi', '<p></p><h1><b>Visi</b></h1>Menjadi Perusahaan Event Organizer yang terpercaya serta berusaha untuk selalu memberikan kepuasan kepada pelanggan, dengan solusi serta ide-ide kreatif yang menarik dan bekerja secara professional<p></p><h1><b>Misi</b></h1><p></p><ol><li>Mewujudkan Sumber Daya Manusia yang <b>Kreatif</b>, <b>Berkualitas </b>dan <b>Professional</b></li><li>Menjadi mitra/partner bisnis strategis yang terpercaya serta sanggup memberikan kepuasan dan kenyamanan bagi pelanggan.</li><li>Menjadi Event Organizer yang terdepan dan unggul<br><b></b><br></li></ol>', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ms_pelanggan`
--

CREATE TABLE `ms_pelanggan` (
  `ID_Pelanggan` int(11) NOT NULL,
  `NamaPelanggan` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_product`
--

CREATE TABLE `ms_product` (
  `ID_Product` int(11) NOT NULL,
  `NamaProduct` text NOT NULL,
  `Keterangan` text NOT NULL,
  `Gambar` text NOT NULL,
  `FlagActive` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_user`
--

CREATE TABLE `ms_user` (
  `ID_User` char(4) NOT NULL,
  `NamaUser` text NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FlagActive` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_user`
--

INSERT INTO `ms_user` (`ID_User`, `NamaUser`, `Password`, `FlagActive`) VALUES
('0000', 'Administrator', '$2y$10$yUcto.BuzbZYk01w0NfGr.qywF33wrxePV2S9chZjh0SFRDqtMfhO', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_about`
--
ALTER TABLE `ms_about`
  ADD PRIMARY KEY (`ID_About`);

--
-- Indexes for table `ms_product`
--
ALTER TABLE `ms_product`
  ADD PRIMARY KEY (`ID_Product`);

--
-- Indexes for table `ms_user`
--
ALTER TABLE `ms_user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_about`
--
ALTER TABLE `ms_about`
  MODIFY `ID_About` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ms_product`
--
ALTER TABLE `ms_product`
  MODIFY `ID_Product` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
