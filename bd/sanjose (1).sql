-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-01-2022 a las 02:58:50
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sanjose`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id_actividad` int(11) NOT NULL,
  `nombre` varchar(62) NOT NULL,
  `tipo` varchar(59) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` varchar(56) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `idenm` int(250) NOT NULL,
  `maestro_r` varchar(250) NOT NULL,
  `num_integ` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id_actividad`, `nombre`, `tipo`, `descripcion`, `fecha`, `imagen`, `idenm`, `maestro_r`, `num_integ`) VALUES
(64, 'adasdad', 'DESCARTADA', 'a', '2021-11-18', 'imagen/FD9q8B2XMAYbUh9.jpg', 430597749, 'julio cesar', 11),
(65, 'fsdfsdfsfsd ', 'REALIZADA', 'zcxzczxczcx', '2021-11-03', 'imagen/fgcqkov4l0081.jpg', 964070162, 'emilio', 17),
(71, 'hola soy anderson', 'REALIZADA', 'asdadadfgg ea ewada ad aaa sdad adasdaasdasdasdsadasddasdsa', '2021-11-25', 'imagen/E_5rztnUYAkROzu.jpg', 435251031, 'emilio', 32),
(72, 'aaaaaaaaa', 'FUTURA', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-11-25', 'imagen/E_0iN87UcAgl257.jpg', 188486273, 'emilio', 26),
(73, 'anderson rico', 'DESCARTADA', ' anderson rico anderson rico anderson rico anderson rico anderson rico anderson rico anderson rico anderson rico \r\n', '2022-01-07', 'imagen/IMG_20220107_090506.jpg', 87215151, 'julio cesar', 46),
(74, 'hola sssss', 'FUTURA', 'hola soy anderson cpmoe estas kdaksdj akljsakjdkasldja sakdjalsdaksjdl askdjalksdjaklsjd kalsjdkasjdasjdlajk', '2022-01-11', 'imagen/E_ayREFVgAMUPKY.jpg', 41862693, 'emilio', 23),
(75, 'hola soy anderson', 'REALIZADA', 'asdad asdas das asdsadas sadsad sadasdasd asdasdas  dsadasdassdada', '2022-01-11', 'imagen/E3xjO8-VUAIfgHa.jpg', 193424664, 'emilio', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadistica`
--

CREATE TABLE `estadistica` (
  `id_estadistica` int(11) NOT NULL,
  `tipo_act` varchar(200) NOT NULL,
  `fecha_act` varchar(200) NOT NULL,
  `num_actividad` int(200) NOT NULL DEFAULT '1',
  `nombre_act` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ident` int(250) NOT NULL,
  `maes_res` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `est_integ` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estadistica`
--

INSERT INTO `estadistica` (`id_estadistica`, `tipo_act`, `fecha_act`, `num_actividad`, `nombre_act`, `ident`, `maes_res`, `est_integ`) VALUES
(56, 'DESCARTADA', '2021-11-18', 1, 'adasdad', 430597749, 'julio cesar', '11'),
(57, 'REALIZADA', '2021-11-03', 1, 'fsdfsdfsfsd ', 964070162, 'emilio', '17'),
(63, 'REALIZADA', '2021-11-25', 1, 'hola soy anderson', 435251031, 'emilio', '32'),
(64, 'FUTURA', '2021-11-25', 1, 'aaaaaaaaa', 188486273, 'emilio', '26'),
(65, 'DESCARTADA', '2022-01-07', 1, 'anderson rico', 87215151, 'julio cesar', '46'),
(66, 'FUTURA', '2022-01-11', 1, 'hola sssss', 41862693, 'emilio', '23'),
(67, 'REALIZADA', '2022-01-11', 1, 'hola soy anderson', 193424664, 'emilio', '25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `id_maestro` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `cedula` int(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `nacimiento` varchar(200) NOT NULL,
  `direccion` text NOT NULL,
  `servicio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`id_maestro`, `nombres`, `apellidos`, `cedula`, `correo`, `nacimiento`, `direccion`, `servicio`) VALUES
(12, 'julio cesar', 'gerardo quintana', 2147483647, 'peande96@gmail.com', '1990-02-14', 'vcbcbcbnfghf', 0),
(13, 'emilio', 'raulin Guerrero', 12312312, 'xczcaa@gmail.com', '1990-01-31', 'asdada', 0),
(18, 'aaaaa', 'aaaa', 27010387, 'andersontrabajos2@gmail.com', '2021-11-25', 'aaaaaaaaaaaaaaaaaaaaaa', 1502);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridad_p`
--

CREATE TABLE `seguridad_p` (
  `id_seguridad` int(11) NOT NULL,
  `iden_us` int(11) NOT NULL,
  `pregunta1` varchar(200) NOT NULL,
  `respuesta1` varchar(200) NOT NULL,
  `pregunta2` varchar(200) NOT NULL,
  `respuesta2` varchar(200) NOT NULL,
  `pregunta3` varchar(150) NOT NULL,
  `respuessta3` varchar(200) NOT NULL,
  `activacion` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seguridad_p`
--

INSERT INTO `seguridad_p` (`id_seguridad`, `iden_us`, `pregunta1`, `respuesta1`, `pregunta2`, `respuesta2`, `pregunta3`, `respuessta3`, `activacion`) VALUES
(13, 26, 'Â¿Nombre de tu primer hijo?', 'aaaa', 'Â¿Nombre de tus padres?', 'aaaa', 'Â¿Marca de tu primer auto?', 'aaaa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombres` varchar(62) NOT NULL,
  `apellidos` varchar(59) NOT NULL,
  `cedula` int(19) NOT NULL,
  `nacimiento` varchar(56) NOT NULL,
  `usuario` varchar(67) NOT NULL,
  `pass` varchar(78) NOT NULL,
  `correo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `imagen_us` varchar(250) NOT NULL DEFAULT 'imagen/descarga.png' COMMENT 'adaqwad',
  `tipo_usu` varchar(100) NOT NULL DEFAULT 'corriente',
  `estado` varchar(100) NOT NULL DEFAULT 'desactvado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `apellidos`, `cedula`, `nacimiento`, `usuario`, `pass`, `correo`, `imagen_us`, `tipo_usu`, `estado`) VALUES
(26, '', '', 27010387, '', 'aaaax', 'xxxx', 'andersontrabajos2@gmail.com', 'imagen/FDoVDwtWEAU1wH9.png', 'adninistrador', 'desactvado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_actividad`);

--
-- Indices de la tabla `estadistica`
--
ALTER TABLE `estadistica`
  ADD PRIMARY KEY (`id_estadistica`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id_maestro`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `seguridad_p`
--
ALTER TABLE `seguridad_p`
  ADD PRIMARY KEY (`id_seguridad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT de la tabla `estadistica`
--
ALTER TABLE `estadistica`
  MODIFY `id_estadistica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `seguridad_p`
--
ALTER TABLE `seguridad_p`
  MODIFY `id_seguridad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
