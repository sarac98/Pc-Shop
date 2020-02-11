-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2020 at 10:24 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodaja_servis_racunara`
--

-- --------------------------------------------------------

--
-- Table structure for table `graficka`
--

DROP TABLE IF EXISTS `graficka`;
CREATE TABLE IF NOT EXISTS `graficka` (
  `id_graf` int(255) NOT NULL AUTO_INCREMENT,
  `integrisana` varchar(255) NOT NULL,
  `marka` varchar(255) NOT NULL,
  `memorija` varchar(255) NOT NULL,
  PRIMARY KEY (`id_graf`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graficka`
--

INSERT INTO `graficka` (`id_graf`, `integrisana`, `marka`, `memorija`) VALUES
(1, 'Da', 'Nvidia', '1GB'),
(2, 'Ne', 'AMD', '3GB'),
(3, 'Da', 'AMD', '512mb'),
(4, 'Ne', 'Nvida', '8GB'),
(5, 'Da', 'Toshiba', '1gb');

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

DROP TABLE IF EXISTS `komentari`;
CREATE TABLE IF NOT EXISTS `komentari` (
  `id_komentar` int(255) NOT NULL AUTO_INCREMENT,
  `id_korisnik` int(255) NOT NULL,
  `id_proizvod` int(255) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id_komentar`, `id_korisnik`, `id_proizvod`, `komentar`) VALUES
(1, 23, 24, 'dobar je apple'),
(2, 23, 25, 'asd'),
(3, 23, 25, 'asd'),
(4, 23, 25, 'ujhjkh'),
(5, 23, 25, 'ujhjkh'),
(6, 23, 25, 'jhuyt'),
(7, 23, 25, 'jhuyt'),
(8, 23, 27, 'Dobar'),
(9, 23, 25, 'Dobar je'),
(10, 23, 25, 'asd'),
(11, 23, 25, 'dobar\r\n'),
(12, 23, 25, 'kul'),
(13, 23, 25, ''),
(14, 25, 25, 'djes'),
(15, 25, 27, 'Koja krsina brate'),
(16, 25, 25, ''),
(17, 25, 25, 'Super'),
(18, 25, 25, 'Super'),
(19, 25, 24, 'Dajem 5 zvezdica'),
(20, 25, 24, 'f'),
(21, 25, 25, 'ful'),
(22, 25, 27, 'Ful'),
(23, 25, 27, 'asd'),
(24, 25, 27, 'ff'),
(25, 25, 27, 'fff'),
(26, 25, 27, 'ok'),
(27, 25, 24, 'ok'),
(28, 25, 25, 'super je'),
(29, 25, 24, 'asd'),
(30, 25, 24, 'f'),
(31, 23, 24, 'p'),
(32, 26, 25, 'uoiu'),
(33, 23, 40, 'asdads'),
(34, 23, 40, 'f'),
(35, 23, 40, 'f'),
(36, 23, 40, 'hkjhk'),
(37, 1, 40, 'f'),
(38, 25, 40, 'asd'),
(39, 25, 40, 'okej'),
(40, 25, 41, 'Cao'),
(41, 1, 42, 'asd'),
(42, 23, 42, 'Nije los'),
(43, 23, 42, 'hjh'),
(44, 23, 41, 'sadasd'),
(45, 25, 43, 'Ful'),
(46, 25, 43, 'Pedja'),
(47, 29, 40, 'jhkj'),
(48, 29, 43, 'asdasd'),
(49, 1, 42, 'kalÄsd'),
(50, 29, 44, 'super je'),
(51, 30, 41, 'Cao'),
(52, 30, 41, ''),
(53, 30, 41, 'Odlicno\r\n'),
(54, 30, 41, '5 zvezdica dajem'),
(55, 1, 41, 'Dobar'),
(56, 30, 41, 'Nije lose'),
(57, 30, 49, 'Super racunar!'),
(58, 1, 50, 'Dobar je'),
(59, 30, 45, 'Super\r\n'),
(60, 37, 41, 'okej'),
(61, 33, 45, 'super'),
(62, 32, 45, 'sgsdfs'),
(63, 32, 45, 'asdasda'),
(64, 43, 47, 'asjdlkajslkda'),
(65, 44, 47, 'asdads');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE IF NOT EXISTS `korisnik` (
  `id_korisnik` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `telefon` int(255) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `id_privilegija` int(255) NOT NULL,
  PRIMARY KEY (`id_korisnik`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id_korisnik`, `username`, `password`, `email`, `telefon`, `adresa`, `id_privilegija`) VALUES
