-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-08-2021 a las 16:57:13
-- Versión del servidor: 10.6.2-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agendafa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_categorias`
--

CREATE TABLE `t_categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fechaInsert` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_categorias`
--

INSERT INTO `t_categorias` (`id_categoria`, `nombre`, `descripcion`, `fechaInsert`) VALUES
(12, 'Trabajo', 'Financiera \"X\"', '2021-08-10 16:03:40'),
(13, 'Muñaños', 'Patas del cole', '2021-08-10 18:18:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_contactos`
--

CREATE TABLE `t_contactos` (
  `id_contacto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(245) DEFAULT NULL,
  `paterno` varchar(245) DEFAULT NULL,
  `materno` varchar(245) DEFAULT NULL,
  `telefono` varchar(145) DEFAULT NULL,
  `email` varchar(245) DEFAULT NULL,
  `profesion` varchar(245) DEFAULT NULL,
  `ruta` varchar(245) DEFAULT NULL,
  `fechaInsert` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_contactos`
--

INSERT INTO `t_contactos` (`id_contacto`, `id_categoria`, `nombre`, `paterno`, `materno`, `telefono`, `email`, `profesion`, `ruta`, `fechaInsert`) VALUES
(54, 13, 'Cesar', 'Mendoza', 'Condori', '9546487', 'cmendoza@gmail.com', NULL, 'C:\\laragon\\www\\agendita\\imgsub\\84e55352-8eda-4930-8892-e937a5f25c30 (2).jpg', '2021-08-11 04:30:28'),
(63, 12, 'Gonzalo', 'Choque', 'Dongo', '6666', 'gchoque@gmail.com', NULL, 'C:\\laragon\\www\\agendita\\imgsub\\125969109_1930520153766129_5909177445663162443_n.jpg', '2021-08-11 05:08:13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `t_contactos`
--
ALTER TABLE `t_contactos`
  ADD PRIMARY KEY (`id_contacto`),
  ADD KEY `fkContactoCategoria_idx` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_categorias`
--
ALTER TABLE `t_categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `t_contactos`
--
ALTER TABLE `t_contactos`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_contactos`
--
ALTER TABLE `t_contactos`
  ADD CONSTRAINT `fkContactoCategoria` FOREIGN KEY (`id_categoria`) REFERENCES `t_categorias` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
