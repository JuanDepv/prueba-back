-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33065
-- Tiempo de generación: 12-04-2021 a las 04:41:36
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `employee`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appx_departament`
--

CREATE TABLE `appx_departament` (
  `id` int(11) NOT NULL,
  `departament_name` text DEFAULT NULL,
  `departament__city` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `appx_departament`
--

INSERT INTO `appx_departament` (`id`, `departament_name`, `departament__city`) VALUES
(1, 'Ingenieria', 'Medellin'),
(2, 'Psicologia', 'Medellin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appx_educationlevel`
--

CREATE TABLE `appx_educationlevel` (
  `id` int(11) NOT NULL,
  `descriptions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `appx_educationlevel`
--

INSERT INTO `appx_educationlevel` (`id`, `descriptions`) VALUES
(1, 'profesional'),
(3, 'tecnologo'),
(4, 'bachiller');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appx_employee`
--

CREATE TABLE `appx_employee` (
  `id` int(11) NOT NULL,
  `firstname` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `departament_id` int(11) DEFAULT 0,
  `salary` double DEFAULT 0,
  `educationlevel_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `appx_employee`
--

INSERT INTO `appx_employee` (`id`, `firstname`, `lastname`, `departament_id`, `salary`, `educationlevel_id`) VALUES
(1, 'Juan Jose', 'Restrepo Cuadros', 1, 400, 1),
(2, 'Antonio', 'Acevedo Montoya', 1, 250, 3),
(3, 'Carlos', 'Jimenez', 1, 400, 4),
(4, 'Luisa', 'Arroyave', 2, 200, 1);

--
-- Disparadores `appx_employee`
--
DELIMITER $$
CREATE TRIGGER `update_salary` AFTER INSERT ON `appx_employee` FOR EACH ROW UPDATE appx_employee
SET appx_employee.salary = 908.526 WHERE appx_employee.firstame LIKE '%ale%'
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `appx_departament`
--
ALTER TABLE `appx_departament`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `appx_educationlevel`
--
ALTER TABLE `appx_educationlevel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `appx_employee`
--
ALTER TABLE `appx_employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `appx_departament`
--
ALTER TABLE `appx_departament`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `appx_educationlevel`
--
ALTER TABLE `appx_educationlevel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `appx_employee`
--
ALTER TABLE `appx_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
