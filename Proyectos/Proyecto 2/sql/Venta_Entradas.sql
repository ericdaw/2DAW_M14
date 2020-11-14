-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql
-- Tiempo de generación: 23-10-2020 a las 11:10:18
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Venta_Entradas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espectacles`
--

CREATE TABLE `espectacles` (
  `id_espectacle` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `hora` datetime NOT NULL,
  `id_recinte` int(11) NOT NULL,
  `descripcio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recinte`
--

CREATE TABLE `recinte` (
  `id_recinte` int(11) NOT NULL,
  `nom_recinte` int(11) NOT NULL,
  `adreca` varchar(255) NOT NULL,
  `num_places` int(11)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_espectacle` int(11) NOT NULL,
  `id_usuari` int(11) NOT NULL,
  `entradas` int(11)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE `usuaris` (
  `id_usuari` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `cognom` varchar(255) NOT NULL,
  `adreca` varchar(255),
  `poblacio` varchar(255),
  `codi_postal` int(11),
  `telefono` int(11),
  `movil` int(11),
  `data_naixement` date,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `espectacles`
--
ALTER TABLE `espectacles`
  ADD PRIMARY KEY (`id_espectacle`),
  ADD KEY `fk_id_recinte` (`id_recinte`);

--
-- Indices de la tabla `recinte`
--
ALTER TABLE `recinte`
  ADD PRIMARY KEY (`id_recinte`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD KEY `fk_id_espectacle` (`id_espectacle`),
  ADD KEY `fk_id_usuari` (`id_usuari`);

--
-- Indices de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id_usuari`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `espectacles`
--
ALTER TABLE `espectacles`
  MODIFY `id_espectacle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recinte`
--
ALTER TABLE `recinte`
  MODIFY `id_recinte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id_usuari` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `espectacles`
--
ALTER TABLE `espectacles`
  ADD CONSTRAINT `fk_id_recinte` FOREIGN KEY (`id_recinte`) REFERENCES `recinte` (`id_recinte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fk_id_espectacle` FOREIGN KEY (`id_espectacle`) REFERENCES `espectacles` (`id_espectacle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_usuari` FOREIGN KEY (`id_usuari`) REFERENCES `usuaris` (`id_usuari`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
