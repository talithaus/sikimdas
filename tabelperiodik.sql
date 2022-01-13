-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 03:24 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikimdas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelperiodik`
--

CREATE TABLE `tabelperiodik` (
  `id` int(4) NOT NULL,
  `nama_unsur` text NOT NULL,
  `simbol` text NOT NULL,
  `nomor_massa` decimal(10,5) NOT NULL,
  `nomor_atom` int(10) NOT NULL,
  `periode` int(4) NOT NULL,
  `golongan` varchar(4) NOT NULL,
  `sifat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelperiodik`
--

INSERT INTO `tabelperiodik` (`id`, `nama_unsur`, `simbol`, `nomor_massa`, `nomor_atom`, `periode`, `golongan`, `sifat`) VALUES
(1, 'Hidrogen', 'H', '1.00800', 1, 1, '1A', 'Nonlogam'),
(2, 'Helium', 'He', '4.00260', 2, 1, '18', 'Gas mulia'),
(3, 'Litium', 'Li', '6.94100', 3, 2, '1', 'Logam alkali'),
(4, 'Berilium', 'Be', '9.01218', 4, 2, '2', 'Alkali tanah'),
(5, 'Boron', 'B', '10.81100', 5, 2, '13', 'Metaloid'),
(6, 'Karbon', 'C', '12.01070', 6, 2, '14', 'Nonlogam'),
(7, 'Nitrgen', 'N', '14.00670', 7, 2, '15', 'Nonlogam'),
(8, 'Oksigen', 'O', '15.99940', 8, 2, '16', 'Nonlogam'),
(9, 'Fluor', 'F', '18.99840', 9, 2, '17', 'Halogen'),
(10, 'Neon', 'Ne', '20.17970', 10, 2, '18', 'Nonlogam'),
(11, 'Natrium', 'Na', '22.98977', 11, 3, '1', 'Logam alkali'),
(12, 'Magnesium', 'Mg', '24.30500', 12, 3, '2', 'Alkali tanah'),
(13, 'Aluminium', 'Al', '26.98154', 13, 3, '13', 'Logam'),
(14, 'Silikon', 'Si', '28.08550', 14, 3, '14', 'Metaloid'),
(15, 'Fosfor', 'P', '30.97376', 15, 3, '15', 'Nonlogam'),
(16, 'Belerang / Sulfur', 'S', '32.06500', 16, 3, '16', 'Nonlogam'),
(17, 'Klor', 'Cl', '35.45300', 17, 3, '17', 'Halogen'),
(18, 'Argon', 'Ar', '39.94800', 18, 3, '18', 'Gas mulia'),
(19, 'Kalium', 'K', '39.09830', 19, 4, '1', 'Logam alkali'),
(20, 'Kalsium', 'Ca', '40.07800', 20, 4, '2', 'Alkali tanah'),
(21, 'Skandium', 'Sc', '44.95591', 21, 4, '3', 'Logam transisi'),
(22, 'Titanium', 'Ti', '47.86700', 22, 4, '4', 'Logam Transisi'),
(23, 'Vanadium', 'V', '50.94150', 23, 4, '5', 'Logam transisi'),
(24, 'Krom', 'Cr', '51.99610', 24, 4, '6', 'Logam transisi'),
(25, 'Mangan', 'Mn', '54.93805', 25, 4, '7', 'Logam Transisi'),
(26, 'Besi / Ferrum', 'Fe', '55.84500', 26, 4, '8', 'Logam transisi'),
(27, 'Kobalt', 'Co', '58.93319', 27, 4, '9', 'Logam transisi'),
(28, 'Nikel', 'Ni', '58.93319', 28, 4, '10', 'Logam Transisi'),
(29, 'Tembaga', 'Cu', '63.54600', 29, 4, '11', 'Logam transisi'),
(30, 'Seng', 'Zn', '65.40900', 30, 4, '12', 'Logam transisi'),
(31, 'Galium', 'Ga', '69.72300', 31, 4, '13', 'Logam'),
(32, 'Germanium', 'Ge', '72.64000', 32, 4, '14', 'Metaloid'),
(33, 'Arsen', 'As', '74.92160', 33, 4, '15', 'Metaloid'),
(34, 'Selenium', 'Se', '78.96000', 34, 4, '16', 'Nonlogam'),
(35, 'Brim', 'Br', '79.90400', 35, 4, '17', 'Halogen'),
(36, 'Kripton', 'Kr', '83.79800', 36, 4, '18', 'Gas mulia'),
(37, 'Rubidium', 'Rb', '85.46780', 37, 5, '1', 'Logam alkali'),
(38, 'Strontium', 'Sr', '87.62000', 38, 5, '2', 'Alkali tanah'),
(39, 'Itrium', 'Y', '88.90585', 39, 5, '3', 'Logam transisi'),
(40, 'Zirkonium', 'Zr', '91.22400', 40, 5, '4', 'Logam transisi'),
(41, 'Niobium', 'Nb', '92.90638', 41, 5, '5', 'Logam transisi'),
(42, 'Molibden', 'Mo', '95.94000', 42, 5, '6', 'Logam transisi'),
(43, 'Teknesium', 'Tc', '98.90630', 43, 5, '7', 'Logam transisi'),
(44, 'Ruthenium', 'Ru', '101.07000', 44, 5, '8', 'Logam transisi'),
(45, 'Rodium', 'Rh', '102.90550', 45, 5, '9', 'Logam transisi'),
(46, 'Paladium', 'Pd', '106.42000', 46, 5, '10', 'Logam transisi'),
(47, 'Perak', 'Ag', '107.86820', 47, 5, '11', 'Logam transisi'),
(48, 'Kadmium', 'Cd', '112.41100', 48, 5, '12', 'Logam transisi'),
(49, 'Indium', 'In', '114.81800', 49, 5, '13', 'Logam'),
(50, 'Timah', 'Sn', '118.71000', 50, 5, '14', 'Logam'),
(51, 'Antimon', 'Sb', '121.76000', 51, 5, '15', 'Metaloid'),
(52, 'Telurium', 'Te', '127.60000', 52, 5, '16', 'Metaloid'),
(53, 'Yodium', 'I', '126.90447', 53, 5, '17', 'Halogen'),
(54, 'Xenon', 'Xe', '131.29300', 54, 5, '18', 'Gas mulia'),
(55, 'Sesium', 'Cs', '132.90545', 55, 6, '1', 'Logam alkali'),
(56, 'Barium', 'Ba', '137.32700', 56, 6, '2', 'Alkali tanah'),
(57, 'Lantanum', 'La', '57.00000', 57, 6, '-', 'Lantanida'),
(58, 'Serium', 'Ce', '140.11600', 58, 6, '-', 'Lantanida'),
(59, 'Praseodimium', 'Pr', '140.90765', 59, 6, '-', 'Lantanida'),
(60, 'Neodimium', 'Nd', '144.24200', 60, 6, '-', 'Lantanida'),
(61, 'Prometium', 'Pm', '146.91510', 61, 6, '-', 'Lantanida'),
(62, 'Samarium', 'Sm', '150.36000', 62, 6, '-', 'Lantanida'),
(63, 'Europium', 'Eu', '151.96400', 63, 6, '-', 'Lantanida'),
(64, 'Gadolinium', 'Gd', '157.25000', 64, 6, '-', 'Lantanida'),
(65, 'Terbium', 'Tb', '158.92535', 65, 6, '-', 'Lantanida'),
(66, 'Disprosium', 'Dy', '162.50000', 66, 6, '-', 'Lantanida'),
(67, 'Holmium', 'Ho', '164.93032', 67, 6, '-', 'Lantanida'),
(68, 'Erbium', 'Er', '167.25900', 68, 6, '-', 'Lantanida'),
(69, 'Tulium', 'Tm', '168.93421', 69, 6, '-', 'Lantanida'),
(70, 'Iterbium', 'Yb', '173.04000', 70, 6, '-', 'Lantanida'),
(71, 'Lutetium', 'Lu', '174.96700', 71, 6, '3', 'Lantanida'),
(72, 'Hafnium', 'Hf', '178.49000', 72, 6, '4', 'Logam transisi'),
(73, 'Tantalum', 'Ta', '180.94790', 73, 6, '5', 'Logam transisi'),
(74, 'Tungsten', 'W', '183.84000', 74, 6, '6', 'Logam transisi'),
(75, 'Renium', 'Re', '186.20700', 75, 6, '7', 'Logam transisi'),
(76, 'Osmium', 'Os', '190.23000', 76, 6, '8', 'Logam transisi'),
(77, 'Iridium', 'Ir', '192.21700', 77, 6, '9', 'Logam transisi'),
(78, 'Platina', 'Pt', '195.08400', 78, 6, '10', 'Logam transisi'),
(79, 'Emas', 'Au', '196.96657', 79, 6, '11', 'Logam transisi'),
(80, 'Raksa', 'Hg', '200.59000', 80, 6, '12', 'Logam transisi'),
(81, 'Talium', 'Tl', '204.38330', 81, 6, '13', 'Logam'),
(82, 'Timbal', 'Pb', '207.20000', 82, 6, '14', 'Logam'),
(83, 'Bismut', 'Bi', '208.98040', 83, 6, '15', 'Logam'),
(84, 'Polonium', 'Po', '208.98240', 84, 6, '16', 'Metaloid'),
(85, 'Astatin', 'At', '209.98710', 85, 6, '17', 'Halogen'),
(86, 'Radon', 'Rn', '222.01760', 86, 6, '18', 'Gas mulia'),
(87, 'Fransium', 'Fr', '223.01970', 87, 7, '1', 'Logam alkali'),
(88, 'Radium', 'Ra', '226.02540', 88, 7, '2', 'Alkali tanah'),
(89, 'Aktinium', 'Ac', '227.02780', 89, 7, '-', 'Aktinida'),
(90, 'Torium', 'Th', '232.03806', 90, 7, '-', 'Aktinida'),
(91, 'Protaktinium', 'Pa', '231.03588', 91, 7, '-', 'Aktinida'),
(92, 'Uranium', 'U', '238.02891', 92, 7, '-', 'Aktinida'),
(93, 'Neptunium', 'Np', '237.04820', 93, 7, '-', 'Aktinida'),
(94, 'Plutonium', 'Pu', '244.06420', 94, 7, '-', 'Aktinida'),
(95, 'Amerisium', 'Am', '243.06140', 95, 7, '-', 'Aktinida'),
(96, 'Curium', 'Cm', '247.07030', 96, 7, '-', 'Aktinida'),
(97, 'Berkelium', 'Bk', '247.07030', 97, 7, '-', 'Aktinida'),
(98, 'Kalifornium', 'Cf', '251.07960', 98, 7, '-', 'Aktinida'),
(99, 'Einsteinium', 'Es', '252.08290', 99, 7, '-', 'Aktinida'),
(100, 'Fermium', 'Fm', '257.09510', 100, 7, '-', 'Aktinida'),
(101, 'Mendelevium', 'Md', '258.09860', 101, 7, '-', 'Aktinida'),
(102, 'Nobelium', 'No', '259.10090', 102, 7, '-', 'Aktinida'),
(103, 'Lawrensium', 'Lr', '260.10530', 103, 7, '3', 'Aktinida'),
(104, 'Rutherfordium', 'Rf', '261.10870', 104, 7, '4', 'Logam transisi'),
(105, 'Dubnium', 'Db', '262.11380', 105, 7, '5', 'Logam transisi'),
(106, 'Seaborgium', 'Sg', '263.11820', 106, 7, '6', 'Logam transisi'),
(107, 'Bohrium', 'Bh', '262.12290', 107, 7, '7', 'Logam transisi'),
(108, 'Hassium', 'Hs', '265.00000', 108, 7, '8', 'Logam transisi'),
(109, 'Meitnerium', 'Mt', '266.00000', 109, 7, '9', 'Logam transisi'),
(110, 'Darmstadtium', 'Ds', '269.00000', 110, 7, '10', 'Logam transisi'),
(111, 'Roentgenium', 'Rg', '272.00000', 111, 7, '11', 'Logam transisi'),
(112, 'Kopernisium', 'Cn', '285.00000', 112, 7, '12', 'Logam transisi'),
(113, 'Nihonium', 'Uut', '286.00000', 113, 7, '13', 'Logam'),
(114, 'Flerovium', 'Fl', '289.00000', 114, 7, '14', 'Logam'),
(115, 'Moskovium', 'Uup', '289.00000', 115, 7, '15', 'Logam'),
(116, 'Livermorium', 'Lv', '293.00000', 116, 7, '16', 'Logam'),
(117, 'Tenesin', 'Uus', '294.00000', 117, 7, '17', 'Halogen'),
(118, 'Oganeson', 'Uuo', '294.00000', 118, 7, '18', 'Gas mulia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelperiodik`
--
ALTER TABLE `tabelperiodik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelperiodik`
--
ALTER TABLE `tabelperiodik`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
