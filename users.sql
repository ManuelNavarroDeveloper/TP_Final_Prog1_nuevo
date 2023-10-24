-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2022 a las 01:11:33
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `SURNAME` varchar(200) NOT NULL,
  `USER` varchar(45) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `NAME`, `SURNAME`, `USER`, `PASSWORD`) VALUES
(1, 'Manuel', 'Navarro', 'Manu123', '$2y$10$V8bPhFbauqBfWUwnu.ak7uauICgfgM69ULuMlPHMuyHPN2Zjt5/hq'),
(2, 'Matias', 'Rodes', 'Mati456', '$2y$10$AOcdqw1unLnM.izwSCZyUuHlO6iSThqGqQ3NSo0XHOGZTP89Wqg3i'),
(3, 'Esteban', 'Vazquez', 'Kyto789', '$2y$10$dJp6LsIqC1FKPDLp.iqg9OYlliCAFOjKoM7.l041y8LHn22iFbY7y'),
(4, 'Fulano', 'De Tal', 'ejemplo', '$2y$10$cuQiUk3Zc1SguVzeDRlPBOHTOrrCtW3im2ZWYxE2h3kwsnG/Qd2em');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
