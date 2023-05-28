-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2023 a las 18:00:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almasenadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `nombreCat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `nombreCat`) VALUES
(1, ''),
(2, 'cabeza'),
(3, 'visual'),
(4, 'auditivo'),
(5, 'respiratorio'),
(6, 'prendas'),
(7, 'calzado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos`
--

CREATE TABLE `elementos` (
  `idElemento` int(11) NOT NULL,
  `fkCategoria` int(11) NOT NULL,
  `fkTalla` int(10) NOT NULL,
  `elemento` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `color` varchar(10) NOT NULL,
  `existencias` int(10) NOT NULL,
  `observacion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `elementos`
--

INSERT INTO `elementos` (`idElemento`, `fkCategoria`, `fkTalla`, `elemento`, `marca`, `color`, `existencias`, `observacion`) VALUES
(1, 4, 21, 'Tapa oidos de inserción', 'Sosega', 'Amarillo', 200, 'De los nuevos'),
(2, 4, 21, 'Tapa oidos tipo copa', 'Sosega', 'varios', 100, 'Color es irrelevante.'),
(3, 3, 21, 'monogafas', 'sosega', 'negro', 200, 'Modelo nuevo'),
(4, 7, 6, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(5, 7, 7, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(6, 7, 8, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(7, 7, 9, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(8, 7, 10, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(9, 7, 11, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(10, 7, 12, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(11, 7, 13, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(12, 7, 14, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(13, 7, 15, 'Botas de seguridad', 'Saga', 'Café', 1, 'Las Mías '),
(14, 7, 16, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(15, 7, 17, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(16, 7, 18, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(17, 7, 19, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(18, 7, 20, 'Botas de seguridad', 'Saga', 'Café', 100, ''),
(21, 2, 3, 'Pava montañera', '', 'Azul', 100, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

CREATE TABLE `movimiento` (
  `idMovimiento` int(11) NOT NULL,
  `tipoMovimiento` varchar(10) NOT NULL,
  `tomador` int(50) NOT NULL,
  `elemento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `idTalla` int(11) NOT NULL,
  `tallas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`idTalla`, `tallas`) VALUES
(2, 'Talla s'),
(3, 'Talla m'),
(4, 'Talla l'),
(5, 'Talla xl'),
(6, 'Talla 30'),
(7, 'Talla 31'),
(8, 'Talla 32'),
(9, 'Talla 33'),
(10, 'Talla34'),
(11, 'Talla 35'),
(12, 'Talla 36'),
(13, 'Talla 37'),
(14, 'Talla 38'),
(15, 'Talla 39'),
(16, 'Talla 40'),
(17, 'Talla 41'),
(18, 'Talla 42'),
(19, 'Talla 43'),
(20, 'Talla 44'),
(21, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tests`
--

CREATE TABLE `tests` (
  `idTest` int(11) NOT NULL,
  `campoTest` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tests`
--

INSERT INTO `tests` (`idTest`, `campoTest`) VALUES
(4, 'valor'),
(5, 'valor'),
(6, 'valor'),
(7, 'valor'),
(8, 'valor'),
(9, 'valre'),
(10, 'ss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `idFicha` int(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `idFicha`, `password`, `email`, `rol`) VALUES
(12265488, 'Max Power', 0, '473803f0f2ebd77d83ee60daaa61f381', 'jafajardo8845@soy.sena.edu.co', 'admin'),
(2147483647, 'Usuario de Prueba', 0, 'd375af34cc08aba9a1cc9b6596a70c36', 'test@mail.co', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD PRIMARY KEY (`idElemento`),
  ADD KEY `idTipo` (`fkTalla`),
  ADD KEY `fkCategoria` (`fkCategoria`);

--
-- Indices de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD PRIMARY KEY (`idMovimiento`),
  ADD KEY `tomador` (`tomador`),
  ADD KEY `elemento` (`elemento`),
  ADD KEY `elemento_2` (`elemento`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`idTalla`);

--
-- Indices de la tabla `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`idTest`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `elementos`
--
ALTER TABLE `elementos`
  MODIFY `idElemento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  MODIFY `idMovimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
  MODIFY `idTalla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tests`
--
ALTER TABLE `tests`
  MODIFY `idTest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD CONSTRAINT `elementos_ibfk_1` FOREIGN KEY (`fkTalla`) REFERENCES `tallas` (`idTalla`) ON UPDATE CASCADE,
  ADD CONSTRAINT `elementos_ibfk_2` FOREIGN KEY (`fkCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE;

--
-- Filtros para la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD CONSTRAINT `movimiento_ibfk_1` FOREIGN KEY (`tomador`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movimiento_ibfk_2` FOREIGN KEY (`elemento`) REFERENCES `elementos` (`idElemento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
