-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-04-2014 a las 05:12:33
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `recursos_humanos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conocimientos_generales`
--

CREATE TABLE IF NOT EXISTS `conocimientos_generales` (
  `folioSolicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave foranea de la tabla solicitud',
  `idiomaDomin1` varchar(20) DEFAULT NULL COMMENT 'idioma que domina 1',
  `habla1` varchar(10) DEFAULT NULL COMMENT 'porcentaje que habla 1',
  `lee1` varchar(10) DEFAULT NULL COMMENT 'porcentaje que lee 1',
  `escribe1` varchar(10) DEFAULT NULL COMMENT 'porcentaje que escribe 1',
  `idiomaDomin2` varchar(20) DEFAULT NULL COMMENT 'idioma que domina 2',
  `habla2` varchar(10) DEFAULT NULL COMMENT 'porcentaje que habla 2',
  `lee2` varchar(10) DEFAULT NULL COMMENT 'porcentaje que lee 2',
  `escribe2` varchar(10) DEFAULT NULL COMMENT 'porcentaje que escribe 2',
  `idiomaDomin3` varchar(20) DEFAULT NULL COMMENT 'idioma que domina 3',
  `habla3` varchar(10) DEFAULT NULL COMMENT 'porcentaje que habla 3',
  `lee3` varchar(10) DEFAULT NULL COMMENT 'porcentaje que lee 3',
  `escribe3` varchar(10) DEFAULT NULL COMMENT 'porcentaje que escribe 3',
  `idiomaDomin4` varchar(20) DEFAULT NULL COMMENT 'idioma que domina 4',
  `habla4` varchar(10) DEFAULT NULL COMMENT 'porcentaje que habla 4',
  `lee4` varchar(10) DEFAULT NULL COMMENT 'porcentaje que lee 4',
  `escribe4` varchar(10) DEFAULT NULL COMMENT 'porcentaje que escribe 4',
  `maquinaOficTallManejar` varchar(100) DEFAULT NULL COMMENT 'maquinas de taller u oficina que sepa manejar',
  `funcionOficDomina` varchar(100) DEFAULT NULL COMMENT 'funciones de oficina que domina',
  `softwareDomina` varchar(100) DEFAULT NULL COMMENT 'software que domina',
  KEY `folioSolicitud` (`folioSolicitud`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `conocimientos_generales`
--

INSERT INTO `conocimientos_generales` (`folioSolicitud`, `idiomaDomin1`, `habla1`, `lee1`, `escribe1`, `idiomaDomin2`, `habla2`, `lee2`, `escribe2`, `idiomaDomin3`, `habla3`, `lee3`, `escribe3`, `idiomaDomin4`, `habla4`, `lee4`, `escribe4`, `maquinaOficTallManejar`, `funcionOficDomina`, `softwareDomina`) VALUES
(33, 'Español', '100', '100', '100', 'Inglés', '80', '80', '80', 'Francés', '35', '40', '35', NULL, NULL, NULL, NULL, 'computadora, copiadora, etc.', 'recibir llamadas, ordenar papeles, llevar el control de oficina, etc.', 'Microsoft Office.'),
(34, 'Español', '1000', '1000', '1000', 'Español', '100', '100', '1000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'computadoras, cell', 'archivar', 'word, excell, power point, etc.'),
(40, 'Bengali', '12', '60', '60', 'Inglés', '60', '60', '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'computadora,maquina de escribir, cafetera.', NULL, ' office');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_familiares`
--

CREATE TABLE IF NOT EXISTS `datos_familiares` (
  `folioSolicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave foranea de la tabla solicitud',
  `nomPadre` varchar(60) DEFAULT NULL COMMENT 'nombre del padre',
  `viveFinaPadre` varchar(6) DEFAULT NULL COMMENT 'vivo o finado padre',
  `direccPadre` varchar(80) DEFAULT NULL COMMENT 'direccion del padre',
  `ocupaPadre` varchar(50) DEFAULT NULL COMMENT 'ocupacion del padre',
  `nomMadre` varchar(60) DEFAULT NULL COMMENT 'nombre de la madre',
  `viveFinaMadre` varchar(6) DEFAULT NULL COMMENT 'vive o finado madre',
  `direccMadre` varchar(80) DEFAULT NULL COMMENT 'direccion de la madre',
  `ocupaMadre` varchar(50) DEFAULT NULL COMMENT 'ocupacion de la madre',
  `nomEsposo` varchar(60) DEFAULT NULL COMMENT 'nombre del esposo',
  `viveFinaEsposo` varchar(6) DEFAULT NULL COMMENT 'vive o finado esposo',
  `direccEsposo` varchar(80) DEFAULT NULL COMMENT 'direccion del esposo',
  `ocupaEsposo` varchar(50) DEFAULT NULL COMMENT 'ocupacion del esposo ',
  `nomEdadHijos` varchar(80) DEFAULT NULL COMMENT 'nombres y edades de los hijos',
  KEY `folioSolicitud` (`folioSolicitud`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `datos_familiares`
--

INSERT INTO `datos_familiares` (`folioSolicitud`, `nomPadre`, `viveFinaPadre`, `direccPadre`, `ocupaPadre`, `nomMadre`, `viveFinaMadre`, `direccMadre`, `ocupaMadre`, `nomEsposo`, `viveFinaEsposo`, `direccEsposo`, `ocupaEsposo`, `nomEdadHijos`) VALUES
(33, 'Miguel Estrada Hinojosa', 'Vive', 'Rio otapa 224. Fracc. Lomas 3. Veracruz', 'Comerciante', 'Jacqueline Rivera Franyutti', 'Vive', 'Rio otapa 224. Fracc. Lomas 3. Veracruz', 'Ama de casa', NULL, NULL, NULL, NULL, NULL),
(34, 'roberto fausto jimenez', 'Vive', 'mision del carmen', 'amo de casa', 'ANGELA CORREA GONZALEZ', 'Vive', 'huimanguillo tabasco', 'ama de casa', 'sergio olan gonzalez', 'Vive', 'villas del sol', 'estudiante', NULL),
(40, 'juan harrison', 'Vive', 'calle 50 con av 90', 'carpintero', 'lola ford', 'Vive', 'calle 50 con av 90 ', 'maestra', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE IF NOT EXISTS `datos_personales` (
  `folioSolicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave foranea de la tabla solicitud',
  `apPaterPerson` varchar(25) DEFAULT NULL COMMENT 'apellido paterno de la persona',
  `apMaterPerson` varchar(25) DEFAULT NULL COMMENT 'apellido materno de la persona',
  `nomPerson` varchar(40) DEFAULT NULL COMMENT 'nombre de la persona',
  `edadPerson` varchar(10) DEFAULT NULL COMMENT 'edad de la persona',
  `direccPerson` varchar(100) DEFAULT NULL COMMENT 'direccion de la persona',
  `telPerson` varchar(25) DEFAULT NULL COMMENT 'telefono de la persona',
  `sexoPerson` varchar(10) DEFAULT NULL COMMENT 'sexo de la persona',
  `municipioPerson` varchar(50) DEFAULT NULL COMMENT 'municipio de la persona',
  `cdPostalPerson` varchar(15) DEFAULT NULL COMMENT 'codigo postal de la persona',
  `lugarNacimPerson` varchar(40) DEFAULT NULL COMMENT 'lugar de nacimiento de la persona',
  `diaNacimPerson` varchar(45) DEFAULT NULL COMMENT 'dia del nacimiento de la persona',
  `mesNacimPerson` varchar(12) DEFAULT NULL COMMENT 'mes del nacimiento de la persona',
  `anioNacimPerson` varchar(45) DEFAULT NULL COMMENT 'año del nacimiento de la persona',
  `nacionPerson` varchar(30) DEFAULT NULL COMMENT 'nacionalidad de la persona',
  `emailPerson` varchar(50) DEFAULT NULL COMMENT 'correo electronico o email de la persona',
  `personDepenUs` varchar(15) DEFAULT NULL COMMENT 'personas que dependen de la persona',
  `personViveCon` varchar(15) DEFAULT NULL COMMENT 'personas con las que vive la persona',
  `estadoCivilPerson` varchar(45) DEFAULT NULL COMMENT 'estado civil de la persona',
  KEY `folioSolicitud` (`folioSolicitud`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`folioSolicitud`, `apPaterPerson`, `apMaterPerson`, `nomPerson`, `edadPerson`, `direccPerson`, `telPerson`, `sexoPerson`, `municipioPerson`, `cdPostalPerson`, `lugarNacimPerson`, `diaNacimPerson`, `mesNacimPerson`, `anioNacimPerson`, `nacionPerson`, `emailPerson`, `personDepenUs`, `personViveCon`, `estadoCivilPerson`) VALUES
(33, 'Estrada ', 'Rivera', 'Jacqueline', '19', 'Paseo de salamanca N° 50', '9845937325', 'Mujer', 'Solidaridad', '77111', 'Veracruz, Veracruz', '20', 'Marzo', '1994', 'Mexicana', 'Jacqueline.estriv@gmail.com', 'Ninguno', 'Familia', 'Soltera'),
(34, 'fausto', 'correa', 'yazmin del rocio', '19', 'calle patos2 fraccionamiento las Palmas1', '9841173035', 'Mujer', 'solidaridad', '77714', 'tabasco', '30', 'Diciembre', '1993', 'mexicana', 'yazfauscor@gmail.com', 'Ninguno', 'Parientes', 'casada'),
(40, 'harrison', 'ford', 'HYTHYTY', '23', 'calle 14 norte entre av 80 y 75', '9841234568', 'Hombre', 'solidaridad', '77712', 'playa del carmen', '5', 'Agosto', '1990', 'mexicana', 'javier_harrison@correocaliente.com', NULL, 'Solo', 'soltero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentacion`
--

CREATE TABLE IF NOT EXISTS `documentacion` (
  `folioSolicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave foranea de la tabla solicitud',
  `curp` varchar(25) DEFAULT NULL COMMENT 'CURP',
  `afore` varchar(25) DEFAULT NULL COMMENT 'afore',
  `rfc` varchar(25) DEFAULT NULL COMMENT 'registro federal de contribuyentes -RFC',
  `imss` varchar(25) DEFAULT NULL COMMENT 'seguro social -imss',
  `cartillaMilitar` varchar(25) DEFAULT NULL COMMENT 'cartilla del servicio militar',
  `pasaporte` varchar(25) DEFAULT NULL COMMENT 'pasaporte',
  `licManejo` varchar(25) DEFAULT NULL COMMENT 'tiene licencia de manejo (si/no)',
  `clasNumLicManejo` varchar(25) DEFAULT NULL COMMENT 'clase y numero de licencia de manejo',
  `docPermiteTrbja` varchar(25) DEFAULT NULL COMMENT 'si es extranjero, documento que le permite trabajar en el pais',
  KEY `folioSolicitud` (`folioSolicitud`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `documentacion`
--

INSERT INTO `documentacion` (`folioSolicitud`, `curp`, `afore`, `rfc`, `imss`, `cartillaMilitar`, `pasaporte`, `licManejo`, `clasNumLicManejo`, `docPermiteTrbja`) VALUES
(33, 'EARJ940320MVZSVC09', NULL, NULL, NULL, NULL, NULL, 'NO', NULL, NULL),
(34, '55484562156yhdsxd', NULL, '125545gt', '5155612', NULL, NULL, 'no', NULL, NULL),
(40, 'HGJHGHJGJHG', NULL, NULL, '35464', NULL, NULL, 'no', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_requeridos`
--

CREATE TABLE IF NOT EXISTS `documentos_requeridos` (
  `folioSolicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave foranea de la tabla solicitud',
  `curriculumVitae` text COMMENT 'curriculum vitae',
  `cartaRecomendacion1` text COMMENT 'carta de recomendacion 1',
  `cartaRecomendacion2` text COMMENT 'carta de recomendacion 2',
  `ActaNacimiento` text COMMENT 'acta de nacimiento',
  `ife` text COMMENT 'ife',
  `comprobanteDomicilio` text COMMENT 'comprobante de domicilio',
  `certificadoMedico` text COMMENT 'certificado medico',
  `doc_probatorio_act_profes_realiza` text COMMENT 'documento probatorio de las actividades profesionales realizadas en el sector',
  `doc_probatorio_act_docentes_realizad` text COMMENT 'documento probatorio de las actividades docentes realizadas',
  `comentarios` text COMMENT 'comentarios',
  KEY `folioSolicitud` (`folioSolicitud`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `documentos_requeridos`
--

INSERT INTO `documentos_requeridos` (`folioSolicitud`, `curriculumVitae`, `cartaRecomendacion1`, `cartaRecomendacion2`, `ActaNacimiento`, `ife`, `comprobanteDomicilio`, `certificadoMedico`, `doc_probatorio_act_profes_realiza`, `doc_probatorio_act_docentes_realizad`, `comentarios`) VALUES
(33, 'BD.pdf', 'comandos-sql.pdf', 'Modelo entidad relacion farmacia.pdf', '1376923698 - Modelo entidad relacion farmacia.pdf', 'Mysql.pdf', 'todos los comandos-sql.pdf', '1376923698 - comandos-sql.pdf', '1376923698 - todos los comandos-sql.pdf', '1376923698 - BD.pdf', NULL),
(34, '1376945085 - comandos-sql.pdf', '1376945085 - BD.pdf', 'MejoresPracticasDotNet.pdf', '1376945085 - Modelo entidad relacion farmacia.pdf', '1376945085 - Mysql.pdf', '1376945085 - todos los comandos-sql.pdf', '1376945085 - BD.pdf', '1376945085 - comandos-sql.pdf', '1376945085 - MejoresPracticasDotNet.pdf', NULL),
(40, 'comandos unix.pdf', '1377009414 - Windows Server-Particiones y sistemas de ficheros.pdf', '1377009414  Windows_Server_Active_Directory.pdf', '1377009414 - WSERVER - UD3 - Usuarios y Grupos en Windows 2003 Server I.pdf', '1377009414 - WSERVER - UD3 - Usuarios y Grupos en Windows 2003 Server II.pdf', '1377009414 - Administrar el acceso a recursos Windows Server.PDF', '1377009414 - WSERVER - UD3 - Usuarios y Grupos en Windows 2003 Server I.pdf', '1377009414 - WSERVER - UD3 - Usuarios y Grupos en Windows 2003 Server I.pdf', 'Comandos Linux.pdf', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escolaridad`
--

CREATE TABLE IF NOT EXISTS `escolaridad` (
  `folioSolicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave foranea de la tabla solicitud',
  `nomPrima` varchar(60) DEFAULT NULL COMMENT 'nombre de la primaria',
  `direccPrima` varchar(80) DEFAULT NULL COMMENT 'direccion de la primaria',
  `fechPrimaDE` varchar(20) DEFAULT NULL COMMENT 'fecha primaria de',
  `fechPrimaA` varchar(20) DEFAULT NULL COMMENT 'fecha primaria a',
  `anioPrima` varchar(20) DEFAULT NULL COMMENT 'años en la primaria',
  `tituloPrima` varchar(65) DEFAULT NULL COMMENT 'titulo de primaria',
  `nomSecu` varchar(60) DEFAULT NULL COMMENT 'nombre de la secundaria',
  `direccSecu` varchar(80) DEFAULT NULL COMMENT 'direccion de la secundaria',
  `fechSecuDE` varchar(20) DEFAULT NULL COMMENT 'fecha secundaria de',
  `fechSecuA` varchar(20) DEFAULT NULL COMMENT 'fecha secundaria a',
  `anioSecu` varchar(20) DEFAULT NULL COMMENT 'años en la secundaria',
  `tituloSecu` varchar(65) DEFAULT NULL COMMENT 'titulo de secundaria',
  `nomPrepa` varchar(60) DEFAULT NULL COMMENT 'nombre de la preparatoria',
  `direccPrepa` varchar(80) DEFAULT NULL COMMENT 'direccion de la preparatoria',
  `fechPrepaDE` varchar(20) DEFAULT NULL COMMENT 'fecha preparatoria de',
  `fechPrepaA` varchar(20) DEFAULT NULL COMMENT 'fecha preparatoria a',
  `anioPrepa` varchar(20) DEFAULT NULL COMMENT 'años en la preparatoria',
  `tituloPrepa` varchar(65) DEFAULT NULL COMMENT 'titulo de preparatoria',
  `nomProfes` varchar(60) DEFAULT NULL COMMENT 'nombre de la universidad',
  `direccProfes` varchar(80) DEFAULT NULL COMMENT 'direccion de la universidad',
  `fechProfesDE` varchar(20) DEFAULT NULL COMMENT 'fecha universidad de',
  `fechProfesA` varchar(20) DEFAULT NULL COMMENT 'fecha universidad a',
  `anioProfes` varchar(20) DEFAULT NULL COMMENT 'años en la universidad',
  `tituloProfes` varchar(65) DEFAULT NULL COMMENT 'titulo de universidad',
  `nomEscActual` varchar(60) DEFAULT NULL COMMENT 'nombre de la institucion actual',
  `horaEscActual` varchar(50) DEFAULT NULL COMMENT 'horario en la institucion actual',
  `carreraEscActual` varchar(50) DEFAULT NULL COMMENT 'carrera en la institucion actual',
  `gradEscActual` varchar(45) DEFAULT NULL COMMENT 'grado en la institucion actual',
  KEY `folioSolicitud` (`folioSolicitud`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `escolaridad`
--

INSERT INTO `escolaridad` (`folioSolicitud`, `nomPrima`, `direccPrima`, `fechPrimaDE`, `fechPrimaA`, `anioPrima`, `tituloPrima`, `nomSecu`, `direccSecu`, `fechSecuDE`, `fechSecuA`, `anioSecu`, `tituloSecu`, `nomPrepa`, `direccPrepa`, `fechPrepaDE`, `fechPrepaA`, `anioPrepa`, `tituloPrepa`, `nomProfes`, `direccProfes`, `fechProfesDE`, `fechProfesA`, `anioProfes`, `tituloProfes`, `nomEscActual`, `horaEscActual`, `carreraEscActual`, `gradEscActual`) VALUES
(33, 'Tablajeros N°1', 'Av.Matamoros S/n Veracruz', '2000', '2006', '6 Años', 'certificado', 'Sec,Fed."Jose Azueta"', NULL, '2006', '2009', '3 Años', 'certificado', 'Cetmar 07 Veracruz', NULL, '2009', '2011', '3 Años', 'titulo', 'UTRM', NULL, NULL, NULL, NULL, 'cursando ', 'UTRM', '7 a 4:30', 'Turismo', '3 cuatrimestre'),
(34, 'Coronel Gregorio Mdz M', 'Huimanguillo Tabasco', '2000', '2006', '6 Años', NULL, 'Niños Heroes', 'Huimanguillo Tabasco', '2006', '2009', '3 Años', NULL, 'Colegio de Bachilleres Pl5', 'cardenas Tabasco', '2009', '2012', '3 Años', 'informatico', 'ut riviera Maya', 'Playa del Carmen Qro', '2012', '2013', '3 Años', 'tsu', 'ut', '7-3', 'tic', '3'),
(40, 'niños heroes', NULL, '1996', '2002', '6 Años', 'certificado de primaria', 'tecnica 23', NULL, '2002', '2004', '3 Años', 'certificado de secundaria', 'bachilleres', NULL, '2003', '2006', '3 Años', 'certificado de preparatoria', 'universidad en internet', NULL, '2006', '2010', '4 Años', 'titulo en economia', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia_laboral`
--

CREATE TABLE IF NOT EXISTS `experiencia_laboral` (
  `folioSolicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave foranea de la tabla solicitud',
  `tiemPresEmpl1DE` varchar(25) DEFAULT NULL COMMENT 'tiempo que presto servicio en la empresa 1 de',
  `tiemPresEmpl1A` varchar(25) DEFAULT NULL COMMENT 'timepo que presto servicio en la empresa 1 a',
  `nomEmpl1` varchar(45) DEFAULT NULL COMMENT 'nombre de la empresa 1',
  `direccEmpl1` varchar(80) DEFAULT NULL COMMENT 'direccion de la empresa 1',
  `telEmpl1` varchar(25) DEFAULT NULL COMMENT 'telefono de la empresa 1',
  `puesDesmEmpl1` varchar(45) DEFAULT NULL COMMENT 'puesto que desempeño en la empresa 1',
  `suelInicEmpl1` varchar(20) DEFAULT NULL COMMENT 'sueldo inicial en la empresa 1',
  `suelFinEmpl1` varchar(20) DEFAULT NULL COMMENT 'sueldo final en la empresa 1',
  `separaEmple1` varchar(45) DEFAULT NULL COMMENT 'motivo de separacion de la empresa 1',
  `nomJefEmpl1` varchar(45) DEFAULT NULL COMMENT 'nombre del jefe de la empresa 1',
  `puesJefEmpl1` varchar(45) DEFAULT NULL COMMENT 'puesto del jefe de la empresa 1',
  `tiemPresEmpl2DE` varchar(25) DEFAULT NULL COMMENT 'tiempo que presto servicio en la empresa 2 de',
  `tiemPresEmpl2A` varchar(25) DEFAULT NULL COMMENT 'tiempo que presto servicio en la empresa 2 a',
  `nomEmpl2` varchar(45) DEFAULT NULL COMMENT 'nombre de la empresa 2',
  `direccEmpl2` varchar(80) DEFAULT NULL COMMENT 'direccion de la empresa 2',
  `telEmpl2` varchar(25) DEFAULT NULL COMMENT 'telefono de la empresa 2',
  `puesDesmEmple2` varchar(45) DEFAULT NULL COMMENT 'puesto que desempeño en la empresa 2',
  `suelInicEmpl2` varchar(20) DEFAULT NULL COMMENT 'sueldo inicial en la empresa 2',
  `suelFinEmpl2` varchar(20) DEFAULT NULL COMMENT 'sueldo final en la empresa 2',
  `separaEmpl2` varchar(45) DEFAULT NULL COMMENT 'motivo de separacion de la empresa 2',
  `nomJefEmpl2` varchar(45) DEFAULT NULL COMMENT 'nombre del jefe de la empresa 2',
  `puesJefEmpl2` varchar(45) DEFAULT NULL COMMENT 'puesto del jefe de la empresa 2',
  `tiemPresEmpl3DE` varchar(25) DEFAULT NULL COMMENT 'tiempo que presto en la empresa 3 de',
  `tiemPresEmpl3A` varchar(25) DEFAULT NULL COMMENT 'tiempo que presto en la empresa 3 a',
  `nomEmpl3` varchar(45) DEFAULT NULL COMMENT 'nombre de la empresa 3',
  `direccEmpl3` varchar(80) DEFAULT NULL COMMENT 'direccion de la empresa 3',
  `telEmpl3` varchar(25) DEFAULT NULL COMMENT 'telefono de la empresa 3',
  `puesDesmEmpl3` varchar(45) DEFAULT NULL COMMENT 'puesto que desempeño en la empresa 3',
  `suelInicEmpl3` varchar(20) DEFAULT NULL COMMENT 'sueldo inicial en la empresa 3',
  `suelFinEmpl3` varchar(20) DEFAULT NULL COMMENT 'sueldo final en la empresa 3',
  `separaEmpl3` varchar(45) DEFAULT NULL COMMENT 'motivo de separacion en la empresa 3',
  `nomJefEmpl3` varchar(45) DEFAULT NULL COMMENT 'nombre del jefe de la empresa 3',
  `puesJefEmpl3` varchar(45) DEFAULT NULL COMMENT 'puesto del jefe de la empresa 3',
  `podriSolicInfUs` varchar(10) DEFAULT NULL COMMENT 'podriamos solicitar informacion sobre usted',
  `noCualSonSusRazones` varchar(45) DEFAULT NULL COMMENT 'no- cuales son sus razones de no solcitar informacion',
  KEY `folioSolicitud` (`folioSolicitud`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `experiencia_laboral`
--

INSERT INTO `experiencia_laboral` (`folioSolicitud`, `tiemPresEmpl1DE`, `tiemPresEmpl1A`, `nomEmpl1`, `direccEmpl1`, `telEmpl1`, `puesDesmEmpl1`, `suelInicEmpl1`, `suelFinEmpl1`, `separaEmple1`, `nomJefEmpl1`, `puesJefEmpl1`, `tiemPresEmpl2DE`, `tiemPresEmpl2A`, `nomEmpl2`, `direccEmpl2`, `telEmpl2`, `puesDesmEmple2`, `suelInicEmpl2`, `suelFinEmpl2`, `separaEmpl2`, `nomJefEmpl2`, `puesJefEmpl2`, `tiemPresEmpl3DE`, `tiemPresEmpl3A`, `nomEmpl3`, `direccEmpl3`, `telEmpl3`, `puesDesmEmpl3`, `suelInicEmpl3`, `suelFinEmpl3`, `separaEmpl3`, `nomJefEmpl3`, `puesJefEmpl3`, `podriSolicInfUs`, `noCualSonSusRazones`) VALUES
(33, '2007', '2012', 'Azules de la Laguna', 'Jimenez entre cortes y canal.', '2955838', 'Secretaria Contable', '6000', '8000', 'Escuela.', 'Simeon Romay Lopez', 'Dueño', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Si', NULL),
(34, '22de mayo 2013', NULL, 'walmart', 'galaxia', '9841571232', 'cajera', '15000', NULL, NULL, 'daniel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Si', NULL),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Si', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE IF NOT EXISTS `puestos` (
  `puestos` varchar(80) NOT NULL DEFAULT '' COMMENT 'diferentes tipos de áreas de la empresa',
  PRIMARY KEY (`puestos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`puestos`) VALUES
('Maestro'),
('Psicologa'),
('Secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencias_personales`
--

CREATE TABLE IF NOT EXISTS `referencias_personales` (
  `folioSolicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave foranea de la tabla solicitud',
  `nomRef1` varchar(60) DEFAULT NULL COMMENT 'nombre de la primera referencia',
  `direccRef1` varchar(80) DEFAULT NULL COMMENT 'direccion de la primera referencia',
  `telRef1` varchar(25) DEFAULT NULL COMMENT 'telefono de la primera referencia',
  `ocupRef1` varchar(50) DEFAULT NULL COMMENT 'ocupacion de la primera referencia',
  `tiempConocerlo1` varchar(25) DEFAULT NULL COMMENT 'tiempo de conocer a la primera referencia',
  `nomRef2` varchar(60) DEFAULT NULL COMMENT 'nombre de la segunda referencia',
  `direccRef2` varchar(80) DEFAULT NULL COMMENT 'direccion de la segunda referencia',
  `telRef2` varchar(25) DEFAULT NULL COMMENT 'telefono de la segunda referencia',
  `ocupRef2` varchar(50) DEFAULT NULL COMMENT 'ocupacion de la segunda referencia',
  `tiempConocerlo2` varchar(25) DEFAULT NULL COMMENT 'tiempo de conocer a la segunda referencia',
  `nomRef3` varchar(60) DEFAULT NULL COMMENT 'nombre de la tercera referencia',
  `direccRef3` varchar(80) DEFAULT NULL COMMENT 'direccion de la tercera referencia',
  `telRef3` varchar(25) DEFAULT NULL COMMENT 'telefono de la tercera referencia',
  `ocupRef3` varchar(50) DEFAULT NULL COMMENT 'ocupacion de la tercera referencia',
  `tiempConocerlo3` varchar(25) DEFAULT NULL COMMENT 'tiempo de conocer a la tercera referencia',
  KEY `folioSolicitud` (`folioSolicitud`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `referencias_personales`
--

INSERT INTO `referencias_personales` (`folioSolicitud`, `nomRef1`, `direccRef1`, `telRef1`, `ocupRef1`, `tiempConocerlo1`, `nomRef2`, `direccRef2`, `telRef2`, `ocupRef2`, `tiempConocerlo2`, `nomRef3`, `direccRef3`, `telRef3`, `ocupRef3`, `tiempConocerlo3`) VALUES
(33, 'Giovanna Bustamante', 'Lomas del Sol Veracruz', '---', 'Estudiante', '4 años', 'Areli Najera Rascon', 'Las brisas. Veracruz.', '2299825001', 'Chef', '3 años', 'Abril Varela Gomez', 'Rafael Cuervo, Veracruz', '2291219522', 'Estudiante', '3 años'),
(34, 'saul', 'las flores', '9841351803', 'cajero', '1 año', 'pedro', 'ejido', '9841304585', 'estudiante', '1 año', 'luz', 'palmas1', '9841562328', 'estudiante', '1 año'),
(40, 'luke sanchez', 'calle 159 con 157', '32165497', 'policia', '2 años', 'brad pech', 'col waymas california', '312465789845', 'actor', '4 años', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_empleo`
--

CREATE TABLE IF NOT EXISTS `solicitud_empleo` (
  `folioSolicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria de la tabla solicitud',
  `fechaSolicitud` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'fecha del registro',
  `solicita1` varchar(80) DEFAULT NULL COMMENT 'puesto a solicitar 1',
  `solicita2` varchar(80) DEFAULT NULL COMMENT 'puesto a solicitar 2',
  `solicita3` varchar(80) DEFAULT NULL COMMENT 'puesto a solicitar 3',
  `numTrabajador` varchar(20) DEFAULT NULL COMMENT 'sueldo mensual deseado',
  `status1` varchar(50) DEFAULT NULL COMMENT 'status de intercambio de ventanas 1',
  `status2` varchar(50) DEFAULT NULL COMMENT 'status de intercambio de ventanas 2',
  PRIMARY KEY (`folioSolicitud`),
  KEY `puestos` (`solicita1`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `solicitud_empleo`
--

INSERT INTO `solicitud_empleo` (`folioSolicitud`, `fechaSolicitud`, `solicita1`, `solicita2`, `solicita3`, `numTrabajador`, `status1`, `status2`) VALUES
(33, '2014-02-25 22:53:51', 'Maestro', 'Psicologa', 'Secretaria', NULL, 'aspirante', ''),
(34, '2013-09-26 13:29:31', 'Maestro', 'Psicologa', 'Secretaria', NULL, 'papelera', 'papelera'),
(40, '2013-09-26 13:29:37', 'Maestro', NULL, NULL, NULL, 'papelera', 'papelera');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `conocimientos_generales`
--
ALTER TABLE `conocimientos_generales`
  ADD CONSTRAINT `conocimientos_generales_ibfk_1` FOREIGN KEY (`folioSolicitud`) REFERENCES `solicitud_empleo` (`folioSolicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_familiares`
--
ALTER TABLE `datos_familiares`
  ADD CONSTRAINT `datos_familiares_ibfk_1` FOREIGN KEY (`folioSolicitud`) REFERENCES `solicitud_empleo` (`folioSolicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD CONSTRAINT `datos_personales_ibfk_1` FOREIGN KEY (`folioSolicitud`) REFERENCES `solicitud_empleo` (`folioSolicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `documentacion`
--
ALTER TABLE `documentacion`
  ADD CONSTRAINT `documentacion_ibfk_1` FOREIGN KEY (`folioSolicitud`) REFERENCES `solicitud_empleo` (`folioSolicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `documentos_requeridos`
--
ALTER TABLE `documentos_requeridos`
  ADD CONSTRAINT `documentos_requeridos_ibfk_1` FOREIGN KEY (`folioSolicitud`) REFERENCES `solicitud_empleo` (`folioSolicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `escolaridad`
--
ALTER TABLE `escolaridad`
  ADD CONSTRAINT `escolaridad_ibfk_1` FOREIGN KEY (`folioSolicitud`) REFERENCES `solicitud_empleo` (`folioSolicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `experiencia_laboral`
--
ALTER TABLE `experiencia_laboral`
  ADD CONSTRAINT `experiencia_laboral_ibfk_1` FOREIGN KEY (`folioSolicitud`) REFERENCES `solicitud_empleo` (`folioSolicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `referencias_personales`
--
ALTER TABLE `referencias_personales`
  ADD CONSTRAINT `referencias_personales_ibfk_1` FOREIGN KEY (`folioSolicitud`) REFERENCES `solicitud_empleo` (`folioSolicitud`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
