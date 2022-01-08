

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
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

INSERT INTO actividad VALUES("64","adasdad","DESCARTADA","a","2021-11-18","imagen/FD9q8B2XMAYbUh9.jpg","430597749","julio cesar","11");
INSERT INTO actividad VALUES("65","fsdfsdfsfsd ","REALIZADA","zcxzczxczcx","2021-11-03","imagen/fgcqkov4l0081.jpg","964070162","emilio","17");
INSERT INTO actividad VALUES("68","hola soy anderson","FUTURA","asadads","2021-11-18","imagen/Imagen2.jpg","23333913","emilio","3");





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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

INSERT INTO estadistica VALUES("56","DESCARTADA","2021-11-18","1","adasdad","430597749","julio cesar","11");
INSERT INTO estadistica VALUES("57","REALIZADA","2021-11-03","1","fsdfsdfsfsd ","964070162","emilio","17");
INSERT INTO estadistica VALUES("60","FUTURA","2021-11-18","1","hola soy anderson","23333913","emilio","3");





CREATE TABLE `maestro` (
  `id_maestro` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `cedula` int(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `nacimiento` varchar(200) NOT NULL,
  `direccion` text NOT NULL,
  PRIMARY KEY (`id_maestro`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO maestro VALUES("12","julio cesar","gerardo quintana","2147483647","peande96@gmail.com","1990-02-14","vcbcbcbnfghf");
INSERT INTO maestro VALUES("13","emilio","raulin Guerrero","12312312","xczcaa@gmail.com","1990-01-31","asdada");
INSERT INTO maestro VALUES("14","raul alfonso","sayoll carraz","13515897","example@gmail.com","2021-11-15","adasd asda ");





CREATE TABLE `seguridad_p` (
  `id_seguridad` int(11) NOT NULL AUTO_INCREMENT,
  `iden_us` varchar(200) NOT NULL,
  `pregunta1` varchar(200) NOT NULL,
  `respuesta1` varchar(200) NOT NULL,
  `pregunta2` varchar(200) NOT NULL,
  `respuesta2` varchar(200) NOT NULL,
  `pregunta3` varchar(150) NOT NULL,
  `respuessta3` varchar(200) NOT NULL,
  `activacion` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_seguridad`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO seguridad_p VALUES("4","84060116.666667","¿Color favorito?","azul","¿Nombre de tu primer hijo?","azul","¿Comida favorita?","azul","1");
INSERT INTO seguridad_p VALUES("5","115304736","","","","","","","0");
INSERT INTO seguridad_p VALUES("6","323687620","¿Nombre de tu mascota?","junior","¿Nombre de tu primer hijo?","christian","¿Color favorito?","blue","1");





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
  `ident_p` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO usuario VALUES("15","","","27010387","","andersondavid","cesar69","jhoanes@gmail.com","imagen/FEN8jNqWUAAfyVS.jpg","84060116.666667");
INSERT INTO usuario VALUES("16","","","12312312","","anderson","aaaa","asdasdasda@gmail.com","imagen/descarga.png","115304736");
INSERT INTO usuario VALUES("17","","","12191791","","ander56","asdfr","2e213132123@gmail.com","imagen/descarga.png","323687620");



