-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-02-2013 a las 21:21:42
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
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE IF NOT EXISTS `comuna` (
  `comuna_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `comuna_nombre` varchar(255) DEFAULT NULL,
  `comuna_descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`comuna_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`comuna_id`, `comuna_nombre`, `comuna_descripcion`) VALUES
(1, 'Cerrillos', NULL),
(2, 'Cerro Navia', NULL),
(3, 'Conchalí', NULL),
(4, 'El Bosque', NULL),
(5, 'Estación Central', NULL),
(6, 'Huechuraba', NULL),
(7, 'Independencia', NULL),
(8, 'La Cisterna', NULL),
(9, 'La Florida', NULL),
(10, 'La Granja', NULL),
(11, 'La Pintana', NULL),
(12, 'La Reina', NULL),
(13, 'Las Condes', NULL),
(14, 'Lo Barnechea', NULL),
(15, 'Lo Espejo', NULL),
(16, 'Lo Espejo', NULL),
(17, 'Lo Prado', NULL),
(18, 'Macul', NULL),
(19, 'Maipú', NULL),
(20, 'Ñuñoa', NULL),
(21, 'Padre Hurtado', NULL),
(22, 'Pedro Aguirre Cerda', NULL),
(23, 'Peñalolen', NULL),
(24, 'Pirque', NULL),
(25, 'Providencia', NULL),
(26, 'Pudahuel', NULL),
(27, 'Puente Alto', NULL),
(28, 'Quilicura', NULL),
(29, 'Quinta Normal', NULL),
(30, 'Recoleta', NULL),
(31, 'Renca', NULL),
(32, 'San Bernardo', NULL),
(33, 'San Joaquín', NULL),
(34, 'San José de Maipo', NULL),
(35, 'San Miguel', NULL),
(36, 'San Ramón', NULL),
(37, 'Santiago', NULL),
(38, 'Vitacura', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`configuracion_id`, `configuracion_nombre`, `configuracion_descripcion`, `configuracion_valor`) VALUES
(1, 'Imágenes Productos', 'Ruta para la subida de imágenes de los productos', 'C:\\wamp\\www\\carro-felinos\\images\\productos'),
(2, 'Imágenes Slider', 'Ruta para subida de imágenes del slider', 'C:\\wamp\\www\\fructiferia-yii\\images\\nivo-slider'),
(3, 'E-Mail del administrador del sistema', 'E-Mail del administrador del sistema', 'cardenas1108@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE IF NOT EXISTS `direccion` (
  `direccion_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `direccion_descripcion` varchar(255) DEFAULT NULL,
  `comuna_id` bigint(20) DEFAULT NULL,
  `cliente_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`direccion_id`),
  KEY `fk_direccion_comuna_comuna_id` (`comuna_id`),
  KEY `fk_direccion_cliente_cliente_id` (`cliente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`direccion_id`, `direccion_descripcion`, `comuna_id`, `cliente_id`) VALUES
