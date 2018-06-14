-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2018 a las 00:48:51
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `emblema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencias`
--

CREATE TABLE `agencias` (
  `nombre` varchar(60) NOT NULL,
  `numero_fiscal` varchar(60) NOT NULL,
  `segmento` varchar(60) NOT NULL,
  `iata` varchar(60) NOT NULL,
  `asociacion` varchar(60) NOT NULL,
  `consorcio` varchar(60) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `ciudad` varchar(60) NOT NULL,
  `pais` varchar(60) NOT NULL,
  `cp` varchar(60) NOT NULL,
  `nombre_personal` varchar(60) NOT NULL,
  `apellidos_personal` varchar(60) NOT NULL,
  `telefono_personal` varchar(60) NOT NULL,
  `email_personal` varchar(60) NOT NULL,
  `idioma_preferencial` varchar(60) NOT NULL,
  `observaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agencias`
--

INSERT INTO `agencias` (`nombre`, `numero_fiscal`, `segmento`, `iata`, `asociacion`, `consorcio`, `direccion`, `ciudad`, `pais`, `cp`, `nombre_personal`, `apellidos_personal`, `telefono_personal`, `email_personal`, `idioma_preferencial`, `observaciones`) VALUES
('david', '', 'Agencia CCI(congresos, convenciones & incentivos)', 'kkkk', 'No especifica', 'ABC Global Services', 'kkk, mmmm', 'mmm', 'Colombia', 'mmm', 'david', 'hgf', 'fghgf', 'uribesotod@gmail.com', 'HolandÃ©s', 'fghfd'),
('david', '5556589', 'Agencia equipos deportivos', 'kkkk', 'No especifica', 'GRUPO AVA', 'kkk, mmmm', 'mmm', 'Colombia', 'mmm', 'david', 'uribe', '3008132438', 'uribesotod@gmail.com', 'Aleman', 'prueba de agencia'),
('david', 'fsf', 'Agencia minorista', 'kkkk', 'No especifica', 'ABC Global Services', 'kkk', 'mmm', 'Colombia', '', 'david', '', '', 'uribesotod@gmail.com', 'Aleman', ''),
('david', 'kkkkkkkkkkkkkkkkkkkkkkk', 'Agencia grupos', 'kkkk', 'si', 'Dr.Tigges', 'kkk, mmmm', 'mmm', 'Colombia', 'mmm', 'david', 'dsad', '3333333', 'uribesotod@gmail.com', 'Italiano', 'Juan Carlos david urivbe jajaja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nombre` varchar(60) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `poblacion` varchar(60) NOT NULL,
  `pais` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` varchar(60) NOT NULL,
  `servicios` varchar(200) NOT NULL,
  `llegada` date NOT NULL,
  `salida` date NOT NULL,
  `num_adultos` int(11) NOT NULL,
  `num_ninos` int(11) NOT NULL,
  `edad_ninos` int(11) NOT NULL,
  `observaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agencias`
--
ALTER TABLE `agencias`
  ADD PRIMARY KEY (`numero_fiscal`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
