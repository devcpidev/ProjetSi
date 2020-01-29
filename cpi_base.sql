-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 29 jan. 2020 à 14:29
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

--
-- Déchargement des données de la table `bureau`
--

INSERT INTO `bureau` (`idBureau`, `libelle`, `service`) VALUES
(1, 'MANAGEMENT ET SUPERVISION', 1),
(2, 'PROSPECTION ZONE URBAINE', 1),
(3, 'PROSPECTION ZONE PERI  URBAINE', 4),
(4, 'RECEPTION FRONT OFFICE', 2),
(5, 'RECEPTION BACK OFFICE', 2),
(6, 'Etude et traitement', 3),
(7, 'COLLECTE ET TRAITEMENT BDD PROSPECTS', 3);

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
,`actif` int(11)
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
,`idProp` int(11)
,`nom` varchar(500)
,`prenom` varchar(500)
,`tel` varchar(50)
,`email` varchar(500)
,`adressesen` varchar(500)
,`nomrep` varchar(500)
,`telrep` varchar(500)
,`emailrep` varchar(500)
,`adresserep` varchar(500)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `collecteperuser`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `collecteperuser` (
`total` bigint(21)
,`nomu` varchar(500)
,`prenomu` varchar(500)
);

-- --------------------------------------------------------

--
-- Structure de la table `cpidepartement`
--

CREATE TABLE `cpidepartement` (
  `idDept` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cpidepartement`
--

INSERT INTO `cpidepartement` (`idDept`, `libelle`) VALUES
(1, 'DAGP'),
(2, 'DMC'),
(3, 'DEPARTEMENT FONCIER'),
(4, 'DEPARTEMENT PROGRAMME IMMO'),
(5, 'DSI'),
(6, 'Controle achat appro logistique '),
(7, 'Administration Juridique RH securite');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `idDepartement` int(11) NOT NULL,
  `departement_name` varchar(500) NOT NULL,
  `region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`idDepartement`, `departement_name`, `region`) VALUES
(1, 'Dakar', 1),
(2, 'Pikine', 1),
(3, 'Guédiawaye', 1),
(4, 'Rufisque', 1),
(5, 'Bambey', 2),
(6, 'Diourbel', 2),
(7, 'Mbacké', 2),
(8, 'Fatick', 3),
(9, 'Foundiougne', 3),
(10, 'Gossas', 3),
(11, 'Kaolack', 4),
(12, 'Guinguinéo', 4),
(13, 'Nioro du Rip', 4),
(14, 'Kolda', 5),
(15, 'Vélingara', 5),
(16, 'Médina Yoro Foulah', 5),
(17, 'Kébémer', 6),
(18, 'Linguère', 6),
(19, 'Louga', 6),
(20, 'Kanel', 7),
(21, 'Matam', 7),
(22, 'Ranérou', 7),
(23, 'Dagana', 8),
(24, 'Podor', 8),
(25, 'Saint-Louis', 8),
(26, 'Bakel', 9),
(27, 'Koumpentoum', 9),
(28, 'Tambacounda', 9),
(29, 'Goudiry', 9),
(30, 'M\'bour', 10),
(31, 'Thiès', 10),
(32, 'Tivaouane', 10),
(33, 'Bignogna', 11),
(34, 'Oussouye', 11),
(35, 'Ziguinchor', 11),
(36, 'Birkilane', 12),
(37, 'Kaffrine', 12),
(38, 'Malem-Hodar', 12),
(39, 'Koungheul', 12),
(40, 'Kédougou', 13),
(41, 'Salemata', 13),
(42, 'Saraya', 13),
(43, 'Bounkiling', 14),
(44, 'Goudomp', 14),
(45, 'Sédhiou', 14);

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
(7, 1, 47, '2020-01-06 12:57:28', 1),
(8, 1, 48, '2020-01-13 12:04:50', 1),
(9, 1, 49, '2020-01-13 12:07:27', 1),
(10, 1, 50, '2020-01-13 14:24:19', 1),
(11, 1, 51, '2020-01-19 03:14:13', 1),
(12, 1, 52, '2020-01-19 22:06:52', 1),
(13, 1, 53, '2020-01-20 13:49:44', 1),
(14, 4, 54, '2020-01-22 11:44:53', 1),
(15, 4, 55, '2020-01-22 12:00:28', 1);

-- --------------------------------------------------------

--
-- Structure de la table `docservice`
--

