

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
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

INSERT INTO actividad VALUES("64","adasdad","DESCARTADA","a","2021-11-18","imagen/FD9q8B2XMAYbUh9.jpg","430597749","julio cesar","11");
INSERT INTO actividad VALUES("65","fsdfsdfsfsd ","REALIZADA","zcxzczxczcx","2021-11-03","imagen/fgcqkov4l0081.jpg","964070162","emilio","17");
INSERT INTO actividad VALUES("69","adasdadadad","FUTURA","gfdgd","2021-11-18","imagen/6c67aefb3d9f51a3bc08fb687216a818.jpg","1268433026","raul alfonso","11");
INSERT INTO actividad VALUES("70","aqqqASDAD","REALIZADA","mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmSS DA ASD ASDASDASDADDASDADADADA AFAFAA ASDASDAD ","2021-11-19","imagen/FDoVDwtWEAU1wH9.png","96399138","raul alfonso","92");
INSERT INTO actividad VALUES("71","hola soy anderson","REALIZADA","asdadadfgg ea ewada ad aaa sdad adasdaasdasdasdsadasddasdsa","2021-11-25","imagen/E_5rztnUYAkROzu.jpg","435251031","emilio","32");
INSERT INTO actividad VALUES("72","aaaaaaaaa","FUTURA","aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa","2021-11-25","imagen/E_0iN87UcAgl257.jpg","188486273","emilio","26");





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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

INSERT INTO estadistica VALUES("56","DESCARTADA","2021-11-18","1","adasdad","430597749","julio cesar","11");
INSERT INTO estadistica VALUES("57","REALIZADA","2021-11-03","1","fsdfsdfsfsd ","964070162","emilio","17");
INSERT INTO estadistica VALUES("61","FUTURA","2021-11-18","1","adasdadadad","1268433026","raul alfonso","11");
INSERT INTO estadistica VALUES("62","REALIZADA","2021-11-19","1","aqqqASDAD","96399138","raul alfonso","92");
INSERT INTO estadistica VALUES("63","REALIZADA","2021-11-25","1","hola soy anderson","435251031","emilio","32");
INSERT INTO estadistica VALUES("64","FUTURA","2021-11-25","1","aaaaaaaaa","188486273","emilio","26");





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

INSERT INTO maestro VALUES("12","julio cesar","gerardo quintana","2147483647","peande96@gmail.com","1990-02-14","vcbcbcbnfghf","0");
INSERT INTO maestro VALUES("13","emilio","raulin Guerrero","12312312","xczcaa@gmail.com","1990-01-31","asdada","0");
INSERT INTO maestro VALUES("18","aaaaa","aaaa","27010387","andersontrabajos2@gmail.com","2021-11-25","aaaaaaaaaaaaaaaaaaaaaa","1502");





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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO seguridad_p VALUES("13","26","¿Nombre de tu primer hijo?","aaaa","¿Nombre de tus padres?","aaaa","¿Marca de tu primer auto?","aaaa","1");





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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO usuario VALUES("26","","","27010387","","aaaax","xxxx","andersontrabajos2@gmail.com","imagen/FDoVDwtWEAU1wH9.png","adninistrador","desactvado");



