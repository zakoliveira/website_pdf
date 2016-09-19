-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for backoffice
CREATE DATABASE IF NOT EXISTS `backoffice` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `backoffice`;


-- Dumping structure for table backoffice.componentes
CREATE TABLE IF NOT EXISTS `componentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_componente_grupo` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(50) NOT NULL,
  `quantidade` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`),
  KEY `FK_componentes_grupo_componente` (`id_componente_grupo`),
  CONSTRAINT `FK_componentes_grupo_componente` FOREIGN KEY (`id_componente_grupo`) REFERENCES `grupo_componente` (`id_componente_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table backoffice.componentes: ~2 rows (approximately)
/*!40000 ALTER TABLE `componentes` DISABLE KEYS */;
INSERT IGNORE INTO `componentes` (`id`, `id_componente_grupo`, `nome`, `quantidade`) VALUES
	(9, 8, '10ohm', 2),
	(10, 3, 'Crocodilos', 2);
/*!40000 ALTER TABLE `componentes` ENABLE KEYS */;


-- Dumping structure for table backoffice.grupo_componente
CREATE TABLE IF NOT EXISTS `grupo_componente` (
  `id_componente_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_componente_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table backoffice.grupo_componente: ~3 rows (approximately)
/*!40000 ALTER TABLE `grupo_componente` DISABLE KEYS */;
INSERT IGNORE INTO `grupo_componente` (`id_componente_grupo`, `nome`) VALUES
	(3, 'Cabos'),
	(4, 'Solda'),
	(8, 'Resistências');
/*!40000 ALTER TABLE `grupo_componente` ENABLE KEYS */;


-- Dumping structure for table backoffice.requisicoes
CREATE TABLE IF NOT EXISTS `requisicoes` (
  `id_requisicao` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilizador` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(50) NOT NULL,
  `qtd` int(11) NOT NULL DEFAULT '0',
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id_requisicao`),
  KEY `utilizador` (`id_utilizador`),
  CONSTRAINT `utilizador` FOREIGN KEY (`id_utilizador`) REFERENCES `utilizadores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Dumping data for table backoffice.requisicoes: ~2 rows (approximately)
/*!40000 ALTER TABLE `requisicoes` DISABLE KEYS */;
INSERT IGNORE INTO `requisicoes` (`id_requisicao`, `id_utilizador`, `nome`, `qtd`, `data`) VALUES
	(27, 2, '10ohm', 1, '2016-06-15 02:14:00'),
	(28, 2, 'Crocodilos', 1, '2016-06-15 02:14:00');
/*!40000 ALTER TABLE `requisicoes` ENABLE KEYS */;


-- Dumping structure for table backoffice.utilizadores
CREATE TABLE IF NOT EXISTS `utilizadores` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `apelido` varchar(20) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table backoffice.utilizadores: ~3 rows (approximately)
/*!40000 ALTER TABLE `utilizadores` DISABLE KEYS */;
INSERT IGNORE INTO `utilizadores` (`id`, `username`, `password`, `nome`, `apelido`, `admin`) VALUES
	(2, 'japo', 'japo', 'Jose', 'Oliveira', 1),
	(9, 'amcp', 'amcp', 'André', 'Pinho', 0);
/*!40000 ALTER TABLE `utilizadores` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
