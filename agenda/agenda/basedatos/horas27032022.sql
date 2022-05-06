-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2022 a las 00:00:54
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `horas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `IdAgenda` int(3) UNSIGNED NOT NULL,
  `Identificacion` varchar(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `Correo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`IdAgenda`, `Identificacion`, `Nombre`, `Apellido`, `Direccion`, `Telefono`, `Correo`) VALUES
(1, '100', 'pepito', 'perez', 'avenida siempre viva', '3107105555555', 'pepito@gmail.com'),
(2, '21', 'pepita', 'perez', 'san nicolas', '5665656', 'p@gmail.com'),
(3, '22', 'pepito', 'placido', 'san pedro', '234456', 'p@gmail.com'),
(4, '22', 'juanito', 'otro mundo', 'san antonio', '36565', 'w@gmail.com'),
(5, '23', 'fulanito', 'tu veras', 'avenida', '56464664', 'f@misena.edu.co'),
(6, '24', 'fulanita', 'famacio', 'alpujarra', '566565', 'p@gmail.com'),
(7, '1234', 'sutanita', 'alccantara', 'calle', '2334466666', 'q@gmail.com'),
(8, '12', 'fulanito', 'de tal', 'avenida sempre viva', '12', 'f@misena.edu.co'),
(9, '13', 'satinita', 'fdfdgdg', 'fddfgdfg', '23434', 'f@misena.edu.co'),
(10, '14', 'florecita', 'florecita', 'carrera', '1234', 'f@misena.edu.co'),
(11, '15', 'pancracio', 'pancrasio', 'avenida sempre viva', '12', 'f@misena.edu.co');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`IdAgenda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `IdAgenda` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
