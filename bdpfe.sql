-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Avril 2020 à 22:52
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
  `Etat` int(50) NOT NULL,
  `Commentaire` text NOT NULL
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
  `TitreProjet` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Budget` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`IdProjet`, `TitreProjet`, `Description`, `Budget`) VALUES
(1, 'Projet 01', 'Description du projet 01', 100000),
(2, 'Projet 02', 'Description du projet 02', 200000),
(6, 'Titre test 3', 'Descrip 03', 300000);

-- --------------------------------------------------------

--
-- Structure de la table `suiviprojet`
--

CREATE TABLE `suiviprojet` (
  `id_sp` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idadmin` int(10) NOT NULL,
  `idprojet` int(10) NOT NULL,
  `Pourcentage` int(50) NOT NULL,
  `Date_Debut` date NOT NULL,
  `Date_Fin` date NOT NULL,
  `Budget_Debut` double NOT NULL,
  `Budget_Fin` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `IdZone` int(10) NOT NULL,
  `Adresse` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`IdUser`, `Role`, `Nom`, `Tel`, `Email`, `Password`, `IdZone`, `Adresse`) VALUES
(4, 'Agence', 'Agence X', '0600000000', 'AgenceX@miage.pfe', '123456789', 1, NULL),
(7, 'Etablissement', 'Etab X', '0600000000', 'EtabX@Miage.Pfe', '123456789', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE `zone` (
  `IdZone` int(10) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `Region` varchar(50) NOT NULL,
  `Sousregion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `zone`
--

INSERT INTO `zone` (`IdZone`, `Ville`, `Region`, `Sousregion`) VALUES
(1, 'Grand Casablanca', 'Anfa', 'anfa01');

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
-- Index pour la table `suiviprojet`
--
ALTER TABLE `suiviprojet`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `Cont_10` (`iduser`),
  ADD KEY `Cont_11` (`idadmin`),
  ADD KEY `Cont_12` (`idprojet`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`),
  ADD KEY `Cont_Zone01` (`IdZone`);

--
-- Index pour la table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`IdZone`);

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
-- AUTO_INCREMENT pour la table `suiviprojet`
--
ALTER TABLE `suiviprojet`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT;
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
-- Contraintes pour la table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `Cont_02` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`IdAdmin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Cont_03` FOREIGN KEY (`iduser`) REFERENCES `user` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Cont_04` FOREIGN KEY (`idprojet`) REFERENCES `projet` (`IdProjet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `suiviprojet`
--
ALTER TABLE `suiviprojet`
  ADD CONSTRAINT `Cont_10` FOREIGN KEY (`iduser`) REFERENCES `user` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Cont_11` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`IdAdmin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Cont_12` FOREIGN KEY (`idprojet`) REFERENCES `projet` (`IdProjet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `Cont_Zone01` FOREIGN KEY (`IdZone`) REFERENCES `zone` (`IdZone`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
