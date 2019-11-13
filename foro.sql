-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2019 a las 16:42:51
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `foro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idCliente` int(7) NOT NULL,
  `Nick` varchar(200) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `mensaje` text DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `respuestas` int(100) DEFAULT NULL,
  `identificador` int(7) DEFAULT NULL,
  `ult_respuesta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `idCliente` int(200) NOT NULL,
  `Nick` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`idCliente`, `Nick`, `password`, `email`) VALUES
(1, 'Addsa', '$2y$10$CMfNS.acbfCCh', 'Guardia@ausda.com'),
(2, 'Add13', '$2y$10$GCACoGYAFZFXm', 'Guardia@aus22da.com'),
(3, 'Asd123', '$2y$10$wDvGR2dnzJpSaGV93IkbDeq.gcHmDgSgBE3ssFH9l9tch9KYmk9Py', 'Guardissa@ausda.com'),
(15, 'johanta quiero pasar', '$2y$10$L0wJFULk6QvdNAAXI6Gl/OYApfuDtEpfUL9gzKOnPTAH5vGNPPyWC', 'j@gmail.com'),
(16, 'xxx', '$2y$10$IrOLGF8f/EzAAowi9NEkeuElSvPXAVzutr2G2soL47FogGSSIbF.K', 'xxx@gmail.com'),
(17, 'Luis', '$2y$10$9XqS.JqC3NGdt0P4p6iUFeZskOXclshTuG81ZzZkhs7nv8r0zrAV2', 'jndosfso@gmsf.cojn'),
(18, 'jose', '$2y$10$W0W22QDEqncS5ouiMXHehebkDRDjKAhYkY1KWh.ux3LmgnF0UbYLy', 'josheph@gmail.com'),
(20, 'fff', '$2y$10$Q6LPWeAaZEcafrj7w9/dmOjhpJGwSPXt9ywYxDbtG48ep9/HmVARi', 'fff@gmail.com'),
(21, 'ttt', '$2y$10$5SptEh9obt0mcLkZE42EKeGSWC6gFAyGf28aR9y43grGqQbEWWqTu', 'ttt@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `confirmar_password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idCliente` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `idCliente` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
