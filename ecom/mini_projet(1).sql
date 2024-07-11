-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 21 mai 2023 à 15:17
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mini_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `numClient` int(11) NOT NULL,
  `nomClient` varchar(64) NOT NULL,
  `raisonSocial` varchar(64) NOT NULL,
  `adresseClient` text NOT NULL,
  `VilleClient` varchar(64) NOT NULL,
  `pays` varchar(64) NOT NULL,
  `telephone` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`numClient`, `nomClient`, `raisonSocial`, `adresseClient`, `VilleClient`, `pays`, `telephone`) VALUES
(1, 'taha', 'inedo', 'hay salam', 'sale', 'maroc', '68462097'),
(2, '22', '2', '2', '2', '2', '2'),
(10, 'khalid', 'khah', 'hhhhd', 'jjjj', 'ma', '0888'),
(33, '3', '33', '3', '33', '3', '44444');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `numCommande` int(11) NOT NULL,
  `numClient` int(11) NOT NULL,
  `dateCommande` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`numCommande`, `numClient`, `dateCommande`) VALUES
(1, 1, '2023-01-05'),
(10, 10, '2023-01-18');

-- --------------------------------------------------------

--
-- Structure de la table `detailscommande`
--

CREATE TABLE `detailscommande` (
  `numCommande` int(11) NOT NULL,
  `refProduit` int(11) NOT NULL,
  `qteCommandee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `detailscommande`
--

INSERT INTO `detailscommande` (`numCommande`, `refProduit`, `qteCommandee`) VALUES
(1, 10010, 6666),
(10, 10010, 999);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `refProduit` int(11) NOT NULL,
  `nomProduit` varchar(64) NOT NULL,
  `prixUnitaire` int(11) NOT NULL,
  `qteStockee` int(11) NOT NULL,
  `indisponible` enum('0','1') NOT NULL,
  `img` varchar(255) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`refProduit`, `nomProduit`, `prixUnitaire`, `qteStockee`, `indisponible`, `img`, `desc`) VALUES
(10010, 'MSI GF63 I5-11400H', 12499, 20, '1', '63b2b96da9856msi_nb_gf63_photo_03_1.jpg', 'PROCESSEUR : INTEL CORE I5\r\nCAPACITE DISQUE DUR SSD : 512 \r\n'),
(10012, 'LENOVO IDEPAD GAMING 3 15ACH6', 11999, 10, '0', '63b2bee0981f6ideapad_gaming_3_15ach6_ct1_01.jpg', ' PROCESSEUR : AMD\r\nMÉMOIRE VIVE : 8 RAM\r\nCAPACITE DISQUE DUR SSD : 512'),
(10013, 'HP PC 2Q9G3 I5-1135 8G1T+128G MX3502G', 7999, 5, '0', '63b2bf1e8bbcb2939382-1.jpg', ' PROCESSEUR : INTEL CORE I5\r\nMÉMOIRE VIVE : 8 RAM\r\nCAPACITE DISQUE DUR HDD : 1000\r\nCAPACITE DISQUE DUR SSD : 128'),
(10014, 'APPLE IPHONE 14 PRO MAX', 18490, 40, '0', '63b2bf82a1552iphone_14_pro_max_iphone_14_pro_space_black_combo_screen__gben_7.jpg', ' MÉMOIRE DE STOCKAGE : 128\r\nCOULEUR : SPACE BLACK'),
(10015, 'APPLE IPHONE 13 PROMAX', 15490, 20, '0', '63b2bfdd619d8iphone_13_pro_max_green_pdp_image_position-1a__wwen_3.jpg', ' MÉMOIRE DE STOCKAGE : 128\r\nCOULEUR : ALPINE GREEN'),
(10016, 'SAMSUNG SMARTPHONE A33 ', 3749, 80, '0', '63b2c0b37d18a2945297-_1_.jpg', ' MÉMOIRE DE STOCKAGE : 128\r\nRESEAU : 5G\r\nCOULEUR : ORANGE\r\nDOUBLE SIM : OUI'),
(10017, 'SAMSUNG A73', 5990, 12, '0', '63b2c0f4e19682948342.jpg', ' MÉMOIRE DE STOCKAGE : 256\r\nRESEAU : 5G\r\nCOULEUR : BLANC\r\nDOUBLE SIM : OUI'),
(10018, 'PLAYSTATION PACK CONSOLE PS5', 9499, 20, '0', '63b2c1440a4502943771-.jpg', ' CAPACITE DISQUE DUR : 1000\r\nMANETTES : 1'),
(10019, 'NINTENDO CONSOLE NINTENDO SWITCH OLED', 4790, 4, '0', '63b2c1818630a0045496453435_i02_b601f001-dac5-4de7-a996-048a83a6489f-copie_1.jpg', ' CAPACITE DISQUE DUR : 32\r\nMANETTES : 1');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`numClient`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`numCommande`),
  ADD KEY `numClient` (`numClient`);

--
-- Index pour la table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD PRIMARY KEY (`numCommande`,`refProduit`),
  ADD KEY `refProduit` (`refProduit`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`refProduit`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `numClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=656792;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `numCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `refProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10021;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`numClient`) REFERENCES `client` (`numClient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `detailscommande`
--
ALTER TABLE `detailscommande`
  ADD CONSTRAINT `detailscommande_ibfk_1` FOREIGN KEY (`numCommande`) REFERENCES `commande` (`numCommande`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailscommande_ibfk_2` FOREIGN KEY (`refProduit`) REFERENCES `produit` (`refProduit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
