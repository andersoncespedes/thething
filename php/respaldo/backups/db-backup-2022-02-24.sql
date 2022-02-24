

CREATE TABLE `actividad` (
  `id_actividad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(62) NOT NULL,
  `tipo` varchar(59) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` varchar(56) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `idenm` int(250) NOT NULL,
  `maestro_r` varchar(250) NOT NULL,
  `num_integ` int(50) NOT NULL,
  PRIMARY KEY (`id_actividad`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

INSERT INTO actividad VALUES("88","Efemerides educacion inicial","REALIZADA","natalicio de Ezequiel Zamora por parte de los estudiantes de 2 grado seccion a","2022-02-01","imagen/272875709_1332614477200082_995055237535050035_n.jpg","488264545","Liseth ","4");
INSERT INTO actividad VALUES("89","Visita del personal de INPARQUES","REALIZADA","charla de primeros auxilios (bomberitos por un dia) y charla sobre el cuidando del medio ambiente y nuestra madre tierra","2022-02-05","imagen/272698101_1330416354086561_4882529706499729040_n.jpg","2551880","Liseth ","15");





CREATE TABLE `estadistica` (
  `id_estadistica` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_act` varchar(200) NOT NULL,
  `fecha_act` varchar(200) NOT NULL,
  `num_actividad` int(200) NOT NULL DEFAULT '1',
  `nombre_act` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ident` int(250) NOT NULL,
  `maes_res` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `est_integ` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estadistica`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

INSERT INTO estadistica VALUES("85","REALIZADA","2022-02-01","1","Efemerides educacion inicial","488264545","Liseth ","4");
INSERT INTO estadistica VALUES("86","REALIZADA","2022-02-05","1","Visita del personal de INPARQUES","2551880","Liseth ","15");





CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `grado` varchar(100) NOT NULL,
  `nacimiento` int(100) NOT NULL,
  `est_estud` int(100) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_estudiante`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

INSERT INTO estudiante VALUES("16","Jhoan ","Rivero","256667835","2do Grado Seccion A","2016","1");





CREATE TABLE `grado` (
  `id_grado` int(11) NOT NULL AUTO_INCREMENT,
  `grado` varchar(100) NOT NULL,
  `seccion` varchar(100) NOT NULL,
  `maestro` varchar(100) NOT NULL,
  PRIMARY KEY (`id_grado`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO grado VALUES("8","2do Grado","Seccion A","Liseth  Bolivar");





CREATE TABLE `maestro` (
  `id_maestro` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `cedula` int(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `nacimiento` varchar(200) NOT NULL,
  `direccion` text NOT NULL,
  `servicio` int(100) NOT NULL,
  PRIMARY KEY (`id_maestro`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

INSERT INTO maestro VALUES("18","Liseth ","Bolivar","14568976","liz123@gmail.com","1986-06-24","Urbanizacion san jose de las moreas calle Simon Bolivar","2003");





CREATE TABLE `participante` (
  `id_participante` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(100) NOT NULL,
  `id_actividad` int(100) NOT NULL,
  `tipo_usu22` varchar(100) NOT NULL,
  PRIMARY KEY (`id_participante`),
  KEY `id_actividad` (`id_actividad`),
  KEY `id_estudiante` (`id_estudiante`),
  CONSTRAINT `participante_ibfk_1` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`id_actividad`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `participante_ibfk_2` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;






CREATE TABLE `representante` (
  `id_representante` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rep` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_rep` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cedula_rep` int(100) NOT NULL,
  `telefono_rep` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_rep` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_estudiante` int(100) NOT NULL,
  `direccion_rep` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_representante`),
  KEY `id_estudiante` (`id_estudiante`),
  CONSTRAINT `representante_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;






CREATE TABLE `seguridad_p` (
  `id_seguridad` int(11) NOT NULL AUTO_INCREMENT,
  `iden_us` int(11) NOT NULL,
  `pregunta1` varchar(200) NOT NULL,
  `respuesta1` varchar(200) NOT NULL,
  `pregunta2` varchar(200) NOT NULL,
  `respuesta2` varchar(200) NOT NULL,
  `pregunta3` varchar(150) NOT NULL,
  `respuessta3` varchar(200) NOT NULL,
  `activacion` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_seguridad`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO seguridad_p VALUES("13","26","¿Nombre de tu primer hijo?","aaaa","¿Nombre de tus padres?","aaaa","¿Marca de tu primer auto?","aaaa","1");
INSERT INTO seguridad_p VALUES("14","27","¿Nombre de tu primer hijo?","hola","¿Nombre de tus padres?","holas","¿Marca de tu primer auto?","hola1","0");





CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(62) NOT NULL,
  `apellidos` varchar(59) NOT NULL,
  `cedula` int(19) NOT NULL,
  `nacimiento` varchar(56) NOT NULL,
  `usuario` varchar(67) NOT NULL,
  `pass` varchar(78) NOT NULL,
  `correo` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `imagen_us` varchar(250) NOT NULL DEFAULT 'imagen/descarga.png' COMMENT 'adaqwad',
  `tipo_usu` varchar(100) NOT NULL DEFAULT 'corriente',
  `estado` varchar(100) NOT NULL DEFAULT 'desactvado',
  PRIMARY KEY (`id`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

INSERT INTO usuario VALUES("26","anderson","cespedes","27010387","1999-11-15","aaaax","xxxx","andersontrabajos2@gmail.com","imagen/IMG_20220201_110111.jpg","administrador","desactvado");
INSERT INTO usuario VALUES("27","","","21222529","","holaxxx","1234567","andersontrabajos2@gmail.com","imagen/descarga.png","corriente","desactvado");
INSERT INTO usuario VALUES("28","","","123456","","ander","123456","andersontrabajos2@gmail.com","imagen/descarga.png","corriente","desactvado");





CREATE TABLE `vacunacion` (
  `id_vacuna` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_vacuna` varchar(40) NOT NULL,
  `fecha_primera_d` varchar(40) NOT NULL,
  `fecha_segunda_d` varchar(40) NOT NULL,
  `fecha_tercera_d` varchar(40) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  PRIMARY KEY (`id_vacuna`),
  KEY `id_estudiante` (`id_estudiante`),
  CONSTRAINT `vacunacion_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




