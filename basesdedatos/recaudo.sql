-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2017 a las 05:07:37
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recaudo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliado`
--

CREATE TABLE `afiliado` (
  `cod_afiliado` varchar(50) NOT NULL,
  `nombre_afiliado` varchar(50) DEFAULT NULL,
  `apellido_afiliado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `afiliado`
--

INSERT INTO `afiliado` (`cod_afiliado`, `nombre_afiliado`, `apellido_afiliado`) VALUES
('1208085', 'manuel', 'medina'),
('23456789', 'Camilo', 'Ruiz'),
('76578439', 'Luisa', 'Ruiz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE `auditoria` (
  `cod_auditoria` int(11) NOT NULL,
  `nombre_transaccion` varchar(50) DEFAULT NULL,
  `fecha_transaccion` datetime DEFAULT NULL,
  `nombre_tabla` varchar(50) DEFAULT NULL,
  `comentario` varchar(250) DEFAULT NULL,
  `cod_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credito`
--

CREATE TABLE `credito` (
  `cod_credito` int(11) NOT NULL,
  `cod_afiliado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `credito`
--

INSERT INTO `credito` (`cod_credito`, `cod_afiliado`) VALUES
(1001, '23456789'),
(1003, '76578439');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruce_informacion`
--

CREATE TABLE `cruce_informacion` (
  `cod_cruce` int(11) NOT NULL,
  `cod_credito` int(11) NOT NULL,
  `cantidad_pagos` int(11) DEFAULT NULL,
  `total_pagado` double DEFAULT NULL,
  `total_recaudo_efecty` double DEFAULT NULL,
  `total_recaudo_entidad` double DEFAULT NULL,
  `fecha_cruce` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pago`
--

CREATE TABLE `detalle_pago` (
  `cod_detalle_pago` int(11) NOT NULL,
  `cod_encabezado` int(11) DEFAULT NULL,
  `valor_pagado` int(11) DEFAULT NULL,
  `fecha_recaudo` datetime DEFAULT NULL,
  `cod_credito` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_pago`
--

INSERT INTO `detalle_pago` (`cod_detalle_pago`, `cod_encabezado`, `valor_pagado`, `fecha_recaudo`, `cod_credito`) VALUES
(1, 19, 6000000, '2017-11-20 12:00:30', 1001),
(2, 19, 5999999, '2017-11-20 12:00:31', 1003),
(3, 19, 5999998, '2017-11-20 12:00:32', 1003),
(4, 19, 5999997, '2017-11-20 12:00:33', 1003),
(5, 19, 5999996, '2017-11-20 12:00:34', 1003),
(6, 19, 5999995, '2017-11-20 12:00:35', 1003),
(7, 19, 5999994, '2017-11-20 12:00:36', 1003),
(8, 19, 5999993, '2017-11-20 12:00:37', 1003),
(9, 19, 5999992, '2017-11-20 12:00:38', 1003),
(10, 19, 5999991, '2017-11-20 12:00:39', 1003),
(11, 19, 5999990, '2017-11-20 12:00:40', 1003),
(12, 19, 5999989, '2017-11-20 12:00:41', 1003),
(13, 19, 5999988, '2017-11-20 12:00:42', 1003),
(14, 19, 5999987, '2017-11-20 12:00:43', 1003),
(15, 19, 5999986, '2017-11-20 12:00:44', 1003),
(16, 19, 5999985, '2017-11-20 12:00:45', 1003),
(17, 19, 5999984, '2017-11-20 12:00:46', 1003),
(18, 19, 5999983, '2017-11-20 12:00:47', 1003),
(19, 19, 5999982, '2017-11-20 12:00:48', 1003),
(20, 19, 5999981, '2017-11-20 12:00:49', 1003),
(21, 19, 5999980, '2017-11-20 12:00:50', 1003),
(22, 19, 5999979, '2017-11-20 12:00:58', 1003);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encabezado`
--

CREATE TABLE `encabezado` (
  `cod_encabezado` int(11) NOT NULL,
  `nombre_archivo` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `numero_registros` int(11) DEFAULT NULL,
  `tiempo_de_carga` time DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encabezado`
--

INSERT INTO `encabezado` (`cod_encabezado`, `nombre_archivo`, `numero_registros`, `tiempo_de_carga`, `fecha`) VALUES
(19, 'Hoja de cálculo sin título - Hoja 1.csv', 21, '00:00:00', '2017-11-28 15:49:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_banco`
--

CREATE TABLE `pago_banco` (
  `cod_banco` int(11) NOT NULL,
  `cod_detalle_pago` int(11) NOT NULL,
  `codigo_barras` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_efecty`
--

CREATE TABLE `pago_efecty` (
  `cod_oficina` int(11) NOT NULL,
  `cod_detalle_pago` int(11) NOT NULL,
  `valor_comision` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago_efecty`
--

INSERT INTO `pago_efecty` (`cod_oficina`, `cod_detalle_pago`, `valor_comision`) VALUES
(4567890, 1, 700000),
(4567890, 2, 600000),
(4567890, 3, 600000),
(4567890, 4, 600000),
(4567890, 5, 600000),
(4567890, 6, 600000),
(4567890, 7, 600000),
(4567890, 8, 600000),
(4567890, 9, 600000),
(4567890, 10, 600000),
(4567890, 11, 600000),
(4567890, 12, 600000),
(4567890, 13, 600000),
(4567890, 14, 600000),
(4567890, 15, 600000),
(4567890, 16, 600000),
(4567890, 17, 600000),
(4567890, 18, 600000),
(4567890, 19, 600000),
(4567890, 20, 600000),
(4567890, 21, 600000),
(4567890, 22, 600000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `cod_perfil` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) DEFAULT NULL,
  `clave_usuario` varchar(32) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `cod_perfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afiliado`
--
ALTER TABLE `afiliado`
  ADD PRIMARY KEY (`cod_afiliado`);

--
-- Indices de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD PRIMARY KEY (`cod_auditoria`),
  ADD KEY `auditoria_usuario_fk` (`cod_usuario`);

--
-- Indices de la tabla `credito`
--
ALTER TABLE `credito`
  ADD PRIMARY KEY (`cod_credito`),
  ADD KEY `credito_afiliado_fk` (`cod_afiliado`);

--
-- Indices de la tabla `cruce_informacion`
--
ALTER TABLE `cruce_informacion`
  ADD PRIMARY KEY (`cod_cruce`,`cod_credito`),
  ADD KEY `cod_credito` (`cod_credito`);

--
-- Indices de la tabla `detalle_pago`
--
ALTER TABLE `detalle_pago`
  ADD PRIMARY KEY (`cod_detalle_pago`),
  ADD KEY `detalle_pago_credito` (`cod_credito`),
  ADD KEY `detalle_pago_encabezado` (`cod_encabezado`),
  ADD KEY `cod_detalle_pago` (`cod_detalle_pago`),
  ADD KEY `cod_detalle_pago_2` (`cod_detalle_pago`);

--
-- Indices de la tabla `encabezado`
--
ALTER TABLE `encabezado`
  ADD PRIMARY KEY (`cod_encabezado`);

--
-- Indices de la tabla `pago_banco`
--
ALTER TABLE `pago_banco`
  ADD PRIMARY KEY (`cod_banco`,`cod_detalle_pago`),
  ADD KEY `pago_banco_detalle_pago_pk` (`cod_detalle_pago`);

--
-- Indices de la tabla `pago_efecty`
--
ALTER TABLE `pago_efecty`
  ADD PRIMARY KEY (`cod_oficina`,`cod_detalle_pago`),
  ADD KEY `pago_efecty_detalle_pago_pk` (`cod_detalle_pago`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`cod_perfil`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`),
  ADD KEY `usuario_perfil_fk` (`cod_perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `cod_auditoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cruce_informacion`
--
ALTER TABLE `cruce_informacion`
  MODIFY `cod_cruce` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalle_pago`
--
ALTER TABLE `detalle_pago`
  MODIFY `cod_detalle_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `encabezado`
--
ALTER TABLE `encabezado`
  MODIFY `cod_encabezado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD CONSTRAINT `auditoria_usuario_fk` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

--
-- Filtros para la tabla `credito`
--
ALTER TABLE `credito`
  ADD CONSTRAINT `credito_afiliado` FOREIGN KEY (`cod_afiliado`) REFERENCES `afiliado` (`cod_afiliado`);

--
-- Filtros para la tabla `cruce_informacion`
--
ALTER TABLE `cruce_informacion`
  ADD CONSTRAINT `cruce_informacion_ibfk_1` FOREIGN KEY (`cod_credito`) REFERENCES `credito` (`cod_credito`);

--
-- Filtros para la tabla `detalle_pago`
--
ALTER TABLE `detalle_pago`
  ADD CONSTRAINT `detalle_pago_credito` FOREIGN KEY (`cod_credito`) REFERENCES `credito` (`cod_credito`),
  ADD CONSTRAINT `encabezado_detalle_pago` FOREIGN KEY (`cod_encabezado`) REFERENCES `encabezado` (`cod_encabezado`);

--
-- Filtros para la tabla `pago_banco`
--
ALTER TABLE `pago_banco`
  ADD CONSTRAINT `banco_detalle_pago` FOREIGN KEY (`cod_detalle_pago`) REFERENCES `detalle_pago` (`cod_detalle_pago`);

--
-- Filtros para la tabla `pago_efecty`
--
ALTER TABLE `pago_efecty`
  ADD CONSTRAINT `efecty_detalle_pago` FOREIGN KEY (`cod_detalle_pago`) REFERENCES `detalle_pago` (`cod_detalle_pago`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_perfil_fk` FOREIGN KEY (`cod_perfil`) REFERENCES `perfil` (`cod_perfil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
