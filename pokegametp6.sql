-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 27 mai 2020 à 14:38
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `pokegametp6`
--

-- --------------------------------------------------------

--
-- Structure de la table `bindPokeType`
--

CREATE TABLE `bindPokeType` (
  `idPokemon` int(11) NOT NULL,
  `idType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bindPokeType`
--

INSERT INTO `bindPokeType` (`idPokemon`, `idType`) VALUES
(1, 11),
(1, 12),
(2, 11),
(2, 12),
(3, 11),
(3, 12),
(4, 7),
(5, 7),
(6, 7),
(6, 18),
(7, 4),
(8, 4),
(9, 4),
(10, 9),
(11, 9),
(12, 9),
(12, 18),
(13, 9),
(13, 12),
(14, 9),
(14, 12),
(15, 9),
(15, 12),
(16, 10),
(16, 18),
(17, 10),
(17, 18),
(18, 10),
(18, 18),
(19, 10),
(20, 10),
(21, 10),
(21, 18),
(22, 10),
(22, 18),
(23, 12),
(24, 12),
(25, 5),
(26, 5),
(27, 15),
(28, 15),
(29, 12),
(30, 12),
(31, 12),
(31, 15),
(32, 12),
(33, 12),
(34, 12),
(34, 15),
(37, 7),
(38, 7),
(39, 10),
(40, 10),
(41, 12),
(41, 18),
(42, 12),
(42, 18),
(43, 11),
(43, 12),
(44, 11),
(44, 12),
(45, 11),
(45, 12),
(46, 9),
(46, 11),
(47, 9),
(47, 11),
(48, 9),
(48, 12),
(49, 9),
(49, 12),
(50, 15),
(51, 15),
(52, 10),
(53, 10),
(54, 4),
(55, 4),
(56, 2),
(57, 2),
(58, 7),
(59, 7),
(60, 4),
(61, 4),
(62, 2),
(62, 4),
(63, 13),
(64, 13),
(65, 13),
(66, 2),
(67, 2),
(68, 2),
(69, 11),
(69, 12),
(70, 11),
(70, 12),
(71, 11),
(71, 12),
(72, 4),
(72, 12),
(73, 4),
(73, 12),
(74, 14),
(74, 15),
(75, 14),
(75, 15),
(76, 14),
(76, 15),
(77, 7),
(78, 7),
(79, 4),
(79, 13),
(80, 4),
(80, 13),
(81, 1),
(81, 5),
(82, 1),
(82, 5),
(83, 10),
(83, 18),
(84, 10),
(84, 18),
(85, 10),
(85, 18),
(86, 4),
(87, 4),
(87, 8),
(88, 12),
(89, 12),
(90, 4),
(91, 4),
(91, 8),
(92, 12),
(92, 16),
(93, 12),
(93, 16),
(94, 12),
(94, 16),
(95, 14),
(95, 15),
(96, 13),
(97, 13),
(98, 4),
(99, 4),
(100, 5),
(101, 5),
(102, 11),
(102, 13),
(103, 11),
(103, 13),
(104, 15),
(105, 15),
(106, 2),
(107, 2),
(108, 10),
(109, 12),
(110, 12),
(111, 14),
(111, 15),
(112, 14),
(112, 15),
(113, 10),
(114, 11),
(115, 10),
(116, 4),
(117, 4),
(118, 4),
(119, 4),
(120, 4),
(121, 4),
(121, 13),
(122, 13),
(123, 9),
(123, 18),
(124, 8),
(124, 13),
(125, 5),
(126, 7),
(127, 9),
(128, 10),
(129, 4),
(130, 4),
(130, 18),
(131, 4),
(131, 8),
(132, 10),
(133, 10),
(134, 4),
(135, 5),
(136, 7),
(137, 10),
(138, 4),
(138, 14),
(139, 4),
(139, 14),
(140, 4),
(140, 14),
(141, 4),
(141, 14),
(142, 14),
(142, 18),
(143, 10),
(144, 8),
(144, 18),
(145, 5),
(145, 18),
(146, 7),
(146, 18),
(147, 3),
(148, 3),
(149, 3),
(149, 18),
(150, 13),
(151, 13);

-- --------------------------------------------------------

--
-- Structure de la table `capture`
--

CREATE TABLE `capture` (
  `idLieu` int(11) NOT NULL,
  `idType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `capture`
--

INSERT INTO `capture` (`idLieu`, `idType`) VALUES
(1, 1),
(1, 3),
(1, 8),
(1, 10),
(1, 14),
(2, 6),
(2, 7),
(2, 10),
(2, 11),
(2, 15),
(2, 18),
(3, 2),
(3, 5),
(3, 10),
(3, 13),
(4, 9),
(4, 10),
(4, 16),
(4, 18),
(5, 3),
(5, 4),
(5, 10),
(5, 12);

-- --------------------------------------------------------

--
-- Structure de la table `dresseur`
--

CREATE TABLE `dresseur` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `dresseur`
--

INSERT INTO `dresseur` (`id`, `email`, `roles`, `password`, `money`) VALUES
(0, 'admin@mail.com', '[\"ROLE_ADMIN\"]', '$2y$13$A1zWmjgaoxXOC0oUe0ccROgQAzscqxdITDwsCPA8lz7Dvc8bdTjLy', 55000),
(1, 'j1@mail.com', '[]', '$2y$13$qz8AUZ1RoKQ5MSnVS9WDPeSx.JyyhEjukmTJ6y6zy7EflDAjX5slu', 5000),
(2, 'j2@mail.com', '[]', '$2y$13$vl235wxPSn2y8DR5WJK1r.kchrlVarPd.nlW4m.GIJif.Zm94JoAi', 5000);

-- --------------------------------------------------------

--
-- Structure de la table `especePokemon`
--

CREATE TABLE `especePokemon` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `courbeXP` varchar(1) NOT NULL,
  `evolution` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `especePokemon`
--

INSERT INTO `especePokemon` (`id`, `nom`, `courbeXP`, `evolution`) VALUES
(1, 'Bulbizarre', 'P', 'n'),
(2, 'Herbizarre', 'P', 'o'),
(3, 'Florizarre', 'P', 'o'),
(4, 'Salamèche', 'P', 'n'),
(5, 'Reptincel', 'P', 'o'),
(6, 'Dracaufeu', 'P', 'o'),
(7, 'Carapuce', 'P', 'n'),
(8, 'Carabaffe', 'P', 'o'),
(9, 'Tortank', 'P', 'o'),
(10, 'Chenipan', 'M', 'n'),
(11, 'Chrysacier', 'M', 'o'),
(12, 'Papilusion', 'M', 'o'),
(13, 'Aspicot', 'M', 'n'),
(14, 'Coconfort', 'M', 'o'),
(15, 'Dardargnan', 'M', 'o'),
(16, 'Roucool', 'P', 'n'),
(17, 'Roucoups', 'P', 'o'),
(18, 'Roucarnage', 'P', 'o'),
(19, 'Rattata', 'M', 'n'),
(20, 'Rattatac', 'M', 'o'),
(21, 'Piafabec', 'M', 'n'),
(22, 'Rapasdepic', 'M', 'o'),
(23, 'Abo', 'M', 'n'),
(24, 'Arbok', 'M', 'o'),
(25, 'Pikachu', 'M', 'n'),
(26, 'Raichu', 'M', 'o'),
(27, 'Sabelette', 'M', 'n'),
(28, 'Sablaireau', 'M', 'o'),
(29, 'Nidoran(f)', 'P', 'n'),
(30, 'Nidorina', 'P', 'o'),
(31, 'Nidoqueen', 'P', 'o'),
(32, 'Nidoran(m)', 'P', 'n'),
(33, 'Nidorino', 'P', 'o'),
(34, 'Nidoking', 'P', 'o'),
(35, 'Mélofée', 'R', 'n'),
(36, 'Mélodelfe', 'R', 'o'),
(37, 'Goupix', 'M', 'n'),
(38, 'Feunard', 'M', 'o'),
(39, 'Rondoudou', 'R', 'n'),
(40, 'Grodoudou', 'R', 'o'),
(41, 'Nosferapti', 'M', 'n'),
(42, 'Nosferalto', 'M', 'o'),
(43, 'Mystherbe', 'P', 'n'),
(44, 'Ortide', 'P', 'o'),
(45, 'Rafflesia', 'P', 'o'),
(46, 'Paras', 'M', 'n'),
(47, 'Parasect', 'M', 'o'),
(48, 'Mimitoss', 'M', 'n'),
(49, 'Aéromite', 'M', 'o'),
(50, 'Taupiqueur', 'M', 'n'),
(51, 'Triopikeur', 'M', 'o'),
(52, 'Miaouss', 'M', 'n'),
(53, 'Persian', 'M', 'o'),
(54, 'Psykokwak', 'M', 'n'),
(55, 'Akwakwak', 'M', 'o'),
(56, 'Férosinge', 'M', 'n'),
(57, 'Colossinge', 'M', 'o'),
(58, 'Caninos', 'L', 'n'),
(59, 'Arcanin', 'L', 'o'),
(60, 'Ptitard', 'P', 'n'),
(61, 'Tétarte', 'P', 'o'),
(62, 'Tartard', 'P', 'o'),
(63, 'Abra', 'P', 'n'),
(64, 'Kadabra', 'P', 'o'),
(65, 'Alakazam', 'P', 'o'),
(66, 'Machoc', 'P', 'n'),
(67, 'Machopeur', 'P', 'o'),
(68, 'Mackogneur', 'P', 'o'),
(69, 'Chétiflor', 'P', 'n'),
(70, 'Boustiflor', 'P', 'o'),
(71, 'Empiflor', 'P', 'o'),
(72, 'Tentacool', 'L', 'n'),
(73, 'Tentacruel', 'L', 'o'),
(74, 'Racaillou', 'P', 'n'),
(75, 'Gravalanch', 'P', 'o'),
(76, 'Grolem', 'P', 'o'),
(77, 'Ponyta', 'M', 'n'),
(78, 'Galopa', 'M', 'o'),
(79, 'Ramoloss', 'M', 'n'),
(80, 'Flagadoss', 'M', 'o'),
(81, 'Magnéti', 'M', 'n'),
(82, 'Magnéton', 'M', 'o'),
(83, 'Canarticho', 'M', 'n'),
(84, 'Doduo', 'M', 'n'),
(85, 'Dodrio', 'M', 'o'),
(86, 'Otaria', 'M', 'n'),
(87, 'Lamantine', 'M', 'o'),
(88, 'Tadmorv', 'M', 'n'),
(89, 'Grotadmorv', 'M', 'o'),
(90, 'Kokiyas', 'L', 'n'),
(91, 'Crustabri', 'L', 'o'),
(92, 'Fantominus', 'P', 'n'),
(93, 'Spectrum', 'P', 'o'),
(94, 'Ectoplasma', 'P', 'o'),
(95, 'Onix', 'M', 'n'),
(96, 'Soporifik', 'M', 'n'),
(97, 'Hypnomade', 'M', 'o'),
(98, 'Krabby', 'M', 'n'),
(99, 'Krabboss', 'M', 'o'),
(100, 'Voltorbe', 'M', 'n'),
(101, 'Electrode', 'M', 'o'),
(102, 'Noeunoeuf', 'L', 'n'),
(103, 'Noadkoko', 'L', 'o'),
(104, 'Osselait', 'M', 'n'),
(105, 'Ossatueur', 'M', 'o'),
(106, 'Kicklee', 'M', 'n'),
(107, 'Tygnon', 'M', 'n'),
(108, 'Excelangue', 'M', 'n'),
(109, 'Smogo', 'M', 'n'),
(110, 'Smogogo', 'M', 'o'),
(111, 'Rhinocorne', 'L', 'n'),
(112, 'Rhinoféros', 'L', 'o'),
(113, 'Leveinard', 'R', 'n'),
(114, 'Saquedeneu', 'M', 'n'),
(115, 'Kangourex', 'M', 'n'),
(116, 'Hypotrempe', 'M', 'n'),
(117, 'Hypocéan', 'M', 'o'),
(118, 'Poissirène', 'M', 'n'),
(119, 'Poissoroy', 'M', 'o'),
(120, 'Stari', 'L', 'n'),
(121, 'Staross', 'L', 'o'),
(122, 'M. Mime', 'M', 'n'),
(123, 'Insécateur', 'M', 'n'),
(124, 'Lippoutou', 'M', 'n'),
(125, 'Elektek', 'M', 'n'),
(126, 'Magmar', 'M', 'n'),
(127, 'Scarabrute', 'L', 'n'),
(128, 'Tauros', 'L', 'n'),
(129, 'Magicarpe', 'L', 'n'),
(130, 'Léviator', 'L', 'o'),
(131, 'Lokhlass', 'L', 'n'),
(132, 'Métamorph', 'M', 'n'),
(133, 'Evoli', 'M', 'n'),
(134, 'Aquali', 'M', 'o'),
(135, 'Voltali', 'M', 'o'),
(136, 'Pyroli', 'M', 'o'),
(137, 'Porygon', 'M', 'n'),
(138, 'Amonita', 'M', 'n'),
(139, 'Amonistar', 'M', 'o'),
(140, 'Kabuto', 'M', 'n'),
(141, 'Kabutops', 'M', 'o'),
(142, 'Ptéra', 'L', 'n'),
(143, 'Ronflex', 'L', 'n'),
(144, 'Artikodin', 'L', 'n'),
(145, 'Electhor', 'L', 'n'),
(146, 'Sulfura', 'L', 'n'),
(147, 'Minidraco', 'L', 'n'),
(148, 'Draco', 'L', 'o'),
(149, 'Dracolosse', 'L', 'o'),
(150, 'Mewtwo', 'L', 'n'),
(151, 'Mew', 'P', 'n');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`id`, `nom`) VALUES
(1, 'montagne'),
(2, 'prairie'),
(3, 'ville'),
(4, 'foret'),
(5, 'plage');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20200519101908', '2020-05-19 10:21:11'),
('20200519130141', '2020-05-19 13:02:16'),
('20200519134028', '2020-05-19 13:40:35'),
('20200527104914', '2020-05-27 10:49:33');

-- --------------------------------------------------------

--
-- Structure de la table `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `surnom` varchar(25) NOT NULL,
  `idDresseur` int(11) NOT NULL,
  `idEspece` int(11) NOT NULL,
  `xp` int(11) NOT NULL,
  `niveau` int(11) NOT NULL,
  `sexe` varchar(25) NOT NULL,
  `prix` int(11) NOT NULL,
  `action` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pokemon`
--

INSERT INTO `pokemon` (`id`, `surnom`, `idDresseur`, `idEspece`, `xp`, `niveau`, `sexe`, `prix`, `action`) VALUES
(1, 'Lulu', 0, 1, 0, 1, 'mâle', 0, NULL),
(2, '', 1, 4, 227, 8, 'mâle', 0, NULL),
(3, 'Toto', 2, 7, 48, 5, 'mâle', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `typePokemon`
--

CREATE TABLE `typePokemon` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typePokemon`
--

INSERT INTO `typePokemon` (`id`, `type`) VALUES
(1, 'Acier'),
(2, 'Combat'),
(3, 'Dragon'),
(4, 'Eau'),
(5, 'Electrik'),
(6, 'Fée'),
(7, 'Feu'),
(8, 'Glace'),
(9, 'Insecte'),
(10, 'Normal'),
(11, 'Plante'),
(12, 'Poison'),
(13, 'Psy'),
(14, 'Roche'),
(15, 'Sol'),
(16, 'Spectre'),
(17, 'Ténèbres'),
(18, 'Vol');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bindPokeType`
--
ALTER TABLE `bindPokeType`
  ADD PRIMARY KEY (`idPokemon`,`idType`),
  ADD KEY `idPokemon` (`idPokemon`),
  ADD KEY `idType` (`idType`);

--
-- Index pour la table `capture`
--
ALTER TABLE `capture`
  ADD PRIMARY KEY (`idLieu`,`idType`),
  ADD KEY `idLieu` (`idLieu`) USING BTREE,
  ADD KEY `idType` (`idType`);

--
-- Index pour la table `dresseur`
--
ALTER TABLE `dresseur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_77EA2FC6E7927C74` (`email`);

--
-- Index pour la table `especePokemon`
--
ALTER TABLE `especePokemon`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idDresseur` (`idDresseur`),
  ADD KEY `idEspece` (`idEspece`);

--
-- Index pour la table `typePokemon`
--
ALTER TABLE `typePokemon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dresseur`
--
ALTER TABLE `dresseur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `especePokemon`
--
ALTER TABLE `especePokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `typePokemon`
--
ALTER TABLE `typePokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bindPokeType`
--
ALTER TABLE `bindPokeType`
  ADD CONSTRAINT `bindpoketype_ibfk_1` FOREIGN KEY (`idPokemon`) REFERENCES `especePokemon` (`id`),
  ADD CONSTRAINT `bindpoketype_ibfk_2` FOREIGN KEY (`idType`) REFERENCES `typePokemon` (`id`);

--
-- Contraintes pour la table `capture`
--
ALTER TABLE `capture`
  ADD CONSTRAINT `capture_ibfk_1` FOREIGN KEY (`idLieu`) REFERENCES `lieu` (`id`),
  ADD CONSTRAINT `capture_ibfk_2` FOREIGN KEY (`idType`) REFERENCES `typePokemon` (`id`);

--
-- Contraintes pour la table `pokemon`
--
ALTER TABLE `pokemon`
  ADD CONSTRAINT `pokemon_ibfk_1` FOREIGN KEY (`idDresseur`) REFERENCES `dresseur` (`id`),
  ADD CONSTRAINT `pokemon_ibfk_2` FOREIGN KEY (`idEspece`) REFERENCES `especePokemon` (`id`);
