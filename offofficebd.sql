-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 11 Juillet 2016 à 15:06
-- Version du serveur :  10.1.8-MariaDB
-- Version de PHP :  5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `offofficebd`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `employ_id` int(10) UNSIGNED NOT NULL,
  `employ_email` varchar(50) NOT NULL,
  `employ_name` varchar(30) DEFAULT NULL,
  `employ_rule` varchar(15) DEFAULT NULL,
  `department` varchar(15) DEFAULT NULL,
  `employ_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`employ_id`, `employ_email`, `employ_name`, `employ_rule`, `department`, `employ_password`) VALUES
(1, 'annemarie_yim@yahoo.fr', 'yim', 'admin', 'directory', 'azertyazerty'),
(2, 'princesse@yahoo.lu', 'Résistance', 'employe', 'secretary', 'tofutofu');

-- --------------------------------------------------------

--
-- Structure de la table `cities`
--

CREATE TABLE `cities` (
  `citie_id` int(10) UNSIGNED NOT NULL,
  `users_user_id` int(10) UNSIGNED NOT NULL,
  `countries_countrie_id` int(10) UNSIGNED NOT NULL,
  `citie_name` varchar(15) DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `claims`
--

CREATE TABLE `claims` (
  `claim_id` int(10) UNSIGNED NOT NULL,
  `contracts_contract_id` int(10) UNSIGNED NOT NULL,
  `users_user_id` int(10) UNSIGNED NOT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_lname` varchar(15) DEFAULT NULL,
  `user_fname` varchar(15) DEFAULT NULL,
  `claim_img` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `atachm` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contracts`
--

CREATE TABLE `contracts` (
  `contract_id` int(10) UNSIGNED NOT NULL,
  `admin_employ_id` int(10) UNSIGNED NOT NULL,
  `user_fname` varchar(55) DEFAULT NULL,
  `user_lname` varchar(55) DEFAULT NULL,
  `contract_num` varchar(128) NOT NULL,
  `contract_end` date DEFAULT NULL,
  `contract_copy` varchar(255) DEFAULT NULL,
  `contract_type` varchar(80) DEFAULT NULL,
  `employ_email` varchar(50) DEFAULT NULL,
  `users_user_email` varchar(80) NOT NULL,
  `user_dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contracts`
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

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE `countries` (
  `countrie_id` int(10) UNSIGNED NOT NULL,
  `users_user_id` int(10) UNSIGNED NOT NULL,
  `countrie_name` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `docs`
--

CREATE TABLE `docs` (
  `doc_id` int(10) UNSIGNED NOT NULL,
  `claims_claim_id` int(10) UNSIGNED NOT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_lname` varchar(15) DEFAULT NULL,
  `user_lname_2` int(15) UNSIGNED DEFAULT NULL,
  `date` date DEFAULT NULL,
  `atachm` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

CREATE TABLE `history` (
  `users_user_id` int(10) UNSIGNED NOT NULL,
  `claims_claim_id` int(10) UNSIGNED NOT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `claim_id` int(10) UNSIGNED DEFAULT NULL,
  `doc_id` int(10) UNSIGNED DEFAULT NULL,
  `user_fname` varchar(15) DEFAULT NULL,
  `user_lname` varchar(15) DEFAULT NULL,
  `claim_img` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `atachm` varchar(50) DEFAULT NULL,
  `contract_type` varchar(10) DEFAULT NULL,
  `contract_copy` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

CREATE TABLE `planning` (
  `plan_id` int(10) UNSIGNED NOT NULL,
  `admin_employ_id` int(10) UNSIGNED NOT NULL,
  `employ_id` int(10) UNSIGNED DEFAULT NULL,
  `employ_rule` varchar(15) DEFAULT NULL,
  `employ_name` varchar(30) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  `alert_date` date DEFAULT NULL,
  `task` varchar(50) DEFAULT NULL,
  `department` varchar(15) DEFAULT NULL,
  `insert_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_fname` varchar(15) DEFAULT NULL,
  `user_lname` varchar(15) DEFAULT NULL,
  `contract_id` int(10) UNSIGNED DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `pobox_id` int(10) UNSIGNED DEFAULT NULL,
  `user_address` varchar(50) DEFAULT NULL,
  `user_gender` varchar(5) DEFAULT NULL,
  `user_bdate` date DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_tel` int(10) UNSIGNED DEFAULT NULL,
  `date_registry` date DEFAULT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_status` varchar(10) DEFAULT NULL,
  `user_condition` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`employ_id`);

--
-- Index pour la table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`citie_id`),
  ADD KEY `Cities_FKIndex1` (`countries_countrie_id`),
  ADD KEY `Cities_FKIndex2` (`users_user_id`);

--
-- Index pour la table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`claim_id`),
  ADD KEY `Claims_FKIndex1` (`users_user_id`),
  ADD KEY `Claims_FKIndex2` (`contracts_contract_id`);

--
-- Index pour la table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`contract_id`),
  ADD UNIQUE KEY `users_user_email` (`users_user_email`),
  ADD UNIQUE KEY `contract_num` (`contract_num`),
  ADD KEY `contracts_FKIndex2` (`admin_employ_id`),
  ADD KEY `contracts_FKIndex1` (`users_user_email`) USING BTREE;

--
-- Index pour la table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countrie_id`),
  ADD KEY `Countries_FKIndex1` (`users_user_id`);

--
-- Index pour la table `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`doc_id`,`claims_claim_id`),
  ADD KEY `Docs_FKIndex1` (`claims_claim_id`);

--
-- Index pour la table `history`
--
ALTER TABLE `history`
  ADD KEY `History_FKIndex1` (`claims_claim_id`),
  ADD KEY `History_FKIndex2` (`users_user_id`);

--
-- Index pour la table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`plan_id`),
  ADD KEY `Planning_FKIndex1` (`admin_employ_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `employ_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `cities`
--
ALTER TABLE `cities`
  MODIFY `citie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `claims`
--
ALTER TABLE `claims`
  MODIFY `claim_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `contract_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `countries`
--
ALTER TABLE `countries`
  MODIFY `countrie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `docs`
--
ALTER TABLE `docs`
  MODIFY `doc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `planning`
--
ALTER TABLE `planning`
  MODIFY `plan_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
