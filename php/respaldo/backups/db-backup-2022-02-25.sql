

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
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

INSERT INTO actividad VALUES("90"," PARRANDON Navideño Institucional","REALIZADA","Hoy Uee San Jose de las Moreas se vistió de gala y alegría para dar la bienvenida a la navidad en nuestra institución educativa con un PARRANDON Navideño Institucional donde participaron todos los grados mostrando excelentes representaciones navideñas y resaltando que el mes de diciembre es el mes más bonito del año porque se festeja la llegada de nuestro niño Jesús","2021-11-29","imagen/","93402102","Kira  Villalba","22");
INSERT INTO actividad VALUES("91","Juramentación del Alcalde ","REALIZADA","Presentes en la Juramentación del Alcalde Mayor Sergio Hernández con nuestras autoridades Directora de educación del Estado Bolívar Yaneri Flores , Martha Nacul Sub Directora de Educación , Maricela Abreu Jefa del departamentos de. Personal de Secretaria de Educación acompañando a nuestra querida Diputada Prof.Brizeida Quiñones","2021-12-03","imagen/264287783_1295316124263251_4982077867927701661_n.jpg","383006986","Kira  Villalba","14");
INSERT INTO actividad VALUES("92","día del Maestro","REALIZADA","Actividades del día de hoy 13/01/2022. Tanto pedagógicas como culturales en el marco del día del Maestro","2022-01-13","imagen/271785385_1320845345043662_5030459631844811040_n.jpg","86587335","Venus  Grimon","11");
INSERT INTO actividad VALUES("93","Visita del personal de INPARQUES","REALIZADA","charla de primeros auxilios (bomberitos por un día) y charla sobre el cuidando del medio ambiente y nuestra madre tierra","2022-01-28","imagen/272736044_1330417507419779_5330284217451438308_n.jpg","227792063","Kira  Villalba","18");
INSERT INTO actividad VALUES("94","día del educador","REALIZADA","Uee San Jose de las Moreas presente en la caminata del día del educador","2022-01-28","imagen/272815281_1330417774086419_1842909103929383292_n.jpg","610479934","Kira  Villalba","10");
INSERT INTO actividad VALUES("95","Elaboracion de marionetas","REALIZADA","Elaboracion de marionetas sobre los heroes de la salud profesora Venus Grimon y Marlon Guevara 2 y 4 grado se educacion bisica","2022-02-02","imagen/272856888_1332617110533152_1731728556242457801_n.jpg","648580603","Kira  Villalba","7");
INSERT INTO actividad VALUES("96","Regreso a clases presenciales","REALIZADA","regleso a clases despues del ciclo epidimiologico por causa del covid 19","2022-02-21","imagen/273973193_1345142395947290_282746393224633599_n.jpg","25342515","Neyslen  Jimenez","10");





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
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

INSERT INTO estadistica VALUES("87","REALIZADA","2021-11-29","1"," PARRANDON Navideño Institucional","93402102","Kira  Villalba","22");
INSERT INTO estadistica VALUES("88","REALIZADA","2021-12-03","1","Juramentación del Alcalde ","383006986","Kira  Villalba","14");
INSERT INTO estadistica VALUES("89","REALIZADA","2022-01-13","1","día del Maestro","86587335","Venus  Grimon","11");
INSERT INTO estadistica VALUES("90","REALIZADA","2022-01-28","1","Visita del personal de INPARQUES","227792063","Kira  Villalba","18");
INSERT INTO estadistica VALUES("91","REALIZADA","2022-01-28","1","día del educador","610479934","Kira  Villalba","10");
INSERT INTO estadistica VALUES("92","REALIZADA","2022-02-02","1","Elaboracion de marionetas","648580603","Kira  Villalba","7");
INSERT INTO estadistica VALUES("93","REALIZADA","2022-02-21","1","Regreso a clases presenciales","25342515","Neyslen  Jimenez","10");





CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `grado` varchar(100) NOT NULL,
  `nacimiento` int(100) NOT NULL,
  `est_estud` int(100) NOT NULL DEFAULT '1',
  `sexo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estudiante`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

INSERT INTO estudiante VALUES("16","Jhoan ","Riverol","256667835","6to Grado Seccion A","2022","1","Masculino");
INSERT INTO estudiante VALUES("17","cesar","saul","124927983","2do Grado Seccion A","2015","1","Masculino");
INSERT INTO estudiante VALUES("18","anderson","Guerrero","156232781","4to Grado Seccion A","2014","1","Masculino");
INSERT INTO estudiante VALUES("19","Ciro","Carmona","172675172","1er Grado Seccion A","2016","1","Masculino");
INSERT INTO estudiante VALUES("20","Raul","Salazzar","145689785","5to Grado Seccion A","2012","1","Masculino");
INSERT INTO estudiante VALUES("21","Juan","Morales","145698798","1er Grado Seccion A","2015","1","Masculino");
INSERT INTO estudiante VALUES("22","Angela ","Joselin","252645789","1er Grado Seccion A","2016","1","Femenino");





