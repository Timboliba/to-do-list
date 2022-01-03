-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2022 at 06:46 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `entrer`
--

CREATE TABLE `entrer` (
  `ID` int(4) NOT NULL,
  `Donner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entrer`
--

INSERT INTO `entrer` (`ID`, `Donner`) VALUES
(1, 'Finir le projet de ma to do list avant  la fin de cette semaine'),
(2, 'Premier test effectuer avec succès'),
(3, 'Activer les button modifier et supprimer'),
(4, 'Faire un system de login'),
(5, 'Créer un système de case a cochet une fois cochet désactive le champs concerner'),
(6, 'Bonjour'),
(7, 'bonjour je suis débutant un informatique'),
(8, 'bonjour je suis débutant un informatique');

-- --------------------------------------------------------

--
-- Table structure for table `entrer1`
--

CREATE TABLE `entrer1` (
  `ID` int(4) NOT NULL,
  `Donner` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entrer1`
--

INSERT INTO `entrer1` (`ID`, `Donner`) VALUES
(1, 'Projet presque terminer'),
(2, 'Il reste a améliorer le désigne'),
(3, 'Apres mettre le projet sur mon compte GitHub '),
(4, 'Après m\'attaquer au prochains projet '),
(5, 'Merci pour votre patience');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nom`, `prenom`, `identifiant`, `code`) VALUES
('TIMBOLIBA', 'HAMADI', 'hamadi1', '74748056ht'),
('Traore', 'Moussa', 'moussa7', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entrer`
--
ALTER TABLE `entrer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `entrer1`
--
ALTER TABLE `entrer1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`identifiant`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entrer`
--
ALTER TABLE `entrer`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `entrer1`
--
ALTER TABLE `entrer1`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
