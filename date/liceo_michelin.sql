-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2019 a las 08:43:20
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `liceo_michelin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `cod_cargo` int(11) NOT NULL,
  `nombre` char(40) DEFAULT NULL,
  `descripcion` char(250) DEFAULT NULL,
  `salario` float UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`cod_cargo`, `nombre`, `descripcion`, `salario`) VALUES
(3, 'Ingeniero', 'Prueba2', 2000000),
(4, 'Contador', 'Prueba1', 1500000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `cod` int(11) NOT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `curso` varchar(50) DEFAULT NULL,
  `comentarios` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`cod`, `nombres`, `apellidos`, `telefono`, `correo`, `curso`, `comentarios`) VALUES
(6, 'Prueba2', 'Prueba2', 1111111, 'prueba2@prueba2.com', 'Transicion', 'Prueba2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `cod_curso` int(11) NOT NULL,
  `curso` char(25) DEFAULT NULL,
  `descripcion` char(250) DEFAULT NULL,
  `cod_emp` int(11) DEFAULT NULL,
  `n_estudiantes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`cod_curso`, `curso`, `descripcion`, `cod_emp`, `n_estudiantes`) VALUES
(8, 'Parvulos', 'Prueba2', 2, 10),
(12, 'Pre Jardin', 'Prueba', 3, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `cod_emp` int(11) NOT NULL,
  `nombres` char(40) DEFAULT NULL,
  `apellidos` char(40) DEFAULT NULL,
  `tipo_documento` char(10) DEFAULT NULL,
  `documento` int(11) DEFAULT NULL,
  `direccion` char(60) DEFAULT NULL,
  `telefono` char(25) DEFAULT NULL,
  `estado_civil` char(20) DEFAULT NULL,
  `EPS` char(25) DEFAULT NULL,
  `caja_compensacion` char(20) DEFAULT NULL,
  `titulo` char(100) DEFAULT NULL,
  `cod_cargo` int(11) DEFAULT NULL,
  `cod_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`cod_emp`, `nombres`, `apellidos`, `tipo_documento`, `documento`, `direccion`, `telefono`, `estado_civil`, `EPS`, `caja_compensacion`, `titulo`, `cod_cargo`, `cod_curso`) VALUES
(2, 'Prueba', '', '', 0, '', '', '', '', '', '', 0, 0),
(3, 'Prueba', 'Prueba', 'EX', 5555555, 'Prueba', '3333333', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `cod_est` int(11) NOT NULL,
  `nombres` char(40) DEFAULT NULL,
  `apellidos` char(40) DEFAULT NULL,
  `tipo_documento` char(40) DEFAULT NULL,
  `documento` int(11) NOT NULL,
  `nombre_acudiente` char(40) DEFAULT NULL,
  `apellido_acudiente` char(40) DEFAULT NULL,
  `doc_acudiente` int(11) DEFAULT NULL,
  `direccion` char(50) DEFAULT NULL,
  `telefono` char(25) DEFAULT NULL,
  `celular` char(20) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `ultimo_grado_cursado` char(10) DEFAULT NULL,
  `institucion` char(50) DEFAULT NULL,
  `eps` char(30) DEFAULT NULL,
  `vacunas` char(20) DEFAULT NULL,
  `cod_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`cod_est`, `nombres`, `apellidos`, `tipo_documento`, `documento`, `nombre_acudiente`, `apellido_acudiente`, `doc_acudiente`, `direccion`, `telefono`, `celular`, `email`, `ultimo_grado_cursado`, `institucion`, `eps`, `vacunas`, `cod_curso`) VALUES
