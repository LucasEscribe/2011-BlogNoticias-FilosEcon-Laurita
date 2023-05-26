-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-11-2011 a las 23:57:10
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `noticias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` text COLLATE utf8_spanish_ci NOT NULL,
  `id_noticia` int(11) NOT NULL,
  PRIMARY KEY (`id_comentario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `nombre`, `correo`, `mensaje`, `id_noticia`) VALUES
(1, 'Pepito', 'pepitohot@hotmami.com', 'Si tenés razón, murieron muchas personas.', 1),
(2, 'Luke', 'casa@hot.com', 'In Creible', 1),
(4, 'Chino', 'chi@no.com', 'Que comentario este\r\nQue comentario este\r\nQue comentario este\r\nQue comentario este\r\nQue comentario este\r\nQue comentario este\r\nQue comentario este\r\nQue comentario este', 1),
(5, 'Luke', 'lu@que.com', 'La cosa no est', 5),
(6, 'mijo', 'mijo@noel.com', 'cammfpsdgjps,sd', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `detalle` text COLLATE utf8_spanish_ci,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo`, `detalle`, `fecha`, `hora`) VALUES
(1, 'Mujer Cae del Puente y Explota', 'Murieron muchas personas. Con todos respeto a las embarazadas.', '2011-10-25', '21:10:18'),
(5, 'La Cosa Es Jodida', 'La cosa es jodida. Todo se va al pozo pero lo bueno es que la gente no pierde la esperanza... Saludos ', '2011-11-15', '13:20:32');
