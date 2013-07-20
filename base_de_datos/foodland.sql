-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-07-2013 a las 23:51:08
-- Versión del servidor: 5.1.70-cll
-- Versión de PHP: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `foodland_beta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Local`
--

CREATE TABLE IF NOT EXISTS `Local` (
  `id_local` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_local` varchar(50) NOT NULL,
  `direccion_local` varchar(50) NOT NULL,
  `telefono_local` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lat_local` double NOT NULL,
  `long_local` double NOT NULL,
  `horario_entrada` time DEFAULT NULL,
  `horario_salida` time DEFAULT NULL,
  `horario_entrada_fds` time DEFAULT NULL,
  `horario_salida_fds` time DEFAULT NULL,
  `sitio_referencia` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_local`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `Local`
--

INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`, `horario_entrada`, `horario_salida`, `horario_entrada_fds`, `horario_salida_fds`, `sitio_referencia`) VALUES
(24, 'AKASUSHI', 'palmira romano norte 117,limache', '332414924', 'test@test.cl', -32.983016, -71.273919, NULL, NULL, NULL, NULL, NULL),
(25, 'Sushisun', 'Errazuriz / Nº 801', '2127783', 'quilpue@sushisun.cl', -33.04645, -71.438342, NULL, NULL, NULL, NULL, NULL),
(26, 'Habibi Delli', '5 Norte esquina 3 Poniente ', '0322683752', 'test@test.cl', -33.017975, -71.554567, NULL, NULL, NULL, NULL, NULL),
(27, 'La Mexicana', 'Calle Valparaiso 1137, Viña del Mar', '03223281361', 'lamexicanadelivery@gmail.com', -33.025882, -71.545804, NULL, NULL, NULL, NULL, NULL),
(28, 'Pizza Pizza', '7 norte con San Martin, Viña del mar', '2682020', 'test@test.cl', -33.015391, -71.556182, NULL, NULL, NULL, NULL, NULL),
(29, 'Sushile', 'Quillota 552, viña del mar', '0322688312', 'test@test.cl', -33.017563, -71.546271, NULL, NULL, NULL, NULL, NULL),
(30, 'Burreros', 'Viana 419, Viña del Mar', '03223277356', 'test@test.cl', -33.025313, -71.557188, NULL, NULL, NULL, NULL, NULL),
(31, 'Chau San', '11 norte 733, viña del mar', '0322699671', 'test@test.cl', -33.012307, -71.549054, NULL, NULL, NULL, NULL, NULL),
(32, 'No me olvides', 'Viña del mar', '95997322', 'contacto@nomeolvidespasteleria.cl', 0, 0, NULL, NULL, NULL, NULL, NULL),
(33, 'Mosaico', 'Urmeneta 492, Limache, Marga Marga.', '0332511401', 'mosaicosushi@hotmail.cl', -32.9875, -71.270398, NULL, NULL, NULL, NULL, NULL),
(34, 'Akipe', 'Diego Portales #671 Recreo', '56322118154', 'test@test.cl', -33.026602, -71.570898, NULL, NULL, NULL, NULL, NULL),
(35, 'Oni Sushi', 'Anibal Pinto 902, Quilpué, Chile', '322919570', 'test@test.cl', -33.04781, -71.445361, NULL, NULL, NULL, NULL, NULL),
(36, 'Origami Sushi', 'Irarrázabal 446, Quilpué, Chile', '323189998', 'origami@origamisushi.cl', -33.045409, -71.445585, NULL, NULL, NULL, NULL, NULL),
(37, 'Pizzas Valpo Delivery', 'Tienda virtual ', '53333619', 'test@test.cl', 0, 0, NULL, NULL, NULL, NULL, NULL),
(38, 'Yakata Sushi Delivery', 'Aldunate 1627 local 3, Valparaíso', '322594098', 'test@test.cl', -33.047446, -71.62045, NULL, NULL, NULL, NULL, NULL),
(39, 'Sushi Mono ', 'Av. Marina 132, Viña del Mar', '323281076', 'contactosushimono@gmail.com', -33.021504, -71.560728, NULL, NULL, NULL, NULL, NULL),
(40, 'MÍA PIZZA A LA PIEDRA', 'LA CONCEPCIÓN 416-B, quillota, 2260000 Quillota', '33511184', 'miapizzaalapiedra@hotmail.com', -32.880218, -71.248616, NULL, NULL, NULL, NULL, NULL),
(41, 'Metpizza', 'Av Placeres #392 Valparaiso', '0323271335', 'info@metpizza.cl', -33.036622, -71.595222, NULL, NULL, NULL, NULL, NULL),
(42, 'Fusión Oriental', 'Av. Centenario 1677, Quilpué', '032 2986708', 'contacto@fusionoriental.cl', -33.047306, -71.421565, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Local_sector_entrega`
--

CREATE TABLE IF NOT EXISTS `Local_sector_entrega` (
  `id_sector_entrega` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  PRIMARY KEY (`id_sector_entrega`,`id_local`),
  KEY `local_local_sector_entrega_fk` (`id_local`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Local_sector_entrega`
--

INSERT INTO `Local_sector_entrega` (`id_sector_entrega`, `id_local`) VALUES
(11, 24),
(13, 25),
(8, 26),
(8, 27),
(8, 28),
(8, 29),
(8, 30),
(8, 31),
(8, 32),
(11, 33),
(8, 34),
(13, 35),
(13, 36),
(9, 37),
(9, 38),
(8, 39),
(12, 40),
(8, 41),
(9, 41),
(13, 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Members`
--

CREATE TABLE IF NOT EXISTS `Members` (
  `id_members` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id_members`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Members`
--

INSERT INTO `Members` (`id_members`, `email`, `pass`) VALUES
(1, 'cristian@foodland.cl', '640401e1958f6db1bb8c87047b1066c9'),
(2, 'jonathan@foodland.cl', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE IF NOT EXISTS `Producto` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`) VALUES
(6, '13 piezas de sushi', 4500, '1 avoke sake + 1 california Maki + 2 gyosas', 25, 24, 2),
(7, '32 piezas de sushi', 7900, '1 california Maki, 1 hosomaki, 1 avokado sake, 4 gyosas, 4 camarones tempura.', 18, 24, 2),
(9, 'Tabla 1 Persona (14 piezas)', 4690, '4 Bocados Avocado Kani\n4 Bocados Ebi chesse\n1 Gyosa camarón\n2 Gyosa pollo\n2 Nigiri salmón\n1 Nigiri kanikama', 17, 25, 2),
(10, 'Combinación Dos', 9500, '1 Kita Roll, 1 Tokio, 1 Hosomaki Yasai, 4 Korokke', 13, 35, 2),
(12, 'Combinación Uno', 4900, '1 Tokio, 1 Okinawa', 13, 35, 2),
(15, 'Monterrey', 3790, 'Chicharrón de cerdo guisado con salsa verde y cebolla, aguacate \ny cebolla morada, cilantro y queso. Acompañado de frijoles.', 14, 27, 10),
(16, 'Sushi Vegetariano', 2500, 'Ciboulette, palta, palmito, espárrago', 9, 36, 2),
(17, 'Pizza familiar', 4500, 'Pizza familiar (40 cm diámetro) con base de salsa de tomate, orégano y queso Mozzarella, más 3 ingredientes a elección.', 51, 37, 3),
(18, 'Pizza Dieciochera', 7000, 'Cebolla, orégano, pimentón y extraqueso', 28, 40, 3),
(19, 'Tabla Facebook (50 piezas)', 10990, 'Selección de 50 piezas con diversos ingredientes:\nsalmón, queso crema, ciboulette, palmito, palta, camarón, cebollín\npollo teriyaki, palta.', 46, 38, 2),
(20, 'Tabla Yakata (50 piezas)', 10799, 'Selección de 50 piezas con diversos ingredientes:\ncamarón, cerdo, pollo teriyaki, salmón, creso crema, ciboulette, palta\npalmito.', 56, 38, 2),
(21, 'Tabla Chimp (30 piezas)', 9290, '1 Futomaki Sake Maki, 1 Avocado Tako, 1 Sake kani, 3 Nigiri, 2 Gyosas.', 21, 39, 2),
(22, 'Tabla Kong (50 piezas)', 16400, '1 Hosomaki salmón, 1 Avoca Kani, 1 Sake tako, 1 Tempura chicken roll, 1 Fusión merquén chicken roll, 5 Gyosas, 3 Sashimis, 2 Nigiris.', 34, 39, 2),
(23, ' Peperoni', 10900, 'Queso mozzarella, pepperoni.', 15, 28, 3),
(24, 'Napolitana', 10900, 'Pizza grande de queso mozzarella, tomate.', 14, 28, 3),
(25, 'Tabla 24 unidades', 8500, '9 piezas palta (camarón ap, queso, champiñón salteado),\n9 piezas panko (salmón ahumado, queso, aceituna),\n6 gyosas mixtas', 19, 29, 2),
(27, 'Tabla 36 unidades', 8990, '9 piezas palta (salmón, queso, ciboulette),\n9 piezas sésamo (kanikawa, queso, palta),\n9 piezas nori (Salmón, palta, queso),\n9 piezas nori de vegetales.', 20, 29, 2),
(28, 'Burrito gigante', 3150, 'Tortilla de trigo gigante más dos carnes a elección, más lechuga, tomate, choclo, queso, guacamol,\n aceituna, crema ácida, ciboullete, arroz blanco, cebolla frita, frijol negro.', 64, 30, 10),
(29, 'Burrito vegetariano', 3200, 'Tortilla de trigo gigante más lechuga, tomate, queso, choclo, guacamol, \naceitunas, crema ácida, ciboulette, arroz blanco, cebolla frita, frijol negro.', 45, 30, 10),
(30, 'Menú para 2 Personas', 9900, '1 Wantan \n1 Arrollado de Marisco \n1 Chapsui de Carne \n2 Arroz Chaufán', 20, 31, 1),
(31, 'Menú para 4 Personas', 19500, '1 Wantan \n1 Chapsui de Carne \n1 Arrollado de Marisco\n1 Pollo Pekín \n1 Chapsui Especial \n4 Arroz Chaufán', 15, 31, 1),
(32, 'Torta Brownie', 15000, 'Torta para 10 personas: Biscocho brownie, relleno de manjar y ganache (truffa), bañada en chocolate.', 26, 32, 8),
(33, 'Torta Tres Leches de Coco', 14800, 'Torta para 10 personas: Biscocho de vainilla, remojado con diversos tipos de leche y cremas.\nRellena de manjar, crema pastelera y coco molido grueso.', 47, 32, 8),
(34, 'Torta Amor', 14500, '\nTorta para 10 personas: Discos de hojarasca, rellenos con manjar, crema chantilly \ny mermelada de frambuesas, decorada con crema chantilly y frutillas.', 20, 32, 8),
(35, 'Torta Hojarasca', 17000, 'Para 10 personas, Discos de hojarasca, rellenos con hasta 3 ingredientes a elección: crema pastelera, manjar, \nmermelada de frambuesa, mermelada de durazno, mermelada de damasco. Saborizados con sucralosa.', 18, 32, 8),
(36, 'Pizza Margherita Familiar', 5290, 'Tomate, Queso y albaca', 61, 41, 3),
(37, 'PROMOCION Pizza cuatro stagioni /Familiar', 8000, 'Gauda, Parmesano, Roquefor, Emmental. Todo esto más bebida de 1,5 Litros', 37, 41, 3),
(38, 'Pizza Valdostana', 6900, 'Tomate, Queso, Jamón, Huevo, Queso Parmesano', 13, 41, 3),
(39, 'Pizza Primavera familiar', 7800, 'Cherry, Queso, Choclo, Rúcula, Pesto, Palta', 27, 41, 3),
(40, 'Fansí Especial', 4100, 'Fideos de arroz salteados con camarones, carne de vacuno y pollo.', 9, 42, 1),
(41, 'Calamar Yangse', 4300, 'Anillos de calamar rebozados y fritos', 10, 42, 1),
(42, 'Parrillada China', 4900, 'Salteado triple carne: de vacuno, pollo y cerdo, algas chinas, champiñones, ajo, pimiento, cebolla y cebollín', 33, 42, 1),
(44, 'Tabla Hot', 7000, '9 piezas de camarón, queso crema, palta en panko,\n 9 piezas de salmón, queso crema, cebollín, en tempura,\n 6 hosomakis de salmón, en tempura', 18, 38, 2),
(45, 'Sashimi Sake', 3800, '6 cortes de salmón fresco.', 12, 35, 2),
(46, 'Papas Rellenas', 1490, 'Papa prensada condimentada con ají amarillo, limón, sal y pimienta, \nrellena de suave pino en base a carne.', 13, 34, 11),
(47, 'Ají de Gallina', 4290, 'Ají de Gallina Típica preparación peruana en base a salsa de ají amarillo, queso de cabra, \nleche evaporada y especies, acompañado de arroz blanco.', 13, 34, 11),
(48, 'Arroz Chaufa AKIPE', 6410, 'Arroz condimentado con especies orientales, pimentones, cebollines, \ntrozos de tortilla de huevo, salteado en salsa de soya, junto con trozos de pollo, camarón, calamar y ostiones.', 15, 34, 1),
(50, 'Pizza Cheff Lorenzo mediana', 5900, 'Salsa Blanca, Tocino, Champiniones, Cebolla, Queso Cheddar, Queso Parmesano', 30, 41, 3),
(51, 'Pizza Quatro Formagi Grande', 7000, 'Gauda, Parmesano, Roquefor, Emmental', 12, 41, 3),
(52, 'PIzza Mare e monti / Familiar', 7700, 'Tomate, Queso, Callampas, Camarón', 12, 41, 3),
(53, 'Pizza americana / Familiar', 6500, 'Tomate,Queso, Carne Molida, Elemmental', 28, 41, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sector_entrega`
--

CREATE TABLE IF NOT EXISTS `Sector_entrega` (
  `id_sector_entrega` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_sector_entrega` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sector_entrega`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `Sector_entrega`
--

INSERT INTO `Sector_entrega` (`id_sector_entrega`, `nombre_sector_entrega`) VALUES
(8, 'Viña del Mar'),
(9, 'Valparaíso'),
(11, 'Limache'),
(12, 'Quillota'),
(13, 'Quilpué');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_producto`
--

CREATE TABLE IF NOT EXISTS `Tipo_producto` (
  `id_tipo_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_producto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipo_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `Tipo_producto`
--

INSERT INTO `Tipo_producto` (`id_tipo_producto`, `nombre_tipo_producto`) VALUES
(1, 'Comida China'),
(2, 'Sushi'),
(3, 'Pizza'),
(4, 'Comida Arabe'),
(5, 'Sandwich'),
(6, 'Vegetariana'),
(7, 'Dulce'),
(8, 'Pasteles'),
(9, 'Postres'),
(10, 'Mexicana'),
(11, 'Comida casera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_facebook` varchar(100) NOT NULL,
  `foodpoints` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
