-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-01-2013 a las 19:41:52
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fructiferia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `categoria_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `categoria_nombre` varchar(255) DEFAULT NULL,
  `categoria_descripcion` varchar(255) DEFAULT NULL,
  `categoria_padre` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `categoria_nombre`, `categoria_descripcion`, `categoria_padre`) VALUES
(1, 'Frutas', '', 0),
(2, 'Verduras', '', 0),
(3, 'Ensaladas', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cliente_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cliente_nombre` varchar(255) DEFAULT NULL,
  `cliente_ape_paterno` varchar(255) DEFAULT NULL,
  `cliente_ape_materno` varchar(255) DEFAULT NULL,
  `cliente_email` varchar(255) DEFAULT NULL,
  `cliente_telefono` varchar(255) DEFAULT NULL,
  `cliente_telefono_movil` varchar(255) DEFAULT NULL,
  `cliente_password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cliente_id`),
  UNIQUE KEY `uq_cliente_email` (`cliente_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `cliente_nombre`, `cliente_ape_paterno`, `cliente_ape_materno`, `cliente_email`, `cliente_telefono`, `cliente_telefono_movil`, `cliente_password`) VALUES
(1, 'Oscar', 'Cárdenas', 'Albornoz', 'cardenas1108@gmail.com', '9338112', '83055080', 'martincr8263'),
(2, 'Oscar', 'Cárdenas', 'Albornoz', 'mudvayne450@hotmail.com', '9338112', '9338112', 'martincr8263'),
(3, 'Oscar', 'Cárdenas', 'Albornoz', 'cardenas1108@hotmail.com', '9338112', '9338112', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE IF NOT EXISTS `configuracion` (
  `configuracion_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `configuracion_nombre` varchar(255) DEFAULT NULL,
  `configuracion_descripcion` varchar(255) DEFAULT NULL,
  `configuracion_valor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`configuracion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`configuracion_id`, `configuracion_nombre`, `configuracion_descripcion`, `configuracion_valor`) VALUES
(1, 'Imágenes Productos', 'Ruta para la subida de imágenes de los productos', 'C:\\wamp\\www\\carro-felinos\\images\\productos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `imagen_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `imagen_nombre` varchar(255) DEFAULT NULL,
  `producto_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`imagen_id`),
  KEY `fk_imagen_producto_producto_id` (`producto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`imagen_id`, `imagen_nombre`, `producto_id`) VALUES
(25, 'PI-000025-0000060195001222_xl_a.jpg', 1),
(26, 'PI-000026-0000127676001231_xl_a.jpg', 2),
(27, 'PI-000027-0000136016001234_xl_a.jpg', 3),
(28, 'PI-000028-cereza-sola.jpg', 4),
(29, 'PI-000029-0000249190001250_xl_a.jpg', 5),
(30, 'PI-000030-0000341793909685_xl_a.jpg', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `producto_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `producto_codigo` varchar(20) DEFAULT NULL,
  `producto_nombre` varchar(255) DEFAULT NULL,
  `producto_descripcion` varchar(255) DEFAULT NULL,
  `producto_precio` int(11) DEFAULT NULL,
  `producto_fecha_ingreso` datetime DEFAULT NULL,
  `producto_fecha_modificacion` datetime DEFAULT NULL,
  `categoria_id` bigint(20) DEFAULT NULL,
  `unidad_venta_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`producto_id`),
  UNIQUE KEY `uq_producto_codigo` (`producto_codigo`),
  KEY `fk_producto_categoria_categoria_id` (`categoria_id`),
  KEY `fk_producto_unidad_venta_unidad_venta_id` (`unidad_venta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`producto_id`, `producto_codigo`, `producto_nombre`, `producto_descripcion`, `producto_precio`, `producto_fecha_ingreso`, `producto_fecha_modificacion`, `categoria_id`, `unidad_venta_id`) VALUES
(1, 'PR-00001', 'Manzana Roja', '', 990, '0000-00-00 00:00:00', '2013-01-08 02:19:14', 1, 1),
(2, 'PR-00002', 'Manzana Verde', '', 990, '0000-00-00 00:00:00', '2013-01-08 04:58:30', 1, 1),
(3, 'PR-00003', 'Pera', '', 990, '2013-01-08 15:22:14', NULL, 1, 1),
(4, 'PR-00004', 'Guinda', '', 990, '2013-01-08 15:22:28', NULL, 1, 1),
(5, 'PR-00005', 'Kiwui', '', 990, '2013-01-08 15:22:41', NULL, 1, 1),
(6, 'PR-00006', 'Acelga', '', 990, '2013-01-08 16:40:37', NULL, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_venta`
--

CREATE TABLE IF NOT EXISTS `unidad_venta` (
  `unidad_venta_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `unidad_venta_nombre` varchar(255) DEFAULT NULL,
  `unidad_venta_descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`unidad_venta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `unidad_venta`
--

INSERT INTO `unidad_venta` (`unidad_venta_id`, `unidad_venta_nombre`, `unidad_venta_descripcion`) VALUES
(1, 'Kilo', ''),
(2, 'Paquete', ''),
(3, 'Unidad', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `fk_imagen_producto_producto_id` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`producto_id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_categoria_categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`),
  ADD CONSTRAINT `fk_producto_unidad_venta_unidad_venta_id` FOREIGN KEY (`unidad_venta_id`) REFERENCES `unidad_venta` (`unidad_venta_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
