-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2022 a las 17:04:36
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

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
(90, ' PARRANDON Navide?o Institucional', 'REALIZADA', 'Hoy Uee San Jose de las Moreas se visti? de gala y alegr?a para dar la bienvenida a la navidad en nuestra instituci?n educativa con un PARRANDON Navide?o Institucional donde participaron todos los grados mostrando excelentes representaciones navide?as y resaltando que el mes de diciembre es el mes m?s bonito del a?o porque se festeja la llegada de nuestro ni?o Jes?s', '2021-11-29', 'imagen/', 93402102, 'Kira  Villalba', 22),
(91, 'Juramentaci?n del Alcalde ', 'REALIZADA', 'Presentes en la Juramentaci?n del Alcalde Mayor Sergio Hern?ndez con nuestras autoridades Directora de educaci?n del Estado Bol?var Yaneri Flores , Martha Nacul Sub Directora de Educaci?n , Maricela Abreu Jefa del departamentos de. Personal de Secretaria de Educaci?n acompa?ando a nuestra querida Diputada Prof.Brizeida Qui?ones', '2021-12-03', 'imagen/264287783_1295316124263251_4982077867927701661_n.jpg', 383006986, 'Kira  Villalba', 14),
(92, 'd?a del Maestro', 'REALIZADA', 'Actividades del d?a de hoy 13/01/2022. Tanto pedag?gicas como culturales en el marco del d?a del Maestro', '2022-01-13', 'imagen/271785385_1320845345043662_5030459631844811040_n.jpg', 86587335, 'Venus  Grimon', 11),
(93, 'Visita del personal de INPARQUES', 'REALIZADA', 'charla de primeros auxilios (bomberitos por un d?a) y charla sobre el cuidando del medio ambiente y nuestra madre tierra', '2022-01-28', 'imagen/272736044_1330417507419779_5330284217451438308_n.jpg', 227792063, 'Kira  Villalba', 18),
(94, 'd?a del educador', 'REALIZADA', 'Uee San Jose de las Moreas presente en la caminata del d?a del educador', '2022-01-28', 'imagen/272815281_1330417774086419_1842909103929383292_n.jpg', 610479934, 'Kira  Villalba', 10),
(95, 'Elaboracion de marionetas', 'REALIZADA', 'Elaboracion de marionetas sobre los heroes de la salud profesora Venus Grimon y Marlon Guevara 2 y 4 grado se educacion bisica', '2022-02-02', 'imagen/272856888_1332617110533152_1731728556242457801_n.jpg', 648580603, 'Kira  Villalba', 7),
(96, 'Regreso a clases presenciales', 'REALIZADA', 'regleso a clases despues del ciclo epidimiologico por causa del covid 19', '2022-02-21', 'imagen/273973193_1345142395947290_282746393224633599_n.jpg', 25342515, 'Kira  Villalba', 10);

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
(87, 'REALIZADA', '2021-11-29', 1, ' PARRANDON Navide?o Institucional', 93402102, 'Kira  Villalba', '22'),
(88, 'REALIZADA', '2021-12-03', 1, 'Juramentaci?n del Alcalde ', 383006986, 'Kira  Villalba', '14'),
(89, 'REALIZADA', '2022-01-13', 1, 'd?a del Maestro', 86587335, 'Venus  Grimon', '11'),
(90, 'REALIZADA', '2022-01-28', 1, 'Visita del personal de INPARQUES', 227792063, 'Kira  Villalba', '18'),
(91, 'REALIZADA', '2022-01-28', 1, 'd?a del educador', 610479934, 'Kira  Villalba', '10'),
(92, 'REALIZADA', '2022-02-02', 1, 'Elaboracion de marionetas', 648580603, 'Kira  Villalba', '7'),
(93, 'REALIZADA', '2022-02-21', 1, 'Regreso a clases presenciales', 25342515, 'Kira  Villalba', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `grado` varchar(100) NOT NULL,
  `nacimiento` int(100) NOT NULL,
  `est_estud` int(100) NOT NULL DEFAULT '1',
  `sexo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `nombres`, `apellidos`, `cedula`, `grado`, `nacimiento`, `est_estud`, `sexo`) VALUES
(16, 'Jhoan ', 'Riverol', '256667835', '1er Grado Seccion A', 2017, 1, 'Masculino'),
(17, 'cesar', 'saul', '124927983', '2do Grado Seccion A', 2015, 1, 'Masculino'),
(18, 'anderson', 'Guerrero', '156232781', '4to Grado Seccion A', 2014, 1, 'Masculino'),
(19, 'Ciro', 'Carmona', '172675172', '1er Grado Seccion A', 2016, 1, 'Masculino'),
(20, 'Raul', 'Salazzar', '145689785', '5to Grado Seccion A', 2012, 1, 'Masculino'),
(21, 'Juan', 'Morales', '145698798', '1er Grado Seccion A', 2015, 1, 'Masculino'),
(22, 'Angela ', 'Joselin', '252645789', '1er Grado Seccion A', 2016, 1, 'Femenino'),
(23, 'Luciano', 'Alvarado', '11822888', '1er Grado Seccion A', 2016, 1, 'Masculino'),
(24, 'Alanis', 'Sandoval', '11817839720', '3er Grado Seccion A', 2016, 1, 'Femenino'),
(25, 'Kerly ', 'Medina', '11819475369', '3er Grado Seccion A', 2014, 1, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id_grado` int(11) NOT NULL,
  `grado` varchar(100) NOT NULL,
  `seccion` varchar(100) NOT NULL,
  `maestro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id_grado`, `grado`, `seccion`, `maestro`) VALUES
