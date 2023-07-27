-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2023 a las 23:41:21
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id` int(11) NOT NULL,
  `nombreMascota` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(10) NOT NULL,
  `motivo` varchar(500) NOT NULL,
  `nombreDuenio` varchar(50) NOT NULL,
  `numeroDuenio` varchar(11) NOT NULL,
  `estado` varchar(50) NOT NULL DEFAULT 'Asignada'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id`, `nombreMascota`, `fecha`, `hora`, `motivo`, `nombreDuenio`, `numeroDuenio`, `estado`) VALUES
(2, 'Lulú', '2023-07-28', '06:54', 'Tiene una pata mala', 'Fernando', '3176799811', 'Completada'),
(3, 'Gema', '2023-07-29', '11:10', 'Decaimiento ', 'Luisa', '3185550854', 'En atención'),
(4, 'Charlie', '2023-07-30', '06:14', 'Vomito', 'Myriam', '3133687016', 'Asignada'),
(8, 'Luffy', '2023-08-04', '07:45', 'Vacunas', 'Juan', '3214807274', 'Completada'),
(10, 'Chimuelo', '2023-07-27', '16:39', 'Exámenes', 'Luisa', '3185550854', 'Asignada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
