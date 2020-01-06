-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 06 jan. 2020 à 14:14
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cpi_base`
--

-- --------------------------------------------------------

--
-- Structure de la table `bureau`
--

CREATE TABLE `bureau` (
  `idBureau` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL,
  `service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `collaboration`
--

CREATE TABLE `collaboration` (
  `idc` int(11) NOT NULL,
  `libellec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `collaboration`
--

INSERT INTO `collaboration` (`idc`, `libellec`) VALUES
(1, 'A Vendre'),
(2, 'A Louer'),
(3, 'A Donner en Gerance'),
(4, 'A Renover'),
(5, 'A Construire '),
(6, 'A Morceller'),
(7, 'A Demolir'),
(8, 'A Viabiliser'),
(9, 'A Regulariser'),
(10, 'Autre');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `collecte`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `collecte` (
`idproduit` int(11)
,`numdossier` varchar(30)
,`designation` varchar(500)
,`adresse` varchar(500)
,`surface` float
,`etat` varchar(500)
,`nature` varchar(500)
,`broutep` varchar(100)
,`broute` varchar(100)
,`angle` varchar(100)
,`loinecole` varchar(100)
,`presecole` varchar(100)
,`loinculte` varchar(100)
,`presculte` varchar(100)
,`loinmarche` varchar(100)
,`presmarche` varchar(100)
,`positionnement` varchar(200)
,`usagebienbati` varchar(200)
,`nbpieces` int(11)
,`nbsalledebain` int(11)
,`nbtoilettes` int(11)
,`jardin` varchar(6)
,`nbgarage` int(11)
,`typecuisine` varchar(80)
,`piscine` varchar(3)
,`nbcours` int(11)
,`typeimmeuble` varchar(80)
,`studiositue` varchar(80)
,`garage` varchar(30)
,`buanderie` varchar(30)
,`balcon` varchar(30)
,`ascenseur` varchar(30)
,`autreinfostudio` varchar(80)
,`situationiveau` varchar(80)
,`descbiennonbati` varchar(200)
,`document1` varchar(300)
,`document2` varchar(100)
,`superficies` float
,`etatdroitreel` varchar(100)
,`actedevente` varchar(100)
,`autorisationcons` varchar(100)
,`planbetonarme` varchar(100)
,`planarchi` varchar(100)
,`planindividuelap` varchar(100)
,`autorisationbail` varchar(100)
,`deliberationind` varchar(100)
,`attestbail` varchar(100)
,`procceder` varchar(100)
,`titreprop` varchar(100)
,`cnibailleur` varchar(100)
,`autresdoc` varchar(100)
,`plansite` varchar(100)
,`autreselemproc` varchar(100)
,`planplomberie` varchar(100)
,`planelec` varchar(100)
,`cahierdesctechnique` varchar(100)
,`fichinsctechnique` varchar(10)
,`demandeautmaire` varchar(100)
,`etudefinancement` varchar(100)
,`moyenspreuv` varchar(100)
,`autdemolir` varchar(100)
,`plansituation` varchar(100)
,`jeuxcons` varchar(100)
,`ficherenseign` varchar(100)
,`devisestim` varchar(100)
,`taxesmunicip` varchar(100)
,`taxesurbanism` varchar(10)
,`timbrefisc` varchar(10)
,`enveloppe` varchar(10)
,`demandeminurb` varchar(10)
,`rapportpres` varchar(10)
,`cahiercharge` varchar(10)
,`planmorcel` varchar(10)
,`cdnum` varchar(10)
,`cditem` varchar(10)
,`timbrevar` varchar(10)
,`preuverealpeine` varchar(10)
,`plangeometre` varchar(10)
,`programimetat` varchar(10)
,`demandebailrec` varchar(10)
,`delibcommune` varchar(10)
,`exemplaires` varchar(10)
,`autre` varchar(500)
,`proprietaire` int(11)
,`typeproduit` int(11)
,`zone` int(11)
,`typebienbati` int(11)
,`collaboration` int(11)
,`idUser` int(11)
,`nomu` varchar(500)
,`telu` varchar(50)
,`adresseu` varchar(500)
,`emailu` varchar(500)
,`prenomu` varchar(500)
,`password` varchar(500)
,`etatu` tinyint(1)
,`profil` int(11)
,`idDetail` int(11)
,`utilisateur` int(11)
,`produit` int(11)
,`datecollecte` timestamp
,`tache` int(11)
,`idTache` int(11)
,`libelle` varchar(500)
,`idtypebien` int(11)
,`libelletype` varchar(200)
,`idc` int(11)
,`libellec` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure de la table `cpidepartement`
--

CREATE TABLE `cpidepartement` (
  `idDept` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `idDepartement` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL,
  `region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`idDepartement`, `libelle`, `region`) VALUES