(1, 'predrag', '3456', 'predrag@gmail.com', 12313, 'prvogmaja', 1),
(30, 'Srdjan', 'asd', 'srdjant98@gmail.com', 64242, 'Prvog Maja 2/b', 1),
(31, 'nikola', 'asd', 'nikola@gmail.com', 62123412, 'Kosancic Ivana', 1),
(35, 'mirko', 'a', 'mirkosarac@gmail.com', 12313, '132123', 0),
(36, 'neam', 'neam', 'nemam@gmail.com', 123132, 'asd', 0),
(37, 'pera', 'pera123', 'pera@gmail.com', 57234, 'asdasdf', 0),
(38, 'mirko', 'mirko123', 'asdas@gmail.com', 1233, 'prvogmaja', 0),
(39, 'markan', 'markan', 'marakan@gmail.com', 1312309, 'Prvog maja', 0),
(40, 'asdf', 'natasa', 'natasata@gmail.com', 9574, 'asdasd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `porudzbina`
--

DROP TABLE IF EXISTS `porudzbina`;
CREATE TABLE IF NOT EXISTS `porudzbina` (
  `id_porudzbine` int(255) NOT NULL AUTO_INCREMENT,
  `id_korisnik` int(255) NOT NULL,
  `id_proizvod` int(255) NOT NULL,
  `vreme_porudzbine` varchar(255) NOT NULL,
  PRIMARY KEY (`id_porudzbine`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `porudzbina`
--

INSERT INTO `porudzbina` (`id_porudzbine`, `id_korisnik`, `id_proizvod`, `vreme_porudzbine`) VALUES
(82, 43, 47, '14:15'),
(81, 32, 47, '14:15'),
(75, 30, 45, '14:15'),
(76, 31, 43, '14:15'),
(77, 30, 41, '14:15'),
(78, 37, 41, '14:15'),
(79, 32, 47, '14:15'),
(80, 32, 45, '14:15');

-- --------------------------------------------------------

--
-- Table structure for table `procesor`
--

DROP TABLE IF EXISTS `procesor`;
CREATE TABLE IF NOT EXISTS `procesor` (
  `id_procesor` int(255) NOT NULL AUTO_INCREMENT,
  `markap` varchar(255) NOT NULL,
  `opis` varchar(255) NOT NULL,
  PRIMARY KEY (`id_procesor`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procesor`
--

INSERT INTO `procesor` (`id_procesor`, `markap`, `opis`) VALUES
(1, 'intel', 'i5 4-cores 4Ghz'),
(2, 'amd', '4-cores 3Ghz'),
(3, 'amd', '2-cores 2Ghz'),
(4, 'intel', 'i5 3Ghz'),
(5, 'intel', 'i3 2Ghz'),
(6, 'intel', 'i7 4.2Ghz'),
(7, 'amd', 'FX4252 3Ghz');

-- --------------------------------------------------------

--
-- Table structure for table `racunar`
--

DROP TABLE IF EXISTS `racunar`;
CREATE TABLE IF NOT EXISTS `racunar` (
  `id_racunara` int(255) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `id_procesor` int(255) NOT NULL,
  `id_graf` int(255) NOT NULL,
  PRIMARY KEY (`id_racunara`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `racunar`
--

INSERT INTO `racunar` (`id_racunara`, `naziv`, `ram`, `os`, `slika`, `id_procesor`, `id_graf`) VALUES
(45, 'GamingXr231', 'DDR5', 'Windows', '5cedd1dcab6c42.26403850.PNG', 1, 4),
(41, 'Gaming', 'ddr4', 'os', '5ceda3ff1efe92.21099403.PNG', 1, 2),
(47, 'kucni racunar', '5Gb ddr2', 'Windows', '5cee1a201d9056.96331682.PNG', 3, 2),
(42, 'kuca racunar', 'dd3 512mb', 'Andriod', '5ceda7e26590f6.76570489.PNG', 1, 2),
(43, 'RX2013', 'ddr5', 'os', '5cedac54c75167.95440546.PNG', 1, 2),
(44, 'desktop racunar', 'dd5 8 gb', 'Windows', '5cedbeb93fa866.11740314.PNG', 1, 3),
(46, 'Low Pc', '1Gb ddr1', 'windows', '5cedd22a2c5885.86562556.PNG', 1, 5),
(48, 'dobar', 'asd', 'os', '5cee1a618e9301.13191051.PNG', 3, 4),
(49, 'Pemtium 4', 'DDR2 2gb', 'Linux', '5cee34ea5ea6f9.60364975.PNG', 3, 4),
(50, 'Novi komp', 'ddr5', 'os', '5cee363eeb8eb6.51344392.PNG', 4, 2),
(51, 'Racunar', 'ddr3', 'Windows', '5cee3d8dc62038.90860866.PNG', 2, 3),
(52, 'Racunar2', 'ddr5', 'Windows', '5cee463d039384.88607517.PNG', 3, 3),
(53, 'Racunari', 'ddr3', 'windows', '5cee7beada6438.32648494.PNG', 3, 3),
(54, 'racunrnovi', 'ddr5 3g', 'windows', '5cee88d3981c69.55439060.PNG', 4, 4),
(55, 'Racunar', 'ddr5 6gb', 'windows', '5cf789f2089547.22219117.PNG', 2, 2),
(56, 'MarkoPc', 'ddr5 8gb', 'Windows', '5cf7ec28749634.53170906.PNG', 2, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
