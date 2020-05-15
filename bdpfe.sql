-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 15 Mai 2020 à 21:19
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
(9, 3, NULL, 'construire une zone touristique  1', 80, 'Comment'),
(10, 4, NULL, 'route 2313874', 25, ''),
(11, 5, NULL, 'musÃ©e  56652', NULL, NULL),
(12, 6, NULL, 'construction de l ecole M', NULL, NULL),
(13, 7, NULL, 'forums ', NULL, NULL),
(14, 8, NULL, 'centre de formation 1', NULL, NULL),
(15, 9, NULL, 'centre de formation 1', NULL, NULL),
(16, 10, NULL, 'centre de technologie 2', NULL, NULL),
(17, 11, NULL, 'contribuer aux hopiteaux 3254', NULL, NULL),
(18, 12, NULL, 'construction de la sociÃ©tÃ© D', NULL, NULL),
(19, 13, NULL, 'marchÃ© 56412', NULL, NULL),
(20, 14, NULL, 'construction de l ecole H', NULL, NULL),
(21, 15, 6, 'construction de l ecole y	', NULL, NULL),
(22, 16, NULL, 'contribuer aux lignes 21564', NULL, NULL),
(23, 17, NULL, 'projets sociaux ', NULL, NULL),
(24, 18, NULL, 'construction de l ecole K', NULL, NULL),
(25, 19, NULL, 'transport scolaires  ', NULL, NULL),
(26, 20, NULL, 'construction de l ecole y', NULL, NULL),
(27, 21, NULL, 'construire une zone touristique  1', NULL, NULL),
(28, 22, NULL, 'route 2313874', NULL, NULL),
(29, 23, 9, 'transport scolaires  	', NULL, NULL),
(30, 24, NULL, 'musÃ©e  56652', NULL, NULL),
(31, 25, NULL, 'construction de l ecole M', NULL, NULL),
(32, 26, 9, 'construction de l ecole K	', NULL, NULL),
(33, 27, 13, 'projets sociaux 		', NULL, NULL),
(34, 28, NULL, 'construction de l ecole M', NULL, NULL),
(35, 29, 15, 'contribuer aux lignes 21564', NULL, NULL),
(36, 30, NULL, 'construction de l ecole M', NULL, NULL),
(37, 31, 17, 'construction de l ecole H		', NULL, NULL),
(38, 31, 19, 'marchÃ© 56412	', NULL, NULL),
(39, 32, 20, 'construction de la sociÃ©tÃ© D	', NULL, NULL),
(40, 33, NULL, 'contribuer aux hopiteaux 3254', NULL, NULL),
(41, 34, 18, 'centre de technologie 2	', NULL, NULL);

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
(3, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(4, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(5, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(6, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(7, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(8, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(9, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(10, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(11, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(12, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(13, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(14, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(15, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(16, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(17, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(18, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(19, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(20, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(21, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(22, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(23, '2016-03-01', '0000-00-00', '0000-00-00', '0000-00-00'),
(24, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(25, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(26, '2017-07-01', '0000-00-00', '0000-00-00', '0000-00-00'),
(27, '2017-03-01', '0000-00-00', '0000-00-00', '0000-00-00'),
(28, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(29, '2018-01-01', '0000-00-00', '0000-00-00', '0000-00-00'),
(30, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(31, '2019-10-01', '0000-00-00', '0000-00-00', '0000-00-00'),
(31, '2016-09-01', '0000-00-00', '0000-00-00', '0000-00-00'),
(32, '2017-07-01', '0000-00-00', '0000-00-00', '0000-00-00'),
(33, '2016-03-01', '0000-00-00', '0000-00-00', '0000-00-00'),
(34, '2016-04-01', '0000-00-00', '0000-00-00', '0000-00-00');

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
(3, 1, NULL, ''),
(4, 1, NULL, ''),
(5, 1, NULL, ''),
(6, 1, NULL, ''),
(7, 1, NULL, ''),
(8, 1, NULL, ''),
(9, 1, NULL, ''),
(10, 1, NULL, ''),
(11, 1, NULL, ''),
(12, 1, NULL, ''),
(13, 1, NULL, ''),
(14, 1, NULL, ''),
(15, 1, 6, 'etab13285'),
(16, 1, NULL, ''),
(17, 1, NULL, ''),
(18, 1, NULL, ''),
(19, 1, NULL, ''),
(20, 1, NULL, ''),
(21, 1, NULL, ''),
(22, 1, NULL, ''),
(23, 1, 9, 'agence321'),
(24, 1, NULL, ''),
(25, 1, NULL, ''),
(26, 1, 9, 'agence321'),
(27, 1, 13, 'etab512321'),
(28, 1, NULL, ''),
(29, 1, 15, 'agence32131'),
(30, 1, NULL, ''),
(31, 1, 17, 'etab516351'),
(31, 1, 19, 'etab11'),
(32, 1, 20, 'etab564654'),
(33, 1, NULL, 'tanger-tetouan-alhouciema'),
(34, 1, 18, 'agence564163541');

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
(13, 3, 0, 0, 0, 0, 0),
(14, 4, 0, 0, 0, 0, 0),
(15, 5, 0, 0, 0, 0, 0),
(16, 6, 0, 0, 0, 0, 0),
(17, 7, 0, 0, 0, 0, 0),
(18, 8, 0, 0, 0, 0, 0),
(19, 9, 0, 0, 0, 0, 0),
(20, 10, 0, 0, 0, 0, 0),
(21, 11, 0, 0, 0, 0, 0),
(22, 12, 0, 0, 0, 0, 0),
(23, 13, 0, 0, 0, 0, 0),
(24, 14, 0, 0, 0, 0, 0),
(25, 15, 20000000, 0, 5, 3, 3),
(26, 16, 0, 0, 0, 0, 0),
(27, 17, 0, 0, 0, 0, 0),
(28, 18, 0, 0, 0, 0, 0),
(29, 19, 0, 0, 0, 0, 0),
(30, 20, 0, 0, 0, 0, 0),
(31, 21, 0, 0, 0, 0, 0),
(32, 22, 0, 0, 0, 0, 0),
(33, 23, 0, 0, 0, 3, 0),
(34, 24, 0, 0, 0, 0, 0),
(35, 25, 0, 0, 0, 0, 0),
(36, 26, 0, 0, 0, 2, 0),
(37, 27, 1000000, 0, 2, 3, 4),
(38, 28, 0, 0, 0, 0, 0),
(39, 29, 6000000, 0, 5, 3, 2),
(40, 30, 0, 0, 0, 0, 0),
(41, 31, 55411100, 0, 3, 1, 2),
(42, 31, 53456500, 0, 4, 2, 4),
(43, 32, 65464700, 0, 5, 3, 2),
(44, 33, 65446500, 0, 2, 3, 3),
(45, 34, 0, 0, 4, 0, 0);

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
(3, 'construire une zone touristique  1', 'convention', 'construire une zone touristique  1', '        construire une zone touristique  1\r\n   ', '', 'Commune', '', 2, 1, '', 0, 1, NULL, NULL),
(4, 'route 2313874', 'convention', 'route 2313874', '            route 2313874\r\n', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(5, 'musÃ©e  56652', 'musÃ©e  56652', 'musÃ©e  56652', '            ', '', 'Unique', '', 0, 0, '', 0, 1, NULL, NULL),
(6, 'construction de l ecole M', 'convention', 'construction de l ecole M', '            construction de l ecole M\r\n', '', 'Unique', '', 0, 0, '', 0, 1, NULL, NULL),
(7, 'forums ', 'convention', 'forums ', '            forums \r\n', '', 'Unique', '', 0, 0, '', 0, 1, NULL, NULL),
(8, 'centre de formation 1', 'convention', 'centre de formation 1', '            centre de formation 1\r\n', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(9, 'centre de formation 1', 'convention', 'centre de formation 1', '        centre de formation 1\r\n    ', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(10, 'centre de technologie 2', 'convention', 'centre de technologie 2', '            centre de technologie 2\r\n', '', 'Unique', '', 0, 0, '', 0, 1, NULL, NULL),
(11, 'contribuer aux hopiteaux 3254', 'convention', 'contribuer aux hopiteaux 3254', '            contribuer aux hopiteaux 3254\r\n', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(12, 'construction de la sociÃ©tÃ© D', 'convention', 'construction de la sociÃ©tÃ© D', '            construction de la sociÃ©tÃ© D\r\n', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(13, 'marchÃ© 56412', 'convention', 'marchÃ© 56412', '            marchÃ© 56412\r\n', '', 'Unique', '', 0, 0, '', 0, 1, NULL, NULL),
(14, 'construction de l ecole H', 'convention', 'construction de l ecole H', '            construction de l ecole H\r\n', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(15, 'construction de l ecole y	', 'convention	', 'construction de l ecole y	', '            unique 	', 'education', 'Unique', '', 0, 6, '', 0, 1, NULL, NULL),
(16, 'contribuer aux lignes 21564', 'convention', 'contribuer aux lignes 21564', '            contribuer aux lignes 21564\r\n', '', 'Unique', '', 0, 0, '', 0, 1, NULL, NULL),
(17, 'projets sociaux ', 'convention', 'projets sociaux ', '         projets sociaux \r\n   ', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(18, 'construction de l ecole K', 'convention', 'construction de l ecole K', 'construction de l ecole K\r\n            ', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(19, 'transport scolaires  ', 'convention', 'transport scolaires  ', '         transport scolaires  \r\n   ', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(20, 'construction de l ecole y', 'convention', 'construction de l ecole y', '            construction de l ecole y\r\n', '', 'Unique', '', 0, 0, '', 0, 1, NULL, NULL),
(21, 'construire une zone touristique  1', 'convention', 'construire une zone touristique  1', '            construire une zone touristique  1\r\n', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(22, 'route 2313874', 'convention', 'route 2313874', '            route 2313874\r\n', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(23, 'transport scolaires  	', 'convention	', 'transport scolaires ', 'transport scolaires ', 'education', 'Commune', '', 0, 9, '', 0, 1, NULL, NULL),
(24, 'musÃ©e  56652', 'convention', 'musÃ©e  56652', '          musÃ©e  56652\r\n  ', '', 'Unique', '', 0, 0, '', 0, 1, NULL, NULL),
(25, 'construction de l ecole M', 'convention', 'construction de l ecole M', '            construction de l ecole M\r\n', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(26, 'construction de l ecole K	', 'convention	', 'construction de l ecole K	', '   	construction de l ecole K		         ', 'commun', 'Unique', 'Education', 0, 3, '', 0, 0, NULL, NULL),
(27, 'projets sociaux 		', 'convention	', 'projets sociaux 	', '            projets sociaux 	', 'commun	', 'Unique', 'Secteur social', 0, 5, '', 0, 1, NULL, NULL),
(28, 'construction de l ecole M', 'convention', 'construction de l ecole M', '            construction de l ecole M\r\n', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(29, 'contribuer aux lignes 21564', 'convention	', 'contribuer aux lignes 21564	', '            contribuer aux lignes 21564		', '            contribuer aux lignes 21564		', 'Unique', 'Infrastructure', 0, 0, '', 0, 0, NULL, NULL),
(30, 'construction de l ecole M', 'convention', 'construction de l ecole M', '            construction de l ecole M\r\n', '', 'Commune', '', 0, 0, '', 0, 1, NULL, NULL),
(31, 'marchÃ© 56412	', 'convention	', 'marchÃ© 56412	', '            marchÃ© 56412	', 'marchÃ© 56412	', 'Unique', 'Secteur economic', 0, 12, '', 0, 0, NULL, NULL),
(32, 'construction de la sociÃ©tÃ© D	', 'convention	', 'construction de la sociÃ©tÃ© D		', '            construction de la sociÃ©tÃ© D	', 'construction de la sociÃ©tÃ© D	', 'Commune', 'Secteur economic', 0, 10, '', 0, 0, NULL, NULL),
(33, 'contribuer aux hopiteaux 3254', 'convention', 'contribuer aux hopiteaux 3254	', '            contribuer aux hopiteaux 3254	', 'contribuer aux hopiteaux 3254	', 'Commune', 'SantÃ©', 0, 8, '', 0, 1, NULL, NULL),
(34, 'centre de technologie 2	', 'convention	', 'centre de technologie 2	', '      centre de technologie 2	      ', 'centre de technologie 2	', 'Unique', 'Education', 0, 9, '', 0, 1, NULL, NULL);

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
(2, 'Agence', 'AgenceY', '', '', '', NULL),
(3, 'Etablissement', 'EtablissementX', '', '', '', NULL),
(4, 'Etablissement', 'EtablissementY', '', '', '', NULL),
(5, 'Agence', 'AgenceZ', '666666666', 'AgenceZ@miage.pfe', '123456789', 'Adresse AgenceZ'),
(6, 'Etablissement', 'etab13285', '522232400', 'etab13285@miage.pfe', '123456789', '	Centre Asilah 90034 TANGER ASSILAH'),
(7, 'Agence', 'agence5654564', '666895623', 'agence1@miage.pfe', '123456789', '125 avenue ahl fes tetouan'),
(8, 'Agence', 'agence654645', '661237485', 'agence22@miage.pfe', '123456789', '465 avenue moulay ali cherif tanger'),
(9, 'Agence', 'agence321', '522141700', 'agence321@miage.pfe', '123456780', ' rte de Larache , nÂ°110 KSAR EL KEBIR '),
(10, 'Etablissement', 'etab65646541', '668695256', 'etab22@miage.pfe', '123456789', '963 avenue ghernata mala bata tanger'),
(11, 'Agence', 'agence321', '522363900', 'agence321@miage.pfe', '123456789', '26, av Allal Ben Abdellah OUAZZANE'),
(12, 'Agence', 'agence531', '601568974', 'agence531@miage.pfe', '123456789', '129 avenue les far tetouan'),
(13, 'Etablissement', 'etab512321', '522366877', 'etab512321@gmail.com', '123456789', ' Centre Jebha CHEFCHAOUEN '),
(14, 'Agence', 'agence5445', '666895624', 'agence54@miaage.pfe', '123456789', '101 AV abdelkrim elkhettabi tetouan'),
(15, 'Agence', 'agence32131', '522232321', 'agence32131', '123456789', 'bd Tarik Bnou Ziad, lotiss. Sabrine nÂ°42, Angra'),
(16, 'Agence', 'agence3513152', '666895625', 'agence35@miage.pfe', '123456789', '104 Z/C alhadika fahs anjra'),
(17, 'Etablissement', 'etab516351', '524002121', 'etab516351@125gmail.com', '123456789', 'Centre hjar nhal tanger-assillah	'),
(18, 'Agence', 'agence564163541', '666895626', 'agence41@miage.pfe', '123456789', '106 Z/B alhadika laarach'),
(19, 'Etablissement', 'etab11', '661236812', 'etab11', '123456789', '44 Rue Al Mourabitine, tamsawt AL HOCEIMA'),
(20, 'Etablissement', 'etab564654', '525898712', 'etab564654@gmail.com', '123456789', 'Centre beni bozra,  chefchaoun 	');

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
(16, 3, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(17, 4, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(18, 5, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(19, 6, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(20, 7, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(21, 8, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(22, 9, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(23, 10, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(24, 11, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(25, 12, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(26, 13, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(27, 14, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(28, 15, 'Tangier-TÃ©touan-Al Hoceima', 'tanger-assilah', 'asilah', 'Ubrain'),
(29, 16, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(30, 17, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(31, 18, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(32, 19, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(33, 20, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(34, 21, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(35, 22, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(36, 23, 'Tangier-TÃ©touan-Al Hoceima', 'laarach	', 'qaser kabir', 'Ubrain'),
(37, 24, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(38, 25, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(39, 26, 'Tangier-TÃ©touan-Al Hoceima', 'ouazzan	', 'beni kola', 'Rural'),
(40, 27, 'Tangier-TÃ©touan-Al Hoceima', 'chefchaoun 	', 'jabha', 'Rural'),
(41, 28, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(42, 29, 'Tangier-TÃ©touan-Al Hoceima', 'fahs anjra	', 'anjra', 'Rural'),
(43, 30, 'Tangier-TÃ©touan-Al Hoceima', '', '', 'NULL'),
(44, 31, 'Tangier-TÃ©touan-Al Hoceima', 'tanger-assillah	', 'hjar nhal', 'Rural'),
(45, 31, 'Tangier-TÃ©touan-Al Hoceima', 'al hociema 	', 'tamsawt', 'Rural'),
(46, 32, 'Tangier-TÃ©touan-Al Hoceima', 'chefchaoun 	', 'beni bozra', 'Rural'),
(47, 33, 'Tangier-TÃ©touan-Al Hoceima', 'laarach	', 'swaken ', 'Rural'),
(48, 34, 'Tangier-TÃ©touan-Al Hoceima', 'laarach', 'laarach', 'Ubrain');

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
  MODIFY `ID_AP` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT pour la table `financeprojet`
--
ALTER TABLE `financeprojet`
  MODIFY `Idfin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `Id_Notif` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `IdProjet` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `zone`
--
ALTER TABLE `zone`
  MODIFY `IdZone` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
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