(1, 'Dakar', 1);

-- --------------------------------------------------------

--
-- Structure de la table `details`
--

CREATE TABLE `details` (
  `idDetail` int(11) NOT NULL,
  `utilisateur` int(11) NOT NULL,
  `produit` int(11) NOT NULL,
  `datecollecte` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tache` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `details`
--

INSERT INTO `details` (`idDetail`, `utilisateur`, `produit`, `datecollecte`, `tache`) VALUES
(2, 1, 40, '2019-12-30 15:27:32', 1),
(3, 1, 41, '2020-01-02 14:55:40', 1),
(4, 1, 42, '2020-01-02 15:01:38', 1),
(5, 1, 45, '2020-01-02 16:17:03', 1),
(6, 1, 46, '2020-01-02 19:09:19', 1),
(7, 1, 47, '2020-01-06 12:57:28', 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idproduit` int(11) NOT NULL,
  `numdossier` varchar(30) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `adresse` varchar(500) NOT NULL,
  `surface` float NOT NULL,
  `etat` varchar(500) NOT NULL,
  `nature` varchar(500) NOT NULL,
  `broutep` varchar(100) DEFAULT NULL,
  `broute` varchar(100) DEFAULT NULL,
  `angle` varchar(100) DEFAULT NULL,
  `loinecole` varchar(100) DEFAULT NULL,
  `presecole` varchar(100) DEFAULT NULL,
  `loinculte` varchar(100) DEFAULT NULL,
  `presculte` varchar(100) DEFAULT NULL,
  `loinmarche` varchar(100) DEFAULT NULL,
  `presmarche` varchar(100) DEFAULT NULL,
  `positionnement` varchar(200) NOT NULL,
  `usagebienbati` varchar(200) NOT NULL,
  `nbpieces` int(11) DEFAULT NULL,
  `nbsalledebain` int(11) DEFAULT NULL,
  `nbtoilettes` int(11) DEFAULT NULL,
  `jardin` varchar(6) DEFAULT NULL,
  `nbgarage` int(11) DEFAULT NULL,
  `typecuisine` varchar(80) DEFAULT NULL,
  `piscine` varchar(3) DEFAULT NULL,
  `nbcours` int(11) DEFAULT NULL,
  `typeimmeuble` varchar(80) DEFAULT NULL,
  `studiositue` varchar(80) DEFAULT NULL,
  `garage` varchar(30) DEFAULT NULL,
  `buanderie` varchar(30) DEFAULT NULL,
  `balcon` varchar(30) DEFAULT NULL,
  `ascenseur` varchar(30) DEFAULT NULL,
  `autreinfostudio` varchar(80) DEFAULT NULL,
  `situationiveau` varchar(80) DEFAULT NULL,
  `descbiennonbati` varchar(200) DEFAULT NULL,
  `document1` varchar(300) DEFAULT NULL,
  `document2` varchar(100) DEFAULT NULL,
  `superficies` float DEFAULT NULL,
  `etatdroitreel` varchar(100) DEFAULT NULL,
  `actedevente` varchar(100) DEFAULT NULL,
  `autorisationcons` varchar(100) DEFAULT NULL,
  `planbetonarme` varchar(100) DEFAULT NULL,
  `planarchi` varchar(100) DEFAULT NULL,
  `planindividuelap` varchar(100) DEFAULT NULL,
  `autorisationbail` varchar(100) DEFAULT NULL,
  `deliberationind` varchar(100) DEFAULT NULL,
  `attestbail` varchar(100) DEFAULT NULL,
  `procceder` varchar(100) DEFAULT NULL,
  `titreprop` varchar(100) DEFAULT NULL,
  `cnibailleur` varchar(100) DEFAULT NULL,
  `autresdoc` varchar(100) DEFAULT NULL,
  `plansite` varchar(100) DEFAULT NULL,
  `autreselemproc` varchar(100) DEFAULT NULL,
  `planplomberie` varchar(100) DEFAULT NULL,
  `planelec` varchar(100) DEFAULT NULL,
  `cahierdesctechnique` varchar(100) DEFAULT NULL,
  `fichinsctechnique` varchar(10) DEFAULT NULL,
  `demandeautmaire` varchar(100) DEFAULT NULL,
  `etudefinancement` varchar(100) DEFAULT NULL,
  `moyenspreuv` varchar(100) DEFAULT NULL,
  `autdemolir` varchar(100) DEFAULT NULL,
  `plansituation` varchar(100) DEFAULT NULL,
  `jeuxcons` varchar(100) DEFAULT NULL,
  `ficherenseign` varchar(100) DEFAULT NULL,
  `devisestim` varchar(100) DEFAULT NULL,
  `taxesmunicip` varchar(100) DEFAULT NULL,
  `taxesurbanism` varchar(10) DEFAULT NULL,
  `timbrefisc` varchar(10) DEFAULT NULL,
  `enveloppe` varchar(10) DEFAULT NULL,
  `demandeminurb` varchar(10) DEFAULT NULL,
  `rapportpres` varchar(10) DEFAULT NULL,
  `cahiercharge` varchar(10) DEFAULT NULL,
  `planmorcel` varchar(10) DEFAULT NULL,
  `cdnum` varchar(10) DEFAULT NULL,
  `cditem` varchar(10) DEFAULT NULL,
  `timbrevar` varchar(10) DEFAULT NULL,
  `preuverealpeine` varchar(10) DEFAULT NULL,
  `plangeometre` varchar(10) DEFAULT NULL,
  `programimetat` varchar(10) DEFAULT NULL,
  `demandebailrec` varchar(10) DEFAULT NULL,
  `delibcommune` varchar(10) DEFAULT NULL,
  `exemplaires` varchar(10) DEFAULT NULL,
  `autre` varchar(500) DEFAULT NULL,
  `proprietaire` int(11) NOT NULL,
  `typeproduit` int(11) DEFAULT NULL,
  `zone` int(11) NOT NULL,
  `typebienbati` int(11) NOT NULL,
  `collaboration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idproduit`, `numdossier`, `designation`, `adresse`, `surface`, `etat`, `nature`, `broutep`, `broute`, `angle`, `loinecole`, `presecole`, `loinculte`, `presculte`, `loinmarche`, `presmarche`, `positionnement`, `usagebienbati`, `nbpieces`, `nbsalledebain`, `nbtoilettes`, `jardin`, `nbgarage`, `typecuisine`, `piscine`, `nbcours`, `typeimmeuble`, `studiositue`, `garage`, `buanderie`, `balcon`, `ascenseur`, `autreinfostudio`, `situationiveau`, `descbiennonbati`, `document1`, `document2`, `superficies`, `etatdroitreel`, `actedevente`, `autorisationcons`, `planbetonarme`, `planarchi`, `planindividuelap`, `autorisationbail`, `deliberationind`, `attestbail`, `procceder`, `titreprop`, `cnibailleur`, `autresdoc`, `plansite`, `autreselemproc`, `planplomberie`, `planelec`, `cahierdesctechnique`, `fichinsctechnique`, `demandeautmaire`, `etudefinancement`, `moyenspreuv`, `autdemolir`, `plansituation`, `jeuxcons`, `ficherenseign`, `devisestim`, `taxesmunicip`, `taxesurbanism`, `timbrefisc`, `enveloppe`, `demandeminurb`, `rapportpres`, `cahiercharge`, `planmorcel`, `cdnum`, `cditem`, `timbrevar`, `preuverealpeine`, `plangeometre`, `programimetat`, `demandebailrec`, `delibcommune`, `exemplaires`, `autre`, `proprietaire`, `typeproduit`, `zone`, `typebienbati`, `collaboration`) VALUES
