-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 11:03 PM
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
(1, 'About Us', 'AboutUs', 'Trigger merupakan Jasa penyelenggara Jasa Event Organizer yang berpusat di Jakarta.<br>Seiring dengan perkembangan zaman dan perubahan dunia yang begitu cepat, saat ini setiap perusahaan akan selalu dituntut untuk memilik SDM yang mumpuni setiap saat agar tetap dapat bersaing dalam bisnisnya.<br>Kami dari Trigger Event Organizer siap membantu setiap perusahaan dalam mewujudkan Sumber Daya Manusia yang berkualitas dan lebih baik. Sebagai penyelenggara jasa Event Organizer yang professional, kami akan selalu mengedepankan kepuasan pelanggan dan selalu berkomitmen untuk menjadi mitra yang terpercaya bagi anda<br>', 'Y'),
(2, 'Visi & Misi', 'VisiMisi', '<p></p><h1><b>Visi</b></h1>Menjadi Perusahaan Event Organizer yang terpercaya serta berusaha untuk selalu memberikan kepuasan kepada pelanggan, dengan solusi serta ide-ide kreatif yang menarik dan bekerja secara professional<p></p><h1><b>Misi</b></h1><p></p><ol><li>Mewujudkan Sumber Daya Manusia yang <b>Kreatif</b>, <b>Berkualitas </b>dan <b>Professional</b></li><li>Menjadi mitra/partner bisnis strategis yang terpercaya serta sanggup memberikan kepuasan dan kenyamanan bagi pelanggan.</li><li>Menjadi Event Organizer yang terdepan dan unggul<br><b></b><br></li></ol>', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ms_category`
--

CREATE TABLE `ms_category` (
  `ID_Category` int(11) NOT NULL,
  `NamaCategory` text NOT NULL,
  `FlagActive` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_category`
--

INSERT INTO `ms_category` (`ID_Category`, `NamaCategory`, `FlagActive`) VALUES
(1, 'Outing', 'Y'),
(2, 'Meeting', 'Y'),
(3, 'coba', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `ms_catering`
--

CREATE TABLE `ms_catering` (
  `ID_Catering` int(11) NOT NULL,
  `NamaVendor` text NOT NULL,
  `Menu` text NOT NULL,
  `Harga` int(11) NOT NULL,
  `FlagActive` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_catering`
--

INSERT INTO `ms_catering` (`ID_Catering`, `NamaVendor`, `Menu`, `Harga`, `FlagActive`) VALUES
(1, 'Hendrawan', '<ul><li>Nasi Putih</li><li>Daging Suwir</li><li>Telur Balado</li><li>Kacang Panjang</li><li>Kerupuk Udang</li></ul>', 200000, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ms_mc`
--

CREATE TABLE `ms_mc` (
  `ID_MC` int(11) NOT NULL,
  `NamaMC` text NOT NULL,
  `Image` text NOT NULL,
  `FlagActive` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_mc`
--

INSERT INTO `ms_mc` (`ID_MC`, `NamaMC`, `Image`, `FlagActive`) VALUES
(1, 'Vincentius Gerardo', 'Vincentius_Gerardo.jpg', 'Y'),
(3, 'Felicita Roselyn', 'Felicita_Roselyn.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `ms_paket`
--

CREATE TABLE `ms_paket` (
  `ID_Paket` int(11) NOT NULL,
  `NamaPaket` text NOT NULL,
  `ID_MC` int(11) NOT NULL,
  `ID_Catering` int(11) NOT NULL,
  `NamaTempat` text NOT NULL,
  `Alamat` text NOT NULL,
  `Image` text NOT NULL,
  `Biaya` int(11) NOT NULL,
  `FlagActive` char(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `ms_product`
--

INSERT INTO `ms_product` (`ID_Product`, `NamaProduct`, `Keterangan`, `Gambar`, `FlagActive`) VALUES
(1, 'Rafting', '<p>Tantangan untuk mengarungi arus sungai yang deras untuk memacu kekompakan tim</p>', 'Rafting.png', 'Y'),
(2, 'Fun Games', '<p>Menjalin kebersamaan dan membangun kerjasama team<br></p>', 'Fun_Games.png', 'Y');

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

-- --------------------------------------------------------

--
-- Table structure for table `tr_custom`
--

CREATE TABLE `tr_custom` (
  `ID_Order` int(11) NOT NULL,
  `ID_Pelanggan` int(11) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `ID_MC` int(11) NOT NULL,
  `ID_Catering` int(11) NOT NULL,
  `AlamatLokasi` text NOT NULL,
  `Latitute` text NOT NULL,
  `Longitute` text NOT NULL,
  `TanggalMulaiEvent` date NOT NULL,
  `TanggalSelesaiEvent` date NOT NULL,
  `Biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tr_order`
--

CREATE TABLE `tr_order` (
  `ID_Order` int(11) NOT NULL,
  `ID_Pelanggan` int(11) NOT NULL,
  `ID_JenisOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tr_paket`
--

CREATE TABLE `tr_paket` (
  `ID_Order` int(11) NOT NULL,
  `ID_Pelanggan` int(11) NOT NULL,
  `ID_Paket` int(11) NOT NULL,
  `TanggalMulaiEvent` date NOT NULL,
  `TanggalSelesaiEvent` date NOT NULL,
  `Biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_about`
--
ALTER TABLE `ms_about`
  ADD PRIMARY KEY (`ID_About`);

--
-- Indexes for table `ms_category`
--
ALTER TABLE `ms_category`
  ADD PRIMARY KEY (`ID_Category`);

--
-- Indexes for table `ms_catering`
--
ALTER TABLE `ms_catering`
  ADD PRIMARY KEY (`ID_Catering`);

--
-- Indexes for table `ms_mc`
--
ALTER TABLE `ms_mc`
  ADD PRIMARY KEY (`ID_MC`);

--
-- Indexes for table `ms_paket`
--
ALTER TABLE `ms_paket`
  ADD PRIMARY KEY (`ID_Paket`);

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
-- Indexes for table `tr_custom`
--
ALTER TABLE `tr_custom`
  ADD PRIMARY KEY (`ID_Order`);

--
-- Indexes for table `tr_order`
--
ALTER TABLE `tr_order`
  ADD PRIMARY KEY (`ID_Order`);

--
-- Indexes for table `tr_paket`
--
ALTER TABLE `tr_paket`
  ADD PRIMARY KEY (`ID_Order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_about`
--
ALTER TABLE `ms_about`
  MODIFY `ID_About` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ms_category`
--
ALTER TABLE `ms_category`
  MODIFY `ID_Category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ms_catering`
--
ALTER TABLE `ms_catering`
  MODIFY `ID_Catering` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ms_mc`
--
ALTER TABLE `ms_mc`
  MODIFY `ID_MC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ms_paket`
--
ALTER TABLE `ms_paket`
  MODIFY `ID_Paket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ms_product`
--
ALTER TABLE `ms_product`
  MODIFY `ID_Product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tr_custom`
--
ALTER TABLE `tr_custom`
  MODIFY `ID_Order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_order`
--
ALTER TABLE `tr_order`
  MODIFY `ID_Order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_paket`
--
ALTER TABLE `tr_paket`
  MODIFY `ID_Order` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
