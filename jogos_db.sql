SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE jogos_db;
USE jogos_db;

CREATE TABLE `jogos` (
  `cod_jogo` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome_jogo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `jogos` (`nome_jogo`) VALUES
('Prince Of Persia'),
('God Of War II'),
('Zelda'),
('Super Mário Bros');

COMMIT;
