

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
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

INSERT INTO actividad VALUES("83","asajdiasjdioajdiajdi","FUTURA","adaokdaopkfopdkfosdkpfoksfkosdkfos dkdfosadadkoa kdopakodka fod\n","2022-02-20","imagen/","776781800","anderson ASDAD","17");
INSERT INTO actividad VALUES("84","asdadadkapodka","FUTURA","kjsdjakdjlakdjak jsdjakjdaslj akdj kajdkajdklasdadajfdfajdkl","2022-12-31","imagen/","496198626","emilio raulin Guerrero","17");
INSERT INTO actividad VALUES("85","dadaoidaopdisai ","REALIZADA","dasdajsdakiljd iakjfodsjfosjfois jfijs fijsf ksjdfklsjlkfjkls","2022-02-20","imagen/","215172143","anderson ASDAD","12");
INSERT INTO actividad VALUES("86","kakdaskdkadlkadkñlf","FUTURA","oiwoioaidpoasidposiadpoiasspop fikdsjf jsdifo jdsijf odisjfidsjof jdsif josdjfdso","2022-02-14","imagen/","1061975433","emilio raulin Guerrero","22");





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
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

INSERT INTO estadistica VALUES("80","FUTURA","2022-02-20","1","asajdiasjdioajdiajdi","776781800","anderson ASDAD","17");
INSERT INTO estadistica VALUES("81","FUTURA","2022-12-31","1","asdadadkapodka","496198626","emilio raulin Guerrero","17");
INSERT INTO estadistica VALUES("82","REALIZADA","2022-02-20","1","dadaoidaopdisai ","215172143","anderson ASDAD","12");
INSERT INTO estadistica VALUES("83","FUTURA","2022-02-14","1","kakdaskdkadlkadkñlf","1061975433","emilio raulin Guerrero","22");





CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `grado` varchar(100) NOT NULL,
  `nacimiento` int(100) NOT NULL,
  PRIMARY KEY (`id_estudiante`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO estudiante VALUES("11","anderson","asdad231314","213144","1er Grado Seccion A","0");
INSERT INTO estudiante VALUES("12","anderson","ASDAD","27010387","3er Grado Seccion C","2022");
INSERT INTO estudiante VALUES("13","cesar","ASDAD","213123213","3er Grado Seccion C","2022");
INSERT INTO estudiante VALUES("14","raul","cesar","1211545454","3er Grado Seccion C","2002");
INSERT INTO estudiante VALUES("15","martin","martinez","145654545","3er Grado Seccion C","2002");





CREATE TABLE `grado` (
  `id_grado` int(11) NOT NULL AUTO_INCREMENT,
  `grado` varchar(100) NOT NULL,
  `seccion` varchar(100) NOT NULL,
  `maestro` varchar(100) NOT NULL,
  PRIMARY KEY (`id_grado`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO grado VALUES("5","3er Grado","Seccion C","julio cesar gerardo quintana");
INSERT INTO grado VALUES("6","1er Grado","Seccion A","anderson ASDAD");





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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO maestro VALUES("13","emilio","raulin Guerrero","12312312","xczcaa@gmail.com","1990-01-31","asdada","0");
INSERT INTO maestro VALUES("14","anderson","ASDAD","344243","andersontrabajos2@gmail.com","2022-02-09","fsdfs sdfsd dsff sdf dsf sdf sdf sdf s","10");
INSERT INTO maestro VALUES("15","anderson","ASDAD","27010387","andersontrabajos2@gmail.com","2022-02-11","asdasdasdas ","0");





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
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

INSERT INTO participante VALUES("75","13","83","");
INSERT INTO participante VALUES("76","12","83","");
INSERT INTO participante VALUES("77","11","83","");
INSERT INTO participante VALUES("80","14","84","");
INSERT INTO participante VALUES("81","13","84","");
INSERT INTO participante VALUES("82","12","84","");
INSERT INTO participante VALUES("83","11","84","");
INSERT INTO participante VALUES("86","14","85","");
INSERT INTO participante VALUES("87","13","85","");
INSERT INTO participante VALUES("95","12","86","");
INSERT INTO participante VALUES("96","11","86","");





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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;






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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

INSERT INTO usuario VALUES("26","anderson","cespedes","27010387","1999-11-15","aaaax","xxxx","andersontrabajos2@gmail.com","imagen/IMG_20220201_110111.jpg","administrador","desactvado");
INSERT INTO usuario VALUES("27","","","21222529","","holaxxx","1234567","andersontrabajos2@gmail.com","imagen/descarga.png","corriente","desactvado");



