-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2016 a las 18:04:57
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ruterox`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblreseteopass`
--

CREATE TABLE IF NOT EXISTS `tblreseteopass` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idusuario` int(10) unsigned NOT NULL,
  `username` varchar(15) NOT NULL,
  `token` varchar(64) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idusuario` (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `tblreseteopass`
--

INSERT INTO `tblreseteopass` (`id`, `idusuario`, `username`, `token`, `creado`) VALUES
(1, 620995589, 'root', '51caab47187a793807553fc4f41fca9117139c83', '2016-03-16 16:13:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `email` varchar(80) NOT NULL COMMENT 'email del usuario',
  `CIF` varchar(9) NOT NULL COMMENT 'cif del usuario',
  `clave` varchar(80) NOT NULL COMMENT 'contraseña del usuario',
  `telefono` int(9) NOT NULL COMMENT 'telefono del usuario',
  `nombre` varchar(80) NOT NULL COMMENT 'nombre de la empresa',
  `plan` int(11) NOT NULL COMMENT 'plan acogido del cliente',
  `hash` varchar(80) NOT NULL,
  PRIMARY KEY (`CIF`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabla de usuarios registrados en la aplicacion';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`email`, `CIF`, `clave`, `telefono`, `nombre`, `plan`, `hash`) VALUES
('pisstolayou@gmail.com', '12314', 'd17da03fe9840538120ac2b42298920f11627f8f', 620995589, 'Pruebas', 0, 'p4r94ct4s9dfba3rkr0mp1iir7');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
