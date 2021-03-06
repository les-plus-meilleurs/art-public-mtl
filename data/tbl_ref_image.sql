-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 22 Novembre 2016 à 11:21
-- Version du serveur :  5.6.28-0ubuntu0.15.04.1
-- Version de PHP :  5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `artpublicmtl`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_ref_image`
--

DROP TABLE IF EXISTS `tbl_ref_image`;
CREATE TABLE IF NOT EXISTS `tbl_ref_image` (
`id` int(11) NOT NULL,
  `NoInterne` int(11) NOT NULL,
  `NoImage` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=161 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tbl_ref_image`
--

INSERT INTO `tbl_ref_image` (`id`, `NoInterne`, `NoImage`) VALUES
(13, 1668, 4543),
(12, 1668, 4542),
(11, 1668, 4541),
(16, 1119, 4036),
(15, 1099, 4035),
(14, 1099, 4034),
(17, 1119, 4037),
(18, 1119, 4038),
(19, 1137, 4042),
(20, 1137, 4043),
(21, 1137, 4044),
(22, 1127, 4045),
(23, 1127, 4046),
(24, 1127, 4047),
(25, 1151, 4051),
(26, 962, 4343),
(27, 962, 4344),
(28, 962, 4345),
(29, 1393, 4048),
(30, 1393, 4049),
(31, 1157, 4052),
(32, 1157, 4053),
(33, 1393, 4050),
(34, 1157, 4054),
(35, 1416, 4058),
(36, 1416, 4059),
(37, 1416, 4060),
(38, 1425, 4095),
(39, 1426, 4099),
(40, 1426, 4100),
(41, 1426, 4101),
(42, 1431, 4102),
(43, 1431, 4103),
(44, 1431, 4104),
(45, 1450, 4127),
(46, 1452, 4142),
(47, 1454, 4143),
(48, 1457, 4148),
(49, 1461, 4149),
(50, 1461, 4150),
(51, 1461, 4151),
(52, 1465, 4158),
(53, 1465, 4159),
(54, 1465, 4160),
(55, 1468, 4164),
(56, 1468, 4165),
(57, 1468, 4166),
(58, 1468, 4167),
(59, 1468, 4168),
(60, 1470, 4161),
(61, 1470, 4162),
(62, 1470, 4163),
(63, 1476, 4180),
(64, 1476, 4181),
(65, 1476, 4182),
(66, 1478, 4183),
(67, 1478, 4184),
(68, 1478, 4185),
(69, 1484, 4192),
(70, 1484, 4193),
(71, 1484, 4194),
(72, 1490, 4199),
(73, 1490, 4200),
(74, 1490, 4201),
(75, 1484, 4192),
(76, 1484, 4193),
(77, 1484, 4194),
(78, 1497, 4205),
(79, 1498, 4225),
(80, 1498, 4226),
(81, 1498, 4227),
(82, 3101, 4039),
(83, 3101, 4040),
(84, 3101, 4041),
(85, 3097, 4089),
(86, 3097, 4090),
(87, 3097, 4091),
(88, 3098, 4106),
(89, 3098, 4107),
(90, 1672, 4557),
(91, 1672, 4558),
(92, 1672, 4559),
(93, 1672, 4557),
(94, 1672, 4558),
(95, 1672, 4559),
(96, 1391, 5140),
(97, 1391, 5141),
(98, 1391, 5142),
(99, 1486, 4195),
(100, 1391, 5140),
(101, 1391, 5141),
(102, 1391, 5142),
(103, 1443, 5152),
(104, 1443, 5153),
(105, 1443, 5154),
(106, 1492, 5399),
(107, 3093, 4501),
(108, 3104, 4725),
(109, 3107, 5091),
(110, 1976, 5096),
(111, 1974, 5094),
(112, 1972, 5262),
(113, 1970, 5501),
(114, 1966, 5084),
(115, 1962, 5078),
(116, 1964, 5081),
(117, 1968, 5507),
(118, 1960, 5075),
(119, 1953, 5061),
(120, 1951, 5064),
(121, 1958, 5484),
(122, 1955, 5481),
(123, 1946, 5054),
(124, 1950, 5058),
(125, 1948, 5475),
(126, 1944, 5478),
(127, 1940, 5040),
(128, 1936, 5041),
(129, 1934, 5432),
(130, 1938, 5442),
(131, 1932, 5037),
(132, 1934, 5432),
(133, 1924, 5022),
(134, 1928, 5032),
(135, 1930, 5030),
(136, 1926, 5035),
(137, 1920, 5018),
(138, 1923, 5021),
(139, 1917, 5015),
(140, 1913, 5014),
(141, 1914, 5291),
(142, 1467, 4155),
(143, 1474, 4178),
(144, 1480, 4186),
(145, 1488, 4196),
(146, 1507, 4234),
(147, 1510, 4303),
(148, 1513, 4337),
(149, 1514, 4341),
(150, 1516, 4346),
(151, 1518, 4355),
(152, 1520, 4352),
(153, 1524, 4356),
(154, 1526, 4359),
(155, 1494, 5155),
(156, 1501, 5296),
(157, 1522, 5436),
(158, 1528, 5593),
(159, 1522, 5436),
(160, 1522, 5436);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tbl_ref_image`
--
ALTER TABLE `tbl_ref_image`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tbl_ref_image`
--
ALTER TABLE `tbl_ref_image`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=161;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