(1, 'Prueba', 'Prueba', 'TI', 3333333, 'Prueba', 'Prueba', 6666666, 'Prueba', '9999999', '3000000000', 'Prueba@prueba.com', 'Parvulos', 'Prueba', 'Prueba', 'Prueba', 8),
(3, 'Prueba2', 'Prueba2', 'RC', 4444444, 'Prueba2', 'Prueba2', 6666666, 'Prueba2', '5555555', '6666666666', 'Prueba2@prueba2.com', 'Prueba2', 'Prueba2', 'Prueba2', 'Prueba2', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `realname` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `rpass` varchar(200) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `realname`, `mail`, `pass`, `rpass`, `rol`) VALUES
(4, 'Prueba', 'prueba@prueba.com', '123', '123', 'admin'),
(6, 'Prueba1', 'prueba1@prueba1.com', '321', '321', '2'),
(10, '1', '1', '1', '1', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nomina`
--

CREATE TABLE `nomina` (
  `cod_nomina` int(11) NOT NULL,
  `cod_emp` int(11) NOT NULL,
  `cod_cargo` int(11) NOT NULL,
  `horas_trabajadas` int(11) DEFAULT NULL,
  `valor_horas_trabajadas` float UNSIGNED DEFAULT NULL,
  `descuento` float UNSIGNED DEFAULT NULL,
  `aporte_eps` float UNSIGNED DEFAULT NULL,
  `aporte_caja` float UNSIGNED DEFAULT NULL,
  `aporte_pension` float UNSIGNED DEFAULT NULL,
  `neto_a_pagar` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nomina`
--

INSERT INTO `nomina` (`cod_nomina`, `cod_emp`, `cod_cargo`, `horas_trabajadas`, `valor_horas_trabajadas`, `descuento`, `aporte_eps`, `aporte_caja`, `aporte_pension`, `neto_a_pagar`) VALUES
(2, 2, 3, 50, 20, 500000, 20000, 30000, 30000, 20),
(3, 3, 3, 60, 30, 30, 30, 30, 30, 30),
(4, 2, 3, 20, 20, 20, 20, 20, 20, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `cod_pagos` int(11) NOT NULL,
  `cod_est` int(11) NOT NULL,
  `descripcion` char(250) DEFAULT NULL,
  `valor` float UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`cod_pagos`, `cod_est`, `descripcion`, `valor`) VALUES
(1, 1, 'Prueba1', 250000),
(2, 3, 'Prueba2', 350000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `cod_reporte` int(11) NOT NULL,
  `cod_est` int(11) NOT NULL,
  `cod_emp` int(11) NOT NULL,
  `cod_curso` int(11) NOT NULL,
  `periodo` char(30) DEFAULT NULL,
  `N1` float DEFAULT NULL,
  `N2` float DEFAULT NULL,
  `N3` float DEFAULT NULL,
  `definitiva` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`cod_reporte`, `cod_est`, `cod_emp`, `cod_curso`, `periodo`, `N1`, `N2`, `N3`, `definitiva`) VALUES
(4, 1, 3, 8, '2', 3, 3, 3, 3),
(5, 3, 2, 0, 'Primero', 5, 5, 5, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`cod_cargo`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`cod`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`cod_curso`),
  ADD KEY `cod_emp` (`cod_emp`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`cod_emp`),
  ADD KEY `cod_cargo` (`cod_cargo`),
  ADD KEY `cod_curso` (`cod_curso`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`cod_est`),
  ADD KEY `cod_curso` (`cod_curso`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nomina`
--
ALTER TABLE `nomina`
  ADD PRIMARY KEY (`cod_nomina`),
  ADD KEY `cod_cargo` (`cod_cargo`) USING BTREE,
  ADD KEY `cod_emp` (`cod_emp`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`cod_pagos`),
  ADD KEY `cod_est` (`cod_est`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`cod_reporte`),
  ADD KEY `cod_emp` (`cod_emp`),
  ADD KEY `cod_curso` (`cod_curso`),
  ADD KEY `cod_est` (`cod_est`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `cod_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `cod_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `cod_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `cod_est` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `nomina`
--
ALTER TABLE `nomina`
  MODIFY `cod_nomina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `cod_pagos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `cod_reporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`cod_emp`) REFERENCES `empleados` (`cod_emp`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`cod_curso`) REFERENCES `cursos` (`cod_curso`);

--
-- Filtros para la tabla `nomina`
--
ALTER TABLE `nomina`
  ADD CONSTRAINT `nomina_ibfk_1` FOREIGN KEY (`cod_emp`) REFERENCES `empleados` (`cod_emp`),
  ADD CONSTRAINT `nomina_ibfk_2` FOREIGN KEY (`cod_cargo`) REFERENCES `cargos` (`cod_cargo`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`cod_est`) REFERENCES `estudiante` (`cod_est`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_ibfk_3` FOREIGN KEY (`cod_emp`) REFERENCES `empleados` (`cod_emp`),
  ADD CONSTRAINT `reportes_ibfk_4` FOREIGN KEY (`cod_est`) REFERENCES `estudiante` (`cod_est`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