(2, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 3, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, 1, 1, NULL),
(3, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 3, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, 1, 1, 1),
(4, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 3, 'OUI', 2, 'europeenne', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, 'OUI', 'OUI', NULL, NULL, 'OUI', NULL, NULL, 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, 1, 1, 1),
(5, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 6, NULL, 3, 'NON', 1, 'africaine', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, 1, 1, 2),
(6, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 6, NULL, 3, 'NON', 1, 'africaine', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, 1, 1, 2),
(7, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Attestation de Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 2, 'OUI', 1, 'africaine', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL, 1, 1, 3),
(8, '', '', 'dakar', 0, '', 'Attestation de Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 2, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, NULL, 1, 1, 4),
(9, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 6, NULL, 3, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, NULL, 1, 1, 5),
(10, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 6, NULL, 2, 'NON', 1, 'europeenne', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, NULL, 1, 1, 5),
(11, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 6, NULL, 2, 'NON', 1, 'europeenne', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, NULL, 1, 1, 5),
(12, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 6, NULL, 3, 'OUI', 3, 'europeenne', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, NULL, 1, 1, 6),
(13, '', '', 'dakar', 0, '', 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 3, 'OUI', 5, 'europeenne', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, NULL, 1, 1, 6),
(14, '', '', 'dakar', 0, '', 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 3, 'OUI', 5, 'europeenne', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, NULL, 1, 1, 6),
(15, '', '', 'Dakar', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 6, NULL, 3, 'NON', 2, 'europeenne', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18, NULL, 1, 1, 7),
(16, '', '', 'Dakar', 0, '', 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 1, 'OUI', 3, 'europeenne', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, NULL, 1, 1, 8),
(17, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 6, NULL, 2, 'OUI', 2, 'europeenne', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', NULL, 20, NULL, 1, 1, 9),
(18, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 1, NULL, 1, 'europeenne', 'OUI', 2, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, NULL, 1, 2, 1),
(19, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 6, NULL, 2, NULL, 2, 'europeenne', 'OUI', 1, NULL, NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, NULL, 1, 2, 2),
(20, '', '', 'dakar', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'R+4', NULL, '', '', '', '', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, NULL, 1, 3, 2),
(21, '', '', 'Dakar', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 6, NULL, 3, NULL, NULL, 'europeenne', NULL, NULL, NULL, NULL, 'OUI', 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, NULL, 1, 4, 6),
(22, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 2, NULL, NULL, 'europeenne', NULL, NULL, NULL, '4ieme etage', 'OUI', NULL, 'OUI', 'OUI', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, NULL, 1, 4, 4),
(23, '', '', 'dakar', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 6, NULL, 1, NULL, NULL, 'europeenne', NULL, NULL, NULL, '4ieme etage', 'OUI', 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, NULL, 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, NULL, 1, 5, 5),
(24, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'etage', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, NULL, 1, 6, 4),
(25, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 6, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 'RDC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aly green.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, NULL, 1, 7, 3),
(26, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'R+4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 29, NULL, 1, 3, 2),
(27, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 2, NULL, 2, 'NON', 2, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, NULL, 1, 1, 1),
(28, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 2, NULL, 2, 'OUI', 2, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 31, NULL, 1, 1, 1),
(29, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 2, NULL, 2, 'OUI', 2, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 32, NULL, 1, 1, 1),
(30, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 2, NULL, 1, 'OUI', 2, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, NULL, 1, 1, 1),
(31, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 2, NULL, 1, 'OUI', 2, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34, NULL, 1, 1, 1),
(32, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 2, NULL, 2, 'OUI', 2, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 35, NULL, 1, 1, 1),
(33, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 2, NULL, 2, 'OUI', 2, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 36, NULL, 1, 1, 1),
(34, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 2, NULL, 2, 'OUI', 2, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 37, NULL, 1, 1, 1),
(35, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 2, NULL, 2, 'OUI', 2, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, NULL, 1, 1, 1),
(36, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 2, NULL, 2, 'OUI', 2, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 39, NULL, 1, 1, 1),
(37, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 2, NULL, 2, 'OUI', 2, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, NULL, 1, 1, 1),
(38, '', '', 'Diamniadio sphere ministeriel', 0, '', 'Bail', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage professionnelle', 2, NULL, 2, 'OUI', 2, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '221885_document_1_38.pdf', '433780_document_2_38.pdf', NULL, 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, NULL, 1, 1, 1),
(39, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 1, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 42, NULL, 1, 1, 1),
(40, '', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 1, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '212594_document_1_40.pdf', '473604_document_2_40.pdf', NULL, 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 43, NULL, 1, 1, 1),
(41, 'zu040', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 2, NULL, 1, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6056_document_1_41.pdf', '157338_document_2_41.pdf', NULL, 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 44, NULL, 1, 1, 1),
(42, 'zu2020-0241', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 2, NULL, 1, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '333368_document_1_42.pdf', '325017_document_2_42.pdf', NULL, 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 45, NULL, 1, 1, 1),
(43, 'zu2020-0242', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'R+4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 46, NULL, 1, 3, 4),
(44, 'zu2020-0243', '', 'dakar', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'R+2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 47, NULL, 1, 3, 4),
(45, 'zu2020-0244', '', 'dakar', 0, '', 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'R+2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '68848_document_1_45.docx', '85475_document_2_45.pdf', NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 48, NULL, 1, 3, 4),
(46, 'zu2020-0245', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Prive', 'Bordure Route Principale', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pres du Marche', '', 'usage d\'habitation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'R+2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '385398_document_1_46.docx', '28225_document_2_46.pdf', NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 50, NULL, 1, 3, 4),
(47, 'zu2020-0646', '', 'Diamniadio sphere ministeriel', 0, '', 'TF Prive', NULL, 'Bordure Route', 'Angle', NULL, NULL, NULL, 'Pres d\'un lieu culte', NULL, 'Pres du Marche', '', 'usage d\'habitation', 4, NULL, 3, NULL, NULL, 'europeenne', NULL, NULL, NULL, '2ieme etage', 'OUI', 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, '195294_document_1_47.pdf', '389300_document_2_47.docx', NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 51, NULL, 1, 4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `idProfil` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`idProfil`, `libelle`) VALUES
(1, 'admin'),
(2, 'collecteur_zu');

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

CREATE TABLE `proprietaire` (
  `idProp` int(11) NOT NULL,
  `nom` varchar(500) NOT NULL,
  `prenom` varchar(500) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `adressesen` varchar(500) NOT NULL,
  `nomrep` varchar(500) NOT NULL,
  `telrep` varchar(500) NOT NULL,
  `emailrep` varchar(500) NOT NULL,
  `adresserep` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `proprietaire`
--

INSERT INTO `proprietaire` (`idProp`, `nom`, `prenom`, `tel`, `email`, `adressesen`, `nomrep`, `telrep`, `emailrep`, `adresserep`) VALUES
(3, 'Mbaye', 'Jamil Laye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(4, 'Mbaye', 'Jamil Laye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(5, 'Fall', 'Mbaye', '774334094', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(6, 'Sylla', 'Max', '770729699', 'sylla@gmail.com', 'Mbour', 'Cheikh', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(7, 'Sylla', 'Max', '770729699', 'sylla@gmail.com', 'Mbour', 'Cheikh', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(8, 'Sylla', 'Max', '770729699', 'sylla@gmail.com', 'Mbour', 'Cheikh', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(9, 'Sylla', 'Max', '770729699', 'sylla@gmail.com', 'Mbour', 'Cheikh', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(10, 'Fall', 'Mbaye', '773326543', 'ndiayemodou@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(11, 'Jamil Laye MBAYE', 'Max', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(12, 'mardi', 'Mbaye', '773326543', 'mardi@', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(13, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(14, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(15, 'AG', 'Mbaye', '778888888', 'james97', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(16, 'Sylla', 'Max', '778888888', 'james97', 'Mbour', 'Moussa', '773891182', 'jams97@hotmail.fr', 'Mbour'),
(17, 'Sylla', 'Max', '778888888', 'james97', 'Mbour', 'Moussa', '773891182', 'jams97@hotmail.fr', 'Mbour'),
(18, 'Jamil Laye MBAYE', 'Max', '773326543', 'james97', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(19, 'Sylla', 'Jamil Laye', '773326543', 'ndiayemodou@gmail.com', 'Dakar', 'Moussa', '773891182', 'jams97@hotmail.fr', 'Mbour'),
(20, 'AG', 'Jamil Laye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(21, 'Fall', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(22, 'AG', 'Mbaye', '778888888', 'groupisi@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(23, 'modou Ndiaye', 'Max', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(24, 'fouta', 'Jamil Laye', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(25, 'Jamil Laye MBAYE', 'Max', '773326543', 'james97', 'Dakar', 'Cheikh', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(26, 'AG', 'Mbaye', '773343173', 'james97', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(27, 'AG', 'Mbaye', '339874532', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(28, 'modou Ndiaye', 'Max', '339874532', 'james97', 'Dakar', 'Cheikh', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(29, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(30, 'Fall', 'Mbaye', '773326543', 'groupisi@gmail.com', 'Mbour', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(31, 'Fall', 'Mbaye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(32, 'Fall', 'Mbaye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(33, 'AG', 'Mbaye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(34, 'AG', 'Mbaye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(35, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(36, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(37, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(38, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(39, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(40, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(41, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(42, 'Fall', 'Max', '773326543', 'groupisi@gmail.com', 'Mbour', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(43, 'Fall', 'Max', '773326543', 'groupisi@gmail.com', 'Mbour', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(44, 'Jamil Laye MBAYE', 'Mbaye', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(45, 'Jamil Laye MBAYE', 'Mbaye', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(46, 'bouba', 'lo', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(47, 'Fall', 'Mbaye', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(48, 'Fall', 'Mbaye', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(49, 'Fall', 'Max', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(50, 'Fall', 'Max', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(51, 'ndiaye', 'samba', '774563243', 'jamillaye@gmail.com', 'Mbour', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `idRegion` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`idRegion`, `libelle`) VALUES
(1, 'Dakar');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `idService` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL,
  `departement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE `tache` (
  `idTache` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`idTache`, `libelle`) VALUES
(1, 'collecte');

-- --------------------------------------------------------

--
-- Structure de la table `typebienbati`
--

CREATE TABLE `typebienbati` (
  `idtypebien` int(11) NOT NULL,
  `libelletype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typebienbati`
--

INSERT INTO `typebienbati` (`idtypebien`, `libelletype`) VALUES
(1, 'Villa RDC'),
(2, 'Villa R+'),
(3, 'Immeuble'),
(4, 'Studio'),
(5, 'Appartement'),
(6, 'Mangasin'),
(7, 'Hangar'),
(8, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `typeproduit`
--

CREATE TABLE `typeproduit` (
  `idTypeProduit` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typezone`
--

CREATE TABLE `typezone` (
  `idTypezone` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `user_profil`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `user_profil` (
`idUser` int(11)
,`nom` varchar(500)
,`tel` varchar(50)
,`adresse` varchar(500)
,`email` varchar(500)
,`prenom` varchar(500)
,`password` varchar(500)
,`etat` tinyint(1)
,`profil` int(11)
,`idProfil` int(11)
,`libelle` varchar(500)
);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUser` int(11) NOT NULL,
  `nomu` varchar(500) NOT NULL,
  `telu` varchar(50) NOT NULL,
  `adresseu` varchar(500) NOT NULL,
  `emailu` varchar(500) NOT NULL,
  `prenomu` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `etatu` tinyint(1) NOT NULL,
  `profil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `nomu`, `telu`, `adresseu`, `emailu`, `prenomu`, `password`, `etatu`, `profil`) VALUES
(1, ' MBAYE', '773343173', 'Dakar', 'jamillaye@gmail.com', 'Jamil Laye', 'passer', 1, 2),
(2, 'Cheikh', '774560987', 'Dakar', 'cheikh@gmail.com', 'diallo', 'passer', 0, 2),
(3, 'Birane ', '775543423', 'Dakar ', 'gayebirane@gmail.com', 'Gaye', 'passer', 1, 1),
(4, 'AG', '773326543', 'Dakar', 'ag@gmail.com', 'AG', 'passer', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE `zone` (
  `idZone` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL,
  `typezone` int(11) DEFAULT NULL,
  `departement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `zone`
--

INSERT INTO `zone` (`idZone`, `libelle`, `typezone`, `departement`) VALUES
(1, 'Diamniadio', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la vue `collecte`
--
DROP TABLE IF EXISTS `collecte`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `collecte`  AS  select `p`.`idproduit` AS `idproduit`,`p`.`numdossier` AS `numdossier`,`p`.`designation` AS `designation`,`p`.`adresse` AS `adresse`,`p`.`surface` AS `surface`,`p`.`etat` AS `etat`,`p`.`nature` AS `nature`,`p`.`broutep` AS `broutep`,`p`.`broute` AS `broute`,`p`.`angle` AS `angle`,`p`.`loinecole` AS `loinecole`,`p`.`presecole` AS `presecole`,`p`.`loinculte` AS `loinculte`,`p`.`presculte` AS `presculte`,`p`.`loinmarche` AS `loinmarche`,`p`.`presmarche` AS `presmarche`,`p`.`positionnement` AS `positionnement`,`p`.`usagebienbati` AS `usagebienbati`,`p`.`nbpieces` AS `nbpieces`,`p`.`nbsalledebain` AS `nbsalledebain`,`p`.`nbtoilettes` AS `nbtoilettes`,`p`.`jardin` AS `jardin`,`p`.`nbgarage` AS `nbgarage`,`p`.`typecuisine` AS `typecuisine`,`p`.`piscine` AS `piscine`,`p`.`nbcours` AS `nbcours`,`p`.`typeimmeuble` AS `typeimmeuble`,`p`.`studiositue` AS `studiositue`,`p`.`garage` AS `garage`,`p`.`buanderie` AS `buanderie`,`p`.`balcon` AS `balcon`,`p`.`ascenseur` AS `ascenseur`,`p`.`autreinfostudio` AS `autreinfostudio`,`p`.`situationiveau` AS `situationiveau`,`p`.`descbiennonbati` AS `descbiennonbati`,`p`.`document1` AS `document1`,`p`.`document2` AS `document2`,`p`.`superficies` AS `superficies`,`p`.`etatdroitreel` AS `etatdroitreel`,`p`.`actedevente` AS `actedevente`,`p`.`autorisationcons` AS `autorisationcons`,`p`.`planbetonarme` AS `planbetonarme`,`p`.`planarchi` AS `planarchi`,`p`.`planindividuelap` AS `planindividuelap`,`p`.`autorisationbail` AS `autorisationbail`,`p`.`deliberationind` AS `deliberationind`,`p`.`attestbail` AS `attestbail`,`p`.`procceder` AS `procceder`,`p`.`titreprop` AS `titreprop`,`p`.`cnibailleur` AS `cnibailleur`,`p`.`autresdoc` AS `autresdoc`,`p`.`plansite` AS `plansite`,`p`.`autreselemproc` AS `autreselemproc`,`p`.`planplomberie` AS `planplomberie`,`p`.`planelec` AS `planelec`,`p`.`cahierdesctechnique` AS `cahierdesctechnique`,`p`.`fichinsctechnique` AS `fichinsctechnique`,`p`.`demandeautmaire` AS `demandeautmaire`,`p`.`etudefinancement` AS `etudefinancement`,`p`.`moyenspreuv` AS `moyenspreuv`,`p`.`autdemolir` AS `autdemolir`,`p`.`plansituation` AS `plansituation`,`p`.`jeuxcons` AS `jeuxcons`,`p`.`ficherenseign` AS `ficherenseign`,`p`.`devisestim` AS `devisestim`,`p`.`taxesmunicip` AS `taxesmunicip`,`p`.`taxesurbanism` AS `taxesurbanism`,`p`.`timbrefisc` AS `timbrefisc`,`p`.`enveloppe` AS `enveloppe`,`p`.`demandeminurb` AS `demandeminurb`,`p`.`rapportpres` AS `rapportpres`,`p`.`cahiercharge` AS `cahiercharge`,`p`.`planmorcel` AS `planmorcel`,`p`.`cdnum` AS `cdnum`,`p`.`cditem` AS `cditem`,`p`.`timbrevar` AS `timbrevar`,`p`.`preuverealpeine` AS `preuverealpeine`,`p`.`plangeometre` AS `plangeometre`,`p`.`programimetat` AS `programimetat`,`p`.`demandebailrec` AS `demandebailrec`,`p`.`delibcommune` AS `delibcommune`,`p`.`exemplaires` AS `exemplaires`,`p`.`autre` AS `autre`,`p`.`proprietaire` AS `proprietaire`,`p`.`typeproduit` AS `typeproduit`,`p`.`zone` AS `zone`,`p`.`typebienbati` AS `typebienbati`,`p`.`collaboration` AS `collaboration`,`u`.`idUser` AS `idUser`,`u`.`nomu` AS `nomu`,`u`.`telu` AS `telu`,`u`.`adresseu` AS `adresseu`,`u`.`emailu` AS `emailu`,`u`.`prenomu` AS `prenomu`,`u`.`password` AS `password`,`u`.`etatu` AS `etatu`,`u`.`profil` AS `profil`,`d`.`idDetail` AS `idDetail`,`d`.`utilisateur` AS `utilisateur`,`d`.`produit` AS `produit`,`d`.`datecollecte` AS `datecollecte`,`d`.`tache` AS `tache`,`t`.`idTache` AS `idTache`,`t`.`libelle` AS `libelle`,`tb`.`idtypebien` AS `idtypebien`,`tb`.`libelletype` AS `libelletype`,`c`.`idc` AS `idc`,`c`.`libellec` AS `libellec` from (((((`produit` `p` join `utilisateur` `u`) join `details` `d`) join `tache` `t`) join `typebienbati` `tb`) join `collaboration` `c`) where ((`p`.`idproduit` = `d`.`produit`) and (`t`.`idTache` = `d`.`tache`) and (`u`.`idUser` = `d`.`utilisateur`) and (`tb`.`idtypebien` = `p`.`typebienbati`) and (`c`.`idc` = `p`.`collaboration`) and (`t`.`idTache` = 1)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `user_profil`
--
DROP TABLE IF EXISTS `user_profil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_profil`  AS  select `u`.`idUser` AS `idUser`,`u`.`nomu` AS `nom`,`u`.`telu` AS `tel`,`u`.`adresseu` AS `adresse`,`u`.`emailu` AS `email`,`u`.`prenomu` AS `prenom`,`u`.`password` AS `password`,`u`.`etatu` AS `etat`,`u`.`profil` AS `profil`,`p`.`idProfil` AS `idProfil`,`p`.`libelle` AS `libelle` from (`utilisateur` `u` join `profil` `p`) where (`u`.`profil` = `p`.`idProfil`) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bureau`
--
ALTER TABLE `bureau`
  ADD PRIMARY KEY (`idBureau`),
  ADD KEY `service` (`service`);

--
-- Index pour la table `collaboration`
--
ALTER TABLE `collaboration`
  ADD PRIMARY KEY (`idc`);

--
-- Index pour la table `cpidepartement`
--
ALTER TABLE `cpidepartement`
  ADD PRIMARY KEY (`idDept`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`idDepartement`),
  ADD KEY `region` (`region`);

--
-- Index pour la table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`idDetail`),
  ADD KEY `prospecteur` (`utilisateur`),
  ADD KEY `produit` (`produit`),
  ADD KEY `tache` (`tache`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idproduit`),
  ADD KEY `proprietaire` (`proprietaire`),
  ADD KEY `typeproduit` (`typeproduit`),
  ADD KEY `zone` (`zone`),
  ADD KEY `typebienbati` (`typebienbati`),
  ADD KEY `collaboration` (`collaboration`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`idProfil`);

--
-- Index pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  ADD PRIMARY KEY (`idProp`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`idRegion`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idService`),
  ADD KEY `departement` (`departement`);

--
-- Index pour la table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`idTache`);

--
-- Index pour la table `typebienbati`
--
ALTER TABLE `typebienbati`
  ADD PRIMARY KEY (`idtypebien`);

--
-- Index pour la table `typeproduit`
--
ALTER TABLE `typeproduit`
  ADD PRIMARY KEY (`idTypeProduit`);

--
-- Index pour la table `typezone`
--
ALTER TABLE `typezone`
  ADD PRIMARY KEY (`idTypezone`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `profil` (`profil`);

--
-- Index pour la table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`idZone`),
  ADD KEY `typezone` (`typezone`),
  ADD KEY `departement` (`departement`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bureau`
--
ALTER TABLE `bureau`
  MODIFY `idBureau` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `collaboration`
--
ALTER TABLE `collaboration`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `cpidepartement`
--
ALTER TABLE `cpidepartement`
  MODIFY `idDept` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `idDepartement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `details`
--
ALTER TABLE `details`
  MODIFY `idDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idproduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `idProfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  MODIFY `idProp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `idRegion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tache`
--
ALTER TABLE `tache`
  MODIFY `idTache` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `typebienbati`
--
ALTER TABLE `typebienbati`
  MODIFY `idtypebien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `typeproduit`
--
ALTER TABLE `typeproduit`
  MODIFY `idTypeProduit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `typezone`
--
ALTER TABLE `typezone`
  MODIFY `idTypezone` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `zone`
--
ALTER TABLE `zone`
  MODIFY `idZone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bureau`
--
ALTER TABLE `bureau`
  ADD CONSTRAINT `bureau_ibfk_1` FOREIGN KEY (`service`) REFERENCES `service` (`idService`);

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`region`) REFERENCES `region` (`idRegion`);

--
-- Contraintes pour la table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`utilisateur`) REFERENCES `utilisateur` (`idUser`),
  ADD CONSTRAINT `details_ibfk_2` FOREIGN KEY (`produit`) REFERENCES `produit` (`idproduit`),
  ADD CONSTRAINT `details_ibfk_3` FOREIGN KEY (`tache`) REFERENCES `tache` (`idTache`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`proprietaire`) REFERENCES `proprietaire` (`idProp`),
  ADD CONSTRAINT `produit_ibfk_3` FOREIGN KEY (`zone`) REFERENCES `zone` (`idZone`),
  ADD CONSTRAINT `produit_ibfk_4` FOREIGN KEY (`collaboration`) REFERENCES `collaboration` (`idc`),
  ADD CONSTRAINT `produit_ibfk_5` FOREIGN KEY (`typebienbati`) REFERENCES `typebienbati` (`idtypebien`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`departement`) REFERENCES `cpidepartement` (`idDept`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`profil`) REFERENCES `profil` (`idProfil`);

--
-- Contraintes pour la table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `zone_ibfk_2` FOREIGN KEY (`departement`) REFERENCES `departement` (`idDepartement`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