CREATE TABLE `docservice` (
  `idDoc` int(11) NOT NULL,
  `etatdroitreel` varchar(10) DEFAULT NULL,
  `actevente` varchar(10) DEFAULT NULL,
  `autorisationcons` varchar(10) DEFAULT NULL,
  `planbetonarme` varchar(10) DEFAULT NULL,
  `planarchi` varchar(10) DEFAULT NULL,
  `planindividuelap` varchar(10) DEFAULT NULL,
  `autorisationbail` varchar(10) DEFAULT NULL,
  `deliberationind` varchar(10) DEFAULT NULL,
  `attestbail` varchar(10) DEFAULT NULL,
  `procceder` varchar(10) DEFAULT NULL,
  `titreprop` varchar(10) DEFAULT NULL,
  `cnibailleur` varchar(10) DEFAULT NULL,
  `autresdoc` varchar(10) DEFAULT NULL,
  `plansite` varchar(10) DEFAULT NULL,
  `autreselemproc` varchar(10) DEFAULT NULL,
  `delibcommune` varchar(10) DEFAULT NULL,
  `plangeometre` varchar(10) DEFAULT NULL,
  `plancadastral` varchar(10) DEFAULT NULL,
  `demandebailrec` varchar(10) DEFAULT NULL,
  `exemplaires` varchar(10) DEFAULT NULL,
  `demandeautmaire` varchar(10) DEFAULT NULL,
  `plansituation` varchar(10) DEFAULT NULL,
  `ficherenseign` varchar(10) DEFAULT NULL,
  `devisestim` varchar(10) DEFAULT NULL,
  `taxesmunicip` varchar(10) DEFAULT NULL,
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
  `heritiers` varchar(10) DEFAULT NULL,
  `certifnonop` varchar(10) DEFAULT NULL,
  `certifdeces` varchar(10) DEFAULT NULL,
  `jugement` varchar(10) DEFAULT NULL,
  `mutation` varchar(10) DEFAULT NULL,
  `docbail` varchar(10) DEFAULT NULL,
  `plancadastre` varchar(10) DEFAULT NULL,
  `plancons` varchar(10) DEFAULT NULL,
  `fichetechnique` varchar(10) DEFAULT NULL,
  `gmail` varchar(10) DEFAULT NULL,
  `recurb` varchar(10) DEFAULT NULL,
  `recucons` varchar(10) DEFAULT NULL,
  `planplomberie` varchar(10) DEFAULT NULL,
  `cahierdesctechnique` varchar(10) DEFAULT NULL,
  `fichinsctechnique` varchar(10) DEFAULT NULL,
  `autre` varchar(500) DEFAULT NULL,
  `preuverealpeine` varchar(10) DEFAULT NULL,
  `programimetat` varchar(10) DEFAULT NULL,
  `servicebiennonbati` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `etat` varchar(500) NOT NULL DEFAULT '0',
  `actif` int(11) NOT NULL DEFAULT '0',
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
  `collaboration` int(11) DEFAULT NULL,
  `typeservices` int(11) DEFAULT NULL,
  `typebiennonbati` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idproduit`, `numdossier`, `designation`, `adresse`, `surface`, `etat`, `actif`, `nature`, `broutep`, `broute`, `angle`, `loinecole`, `presecole`, `loinculte`, `presculte`, `loinmarche`, `presmarche`, `positionnement`, `usagebienbati`, `nbpieces`, `nbsalledebain`, `nbtoilettes`, `jardin`, `nbgarage`, `typecuisine`, `piscine`, `nbcours`, `typeimmeuble`, `studiositue`, `garage`, `buanderie`, `balcon`, `ascenseur`, `autreinfostudio`, `situationiveau`, `descbiennonbati`, `document1`, `document2`, `superficies`, `etatdroitreel`, `actedevente`, `autorisationcons`, `planbetonarme`, `planarchi`, `planindividuelap`, `autorisationbail`, `deliberationind`, `attestbail`, `procceder`, `titreprop`, `cnibailleur`, `autresdoc`, `plansite`, `autreselemproc`, `planplomberie`, `planelec`, `cahierdesctechnique`, `fichinsctechnique`, `demandeautmaire`, `etudefinancement`, `moyenspreuv`, `autdemolir`, `plansituation`, `jeuxcons`, `ficherenseign`, `devisestim`, `taxesmunicip`, `taxesurbanism`, `timbrefisc`, `enveloppe`, `demandeminurb`, `rapportpres`, `cahiercharge`, `planmorcel`, `cdnum`, `cditem`, `timbrevar`, `preuverealpeine`, `plangeometre`, `programimetat`, `demandebailrec`, `delibcommune`, `exemplaires`, `autre`, `proprietaire`, `typeproduit`, `zone`, `typebienbati`, `collaboration`, `typeservices`, `typebiennonbati`) VALUES
(40, '', '', 'Diamniadio sphere ministeriel', 0, '0', 0, 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 1, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '212594_document_1_40.pdf', '473604_document_2_40.pdf', NULL, 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 43, NULL, 1, 1, 1, NULL, NULL),
(41, 'zu040', '', 'Diamniadio sphere ministeriel', 0, '1', 0, 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 2, NULL, 1, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6056_document_1_41.pdf', '157338_document_2_41.pdf', NULL, 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 44, NULL, 1, 1, 1, NULL, NULL),
(42, 'zu2020-0241', '', 'Diamniadio sphere ministeriel', 0, '1', 0, 'TF Etat', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 2, NULL, 1, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '333368_document_1_42.pdf', '325017_document_2_42.pdf', NULL, 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 45, NULL, 1, 1, 1, NULL, NULL),
(43, 'zu2020-0242', '', 'Diamniadio sphere ministeriel', 0, '0', 0, 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'R+4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 46, NULL, 1, 3, 4, NULL, NULL),
(44, 'zu2020-0243', '', 'dakar', 0, '0', 0, 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'R+2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 47, NULL, 1, 3, 4, NULL, NULL),
(45, 'zu2020-0244', '', 'dakar', 0, '1', 0, 'TF Prive', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', 'usage d\'habitation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'R+2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '68848_document_1_45.docx', '85475_document_2_45.pdf', NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 48, NULL, 1, 3, 4, NULL, NULL),
(46, 'zu2020-0245', '', 'Diamniadio sphere ministeriel', 0, '0', 0, 'TF Prive', 'Bordure Route Principale', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pres du Marche', '', 'usage d\'habitation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'R+2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '385398_document_1_46.docx', '28225_document_2_46.pdf', NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 50, NULL, 1, 3, 4, NULL, NULL),
(47, 'zu2020-0646', '', 'Diamniadio sphere ministeriel', 0, '1', 0, 'TF Prive', NULL, 'Bordure Route', 'Angle', NULL, NULL, NULL, 'Pres d\'un lieu culte', NULL, 'Pres du Marche', '', 'usage d\'habitation', 4, NULL, 3, 'OUI', NULL, 'europeenne', NULL, NULL, NULL, '2ieme etage', 'OUI', 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, '195294_document_1_47.pdf', '389300_document_2_47.docx', NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 51, NULL, 1, 4, 4, NULL, NULL),
(48, 'zu2020-1347', '', '', 0, '0', 0, 'Bail', 'Bordure Route Principale', NULL, 'Angle', NULL, NULL, 'Loin d\'un culte', NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 3, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '253217_document_1_48.pdf', '250112_document_2_48.docx', NULL, 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 52, NULL, 1, 1, 1, NULL, NULL),
(49, 'zu2020-1348', '', 'Diamniadio sphere ministeriel', 0, '0', 0, 'TF Prive', 'Bordure Route Principale', 'Bordure Route', NULL, NULL, NULL, NULL, 'Pres d\'un lieu culte', NULL, NULL, '', 'usage professionnelle', 4, NULL, 4, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '157930_document_1_49.pdf', '270832_document_2_49.docx', NULL, 'OUI', 'OUI', 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 53, NULL, 1, 1, 1, NULL, NULL),
(50, 'zu2020-1349', '', 'Diamniadio sphere ministeriel', 0, '0', 0, 'TF Etat', 'Bordure Route Principale', 'Bordure Route', 'Angle', NULL, NULL, NULL, NULL, NULL, NULL, '', 'usage d\'habitation', 4, NULL, 3, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '168248_document_1_50.pdf', '188343_document_2_50.docx', NULL, 'OUI', 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 54, NULL, 1, 1, 1, NULL, NULL),
(51, 'zu2020-1950', '', 'Diamniadio sphere ministeriel', 0, '0', 0, 'TF Prive', 'Bordure Route Principale', NULL, NULL, NULL, NULL, 'Loin d\'un culte', NULL, 'Loin du Marche', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'R+2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '296663_document_1_51.pdf', '364857_document_2_51.docx', NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 55, NULL, 1, 3, 4, NULL, NULL),
(52, 'zu2020-1951', '', 'Diamniadio sphere ministeriel', 0, '0', 1, 'TF Etat', NULL, NULL, NULL, NULL, NULL, 'Loin d\'un culte', 'Pres d\'un lieu culte', NULL, 'Pres du Marche', '', '', 4, NULL, 1, NULL, 1, 'europeenne', 'OUI', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '67934_document_1_52.pdf', '282006_document_2_52.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 56, NULL, 1, 2, 7, NULL, NULL),
(53, 'zu2020-2052', '', 'Diamniadio sphere ministeriel', 0, '0', 0, 'Bail', 'Bordure Route Principale', NULL, 'Angle', NULL, NULL, NULL, NULL, NULL, 'Pres du Marche', '', 'usage d\'habitation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'R+3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '23569_document_1_53.pdf', '345191_document_2_53.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 57, NULL, 1, 3, 7, NULL, NULL),
(54, 'zu2020-2053', '', 'Diamniadio sphere ministeriel', 0, '0', 0, '', 'Bordure Route Principale', NULL, 'Angle', NULL, NULL, 'Loin d\'un culte', NULL, NULL, 'Pres du Marche', '', 'usage d\'habitation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '357087_document_1_54.pdf', '393030_document_2_54.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'OUI', 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 58, NULL, 1, 3, 2, NULL, NULL),
(55, 'zpu2020-2254', '', 'Diamniadio sphere ministeriel', 0, '0', 0, 'TF Etat', NULL, 'Bordure Route', NULL, NULL, 'Pres d\'une ecole', NULL, NULL, NULL, 'Pres du Marche', '', 'usage d\'habitation', 2, NULL, 1, 'OUI', 1, 'europeenne', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '381475_document_1_55.pdf', '61499_document_2_55.docx', NULL, 'OUI', NULL, NULL, 'OUI', NULL, 'OUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 59, NULL, 1, 1, 1, NULL, NULL);

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
(2, 'collecteur_zu'),
(3, 'collecteur_zpu'),
(4, 'reception_produit');

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

CREATE TABLE `proprietaire` (
  `idProp` int(11) NOT NULL,
  `cnipropi` int(11) DEFAULT NULL,
  `nom` varchar(500) NOT NULL,
  `prenom` varchar(500) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `adressesen` varchar(500) NOT NULL,
  `nomrep` varchar(500) DEFAULT NULL,
  `telrep` varchar(500) DEFAULT NULL,
  `emailrep` varchar(500) DEFAULT NULL,
  `adresserep` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `proprietaire`
--

INSERT INTO `proprietaire` (`idProp`, `cnipropi`, `nom`, `prenom`, `tel`, `email`, `adressesen`, `nomrep`, `telrep`, `emailrep`, `adresserep`) VALUES
(3, NULL, 'Mbaye', 'Jamil Laye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(4, NULL, 'Mbaye', 'Jamil Laye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(5, NULL, 'Fall', 'Mbaye', '774334094', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(6, NULL, 'Sylla', 'Max', '770729699', 'sylla@gmail.com', 'Mbour', 'Cheikh', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(7, NULL, 'Sylla', 'Max', '770729699', 'sylla@gmail.com', 'Mbour', 'Cheikh', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(8, NULL, 'Sylla', 'Max', '770729699', 'sylla@gmail.com', 'Mbour', 'Cheikh', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(9, NULL, 'Sylla', 'Max', '770729699', 'sylla@gmail.com', 'Mbour', 'Cheikh', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(10, NULL, 'Fall', 'Mbaye', '773326543', 'ndiayemodou@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(11, NULL, 'Jamil Laye MBAYE', 'Max', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(12, NULL, 'mardi', 'Mbaye', '773326543', 'mardi@', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(13, NULL, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(14, NULL, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(15, NULL, 'AG', 'Mbaye', '778888888', 'james97', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(16, NULL, 'Sylla', 'Max', '778888888', 'james97', 'Mbour', 'Moussa', '773891182', 'jams97@hotmail.fr', 'Mbour'),
(17, NULL, 'Sylla', 'Max', '778888888', 'james97', 'Mbour', 'Moussa', '773891182', 'jams97@hotmail.fr', 'Mbour'),
(18, NULL, 'Jamil Laye MBAYE', 'Max', '773326543', 'james97', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(19, NULL, 'Sylla', 'Jamil Laye', '773326543', 'ndiayemodou@gmail.com', 'Dakar', 'Moussa', '773891182', 'jams97@hotmail.fr', 'Mbour'),
(20, NULL, 'AG', 'Jamil Laye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(21, NULL, 'Fall', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(22, NULL, 'AG', 'Mbaye', '778888888', 'groupisi@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(23, NULL, 'modou Ndiaye', 'Max', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(24, NULL, 'fouta', 'Jamil Laye', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(25, NULL, 'Jamil Laye MBAYE', 'Max', '773326543', 'james97', 'Dakar', 'Cheikh', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(26, NULL, 'AG', 'Mbaye', '773343173', 'james97', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(27, NULL, 'AG', 'Mbaye', '339874532', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(28, NULL, 'modou Ndiaye', 'Max', '339874532', 'james97', 'Dakar', 'Cheikh', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(29, NULL, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(30, NULL, 'Fall', 'Mbaye', '773326543', 'groupisi@gmail.com', 'Mbour', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(31, NULL, 'Fall', 'Mbaye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(32, NULL, 'Fall', 'Mbaye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773891182', 'kabougueye@gmail.com', 'Mbour'),
(33, NULL, 'AG', 'Mbaye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(34, NULL, 'AG', 'Mbaye', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(35, NULL, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(36, NULL, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(37, NULL, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(38, NULL, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(39, NULL, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(40, NULL, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(41, NULL, 'Sylla', 'Max', '773343173', 'jamillaye@gmail.com', 'Dakar', 'Cheikh', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(42, NULL, 'Fall', 'Max', '773326543', 'groupisi@gmail.com', 'Mbour', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(43, NULL, 'Fall', 'Max', '773326543', 'groupisi@gmail.com', 'Mbour', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(44, NULL, 'Jamil Laye MBAYE', 'Mbaye', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(45, NULL, 'Jamil Laye MBAYE', 'Mbaye', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(46, NULL, 'bouba', 'lo', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(47, NULL, 'Fall', 'Mbaye', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(48, NULL, 'Fall', 'Mbaye', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Mbour'),
(49, NULL, 'Fall', 'Max', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(50, NULL, 'Fall', 'Max', '773326543', 'jamillaye@gmail.com', 'Dakar', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(51, NULL, 'ndiaye', 'samba', '774563243', 'jamillaye@gmail.com', 'Mbour', 'Moussa', '773343173', 'kabougueye@gmail.com', 'Mbour'),
(52, NULL, 'Fall', 'Ndiaga', '773326543', 'ndiaga@gmail.com', 'Dakar', 'modou', '776543212', 'jams97@hotmail.fr', 'Thies'),
(53, NULL, 'Ndiaye', 'modou ', '773326543', 'james97', 'Dakar', 'Moussa', '773343173', 'jams97@hotmail.fr', 'Thies'),
(54, NULL, 'diop', 'cheikh', '779875643', 'diop@gmail.com', 'Dakar', NULL, NULL, NULL, NULL),
(55, NULL, 'baye', 'laye', '75443212', 'laye@gmail.com', 'dakar', NULL, NULL, NULL, NULL),
(56, NULL, 'Fall', 'Ndiogou', '772346543', 'fallndiogou@gmail.com', 'Mbour', NULL, NULL, NULL, NULL),
(57, NULL, 'Dione', 'Seydina mandione', '775543423', 'seydina@gmail.com', 'Dakar', 'Birane', '778709867', 'gaye@gmail.com', 'Dakar'),
(58, NULL, 'Gueye', 'Modou', '774342109', 'gueye@gmail.coù', 'Dakar', 'Fall', 'Ndiogou', 'ndiogou@gmail.com', 'Thies'),
(59, NULL, 'Ndiaye', 'Ousseynou', '772345421', 'ndiaye@gmail.com', 'Fann', NULL, NULL, NULL, NULL);

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
(1, 'Dakar'),
(2, 'Diourbel'),
(3, 'Fatick'),
(4, 'Kaolack'),
(5, 'Kolda'),
(6, 'Louga'),
(7, 'Matam'),
(8, 'Saint-Louis'),
(9, 'Tambacounda'),
(10, 'Thiès'),
(11, 'Ziguinchor'),
(12, 'Kaffrine'),
(13, 'Kédougou'),
(14, 'Sédhiou');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `idService` int(11) NOT NULL,
  `service_name` varchar(500) NOT NULL,
  `departement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`idService`, `service_name`, `departement`) VALUES
