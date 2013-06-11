-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-06-2013 a las 19:40:43
-- Versión del servidor: 5.5.9
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `foodland`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Local`
--

CREATE TABLE `Local` (
  `id_local` int(11) NOT NULL,
  `nombre_local` varchar(20) NOT NULL,
  `direccion_local` varchar(50) NOT NULL,
  `telefono_local` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lat_local` double NOT NULL,
  `long_local` double NOT NULL,
  PRIMARY KEY (`id_local`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `Local`
--

INSERT INTO `Local` VALUES(1, 'prueba', 'javiera carrera 340', '86579837', 'contacto@foodland.cl', 12312312390, 1293891389213);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Local_sector_entrega`
--

CREATE TABLE `Local_sector_entrega` (
  `id_sector_entrega` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  PRIMARY KEY (`id_sector_entrega`,`id_local`),
  KEY `local_local_sector_entrega_fk` (`id_local`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `Local_sector_entrega`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE `Producto` (
  `id_producto` int(11) NOT NULL,
  `titulo_producto` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `descrip_producto` varchar(50) NOT NULL,
  `cant_visitas` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  `id_tipo_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `tipo_prodducto_producto_fk` (`id_tipo_producto`),
  KEY `local_producto_fk` (`id_local`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `Producto`
--

INSERT INTO `Producto` VALUES(1, 'prueba', 5000, 'descripcion de la prueba', 1, 1, 1);
INSERT INTO `Producto` VALUES(2, 'Pizza americana', 39990, 'Pizza muy rica', 1, 1, 3);
INSERT INTO `Producto` VALUES(3, 'Pastel de miloja', 7990, 'miloja rellena de manjar y crema, adornada cereza', 0, 1, 2);
INSERT INTO `Producto` VALUES(4, 'Pene al horno', 1000, 'Pene de negro cubierto en chocolate y quesillo', 0, 1, 1);
INSERT INTO `Producto` VALUES(5, 'pizza mojada', 5000, 'Pizza muy rica', 0, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sector_entrega`
--

CREATE TABLE `Sector_entrega` (
  `id_sector_entrega` int(11) NOT NULL,
  `nombre_sector_entrega` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sector_entrega`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `Sector_entrega`
--

INSERT INTO `Sector_entrega` VALUES(1, 'Valparaiso');
INSERT INTO `Sector_entrega` VALUES(2, 'Viña del mar');
INSERT INTO `Sector_entrega` VALUES(3, 'Quilpue');
INSERT INTO `Sector_entrega` VALUES(4, 'Reñaca');
INSERT INTO `Sector_entrega` VALUES(5, 'Belloto');
INSERT INTO `Sector_entrega` VALUES(6, 'Playa ancha');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_producto`
--

CREATE TABLE `Tipo_producto` (
  `id_tipo_producto` int(11) NOT NULL,
  `nombre_tipo_producto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipo_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `Tipo_producto`
--

INSERT INTO `Tipo_producto` VALUES(1, 'PRUEBA');
INSERT INTO `Tipo_producto` VALUES(2, 'PASTELES');
INSERT INTO `Tipo_producto` VALUES(3, 'PIZZA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_facebook` varchar(100) NOT NULL,
  `foodpoints` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `Usuario`
--


--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `Local_sector_entrega`
--
ALTER TABLE `Local_sector_entrega`
  ADD CONSTRAINT `local_local_sector_entrega_fk` FOREIGN KEY (`id_local`) REFERENCES `Local` (`id_local`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sector_entrega_local_sector_entrega_fk` FOREIGN KEY (`id_sector_entrega`) REFERENCES `Sector_entrega` (`id_sector_entrega`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD CONSTRAINT `local_producto_fk` FOREIGN KEY (`id_local`) REFERENCES `Local` (`id_local`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tipo_prodducto_producto_fk` FOREIGN KEY (`id_tipo_producto`) REFERENCES `Tipo_producto` (`id_tipo_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
