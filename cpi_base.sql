-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 23 déc. 2019 à 03:07
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
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Structure de la table `details`
--

CREATE TABLE `details` (
  `idDetail` int(11) NOT NULL,
  `utilisateur` int(11) NOT NULL,
  `produit` int(11) NOT NULL,
  `datecollecte` date NOT NULL,
  `tache` int(11) NOT NULL
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
  `etat` varchar(500) NOT NULL,
  `nature` varchar(500) NOT NULL,
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
  `autreinfostudio` varchar(80) DEFAULT NULL,
  `situationiveau` varchar(80) DEFAULT NULL,
  `descbiennonbati` varchar(200) DEFAULT NULL,
  `document` varchar(300) DEFAULT NULL,
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
  `etudefinacement` varchar(100) DEFAULT NULL,
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
  `preuverealpeine` varchar(10) DEFAULT NULL,
  `plangeometre` varchar(10) DEFAULT NULL,
  `programimetat` varchar(10) DEFAULT NULL,
  `demandebailrec` varchar(10) DEFAULT NULL,
  `delibcommune` varchar(10) DEFAULT NULL,
  `exemplaires` varchar(10) DEFAULT NULL,
  `autre` varchar(500) DEFAULT NULL,
  `proprietaire` int(11) NOT NULL,
  `typeproduit` int(11) NOT NULL,
  `zone` int(11) NOT NULL,
  `typebienbati` int(11) NOT NULL,
  `collaboration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'collecteur_zpu');

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

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `idRegion` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `libelle` varchar(500) NOT NULL,
  `produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typebienbati`
--

CREATE TABLE `typebienbati` (
  `id` int(11) NOT NULL,
  `libelle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `nom` varchar(500) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `adresse` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `prenom` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `profil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `nom`, `tel`, `adresse`, `email`, `prenom`, `password`, `etat`, `profil`) VALUES
(1, ' MBAYE', '773343173', 'Dakar', 'jamillaye@gmail.com', 'Jamil Laye', 'passer', 1, 2),
(2, 'Cheikh', '774560987', 'Dakar', 'cheikh@gmail.com', 'diallo', 'passer', 0, 2),
(3, 'Birane ', '775543423', 'Dakar ', 'gayebirane@gmail.com', 'Gaye', 'passer', 1, 1),
(4, 'AG', '773326543', 'Dakar', 'jamillaye@gmail.com', 'AG', 'passer', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE `zone` (
  `idZone` int(11) NOT NULL,
  `libelle` varchar(500) NOT NULL,
  `typezone` int(11) NOT NULL,
  `departement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la vue `user_profil`
--
DROP TABLE IF EXISTS `user_profil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_profil`  AS  select `u`.`idUser` AS `idUser`,`u`.`nom` AS `nom`,`u`.`tel` AS `tel`,`u`.`adresse` AS `adresse`,`u`.`email` AS `email`,`u`.`prenom` AS `prenom`,`u`.`password` AS `password`,`u`.`etat` AS `etat`,`u`.`profil` AS `profil`,`p`.`idProfil` AS `idProfil`,`p`.`libelle` AS `libelle` from (`utilisateur` `u` join `profil` `p`) where (`u`.`profil` = `p`.`idProfil`) ;

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`idTache`),
  ADD KEY `produit` (`produit`);

--
-- Index pour la table `typebienbati`
--
ALTER TABLE `typebienbati`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cpidepartement`
--
ALTER TABLE `cpidepartement`
  MODIFY `idDept` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `idDepartement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idproduit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `idProfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  MODIFY `idProp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `idRegion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tache`
--
ALTER TABLE `tache`
  MODIFY `idTache` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `typebienbati`
--
ALTER TABLE `typebienbati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idZone` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`typeproduit`) REFERENCES `typeproduit` (`idTypeProduit`),
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`proprietaire`) REFERENCES `proprietaire` (`idProp`),
  ADD CONSTRAINT `produit_ibfk_3` FOREIGN KEY (`zone`) REFERENCES `zone` (`idZone`),
  ADD CONSTRAINT `produit_ibfk_4` FOREIGN KEY (`collaboration`) REFERENCES `collaboration` (`id`),
  ADD CONSTRAINT `produit_ibfk_5` FOREIGN KEY (`typebienbati`) REFERENCES `typebienbati` (`id`);

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
  ADD CONSTRAINT `zone_ibfk_1` FOREIGN KEY (`typezone`) REFERENCES `typezone` (`idTypezone`),
  ADD CONSTRAINT `zone_ibfk_2` FOREIGN KEY (`departement`) REFERENCES `departement` (`idDepartement`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
