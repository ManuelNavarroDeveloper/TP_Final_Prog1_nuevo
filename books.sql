-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2022 a las 01:10:32
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
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `isbn` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`isbn`, `user_id`, `title`, `author`, `genre`) VALUES
(1, NULL, 'El Quijote', 'Miguel de Cervantes', 'clasico'),
(2, NULL, 'IT', 'Stephen King', 'terror'),
(3, NULL, 'El señor de los anillos', 'J.R.R. Tolkien', 'epico'),
(4, NULL, 'Agua para chocolate', 'Laura Esquivel Valdes', 'novela');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `isbn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
