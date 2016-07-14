-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 11, 2016 at 02:54 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `offofficebd`
--

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `contract_id` int(10) unsigned NOT NULL,
  `admin_employ_id` int(10) unsigned NOT NULL,
  `user_fname` varchar(55) DEFAULT NULL,
  `user_lname` varchar(55) DEFAULT NULL,
  `contract_num` varchar(128) NOT NULL,
  `contract_end` date DEFAULT NULL,
  `contract_copy` varchar(255) DEFAULT NULL,
  `contract_type` varchar(80) DEFAULT NULL,
  `employ_email` varchar(50) DEFAULT NULL,
  `users_user_email` varchar(80) NOT NULL,
  `user_dir` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`contract_id`, `admin_employ_id`, `user_fname`, `user_lname`, `contract_num`, `contract_end`, `contract_copy`, `contract_type`, `employ_email`, `users_user_email`, `user_dir`) VALUES
(1, 2, 'josias', 'namorgo', 'F3334545656', '2018-02-02', 'mergerd.pdf', 'Home protect', 'annemarie_yim@yahoo.fr', 'ddegdd@gmr.fr', ''),
(10, 2, 'flamel', 'our', 'P44329586', '2018-02-02', 'mergerd.pdf', 'Home protect', 'bobo@gmail.com', 'ddedd@gmr.fr', ''),
(15, 2, 'fsamel', 'ours', 'P44s29586', '2018-02-02', 'mergerd.pdf', 'Home protect', 'bobo@gmail.com', 'ddwwwsdd@gmr.fr', ''),
(19, 1, 'fsamel', 'ours', 'Qw125663076', '2018-02-02', 'mergerd.pdf', 'Home protect', 'potiche@yahoo.lu', 'ssd@gmr.fr', ''),
(21, 3, 'fsamel', 'ours', '23333ddnceee344', '2018-02-02', 'mergerd.pdf', 'Home protect', 'bobo@gmail.com', '$user_email', ''),
(23, 3, 'fsamel', 'ours', 'DE453377889900', '2018-02-02', 'sdkmdmkm-251d0f7c/991405-3400984727.pdf', 'Home protect', 'bobo@gmail.com', 'qwa@ddd.dd', ''),
(24, 3, 'fsamel', 'ours', 'wwweee321432', '2018-02-02', 'Anouck-d1f340e1/facture-garage-martins_ramdidovic2-1205805107.pdf', 'Home protect', 'bobo@gmail.com', 'fabio@gmail.com', ''),
(25, 3, 'fsamel', 'ours', 'ssDfr224355355', '2016-07-21', 'asfor-ddeb9d13/facture-garage-martins_ramdidovic2-6589686614.pdf', 'Easy auto', 'bobo@gmail.com', 'mad@dfe.gh', ''),
(26, 3, 'fsamel', 'ours', 'fast233345', '2016-12-31', 'aldddo-1f5c4434/facture-garage-martins_ramdidovic2-4352864399.pdf', 'Easy auto', 'bobo@gmail.com', 'asdfw@dfssss.sl', ''),
(27, 2, 'pedro', 'pedreira', 'vvvvvvlll2345566', '2020-03-28', 'pedreira-49d5b2c3/facture-garage-martins_ramdidovic2-5900776470.pdf', 'Home protect', 'annemarie_yim@yahoo.fr', 'pedro@frkm.lo', ''),
(28, 2, 'poul', 'soso', 'deks1236543', '2016-08-01', 'soso-5cba9fbe/facture-garage-martins_ramdidovic2-2100178231.pdf', 'Easy auto', 'annemarie_yim@yahoo.fr', 'soso@demk.lo', ''),
(29, 2, 'morgan', 'freman', 'djojoeo2343443', '2016-10-22', 'freman-a82c5f50/facture-garage-martins_ramdidovic2-6436038580.pdf', 'Home protect', 'annemarie_yim@yahoo.fr', 'morga@dfg.lu', ''),
(30, 2, 'dony', 'hat', 'qqeeeggh4467644332', '2017-08-29', 'hat-42b72be5/facture-garage-martins_ramdidovic2-1010883338.pdf', 'Home protect', 'annemarie_yim@yahoo.fr', 'dony@gom.ll', 'hat-42b72be5/'),
(31, 2, 'Marc', 'Evans', 'a2qqw1227373', '2017-09-30', 'Evans-81cd2802/contract-evans-4102713963.pdf', 'Home protect', 'annemarie_yim@yahoo.fr', 'evans@avion.ll', 'Evans-81cd2802/'),
(32, 2, 'fkrokoko', 'qsojosjooje', 'weefkfk1224', '2016-07-28', 'qsojosjooje-98293096/991405-2456979909.pdf', 'Home protect', 'annemarie_yim@yahoo.fr', 'sjsj@frksii', 'qsojosjooje-98293096/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`contract_id`),
  ADD UNIQUE KEY `users_user_email` (`users_user_email`),
  ADD UNIQUE KEY `contract_num` (`contract_num`),
  ADD KEY `contracts_FKIndex2` (`admin_employ_id`),
  ADD KEY `contracts_FKIndex1` (`users_user_email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `contract_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
