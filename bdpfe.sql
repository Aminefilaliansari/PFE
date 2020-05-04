-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 04 Mai 2020 à 20:41
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
  `iduser` int(10) DEFAULT NULL,
  `Label` varchar(50) DEFAULT NULL,
  `Etat` float DEFAULT NULL,
  `Commentaire` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `avancementprojet`
--

INSERT INTO `avancementprojet` (`ID_AP`, `idprojet`, `iduser`, `Label`, `Etat`, `Commentaire`) VALUES
(1, 15, 1, NULL, NULL, NULL),
(2, 17, 1, NULL, NULL, NULL),
(3, 19, 1, NULL, NULL, NULL),
(6, 23, NULL, NULL, NULL, NULL);

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

--
-- Contenu de la table `dateprojet`
--

INSERT INTO `dateprojet` (`idprojet`, `dateAuthentif`, `dateDistribut`, `dateMark`, `dateExecut`) VALUES
(11, '2020-01-01', '2020-02-02', '2020-04-03', '2020-04-04'),
(12, '2020-01-01', '2020-01-01', '2020-01-01', '2020-01-01'),
(10, '2020-04-01', '2020-04-02', '2020-04-03', '2020-04-04'),
(15, '2020-01-01', '2020-01-01', '2020-01-01', '2020-01-01'),
(16, '2020-04-04', '2020-04-04', '2020-04-04', '2020-04-04'),
(17, '2020-07-07', '2020-07-07', '2020-07-07', '2020-07-07'),
(18, '2020-08-08', '2020-08-08', '2020-08-08', '2020-08-08'),
(19, '2020-08-08', '2020-08-08', '2020-08-08', '2020-08-08'),
(20, '2020-09-09', '2020-09-09', '2020-09-09', '2020-09-09'),
(21, '2020-05-05', '2020-05-05', '2020-05-05', '2020-05-05'),
(22, '2020-01-01', '2006-06-06', '2006-06-06', '2006-06-06'),
(23, '2020-01-01', '2020-01-01', '2020-01-01', '2020-01-01');

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

--
-- Contenu de la table `distruberprojet`
--

INSERT INTO `distruberprojet` (`idprojet`, `idadmin`, `iduser`, `NomExcute`) VALUES
(11, 1, 1, 'AgenceX'),
(11, 1, 1, 'AgenceX'),
(11, 1, 1, 'AgenceX'),
(12, 1, 1, 'AgenceX'),
(15, 1, 1, 'AgenceX'),
(17, 1, 1, 'AgenceX'),
(19, 1, 1, 'AgenceX'),
(22, 1, NULL, ''),
(23, 1, NULL, '');

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

--
-- Contenu de la table `financeprojet`
--

INSERT INTO `financeprojet` (`Idfin`, `idprojet`, `Contrib_Etat`, `Contrib_Etabli`, `NbrEtab`, `durAdmin`, `durEtabli`) VALUES
(1, 14, 1000, 2000, 3000, 4000, 5000),
(2, 15, 30000, 300000, 3000, 300, 30),
(3, 16, 40, 400, 4000, 40000, 4000000),
(4, 17, 70, 700, 7000, 70000, 7000000),
(5, 18, 80, 800, 8000, 8000, 80000),
(6, 19, 80, 800, 8000, 8000, 80000),
(7, 20, 90, 900, 9000, 900009, 90000),
(8, 21, 5, 50, 5050, 5000, 500000),
(9, 22, 6, 66, 666, 66666, 666666),
(10, 23, 72, 722, 7222, 72222, 72222);

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
  `SourcePDF` blob,
  `SourcePDF2` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`IdProjet`, `TitreProjet`, `typeprojet`, `sujetprojet`, `textprojet`, `objectifprojet`, `specialiteprojet`, `champprojet`, `indicenrprojet`, `voteprojet`, `normeExcutprojet`, `indicesNRProjet`, `booleenPDR`, `SourcePDF`, `SourcePDF2`) VALUES
