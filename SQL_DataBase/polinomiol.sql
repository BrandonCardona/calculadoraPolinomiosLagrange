-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2023 a las 08:33:13
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `polinomiol`
--
CREATE DATABASE IF NOT EXISTS `polinomiol` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `polinomiol`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `punto`
--
-- Creación: 07-05-2023 a las 21:33:53
-- Última actualización: 10-05-2023 a las 03:42:53
--

CREATE TABLE `punto` (
  `id` int(11) NOT NULL,
  `x` double(11,2) NOT NULL,
  `y` double(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `punto`
--

INSERT INTO `punto` (`id`, `x`, `y`) VALUES
(60, 0.00, 2.00),
(61, 1.00, -2.00),
(62, 2.00, 0.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `punto`
--
ALTER TABLE `punto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `punto`
--
ALTER TABLE `punto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
