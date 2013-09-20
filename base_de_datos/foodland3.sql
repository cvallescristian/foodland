-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-09-2013 a las 22:01:34
-- Versión del servidor: 5.5.32-cll
-- Versión de PHP: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `Amigos_facebook`
--

CREATE TABLE IF NOT EXISTS `Amigos_facebook` (
  `id_usuario_1` int(11) NOT NULL,
  `id_usuario_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cont_visita`
--

CREATE TABLE IF NOT EXISTS `Cont_visita` (
  `id_producto` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `visita` int(11) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `id_local` int(11) NOT NULL,
  KEY `id_producto` (`id_producto`),
  KEY `id_local` (`id_local`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Cont_visita`
--

INSERT INTO `Cont_visita` (`id_producto`, `fecha`, `visita`, `dia`, `id_local`) VALUES
(42, '2013-08-08', 2, 'Thu', 42),
(25, '2013-08-08', 1, 'Thu', 29),
(7, '2013-08-08', 1, 'Thu', 24),
(40, '2013-08-08', 1, 'Thu', 42),
(20, '2013-08-08', 1, 'Thu', 38),
(29, '2013-08-08', 1, 'Thu', 30),
(69, '2013-08-08', 1, 'Thu', 45),
(17, '2013-08-08', 1, 'Thu', 37),
(9, '2013-08-08', 1, 'Thu', 25),
(61, '2013-08-08', 3, 'Thu', 43),
(48, '2013-08-08', 1, 'Thu', 34),
(59, '2013-08-08', 1, 'Thu', 43),
(22, '2013-08-09', 1, 'Fri', 39),
(50, '2013-08-09', 1, 'Fri', 41),
(19, '2013-08-09', 1, 'Fri', 38),
(27, '2013-08-09', 1, 'Fri', 29),
(34, '2013-08-09', 1, 'Fri', 32),
(10, '2013-08-09', 1, 'Fri', 35),
(35, '2013-08-09', 1, 'Fri', 32),
(33, '2013-08-11', 1, 'Sun', 32),
(76, '2013-08-11', 1, 'Sun', 32),
(16, '2013-08-11', 1, 'Sun', 36),
(51, '2013-08-11', 1, 'Sun', 41),
(31, '2013-08-12', 1, 'Mon', 31),
(53, '2013-08-12', 1, 'Mon', 41),
(30, '2013-08-12', 1, 'Mon', 31),
(15, '2013-08-12', 1, 'Mon', 27),
(83, '2013-08-13', 1, 'Tue', 27),
(84, '2013-08-13', 1, 'Tue', 27),
(38, '2013-08-13', 1, 'Tue', 41),
(85, '2013-08-13', 1, 'Tue', 27),
(52, '2013-08-14', 1, 'Wed', 41),
(64, '2013-08-14', 1, 'Wed', 36),
(12, '2013-08-14', 1, 'Wed', 35),
(61, '2013-08-14', 1, 'Wed', 43),
(57, '2013-08-14', 1, 'Wed', 35),
(39, '2013-08-14', 1, 'Wed', 41),
(47, '2013-08-14', 1, 'Wed', 34),
(30, '2013-08-14', 1, 'Wed', 31),
(38, '2013-08-15', 1, 'Thu', 41),
(62, '2013-08-15', 2, 'Thu', 36),
(16, '2013-08-15', 2, 'Thu', 36),
(42, '2013-08-15', 1, 'Thu', 42),
(18, '2013-08-16', 3, 'Fri', 40),
(21, '2013-08-16', 1, 'Fri', 39),
(36, '2013-08-16', 1, 'Fri', 41),
(28, '2013-08-16', 1, 'Fri', 30),
(38, '2013-08-16', 1, 'Fri', 41),
(79, '2013-08-16', 1, 'Fri', 48),
(78, '2013-08-16', 1, 'Fri', 48),
(72, '2013-08-17', 1, 'Sat', 46),
(50, '2013-08-17', 1, 'Sat', 41),
(32, '2013-08-17', 1, 'Sat', 32),
(37, '2013-08-18', 1, 'Sun', 41),
(51, '2013-08-18', 1, 'Sun', 41),
(6, '2013-08-18', 1, 'Sun', 24),
(60, '2013-08-18', 1, 'Sun', 35),
(77, '2013-08-18', 1, 'Sun', 32),
(68, '2013-08-18', 1, 'Sun', 44),
(48, '2013-08-19', 1, 'Mon', 34),
(44, '2013-08-19', 1, 'Mon', 38),
(46, '2013-08-20', 1, 'Tue', 34),
(28, '2013-08-22', 1, 'Thu', 30),
(25, '2013-08-22', 1, 'Thu', 29),
(52, '2013-08-22', 1, 'Thu', 41),
(6, '2013-08-22', 1, 'Thu', 24),
(41, '2013-08-23', 1, 'Fri', 42),
(45, '2013-08-23', 1, 'Fri', 35),
(73, '2013-08-23', 1, 'Fri', 46),
(38, '2013-08-24', 1, 'Sat', 41),
(40, '2013-08-24', 1, 'Sat', 42),
(46, '2013-08-24', 1, 'Sat', 34),
(39, '2013-08-25', 1, 'Sun', 41),
(82, '2013-08-25', 1, 'Sun', 48),
(65, '2013-08-25', 1, 'Sun', 36),
(66, '2013-08-26', 1, 'Mon', 44),
(56, '2013-08-26', 1, 'Mon', 43),
(63, '2013-08-26', 1, 'Mon', 36),
(63, '2013-08-28', 1, 'Wed', 36),
(41, '2013-08-29', 1, 'Thu', 42),
(64, '2013-08-30', 1, 'Fri', 36),
(54, '2013-08-30', 1, 'Fri', 35),
(55, '2013-08-31', 1, 'Sat', 43),
(72, '2013-08-31', 1, 'Sat', 46),
(74, '2013-08-31', 1, 'Sat', 32),
(75, '2013-08-31', 1, 'Sat', 32),
(79, '2013-08-31', 1, 'Sat', 48),
(62, '2013-08-31', 1, 'Sat', 36),
(63, '2013-08-31', 1, 'Sat', 36),
(70, '2013-08-31', 1, 'Sat', 47),
(80, '2013-08-31', 1, 'Sat', 48),
(78, '2013-08-31', 1, 'Sat', 48),
(81, '2013-09-01', 1, 'Sun', 48),
(61, '2013-09-03', 1, 'Tue', 43),
(17, '2013-09-04', 1, 'Wed', 37),
(59, '2013-09-04', 1, 'Wed', 43),
(47, '2013-09-04', 1, 'Wed', 34),
(74, '2013-09-05', 1, 'Thu', 32),
(69, '2013-09-05', 1, 'Thu', 45),
(78, '2013-09-05', 1, 'Thu', 48),
(7, '2013-09-06', 2, 'Fri', 24),
(72, '2013-09-06', 1, 'Fri', 46),
(42, '2013-09-06', 1, 'Fri', 42),
(39, '2013-09-06', 1, 'Fri', 41),
(58, '2013-09-07', 1, 'Sat', 35),
(72, '2013-09-07', 1, 'Sat', 46),
(48, '2013-09-10', 1, 'Tue', 34),
(31, '2013-09-10', 1, 'Tue', 31),
(86, '2013-09-10', 1, 'Tue', 51),
(46, '2013-09-10', 1, 'Tue', 34),
(38, '2013-09-10', 1, 'Tue', 41),
(42, '2013-09-10', 1, 'Tue', 42),
(50, '2013-09-11', 1, 'Wed', 41),
(82, '2013-09-12', 1, 'Thu', 48);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Local`
--

CREATE TABLE IF NOT EXISTS `Local` (
  `id_local` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_local` varchar(50) NOT NULL,
  `direccion_local` varchar(100) NOT NULL,
  `telefono_local` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lat_local` double NOT NULL,
  `long_local` double NOT NULL,
  `horario_entrada` time DEFAULT NULL,
  `horario_salida` time DEFAULT NULL,
  `horario_entrada_fds` time DEFAULT NULL,
  `horario_salida_fds` time DEFAULT NULL,
  `descrip_adicional` varchar(500) NOT NULL,
  `sitio_referencia` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_local`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Volcado de datos para la tabla `Local`
--

INSERT INTO `Local` (`id_local`, `nombre_local`, `direccion_local`, `telefono_local`, `email`, `lat_local`, `long_local`, `horario_entrada`, `horario_salida`, `horario_entrada_fds`, `horario_salida_fds`, `descrip_adicional`, `sitio_referencia`) VALUES
(24, 'Ak-Sushi', 'Palmira Romano Norte 117, Limache', '332414924', 'test@test.cl', -32.983016, -71.273919, '12:00:00', '23:00:00', '12:00:00', '15:30:00', '', 'http://www.aksushi.supersitio.net'),
(25, 'Sushisun', 'Errazuriz 801, Quilpué', '2127783', 'quilpue@sushisun.cl', -33.04645, -71.438342, '18:30:00', '23:00:00', '18:30:00', '22:30:00', '', 'http://www.sushisun.cl'),
(27, 'La Mexicana', 'Valparaiso 1137, Viña del Mar', '03223281361', 'lamexicanadelivery@gmail.com', -33.025882, -71.545804, '12:30:00', '22:00:00', '12:30:00', '22:00:00', '', 'http://www.facebook.com/Lamexicanachile'),
(29, 'Sushile', 'Quillota 552, Viña del Mar', '0322688312', 'sushile.delivery@gmail.com', -33.017563, -71.546271, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', 'http://www.sushiledelivery.cl'),
(30, 'Burreros', 'Viana 419, Viña del Mar', '03223277356', 'test@test.cl', -33.025313, -71.557188, '12:00:00', '21:30:00', '12:00:00', '21:30:00', '', 'http://https://www.facebook.com/burreros'),
(31, 'Chau San', '11 Norte 733, Viña del Mar', '0322699671', 'test@test.cl', -33.012307, -71.549054, '12:30:00', '23:00:00', '12:30:00', '16:30:00', '', 'http://http://www.chausan.cl/'),
(32, 'No me olvides', 'Callao 260, Viña del Mar', '95997322', 'contacto@nomeolvidespasteleria.cl', -33.021241, -71.564151, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', 'http://www.nomeolvidespasteleria.cl'),
(33, 'Mosaico', 'Urmeneta 492, Limache', '0332511401', 'mosaicosushi@hotmail.cl', -32.9875, -71.270398, '12:30:00', '22:30:00', '12:30:00', '22:00:00', '', 'http://www.facebook.com/pages/Mosaico-Sushi-Delivery/257244644323136'),
(34, 'Akipe', 'Diego Portales 671, Viña del Mar', '56322118154', 'test@test.cl', -33.026602, -71.570898, '12:00:00', '22:30:00', '12:00:00', '15:30:00', '', 'http://http://www.akipe.cl/'),
(35, 'Oni Sushi', 'Anibal Pinto 902, Quilpué', '322919570', 'test@test.cl', -33.04781, -71.445361, '13:00:00', '00:00:00', '16:00:00', '23:00:00', '', 'http://onisushi.cl/'),
(36, 'Origami Sushi', 'Irarrázabal 446, Quilpué', '323189998', 'origami@origamisushi.cl', -33.045409, -71.445585, '12:00:00', '23:30:00', '12:00:00', '23:30:00', '', 'http://http://www.origamisushi.cl'),
(37, 'Pizzas Valpo Delivery', 'Independencia 2662, Valparaiso', '53333619', 'dmaraboli6@gmail.com', -33.049618, -71.608567, NULL, NULL, NULL, NULL, '', NULL),
(38, 'Yakata Sushi Delivery', 'Aldunate 1627 local 3, Valparaíso', '322594098', 'test@test.cl', -33.047446, -71.62045, NULL, NULL, NULL, NULL, '', NULL),
(39, 'Sushi Mono ', 'Av. Marina 132, Viña del Mar', '323281076', 'contactosushimono@gmail.com', -33.021504, -71.560728, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', 'http://www.sushimono.cl'),
(40, 'Mía Pizza a La Piedra', 'La Concepción 416-B, Quillota', '33511184', 'miapizzaalapiedra@hotmail.com', -32.880218, -71.248616, '13:00:00', '22:30:00', '19:00:00', '00:00:00', '', 'http://www.facebook.com/pages/M%C3%8DA-PIZZA-A-LA-PIEDRA-QUILLOTA/178620932217509?fref=ts'),
(41, 'Metpizza', 'Av Placeres 392, Valparaiso', '0323271335', 'info@metpizza.cl', -33.036622, -71.595222, '09:00:00', '00:00:00', '19:00:00', '01:00:00', '', 'http://www.metpizza.cl'),
(42, 'Fusión Oriental', 'Av. Centenario 1677, Quilpué', '2986708', 'contacto@fusionoriental.cl', -33.047306, -71.421565, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', 'http://http://fusionoriental.cl'),
(43, 'La Cafetera', '7 Norte 1036, Viña del Mar', '322683029', 'test@test.cl', -33.016626, -71.540717, '12:00:00', '15:00:00', '00:00:00', '00:00:00', '', 'http://lacafeteradelivery.cl'),
(44, 'Rainbow sushi', '10 Norte 1117, Viña del Mar', '323174322', 'ceciliaaguilar@rainbowsushi.cl', -33.013864, -71.544612, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', 'http://www.rainbowsushi.cl'),
(45, 'Fukushima Atomic Sushi Bar', 'Ecuador 61, Viña del Mar', '323279113', 'fukushimasushi@gmail.com', -33.022311, -71.561242, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', 'http://www.facebook.com/pages/Fukushima-Atomic-Sushi-Bar/159280494140914'),
(46, 'Puerto Rolls', 'Cochrane #558, Valparaíso', '322591509', 'puertorolls@gmail.com', -33.037845, -71.629145, '12:00:00', '03:00:00', '12:00:00', '00:30:00', '', 'http://www.sushipuertorolls.cl'),
(47, 'Jarolus Pizza', 'Av. Marina 102 local 2, Viña del Mar', '322685928', 'test@test.cl', -33.021133, -71.56107, '20:30:00', '23:30:00', '19:30:00', '23:30:00', '', 'http://www.facebook.com/jarolus.pizza'),
(48, 'Sushimixu', 'Independencia 2662 local 2, Valparaiso', '2213638', 'juan.gonzalezz@hotmail.cl', -33.049618, -71.608567, '12:00:00', '23:00:00', '12:00:00', '21:00:00', '', 'http://www.facebook.com/sushimixu.valparaiso.9'),
(49, 'Sushi Ya', 'Calle Extremadura #55 local N°4, Gómez Carreño, Viña del Mar', '0322866941', 'contacto@tusushiya.cl', 0, 0, '13:30:00', '23:30:00', '13:00:00', '22:30:00', '', 'http://www.tusushiya.cl'),
(50, 'Delicias Delivery', 'Gomez Carreño, Viña del Mar', '0322891890', 'test@test.cl', 0, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '', 'http://https://www.facebook.com/delicias.delivery.46'),
(51, 'Mamoka sushi delivery ', 'Etchevers 185, local 64  Viña del Mar,  Región de Valparaíso', '32691083', 'momokasushi@gmail.com', 0, 0, '12:00:00', '22:30:00', '12:00:00', '22:30:00', '', 'http://http://www.momokasushi.cl'),
(52, 'Sabor del pacífico', 'valparaiso', '323124515', 'test@test.cl', 0, 0, '12:00:00', '16:30:00', '12:30:00', '22:00:00', '', 'http://https://www.facebook.com/SaborDelPacifico');

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
(8, 25),
(12, 25),
(13, 25),
(8, 27),
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
(13, 42),
(8, 43),
(8, 44),
(8, 45),
(9, 46),
(8, 47),
(9, 48),
(8, 49);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Local_subsector_entrega`
--

CREATE TABLE IF NOT EXISTS `Local_subsector_entrega` (
  `id_subsector_entrega` int(11) NOT NULL,
  `id_local` int(11) NOT NULL,
  KEY `id_local` (`id_local`),
  KEY `id_subsector_entrega` (`id_subsector_entrega`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Local_subsector_entrega`
--

INSERT INTO `Local_subsector_entrega` (`id_subsector_entrega`, `id_local`) VALUES
(13, 25),
(13, 34),
(13, 39),
(7, 27),
(7, 29),
(7, 30),
(7, 31),
(7, 32),
(7, 34),
(7, 34),
(7, 43),
(7, 44),
(7, 45),
(7, 47),
(16, 30),
(16, 39),
(16, 45),
(16, 47),
(26, 49),
(29, 49),
(12, 34),
(12, 47),
(12, 48),
(16, 46),
(16, 49),
(3, 37),
(3, 38),
(3, 46),
(3, 48),
(5, 33),
(6, 25),
(6, 35),
(6, 36),
(6, 42),
(17, 42),
(10, 36),
(10, 42),
(14, 36),
(14, 42),
(30, 42),
(23, 42),
(32, 42),
(38, 36),
(38, 42),
(4, 36),
(4, 42),
(6, 25),
(6, 40),
(7, 41),
(13, 41),
(16, 41),
(3, 41),
(12, 41),
(15, 41),
(7, 24),
(2, 50),
(7, 50),
(9, 50),
(13, 50),
(16, 50),
(22, 50),
(24, 50),
(26, 50),
(3, 50),
(12, 50),
(15, 50),
(18, 50),
(21, 50),
(2, 51),
(7, 51),
(9, 51),
(13, 51),
(16, 51),
(2, 52),
(7, 52),
(13, 52),
(16, 52),
(22, 52),
(24, 52),
(3, 52),
(8, 52),
(12, 52),
(15, 52),
(18, 52),
(21, 52);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Members`
--

CREATE TABLE IF NOT EXISTS `Members` (
  `id_members` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id_members`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `Members`
--

INSERT INTO `Members` (`id_members`, `email`, `pass`) VALUES
(1, 'cristian@foodland.cl', '640401e1958f6db1bb8c87047b1066c9'),
(2, 'jonathan@foodland.cl', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'diego@foodland.cl', 'c5453379ec2e095b83c83d6810914618'),
(5, 'carlos@foodland.cl', '1733e32b7de96e93cc13666f847190a3'),
(6, 'rebeca@foodland.cl', '7ed4a37ef67b10e054fa58e059d90943');

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
  `numero_personas` int(11) NOT NULL,
  `promocion_producto` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `tipo_prodducto_producto_fk` (`id_tipo_producto`),
  KEY `local_producto_fk` (`id_local`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`id_producto`, `titulo_producto`, `precio`, `descrip_producto`, `cant_visitas`, `id_local`, `id_tipo_producto`, `numero_personas`, `promocion_producto`) VALUES
(6, '18 piezas de sushi', 4500, '1 avocado sake, 1 california maki, 2 gyosas', 65, 24, 2, 2, 0),
(7, '32 piezas de sushi', 7900, '1 california maki, 1 hosomaki, 1 avocado sake, 4 gyosas, 4 camarones tempura.', 54, 24, 2, 3, 0),
(9, 'Tabla 1 Persona (14 piezas)', 4690, '4 Bocados Avocado Kani\n4 Bocados Ebi chesse\n1 Gyosa camarón\n2 Gyosa pollo\n2 Nigiri salmón\n1 Nigiri kanikama', 65, 25, 2, 2, 0),
(10, 'Combinación Dos', 9500, '1 Kita Roll, 1 Tokio, 1 Hosomaki Yasai, 4 Korokke', 40, 35, 2, 3, 0),
(12, 'Combinación Uno', 4900, '1 Tokio (kanikama, palta, queso crema), 1 Okinawa (kamikama, queso crema, pepino)', 33, 35, 2, 2, 0),
(15, 'Monterrey', 3790, 'Chicharrón de cerdo guisado con salsa verde y cebolla, aguacate \ny cebolla morada, cilantro y queso. Acompañado de frijoles.', 45, 27, 10, 1, 0),
(16, 'Sushi Vegetariano', 2500, 'Ciboulette, palta, palmito, espárrago', 72, 36, 2, 1, 0),
(17, 'Pizza familiar', 4500, 'Pizza familiar (40 cm diámetro) con base de salsa de tomate, orégano y queso Mozzarella, más 3 ingredientes a elección.', 132, 37, 3, 4, 0),
(18, 'Pizza Dieciochera', 7000, 'Cebolla, orégano, pimentón y extraqueso', 68, 40, 3, 4, 0),
(19, 'Tabla Facebook (50 piezas)', 10990, 'Selección de 50 piezas con diversos ingredientes:\nsalmón, queso crema, ciboulette, palmito, palta, camarón, cebollín\npollo teriyaki, palta.', 82, 38, 2, 5, 0),
(20, 'Tabla Yakata (50 piezas)', 10799, 'Selección de 50 piezas con diversos ingredientes:\ncamarón, cerdo, pollo teriyaki, salmón, creso crema, ciboulette, palta\npalmito.', 93, 38, 2, 5, 0),
(21, 'Tabla Chimp (30 piezas)', 9290, '1 Futomaki Sake Maki, 1 Avocado Tako, 1 Sake kani, 3 Nigiri, 2 Gyosas.', 56, 39, 2, 3, 0),
(22, 'Tabla Kong (50 piezas)', 16400, '1 Hosomaki salmón, 1 Avoca Kani, 1 Sake tako, 1 Tempura chicken roll, 1 Fusión merquén chicken roll, 5 Gyosas, 3 Sashimis, 2 Nigiris.', 61, 39, 2, 5, 0),
(25, 'Tabla 24 unidades', 8500, '9 piezas palta (camarón ap, queso, champiñón salteado),\n9 piezas panko (salmón ahumado, queso, aceituna),\n6 gyosas mixtas', 48, 29, 2, 2, 0),
(27, 'Tabla 36 unidades', 8990, '9 piezas palta (salmón, queso, ciboulette),\n9 piezas sésamo (kanikawa, queso, palta),\n9 piezas nori (Salmón, palta, queso),\n9 piezas nori de vegetales.', 80, 29, 2, 4, 0),
(28, 'Burrito gigante', 3150, 'Tortilla de trigo gigante más dos carnes a elección, más lechuga, tomate, choclo, queso, guacamol,\n aceituna, crema ácida, ciboullete, arroz blanco, cebolla frita, frijol negro.', 110, 30, 10, 1, 0),
(29, 'Burrito vegetariano', 3200, 'Tortilla de trigo gigante más lechuga, tomate, queso, choclo, guacamol, \naceitunas, crema ácida, ciboulette, arroz blanco, cebolla frita, frijol negro.', 87, 30, 10, 1, 0),
(30, 'Menú para 2 Personas', 9900, '1 Wantan \n1 Arrollado de Marisco \n1 Chapsui de Carne \n2 Arroz Chaufán', 67, 31, 1, 2, 0),
(31, 'Menú para 4 Personas', 19500, '1 Wantan \n1 Chapsui de Carne \n1 Arrollado de Marisco\n1 Pollo Pekín \n1 Chapsui Especial \n4 Arroz Chaufán', 46, 31, 1, 4, 0),
(32, 'Torta Brownie', 15000, 'Torta para 10 personas: Biscocho brownie, relleno de manjar y ganache (truffa), bañada en chocolate.', 66, 32, 8, 10, 0),
(33, 'Torta Tres Leches de Coco', 14800, 'Torta para 10 personas: Biscocho de vainilla, remojado con diversos tipos de leche y cremas.\nRellena de manjar, crema pastelera y coco molido grueso.', 73, 32, 8, 10, 0),
(34, 'Torta Amor', 14500, 'Torta para 10 personas: Discos de hojarasca, rellenos con manjar, crema chantilly \ny mermelada de frambuesas, decorada con crema chantilly y frutillas.', 73, 32, 8, 10, 0),
(35, 'Torta Hojarasca', 17000, 'Para 10 personas, Discos de hojarasca, rellenos con hasta 3 ingredientes a elección: crema pastelera, manjar, \nmermelada de frambuesa, mermelada de durazno, mermelada de damasco. Saborizados con sucralosa.', 80, 32, 8, 10, 0),
(36, 'Pizza Margherita Familiar', 5290, 'Tomate, Queso y albaca', 158, 41, 3, 4, 0),
(37, 'Pizza Cuatro Stagioni Familiar', 8000, 'Gauda, Parmesano, Roquefor, Emmental. Todo esto más bebida de 1,5 Litros', 99, 41, 3, 4, 0),
(38, 'Pizza Valdostana Familiar', 6900, 'Tomate, Queso, Jamón, Huevo, Queso Parmesano', 96, 41, 3, 4, 0),
(39, 'Pizza Primavera familiar', 7800, 'Cherry, Queso, Choclo, Rúcula, Pesto, Palta', 65, 41, 3, 4, 0),
(40, 'Fansí Especial', 4100, 'Fideos de arroz salteados con camarones, carne de vacuno y pollo.', 99, 42, 1, 1, 0),
(41, 'Calamar Yangse', 4300, 'Anillos de calamar rebozados y fritos', 54, 42, 1, 1, 0),
(42, 'Parrillada China', 4900, 'Salteado triple carne: de vacuno, pollo y cerdo, algas chinas, champiñones, ajo, pimiento, cebolla y cebollín', 112, 42, 1, 1, 0),
(44, 'Tabla Hot', 7000, '9 piezas de camarón, queso crema, palta en panko, 9 piezas de salmón, queso crema, cebollín, en tempura, 6 hosomakis de salmón, en tempura', 42, 38, 2, 2, 0),
(45, 'Sashimi Sake', 3800, '6 cortes de salmón fresco.', 32, 35, 2, 1, 0),
(46, 'Papas Rellenas', 1490, 'Papa prensada condimentada con ají amarillo, limón, sal y pimienta, \nrellena de suave pino en base a carne.', 57, 34, 11, 1, 0),
(47, 'Ají de Gallina', 4290, 'Ají de Gallina Típica preparación peruana en base a salsa de ají amarillo, queso de cabra, \nleche evaporada y especies, acompañado de arroz blanco.', 46, 34, 11, 1, 0),
(48, 'Arroz Chaufa AKIPE', 6410, 'Arroz condimentado con especies orientales, pimentones, cebollines, \ntrozos de tortilla de huevo, salteado en salsa de soya, junto con trozos de pollo, camarón, calamar y ostiones.', 86, 34, 1, 1, 0),
(50, 'Pizza Cheff Lorenzo Familiar', 8200, 'Salsa Blanca, Tocino, Champiniones, Cebolla, Queso Cheddar, Queso Parmesano', 109, 41, 3, 4, 0),
(51, 'Pizza Quatro Formagi Familiar', 7000, 'Gauda, Parmesano, Roquefor, Emmental', 64, 41, 3, 4, 0),
(52, 'PIzza Mare e Monti Familiar', 7700, 'Tomate, Queso, Callampas, Camarón', 66, 41, 3, 4, 0),
(53, 'Pizza Americana Familiar', 6500, 'Tomate,Queso, Carne Molida, Elemmental', 83, 41, 3, 4, 0),
(54, 'Combinación Dos Especial', 10900, '33 unidades: \n1 California Roll, 1 Hosomaki salmón – palta,\n1 Oita Roll, 6 Gyosas mixtas', 18, 35, 2, 3, 0),
(55, 'Pollo o chuleta arvejada', 2500, 'Pollo o chuleta arvejada con agregado más ensalada y pan', 38, 43, 11, 1, 0),
(56, 'Pollo con papas fritas', 2500, 'Pollo con papas fritas más ensalada y pan', 27, 43, 11, 1, 0),
(57, 'Combinación Tres', 12500, '39 unidades\n1 Miyagui Roll, 1 Avocado Roll, 1 Tempura Cheese Maki, \n6 Nigiri del chef, 6 Gyosas mixtas', 18, 35, 2, 4, 0),
(58, 'Combinación Cuatro', 16900, '53 unidades\n1 Miyagi Roll, 1 Tokio, 1 Kitta Roll,\n1 Hosomaki Yasai, 1 Tempura Cheese Maki,\n4 Nigiri del chef, 4 Gyosas mixtas', 16, 35, 2, 5, 0),
(59, '2 Completos Italianos', 2150, '2 Completos Italianos más bebida de medio litro', 62, 43, 11, 1, 0),
(60, 'Combinación Oni', 38900, '96 unidades\n1 Avocado Roll, 1 California Roll, 1 Miyagi Roll, 1 Aperitif Roll, \n1 California Ebi, 1 Nori Roll, 1 Tempura Cheese Maki, 1 Oita, 12 Gyosas, 12 cortes de Sashimi', 20, 35, 2, 10, 0),
(61, 'Chacarero con o sin ají verde', 2500, 'Rico pan amasado, acompañado de una deliciosa mayonesa casera elaborada con huevos pasteurizados en sus variedades Churrasco italiano y\nLomito Italiano, más bebida mini CCU', 45, 43, 11, 1, 0),
(62, 'Florencia Roll', 5000, 'Rolls envueltos en frutilla, camarones apanados, queso crema, ciboulette ', 27, 36, 2, 1, 0),
(63, 'Tabla Los Carrera', 4900, '(18 piezas)\n1 Sake cheese, 1 Sake maki, 1 Niguiri Kanikama', 35, 36, 2, 2, 0),
(64, 'Yakuza Roll', 5000, 'Rolls envueltos en pescado agridulce y tempura, relleno: camarón, queso crema, palta 	', 25, 36, 2, 1, 0),
(65, 'Nigiri', 4000, '8 unidades de bolitas de arroz cubierta de salmón', 30, 36, 2, 1, 0),
(66, 'Rainbow Mix', 4000, '3 Arrollados Primavera\n3 Wantan de Salmón\n3 Gyosas (cerdo, camarón, pollo o carne)\n3 Nugget (pollo, salmón o camarón)', 17, 44, 2, 2, 0),
(68, 'Tabla para 4  personas', 17900, '46 piezas a elección más 1 bebida:\n8 cortes de California Roll\n8 cortes de Avocado Roll\n8 cortes de Sake Roll\n16 cortes de Hosomaki Roll\n6 cortes de Sashimi\n1 bebida 2,5 litros', 23, 44, 2, 4, 0),
(69, 'Promoción Tabla Sushi', 5000, '-10 Pollo Tempura\n-9 California Camarón Furai\n-6 Hosomaki Kanikama', 71, 45, 2, 2, 0),
(70, 'Pizza Mediana', 4800, 'Pizza para 2 o 3 personas, con base de salsa de tomate y queso, más 3 ingredientes', 40, 47, 3, 3, 0),
(72, 'Tabla 4  (40 Cortes)', 8000, '-10 Avocado Rolls Salmón\n(Envueltos en palta, rellenos con salmón, queso crema y cebollín)\n-10 Hot Rolls Camarón\n(Apanados en panko, rellenos con camarón, queso crema y cebollín)\n-10 California Rolls Sésamo Kanikama\n(Envueltos en sésamo, rellenos con kanikama, queso crema y pimentón)\n-10 Mono Maki R', 42, 46, 2, 4, 0),
(73, 'Tabla 5 (50 Cortes)', 10000, '-10 Avocado Rolls Salmón\n(Envueltos en palta, rellenos con salmón, queso crema y cebollín)\n\n-10 California Rolls Ciboulette Pollo\n(Envueltos en ciboulette, rellenos con pollo teriyaki, palta y queso\ncrema)\n\n-10 California Rolls Kanikama (Rellenos con kanikama, queso crema y pimentón)\n\n-10 Hot Rolls ', 32, 46, 2, 5, 0),
(74, 'Torta de panqueque Nuez ', 16500, 'Discos de panqueque de vainilla, rellenos de manjar y nuez molida.\n\n10 personas a $16.500\n15 personas a $19.800\n20 personas a $24.400 ', 24, 32, 8, 10, 0),
(75, 'Tarta de limón', 8800, 'Base de galletas de chocolate, rellena con crema de limón y decorada cáscara de limón confitada.', 19, 32, 8, 8, 0),
(76, 'Streussel de Frambuesas', 8800, 'Briseé rellena de crema pastelera, frambuesas y cubierta con crumble', 18, 32, 8, 8, 0),
(77, 'Cheesecake de Berries', 18000, 'Base de galletas, cubiertas por el tradicional relleno de queso crema y berries, coronado con salas de frambuesa.', 16, 32, 8, 10, 0),
(78, 'Tabla de 50 cortes', 9990, '1- avocado\n1- cream cheese\n1- california\n1- tempura \n1- hosomaki\n5- gyosas', 65, 48, 2, 5, 0),
(79, 'tabla 1 (25 piezas)', 4990, '10 California sésamo, 10 california ciboulette, 5 Cream Chesse', 35, 48, 2, 3, 0),
(80, 'Tabla hot 26 piezas', 7490, '10 tempuras \n10 pankos \n6 guosas', 41, 48, 2, 3, 0),
(81, 'Colación', 1990, '10 california', 31, 48, 2, 1, 0),
(82, 'Tabla 6 (70 piezas)', 14990, '10 avocados (kanikama, queso, cebollin)\n10 cream cheese (salmon, palta, cebollin)\n10 california (camaron, queso, palta)\n10 california (pollo, queso, cebollin)\n10 tempura (pollo, queso, cebollin)\n10 futomaki vegetariano\n6 gyosas\n4 niguiris', 39, 48, 2, 7, 0),
(83, 'El Pollo Regio', 8990, 'Trocitos de pechuga de pollo a la plancha salteado con champiñones, cebolla y pimentón asado, guacamole, elote, lechuga. 6 tortillas, 2 salsas y 2 aguas frescas a elección.', 16, 27, 10, 0, 0),
(84, 'El Chido', 10990, 'Trocitos de vacuno, pollo y cerdo adobado, cebolla y pimentón asado, guacamole, frijoles negros, arroz rojo, 6 tortillas y 2 salsas. 2 cervezas (Tecate o Carta Blanca), bebidas mini o aguas frescas.', 12, 27, 10, 0, 0),
(85, 'El Mexicanísimo', 12990, 'Guiso de papas con chorizo, camarón tricolor, deshebrada con papas, cebolla y pimentón asado, guacamole, frijoles charros, arroz rojo, pico de gallo, 6 tortillas y 2 salsas. 2 aguas frescas o bebida mini o cerveza (Tecate o Carta Blanca)', 10, 27, 10, 0, 0),
(86, 'Rico Futomaki tery', 2600, '10 cortes de sushi', 8, 51, 2, 0, 0);

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
-- Estructura de tabla para la tabla `Subsector_entrega`
--

CREATE TABLE IF NOT EXISTS `Subsector_entrega` (
  `id_subsector_entrega` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_subsector_entrega` varchar(50) NOT NULL,
  `id_sector_entrega` int(11) NOT NULL,
  PRIMARY KEY (`id_subsector_entrega`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `Subsector_entrega`
--

INSERT INTO `Subsector_entrega` (`id_subsector_entrega`, `nombre_subsector_entrega`, `id_sector_entrega`) VALUES
(1, 'Santa Julia', 8),
(2, 'Miraflores', 8),
(3, 'Plan', 9),
(4, 'Los pinos', 13),
(5, 'San Francisco', 11),
(6, 'Centro', 12),
(7, 'plan', 8),
(8, 'Playa Ancha', 9),
(9, 'Población vergara', 8),
(10, 'Belloto Norte', 13),
(11, 'Limache Viejo', 11),
(12, 'Placeres ', 9),
(13, 'Recreo', 8),
(14, 'Belloto Sur ', 13),
(15, 'Cerro Baron ', 9),
(16, 'Agua Santa', 8),
(17, 'Belloto 2000', 13),
(18, 'Cerro Alegre', 9),
(19, 'Viña del Mar Alto', 8),
(20, 'Las Rosas', 13),
(21, 'Cerro Cordillera', 9),
(22, 'Reñaca Bajo', 8),
(23, 'El Retiro', 13),
(24, 'Jardín del Mar', 8),
(25, 'Pompeya Sur', 13),
(26, 'Gómez Carreño', 8),
(27, 'Mena', 13),
(28, 'Pompeya norte', 13),
(29, 'Santa Inés ', 8),
(30, 'El Sol', 13),
(31, 'Achupallas', 8),
(32, 'Valencia', 13),
(33, 'Miraflores Bajo', 8),
(34, 'Canal Chacao', 13),
(35, 'Miraflores Alto', 8),
(36, 'Viña Oriente ', 8),
(37, 'Belloto Centro', 13),
(38, 'Paso hondo', 13);

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
(8, 'Pasteles'),
(10, 'Mexicana'),
(11, 'Comida casera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_facebook` varchar(100) NOT NULL,
  `id_twitter` int(11) NOT NULL,
  `id_google` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario_producto`
--

CREATE TABLE IF NOT EXISTS `Usuario_producto` (
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  KEY `id_usuario` (`id_usuario`),
  KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario_sector_entrega`
--

CREATE TABLE IF NOT EXISTS `Usuario_sector_entrega` (
  `id_usuario` int(11) NOT NULL,
  `id_subsector_entrega` int(11) NOT NULL,
  KEY `id_usuario` (`id_usuario`),
  KEY `id_sector_entrega` (`id_subsector_entrega`),
  KEY `id_usuario_2` (`id_usuario`),
  KEY `id_sector_entrega_2` (`id_subsector_entrega`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario_tipo_producto`
--

CREATE TABLE IF NOT EXISTS `Usuario_tipo_producto` (
  `id_usuario` int(11) NOT NULL,
  `id_tipo_producto` int(11) NOT NULL,
  `cont_visitas` int(11) NOT NULL,
  KEY `id_usuario` (`id_usuario`),
  KEY `id_tipo_producto` (`id_tipo_producto`),
  KEY `cont_visitas` (`cont_visitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Cont_visita`
--
ALTER TABLE `Cont_visita`
  ADD CONSTRAINT `Cont_visita_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `Producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Cont_visita_ibfk_3` FOREIGN KEY (`id_local`) REFERENCES `Local` (`id_local`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `Producto_ibfk_1` FOREIGN KEY (`id_local`) REFERENCES `Local` (`id_local`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Producto_ibfk_2` FOREIGN KEY (`id_tipo_producto`) REFERENCES `Tipo_producto` (`id_tipo_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Usuario_producto`
--
ALTER TABLE `Usuario_producto`
  ADD CONSTRAINT `Usuario_producto_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `Producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Usuario_producto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `Usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Usuario_sector_entrega`
--
ALTER TABLE `Usuario_sector_entrega`
  ADD CONSTRAINT `Usuario_sector_entrega_ibfk_2` FOREIGN KEY (`id_subsector_entrega`) REFERENCES `Subsector_entrega` (`id_subsector_entrega`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Usuario_sector_entrega_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `Usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Usuario_tipo_producto`
--
ALTER TABLE `Usuario_tipo_producto`
  ADD CONSTRAINT `Usuario_tipo_producto_ibfk_2` FOREIGN KEY (`id_tipo_producto`) REFERENCES `Tipo_producto` (`id_tipo_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Usuario_tipo_producto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `Usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
