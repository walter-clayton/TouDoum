-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 30 oct. 2019 à 09:46
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `GetFlix`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `age` int(3) NOT NULL,
  `reset_token` varchar(60) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `remember_token` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `username`, `email`, `password`, `age`, `reset_token`, `reset_at`, `remember_token`) VALUES
(24, 'qsd', 'qsd', 'qsd', 'qsd@hotmail.com', '$2y$10$VtC40CX5AedPPTDO6N2vU.ajgz416SbFjQPsNhSG7ZLzye1XiQhHG', 22, '', '2019-10-29 12:26:02', NULL),
(25, 'koko', 'koko', 'koko', 'kok@hotmail.Com', '$2y$10$WA5w9I1e8rTF9j.Lz.2sYeNtaqB/twrdyj7tqUsdkEnvV1WS.jo16', 22, NULL, NULL, 'zn7n8ZU6Stax9HoSqPkWqzaoZ5TGSSP4laplLr3TopD8tjTfOioDkOEb7YMqTg8gZUs1blMs2OMGGzcWvjFmpAG3cWk0Tz5CRIOetEhR1NqtfUvfN4cO32fa5yLjBJkmHbrp4Vfmo5wvZdU0WKQZR2nh8KF4wZLOgB3i6u565vXAvG226EQ3nmYxd8iYxSG1fwFTD01Hn1fxjQyLUFcVxFtNm1bq7dOvG517WJQY8dLK59eKtPKx6zSup1'),
(26, 'popo', 'popo', 'popo', 'popo@hotmail.com', '$2y$10$ky.4qJGkh7qwFzzMHv6K4Oe1LFcNvKMbqx7XvNSVWLwkG6Ak8e3da', 22, '0XcofM8rT8AJrThQpSwRsFGlUA9JbMKeHSu2ZdGTot3PyW3f75ejDl3l2pbS', '2019-10-29 09:25:23', NULL),
(27, 'szsz', 'szsz', 'szsz', 'szsz@houj.com', '$2y$10$GdKNbSerSojKyH/F9YG3g.ZRJloJyz/AD9BHqYot2sx4EYS5Et6Q.', 58, NULL, NULL, NULL),
(28, 'memo', 'memo', 'memo', 'ozcan.mehmet@outlook.fr', '$2y$10$ZDVPE8AxSNh7B94AAevNaOX.r7hArG/KK0NqscOkzlp7aFaPFhoaa', 22, NULL, NULL, 'go1f0K1J3C0CVx90ijV5eIKqRZVUiEUS0VCt1udxopdJ0JME7AaSQeZNs2iTiWiFPhQK11HB3T3k69KuA6tfJI8zGizjJD6odluRn64WtQOFy3sJREbPZvthdLeiL0bFQ5VyKs1NIfkZi1Jx8vyETzqx9kGXm8RpiHYFUdNCeD6mytsjvWCaElUfAJDM4scHf0wp3gwTitcLEc8idbvtDd20liFeizXK4gBlfrzTsQtpxyOTIMAwJAWHFk'),
(29, 'tutu', 'tutu', 'tutu', 'tutu@hotmail.com', '$2y$10$e8gEPJtLlJQSpNp2/93qiucmQVikhDu.ye0.HexFi/2PKk/sU8HTm', 22, NULL, NULL, NULL),
(30, 'eueu', 'eueu', 'eueu', 'eueu@hotmail.com', '$2y$10$0nT6Vj48CgFNuySicFRg8evndDbDJ.AKMlMZhL5tCzSGoN09iiT8O', 22, NULL, NULL, NULL),
(31, 'dhdh', 'dhdh', 'dhdh', 'dhdh@hotmail.com', '$2y$10$GCHG56VL4QhMw/g7MUdbQ.Tu2rjf2NpMcq11t2yf/gyaGRxDD47Ra', 22, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
