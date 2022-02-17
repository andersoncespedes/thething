

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO actividad VALUES("2","hola soy anderson","DESCARTADA","adasdasdadaa sdasd asd adas dasd asdasdasdasd sadasdsagffg sgsg sgsdg sg sgs","2022-02-09","imagen/f1e6cfdcd598f31128078f16dbd47893c0a5f318r1-538-720v2_hq.jpg","445744661","emilio","14");
INSERT INTO actividad VALUES("3","hola soy andersona sda sd as das","REALIZADA"," asdsa dasda ffa fdafga gs gaefe ad afa fda  fa faf a","2022-02-11","imagen/IMG_20220201_110111.jpg","372317330","emilio","36");





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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO estadistica VALUES("2","DESCARTADA","2022-02-09","1","hola soy anderson","445744661","emilio","14");
INSERT INTO estadistica VALUES("3","REALIZADA","2022-02-11","1","hola soy andersona sda sd as das","372317330","emilio","36");





CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `grado` varchar(100) NOT NULL,
  `nacimiento` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estudiante`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO estudiante VALUES("14","Duvall","rujano","256667836","3er Grado Seccion C","2022-02-17");





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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

INSERT INTO maestro VALUES("13","emilio","raulin Guerrero","12312312","xczcaa@gmail.com","1990-01-31","asdada","0");
INSERT INTO maestro VALUES("14","anderson","ASDAD","344243","andersontrabajos2@gmail.com","2022-02-09","fsdfs sdfsd dsff sdf dsf sdf sdf sdf s","10");
INSERT INTO maestro VALUES("15","anderson","ASDAD","27010387","andersontrabajos2@gmail.com","2022-02-11","asdasdasdas ","0");
INSERT INTO maestro VALUES("16","Duvall","rujano","256667835","","","","0");





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

INSERT INTO usuario VALUES("26","anderson","cespede","27010387","1999-11-15","aaaax","xxxx","andersontrabajos2@gmail.com","imagen/E0ygPz_VUAckWfI.jpg","administrador","desactvado");
INSERT INTO usuario VALUES("27","","","21222529","","holaxxx","1234567","andersontrabajos2@gmail.com","imagen/descarga.png","corriente","desactvado");



