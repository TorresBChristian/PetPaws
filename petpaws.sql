-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2022 at 03:56 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petpaws`
--

-- --------------------------------------------------------

--
-- Table structure for table `mascota`
--

DROP TABLE IF EXISTS `mascota`;
CREATE TABLE IF NOT EXISTS `mascota` (
  `id_mascota` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `tamaño` varchar(45) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `nameP` varchar(65) DEFAULT NULL,
  `lastName` varchar(65) DEFAULT NULL,
  `email` varchar(65) DEFAULT NULL,
  `contacto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mascota`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mascota`
--

INSERT INTO `mascota` (`id_mascota`, `nombre`, `tamaño`, `edad`, `sexo`, `descripcion`, `imagen`, `nameP`, `lastName`, `email`, `contacto`) VALUES
(20, 'Tito', 'Pequeño', 11, 'Macho', 'Mi nombre es Tito, y soy un adulto mayor. Busco una familia que me quiera mucho, me engría y me tenga mucha paciencia, ya que por mi edad soy cieguito. Dame una oportunidad para tener una casita, te prometo que me portaré bien y te daré mucho amor. Además, si me adoptas, vengo con un kit de regalos ¡Anímate!', 'poodle.jpg', 'John', 'Titor', 'john.titor@gmail.com', 991048596);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(8) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `correo`, `password`) VALUES
(2, 'PAULA ROJAS', 'paula.rojas@unmsm.edu.pe', 'c');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