CREATE TABLE `grado` (
  `id_grado` int(11) NOT NULL AUTO_INCREMENT,
  `grado` varchar(100) NOT NULL,
  `seccion` varchar(100) NOT NULL,
  `maestro` varchar(100) NOT NULL,
  PRIMARY KEY (`id_grado`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO grado VALUES("8","2do Grado","Seccion A","Liseth  Bolivar");
INSERT INTO grado VALUES("9","1er Grado","Seccion A","Kira  Villalba");
INSERT INTO grado VALUES("10","3er Grado","Seccion A","Brizeida  Quiñones");
INSERT INTO grado VALUES("11","4to Grado","Seccion A","Venus  Grimon");
INSERT INTO grado VALUES("12","5to Grado","Seccion A","Neyslen  Jimenez");
INSERT INTO grado VALUES("13","6to Grado","Seccion A","Marlon  Guevara");





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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

INSERT INTO maestro VALUES("18","Liseth ","Bolivar","14568976","liz123@gmail.com","1986-06-24","Urbanizacion san jose de las moreas calle Simon Bolivar","2003");
INSERT INTO maestro VALUES("19","Marlon ","Guevara","16225654","ejemplo@gmail.com","2002-06-25","urbanización San Jose De las Moreas calle principal","2004");
INSERT INTO maestro VALUES("20","Neyslen ","Jimenez","15625478","nessui12@gmail.com","1984-10-25","Urbanizacion San Jose de las Moreas Calle Gonzalo Barrios","2003");
INSERT INTO maestro VALUES("21","Venus ","Grimon","12492798","venus_G1254@gmail.com","1981-08-10","Urbanización San Jose de las Moreas Calle Penalver","2003");
INSERT INTO maestro VALUES("22","Brizeida ","Quiñones","17267517","brizz_qui11@gmail.com","1986-07-04","Urbanizacion San Jose de las Moreas calle Simon Bolivar","2003");
INSERT INTO maestro VALUES("24","Kira ","Villalba","12654321","kirra44@gmail.com","1980-01-01","Urbanizacion San Jose de las Moreas Calle Central","2000");





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
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8;

INSERT INTO participante VALUES("97","21","90","");
INSERT INTO participante VALUES("98","20","90","");
INSERT INTO participante VALUES("99","19","90","");
INSERT INTO participante VALUES("100","18","90","");
INSERT INTO participante VALUES("101","17","90","");
INSERT INTO participante VALUES("102","16","90","");
INSERT INTO participante VALUES("105","21","91","");
INSERT INTO participante VALUES("106","20","91","");
INSERT INTO participante VALUES("107","19","91","");
INSERT INTO participante VALUES("108","18","91","");
INSERT INTO participante VALUES("109","17","91","");
INSERT INTO participante VALUES("110","16","91","");
INSERT INTO participante VALUES("113","21","92","");
INSERT INTO participante VALUES("114","20","92","");
INSERT INTO participante VALUES("115","19","92","");
INSERT INTO participante VALUES("116","18","92","");
INSERT INTO participante VALUES("117","17","92","");
INSERT INTO participante VALUES("118","16","92","");
INSERT INTO participante VALUES("121","21","93","");
INSERT INTO participante VALUES("122","20","93","");
INSERT INTO participante VALUES("123","19","93","");
INSERT INTO participante VALUES("124","18","93","");
INSERT INTO participante VALUES("125","17","93","");
INSERT INTO participante VALUES("126","16","93","");
INSERT INTO participante VALUES("129","21","94","");
INSERT INTO participante VALUES("130","20","94","");
INSERT INTO participante VALUES("131","19","94","");
INSERT INTO participante VALUES("132","18","94","");
INSERT INTO participante VALUES("133","17","94","");
INSERT INTO participante VALUES("134","16","94","");
INSERT INTO participante VALUES("137","21","95","");
INSERT INTO participante VALUES("138","20","95","");
INSERT INTO participante VALUES("139","19","95","");
INSERT INTO participante VALUES("148","18","96","");
INSERT INTO participante VALUES("149","17","96","");
INSERT INTO participante VALUES("150","16","96","");





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

INSERT INTO seguridad_p VALUES("13","26","?Nombre de tu primer hijo?","aaaa","?Nombre de tus padres?","aaaa","?Marca de tu primer auto?","aaaa","1");
INSERT INTO seguridad_p VALUES("14","27","?Nombre de tu primer hijo?","hola","?Nombre de tus padres?","holas","?Marca de tu primer auto?","hola1","0");





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