(1, 'Prospection zone Urbaine', 1),
(2, 'Reception Front Office', 1),
(3, 'Traitement', 1),
(4, 'Prospection Zone Peri Urbaine', 1),
(5, 'Reception Back Office', 1),
(6, 'Prospection Client', 2);

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
-- Structure de la table `typebiennonbati`
--

CREATE TABLE `typebiennonbati` (
  `idtypebiennonbati` int(11) NOT NULL,
  `libellebiennonbati` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typebiennonbati`
--

INSERT INTO `typebiennonbati` (`idtypebiennonbati`, `libellebiennonbati`) VALUES
(1, 'Terrain'),
(2, 'Site Loti'),
(3, 'site Brut'),
(4, 'Champ'),
(5, 'Autre');

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
-- Structure de la table `typeservices`
--

CREATE TABLE `typeservices` (
  `idTypeServ` int(11) NOT NULL,
  `libelleTypeServ` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typeservices`
--

INSERT INTO `typeservices` (`idTypeServ`, `libelleTypeServ`) VALUES
(1, 'Vente'),
(2, 'Gerance'),
(3, 'Achat'),
(4, 'Location'),
(5, 'Recherche d\'un bien perdu'),
(6, 'Immatriculation'),
(7, 'Expertise d\'un bien'),
(8, 'Cession définitive'),
(9, 'Opposition à une prise de possession'),
(10, 'Gestion Relation Mairie et Propriétaire terrien'),
(11, 'Etat des lieux d\'un bien dans le cadre de la gestion d\'un contentieu'),
(12, 'Etat des lieux d\'un bien dans le cadre d\'un conseil'),
(13, 'Delimitation pour definir les contours d\'un bien'),
(14, 'Etude d\'un projet immobilier'),
(15, 'Etude d\'un projet foncier'),
(16, 'Occupation irregulière'),
(17, 'Achat et vente litigieux'),
(18, 'Recherche d\'un titre de propriété'),
(19, 'Empietement'),
(20, 'Divergence sur un titre'),
(21, 'Double vente'),
(22, 'Terrassement'),
(23, 'Viabilisation'),
(24, 'Donation'),
(25, 'Demolition'),
(26, 'Transfert de propriété'),
(27, 'Morcellement'),
(28, 'Gestion Héritage'),
(29, 'Autorisation de lotir'),
(30, 'Autorisation de construire'),
(31, 'Construction'),
(32, 'Règularisation'),
(33, 'Succession'),
(34, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `typezone`
--

CREATE TABLE `typezone` (
  `idTypezone` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typezone`
--

INSERT INTO `typezone` (`idTypezone`, `libelle`) VALUES
(1, 'pu'),
(2, 'zpu');

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
(2, 'Cheikh', '774560987', 'Dakar', 'cheikh@gmail.com', 'diallo', 'passer', 1, 4),
(3, 'Birane ', '775543423', 'Dakar ', 'gayebirane@gmail.com', 'Gaye', 'passer', 1, 1),
(4, 'Diouf', '773326543', 'Dakar', 'fatou@gmail.com', 'Fatou', 'passer', 1, 3),
(5, 'samb', '77335590', 'ngor', 'sallaminata@gmail.com', 'aminata', 'passer', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE `zone` (
  `idZone` int(11) NOT NULL,
  `zone_name` varchar(500) NOT NULL,
  `typezone` int(11) DEFAULT NULL,
  `departement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `zone`
--

INSERT INTO `zone` (`idZone`, `zone_name`, `typezone`, `departement`) VALUES
(1, 'Diamniadio', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la vue `collecte`
--
DROP TABLE IF EXISTS `collecte`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `collecte`  AS  select `p`.`idproduit` AS `idproduit`,`p`.`numdossier` AS `numdossier`,`p`.`designation` AS `designation`,`p`.`adresse` AS `adresse`,`p`.`surface` AS `surface`,`p`.`etat` AS `etat`,`p`.`actif` AS `actif`,`p`.`nature` AS `nature`,`p`.`broutep` AS `broutep`,`p`.`broute` AS `broute`,`p`.`angle` AS `angle`,`p`.`loinecole` AS `loinecole`,`p`.`presecole` AS `presecole`,`p`.`loinculte` AS `loinculte`,`p`.`presculte` AS `presculte`,`p`.`loinmarche` AS `loinmarche`,`p`.`presmarche` AS `presmarche`,`p`.`positionnement` AS `positionnement`,`p`.`usagebienbati` AS `usagebienbati`,`p`.`nbpieces` AS `nbpieces`,`p`.`nbsalledebain` AS `nbsalledebain`,`p`.`nbtoilettes` AS `nbtoilettes`,`p`.`jardin` AS `jardin`,`p`.`nbgarage` AS `nbgarage`,`p`.`typecuisine` AS `typecuisine`,`p`.`piscine` AS `piscine`,`p`.`nbcours` AS `nbcours`,`p`.`typeimmeuble` AS `typeimmeuble`,`p`.`studiositue` AS `studiositue`,`p`.`garage` AS `garage`,`p`.`buanderie` AS `buanderie`,`p`.`balcon` AS `balcon`,`p`.`ascenseur` AS `ascenseur`,`p`.`autreinfostudio` AS `autreinfostudio`,`p`.`situationiveau` AS `situationiveau`,`p`.`descbiennonbati` AS `descbiennonbati`,`p`.`document1` AS `document1`,`p`.`document2` AS `document2`,`p`.`superficies` AS `superficies`,`p`.`etatdroitreel` AS `etatdroitreel`,`p`.`actedevente` AS `actedevente`,`p`.`autorisationcons` AS `autorisationcons`,`p`.`planbetonarme` AS `planbetonarme`,`p`.`planarchi` AS `planarchi`,`p`.`planindividuelap` AS `planindividuelap`,`p`.`autorisationbail` AS `autorisationbail`,`p`.`deliberationind` AS `deliberationind`,`p`.`attestbail` AS `attestbail`,`p`.`procceder` AS `procceder`,`p`.`titreprop` AS `titreprop`,`p`.`cnibailleur` AS `cnibailleur`,`p`.`autresdoc` AS `autresdoc`,`p`.`plansite` AS `plansite`,`p`.`autreselemproc` AS `autreselemproc`,`p`.`planplomberie` AS `planplomberie`,`p`.`planelec` AS `planelec`,`p`.`cahierdesctechnique` AS `cahierdesctechnique`,`p`.`fichinsctechnique` AS `fichinsctechnique`,`p`.`demandeautmaire` AS `demandeautmaire`,`p`.`etudefinancement` AS `etudefinancement`,`p`.`moyenspreuv` AS `moyenspreuv`,`p`.`autdemolir` AS `autdemolir`,`p`.`plansituation` AS `plansituation`,`p`.`jeuxcons` AS `jeuxcons`,`p`.`ficherenseign` AS `ficherenseign`,`p`.`devisestim` AS `devisestim`,`p`.`taxesmunicip` AS `taxesmunicip`,`p`.`taxesurbanism` AS `taxesurbanism`,`p`.`timbrefisc` AS `timbrefisc`,`p`.`enveloppe` AS `enveloppe`,`p`.`demandeminurb` AS `demandeminurb`,`p`.`rapportpres` AS `rapportpres`,`p`.`cahiercharge` AS `cahiercharge`,`p`.`planmorcel` AS `planmorcel`,`p`.`cdnum` AS `cdnum`,`p`.`cditem` AS `cditem`,`p`.`timbrevar` AS `timbrevar`,`p`.`preuverealpeine` AS `preuverealpeine`,`p`.`plangeometre` AS `plangeometre`,`p`.`programimetat` AS `programimetat`,`p`.`demandebailrec` AS `demandebailrec`,`p`.`delibcommune` AS `delibcommune`,`p`.`exemplaires` AS `exemplaires`,`p`.`autre` AS `autre`,`p`.`proprietaire` AS `proprietaire`,`p`.`typeproduit` AS `typeproduit`,`p`.`zone` AS `zone`,`p`.`typebienbati` AS `typebienbati`,`p`.`collaboration` AS `collaboration`,`u`.`idUser` AS `idUser`,`u`.`nomu` AS `nomu`,`u`.`telu` AS `telu`,`u`.`adresseu` AS `adresseu`,`u`.`emailu` AS `emailu`,`u`.`prenomu` AS `prenomu`,`u`.`password` AS `password`,`u`.`etatu` AS `etatu`,`u`.`profil` AS `profil`,`d`.`idDetail` AS `idDetail`,`d`.`utilisateur` AS `utilisateur`,`d`.`produit` AS `produit`,`d`.`datecollecte` AS `datecollecte`,`d`.`tache` AS `tache`,`t`.`idTache` AS `idTache`,`t`.`libelle` AS `libelle`,`tb`.`idtypebien` AS `idtypebien`,`tb`.`libelletype` AS `libelletype`,`c`.`idc` AS `idc`,`c`.`libellec` AS `libellec`,`pr`.`idProp` AS `idProp`,`pr`.`nom` AS `nom`,`pr`.`prenom` AS `prenom`,`pr`.`tel` AS `tel`,`pr`.`email` AS `email`,`pr`.`adressesen` AS `adressesen`,`pr`.`nomrep` AS `nomrep`,`pr`.`telrep` AS `telrep`,`pr`.`emailrep` AS `emailrep`,`pr`.`adresserep` AS `adresserep` from ((((((`produit` `p` join `utilisateur` `u`) join `details` `d`) join `tache` `t`) join `typebienbati` `tb`) join `collaboration` `c`) join `proprietaire` `pr`) where ((`p`.`idproduit` = `d`.`produit`) and (`t`.`idTache` = `d`.`tache`) and (`u`.`idUser` = `d`.`utilisateur`) and (`tb`.`idtypebien` = `p`.`typebienbati`) and (`c`.`idc` = `p`.`collaboration`) and (`pr`.`idProp` = `p`.`proprietaire`) and (`t`.`idTache` = 1)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `collecteperuser`
--
DROP TABLE IF EXISTS `collecteperuser`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `collecteperuser`  AS  select distinct count(`d`.`idDetail`) AS `total`,`u`.`nomu` AS `nomu`,`u`.`prenomu` AS `prenomu` from (`utilisateur` `u` join `details` `d`) where (`u`.`idUser` = `d`.`utilisateur`) group by `d`.`utilisateur` ;

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
-- Index pour la table `docservice`
--
ALTER TABLE `docservice`
  ADD PRIMARY KEY (`idDoc`),
  ADD KEY `servicebiennonbati` (`servicebiennonbati`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idproduit`),
  ADD KEY `proprietaire` (`proprietaire`),
  ADD KEY `typeproduit` (`typeproduit`),
  ADD KEY `zone` (`zone`),
  ADD KEY `typebienbati` (`typebienbati`),
  ADD KEY `collaboration` (`collaboration`),
  ADD KEY `collaboration_2` (`collaboration`),
  ADD KEY `typeservices` (`typeservices`),
  ADD KEY `typebiennonbati` (`typebiennonbati`);

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
-- Index pour la table `typebiennonbati`
--
ALTER TABLE `typebiennonbati`
  ADD PRIMARY KEY (`idtypebiennonbati`);

--
-- Index pour la table `typeproduit`
--
ALTER TABLE `typeproduit`
  ADD PRIMARY KEY (`idTypeProduit`);

--
-- Index pour la table `typeservices`
--
ALTER TABLE `typeservices`
  ADD PRIMARY KEY (`idTypeServ`);

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
  MODIFY `idBureau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `collaboration`
--
ALTER TABLE `collaboration`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `cpidepartement`
--
ALTER TABLE `cpidepartement`
  MODIFY `idDept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `idDepartement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `details`
--
ALTER TABLE `details`
  MODIFY `idDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `docservice`
--
ALTER TABLE `docservice`
  MODIFY `idDoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idproduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `idProfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  MODIFY `idProp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `idRegion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT pour la table `typebiennonbati`
--
ALTER TABLE `typebiennonbati`
  MODIFY `idtypebiennonbati` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `typeproduit`
--
ALTER TABLE `typeproduit`
  MODIFY `idTypeProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `typeservices`
--
ALTER TABLE `typeservices`
  MODIFY `idTypeServ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `typezone`
--
ALTER TABLE `typezone`
  MODIFY `idTypezone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `zone`
--
ALTER TABLE `zone`
  MODIFY `idZone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Contraintes pour la table `docservice`
--
ALTER TABLE `docservice`
  ADD CONSTRAINT `docservice_ibfk_1` FOREIGN KEY (`servicebiennonbati`) REFERENCES `typeservices` (`idTypeServ`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`proprietaire`) REFERENCES `proprietaire` (`idProp`),
  ADD CONSTRAINT `produit_ibfk_3` FOREIGN KEY (`zone`) REFERENCES `zone` (`idZone`),
  ADD CONSTRAINT `produit_ibfk_4` FOREIGN KEY (`collaboration`) REFERENCES `collaboration` (`idc`),
  ADD CONSTRAINT `produit_ibfk_5` FOREIGN KEY (`typebienbati`) REFERENCES `typebienbati` (`idtypebien`),
  ADD CONSTRAINT `produit_ibfk_6` FOREIGN KEY (`typeservices`) REFERENCES `typeservices` (`idTypeServ`),
  ADD CONSTRAINT `produit_ibfk_7` FOREIGN KEY (`typebiennonbati`) REFERENCES `typebiennonbati` (`idtypebiennonbati`);

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