(9, '1er Grado', 'Seccion A', 'Kira  Villalba'),
(10, '3er Grado', 'Seccion A', 'Brizeida  Qui?ones'),
(11, '4to Grado', 'Seccion A', 'Venus  Grimon'),
(12, '5to Grado', 'Seccion A', 'Neyslen  Jimenez'),
(13, '6to Grado', 'Seccion A', 'Marlon  Guevara'),
(14, '2do Grado', 'Seccion A', 'Neyslen  Jimenez');

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
(18, 'Liseth ', 'Bolivar', 14568976, 'liz123@gmail.com', '1986-06-24', 'Urbanizacion san jose de las moreas calle Simon Bolivar', 2003),
(19, 'Marlon ', 'Guevara', 16225654, 'ejemplo@gmail.com', '1993-02-18', 'urbanizaci?n San Jose De las Moreas calle principal', 2006),
(20, 'Neyslen ', 'Jimenez', 15625478, 'nessui12@gmail.com', '1984-10-25', 'Urbanizacion San Jose de las Moreas Calle Gonzalo Barrios', 2003),
(21, 'Venus ', 'Grimon', 12492798, 'venus_G1254@gmail.com', '1981-08-10', 'Urbanizaci?n San Jose de las Moreas Calle Penalver', 2003),
(22, 'Brizeida ', 'Qui?ones', 17267517, 'brizz_qui11@gmail.com', '1986-07-04', 'Urbanizacion San Jose de las Moreas calle Simon Bolivar', 2003),
(24, 'Kira ', 'Villalba', 12654321, 'kirra44@gmail.com', '1980-01-01', 'Urbanizacion San Jose de las Moreas Calle Central', 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participante`
--

CREATE TABLE `participante` (
  `id_participante` int(11) NOT NULL,
  `id_estudiante` int(100) NOT NULL,
  `id_actividad` int(100) NOT NULL,
  `tipo_usu22` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `participante`
--

INSERT INTO `participante` (`id_participante`, `id_estudiante`, `id_actividad`, `tipo_usu22`) VALUES
(97, 21, 90, ''),
(98, 20, 90, ''),
(99, 19, 90, ''),
(100, 18, 90, ''),
(101, 17, 90, ''),
(102, 16, 90, ''),
(105, 21, 91, ''),
(106, 20, 91, ''),
(107, 19, 91, ''),
(108, 18, 91, ''),
(109, 17, 91, ''),
(110, 16, 91, ''),
(113, 21, 92, ''),
(114, 20, 92, ''),
(115, 19, 92, ''),
(116, 18, 92, ''),
(117, 17, 92, ''),
(118, 16, 92, ''),
(121, 21, 93, ''),
(122, 20, 93, ''),
(123, 19, 93, ''),
(124, 18, 93, ''),
(125, 17, 93, ''),
(126, 16, 93, ''),
(129, 21, 94, ''),
(130, 20, 94, ''),
(131, 19, 94, ''),
(132, 18, 94, ''),
(133, 17, 94, ''),
(134, 16, 94, ''),
(137, 21, 95, ''),
(138, 20, 95, ''),
(139, 19, 95, ''),
(148, 18, 96, ''),
(149, 17, 96, ''),
(150, 16, 96, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE `representante` (
  `id_representante` int(11) NOT NULL,
  `nombre_rep` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_rep` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cedula_rep` int(100) NOT NULL,
  `telefono_rep` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_rep` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_estudiante` int(100) NOT NULL,
  `direccion_rep` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
(13, 26, '?Nombre de tu primer hijo?', 'aaaa', '?Nombre de tus padres?', 'aaaa', '?Marca de tu primer auto?', 'aaaa', 1),
(14, 27, '?Nombre de tu primer hijo?', 'hola', '?Nombre de tus padres?', 'holas', '?Marca de tu primer auto?', 'hola1', 0);

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
(26, 'anderson', 'cespedes', 27010387, '1999-11-15', 'aaaax', 'xxxx', 'andersontrabajos2@gmail.com', 'imagen/sombrero-de-graduacion.png', 'administrador', 'desactvado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunacion`
--

CREATE TABLE `vacunacion` (
  `id_vacuna` int(11) NOT NULL,
  `nombre_vacuna` varchar(40) NOT NULL,
  `fecha_primera_d` varchar(40) NOT NULL,
  `fecha_segunda_d` varchar(40) NOT NULL,
  `fecha_tercera_d` varchar(40) NOT NULL,
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id_grado`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id_maestro`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`id_participante`),
  ADD KEY `id_actividad` (`id_actividad`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`id_representante`),
  ADD UNIQUE KEY `cedula_rep` (`cedula_rep`,`correo_rep`),
  ADD KEY `id_estudiante` (`id_estudiante`);

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
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  ADD PRIMARY KEY (`id_vacuna`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `estadistica`
--
ALTER TABLE `estadistica`
  MODIFY `id_estadistica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id_maestro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `participante`
--
ALTER TABLE `participante`
  MODIFY `id_participante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT de la tabla `representante`
--
ALTER TABLE `representante`
  MODIFY `id_representante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguridad_p`
--
ALTER TABLE `seguridad_p`
  MODIFY `id_seguridad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  MODIFY `id_vacuna` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `participante`
--
ALTER TABLE `participante`
  ADD CONSTRAINT `participante_ibfk_1` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`id_actividad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participante_ibfk_2` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `representante`
--
ALTER TABLE `representante`
  ADD CONSTRAINT `representante_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  ADD CONSTRAINT `vacunacion_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