(10, 'Titre 10', 'type10', 'sujet100', 'text10', 'objec10', 'special10', 'champ10', 101010101, 10, 'nom', 10, 1, NULL, NULL),
(11, 'Titre 11', 'type11', 'sujet11', 'text11', 'objectif11', 'special11', 'cham11', 111111, 1010101, 'norme11', 111111, 1, NULL, NULL),
(12, 'titre15', 'type15', 'sujet15', 'txt15', 'obj15', 'spe15', 'champ15', 151515, 15, 'nome15', 15151500, 1, NULL, NULL),
(13, 'TITRE 20', 'type 20', 'sujet20', 'text20', 'ibj20', '', 'champ20', 111111, 1010101, 'norme11', 111111, 1, NULL, NULL),
(14, 'Titre 22', 'type 22', 'sujet22', 'tex22', 'OBJ22', 'Personnelle', 'champ22', 111111, 1010101, 'norme11', 111111, 0, NULL, NULL),
(15, 'Titre 30', 'type 30', 'sujet 30 ', 'text30            ', 'objec30', 'Personnelle', 'Secteur sociale', 30, 30, 'norm30', 30330, 1, NULL, NULL),
(16, 'Titre 40', 'type40', 'sujet 40', 'text 40            ', 'obj 40', 'Personnelle', 'Secteur sociale', 40, 40, 'Norme40', 40, 0, NULL, NULL),
(17, 'Titre 70', 'type70', 'sujet70', 'text70', 'Obj70', 'Personnelle', 'Secteur economique', 70, 70, 'norm70', 70070, 0, NULL, NULL),
(18, 'Titre 80', 'type 80', 'sujet 80', 'text 80', 'obj80', 'Personnelle', 'Secteur economique', 80, 80, 'norm80', 8080, 0, NULL, NULL),
(19, 'Titre 80', 'type 80', 'sujet 80', 'text 80', 'obj80', 'Personnelle', 'Secteur economique', 80, 80, 'norm80', 8080, 0, NULL, NULL),
(20, 'titre90', 'type90', 'sujet 90', 'Text90            ', 'Objec90', 'Personnelle', 'Secteur sociale', 9090, 90, 'Nom90', 90, 1, NULL, NULL),
(21, 'Titre 55', 'type55', 'sujet55', 'text55', 'obj55', 'Personnelle', 'Secteur sociale', 55, 55, 'norm55', 55, 1, NULL, NULL),
(22, 'Titre  66', 'type66', 'sujet66', 'text 66            ', 'obj 66', 'Personnelle', 'Secteur sociale', 6666, 666, 'norm6', 6, 1, NULL, NULL),
(23, 'Titre 72', 'TYPE72', 'SUB72', 'TEXT72            ', 'OBJ72', 'Personnelle', 'Secteur sociale', 72, 752, '72', 75, 1, NULL, NULL);

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

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`IdUser`, `Role`, `Nom`, `Tel`, `Email`, `Password`, `Adresse`) VALUES
(1, 'Agence', 'AgenceX', '', '', '', NULL),
(2, 'Agence', 'AgenceY', '', '', '', NULL),
(3, 'Etablissement', 'EtablissementX', '', '', '', NULL),
(4, 'Etablissement', 'EtablissementY', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE `zone` (
  `IdZone` int(10) NOT NULL,
  `idprojet` int(10) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `provaince` varchar(100) DEFAULT NULL,
  `commune` varchar(100) DEFAULT NULL,
  `Typecommune` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `zone`
--

INSERT INTO `zone` (`IdZone`, `idprojet`, `region`, `provaince`, `commune`, `Typecommune`) VALUES
(1, 11, 'Region Casa', 'Provaince Casa', 'Commune Casa', NULL),
(2, 12, 'Region Casa', 'Provaince Casa', 'Commune Casa', NULL),
(3, 15, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'Ubrain'),
(4, 16, 'Fez-MeknÃ©s', '', '', 'Rural'),
(5, 17, 'Fez-MeknÃ©s', '', '', 'Rural'),
(6, 18, 'Settat-Casablanca', '', '', 'Rural'),
(7, 19, 'Settat-Casablanca', '', '', 'Rural'),
(8, 20, 'Settat-Casablanca', '', '', 'Rural'),
(9, 21, 'Oriental', '', '', 'Rural'),
(10, 22, 'Dakhla-Oued Eddahab', '----------', '--------', 'Ubrain'),
(11, 23, 'Marrakesh-Safi', '----------', '--------', '--------'),
(12, 23, 'Region Casa', 'Provaince Casa', 'Commune Casa', NULL),
(13, 23, 'Region Casa', 'Provaince Casa', 'Commune Casa', NULL);

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
  MODIFY `ID_AP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `financeprojet`
--
ALTER TABLE `financeprojet`
  MODIFY `Idfin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `Id_Notif` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `IdProjet` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `zone`
--
ALTER TABLE `zone`
  MODIFY `IdZone` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
