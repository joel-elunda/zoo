-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 08:37 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo`
--
CREATE DATABASE IF NOT EXISTS `zoo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zoo`;

-- --------------------------------------------------------

--
-- Table structure for table `animaux`
--

CREATE TABLE `animaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `nombre` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `date_enregistrement` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animaux`
--

INSERT INTO `animaux` (`id`, `nom`, `categorie`, `nombre`, `photo`, `date_enregistrement`) VALUES
(1, 'Rat', 'MammifÃ¨re', NULL, '', '2019-12-08'),
(2, 'Lion', 'MammifÃ¨re', 12, 'head2.jpg', '2019-12-08'),
(3, 'Elephant', 'MammifÃ¨re', 5, '', '2019-12-08'),
(4, 'Couloeuvre', 'Reptile', 25, '', '2019-12-08'),
(5, 'Perdrix', 'Oiseau', 35, '', '2019-12-08'),
(6, 'Chat Huant', 'MammifÃ¨re', 54, '', '2019-12-10'),
(7, 'Mouton blanc', 'MammifÃ¨re', 45, '', '2019-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `horaires`
--

CREATE TABLE `horaires` (
  `id` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `evenement` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horaires`
--

INSERT INTO `horaires` (`id`, `date_debut`, `date_fin`, `heure_debut`, `heure_fin`, `evenement`) VALUES
(1, '2019-12-09', '2019-12-09', '08:30:00', '16:30:00', ''),
(2, '2019-12-10', '2019-12-13', '12:00:00', '15:00:00', 'Heure de visite'),
(3, '2019-12-14', '2019-12-15', '11:10:00', '18:00:00', 'Visite du PrÃ©sident');

-- --------------------------------------------------------

--
-- Table structure for table `tarifs`
--

CREATE TABLE `tarifs` (
  `id` int(11) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarifs`
--

INSERT INTO `tarifs` (`id`, `categorie`, `age`, `prix`) VALUES
(1, 'Enfant', '0 Ã  17', 13000),
(2, 'Jeune', '18 Ã  30', 24000),
(3, 'Adulte', '40  et plus', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(45) NOT NULL,
  `date_enregistrement` date NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `email`, `mot_de_passe`, `date_enregistrement`, `type`) VALUES
(1, 'Jane Doe', 'jane@gmail.com', '0123456789', '2019-12-07', 0),
(2, 'El Muschacho', 'mush@gmail.com', '9876543210', '2019-12-07', 0),
(3, 'Allon Musk', 'musk@gmail.com', '00000000', '2019-12-07', 0),
(4, 'Arnold Sch', 'arn@gmail.com', '9876541230', '2019-12-07', 0),
(5, 'Bull Dozer', 'bull@gmail.com', '123456789', '2019-12-07', 0),
(6, 'Cloe Spark', 'cloe@gmail.com', '0123456789', '2019-12-07', 2),
(7, 'Jack Sparrow', 'jack@gmail.com', '00000000', '2019-12-07', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horaires`
--
ALTER TABLE `horaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarifs`
--
ALTER TABLE `tarifs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `horaires`
--
ALTER TABLE `horaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tarifs`
--
ALTER TABLE `tarifs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
