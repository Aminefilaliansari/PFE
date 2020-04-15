-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 15 Avril 2020 à 14:06
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdpfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `IdAdmin` int(10) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`IdAdmin`, `Nom`, `Email`, `Password`) VALUES
(1, 'Amine', 'Amine@gmail.com', '123456789'),
(2, 'Admin', 'Admin@Miage.pfe', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `avancementprojet`
--

CREATE TABLE `avancementprojet` (
  `ID_AP` int(10) NOT NULL,
  `idprojet` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `Label` varchar(50) NOT NULL,
  `Etat` float NOT NULL,
  `Commentaire` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dateprojet`
--

CREATE TABLE `dateprojet` (
  `idprojet` int(11) NOT NULL,
  `dateAuthentif` date DEFAULT NULL,
  `dateDistribut` date DEFAULT NULL,
  `dateMark` date DEFAULT NULL,
  `dateExecut` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `distruberprojet`
--

CREATE TABLE `distruberprojet` (
  `idprojet` int(10) NOT NULL,
  `idadmin` int(10) DEFAULT NULL,
  `iduser` int(10) DEFAULT NULL,
  `NomExcute` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `financeprojet`
--

CREATE TABLE `financeprojet` (
  `Idfin` int(11) NOT NULL,
  `idprojet` int(11) DEFAULT NULL,
  `Contrib_Etat` float DEFAULT NULL,
  `Contrib_Etabli` float DEFAULT NULL,
  `NbrEtab` int(10) DEFAULT NULL,
  `durAdmin` float DEFAULT NULL,
  `durEtabli` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `Id_Notif` int(10) NOT NULL,
  `idadmin` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idprojet` int(10) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `IdProjet` int(10) NOT NULL,
  `TitreProjet` varchar(50) DEFAULT NULL,
  `typeprojet` varchar(50) DEFAULT NULL,
  `sujetprojet` varchar(50) DEFAULT NULL,
  `textprojet` text,
  `objectifprojet` text,
  `specialiteprojet` varchar(50) DEFAULT NULL,
  `champprojet` varchar(50) DEFAULT NULL,
  `indicenrprojet` int(10) DEFAULT NULL,
  `voteprojet` int(10) DEFAULT NULL,
  `normeExcutprojet` text,
  `indicesNRProjet` float DEFAULT NULL,
  `booleenPDR` tinyint(1) DEFAULT NULL,
  `SourcePDF` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`IdProjet`, `TitreProjet`, `typeprojet`, `sujetprojet`, `textprojet`, `objectifprojet`, `specialiteprojet`, `champprojet`, `indicenrprojet`, `voteprojet`, `normeExcutprojet`, `indicesNRProjet`, `booleenPDR`, `SourcePDF`) VALUES
(1, 'Projet 01', '', '', '', '', '', '', 0, 0, '', 0, 0, ''),
(2, 'Projet 02', '', '', '', '', '', '', 0, 0, '', 0, 0, ''),
(6, 'Titre test 3', '', '', '', '', '', '', 0, 0, '', 0, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `IdUser` int(10) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Adresse` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE `zone` (
  `IdZone` int(10) NOT NULL,
  `idprojet` int(10) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `provaince` varchar(100) DEFAULT NULL,
  `commune` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Index pour la table `avancementprojet`
--
ALTER TABLE `avancementprojet`
  ADD PRIMARY KEY (`ID_AP`),
  ADD KEY `Cont_Projet02` (`idprojet`),
  ADD KEY `Cont_user03` (`iduser`);

--
-- Index pour la table `dateprojet`
--
ALTER TABLE `dateprojet`
  ADD KEY `Cont_21` (`idprojet`);

--
-- Index pour la table `distruberprojet`
--
ALTER TABLE `distruberprojet`
  ADD KEY `Cont_D01` (`idprojet`),
  ADD KEY `Cont_D02` (`idadmin`),
  ADD KEY `Cont_D03` (`iduser`);

--
-- Index pour la table `financeprojet`
--
ALTER TABLE `financeprojet`
  ADD PRIMARY KEY (`Idfin`),
  ADD KEY `Cont_14` (`idprojet`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Id_Notif`),
  ADD KEY `Cont_02` (`idadmin`),
  ADD KEY `Cont_03` (`iduser`),
  ADD KEY `Cont_04` (`idprojet`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`IdProjet`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`);

--
-- Index pour la table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`IdZone`),
  ADD KEY `Cont_20` (`idprojet`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `IdAdmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `avancementprojet`
--
ALTER TABLE `avancementprojet`
  MODIFY `ID_AP` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `financeprojet`
--
ALTER TABLE `financeprojet`
  MODIFY `Idfin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `Id_Notif` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `IdProjet` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `zone`
--
ALTER TABLE `zone`
  MODIFY `IdZone` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `avancementprojet`
--
ALTER TABLE `avancementprojet`
  ADD CONSTRAINT `Cont_Projet02` FOREIGN KEY (`idprojet`) REFERENCES `projet` (`IdProjet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Cont_user03` FOREIGN KEY (`iduser`) REFERENCES `user` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `dateprojet`
--
ALTER TABLE `dateprojet`
  ADD CONSTRAINT `Cont_21` FOREIGN KEY (`idprojet`) REFERENCES `projet` (`IdProjet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `distruberprojet`
--
ALTER TABLE `distruberprojet`
  ADD CONSTRAINT `Cont_D01` FOREIGN KEY (`idprojet`) REFERENCES `projet` (`IdProjet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Cont_D02` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`IdAdmin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Cont_D03` FOREIGN KEY (`iduser`) REFERENCES `user` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `financeprojet`
--
ALTER TABLE `financeprojet`
  ADD CONSTRAINT `Cont_14` FOREIGN KEY (`idprojet`) REFERENCES `projet` (`IdProjet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `Cont_02` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`IdAdmin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Cont_03` FOREIGN KEY (`iduser`) REFERENCES `user` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Cont_04` FOREIGN KEY (`idprojet`) REFERENCES `projet` (`IdProjet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `Cont_20` FOREIGN KEY (`idprojet`) REFERENCES `projet` (`IdProjet`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
