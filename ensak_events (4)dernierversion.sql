-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 13 jan. 2024 à 22:02
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ensak_events`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id_avis` int(11) NOT NULL,
  `commentaire` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `id` varchar(30) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `motivation` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(250) NOT NULL,
  `categorie` varchar(250) NOT NULL,
  `affiche` varchar(40) NOT NULL,
  `id_organisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `titre`, `motivation`, `description`, `date`, `lieu`, `categorie`, `affiche`, `id_organisateur`) VALUES
('conf2024', 'Conférence Ensak', ' Rejoignez-nous pour une expérience stimulante qui éveillera votre curiosité intellectuelle.', '\r\nDescription: La Conférence Innovante Ensak est un rendez-vous intellectuel incontournable. Des conférenciers éminents partageront leurs idées novatrices et leurs perspectives visionnaires sur des sujets pertinents.  Cette conférence est une opportunité unique d&#039;apprentissage et d&#039;inspiration. Rejoignez-nous pour une expérience stimulante qui éveillera votre curiosité intellectuelle.', '2024-01-27', 'Amphi rouge,ENSA-K', 'conference', 'conf2024.jpg', 1),
('forum2024', 'forum2024', ' Explorez les dernières avancées dans divers domaines, élargissez vos connaissances, et plongez dans des discussions captivantes.', ' Cet événement peut être catégorisé comme un &quot;Forum de Carrières et de Réseautage&quot;. Il s&#039;agit d&#039;une occasion où les étudiants peuvent explorer des opportunités professionnelles, rencontrer des représentants d&#039;entreprises, et établir des connexions stratégiques pour leur avenir professionnel. Ce type d&#039;événement combine des éléments de développement de carrière, de réseautage et d&#039;exploration des opportunités professionnelles.', '2024-02-10', 'Batiment B , ENSA_K', 'forum', 'forum2024.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

CREATE TABLE `inscriptions` (
  `id_inscriptions` int(11) NOT NULL,
  `id_evenement` varchar(30) NOT NULL,
  `id_participant` int(11) NOT NULL,
  `date_inscription` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscriptions`
--

INSERT INTO `inscriptions` (`id_inscriptions`, `id_evenement`, `id_participant`, `date_inscription`) VALUES
(6, 'forum2024', 13, '2024-01-13');

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id_notification` int(11) NOT NULL,
  `id_evenement` varchar(30) NOT NULL,
  `date_envoi` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id_notification`, `id_evenement`, `date_envoi`, `message`) VALUES
(18, 'conf2024', '2024-01-13', 'un nouveau évenement est annoncé veuillez le voir !!'),
(19, 'forum2024', '2024-01-13', 'un nouveau évenement est annoncé veuillez le voir !!');

-- --------------------------------------------------------

--
-- Structure de la table `organisateurs`
--

CREATE TABLE `organisateurs` (
  `id_organisateur` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `prenom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `organisateurs`
--

INSERT INTO `organisateurs` (`id_organisateur`, `nom`, `login`, `password`, `prenom`) VALUES
(1, 'himidi', 'lamyaehimidi@gmail.com', 'lamyae', 'lamyae'),
(2, 'AFAAQ', 'Afaaq@uit.ac.ma', 'afaaq', 'club'),
(3, 'GDSC', 'gdsc@uit.ac.ma', 'gdsc', 'club'),
(4, 'ADE', 'ade.ensak@uit.ac.ma', 'ade', 'club');

-- --------------------------------------------------------

--
-- Structure de la table `participants`
--

CREATE TABLE `participants` (
  `id_participant` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `prenom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `participants`
--

INSERT INTO `participants` (`id_participant`, `nom`, `email`, `telephone`, `prenom`) VALUES
(12, 'himidi', 'lamyae@gmail.com', '07075352', 'lamyae'),
(13, 'lebouy', 'lebouydina@gmail.com', '9999999', 'dina');

-- --------------------------------------------------------

--
-- Structure de la table `rapports`
--

CREATE TABLE `rapports` (
  `id_rapports` int(11) NOT NULL,
  `rapport` varchar(400) NOT NULL,
  `titre` varchar(40) NOT NULL,
  `id_organisateur` int(11) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `rapports`
--

INSERT INTO `rapports` (`id_rapports`, `rapport`, `titre`, `id_organisateur`, `photo`) VALUES
(38, 'Le 12 décembre 2023, l&#039;ENSA Kénitra a accueilli une conférence sur les innovations technologiques. Des conférenciers renommés ont partagé des idées percutantes, des ateliers pratiques ont été organisés, et le networking a ouvert des opportunités futures. Un événement qui a brillé par son excellence académique et son impact positif.', 'Conférence Ensak', 1, 'Conférence Ensak.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_avis`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_organisateur` (`id_organisateur`);

--
-- Index pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`id_inscriptions`),
  ADD KEY `id_evenement` (`id_evenement`),
  ADD KEY `id_participant` (`id_participant`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id_notification`),
  ADD KEY `id_evenement` (`id_evenement`);

--
-- Index pour la table `organisateurs`
--
ALTER TABLE `organisateurs`
  ADD PRIMARY KEY (`id_organisateur`);

--
-- Index pour la table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id_participant`),
  ADD UNIQUE KEY `telephone` (`telephone`);

--
-- Index pour la table `rapports`
--
ALTER TABLE `rapports`
  ADD PRIMARY KEY (`id_rapports`),
  ADD KEY `id_organisateur` (`id_organisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id_avis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `id_inscriptions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `organisateurs`
--
ALTER TABLE `organisateurs`
  MODIFY `id_organisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `participants`
--
ALTER TABLE `participants`
  MODIFY `id_participant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `rapports`
--
ALTER TABLE `rapports`
  MODIFY `id_rapports` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD CONSTRAINT `evenements_ibfk_1` FOREIGN KEY (`id_organisateur`) REFERENCES `organisateurs` (`id_organisateur`);

--
-- Contraintes pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD CONSTRAINT `inscriptions_ibfk_2` FOREIGN KEY (`id_participant`) REFERENCES `participants` (`id_participant`),
  ADD CONSTRAINT `inscriptions_ibfk_3` FOREIGN KEY (`id_evenement`) REFERENCES `evenements` (`id`);

--
-- Contraintes pour la table `rapports`
--
ALTER TABLE `rapports`
  ADD CONSTRAINT `rapports_ibfk_1` FOREIGN KEY (`id_organisateur`) REFERENCES `organisateurs` (`id_organisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
