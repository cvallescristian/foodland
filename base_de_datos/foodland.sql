-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-06-2013 a las 22:28:49
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
  `id_local` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_local` varchar(50) NOT NULL,
  `direccion_local` varchar(50) NOT NULL,
  `telefono_local` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lat_local` double NOT NULL,
  `long_local` double NOT NULL,
  PRIMARY KEY (`id_local`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Volcar la base de datos para la tabla `Local`
--

INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(24, 'AKASUSHI', 'palmira romano norte 117,limache', '332414924', 'test@test.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(25, 'Sushisun', 'Errazuriz / Nº 801', '2127783', 'quilpue@sushisun.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(26, 'Habibi Delli', '5 Norte esquina 3 Poniente ', '0322683752', 'test@test.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(27, 'La Mexicana', 'Calle Valparaiso 1137, Viña del Mar', '03223281361', 'lamexicanadelivery@gmail.com', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(28, 'Pizza Pizza', 'Viña del mar', '2682020', 'test@test.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(29, 'Sushile', 'Quillota 552, viña del mar', '0322688312', 'test@test.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(30, 'Burreros', 'Viana 419, Viña del Mar', '03223277356', 'test@test.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(31, 'Chau San', '11 norte 715, viña del mar', '0322699671', 'test@test.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(32, 'No me olvides', 'Viña del mar', '95997322', 'contacto@nomeolvidespasteleria.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(33, 'Mosaico', 'Av. Umeneta 492 (frente colegio nacional), Limache', '0332511401', 'mosaicosushi@hotmail.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(34, 'Akipe', 'Diego Portales #671 Recreo', '56322118154', 'test@test.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(35, 'Oni Sushi', 'Anibal Pinto 902, Quilpué, Chile', '322919570', 'test@test.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(36, 'Origami Sushi', 'Irarrázabal 446, Quilpué, Chile', '323189998', 'origami@origamisushi.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(37, 'Pizzas Valpo Delivery', 'Tienda virtual ', '53333619', 'test@test.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(38, 'Yakata Sushi Delivery', 'Aldunate 1627 local 3, Valparaíso', '322594098', 'test@test.cl', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(39, 'Sushi Mono ', 'Av. Marina 132, Viña del Mar', '323281076', 'contactosushimono@gmail.com', 0, 0);
INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`) VALUES(40, 'MÍA PIZZA A LA PIEDRA', 'LA CONCEPCIÓN 416-B, quillota, 2260000 Quillota', '33511184', 'miapizzaalapiedra@hotmail.com', 0, 0);

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

INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(11, 24);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(13, 25);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(8, 26);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(8, 27);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(8, 28);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(8, 29);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(8, 30);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(8, 31);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(8, 32);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(11, 33);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(8, 34);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(13, 35);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(13, 36);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(9, 37);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(9, 38);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(8, 39);
INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES(12, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Members`
--

CREATE TABLE `Members` (
  `id_members` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id_members`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `Members`
--

INSERT INTO `Members` (`id_members`, `email`, `pass`) VALUES(1, 'cristian@foodland.cl', '640401e1958f6db1bb8c87047b1066c9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE `Producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_producto` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `descrip_producto` varchar(300) NOT NULL,
  `cant_visitas` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  `id_tipo_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `tipo_prodducto_producto_fk` (`id_tipo_producto`),
  KEY `local_producto_fk` (`id_local`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcar la base de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(6, '13 piezas de sushi', 4500, '1 avoke sake + 1 calif. Make + 2 gyosas', 0, 24, 2);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(7, '32 piezas de sushi', 7900, 'California maki + 1 hosomaki + 1 avokado sake + 4 ', 0, 24, 2);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(9, 'Tabla 1 Persona (14 piezas)', 4690, '4 Bocados Avocado Kani\n4 Bocados Ebi chesse\n1 Gyos', 0, 25, 2);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(10, 'Combinación Dos', 9500, '1 Kita Roll, 1 Tokio, 1 Hosomaki Yasai, 4 Korokke', 0, 35, 2);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(11, 'Zapallos Rellenos', 4890, 'Sabrosos zapallos italianos baby rellenos', 0, 26, 4);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(12, 'Combinación Uno', 4900, '1 Tokio, 1 Okinawa', 0, 35, 2);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(13, 'Mazarines', 5190, 'Tripas de cordero rellenas con pino árabe\n3 unidad', 0, 26, 4);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(14, 'Futomaki', 3400, 'Pulpo, palta, masago, espárrago, pepino, cebollín', 1, 36, 2);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(15, 'Monterey', 3790, 'Chicharrón de cerdo guisado con salsa verde y cebo', 0, 27, 10);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(16, 'Sushi Vegetariano', 2500, 'Ciboulette, palta, palmito, espárrago', 0, 36, 2);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(17, 'Pizza familiar', 4500, 'Pizza familiar (40 cm diámetro) de 3 ingredientes ', 0, 37, 3);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(18, 'Pizza Dieciochera', 7000, 'Cebolla, orégano, pimentón y extraqueso', 0, 40, 3);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(19, 'Tabla Facebook (50 piezas)', 10990, '10 piezas de salmón ,queso crema ,ciboulette,envue', 0, 38, 2);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(20, 'Tabla Yakata (50 piezas)', 10799, '9 piezas camarón,cebollin,queso crema,envuelto en ', 0, 38, 2);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(21, 'Tabla Chimp (30 piezas)', 9290, '- 1 Futomaki Sake Maki.\n- 1 Avocado Tako.\n- 1 Sake', 0, 39, 2);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(22, 'Tabla Kong (50 piezas)', 16400, '- 1 Hosomaki salmón.\n- 1 Avoca Kani.\n- 1 Sake tako', 0, 39, 2);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(23, ' Peperoni', 10900, 'Queso mozzarella, Pepperoni.', 0, 28, 3);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(24, 'Napolitana', 10900, 'Pizza grande de queso mozzarella, Tomate.', 0, 28, 3);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(25, 'Tabla 24 unidades', 8500, '9 uni. Palta:camaron ap, queso, champiñón salteado', 0, 29, 2);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(27, 'Tabla 36 unidades', 8990, '9 uni. Palta: salmon, queso, ciboulette.\n9 uni. Sé', 0, 29, 2);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(28, 'Burrito gigante', 3150, 'Tortilla de trigo gigante + dos carnes a elección ', 0, 30, 10);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(29, 'Burrito vegetariano', 3200, 'Tortilla de trigo gigante + lechuga, tomate, queso', 2, 30, 10);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(30, 'Menú para 2 Personas', 9900, '1 Wantan \n1 Arrollado de Marisco \n1 Chapsui de Car', 4, 31, 1);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(31, 'Menú para 4 Personas', 19500, '1 Wantan \n1 Chapsui de Carne \n1 Arrollado de Maris', 2, 31, 1);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(32, 'Torta Brownie', 15000, '10 personas Biscocho brownie, relleno de manjar y ', 0, 32, 8);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(33, 'Torta Tres Leches de Coco', 14800, '10 personas,Biscocho de vainilla, remojado con lec', 0, 32, 8);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(34, 'Torta Amor', 14500, ': 10 personas,Discos de hojarasca, rellenos con ma', 0, 32, 8);
INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES(35, 'Torta Hojarasca', 17000, '10 personas, Discos de hojarasca, rellenos en form', 0, 32, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sector_entrega`
--

CREATE TABLE `Sector_entrega` (
  `id_sector_entrega` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_sector_entrega` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sector_entrega`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `Sector_entrega`
--

INSERT INTO `Sector_entrega` (`id_sector_entrega`, `nombre_sector_entrega`) VALUES(8, 'Viña del Mar');
INSERT INTO `Sector_entrega` (`id_sector_entrega`, `nombre_sector_entrega`) VALUES(9, 'Valparaíso');
INSERT INTO `Sector_entrega` (`id_sector_entrega`, `nombre_sector_entrega`) VALUES(11, 'Limache');
INSERT INTO `Sector_entrega` (`id_sector_entrega`, `nombre_sector_entrega`) VALUES(12, 'Quillota');
INSERT INTO `Sector_entrega` (`id_sector_entrega`, `nombre_sector_entrega`) VALUES(13, 'Quilpué');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_producto`
--

CREATE TABLE `Tipo_producto` (
  `id_tipo_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_producto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipo_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `Tipo_producto`
--

INSERT INTO `Tipo_producto` (`id_tipo_producto`, `nombre_tipo_producto`) VALUES(1, 'Comida China');
INSERT INTO `Tipo_producto` (`id_tipo_producto`, `nombre_tipo_producto`) VALUES(2, 'Sushi');
INSERT INTO `Tipo_producto` (`id_tipo_producto`, `nombre_tipo_producto`) VALUES(3, 'Pizza');
INSERT INTO `Tipo_producto` (`id_tipo_producto`, `nombre_tipo_producto`) VALUES(4, 'Comida Arabe');
INSERT INTO `Tipo_producto` (`id_tipo_producto`, `nombre_tipo_producto`) VALUES(5, 'Sandwich');
INSERT INTO `Tipo_producto` (`id_tipo_producto`, `nombre_tipo_producto`) VALUES(6, 'Vegetariana');
INSERT INTO `Tipo_producto` (`id_tipo_producto`, `nombre_tipo_producto`) VALUES(7, 'Dulce');
INSERT INTO `Tipo_producto` (`id_tipo_producto`, `nombre_tipo_producto`) VALUES(8, 'Pasteles');
INSERT INTO `Tipo_producto` (`id_tipo_producto`, `nombre_tipo_producto`) VALUES(9, 'Postres');
INSERT INTO `Tipo_producto` (`id_tipo_producto`, `nombre_tipo_producto`) VALUES(10, 'Mexicana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_facebook` varchar(100) NOT NULL,
  `foodpoints` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
