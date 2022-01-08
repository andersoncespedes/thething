

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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

INSERT INTO actividad VALUES("55","Yuki-onna","FUTURA","Yuki-onna es un espíritu o yōkai encontrado en el folclore japonés. Es una figura popular de Japón, se la puede encontrar en la animación, el manga y la literatura japonesa. Se suele confundir a Yuki-onna con Yama-uba, pero las dos figuras son distintas.​","2021-10-24","imagen/E4vWT0VVgAMj9qa.jpg","1220215049","emilio","15");
INSERT INTO actividad VALUES("56","yokaai","REALIZADA","Yōkai ​ son una clase de criaturas pertenecientes al folclore japonés. Algunos tienen partes animales, partes humanas o partes de los dos, tales como los Kappa y Tengu. Los yōkai son generalmente más poderosos que los seres humanos y, debido a esto, tienden a actuar con arrogancia sobre los mortales.","2021-10-24","imagen/E-2vI7aUcAcqzDD.jpg","751979613","julio cesar","9");
INSERT INTO actividad VALUES("57","Nurarihyon","REALIZADA","Nurarihyon, o Nūrihyon, es un Yōkai japonés del que se dice que se ha generado en la Prefectura de Wakayama. Se especula que su nombre original era Nūrihyon, siendo Nurarihyon una lectura errónea que se perpetuó.​​","2021-10-24","imagen/E5TZcDbVoAUlVv3.jpg","106518693","emilio","30");
INSERT INTO actividad VALUES("58","kappa - yokai","REALIZADA","Continuando con la serie de artículos sobre la mitología japonesa, hoy hablaré del kappa. El kappa (河童) es uno de los monstruos del folclor japonés más conocidos. Es un demonio que vive en el agua y que, de acuerdo a las leyendas japonesas, vive en los ríos y estanques de Japón. Es un monstruo letal y también bromista. En la tradición sintoísta, el kappa era considerado un dios del agua (水神).","2021-11-02","imagen/E5YjB3qUUAE0TSJ.jpg","20214499","julio cesar","45");





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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

INSERT INTO estadistica VALUES("38","FUTURA","2021-10-24","1","Yuki-onna","1220215049","emilio","15");
INSERT INTO estadistica VALUES("39","REALIZADA","2021-10-24","1","yokaai","751979613","julio cesar","9");
INSERT INTO estadistica VALUES("40","REALIZADA","2021-10-24","1","Nurarihyon","106518693","emilio","30");
INSERT INTO estadistica VALUES("41","REALIZADA","2021-11-02","1","kappa - yokai","20214499","julio cesar","45");





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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO maestro VALUES("12","julio cesar","gerardo quintana","2147483647","peande96@gmail.com","1990-02-14","vcbcbcbnfghf");
INSERT INTO maestro VALUES("13","emilio","raulin Guerrero","12312312","xczcaa@gmail.com","1990-01-31","asdada");





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

INSERT INTO usuario VALUES("15","","","27010387","","andersondavid","cesar69","jhoanes@gmail.com","imagen/descarga.png","84060116.666667");
INSERT INTO usuario VALUES("16","","","12312312","","anderson","aaaa","asdasdasda@gmail.com","imagen/descarga.png","115304736");
INSERT INTO usuario VALUES("17","","","12191791","","ander56","asdfr","2e213132123@gmail.com","imagen/descarga.png","323687620");



