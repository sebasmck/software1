-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-11-2017 a las 21:13:20
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
  `cod_afiliado` int(11) NOT NULL,
  `nombre_afiliado` varchar(50) DEFAULT NULL,
  `apellido_afiliado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `afiliado`
--

INSERT INTO `afiliado` (`cod_afiliado`, `nombre_afiliado`, `apellido_afiliado`) VALUES
(23456789, 'Camilo', 'Ruiz'),
(76578439, 'Luisa', 'Ruiz');

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
  `cod_afiliado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `credito`
--

INSERT INTO `credito` (`cod_credito`, `cod_afiliado`) VALUES
(1001, 23456789),
(1003, 76578439);

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
  MODIFY `cod_detalle_pago` int(11) NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `credito_afiliado_fk` FOREIGN KEY (`cod_afiliado`) REFERENCES `afiliado` (`cod_afiliado`);

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
  ADD CONSTRAINT `banco_detalle_pago` FOREIGN KEY (`cod_detalle_pago`) REFERENCES `detalle_pago` (`cod_detalle_pago`),
  ADD CONSTRAINT `pago_banco_pk` FOREIGN KEY (`cod_banco`) REFERENCES `banco` (`cod_banco`);

--
-- Filtros para la tabla `pago_efecty`
--
ALTER TABLE `pago_efecty`
  ADD CONSTRAINT `efecty_detalle_pago` FOREIGN KEY (`cod_detalle_pago`) REFERENCES `detalle_pago` (`cod_detalle_pago`),
  ADD CONSTRAINT `pago_efecty_oficina_pk` FOREIGN KEY (`cod_oficina`) REFERENCES `oficina` (`cod_oficina`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_perfil_fk` FOREIGN KEY (`cod_perfil`) REFERENCES `perfil` (`cod_perfil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