(4, 'Las Tranqueras 450, depto. 13', 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE IF NOT EXISTS `forma_pago` (
  `forma_pago_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `forma_pago_nombre` varchar(255) DEFAULT NULL,
  `forma_pago_descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`forma_pago_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`forma_pago_id`, `forma_pago_nombre`, `forma_pago_descripcion`) VALUES
(1, 'Efectivo', 'Se paga al momento de entregar el pedido');

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
-- Estructura de tabla para la tabla `menu_panel_control_cliente`
--

CREATE TABLE IF NOT EXISTS `menu_panel_control_cliente` (
  `menu_panel_control_cliente_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `menu_panel_control_cliente_nombre` varchar(255) DEFAULT NULL,
  `menu_panel_control_cliente_url` varchar(255) DEFAULT NULL,
  `menu_panel_control_cliente_orden` int(11) DEFAULT NULL,
  PRIMARY KEY (`menu_panel_control_cliente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `menu_panel_control_cliente`
--

INSERT INTO `menu_panel_control_cliente` (`menu_panel_control_cliente_id`, `menu_panel_control_cliente_nombre`, `menu_panel_control_cliente_url`, `menu_panel_control_cliente_orden`) VALUES
(1, 'Modificar mis Datos', 'site/modificarDatosCliente', 2),
(2, 'Ver Historial de mis Pedidos', 'site/historialDeMisPedidos', 3),
(3, 'Mis Direcciones de Envío', 'site/misDireccionesDeEnvio', 4),
(4, 'Inicio', 'site/panelControlCliente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE IF NOT EXISTS `pagina` (
  `pagina_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pagina_nombre` varchar(255) DEFAULT NULL,
  `pagina_titulo` varchar(255) DEFAULT NULL,
  `pagina_texto` text,
  PRIMARY KEY (`pagina_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`pagina_id`, `pagina_nombre`, `pagina_titulo`, `pagina_texto`) VALUES
(1, 'Quienes Somos', 'Quienes Somos', '<p>P&aacute;gina de <strong><em>prueba</em></strong> creada con <strong>CKEditor</strong>.</p>\r\n'),
(2, 'Sobre Nosotros', '', '<table border="1" cellpadding="1" cellspacing="1" style="width: 100%;">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p style="margin: 0px; padding: 0px; color: rgb(146, 146, 146); font-family: Arial, Helvetica, sans-serif; font-size: 11px; background-color: rgb(249, 249, 249); line-height: 1.2em;"><small style="margin: 0px; padding: 0px; font-size: 1em;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus. Duis lobortis. Nulla nec velit. Mauris pulvinar erat non massa. Suspendisse tortor turpis, porta nec, tempus vitae, iaculis semper, pede.</small></p>\r\n\r\n			<p style="margin: 0px; padding: 0px; background-color: rgb(249, 249, 249); color: rgb(136, 136, 136); font-size: 1.2em; line-height: 1.4em; font-family: georgia, serif;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus. Duis lobortis. Nulla nec velit. Mauris pulvinar erat non massa. Suspendisse tortor turpis, porta nec, tempus vitae, iaculis semper, pede. Cras vel libero id lectus rhoncus porta.</p>\r\n			</td>\r\n			<td>\r\n			<p style="margin: 0px; padding: 0px; color: rgb(146, 146, 146); font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; background-color: rgb(249, 249, 249);"><strong style="margin: 0px; padding: 0px; color: rgb(222, 3, 111);">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus. Duis lobortis. Nulla nec velit.</strong></p>\r\n\r\n			<p style="margin: 0px; padding: 0px; color: rgb(146, 146, 146); font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; background-color: rgb(249, 249, 249);">Vivamus tortor nisl, lobortis in, faucibus et, tempus at, dui. Nunc risus. Proin scelerisque augue. Nam ullamcorper. Phasellus id massa. Pellentesque nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc augue. Aenean sed justo non leo vehicula laoreet. Praesent ipsum libero, auctor ac, tempus nec, tempor nec, justo.</p>\r\n\r\n			<p style="margin: 0px; padding: 0px; color: rgb(146, 146, 146); font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; background-color: rgb(249, 249, 249);">Maecenas ullamcorper, odio vel tempus egestas, dui orci faucibus orci, sit amet aliquet lectus dolor et quam. Pellentesque consequat luctus purus. Nunc et risus. Etiam a nibh. Phasellus dignissim metus eget nisi. Vestibulum sapien dolor, aliquet nec, porta ac, malesuada a, libero. Praesent feugiat purus eget est. Nulla facilisi. Vestibulum tincidunt sapien eu velit. Mauris purus. Maecenas eget mauris eu orci accumsan feugiat. Pellentesque eget velit. Nunc tincidunt.</p>\r\n			</td>\r\n			<td>\r\n			<p style="margin: 0px; padding: 0px; color: rgb(146, 146, 146); font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; background-color: rgb(249, 249, 249);">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi luctus. Duis lobortis. Nulla nec velit. Mauris pulvinar erat non massa. Suspendisse tortor turpis, porta nec, tempus vitae, iaculis semper, pede. Cras vel libero id lectus rhoncus porta. Suspendisse convallis felis ac enim. Vivamus tortor nisl, lobortis in, faucibus et, tempus at, dui. Nunc risus. Proin scelerisque augue. Nam ullamcorper</p>\r\n\r\n			<p style="margin: 0px; padding: 0px; color: rgb(146, 146, 146); font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; background-color: rgb(249, 249, 249);"><strong style="margin: 0px; padding: 0px; color: rgb(222, 3, 111);">Maecenas ullamcorper, odio vel tempus egestas, dui orci faucibus orci, sit amet aliquet lectus dolor et quam. Pellentesque consequat luctus purus.</strong></p>\r\n\r\n			<p style="margin: 0px; padding: 0px; color: rgb(146, 146, 146); font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; background-color: rgb(249, 249, 249);">Nunc et risus. Etiam a nibh. Phasellus dignissim metus eget nisi.</p>\r\n\r\n			<div class="divider" style="margin: 10px 0px; padding: 0px; clear: both; font-size: 0px; line-height: 0; height: 1px; background-color: rgb(221, 221, 221); overflow: hidden; color: rgb(146, 146, 146); font-family: Arial, Helvetica, sans-serif;">&nbsp;</div>\r\n\r\n			<p style="margin: 0px; padding: 0px; color: rgb(146, 146, 146); font-family: Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; background-color: rgb(249, 249, 249);">To all of you, from all of us at Magento Demo Store - Thank you and Happy eCommerce!</p>\r\n\r\n			<p style="margin: 0px; padding: 0px; color: rgb(146, 146, 146); font-family: Arial, Helvetica, sans-serif; font-size: 11px; background-color: rgb(249, 249, 249); line-height: 1.2em;"><strong style="margin: 0px; padding: 0px; font-weight: normal; font-style: italic; font-size: 2em; line-height: normal; font-family: Georgia, serif;">John Doe</strong><br style="margin: 0px; padding: 0px;" />\r\n			<small style="margin: 0px; padding: 0px; font-size: 1em;">Some important guy</small></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `pedido_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pedido_fecha` datetime NOT NULL,
  `pedido_cliente_nombre` varchar(255) NOT NULL,
  `pedido_cliente_direccion` varchar(255) NOT NULL,
  `pedido_cliente_comuna` varchar(255) NOT NULL,
  `pedido_cliente_provincia` varchar(255) NOT NULL,
  `pedido_cliente_telefono` varchar(255) NOT NULL,
  `pedido_cliente_telefono_movil` varchar(255) NOT NULL,
  `cliente_id` bigint(20) DEFAULT NULL,
  `forma_pago_id` bigint(20) DEFAULT NULL,
  `tipo_documento_id` bigint(20) DEFAULT NULL,
  `pedido_total` int(11) DEFAULT NULL,
  PRIMARY KEY (`pedido_id`),
  KEY `fk_cliente_pedido_cliente_id` (`cliente_id`),
  KEY `fk_forma_pago_pedido_forma_pago_id` (`forma_pago_id`),
  KEY `fk_pedido_tipo_documento_tipo_documento_id` (`tipo_documento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`pedido_id`, `pedido_fecha`, `pedido_cliente_nombre`, `pedido_cliente_direccion`, `pedido_cliente_comuna`, `pedido_cliente_provincia`, `pedido_cliente_telefono`, `pedido_cliente_telefono_movil`, `cliente_id`, `forma_pago_id`, `tipo_documento_id`, `pedido_total`) VALUES
(3, '2013-01-28 21:19:50', 'Oscar', 'Las Tranqueras 450, depto. 13', 'La Florida', '', '9338112', '83055080', 1, 1, 1, NULL),
(4, '2013-01-28 21:43:33', 'Oscar', 'Las Tranqueras 450, depto. 13', 'La Florida', '', '9338112', '83055080', 1, 1, 1, NULL),
(5, '2013-01-28 21:46:37', 'Oscar', 'Las Tranqueras 450, depto. 13', 'La Florida', '', '9338112', '83055080', 1, 1, 1, NULL),
(6, '2013-01-28 21:46:56', 'Oscar', 'Las Tranqueras 450, depto. 13', 'La Florida', '', '9338112', '83055080', 1, 1, 1, NULL),
(7, '2013-01-28 21:48:07', 'Oscar', 'Las Tranqueras 450, depto. 13', 'La Florida', '', '9338112', '83055080', 1, 1, 2, NULL),
(8, '2013-01-28 21:49:00', 'Oscar', 'Las Tranqueras 450, depto. 13', 'La Florida', '', '9338112', '83055080', 1, 1, 2, NULL),
(9, '2013-02-18 12:50:02', 'Oscar', 'Las Tranqueras 450, depto. 13', 'La Florida', '', '9338112', '83055080', 1, 1, 2, NULL),
(10, '2013-02-19 15:09:36', 'Oscar', 'Las Tranqueras 450, depto. 13', 'La Florida', '', '9338112', '83055080', 1, 1, 1, 21780);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_detalle`
--

CREATE TABLE IF NOT EXISTS `pedido_detalle` (
  `pedido_detalle_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pedido_detalle_descripcion` varchar(255) DEFAULT NULL,
  `pedido_detalle_precio` int(11) DEFAULT NULL,
  `pedido_detalle_cantidad` int(11) DEFAULT NULL,
  `pedido_detalle_total` int(11) DEFAULT NULL,
  `pedido_id` bigint(20) DEFAULT NULL,
  `producto_id` bigint(20) DEFAULT NULL,
  `producto_codigo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`pedido_detalle_id`),
  KEY `fk_pedido_pedido_detalle_pedido__id` (`pedido_id`),
  KEY `fk_pedido_detalle_producto_producto_id` (`producto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `pedido_detalle`
--

INSERT INTO `pedido_detalle` (`pedido_detalle_id`, `pedido_detalle_descripcion`, `pedido_detalle_precio`, `pedido_detalle_cantidad`, `pedido_detalle_total`, `pedido_id`, `producto_id`, `producto_codigo`) VALUES
(3, 'Guinda', 990, 12, 11880, 3, 4, 'PR-00004'),
(4, 'Acelga', 990, 10, 9900, 3, 6, 'PR-00006'),
(5, 'Guinda', 990, 12, 11880, 4, 4, 'PR-00004'),
(6, 'Acelga', 990, 10, 9900, 4, 6, 'PR-00006'),
(7, 'Guinda', 990, 12, 11880, 5, 4, 'PR-00004'),
(8, 'Acelga', 990, 10, 9900, 5, 6, 'PR-00006'),
(9, 'Guinda', 990, 12, 11880, 6, 4, 'PR-00004'),
(10, 'Acelga', 990, 10, 9900, 6, 6, 'PR-00006'),
(11, 'Pera', 990, 25, 24750, 7, 3, 'PR-00003'),
(12, 'Manzana Verde', 990, 25, 24750, 8, 2, 'PR-00002'),
(13, 'Kiwui', 990, 21, 20790, 9, 5, 'PR-00005'),
(14, 'Guinda', 990, 22, 21780, 10, 4, 'PR-00004');

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
(4, 'PR-00004', 'Guinda', '', 890, '2013-01-08 15:22:28', '2013-02-19 18:04:05', 1, 1),
(5, 'PR-00005', 'Kiwui', '', 990, '2013-01-08 15:22:41', NULL, 1, 1),
(6, 'PR-00006', 'Acelga', '', 990, '2013-01-08 16:40:37', NULL, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_oferta`
--

CREATE TABLE IF NOT EXISTS `producto_oferta` (
  `producto_oferta_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `producto_precio_anterior` int(11) DEFAULT NULL,
  `producto_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`producto_oferta_id`),
  UNIQUE KEY `uq_producto_id` (`producto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `producto_oferta`
--

INSERT INTO `producto_oferta` (`producto_oferta_id`, `producto_precio_anterior`, `producto_id`) VALUES
(1, 990, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `slider_nombre_imagen` varchar(255) DEFAULT NULL,
  `slider_titulo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_nombre_imagen`, `slider_titulo`) VALUES
(17, 'S-000017-nemo.jpg', 'Buscando a Nemo'),
(18, 'S-000018-toystory.jpg', 'Toy Story'),
(19, 'S-000019-up.jpg', 'UP'),
(20, 'S-000020-walle.jpg', 'Wall - e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE IF NOT EXISTS `tipo_documento` (
  `tipo_documento_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo_documento_nombre` varchar(255) DEFAULT NULL,
  `tipo_documento_descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tipo_documento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`tipo_documento_id`, `tipo_documento_nombre`, `tipo_documento_descripcion`) VALUES
(1, 'Boleta', 'Boleta'),
(2, 'Factura', 'Factura');

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
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `fk_direccion_cliente_cliente_id` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`cliente_id`),
  ADD CONSTRAINT `fk_direccion_comuna_comuna_id` FOREIGN KEY (`comuna_id`) REFERENCES `comuna` (`comuna_id`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `fk_imagen_producto_producto_id` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`producto_id`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_cliente_pedido_cliente_id` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`cliente_id`),
  ADD CONSTRAINT `fk_forma_pago_pedido_forma_pago_id` FOREIGN KEY (`forma_pago_id`) REFERENCES `forma_pago` (`forma_pago_id`),
  ADD CONSTRAINT `fk_pedido_tipo_documento_tipo_documento_id` FOREIGN KEY (`tipo_documento_id`) REFERENCES `tipo_documento` (`tipo_documento_id`);

--
-- Filtros para la tabla `pedido_detalle`
--
ALTER TABLE `pedido_detalle`
  ADD CONSTRAINT `fk_pedido_detalle_producto_producto_id` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`producto_id`),
  ADD CONSTRAINT `fk_pedido_pedido_detalle_pedido__id` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`pedido_id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_categoria_categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`),
  ADD CONSTRAINT `fk_producto_unidad_venta_unidad_venta_id` FOREIGN KEY (`unidad_venta_id`) REFERENCES `unidad_venta` (`unidad_venta_id`);

--
-- Filtros para la tabla `producto_oferta`
--
ALTER TABLE `producto_oferta`
  ADD CONSTRAINT `fk_producto_oferta_producto_producto_id` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`producto_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
