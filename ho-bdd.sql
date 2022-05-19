-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 avr. 2022 à 19:13
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ho`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Produit'),
(2, 'Panier');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220112094156', '2022-01-12 10:42:25', 1220);

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id`, `name`, `status`, `title`, `text`, `picture`) VALUES
(1, 'Accueil', 1, '', '', ''),
(2, 'Produit', 1, '', '', ''),
(3, 'Présentation', 1, '', '', ''),
(4, 'Inscription', 1, '', '', ''),
(5, 'Localisation', 1, '', '', ''),
(6, 'Contact', 1, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `status` tinyint(1) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `basket` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `text`, `picture`, `price`, `status`, `description`, `size`, `updated_at`, `basket`) VALUES
(3, 1, 'Choux rouge', 'Clémence Picard, région Lyonnaise', 'produit1-61dea61f72981740735798.jpg', 5, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus accumsan eleifend. Praesent auctor sem in rutrum porta. Donec eget lorem id ex gravida vehicula a in nisl. Nunc non urna eu dui lobortis auctor. Aliquam mauris erat, malesuada vitae enim vel, iaculis porttitor arcu. Pellentesque varius tempus odio id pretium. Sed eleifend dolor justo, vel faucibus leo sodales sit amet. Pellentesque ac felis faucibus, blandit tellus in, ullamcorper dui. Curabitur eget est eu purus aliquam rhoncus. Sed tincidunt sed libero eget condimentum. In sollicitudin sem ac dictum pretium. Cras at sapien venenatis, rhoncus augue sit amet, cursus leo. Suspendisse odio orci, interdum vulputate mollis eget, faucibus quis nulla. Cras dignissim purus sed erat cursus, sed finibus est imperdiet. Etiam maximus accumsan mi quis tincidunt. Integer egestas libero orci, nec iaculis libero convallis vel.', '1 personne', '2022-01-12 10:57:51', 0),
(5, 1, 'Pommes', '1kg de pommes', 'coteaux-nantais-9-wp-768x576-6253f19f38a20337559206.jpg', 3, 0, 'ezee', '2 personnes', '2022-04-11 11:15:11', 0),
(6, 1, 'Confiture', 'confiture de fraise', 'i152569-confiture-de-framboises-6253f1c0d7439665481823.webp', 3, 0, 'sdfdfsd', '2 personnes', '2022-04-11 11:15:44', 0),
(7, 2, 'Panier Fruits/légumes/fromages', 'Panier complet fruits et légumes, avec des produits laitiers', 'potager-dautomne-630x370-6253e6e765076121053943.jpg', 23, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu augue et lacus pulvinar molestie vitae a elit. Suspendisse a lectus elit. Nam semper id lorem sed aliquam. Nunc condimentum molestie felis id vehicula. Vivamus commodo porttitor elementum. Nulla in mi ipsum. Etiam sed placerat turpis. Proin nec sapien lacus. Aliquam pharetra, risus vitae vehicula tempus, purus velit pellentesque mi, quis varius felis turpis vitae dolor. Suspendisse eu lectus sollicitudin, tempor urna nec, vehicula velit. Nullam id tempor est, a faucibus quam. Vestibulum porta felis nec ipsum bibendum, maximus eleifend lacus iaculis. Quisque a luctus neque, vel pharetra enim. Vestibulum sollicitudin varius tincidunt. In lacinia vel quam imperdiet gravida. Donec vel suscipit dolor.', '2 personnes', '2022-04-11 10:29:27', 0),
(8, 2, 'Panier légumes', 'Panier avec des légumes de saison', 'amap-cri-du-zebre2-6253e6ef4ae78819717082.jpg', 13, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu augue et lacus pulvinar molestie vitae a elit. Suspendisse a lectus elit. Nam semper id lorem sed aliquam. Nunc condimentum molestie felis id vehicula. Vivamus commodo porttitor elementum. Nulla in mi ipsum. Etiam sed placerat turpis. Proin nec sapien lacus. Aliquam pharetra, risus vitae vehicula tempus, purus velit pellentesque mi, quis varius felis turpis vitae dolor. Suspendisse eu lectus sollicitudin, tempor urna nec, vehicula velit. Nullam id tempor est, a faucibus quam. Vestibulum porta felis nec ipsum bibendum, maximus eleifend lacus iaculis. Quisque a luctus neque, vel pharetra enim. Vestibulum sollicitudin varius tincidunt. In lacinia vel quam imperdiet gravida. Donec vel suscipit dolor.', '1 personne', '2022-04-11 10:29:35', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `password`, `firstname`, `lastname`, `roles`, `email`, `is_verified`) VALUES
(1, 'Lili', '$2y$13$Q57gXn/uu2QOOVZ9gpU83.kcK/enqq2CyOdWwTYGju7MIAM2ZQsQy', 'Dupont', 'Lise', '[]', 'lise@gmail.com', 1),
(2, 'Jean09', '$2y$13$KMYTKx8hxJioOv6nVZRT.eS2zhK4MB8Gw/K/WG8tXxCmGbFUIQWw6', 'Dupont', 'Jean', '[]', 'jean@gmail.com', 1),
(3, 'Math', '$2y$13$P.1y4GqlASxhV7zdbM7OH.P721HH4vgKd0SXW/FjnF5aAEdQ85b8O', 'Duchamps', 'Mathilde', '[]', 'mathilde@duchamps.com', 1),
(4, 'Jojo', '$2y$13$QHQB7OS9sBjkQ9Cr8ZhdyeUcz/M7l.jhuGRTGZ.Y6V8L3p/jIo2zi', 'Dupont', 'Joan', '[]', 'jojo@gmail.com', 1),
(5, 'Adri', '$2y$13$X2ZxHf.S.YIM0FyhckrB3OY/P4rhogm6y2pfCepzzxxXBillCzhse', 'Alibert', 'Adrien', '[]', 'Ad@gmail.com', 1),
(6, 'jojo22', '$2y$13$Gqui4L/eg0WkKQ1hqw1w2OQxvSz4s39jWDS6F2gL3LmzkaGNL9RuO', 'jojo', 'jojo', '[]', 'jojo@jo.fr', 1),
(7, 'Jojo666', '$2y$13$u.S9Jag4wOyihM7a3oiX0epEBnZwkjBWAQZH8clbWXPfPGzv/li76', 'JOJO', 'Jojo', '[]', 'happyoignons+89@gmail.com', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD12469DE2` (`category_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64986CC499D` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
