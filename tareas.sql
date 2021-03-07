-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2021 a las 18:58:24
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34




/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tareas`
--
DROP DATABASE IF EXISTS `tareas`;

CREATE DATABASE IF NOT EXISTS `tareas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tareas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calculhores`
--

DROP TABLE IF EXISTS `calculhores`;
CREATE TABLE IF NOT EXISTS `calculhores` (
  `Segons` int(11) NOT NULL,
  `Hores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calculhores`
--

INSERT INTO `calculhores` (`Segons`, `Hores`) VALUES
(1, 0),
(2, 0),
(67, 0),
(68, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

DROP TABLE IF EXISTS `tareas`;
CREATE TABLE IF NOT EXISTS `tareas` (
  `Tasques` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`Tasques`) VALUES
('Preparacio'),
('Estudi'),
('Muntatge'),
('Presentacio');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
