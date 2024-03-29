-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2019 a las 23:02:31
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uaem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academico`
--

CREATE TABLE `academico` (
  `idenc` int(11) NOT NULL,
  `idper` int(11) NOT NULL,
  `licenciatura` int(11) NOT NULL,
  `ingreso` int(11) NOT NULL,
  `egreso` int(11) NOT NULL,
  `titulado` varchar(50) NOT NULL,
  `modalidad` varchar(50) NOT NULL,
  `tiempo` varchar(50) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones_em`
--

CREATE TABLE `acciones_em` (
  `idenc` int(11) NOT NULL,
  `idemp` int(11) DEFAULT NULL,
  `organizacion` varchar(50) DEFAULT NULL,
  `mencione` varchar(50) DEFAULT NULL,
  `porque` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actitudes_a`
--

CREATE TABLE `actitudes_a` (
  `idenc` int(11) NOT NULL,
  `idper` int(11) DEFAULT NULL,
  `aceptacion` varchar(50) DEFAULT NULL,
  `busqueda` varchar(50) DEFAULT NULL,
  `constancia` varchar(50) DEFAULT NULL,
  `cooperacion` varchar(50) DEFAULT NULL,
  `profesionales` varchar(50) DEFAULT NULL,
  `escuchar` varchar(50) DEFAULT NULL,
  `equipo` varchar(50) DEFAULT NULL,
  `emocional` varchar(50) DEFAULT NULL,
  `honestidad` varchar(50) DEFAULT NULL,
  `tecnologias` varchar(50) DEFAULT NULL,
  `interes` varchar(50) DEFAULT NULL,
  `persistencia` varchar(50) DEFAULT NULL,
  `respeto` varchar(50) DEFAULT NULL,
  `responsabilidad` varchar(50) DEFAULT NULL,
  `superacion` varchar(50) DEFAULT NULL,
  `positivo` varchar(50) DEFAULT NULL,
  `aprendizaje` varchar(50) DEFAULT NULL,
  `innovacion` varchar(50) DEFAULT NULL,
  `flexibilidad` varchar(50) DEFAULT NULL,
  `entropia` varchar(50) DEFAULT NULL,
  `Prudencia` varchar(50) DEFAULT NULL,
  `Tolerancia` varchar(50) DEFAULT NULL,
  `Honestidad2` varchar(50) DEFAULT NULL,
  `Espiritu` varchar(50) DEFAULT NULL,
  `Respeto2` varchar(50) DEFAULT NULL,
  `Empatia` varchar(50) DEFAULT NULL,
  `Equidad` varchar(50) DEFAULT NULL,
  `Justicia` varchar(50) DEFAULT NULL,
  `Discrecion` varchar(50) DEFAULT NULL,
  `Responsabilidad2` varchar(50) DEFAULT NULL,
  `planear` varchar(50) DEFAULT NULL,
  `diseno` varchar(50) DEFAULT NULL,
  `creacion` varchar(50) DEFAULT NULL,
  `analista` varchar(50) DEFAULT NULL,
  `desarrollo` varchar(50) DEFAULT NULL,
  `generacion` varchar(50) DEFAULT NULL,
  `administrar` varchar(50) DEFAULT NULL,
  `adsistemas` varchar(50) DEFAULT NULL,
  `liderar` varchar(50) DEFAULT NULL,
  `addepartamentos` varchar(50) DEFAULT NULL,
  `elaboracion` varchar(50) DEFAULT NULL,
  `programas` varchar(50) DEFAULT NULL,
  `implementacion` varchar(50) DEFAULT NULL,
  `estrategias` varchar(50) DEFAULT NULL,
  `estudios` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(50) NOT NULL,
  `apepat` varchar(50) NOT NULL,
  `apemat` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `idestado` int(11) NOT NULL,
  `idmunicipio` int(11) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idadmin`, `tipo`, `nombre`, `apepat`, `apemat`, `sexo`, `edad`, `telefono`, `idestado`, `idmunicipio`, `colonia`, `calle`, `correo`, `password`) VALUES
(1, 0, 'Gilberto', 'Santiago', 'Acevedo', 'Masculino', 21, '7228406326', 9, 277, 'Tlahuax', 'Pantoja', 'acevedo.4297@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agronomo`
--

CREATE TABLE `agronomo` (
  `idenc` int(11) NOT NULL,
  `idegresado` int(11) NOT NULL,
  `procesos` varchar(50) DEFAULT NULL,
  `capacidad` varchar(50) NOT NULL,
  `optimizar` varchar(50) NOT NULL,
  `analizar` varchar(50) NOT NULL,
  `elaboracion` varchar(50) NOT NULL,
  `desarrollo` varchar(50) NOT NULL,
  `conocimiento` varchar(50) NOT NULL,
  `estrutura` varchar(50) NOT NULL,
  `leyes` varchar(50) NOT NULL,
  `rigen` varchar(50) NOT NULL,
  `sobre` varchar(50) NOT NULL,
  `sistemas` varchar(50) NOT NULL,
  `diversos` varchar(50) NOT NULL,
  `grados` varchar(50) NOT NULL,
  `creaticvo` varchar(50) NOT NULL,
  `evaluar` varchar(50) NOT NULL,
  `indentificar` varchar(50) NOT NULL,
  `nichos` varchar(50) NOT NULL,
  `mecanismos` varchar(50) NOT NULL,
  `campo` varchar(50) NOT NULL,
  `seguridad` varchar(50) NOT NULL,
  `equipo` varchar(50) NOT NULL,
  `areas` varchar(50) NOT NULL,
  `actuar` varchar(50) NOT NULL,
  `dentro` varchar(50) NOT NULL,
  `oral` varchar(50) NOT NULL,
  `voluntad` varchar(50) NOT NULL,
  `diciplina` varchar(50) NOT NULL,
  `perseverancia` varchar(50) NOT NULL,
  `sistematico` varchar(50) NOT NULL,
  `orden` varchar(50) NOT NULL,
  `proativo` varchar(50) NOT NULL,
  `piensa` varchar(50) NOT NULL,
  `etica` varchar(50) NOT NULL,
  `tolerancia` varchar(50) NOT NULL,
  `colabaracion` varchar(50) NOT NULL,
  `solidaridad` varchar(50) NOT NULL,
  `trabaj` varchar(50) NOT NULL,
  `interes` varchar(50) NOT NULL,
  `respecto` varchar(50) NOT NULL,
  `trabajo` varchar(50) NOT NULL,
  `honestidad` varchar(50) NOT NULL,
  `honradez` varchar(50) NOT NULL,
  `puntualidad` varchar(50) NOT NULL,
  `lealtad` varchar(50) NOT NULL,
  `canalizar` varchar(50) NOT NULL,
  `camercializar` varchar(50) NOT NULL,
  `ambito` varchar(50) NOT NULL,
  `gestionar` varchar(50) NOT NULL,
  `calculos` varchar(50) NOT NULL,
  `mamaticas` varchar(50) NOT NULL,
  `fisico` varchar(50) NOT NULL,
  `metabolismo` varchar(50) NOT NULL,
  `celulas` varchar(50) NOT NULL,
  `algebra` varchar(50) NOT NULL,
  `genetico` varchar(50) NOT NULL,
  `hormonales` varchar(50) NOT NULL,
  `calores` varchar(50) NOT NULL,
  `embriones` varchar(50) NOT NULL,
  `morbilidad` varchar(50) NOT NULL,
  `zootecnica` varchar(50) NOT NULL,
  `pecuaria` varchar(50) NOT NULL,
  `agropecuaria` varchar(50) NOT NULL,
  `agroindrustrial` varchar(50) NOT NULL,
  `plantas` varchar(50) NOT NULL,
  `ambiental` varchar(50) NOT NULL,
  `aniamales` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspectos_em`
--

CREATE TABLE `aspectos_em` (
  `idenc` int(11) NOT NULL,
  `idemp` int(11) DEFAULT NULL,
  `conocimientos` varchar(50) DEFAULT NULL,
  `havilidades` varchar(50) DEFAULT NULL,
  `actitudes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c2alumno`
--

CREATE TABLE `c2alumno` (
  `id` int(11) NOT NULL,
  `idalu` int(11) NOT NULL,
  `titulado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencias_a`
--

CREATE TABLE `competencias_a` (
  `idenc` int(11) NOT NULL,
  `idper` int(11) DEFAULT NULL,
  `planear` varchar(50) DEFAULT NULL,
  `diseno` varchar(50) DEFAULT NULL,
  `creacion` varchar(50) DEFAULT NULL,
  `analista` varchar(50) DEFAULT NULL,
  `desarrollo` varchar(50) DEFAULT NULL,
  `generacion` varchar(50) DEFAULT NULL,
  `administrar` varchar(50) DEFAULT NULL,
  `adsistemas` varchar(50) DEFAULT NULL,
  `liderar` varchar(50) DEFAULT NULL,
  `addepartamentos` varchar(50) DEFAULT NULL,
  `elaboracion` varchar(50) DEFAULT NULL,
  `programas` varchar(50) DEFAULT NULL,
  `implementacion` varchar(50) DEFAULT NULL,
  `estrategias` varchar(50) DEFAULT NULL,
  `estudios` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conempresa`
--

CREATE TABLE `conempresa` (
  `idcon` int(11) NOT NULL,
  `idemp` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apepat` varchar(50) NOT NULL,
  `apemat` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `extension` varchar(11) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `edad` varchar(11) NOT NULL,
  `gradoestudio` varchar(50) NOT NULL,
  `puesto` varchar(50) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  `antiguedadpuesto` varchar(50) NOT NULL,
  `antiguedadempresa` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contaduria`
--

CREATE TABLE `contaduria` (
  `idenc` int(11) NOT NULL,
  `idegresado` int(11) DEFAULT NULL,
  `habilidades` varchar(50) DEFAULT NULL,
  `efectiva` varchar(50) DEFAULT NULL,
  `equipo` varchar(50) DEFAULT NULL,
  `trabajar` varchar(50) DEFAULT NULL,
  `Capacidad` varchar(50) DEFAULT NULL,
  `analisis` varchar(50) DEFAULT NULL,
  `organizativa` varchar(50) DEFAULT NULL,
  `Facilidad` varchar(50) DEFAULT NULL,
  `toma` varchar(50) DEFAULT NULL,
  `Razonamiento` varchar(50) DEFAULT NULL,
  `desarrollar` varchar(50) DEFAULT NULL,
  `convencimiento` varchar(50) DEFAULT NULL,
  `exactitud` varchar(50) DEFAULT NULL,
  `servicio` varchar(50) DEFAULT NULL,
  `empatia` varchar(50) DEFAULT NULL,
  `Disciplina` varchar(50) DEFAULT NULL,
  `Orden` varchar(50) DEFAULT NULL,
  `Propositivo` varchar(50) DEFAULT NULL,
  `Objetividad` varchar(50) DEFAULT NULL,
  `Motivacion` varchar(50) DEFAULT NULL,
  `Autodisciplina` varchar(50) DEFAULT NULL,
  `reponsabilidad` varchar(50) DEFAULT NULL,
  `Autosuficiencia` varchar(50) DEFAULT NULL,
  `Solidaridad` varchar(50) DEFAULT NULL,
  `Pulcritud` varchar(50) DEFAULT NULL,
  `respecto` varchar(50) DEFAULT NULL,
  `honestidad` varchar(50) DEFAULT NULL,
  `responsanbilidad2` varchar(50) DEFAULT NULL,
  `Igualdad` varchar(50) DEFAULT NULL,
  `Compromiso` varchar(50) DEFAULT NULL,
  `companerismo` varchar(50) DEFAULT NULL,
  `Confianza` varchar(50) DEFAULT NULL,
  `Tolerancia` varchar(50) DEFAULT NULL,
  `Cooperacion` varchar(50) DEFAULT NULL,
  `Convivencia` varchar(50) DEFAULT NULL,
  `Pertinencia` varchar(50) DEFAULT NULL,
  `Solidaridad2` varchar(50) DEFAULT NULL,
  `Equidad` varchar(50) DEFAULT NULL,
  `Prudencia` varchar(50) DEFAULT NULL,
  `Justicia` varchar(50) DEFAULT NULL,
  `Discrecion` varchar(50) DEFAULT NULL,
  `Obtener` varchar(50) DEFAULT NULL,
  `analizar` varchar(50) DEFAULT NULL,
  `Verificar2` varchar(50) DEFAULT NULL,
  `Presentar` varchar(50) DEFAULT NULL,
  `Interpretar` varchar(50) DEFAULT NULL,
  `Establecer` varchar(50) DEFAULT NULL,
  `Aplicar` varchar(50) DEFAULT NULL,
  `Predeterminar` varchar(50) DEFAULT NULL,
  `controlar` varchar(50) DEFAULT NULL,
  `estrategias` varchar(50) DEFAULT NULL,
  `internacionales` varchar(50) DEFAULT NULL,
  `Orientar` varchar(50) DEFAULT NULL,
  `financiera` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentaegresado`
--

CREATE TABLE `cuentaegresado` (
  `idcuenta` int(11) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '1',
  `idegresado` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuentaegresado`
--

INSERT INTO `cuentaegresado` (`idcuenta`, `tipo`, `idegresado`, `correo`, `password`) VALUES
(22, 1, 15, 'daniel2018@gmail.com', '123456789'),
(23, 1, 16, 'samantha.02@gmail.com', '123456789'),
(24, 1, 17, 'brenda.puntos@gmail.com', '123456789'),
(25, 1, 18, 'ivan.2018@gmail.com', '123456789'),
(26, 1, 19, 'vanesa.18@gmail.com', '123456789'),
(27, 1, 28, 'sotelo.escamilla@gmail.com', '123456'),
(28, 1, 31, 'miriam@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `derecho`
--

CREATE TABLE `derecho` (
  `idenc` int(11) NOT NULL,
  `idegresado` int(11) DEFAULT NULL,
  `Analisis` varchar(50) DEFAULT NULL,
  `preguta1` varchar(50) DEFAULT NULL,
  `Dialogo` varchar(50) DEFAULT NULL,
  `sertpreg4` varchar(50) DEFAULT NULL,
  `Interrelacionarse` varchar(50) DEFAULT NULL,
  `Resolucion` varchar(50) DEFAULT NULL,
  `Autocontrol` varchar(50) DEFAULT NULL,
  `Capacidad` varchar(50) DEFAULT NULL,
  `Compromiso` varchar(50) DEFAULT NULL,
  `Conciliador` varchar(50) DEFAULT NULL,
  `diplomado` varchar(50) DEFAULT NULL,
  `Confianza` varchar(50) DEFAULT NULL,
  `Disciplina` varchar(50) DEFAULT NULL,
  `trabajo` varchar(50) DEFAULT NULL,
  `Emprendedor` varchar(50) DEFAULT NULL,
  `Liderazgo` varchar(50) DEFAULT NULL,
  `Perseverancia` varchar(50) DEFAULT NULL,
  `objetivo` varchar(50) DEFAULT NULL,
  `Compromiso2` varchar(50) DEFAULT NULL,
  `Diligencia` varchar(50) DEFAULT NULL,
  `Equidad` varchar(50) DEFAULT NULL,
  `Honestidad` varchar(50) DEFAULT NULL,
  `Humanismo` varchar(50) DEFAULT NULL,
  `Justicia` varchar(50) DEFAULT NULL,
  `Lealtad` varchar(50) DEFAULT NULL,
  `Respeto` varchar(50) DEFAULT NULL,
  `Conocer` varchar(50) DEFAULT NULL,
  `Interpretar` varchar(50) DEFAULT NULL,
  `Aplicar` varchar(50) DEFAULT NULL,
  `argumentar` varchar(50) DEFAULT NULL,
  `sistematizar` varchar(50) DEFAULT NULL,
  `manera` varchar(50) DEFAULT NULL,
  `diligente` varchar(50) DEFAULT NULL,
  `comunicacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcionempre`
--

CREATE TABLE `descripcionempre` (
  `idenc` int(11) NOT NULL,
  `idper` int(11) NOT NULL,
  `arra` varchar(50) NOT NULL,
  `trabajas` varchar(50) NOT NULL,
  `tiempo` varchar(50) NOT NULL,
  `relaciona` varchar(50) NOT NULL,
  `nombrem` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `numtel` varchar(50) NOT NULL,
  `pagweb` varchar(50) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `ramo` varchar(50) NOT NULL,
  `giro` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `tiempodos` varchar(50) NOT NULL,
  `puesto` varchar(50) NOT NULL,
  `rango` varchar(50) NOT NULL,
  `sueldo` varchar(50) NOT NULL,
  `tres` varchar(50) NOT NULL,
  `metodos` varchar(50) NOT NULL,
  `equipo` varchar(50) NOT NULL,
  `herramientas` varchar(50) NOT NULL,
  `funciones` varchar(50) NOT NULL,
  `software` varchar(50) NOT NULL,
  `utulizarias` varchar(50) NOT NULL,
  `sientes` varchar(50) NOT NULL,
  `clima` varchar(50) NOT NULL,
  `actividad` varchar(50) NOT NULL,
  `motivos` varchar(50) NOT NULL,
  `recibida` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desempresa`
--

CREATE TABLE `desempresa` (
  `idemp` int(11) NOT NULL,
  `nombreempresa` varchar(50) NOT NULL,
  `pagweb` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `idestado` int(11) NOT NULL,
  `idmunicipio` int(11) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `ninterior` varchar(20) NOT NULL,
  `nexterior` varchar(20) NOT NULL,
  `cp` int(11) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `ramo` varchar(50) NOT NULL,
  `giro` varchar(50) NOT NULL,
  `aniocreacion` int(11) NOT NULL,
  `empleados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `iddir` int(11) NOT NULL,
  `idegresado` int(11) NOT NULL,
  `idestado` int(11) NOT NULL,
  `idmunicipio` int(11) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `ninterior` varchar(20) NOT NULL,
  `nexterior` varchar(20) NOT NULL,
  `cp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresado`
--

CREATE TABLE `egresado` (
  `idegresado` int(11) NOT NULL,
  `idlic` int(11) NOT NULL,
  `cuenta` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apepat` varchar(50) NOT NULL,
  `apemat` varchar(50) NOT NULL,
  `edad` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `ingreso` int(11) NOT NULL,
  `egreso` int(11) NOT NULL,
  `titulado` varchar(50) NOT NULL,
  `modalidad` varchar(50) NOT NULL,
  `tiempo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `egresado`
--

INSERT INTO `egresado` (`idegresado`, `idlic`, `cuenta`, `nombre`, `apepat`, `apemat`, `edad`, `sexo`, `ingreso`, `egreso`, `titulado`, `modalidad`, `tiempo`) VALUES
(15, 6, 1111111114, 'ANTONIO', 'MOJICA', 'DIAZ', '19', 'Masculino', 2010, 2014, 'no', '', ''),
(16, 4, 1111111125, 'SAMANTHA', 'LOPEZ', 'SOLORZANO', '23', 'Femenino', 2012, 2016, 'si', 'Aprovechamiento', 'Mas de 2 aÃ±os'),
(17, 7, 1111111121, 'JUAN JOSE', 'FLORES', 'SANTOS', '23', 'Masculino', 2010, 2014, 'no', '', ''),
(18, 4, 1111111111, 'LEONOR', 'SANTIAGO', 'ACEVEDO', '19', 'Femenino', 2012, 2016, 'si', 'Ensayo', 'Entre 1 aÃ±o y 2 aÃ±os'),
(19, 4, 1111111118, 'DANIEL', 'Santiago', 'PEREZ', '23', 'Masculino', 2010, 2014, 'si', 'EGEL', 'Menos de un aÃ±o'),
(20, 1, 1111111112, 'LUIS FERNANDO', 'SALGADO', 'REYES', '19', 'Masculino', 2011, 2014, '', '', ''),
(21, 4, 1111111115, 'TERESA', 'SOLORZANO', 'ARIAS', '19', 'Femenino', 2012, 2016, '', '', ''),
(22, 4, 1111111126, 'SORIEL', 'TAMAYO', 'SANTOS', '23', 'Masculino', 2010, 2014, '', '', ''),
(23, 6, 1111111119, 'JUAN ALBERTO', 'CRUZ', 'DOMINGUEZ', '19', 'Masculino', 2011, 2015, '', '', ''),
(24, 7, 1111111123, 'Noemi', 'Antonio', 'Rodriguez', '23', 'Femenino', 2012, 2016, '', '', ''),
(25, 1, 1111111113, 'ALEXANDER', 'SANTIN', 'MENDEZ', '23', 'Masculino', 2012, 2016, '', '', ''),
(26, 7, 1111111117, 'CARINA', 'SOLAR', 'JOAQUIN', '19', 'Femenino', 2012, 2016, '', '', ''),
(27, 4, 1111111116, 'SAMUEL', 'SANCHEZ', 'SANCHEZ', '23', 'Masculino', 2010, 2014, '', '', ''),
(28, 6, 1111111127, 'ZOTERO', 'ESCAMILLA', 'PUNTOS', '19', 'Femenino', 2012, 2016, 'si', 'Tesis', 'Entre 1 aÃ±o y 2 aÃ±os'),
(29, 4, 1111111124, 'SALOMOM', 'DIAZ', 'POPOCA', '23', 'Masculino', 2011, 2015, '', '', ''),
(30, 2, 1111111128, 'TIBURCIO', 'SALINAS', 'PUNTOS', '23', 'Masculino', 2010, 2014, '', '', ''),
(31, 2, 1111111122, 'MIRIAM', 'ALBITER', 'ALBITER', '19', 'Femenino', 2010, 2014, 'si', 'EGEL', 'Entre 1 aÃ±o y 2 aÃ±os');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `idempresa` int(11) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '2',
  `nombreemp` varchar(50) NOT NULL,
  `telefonoemp` varchar(50) NOT NULL,
  `pagemp` varchar(50) NOT NULL,
  `idestado` int(11) NOT NULL,
  `idmunicipio` int(11) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numint` varchar(50) NOT NULL,
  `numext` varchar(50) NOT NULL,
  `cp` int(11) NOT NULL,
  `acreacion` int(11) NOT NULL,
  `empleados` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta2`
--

CREATE TABLE `encuesta2` (
  `idenc` int(11) NOT NULL,
  `idegresado` int(11) NOT NULL,
  `estudioposterior` varchar(50) NOT NULL,
  `estudiocual` varchar(50) NOT NULL,
  `tegustariaestudio` varchar(50) NOT NULL,
  `queestudio` varchar(50) NOT NULL,
  `tematica` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `modalidad` varchar(50) NOT NULL,
  `habilidades` varchar(50) NOT NULL,
  `conocimientos` varchar(50) NOT NULL,
  `actitudes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta2`
--

INSERT INTO `encuesta2` (`idenc`, `idegresado`, `estudioposterior`, `estudiocual`, `tegustariaestudio`, `queestudio`, `tematica`, `horario`, `modalidad`, `habilidades`, `conocimientos`, `actitudes`) VALUES
(31, 15, 'no', '', 'No', '', '', '', '', 'sdfghjm,', 'sdfghjk', 'wertyuio'),
(32, 16, 'no', '', 'No', '', '', '', '', '234567uytr', 'dfgh', 'edrfghn'),
(33, 17, 'no', '', '', '', '', '', '', '', '', ''),
(34, 18, 'si', 'Doctorado', 'Si', 'Especialidad', 'werftg', 'Lunes a Viernes Vespertino', '', 'ertyu', 'ertyu', 'ertyuj'),
(35, 19, 'si', 'Curso', 'Si', 'Maestria', 'sdfrvgbf n', 'Sabatino', '', 'dwfv', 'dcfv', 'dwefv'),
(36, 28, 'si', 'Maestria', 'No', '', '', '', '', 'responsabilidad', 'programacion', 'responsable'),
(37, 31, 'si', 'Maestria', 'No', '', '', '', '', 'responsabilidad', 'conocimientos', 'responsable');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta3`
--

CREATE TABLE `encuesta3` (
  `idenc` int(11) NOT NULL,
  `idegresado` int(11) NOT NULL,
  `arraigado` varchar(50) NOT NULL,
  `trabajas` varchar(50) NOT NULL,
  `tiempoempleo` varchar(50) NOT NULL,
  `relacionempleo` varchar(50) NOT NULL,
  `nombreemp` varchar(50) NOT NULL,
  `direccionemp` varchar(50) NOT NULL,
  `telefonoemp` varchar(50) NOT NULL,
  `pagwebemp` varchar(50) NOT NULL,
  `sectoremp` varchar(50) NOT NULL,
  `ramoemp` varchar(50) NOT NULL,
  `giroemp` varchar(50) NOT NULL,
  `areapertenece` varchar(50) NOT NULL,
  `tipopuesto` varchar(50) NOT NULL,
  `tiempodos` varchar(50) NOT NULL,
  `antiguedadpuesto` varchar(50) NOT NULL,
  `rangosueldo` varchar(50) NOT NULL,
  `sueldopercibes` varchar(50) NOT NULL,
  `tresfunciones` varchar(50) NOT NULL,
  `metodosemp` varchar(50) NOT NULL,
  `equipoemp` varchar(50) NOT NULL,
  `herramientasemp` varchar(50) NOT NULL,
  `utilizassoft` varchar(50) NOT NULL,
  `tiposoftware` varchar(50) NOT NULL,
  `nombreactividad` int(50) NOT NULL,
  `motivosnor` varchar(50) NOT NULL,
  `satisfaccionuaem` varchar(50) NOT NULL,
  `motivosnotrabajo` varchar(50) NOT NULL,
  `satisfaccionuaem2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta3`
--

INSERT INTO `encuesta3` (`idenc`, `idegresado`, `arraigado`, `trabajas`, `tiempoempleo`, `relacionempleo`, `nombreemp`, `direccionemp`, `telefonoemp`, `pagwebemp`, `sectoremp`, `ramoemp`, `giroemp`, `areapertenece`, `tipopuesto`, `tiempodos`, `antiguedadpuesto`, `rangosueldo`, `sueldopercibes`, `tresfunciones`, `metodosemp`, `equipoemp`, `herramientasemp`, `utilizassoft`, `tiposoftware`, `nombreactividad`, `motivosnor`, `satisfaccionuaem`, `motivosnotrabajo`, `satisfaccionuaem2`) VALUES
(8, 15, 'Buena', 'Si', 'De 6 a 9 meses', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'Dificultades de horario o distancia', 'Regularmente Satisfecho', '', ''),
(9, 16, 'Buena', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Muy Satisfecho', 'Dificultades de horario o distancia', 'Regularmente Satisfecho'),
(10, 17, 'Buena', 'Si', 'De 9 a 12 meses', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 'Dificultades de horario o distancia', 'Poco Satisfecho', '', ''),
(11, 18, 'Excelente', 'Si', 'Menos de 6 meses', 'Si', 'dfvbty', 'wdefrgthy', 'wsdefrgt', 'wdefgrthy', 'PÃºblico', 'AgrÃ­cola', 'Agricultura', '4re5tyui', 'Empleado', 'Medio tiempo', 'De 6 meses a 3 aÃ±os', 'De 10 000 a 15 000', 'Con prestaciones', 'dwefgrthyju', 'dfegrthy', 'wdefrgthy', 'wdefgrthy', 'Si', 'frgthyju', 0, '', '', '', ''),
(12, 19, 'Excelente', 'Si', 'De 6 a 9 meses', 'Si', 'dfrgty', 'dwefgrthy', 'dwefrgth', 'dfwegrthy', 'PÃºblico', 'Industrial', 'MinerÃ­a', 'wefrgth', 'Supervisor', 'Medio tiempo', 'De 6 meses a 3 aÃ±os', 'De 5 000 a 1 0000', 'Con prestaciones', 'defrgt', 'fwergt', 'dcv', 'ddf', 'Si', 'fvg', 0, '', '', '', ''),
(13, 28, 'Excelente', 'No', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 'Satisfecho', 'Falta de experiencia profesional', 'Satisfecho'),
(14, 31, 'Buena', 'Si', 'De 6 a 9 meses', 'Si', 'sopme', 'toluca', '7673', 'www.some', 'PÃºblico', 'Industrial', 'ExplotaciÃ³n forestal', 'jefe', 'Jefe de departamento', 'Eventual', 'De 6 meses a 3 aÃ±os', 'De 5 000 a 1 0000', 'Sin prestaciones', 'manejo de informacion', 'logico', 'computadora', 'excel', 'Si', 'excel', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta4`
--

CREATE TABLE `encuesta4` (
  `idenc` int(11) NOT NULL,
  `idegresado` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `numtel` varchar(50) DEFAULT NULL,
  `extension` varchar(50) DEFAULT NULL,
  `numcel` varchar(50) DEFAULT NULL,
  `edad` varchar(50) DEFAULT NULL,
  `grado` varchar(50) DEFAULT NULL,
  `puesto` varchar(50) DEFAULT NULL,
  `nivel` varchar(50) DEFAULT NULL,
  `puestodos` varchar(50) DEFAULT NULL,
  `antigueda` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta4`
--

INSERT INTO `encuesta4` (`idenc`, `idegresado`, `nombre`, `correo`, `numtel`, `extension`, `numcel`, `edad`, `grado`, `puesto`, `nivel`, `puestodos`, `antigueda`) VALUES
(10, 15, 'wertgh', 'ertyhng', 'dsfgb', 'dsfgvb ', 'fvgsb', 'dvb ', 'Primaria', 'efvgb', 'Mando medio- jefe de departamento, supervisor, eje', 'de 6 meses a 3 aÃ±os', 'de 5  a 10 aÃ±os'),
(11, 16, 'ertgh', 'erfgb', 'dfretghg', 'koijuhyg', 'ol8ki7j6uhy5gtr', '8i7juyhgtfd', 'Preparatoria', '8okijyuhbtg', 'alto mando o director', 'de 6 meses a 3 aÃ±os', 'menos de 6 meses'),
(12, 17, '2345', 'erfgb', 'dfg', '4r5gtr', 'er4fgtr', 'rgf4tbr', 'MaestrÃ­a', 'er4t5ghy', 'Nivel inferior- tÃ©cnico u operativo', 'de 6 meses a 3 aÃ±os', 'de 6 meses a 3 aÃ±os'),
(13, 18, 'qz', 'xcdf', 'cfv', 'fv', 'fecvf', 'dcd', 'Secundaria', 'edcf', 'alto mando o director', 'de 5  a 10 aÃ±os', 'de 3 a 5 aÃ±os'),
(14, 19, '3wer', 'efv', 'regtb', 'hyjukilo', 'e4r5ty6ui', 'r4t5y6u7i89', 'Licenciatura', 'r4t5y67u', 'Mando medio- jefe de departamento, supervisor, eje', 'de 6 meses a 3 aÃ±os', 'de 3 a 5 aÃ±os'),
(15, 28, 'Oscar Tellex', 'oscar.ortiz@gmail.com', '7276366326', '773', '7727377373', '24', 'Preparatoria', 'jefe', 'Mando medio- jefe de departamento, supervisor, eje', 'de 5  a 10 aÃ±os', 'de 5  a 10 aÃ±os'),
(16, 31, 'mirian', 'miriam@gmail.com', '7276366326', '773', '7727377373', '21', 'Preparatoria', 'jefe', 'Nivel inferior- tÃ©cnico u operativo', 'de 3 a 5 aÃ±os', 'de 6 meses a 3 aÃ±os');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta5`
--

CREATE TABLE `encuesta5` (
  `idenc` int(11) NOT NULL,
  `idegresado` int(11) DEFAULT NULL,
  `atraves` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta5`
--

INSERT INTO `encuesta5` (`idenc`, `idegresado`, `atraves`) VALUES
(8, 15, 'Bolsas de trabajo gubernamentales (Municipal o Est'),
(9, 16, 'Bolsa de trabajo de la propia empresa'),
(10, 17, 'Medios de comunicaciÃ³n impresos (periÃ³dico, bole'),
(11, 18, 'Medios de comunicaciÃ³n impresos (periÃ³dico, bole'),
(12, 19, 'Internet'),
(13, 28, 'Bolsa de trabajo de Instituciones de EducaciÃ³n Su'),
(14, 31, 'Bolsa de trabajo de la propia empresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta6`
--

CREATE TABLE `encuesta6` (
  `idenc` int(11) NOT NULL,
  `idegresado` int(11) DEFAULT NULL,
  `fortaleza` varchar(50) DEFAULT NULL,
  `debilidad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta6`
--

INSERT INTO `encuesta6` (`idenc`, `idegresado`, `fortaleza`, `debilidad`) VALUES
(8, 15, '3w45rtyh', '345rth'),
(9, 16, '98i7ujythgfv', 'oiuyhtgfv'),
(10, 17, 'e3rt45y67uj8ik9l', '23rt45y6u7i8'),
(11, 18, 'dfrev', 'defwv'),
(12, 19, '3r4t5y6u7', 'r4tyju'),
(13, 28, 'buen desarrollador en php', 'no inglesh'),
(14, 31, 'buen desarrollador en php', 'no inglesh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta7`
--

CREATE TABLE `encuesta7` (
  `idenc` int(11) NOT NULL,
  `idegresado` int(11) DEFAULT NULL,
  `licenciatura` varchar(50) DEFAULT NULL,
  `clima` varchar(50) DEFAULT NULL,
  `cursado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta7`
--

INSERT INTO `encuesta7` (`idenc`, `idegresado`, `licenciatura`, `clima`, `cursado`) VALUES
(9, 15, 'Muy Satisfecho', 'Satisfecho', '23ertgh'),
(10, 16, 'Regularmente Satisfecho', 'Poco Satisfecho', '9i87u6y5tgrfv'),
(11, 17, 'Muy Satisfecho', 'Muy Satisfecho', 'e3r4t5y6uik'),
(12, 18, 'Muy Satisfecho', 'Regularmente Satisfecho', 'derfev'),
(13, 19, 'Muy Satisfecho', 'Satisfecho', 'r34t5y6u7'),
(14, 28, 'Satisfecho', 'Satisfecho', 'jkhkjhkjhk'),
(15, 31, 'Satisfecho', 'Muy Satisfecho', '3ertht');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta8`
--

CREATE TABLE `encuesta8` (
  `idenc` int(11) NOT NULL,
  `idegresado` int(11) DEFAULT NULL,
  `analisis` varchar(50) DEFAULT NULL,
  `solucion` varchar(50) DEFAULT NULL,
  `calculo` varchar(50) DEFAULT NULL,
  `comunicacion` varchar(50) DEFAULT NULL,
  `concentracion` varchar(50) DEFAULT NULL,
  `desarrollo` varchar(50) DEFAULT NULL,
  `lectura` varchar(50) DEFAULT NULL,
  `manejo` varchar(50) DEFAULT NULL,
  `informacion` varchar(50) DEFAULT NULL,
  `relacion` varchar(50) DEFAULT NULL,
  `humanas` varchar(50) DEFAULT NULL,
  `conflictos` varchar(50) DEFAULT NULL,
  `toma` varchar(50) DEFAULT NULL,
  `liderasgo` varchar(50) DEFAULT NULL,
  `coordinacion` varchar(50) DEFAULT NULL,
  `emprendedor` varchar(50) DEFAULT NULL,
  `persuacion` varchar(50) DEFAULT NULL,
  `objetividad` varchar(50) DEFAULT NULL,
  `aceptacion` varchar(50) DEFAULT NULL,
  `busqueda` varchar(50) DEFAULT NULL,
  `constancia` varchar(50) DEFAULT NULL,
  `cooperacion` varchar(50) DEFAULT NULL,
  `profesionales` varchar(50) DEFAULT NULL,
  `escuchar` varchar(50) DEFAULT NULL,
  `equipo` varchar(50) DEFAULT NULL,
  `emocional` varchar(50) DEFAULT NULL,
  `honestidad` varchar(50) DEFAULT NULL,
  `superacion` varchar(50) DEFAULT NULL,
  `tecnologias` varchar(50) DEFAULT NULL,
  `interes` varchar(50) DEFAULT NULL,
  `persistencia` varchar(50) DEFAULT NULL,
  `respeto` varchar(50) DEFAULT NULL,
  `responsabilidad2` varchar(50) DEFAULT NULL,
  `positivo` varchar(50) DEFAULT NULL,
  `aprendizaje` varchar(50) DEFAULT NULL,
  `innovacion` varchar(50) DEFAULT NULL,
  `flexibilidad` varchar(50) DEFAULT NULL,
  `entropia` varchar(50) DEFAULT NULL,
  `Prudencia` varchar(50) DEFAULT NULL,
  `Tolerancia` varchar(50) DEFAULT NULL,
  `Honestidad2` varchar(50) DEFAULT NULL,
  `Espiritu` varchar(50) DEFAULT NULL,
  `Respeto2` varchar(50) DEFAULT NULL,
  `escuchar2` varchar(50) DEFAULT NULL,
  `Empatia` varchar(50) DEFAULT NULL,
  `Equidad` varchar(50) DEFAULT NULL,
  `Justicia2` varchar(50) DEFAULT NULL,
  `Discrecion` varchar(50) DEFAULT NULL,
  `Responsabilidad` varchar(50) DEFAULT NULL,
  `planear` varchar(50) DEFAULT NULL,
  `diseno` varchar(50) DEFAULT NULL,
  `creacion` varchar(50) DEFAULT NULL,
  `analista` varchar(50) DEFAULT NULL,
  `desarrollo2` varchar(50) DEFAULT NULL,
  `generacion2` varchar(50) DEFAULT NULL,
  `administrar` varchar(50) DEFAULT NULL,
  `adsistemas` varchar(50) DEFAULT NULL,
  `liderar` varchar(50) DEFAULT NULL,
  `addepartamentos` varchar(50) DEFAULT NULL,
  `elaboracion` varchar(50) DEFAULT NULL,
  `programas` varchar(50) DEFAULT NULL,
  `implementacion` varchar(50) DEFAULT NULL,
  `estrategias` varchar(50) DEFAULT NULL,
  `estudios` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta8`
--

INSERT INTO `encuesta8` (`idenc`, `idegresado`, `analisis`, `solucion`, `calculo`, `comunicacion`, `concentracion`, `desarrollo`, `lectura`, `manejo`, `informacion`, `relacion`, `humanas`, `conflictos`, `toma`, `liderasgo`, `coordinacion`, `emprendedor`, `persuacion`, `objetividad`, `aceptacion`, `busqueda`, `constancia`, `cooperacion`, `profesionales`, `escuchar`, `equipo`, `emocional`, `honestidad`, `superacion`, `tecnologias`, `interes`, `persistencia`, `respeto`, `responsabilidad2`, `positivo`, `aprendizaje`, `innovacion`, `flexibilidad`, `entropia`, `Prudencia`, `Tolerancia`, `Honestidad2`, `Espiritu`, `Respeto2`, `escuchar2`, `Empatia`, `Equidad`, `Justicia2`, `Discrecion`, `Responsabilidad`, `planear`, `diseno`, `creacion`, `analista`, `desarrollo2`, `generacion2`, `administrar`, `adsistemas`, `liderar`, `addepartamentos`, `elaboracion`, `programas`, `implementacion`, `estrategias`, `estudios`) VALUES
(8, 15, 'muy satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'poco satisfecho', 'muy satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho'),
(9, 16, 'muy satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho', 'satisfecho'),
(10, 17, 'muy satisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho'),
(11, 18, 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho'),
(12, 19, 'muy satisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho', 'insatisfecho'),
(13, 28, 'muy satisfecho', 'satisfecho', 'regular', 'poco satisfecho', 'insatisfecho', 'poco satisfecho', 'regular', 'satisfecho', 'muy satisfecho', 'satisfecho', 'regular', 'poco satisfecho', 'insatisfecho', 'poco satisfecho', 'regular', 'satisfecho', 'muy satisfecho', 'satisfecho', 'muy satisfecho', 'regular', 'satisfecho', 'poco satisfecho', 'satisfecho', 'regular', 'poco satisfecho', 'regular', 'poco satisfecho', 'poco satisfecho', 'regular', 'satisfecho', 'regular', 'poco satisfecho', 'insatisfecho', 'regular', 'satisfecho', 'muy satisfecho', 'satisfecho', 'regular', 'muy satisfecho', 'satisfecho', 'regular', 'poco satisfecho', 'insatisfecho', 'poco satisfecho', 'regular', 'satisfecho', 'regular', 'poco satisfecho', 'regular', 'muy satisfecho', 'regular', 'poco satisfecho', 'insatisfecho', 'poco satisfecho', 'satisfecho', 'regular', 'poco satisfecho', 'poco satisfecho', 'regular', 'insatisfecho', 'poco satisfecho', 'poco satisfecho', 'insatisfecho', 'insatisfecho'),
(14, 31, 'muy satisfecho', 'satisfecho', 'regular', 'poco satisfecho', 'insatisfecho', 'poco satisfecho', 'regular', 'satisfecho', 'muy satisfecho', 'satisfecho', 'poco satisfecho', 'insatisfecho', 'poco satisfecho', 'regular', 'satisfecho', 'regular', 'satisfecho', 'regular', 'muy satisfecho', 'satisfecho', 'regular', 'poco satisfecho', 'insatisfecho', 'regular', 'insatisfecho', 'poco satisfecho', 'regular', 'muy satisfecho', 'satisfecho', 'muy satisfecho', 'satisfecho', 'regular', 'poco satisfecho', 'insatisfecho', 'poco satisfecho', 'regular', 'satisfecho', 'muy satisfecho', 'muy satisfecho', 'regular', 'insatisfecho', 'regular', 'poco satisfecho', 'insatisfecho', 'poco satisfecho', 'regular', 'regular', 'regular', 'satisfecho', 'regular', 'poco satisfecho', 'insatisfecho', 'poco satisfecho', 'regular', 'satisfecho', 'muy satisfecho', 'regular', 'poco satisfecho', 'insatisfecho', 'poco satisfecho', 'poco satisfecho', 'insatisfecho', 'poco satisfecho', 'poco satisfecho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `clave` varchar(2) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `epermalink` varchar(100) DEFAULT NULL,
  `abrev` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Tabla de Estados de la República Mexicana';

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `clave`, `nombre`, `epermalink`, `abrev`) VALUES
(1, '01', 'Aguascalientes', 'aguascalientes', 'Ags.'),
(2, '02', 'Baja California', 'baja-california', 'BC'),
(3, '03', 'Baja California Sur', 'baja-california-sur', 'BCS'),
(4, '04', 'Campeche', 'campeche', 'Camp.'),
(5, '05', 'Coahuila de Zaragoza', 'coahuila-de-zaragoza', 'Coah.'),
(6, '06', 'Colima', 'colima', 'Col.'),
(7, '07', 'Chiapas', 'chiapas', 'Chis.'),
(8, '08', 'Chihuahua', 'chihuahua', 'Chih.'),
(9, '09', 'Distrito Federal', 'distrito-federal', 'DF'),
(10, '10', 'Durango', 'durango', 'Dgo.'),
(11, '11', 'Guanajuato', 'guanajuato', 'Gto.'),
(12, '12', 'Guerrero', 'guerrero', 'Gro.'),
(13, '13', 'Hidalgo', 'hidalgo', 'Hgo.'),
(14, '14', 'Jalisco', 'jalisco', 'Jal.'),
(15, '15', 'México', 'mexico', 'Mex.'),
(16, '16', 'Michoacán de Ocampo', 'michoacan-de-ocampo', 'Mich.'),
(17, '17', 'Morelos', 'morelos', 'Mor.'),
(18, '18', 'Nayarit', 'nayarit', 'Nay.'),
(19, '19', 'Nuevo León', 'nuevo-leon', 'NL'),
(20, '20', 'Oaxaca', 'oaxaca', 'Oax.'),
(21, '21', 'Puebla', 'puebla', 'Pue.'),
(22, '22', 'Querétaro', 'queretaro', 'Qro.'),
(23, '23', 'Quintana Roo', 'quintana-roo', 'Q. Roo'),
(24, '24', 'San Luis Potosí', 'san-luis-potos', 'SLP'),
(25, '25', 'Sinaloa', 'sinaloa', 'Sin.'),
(26, '26', 'Sonora', 'sonora', 'Son.'),
(27, '27', 'Tabasco', 'tabasco', 'Tab.'),
(28, '28', 'Tamaulipas', 'tamaulipas', 'Tamps.'),
(29, '29', 'Tlaxcala', 'tlaxcala', 'Tlax.'),
(30, '30', 'Veracruz de Ignacio de la Llave', 'veracruz-de-ignacio-de-la-llave', 'Ver.'),
(31, '31', 'Yucatán', 'yucatan', 'Yuc.'),
(32, '32', 'Zacatecas', 'zacatecas', 'Zac.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estructura_em`
--

CREATE TABLE `estructura_em` (
  `idenc` int(11) NOT NULL,
  `idemp` int(11) DEFAULT NULL,
  `medio` varchar(50) DEFAULT NULL,
  `cuanto` varchar(50) DEFAULT NULL,
  `licenciatura` varchar(50) DEFAULT NULL,
  `puesto` varchar(50) DEFAULT NULL,
  `dedico` varchar(50) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fortalezas_em`
--

CREATE TABLE `fortalezas_em` (
  `idenc` int(11) NOT NULL,
  `idemp` int(11) DEFAULT NULL,
  `fortaleza` varchar(50) DEFAULT NULL,
  `debilidad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integral_em`
--

CREATE TABLE `integral_em` (
  `idenc` int(11) NOT NULL,
  `idemp` int(11) DEFAULT NULL,
  `satisfecho` varchar(50) DEFAULT NULL,
  `general` varchar(50) DEFAULT NULL,
  `contrataria` varchar(50) DEFAULT NULL,
  `porque` varchar(50) DEFAULT NULL,
  `experiencia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licenciatura`
--

CREATE TABLE `licenciatura` (
  `idlic` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `condicion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `licenciatura`
--

INSERT INTO `licenciatura` (`idlic`, `nombre`, `descripcion`, `condicion`) VALUES
(1, 'DERECHO', 'LICENCIATURA 4 AÑO', 1),
(2, 'INFORMATICA ADMINISTRACTIVA', 'LICENCIATURA  4  AÑOS', 1),
(4, 'CONTADURIA', 'LICENCIATURA 4 AÑOS', 1),
(6, 'AGRONOMIA', 'LICENCIATURA 4 AÑOS', 1),
(7, 'TURISMO', 'LICENCIATURA DE 3 AÑOS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL COMMENT 'Relación con estados',
  `clave` varchar(3) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `sigla` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Tabla de Municipios de la Republica Mexicana';

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `estado_id`, `clave`, `nombre`, `sigla`) VALUES
(1, 1, '001', 'Aguascalientes', ''),
(2, 1, '002', 'Asientos', ''),
(3, 1, '003', 'Calvillo', ''),
(4, 1, '004', 'Cosío', ''),
(5, 1, '005', 'Jesús María', ''),
(6, 1, '006', 'Pabellón de Arteaga', ''),
(7, 1, '007', 'Rincón de Romos', ''),
(8, 1, '008', 'San José de Gracia', ''),
(9, 1, '009', 'Tepezalá', ''),
(10, 1, '010', 'El Llano', ''),
(11, 1, '011', 'San Francisco de los Romo', ''),
(12, 2, '001', 'Ensenada', ''),
(13, 2, '002', 'Mexicali', ''),
(14, 2, '003', 'Tecate', ''),
(15, 2, '004', 'Tijuana', ''),
(16, 2, '005', 'Playas de Rosarito', ''),
(17, 3, '001', 'Comondú', ''),
(18, 3, '002', 'Mulegé', ''),
(19, 3, '003', 'La Paz', ''),
(20, 3, '008', 'Los Cabos', ''),
(21, 3, '009', 'Loreto', ''),
(22, 4, '001', 'Calkiní', ''),
(23, 4, '002', 'Campeche', ''),
(24, 4, '003', 'Carmen', ''),
(25, 4, '004', 'Champotón', ''),
(26, 4, '005', 'Hecelchakán', ''),
(27, 4, '006', 'Hopelchén', ''),
(28, 4, '007', 'Palizada', ''),
(29, 4, '008', 'Tenabo', ''),
(30, 4, '009', 'Escárcega', ''),
(31, 4, '010', 'Calakmul', ''),
(32, 4, '011', 'Candelaria', ''),
(33, 5, '001', 'Abasolo', ''),
(34, 5, '002', 'Acuña', ''),
(35, 5, '003', 'Allende', ''),
(36, 5, '004', 'Arteaga', ''),
(37, 5, '005', 'Candela', ''),
(38, 5, '006', 'Castaños', ''),
(39, 5, '007', 'Cuatro Ciénegas', ''),
(40, 5, '008', 'Escobedo', ''),
(41, 5, '009', 'Francisco I. Madero', ''),
(42, 5, '010', 'Frontera', ''),
(43, 5, '011', 'General Cepeda', ''),
(44, 5, '012', 'Guerrero', ''),
(45, 5, '013', 'Hidalgo', ''),
(46, 5, '014', 'Jiménez', ''),
(47, 5, '015', 'Juárez', ''),
(48, 5, '016', 'Lamadrid', ''),
(49, 5, '017', 'Matamoros', ''),
(50, 5, '018', 'Monclova', ''),
(51, 5, '019', 'Morelos', ''),
(52, 5, '020', 'Múzquiz', ''),
(53, 5, '021', 'Nadadores', ''),
(54, 5, '022', 'Nava', ''),
(55, 5, '023', 'Ocampo', ''),
(56, 5, '024', 'Parras', ''),
(57, 5, '025', 'Piedras Negras', ''),
(58, 5, '026', 'Progreso', ''),
(59, 5, '027', 'Ramos Arizpe', ''),
(60, 5, '028', 'Sabinas', ''),
(61, 5, '029', 'Sacramento', ''),
(62, 5, '030', 'Saltillo', ''),
(63, 5, '031', 'San Buenaventura', ''),
(64, 5, '032', 'San Juan de Sabinas', ''),
(65, 5, '033', 'San Pedro', ''),
(66, 5, '034', 'Sierra Mojada', ''),
(67, 5, '035', 'Torreón', ''),
(68, 5, '036', 'Viesca', ''),
(69, 5, '037', 'Villa Unión', ''),
(70, 5, '038', 'Zaragoza', ''),
(71, 6, '001', 'Armería', ''),
(72, 6, '002', 'Colima', ''),
(73, 6, '003', 'Comala', ''),
(74, 6, '004', 'Coquimatlán', ''),
(75, 6, '005', 'Cuauhtémoc', ''),
(76, 6, '006', 'Ixtlahuacán', ''),
(77, 6, '007', 'Manzanillo', ''),
(78, 6, '008', 'Minatitlán', ''),
(79, 6, '009', 'Tecomán', ''),
(80, 6, '010', 'Villa de Álvarez', ''),
(81, 7, '001', 'Acacoyagua', ''),
(82, 7, '002', 'Acala', ''),
(83, 7, '003', 'Acapetahua', ''),
(84, 7, '004', 'Altamirano', ''),
(85, 7, '005', 'Amatán', ''),
(86, 7, '006', 'Amatenango de la Frontera', ''),
(87, 7, '007', 'Amatenango del Valle', ''),
(88, 7, '008', 'Angel Albino Corzo', ''),
(89, 7, '009', 'Arriaga', ''),
(90, 7, '010', 'Bejucal de Ocampo', ''),
(91, 7, '011', 'Bella Vista', ''),
(92, 7, '012', 'Berriozábal', ''),
(93, 7, '013', 'Bochil', ''),
(94, 7, '014', 'El Bosque', ''),
(95, 7, '015', 'Cacahoatán', ''),
(96, 7, '016', 'Catazajá', ''),
(97, 7, '017', 'Cintalapa', ''),
(98, 7, '018', 'Coapilla', ''),
(99, 7, '019', 'Comitán de Domínguez', ''),
(100, 7, '020', 'La Concordia', ''),
(101, 7, '021', 'Copainalá', ''),
(102, 7, '022', 'Chalchihuitán', ''),
(103, 7, '023', 'Chamula', ''),
(104, 7, '024', 'Chanal', ''),
(105, 7, '025', 'Chapultenango', ''),
(106, 7, '026', 'Chenalhó', ''),
(107, 7, '027', 'Chiapa de Corzo', ''),
(108, 7, '028', 'Chiapilla', ''),
(109, 7, '029', 'Chicoasén', ''),
(110, 7, '030', 'Chicomuselo', ''),
(111, 7, '031', 'Chilón', ''),
(112, 7, '032', 'Escuintla', ''),
(113, 7, '033', 'Francisco León', ''),
(114, 7, '034', 'Frontera Comalapa', ''),
(115, 7, '035', 'Frontera Hidalgo', ''),
(116, 7, '036', 'La Grandeza', ''),
(117, 7, '037', 'Huehuetán', ''),
(118, 7, '038', 'Huixtán', ''),
(119, 7, '039', 'Huitiupán', ''),
(120, 7, '040', 'Huixtla', ''),
(121, 7, '041', 'La Independencia', ''),
(122, 7, '042', 'Ixhuatán', ''),
(123, 7, '043', 'Ixtacomitán', ''),
(124, 7, '044', 'Ixtapa', ''),
(125, 7, '045', 'Ixtapangajoya', ''),
(126, 7, '046', 'Jiquipilas', ''),
(127, 7, '047', 'Jitotol', ''),
(128, 7, '048', 'Juárez', ''),
(129, 7, '049', 'Larráinzar', ''),
(130, 7, '050', 'La Libertad', ''),
(131, 7, '051', 'Mapastepec', ''),
(132, 7, '052', 'Las Margaritas', ''),
(133, 7, '053', 'Mazapa de Madero', ''),
(134, 7, '054', 'Mazatán', ''),
(135, 7, '055', 'Metapa', ''),
(136, 7, '056', 'Mitontic', ''),
(137, 7, '057', 'Motozintla', ''),
(138, 7, '058', 'Nicolás Ruíz', ''),
(139, 7, '059', 'Ocosingo', ''),
(140, 7, '060', 'Ocotepec', ''),
(141, 7, '061', 'Ocozocoautla de Espinosa', ''),
(142, 7, '062', 'Ostuacán', ''),
(143, 7, '063', 'Osumacinta', ''),
(144, 7, '064', 'Oxchuc', ''),
(145, 7, '065', 'Palenque', ''),
(146, 7, '066', 'Pantelhó', ''),
(147, 7, '067', 'Pantepec', ''),
(148, 7, '068', 'Pichucalco', ''),
(149, 7, '069', 'Pijijiapan', ''),
(150, 7, '070', 'El Porvenir', ''),
(151, 7, '071', 'Villa Comaltitlán', ''),
(152, 7, '072', 'Pueblo Nuevo Solistahuacán', ''),
(153, 7, '073', 'Rayón', ''),
(154, 7, '074', 'Reforma', ''),
(155, 7, '075', 'Las Rosas', ''),
(156, 7, '076', 'Sabanilla', ''),
(157, 7, '077', 'Salto de Agua', ''),
(158, 7, '078', 'San Cristóbal de las Casas', ''),
(159, 7, '079', 'San Fernando', ''),
(160, 7, '080', 'Siltepec', ''),
(161, 7, '081', 'Simojovel', ''),
(162, 7, '082', 'Sitalá', ''),
(163, 7, '083', 'Socoltenango', ''),
(164, 7, '084', 'Solosuchiapa', ''),
(165, 7, '085', 'Soyaló', ''),
(166, 7, '086', 'Suchiapa', ''),
(167, 7, '087', 'Suchiate', ''),
(168, 7, '088', 'Sunuapa', ''),
(169, 7, '089', 'Tapachula', ''),
(170, 7, '090', 'Tapalapa', ''),
(171, 7, '091', 'Tapilula', ''),
(172, 7, '092', 'Tecpatán', ''),
(173, 7, '093', 'Tenejapa', ''),
(174, 7, '094', 'Teopisca', ''),
(175, 7, '096', 'Tila', ''),
(176, 7, '097', 'Tonalá', ''),
(177, 7, '098', 'Totolapa', ''),
(178, 7, '099', 'La Trinitaria', ''),
(179, 7, '100', 'Tumbalá', ''),
(180, 7, '101', 'Tuxtla Gutiérrez', ''),
(181, 7, '102', 'Tuxtla Chico', ''),
(182, 7, '103', 'Tuzantán', ''),
(183, 7, '104', 'Tzimol', ''),
(184, 7, '105', 'Unión Juárez', ''),
(185, 7, '106', 'Venustiano Carranza', ''),
(186, 7, '107', 'Villa Corzo', ''),
(187, 7, '108', 'Villaflores', ''),
(188, 7, '109', 'Yajalón', ''),
(189, 7, '110', 'San Lucas', ''),
(190, 7, '111', 'Zinacantán', ''),
(191, 7, '112', 'San Juan Cancuc', ''),
(192, 7, '113', 'Aldama', ''),
(193, 7, '114', 'Benemérito de las Américas', ''),
(194, 7, '115', 'Maravilla Tenejapa', ''),
(195, 7, '116', 'Marqués de Comillas', ''),
(196, 7, '117', 'Montecristo de Guerrero', ''),
(197, 7, '118', 'San Andrés Duraznal', ''),
(198, 7, '119', 'Santiago el Pinar', ''),
(199, 8, '001', 'Ahumada', ''),
(200, 8, '002', 'Aldama', ''),
(201, 8, '003', 'Allende', ''),
(202, 8, '004', 'Aquiles Serdán', ''),
(203, 8, '005', 'Ascensión', ''),
(204, 8, '006', 'Bachíniva', ''),
(205, 8, '007', 'Balleza', ''),
(206, 8, '008', 'Batopilas', ''),
(207, 8, '009', 'Bocoyna', ''),
(208, 8, '010', 'Buenaventura', ''),
(209, 8, '011', 'Camargo', ''),
(210, 8, '012', 'Carichí', ''),
(211, 8, '013', 'Casas Grandes', ''),
(212, 8, '014', 'Coronado', ''),
(213, 8, '015', 'Coyame del Sotol', ''),
(214, 8, '016', 'La Cruz', ''),
(215, 8, '017', 'Cuauhtémoc', ''),
(216, 8, '018', 'Cusihuiriachi', ''),
(217, 8, '019', 'Chihuahua', ''),
(218, 8, '020', 'Chínipas', ''),
(219, 8, '021', 'Delicias', ''),
(220, 8, '022', 'Dr. Belisario Domínguez', ''),
(221, 8, '023', 'Galeana', ''),
(222, 8, '024', 'Santa Isabel', ''),
(223, 8, '025', 'Gómez Farías', ''),
(224, 8, '026', 'Gran Morelos', ''),
(225, 8, '027', 'Guachochi', ''),
(226, 8, '028', 'Guadalupe', ''),
(227, 8, '029', 'Guadalupe y Calvo', ''),
(228, 8, '030', 'Guazapares', ''),
(229, 8, '031', 'Guerrero', ''),
(230, 8, '032', 'Hidalgo del Parral', ''),
(231, 8, '033', 'Huejotitán', ''),
(232, 8, '034', 'Ignacio Zaragoza', ''),
(233, 8, '035', 'Janos', ''),
(234, 8, '036', 'Jiménez', ''),
(235, 8, '037', 'Juárez', ''),
(236, 8, '038', 'Julimes', ''),
(237, 8, '039', 'López', ''),
(238, 8, '040', 'Madera', ''),
(239, 8, '041', 'Maguarichi', ''),
(240, 8, '042', 'Manuel Benavides', ''),
(241, 8, '043', 'Matachí', ''),
(242, 8, '044', 'Matamoros', ''),
(243, 8, '045', 'Meoqui', ''),
(244, 8, '046', 'Morelos', ''),
(245, 8, '047', 'Moris', ''),
(246, 8, '048', 'Namiquipa', ''),
(247, 8, '049', 'Nonoava', ''),
(248, 8, '050', 'Nuevo Casas Grandes', ''),
(249, 8, '051', 'Ocampo', ''),
(250, 8, '052', 'Ojinaga', ''),
(251, 8, '053', 'Praxedis G. Guerrero', ''),
(252, 8, '054', 'Riva Palacio', ''),
(253, 8, '055', 'Rosales', ''),
(254, 8, '056', 'Rosario', ''),
(255, 8, '057', 'San Francisco de Borja', ''),
(256, 8, '058', 'San Francisco de Conchos', ''),
(257, 8, '059', 'San Francisco del Oro', ''),
(258, 8, '060', 'Santa Bárbara', ''),
(259, 8, '061', 'Satevó', ''),
(260, 8, '062', 'Saucillo', ''),
(261, 8, '063', 'Temósachic', ''),
(262, 8, '064', 'El Tule', ''),
(263, 8, '065', 'Urique', ''),
(264, 8, '066', 'Uruachi', ''),
(265, 8, '067', 'Valle de Zaragoza', ''),
(266, 9, '002', 'Azcapotzalco', ''),
(267, 9, '003', 'Coyoacán', ''),
(268, 9, '004', 'Cuajimalpa de Morelos', ''),
(269, 9, '005', 'Gustavo A. Madero', ''),
(270, 9, '006', 'Iztacalco', ''),
(271, 9, '007', 'Iztapalapa', ''),
(272, 9, '008', 'La Magdalena Contreras', ''),
(273, 9, '009', 'Milpa Alta', ''),
(274, 9, '010', 'Álvaro Obregón', ''),
(275, 9, '011', 'Tláhuac', ''),
(276, 9, '012', 'Tlalpan', ''),
(277, 9, '013', 'Xochimilco', ''),
(278, 9, '014', 'Benito Juárez', ''),
(279, 9, '015', 'Cuauhtémoc', ''),
(280, 9, '016', 'Miguel Hidalgo', ''),
(281, 9, '017', 'Venustiano Carranza', ''),
(282, 10, '001', 'Canatlán', ''),
(283, 10, '002', 'Canelas', ''),
(284, 10, '003', 'Coneto de Comonfort', ''),
(285, 10, '004', 'Cuencamé', ''),
(286, 10, '005', 'Durango', ''),
(287, 10, '006', 'General Simón Bolívar', ''),
(288, 10, '007', 'Gómez Palacio', ''),
(289, 10, '008', 'Guadalupe Victoria', ''),
(290, 10, '009', 'Guanaceví', ''),
(291, 10, '010', 'Hidalgo', ''),
(292, 10, '011', 'Indé', ''),
(293, 10, '012', 'Lerdo', ''),
(294, 10, '013', 'Mapimí', ''),
(295, 10, '014', 'Mezquital', ''),
(296, 10, '015', 'Nazas', ''),
(297, 10, '016', 'Nombre de Dios', ''),
(298, 10, '017', 'Ocampo', ''),
(299, 10, '018', 'El Oro', ''),
(300, 10, '019', 'Otáez', ''),
(301, 10, '020', 'Pánuco de Coronado', ''),
(302, 10, '021', 'Peñón Blanco', ''),
(303, 10, '022', 'Poanas', ''),
(304, 10, '023', 'Pueblo Nuevo', ''),
(305, 10, '024', 'Rodeo', ''),
(306, 10, '025', 'San Bernardo', ''),
(307, 10, '026', 'San Dimas', ''),
(308, 10, '027', 'San Juan de Guadalupe', ''),
(309, 10, '028', 'San Juan del Río', ''),
(310, 10, '029', 'San Luis del Cordero', ''),
(311, 10, '030', 'San Pedro del Gallo', ''),
(312, 10, '031', 'Santa Clara', ''),
(313, 10, '032', 'Santiago Papasquiaro', ''),
(314, 10, '033', 'Súchil', ''),
(315, 10, '034', 'Tamazula', ''),
(316, 10, '035', 'Tepehuanes', ''),
(317, 10, '036', 'Tlahualilo', ''),
(318, 10, '037', 'Topia', ''),
(319, 10, '038', 'Vicente Guerrero', ''),
(320, 10, '039', 'Nuevo Ideal', ''),
(321, 11, '001', 'Abasolo', ''),
(322, 11, '002', 'Acámbaro', ''),
(323, 11, '003', 'San Miguel de Allende', ''),
(324, 11, '004', 'Apaseo el Alto', ''),
(325, 11, '005', 'Apaseo el Grande', ''),
(326, 11, '006', 'Atarjea', ''),
(327, 11, '007', 'Celaya', ''),
(328, 11, '008', 'Manuel Doblado', ''),
(329, 11, '009', 'Comonfort', ''),
(330, 11, '010', 'Coroneo', ''),
(331, 11, '011', 'Cortazar', ''),
(332, 11, '012', 'Cuerámaro', ''),
(333, 11, '013', 'Doctor Mora', ''),
(334, 11, '014', 'Dolores Hidalgo Cuna de la Independencia Nacional', ''),
(335, 11, '015', 'Guanajuato', ''),
(336, 11, '016', 'Huanímaro', ''),
(337, 11, '017', 'Irapuato', ''),
(338, 11, '018', 'Jaral del Progreso', ''),
(339, 11, '019', 'Jerécuaro', ''),
(340, 11, '020', 'León', ''),
(341, 11, '021', 'Moroleón', ''),
(342, 11, '022', 'Ocampo', ''),
(343, 11, '023', 'Pénjamo', ''),
(344, 11, '024', 'Pueblo Nuevo', ''),
(345, 11, '025', 'Purísima del Rincón', ''),
(346, 11, '026', 'Romita', ''),
(347, 11, '027', 'Salamanca', ''),
(348, 11, '028', 'Salvatierra', ''),
(349, 11, '029', 'San Diego de la Unión', ''),
(350, 11, '030', 'San Felipe', ''),
(351, 11, '031', 'San Francisco del Rincón', ''),
(352, 11, '032', 'San José Iturbide', ''),
(353, 11, '033', 'San Luis de la Paz', ''),
(354, 11, '034', 'Santa Catarina', ''),
(355, 11, '035', 'Santa Cruz de Juventino Rosas', ''),
(356, 11, '036', 'Santiago Maravatío', ''),
(357, 11, '037', 'Silao', ''),
(358, 11, '038', 'Tarandacuao', ''),
(359, 11, '039', 'Tarimoro', ''),
(360, 11, '040', 'Tierra Blanca', ''),
(361, 11, '041', 'Uriangato', ''),
(362, 11, '042', 'Valle de Santiago', ''),
(363, 11, '043', 'Victoria', ''),
(364, 11, '044', 'Villagrán', ''),
(365, 11, '045', 'Xichú', ''),
(366, 11, '046', 'Yuriria', ''),
(367, 12, '001', 'Acapulco de Juárez', ''),
(368, 12, '002', 'Ahuacuotzingo', ''),
(369, 12, '003', 'Ajuchitlán del Progreso', ''),
(370, 12, '004', 'Alcozauca de Guerrero', ''),
(371, 12, '005', 'Alpoyeca', ''),
(372, 12, '006', 'Apaxtla', ''),
(373, 12, '007', 'Arcelia', ''),
(374, 12, '008', 'Atenango del Río', ''),
(375, 12, '009', 'Atlamajalcingo del Monte', ''),
(376, 12, '010', 'Atlixtac', ''),
(377, 12, '011', 'Atoyac de Álvarez', ''),
(378, 12, '012', 'Ayutla de los Libres', ''),
(379, 12, '013', 'Azoyú', ''),
(380, 12, '014', 'Benito Juárez', ''),
(381, 12, '015', 'Buenavista de Cuéllar', ''),
(382, 12, '016', 'Coahuayutla de José María Izazaga', ''),
(383, 12, '017', 'Cocula', ''),
(384, 12, '018', 'Copala', ''),
(385, 12, '019', 'Copalillo', ''),
(386, 12, '020', 'Copanatoyac', ''),
(387, 12, '021', 'Coyuca de Benítez', ''),
(388, 12, '022', 'Coyuca de Catalán', ''),
(389, 12, '023', 'Cuajinicuilapa', ''),
(390, 12, '024', 'Cualác', ''),
(391, 12, '025', 'Cuautepec', ''),
(392, 12, '026', 'Cuetzala del Progreso', ''),
(393, 12, '027', 'Cutzamala de Pinzón', ''),
(394, 12, '028', 'Chilapa de Álvarez', ''),
(395, 12, '029', 'Chilpancingo de los Bravo', ''),
(396, 12, '030', 'Florencio Villarreal', ''),
(397, 12, '031', 'General Canuto A. Neri', ''),
(398, 12, '032', 'General Heliodoro Castillo', ''),
(399, 12, '033', 'Huamuxtitlán', ''),
(400, 12, '034', 'Huitzuco de los Figueroa', ''),
(401, 12, '035', 'Iguala de la Independencia', ''),
(402, 12, '036', 'Igualapa', ''),
(403, 12, '037', 'Ixcateopan de Cuauhtémoc', ''),
(404, 12, '038', 'Zihuatanejo de Azueta', ''),
(405, 12, '039', 'Juan R. Escudero', ''),
(406, 12, '040', 'Leonardo Bravo', ''),
(407, 12, '041', 'Malinaltepec', ''),
(408, 12, '042', 'Mártir de Cuilapan', ''),
(409, 12, '043', 'Metlatónoc', ''),
(410, 12, '044', 'Mochitlán', ''),
(411, 12, '045', 'Olinalá', ''),
(412, 12, '046', 'Ometepec', ''),
(413, 12, '047', 'Pedro Ascencio Alquisiras', ''),
(414, 12, '048', 'Petatlán', ''),
(415, 12, '049', 'Pilcaya', ''),
(416, 12, '050', 'Pungarabato', ''),
(417, 12, '051', 'Quechultenango', ''),
(418, 12, '052', 'San Luis Acatlán', ''),
(419, 12, '053', 'San Marcos', ''),
(420, 12, '054', 'San Miguel Totolapan', ''),
(421, 12, '055', 'Taxco de Alarcón', ''),
(422, 12, '056', 'Tecoanapa', ''),
(423, 12, '057', 'Técpan de Galeana', ''),
(424, 12, '058', 'Teloloapan', ''),
(425, 12, '059', 'Tepecoacuilco de Trujano', ''),
(426, 12, '060', 'Tetipac', ''),
(427, 12, '061', 'Tixtla de Guerrero', ''),
(428, 12, '062', 'Tlacoachistlahuaca', ''),
(429, 12, '063', 'Tlacoapa', ''),
(430, 12, '064', 'Tlalchapa', ''),
(431, 12, '065', 'Tlalixtaquilla de Maldonado', ''),
(432, 12, '066', 'Tlapa de Comonfort', ''),
(433, 12, '067', 'Tlapehuala', ''),
(434, 12, '068', 'La Unión de Isidoro Montes de Oca', ''),
(435, 12, '069', 'Xalpatláhuac', ''),
(436, 12, '070', 'Xochihuehuetlán', ''),
(437, 12, '071', 'Xochistlahuaca', ''),
(438, 12, '072', 'Zapotitlán Tablas', ''),
(439, 12, '073', 'Zirándaro', ''),
(440, 12, '074', 'Zitlala', ''),
(441, 12, '075', 'Eduardo Neri', ''),
(442, 12, '076', 'Acatepec', ''),
(443, 12, '077', 'Marquelia', ''),
(444, 12, '078', 'Cochoapa el Grande', ''),
(445, 12, '079', 'José Joaquín de Herrera', ''),
(446, 12, '080', 'Juchitán', ''),
(447, 12, '081', 'Iliatenco', ''),
(448, 13, '001', 'Acatlán', ''),
(449, 13, '002', 'Acaxochitlán', ''),
(450, 13, '003', 'Actopan', ''),
(451, 13, '004', 'Agua Blanca de Iturbide', ''),
(452, 13, '005', 'Ajacuba', ''),
(453, 13, '006', 'Alfajayucan', ''),
(454, 13, '007', 'Almoloya', ''),
(455, 13, '008', 'Apan', ''),
(456, 13, '009', 'El Arenal', ''),
(457, 13, '010', 'Atitalaquia', ''),
(458, 13, '011', 'Atlapexco', ''),
(459, 13, '012', 'Atotonilco el Grande', ''),
(460, 13, '013', 'Atotonilco de Tula', ''),
(461, 13, '014', 'Calnali', ''),
(462, 13, '015', 'Cardonal', ''),
(463, 13, '016', 'Cuautepec de Hinojosa', ''),
(464, 13, '017', 'Chapantongo', ''),
(465, 13, '018', 'Chapulhuacán', ''),
(466, 13, '019', 'Chilcuautla', ''),
(467, 13, '020', 'Eloxochitlán', ''),
(468, 13, '021', 'Emiliano Zapata', ''),
(469, 13, '022', 'Epazoyucan', ''),
(470, 13, '023', 'Francisco I. Madero', ''),
(471, 13, '024', 'Huasca de Ocampo', ''),
(472, 13, '025', 'Huautla', ''),
(473, 13, '026', 'Huazalingo', ''),
(474, 13, '027', 'Huehuetla', ''),
(475, 13, '028', 'Huejutla de Reyes', ''),
(476, 13, '029', 'Huichapan', ''),
(477, 13, '030', 'Ixmiquilpan', ''),
(478, 13, '031', 'Jacala de Ledezma', ''),
(479, 13, '032', 'Jaltocán', ''),
(480, 13, '033', 'Juárez Hidalgo', ''),
(481, 13, '034', 'Lolotla', ''),
(482, 13, '035', 'Metepec', ''),
(483, 13, '036', 'San Agustín Metzquititlán', ''),
(484, 13, '037', 'Metztitlán', ''),
(485, 13, '038', 'Mineral del Chico', ''),
(486, 13, '039', 'Mineral del Monte', ''),
(487, 13, '040', 'La Misión', ''),
(488, 13, '041', 'Mixquiahuala de Juárez', ''),
(489, 13, '042', 'Molango de Escamilla', ''),
(490, 13, '043', 'Nicolás Flores', ''),
(491, 13, '044', 'Nopala de Villagrán', ''),
(492, 13, '045', 'Omitlán de Juárez', ''),
(493, 13, '046', 'San Felipe Orizatlán', ''),
(494, 13, '047', 'Pacula', ''),
(495, 13, '048', 'Pachuca de Soto', ''),
(496, 13, '049', 'Pisaflores', ''),
(497, 13, '050', 'Progreso de Obregón', ''),
(498, 13, '051', 'Mineral de la Reforma', ''),
(499, 13, '052', 'San Agustín Tlaxiaca', ''),
(500, 13, '053', 'San Bartolo Tutotepec', ''),
(501, 13, '054', 'San Salvador', ''),
(502, 13, '055', 'Santiago de Anaya', ''),
(503, 13, '056', 'Santiago Tulantepec de Lugo Guerrero', ''),
(504, 13, '057', 'Singuilucan', ''),
(505, 13, '058', 'Tasquillo', ''),
(506, 13, '059', 'Tecozautla', ''),
(507, 13, '060', 'Tenango de Doria', ''),
(508, 13, '061', 'Tepeapulco', ''),
(509, 13, '062', 'Tepehuacán de Guerrero', ''),
(510, 13, '063', 'Tepeji del Río de Ocampo', ''),
(511, 13, '064', 'Tepetitlán', ''),
(512, 13, '065', 'Tetepango', ''),
(513, 13, '066', 'Villa de Tezontepec', ''),
(514, 13, '067', 'Tezontepec de Aldama', ''),
(515, 13, '068', 'Tianguistengo', ''),
(516, 13, '069', 'Tizayuca', ''),
(517, 13, '070', 'Tlahuelilpan', ''),
(518, 13, '071', 'Tlahuiltepa', ''),
(519, 13, '072', 'Tlanalapa', ''),
(520, 13, '073', 'Tlanchinol', ''),
(521, 13, '074', 'Tlaxcoapan', ''),
(522, 13, '075', 'Tolcayuca', ''),
(523, 13, '076', 'Tula de Allende', ''),
(524, 13, '077', 'Tulancingo de Bravo', ''),
(525, 13, '078', 'Xochiatipan', ''),
(526, 13, '079', 'Xochicoatlán', ''),
(527, 13, '080', 'Yahualica', ''),
(528, 13, '081', 'Zacualtipán de Ángeles', ''),
(529, 13, '082', 'Zapotlán de Juárez', ''),
(530, 13, '083', 'Zempoala', ''),
(531, 13, '084', 'Zimapán', ''),
(532, 14, '001', 'Acatic', ''),
(533, 14, '002', 'Acatlán de Juárez', ''),
(534, 14, '003', 'Ahualulco de Mercado', ''),
(535, 14, '004', 'Amacueca', ''),
(536, 14, '005', 'Amatitán', ''),
(537, 14, '006', 'Ameca', ''),
(538, 14, '007', 'San Juanito de Escobedo', ''),
(539, 14, '008', 'Arandas', ''),
(540, 14, '009', 'El Arenal', ''),
(541, 14, '010', 'Atemajac de Brizuela', ''),
(542, 14, '011', 'Atengo', ''),
(543, 14, '012', 'Atenguillo', ''),
(544, 14, '013', 'Atotonilco el Alto', ''),
(545, 14, '014', 'Atoyac', ''),
(546, 14, '015', 'Autlán de Navarro', ''),
(547, 14, '016', 'Ayotlán', ''),
(548, 14, '017', 'Ayutla', ''),
(549, 14, '018', 'La Barca', ''),
(550, 14, '019', 'Bolaños', ''),
(551, 14, '020', 'Cabo Corrientes', ''),
(552, 14, '021', 'Casimiro Castillo', ''),
(553, 14, '022', 'Cihuatlán', ''),
(554, 14, '023', 'Zapotlán el Grande', ''),
(555, 14, '024', 'Cocula', ''),
(556, 14, '025', 'Colotlán', ''),
(557, 14, '026', 'Concepción de Buenos Aires', ''),
(558, 14, '027', 'Cuautitlán de García Barragán', ''),
(559, 14, '028', 'Cuautla', ''),
(560, 14, '029', 'Cuquío', ''),
(561, 14, '030', 'Chapala', ''),
(562, 14, '031', 'Chimaltitán', ''),
(563, 14, '032', 'Chiquilistlán', ''),
(564, 14, '033', 'Degollado', ''),
(565, 14, '034', 'Ejutla', ''),
(566, 14, '035', 'Encarnación de Díaz', ''),
(567, 14, '036', 'Etzatlán', ''),
(568, 14, '037', 'El Grullo', ''),
(569, 14, '038', 'Guachinango', ''),
(570, 14, '039', 'Guadalajara', ''),
(571, 14, '040', 'Hostotipaquillo', ''),
(572, 14, '041', 'Huejúcar', ''),
(573, 14, '042', 'Huejuquilla el Alto', ''),
(574, 14, '043', 'La Huerta', ''),
(575, 14, '044', 'Ixtlahuacán de los Membrillos', ''),
(576, 14, '045', 'Ixtlahuacán del Río', ''),
(577, 14, '046', 'Jalostotitlán', ''),
(578, 14, '047', 'Jamay', ''),
(579, 14, '048', 'Jesús María', ''),
(580, 14, '049', 'Jilotlán de los Dolores', ''),
(581, 14, '050', 'Jocotepec', ''),
(582, 14, '051', 'Juanacatlán', ''),
(583, 14, '052', 'Juchitlán', ''),
(584, 14, '053', 'Lagos de Moreno', ''),
(585, 14, '054', 'El Limón', ''),
(586, 14, '055', 'Magdalena', ''),
(587, 14, '056', 'Santa María del Oro', ''),
(588, 14, '057', 'La Manzanilla de la Paz', ''),
(589, 14, '058', 'Mascota', ''),
(590, 14, '059', 'Mazamitla', ''),
(591, 14, '060', 'Mexticacán', ''),
(592, 14, '061', 'Mezquitic', ''),
(593, 14, '062', 'Mixtlán', ''),
(594, 14, '063', 'Ocotlán', ''),
(595, 14, '064', 'Ojuelos de Jalisco', ''),
(596, 14, '065', 'Pihuamo', ''),
(597, 14, '066', 'Poncitlán', ''),
(598, 14, '067', 'Puerto Vallarta', ''),
(599, 14, '068', 'Villa Purificación', ''),
(600, 14, '069', 'Quitupan', ''),
(601, 14, '070', 'El Salto', ''),
(602, 14, '071', 'San Cristóbal de la Barranca', ''),
(603, 14, '072', 'San Diego de Alejandría', ''),
(604, 14, '073', 'San Juan de los Lagos', ''),
(605, 14, '074', 'San Julián', ''),
(606, 14, '075', 'San Marcos', ''),
(607, 14, '076', 'San Martín de Bolaños', ''),
(608, 14, '077', 'San Martín Hidalgo', ''),
(609, 14, '078', 'San Miguel el Alto', ''),
(610, 14, '079', 'Gómez Farías', ''),
(611, 14, '080', 'San Sebastián del Oeste', ''),
(612, 14, '081', 'Santa María de los Ángeles', ''),
(613, 14, '082', 'Sayula', ''),
(614, 14, '083', 'Tala', ''),
(615, 14, '084', 'Talpa de Allende', ''),
(616, 14, '085', 'Tamazula de Gordiano', ''),
(617, 14, '086', 'Tapalpa', ''),
(618, 14, '087', 'Tecalitlán', ''),
(619, 14, '088', 'Tecolotlán', ''),
(620, 14, '089', 'Techaluta de Montenegro', ''),
(621, 14, '090', 'Tenamaxtlán', ''),
(622, 14, '091', 'Teocaltiche', ''),
(623, 14, '092', 'Teocuitatlán de Corona', ''),
(624, 14, '093', 'Tepatitlán de Morelos', ''),
(625, 14, '094', 'Tequila', ''),
(626, 14, '095', 'Teuchitlán', ''),
(627, 14, '096', 'Tizapán el Alto', ''),
(628, 14, '097', 'Tlajomulco de Zúñiga', ''),
(629, 14, '098', 'San Pedro Tlaquepaque', ''),
(630, 14, '099', 'Tolimán', ''),
(631, 14, '100', 'Tomatlán', ''),
(632, 14, '101', 'Tonalá', ''),
(633, 14, '102', 'Tonaya', ''),
(634, 14, '103', 'Tonila', ''),
(635, 14, '104', 'Totatiche', ''),
(636, 14, '105', 'Tototlán', ''),
(637, 14, '106', 'Tuxcacuesco', ''),
(638, 14, '107', 'Tuxcueca', ''),
(639, 14, '108', 'Tuxpan', ''),
(640, 14, '109', 'Unión de San Antonio', ''),
(641, 14, '110', 'Unión de Tula', ''),
(642, 14, '111', 'Valle de Guadalupe', ''),
(643, 14, '112', 'Valle de Juárez', ''),
(644, 14, '113', 'San Gabriel', ''),
(645, 14, '114', 'Villa Corona', ''),
(646, 14, '115', 'Villa Guerrero', ''),
(647, 14, '116', 'Villa Hidalgo', ''),
(648, 14, '117', 'Cañadas de Obregón', ''),
(649, 14, '118', 'Yahualica de González Gallo', ''),
(650, 14, '119', 'Zacoalco de Torres', ''),
(651, 14, '120', 'Zapopan', ''),
(652, 14, '121', 'Zapotiltic', ''),
(653, 14, '122', 'Zapotitlán de Vadillo', ''),
(654, 14, '123', 'Zapotlán del Rey', ''),
(655, 14, '124', 'Zapotlanejo', ''),
(656, 14, '125', 'San Ignacio Cerro Gordo', ''),
(657, 15, '001', 'Acambay', ''),
(658, 15, '002', 'Acolman', ''),
(659, 15, '003', 'Aculco', ''),
(660, 15, '004', 'Almoloya de Alquisiras', ''),
(661, 15, '005', 'Almoloya de Juárez', ''),
(662, 15, '006', 'Almoloya del Río', ''),
(663, 15, '007', 'Amanalco', ''),
(664, 15, '008', 'Amatepec', ''),
(665, 15, '009', 'Amecameca', ''),
(666, 15, '010', 'Apaxco', ''),
(667, 15, '011', 'Atenco', ''),
(668, 15, '012', 'Atizapán', ''),
(669, 15, '013', 'Atizapán de Zaragoza', ''),
(670, 15, '014', 'Atlacomulco', ''),
(671, 15, '015', 'Atlautla', ''),
(672, 15, '016', 'Axapusco', ''),
(673, 15, '017', 'Ayapango', ''),
(674, 15, '018', 'Calimaya', ''),
(675, 15, '019', 'Capulhuac', ''),
(676, 15, '020', 'Coacalco de Berriozábal', ''),
(677, 15, '021', 'Coatepec Harinas', ''),
(678, 15, '022', 'Cocotitlán', ''),
(679, 15, '023', 'Coyotepec', ''),
(680, 15, '024', 'Cuautitlán', ''),
(681, 15, '025', 'Chalco', ''),
(682, 15, '026', 'Chapa de Mota', ''),
(683, 15, '027', 'Chapultepec', ''),
(684, 15, '028', 'Chiautla', ''),
(685, 15, '029', 'Chicoloapan', ''),
(686, 15, '030', 'Chiconcuac', ''),
(687, 15, '031', 'Chimalhuacán', ''),
(688, 15, '032', 'Donato Guerra', ''),
(689, 15, '033', 'Ecatepec de Morelos', ''),
(690, 15, '034', 'Ecatzingo', ''),
(691, 15, '035', 'Huehuetoca', ''),
(692, 15, '036', 'Hueypoxtla', ''),
(693, 15, '037', 'Huixquilucan', ''),
(694, 15, '038', 'Isidro Fabela', ''),
(695, 15, '039', 'Ixtapaluca', ''),
(696, 15, '040', 'Ixtapan de la Sal', ''),
(697, 15, '041', 'Ixtapan del Oro', ''),
(698, 15, '042', 'Ixtlahuaca', ''),
(699, 15, '043', 'Xalatlaco', ''),
(700, 15, '044', 'Jaltenco', ''),
(701, 15, '045', 'Jilotepec', ''),
(702, 15, '046', 'Jilotzingo', ''),
(703, 15, '047', 'Jiquipilco', ''),
(704, 15, '048', 'Jocotitlán', ''),
(705, 15, '049', 'Joquicingo', ''),
(706, 15, '050', 'Juchitepec', ''),
(707, 15, '051', 'Lerma', ''),
(708, 15, '052', 'Malinalco', ''),
(709, 15, '053', 'Melchor Ocampo', ''),
(710, 15, '054', 'Metepec', ''),
(711, 15, '055', 'Mexicaltzingo', ''),
(712, 15, '056', 'Morelos', ''),
(713, 15, '057', 'Naucalpan de Juárez', ''),
(714, 15, '058', 'Nezahualcóyotl', ''),
(715, 15, '059', 'Nextlalpan', ''),
(716, 15, '060', 'Nicolás Romero', ''),
(717, 15, '061', 'Nopaltepec', ''),
(718, 15, '062', 'Ocoyoacac', ''),
(719, 15, '063', 'Ocuilan', ''),
(720, 15, '064', 'El Oro', ''),
(721, 15, '065', 'Otumba', ''),
(722, 15, '066', 'Otzoloapan', ''),
(723, 15, '067', 'Otzolotepec', ''),
(724, 15, '068', 'Ozumba', ''),
(725, 15, '069', 'Papalotla', ''),
(726, 15, '070', 'La Paz', ''),
(727, 15, '071', 'Polotitlán', ''),
(728, 15, '072', 'Rayón', ''),
(729, 15, '073', 'San Antonio la Isla', ''),
(730, 15, '074', 'San Felipe del Progreso', ''),
(731, 15, '075', 'San Martín de las Pirámides', ''),
(732, 15, '076', 'San Mateo Atenco', ''),
(733, 15, '077', 'San Simón de Guerrero', ''),
(734, 15, '078', 'Santo Tomás', ''),
(735, 15, '079', 'Soyaniquilpan de Juárez', ''),
(736, 15, '080', 'Sultepec', ''),
(737, 15, '081', 'Tecámac', ''),
(738, 15, '082', 'Tejupilco', ''),
(739, 15, '083', 'Temamatla', ''),
(740, 15, '084', 'Temascalapa', ''),
(741, 15, '085', 'Temascalcingo', ''),
(742, 15, '086', 'Temascaltepec', ''),
(743, 15, '087', 'Temoaya', ''),
(744, 15, '088', 'Tenancingo', ''),
(745, 15, '089', 'Tenango del Aire', ''),
(746, 15, '090', 'Tenango del Valle', ''),
(747, 15, '091', 'Teoloyucan', ''),
(748, 15, '092', 'Teotihuacán', ''),
(749, 15, '093', 'Tepetlaoxtoc', ''),
(750, 15, '094', 'Tepetlixpa', ''),
(751, 15, '095', 'Tepotzotlán', ''),
(752, 15, '096', 'Tequixquiac', ''),
(753, 15, '097', 'Texcaltitlán', ''),
(754, 15, '098', 'Texcalyacac', ''),
(755, 15, '099', 'Texcoco', ''),
(756, 15, '100', 'Tezoyuca', ''),
(757, 15, '101', 'Tianguistenco', ''),
(758, 15, '102', 'Timilpan', ''),
(759, 15, '103', 'Tlalmanalco', ''),
(760, 15, '104', 'Tlalnepantla de Baz', ''),
(761, 15, '105', 'Tlatlaya', ''),
(762, 15, '106', 'Toluca', ''),
(763, 15, '107', 'Tonatico', ''),
(764, 15, '108', 'Tultepec', ''),
(765, 15, '109', 'Tultitlán', ''),
(766, 15, '110', 'Valle de Bravo', ''),
(767, 15, '111', 'Villa de Allende', ''),
(768, 15, '112', 'Villa del Carbón', ''),
(769, 15, '113', 'Villa Guerrero', ''),
(770, 15, '114', 'Villa Victoria', ''),
(771, 15, '115', 'Xonacatlán', ''),
(772, 15, '116', 'Zacazonapan', ''),
(773, 15, '117', 'Zacualpan', ''),
(774, 15, '118', 'Zinacantepec', ''),
(775, 15, '119', 'Zumpahuacán', ''),
(776, 15, '120', 'Zumpango', ''),
(777, 15, '121', 'Cuautitlán Izcalli', ''),
(778, 15, '122', 'Valle de Chalco Solidaridad', ''),
(779, 15, '123', 'Luvianos', ''),
(780, 15, '124', 'San José del Rincón', ''),
(781, 15, '125', 'Tonanitla', ''),
(782, 16, '001', 'Acuitzio', ''),
(783, 16, '002', 'Aguililla', ''),
(784, 16, '003', 'Álvaro Obregón', ''),
(785, 16, '004', 'Angamacutiro', ''),
(786, 16, '005', 'Angangueo', ''),
(787, 16, '006', 'Apatzingán', ''),
(788, 16, '007', 'Aporo', ''),
(789, 16, '008', 'Aquila', ''),
(790, 16, '009', 'Ario', ''),
(791, 16, '010', 'Arteaga', ''),
(792, 16, '011', 'Briseñas', ''),
(793, 16, '012', 'Buenavista', ''),
(794, 16, '013', 'Carácuaro', ''),
(795, 16, '014', 'Coahuayana', ''),
(796, 16, '015', 'Coalcomán de Vázquez Pallares', ''),
(797, 16, '016', 'Coeneo', ''),
(798, 16, '017', 'Contepec', ''),
(799, 16, '018', 'Copándaro', ''),
(800, 16, '019', 'Cotija', ''),
(801, 16, '020', 'Cuitzeo', ''),
(802, 16, '021', 'Charapan', ''),
(803, 16, '022', 'Charo', ''),
(804, 16, '023', 'Chavinda', ''),
(805, 16, '024', 'Cherán', ''),
(806, 16, '025', 'Chilchota', ''),
(807, 16, '026', 'Chinicuila', ''),
(808, 16, '027', 'Chucándiro', ''),
(809, 16, '028', 'Churintzio', ''),
(810, 16, '029', 'Churumuco', ''),
(811, 16, '030', 'Ecuandureo', ''),
(812, 16, '031', 'Epitacio Huerta', ''),
(813, 16, '032', 'Erongarícuaro', ''),
(814, 16, '033', 'Gabriel Zamora', ''),
(815, 16, '034', 'Hidalgo', ''),
(816, 16, '035', 'La Huacana', ''),
(817, 16, '036', 'Huandacareo', ''),
(818, 16, '037', 'Huaniqueo', ''),
(819, 16, '038', 'Huetamo', ''),
(820, 16, '039', 'Huiramba', ''),
(821, 16, '040', 'Indaparapeo', ''),
(822, 16, '041', 'Irimbo', ''),
(823, 16, '042', 'Ixtlán', ''),
(824, 16, '043', 'Jacona', ''),
(825, 16, '044', 'Jiménez', ''),
(826, 16, '045', 'Jiquilpan', ''),
(827, 16, '046', 'Juárez', ''),
(828, 16, '047', 'Jungapeo', ''),
(829, 16, '048', 'Lagunillas', ''),
(830, 16, '049', 'Madero', ''),
(831, 16, '050', 'Maravatío', ''),
(832, 16, '051', 'Marcos Castellanos', ''),
(833, 16, '052', 'Lázaro Cárdenas', ''),
(834, 16, '053', 'Morelia', ''),
(835, 16, '054', 'Morelos', ''),
(836, 16, '055', 'Múgica', ''),
(837, 16, '056', 'Nahuatzen', ''),
(838, 16, '057', 'Nocupétaro', ''),
(839, 16, '058', 'Nuevo Parangaricutiro', ''),
(840, 16, '059', 'Nuevo Urecho', ''),
(841, 16, '060', 'Numarán', ''),
(842, 16, '061', 'Ocampo', ''),
(843, 16, '062', 'Pajacuarán', ''),
(844, 16, '063', 'Panindícuaro', ''),
(845, 16, '064', 'Parácuaro', ''),
(846, 16, '065', 'Paracho', ''),
(847, 16, '066', 'Pátzcuaro', ''),
(848, 16, '067', 'Penjamillo', ''),
(849, 16, '068', 'Peribán', ''),
(850, 16, '069', 'La Piedad', ''),
(851, 16, '070', 'Purépero', ''),
(852, 16, '071', 'Puruándiro', ''),
(853, 16, '072', 'Queréndaro', ''),
(854, 16, '073', 'Quiroga', ''),
(855, 16, '074', 'Cojumatlán de Régules', ''),
(856, 16, '075', 'Los Reyes', ''),
(857, 16, '076', 'Sahuayo', ''),
(858, 16, '077', 'San Lucas', ''),
(859, 16, '078', 'Santa Ana Maya', ''),
(860, 16, '079', 'Salvador Escalante', ''),
(861, 16, '080', 'Senguio', ''),
(862, 16, '081', 'Susupuato', ''),
(863, 16, '082', 'Tacámbaro', ''),
(864, 16, '083', 'Tancítaro', ''),
(865, 16, '084', 'Tangamandapio', ''),
(866, 16, '085', 'Tangancícuaro', ''),
(867, 16, '086', 'Tanhuato', ''),
(868, 16, '087', 'Taretan', ''),
(869, 16, '088', 'Tarímbaro', ''),
(870, 16, '089', 'Tepalcatepec', ''),
(871, 16, '090', 'Tingambato', ''),
(872, 16, '091', 'Tingüindín', ''),
(873, 16, '092', 'Tiquicheo de Nicolás Romero', ''),
(874, 16, '093', 'Tlalpujahua', ''),
(875, 16, '094', 'Tlazazalca', ''),
(876, 16, '095', 'Tocumbo', ''),
(877, 16, '096', 'Tumbiscatío', ''),
(878, 16, '097', 'Turicato', ''),
(879, 16, '098', 'Tuxpan', ''),
(880, 16, '099', 'Tuzantla', ''),
(881, 16, '100', 'Tzintzuntzan', ''),
(882, 16, '101', 'Tzitzio', ''),
(883, 16, '102', 'Uruapan', ''),
(884, 16, '103', 'Venustiano Carranza', ''),
(885, 16, '104', 'Villamar', ''),
(886, 16, '105', 'Vista Hermosa', ''),
(887, 16, '106', 'Yurécuaro', ''),
(888, 16, '107', 'Zacapu', ''),
(889, 16, '108', 'Zamora', ''),
(890, 16, '109', 'Zináparo', ''),
(891, 16, '110', 'Zinapécuaro', ''),
(892, 16, '111', 'Ziracuaretiro', ''),
(893, 16, '112', 'Zitácuaro', ''),
(894, 16, '113', 'José Sixto Verduzco', ''),
(895, 17, '001', 'Amacuzac', ''),
(896, 17, '002', 'Atlatlahucan', ''),
(897, 17, '003', 'Axochiapan', ''),
(898, 17, '004', 'Ayala', ''),
(899, 17, '005', 'Coatlán del Río', ''),
(900, 17, '006', 'Cuautla', ''),
(901, 17, '007', 'Cuernavaca', ''),
(902, 17, '008', 'Emiliano Zapata', ''),
(903, 17, '009', 'Huitzilac', ''),
(904, 17, '010', 'Jantetelco', ''),
(905, 17, '011', 'Jiutepec', ''),
(906, 17, '012', 'Jojutla', ''),
(907, 17, '013', 'Jonacatepec', ''),
(908, 17, '014', 'Mazatepec', ''),
(909, 17, '015', 'Miacatlán', ''),
(910, 17, '016', 'Ocuituco', ''),
(911, 17, '017', 'Puente de Ixtla', ''),
(912, 17, '018', 'Temixco', ''),
(913, 17, '019', 'Tepalcingo', ''),
(914, 17, '020', 'Tepoztlán', ''),
(915, 17, '021', 'Tetecala', ''),
(916, 17, '022', 'Tetela del Volcán', ''),
(917, 17, '023', 'Tlalnepantla', ''),
(918, 17, '024', 'Tlaltizapán de Zapata', ''),
(919, 17, '025', 'Tlaquiltenango', ''),
(920, 17, '026', 'Tlayacapan', ''),
(921, 17, '027', 'Totolapan', ''),
(922, 17, '028', 'Xochitepec', ''),
(923, 17, '029', 'Yautepec', ''),
(924, 17, '030', 'Yecapixtla', ''),
(925, 17, '031', 'Zacatepec', ''),
(926, 17, '032', 'Zacualpan', ''),
(927, 17, '033', 'Temoac', ''),
(928, 18, '001', 'Acaponeta', ''),
(929, 18, '002', 'Ahuacatlán', ''),
(930, 18, '003', 'Amatlán de Cañas', ''),
(931, 18, '004', 'Compostela', ''),
(932, 18, '005', 'Huajicori', ''),
(933, 18, '006', 'Ixtlán del Río', ''),
(934, 18, '007', 'Jala', ''),
(935, 18, '008', 'Xalisco', ''),
(936, 18, '009', 'Del Nayar', ''),
(937, 18, '010', 'Rosamorada', ''),
(938, 18, '011', 'Ruíz', ''),
(939, 18, '012', 'San Blas', ''),
(940, 18, '013', 'San Pedro Lagunillas', ''),
(941, 18, '014', 'Santa María del Oro', ''),
(942, 18, '015', 'Santiago Ixcuintla', ''),
(943, 18, '016', 'Tecuala', ''),
(944, 18, '017', 'Tepic', ''),
(945, 18, '018', 'Tuxpan', ''),
(946, 18, '019', 'La Yesca', ''),
(947, 18, '020', 'Bahía de Banderas', ''),
(948, 19, '001', 'Abasolo', ''),
(949, 19, '002', 'Agualeguas', ''),
(950, 19, '003', 'Los Aldamas', ''),
(951, 19, '004', 'Allende', ''),
(952, 19, '005', 'Anáhuac', ''),
(953, 19, '006', 'Apodaca', ''),
(954, 19, '007', 'Aramberri', ''),
(955, 19, '008', 'Bustamante', ''),
(956, 19, '009', 'Cadereyta Jiménez', ''),
(957, 19, '010', 'El Carmen', ''),
(958, 19, '011', 'Cerralvo', ''),
(959, 19, '012', 'Ciénega de Flores', ''),
(960, 19, '013', 'China', ''),
(961, 19, '014', 'Doctor Arroyo', ''),
(962, 19, '015', 'Doctor Coss', ''),
(963, 19, '016', 'Doctor González', ''),
(964, 19, '017', 'Galeana', ''),
(965, 19, '018', 'García', ''),
(966, 19, '019', 'San Pedro Garza García', ''),
(967, 19, '020', 'General Bravo', ''),
(968, 19, '021', 'General Escobedo', ''),
(969, 19, '022', 'General Terán', ''),
(970, 19, '023', 'General Treviño', ''),
(971, 19, '024', 'General Zaragoza', ''),
(972, 19, '025', 'General Zuazua', ''),
(973, 19, '026', 'Guadalupe', ''),
(974, 19, '027', 'Los Herreras', ''),
(975, 19, '028', 'Higueras', ''),
(976, 19, '029', 'Hualahuises', ''),
(977, 19, '030', 'Iturbide', ''),
(978, 19, '031', 'Juárez', ''),
(979, 19, '032', 'Lampazos de Naranjo', ''),
(980, 19, '033', 'Linares', ''),
(981, 19, '034', 'Marín', ''),
(982, 19, '035', 'Melchor Ocampo', ''),
(983, 19, '036', 'Mier y Noriega', ''),
(984, 19, '037', 'Mina', ''),
(985, 19, '038', 'Montemorelos', ''),
(986, 19, '039', 'Monterrey', ''),
(987, 19, '040', 'Parás', ''),
(988, 19, '041', 'Pesquería', ''),
(989, 19, '042', 'Los Ramones', ''),
(990, 19, '043', 'Rayones', ''),
(991, 19, '044', 'Sabinas Hidalgo', ''),
(992, 19, '045', 'Salinas Victoria', ''),
(993, 19, '046', 'San Nicolás de los Garza', ''),
(994, 19, '047', 'Hidalgo', ''),
(995, 19, '048', 'Santa Catarina', ''),
(996, 19, '049', 'Santiago', ''),
(997, 19, '050', 'Vallecillo', ''),
(998, 19, '051', 'Villaldama', ''),
(999, 20, '001', 'Abejones', ''),
(1000, 20, '002', 'Acatlán de Pérez Figueroa', ''),
(1001, 20, '003', 'Asunción Cacalotepec', ''),
(1002, 20, '004', 'Asunción Cuyotepeji', ''),
(1003, 20, '005', 'Asunción Ixtaltepec', ''),
(1004, 20, '006', 'Asunción Nochixtlán', ''),
(1005, 20, '007', 'Asunción Ocotlán', ''),
(1006, 20, '008', 'Asunción Tlacolulita', ''),
(1007, 20, '009', 'Ayotzintepec', ''),
(1008, 20, '010', 'El Barrio de la Soledad', ''),
(1009, 20, '011', 'Calihualá', ''),
(1010, 20, '012', 'Candelaria Loxicha', ''),
(1011, 20, '013', 'Ciénega de Zimatlán', ''),
(1012, 20, '014', 'Ciudad Ixtepec', ''),
(1013, 20, '015', 'Coatecas Altas', ''),
(1014, 20, '016', 'Coicoyán de las Flores', ''),
(1015, 20, '017', 'La Compañía', ''),
(1016, 20, '018', 'Concepción Buenavista', ''),
(1017, 20, '019', 'Concepción Pápalo', ''),
(1018, 20, '020', 'Constancia del Rosario', ''),
(1019, 20, '021', 'Cosolapa', ''),
(1020, 20, '022', 'Cosoltepec', ''),
(1021, 20, '023', 'Cuilápam de Guerrero', ''),
(1022, 20, '024', 'Cuyamecalco Villa de Zaragoza', ''),
(1023, 20, '025', 'Chahuites', ''),
(1024, 20, '026', 'Chalcatongo de Hidalgo', ''),
(1025, 20, '027', 'Chiquihuitlán de Benito Juárez', ''),
(1026, 20, '028', 'Heroica Ciudad de Ejutla de Crespo', ''),
(1027, 20, '029', 'Eloxochitlán de Flores Magón', ''),
(1028, 20, '030', 'El Espinal', ''),
(1029, 20, '031', 'Tamazulápam del Espíritu Santo', ''),
(1030, 20, '032', 'Fresnillo de Trujano', ''),
(1031, 20, '033', 'Guadalupe Etla', ''),
(1032, 20, '034', 'Guadalupe de Ramírez', ''),
(1033, 20, '035', 'Guelatao de Juárez', ''),
(1034, 20, '036', 'Guevea de Humboldt', ''),
(1035, 20, '037', 'Mesones Hidalgo', ''),
(1036, 20, '038', 'Villa Hidalgo', ''),
(1037, 20, '039', 'Heroica Ciudad de Huajuapan de León', ''),
(1038, 20, '040', 'Huautepec', ''),
(1039, 20, '041', 'Huautla de Jiménez', ''),
(1040, 20, '042', 'Ixtlán de Juárez', ''),
(1041, 20, '043', 'Heroica Ciudad de Juchitán de Zaragoza', ''),
(1042, 20, '044', 'Loma Bonita', ''),
(1043, 20, '045', 'Magdalena Apasco', ''),
(1044, 20, '046', 'Magdalena Jaltepec', ''),
(1045, 20, '047', 'Santa Magdalena Jicotlán', ''),
(1046, 20, '048', 'Magdalena Mixtepec', ''),
(1047, 20, '049', 'Magdalena Ocotlán', ''),
(1048, 20, '050', 'Magdalena Peñasco', ''),
(1049, 20, '051', 'Magdalena Teitipac', ''),
(1050, 20, '052', 'Magdalena Tequisistlán', ''),
(1051, 20, '053', 'Magdalena Tlacotepec', ''),
(1052, 20, '054', 'Magdalena Zahuatlán', ''),
(1053, 20, '055', 'Mariscala de Juárez', ''),
(1054, 20, '056', 'Mártires de Tacubaya', ''),
(1055, 20, '057', 'Matías Romero Avendaño', ''),
(1056, 20, '058', 'Mazatlán Villa de Flores', ''),
(1057, 20, '059', 'Miahuatlán de Porfirio Díaz', ''),
(1058, 20, '060', 'Mixistlán de la Reforma', ''),
(1059, 20, '061', 'Monjas', ''),
(1060, 20, '062', 'Natividad', ''),
(1061, 20, '063', 'Nazareno Etla', ''),
(1062, 20, '064', 'Nejapa de Madero', ''),
(1063, 20, '065', 'Ixpantepec Nieves', ''),
(1064, 20, '066', 'Santiago Niltepec', ''),
(1065, 20, '067', 'Oaxaca de Juárez', ''),
(1066, 20, '068', 'Ocotlán de Morelos', ''),
(1067, 20, '069', 'La Pe', ''),
(1068, 20, '070', 'Pinotepa de Don Luis', ''),
(1069, 20, '071', 'Pluma Hidalgo', ''),
(1070, 20, '072', 'San José del Progreso', ''),
(1071, 20, '073', 'Putla Villa de Guerrero', ''),
(1072, 20, '074', 'Santa Catarina Quioquitani', ''),
(1073, 20, '075', 'Reforma de Pineda', ''),
(1074, 20, '076', 'La Reforma', ''),
(1075, 20, '077', 'Reyes Etla', ''),
(1076, 20, '078', 'Rojas de Cuauhtémoc', ''),
(1077, 20, '079', 'Salina Cruz', ''),
(1078, 20, '080', 'San Agustín Amatengo', ''),
(1079, 20, '081', 'San Agustín Atenango', ''),
(1080, 20, '082', 'San Agustín Chayuco', ''),
(1081, 20, '083', 'San Agustín de las Juntas', ''),
(1082, 20, '084', 'San Agustín Etla', ''),
(1083, 20, '085', 'San Agustín Loxicha', ''),
(1084, 20, '086', 'San Agustín Tlacotepec', ''),
(1085, 20, '087', 'San Agustín Yatareni', ''),
(1086, 20, '088', 'San Andrés Cabecera Nueva', ''),
(1087, 20, '089', 'San Andrés Dinicuiti', ''),
(1088, 20, '090', 'San Andrés Huaxpaltepec', ''),
(1089, 20, '091', 'San Andrés Huayápam', ''),
(1090, 20, '092', 'San Andrés Ixtlahuaca', ''),
(1091, 20, '093', 'San Andrés Lagunas', ''),
(1092, 20, '094', 'San Andrés Nuxiño', ''),
(1093, 20, '095', 'San Andrés Paxtlán', ''),
(1094, 20, '096', 'San Andrés Sinaxtla', ''),
(1095, 20, '097', 'San Andrés Solaga', ''),
(1096, 20, '098', 'San Andrés Teotilálpam', ''),
(1097, 20, '099', 'San Andrés Tepetlapa', ''),
(1098, 20, '100', 'San Andrés Yaá', ''),
(1099, 20, '101', 'San Andrés Zabache', ''),
(1100, 20, '102', 'San Andrés Zautla', ''),
(1101, 20, '103', 'San Antonino Castillo Velasco', ''),
(1102, 20, '104', 'San Antonino el Alto', ''),
(1103, 20, '105', 'San Antonino Monte Verde', ''),
(1104, 20, '106', 'San Antonio Acutla', ''),
(1105, 20, '107', 'San Antonio de la Cal', ''),
(1106, 20, '108', 'San Antonio Huitepec', ''),
(1107, 20, '109', 'San Antonio Nanahuatípam', ''),
(1108, 20, '110', 'San Antonio Sinicahua', ''),
(1109, 20, '111', 'San Antonio Tepetlapa', ''),
(1110, 20, '112', 'San Baltazar Chichicápam', ''),
(1111, 20, '113', 'San Baltazar Loxicha', ''),
(1112, 20, '114', 'San Baltazar Yatzachi el Bajo', ''),
(1113, 20, '115', 'San Bartolo Coyotepec', ''),
(1114, 20, '116', 'San Bartolomé Ayautla', ''),
(1115, 20, '117', 'San Bartolomé Loxicha', ''),
(1116, 20, '118', 'San Bartolomé Quialana', ''),
(1117, 20, '119', 'San Bartolomé Yucuañe', ''),
(1118, 20, '120', 'San Bartolomé Zoogocho', ''),
(1119, 20, '121', 'San Bartolo Soyaltepec', ''),
(1120, 20, '122', 'San Bartolo Yautepec', ''),
(1121, 20, '123', 'San Bernardo Mixtepec', ''),
(1122, 20, '124', 'San Blas Atempa', ''),
(1123, 20, '125', 'San Carlos Yautepec', ''),
(1124, 20, '126', 'San Cristóbal Amatlán', ''),
(1125, 20, '127', 'San Cristóbal Amoltepec', ''),
(1126, 20, '128', 'San Cristóbal Lachirioag', ''),
(1127, 20, '129', 'San Cristóbal Suchixtlahuaca', ''),
(1128, 20, '130', 'San Dionisio del Mar', ''),
(1129, 20, '131', 'San Dionisio Ocotepec', ''),
(1130, 20, '132', 'San Dionisio Ocotlán', ''),
(1131, 20, '133', 'San Esteban Atatlahuca', ''),
(1132, 20, '134', 'San Felipe Jalapa de Díaz', ''),
(1133, 20, '135', 'San Felipe Tejalápam', ''),
(1134, 20, '136', 'San Felipe Usila', ''),
(1135, 20, '137', 'San Francisco Cahuacuá', ''),
(1136, 20, '138', 'San Francisco Cajonos', ''),
(1137, 20, '139', 'San Francisco Chapulapa', ''),
(1138, 20, '140', 'San Francisco Chindúa', ''),
(1139, 20, '141', 'San Francisco del Mar', ''),
(1140, 20, '142', 'San Francisco Huehuetlán', ''),
(1141, 20, '143', 'San Francisco Ixhuatán', ''),
(1142, 20, '144', 'San Francisco Jaltepetongo', ''),
(1143, 20, '145', 'San Francisco Lachigoló', ''),
(1144, 20, '146', 'San Francisco Logueche', ''),
(1145, 20, '147', 'San Francisco Nuxaño', ''),
(1146, 20, '148', 'San Francisco Ozolotepec', ''),
(1147, 20, '149', 'San Francisco Sola', ''),
(1148, 20, '150', 'San Francisco Telixtlahuaca', ''),
(1149, 20, '151', 'San Francisco Teopan', ''),
(1150, 20, '152', 'San Francisco Tlapancingo', ''),
(1151, 20, '153', 'San Gabriel Mixtepec', ''),
(1152, 20, '154', 'San Ildefonso Amatlán', ''),
(1153, 20, '155', 'San Ildefonso Sola', ''),
(1154, 20, '156', 'San Ildefonso Villa Alta', ''),
(1155, 20, '157', 'San Jacinto Amilpas', ''),
(1156, 20, '158', 'San Jacinto Tlacotepec', ''),
(1157, 20, '159', 'San Jerónimo Coatlán', ''),
(1158, 20, '160', 'San Jerónimo Silacayoapilla', ''),
(1159, 20, '161', 'San Jerónimo Sosola', ''),
(1160, 20, '162', 'San Jerónimo Taviche', ''),
(1161, 20, '163', 'San Jerónimo Tecóatl', ''),
(1162, 20, '164', 'San Jorge Nuchita', ''),
(1163, 20, '165', 'San José Ayuquila', ''),
(1164, 20, '166', 'San José Chiltepec', ''),
(1165, 20, '167', 'San José del Peñasco', ''),
(1166, 20, '168', 'San José Estancia Grande', ''),
(1167, 20, '169', 'San José Independencia', ''),
(1168, 20, '170', 'San José Lachiguiri', ''),
(1169, 20, '171', 'San José Tenango', ''),
(1170, 20, '172', 'San Juan Achiutla', ''),
(1171, 20, '173', 'San Juan Atepec', ''),
(1172, 20, '174', 'Ánimas Trujano', ''),
(1173, 20, '175', 'San Juan Bautista Atatlahuca', ''),
(1174, 20, '176', 'San Juan Bautista Coixtlahuaca', ''),
(1175, 20, '177', 'San Juan Bautista Cuicatlán', ''),
(1176, 20, '178', 'San Juan Bautista Guelache', ''),
(1177, 20, '179', 'San Juan Bautista Jayacatlán', ''),
(1178, 20, '180', 'San Juan Bautista Lo de Soto', ''),
(1179, 20, '181', 'San Juan Bautista Suchitepec', ''),
(1180, 20, '182', 'San Juan Bautista Tlacoatzintepec', ''),
(1181, 20, '183', 'San Juan Bautista Tlachichilco', ''),
(1182, 20, '184', 'San Juan Bautista Tuxtepec', ''),
(1183, 20, '185', 'San Juan Cacahuatepec', ''),
(1184, 20, '186', 'San Juan Cieneguilla', ''),
(1185, 20, '187', 'San Juan Coatzóspam', ''),
(1186, 20, '188', 'San Juan Colorado', ''),
(1187, 20, '189', 'San Juan Comaltepec', ''),
(1188, 20, '190', 'San Juan Cotzocón', ''),
(1189, 20, '191', 'San Juan Chicomezúchil', ''),
(1190, 20, '192', 'San Juan Chilateca', ''),
(1191, 20, '193', 'San Juan del Estado', ''),
(1192, 20, '194', 'San Juan del Río', ''),
(1193, 20, '195', 'San Juan Diuxi', ''),
(1194, 20, '196', 'San Juan Evangelista Analco', ''),
(1195, 20, '197', 'San Juan Guelavía', ''),
(1196, 20, '198', 'San Juan Guichicovi', ''),
(1197, 20, '199', 'San Juan Ihualtepec', ''),
(1198, 20, '200', 'San Juan Juquila Mixes', ''),
(1199, 20, '201', 'San Juan Juquila Vijanos', ''),
(1200, 20, '202', 'San Juan Lachao', ''),
(1201, 20, '203', 'San Juan Lachigalla', ''),
(1202, 20, '204', 'San Juan Lajarcia', ''),
(1203, 20, '205', 'San Juan Lalana', ''),
(1204, 20, '206', 'San Juan de los Cués', ''),
(1205, 20, '207', 'San Juan Mazatlán', ''),
(1206, 20, '208', 'San Juan Mixtepec -Dto. 08 -', ''),
(1207, 20, '209', 'San Juan Mixtepec -Dto. 26 -', ''),
(1208, 20, '210', 'San Juan Ñumí', ''),
(1209, 20, '211', 'San Juan Ozolotepec', ''),
(1210, 20, '212', 'San Juan Petlapa', ''),
(1211, 20, '213', 'San Juan Quiahije', ''),
(1212, 20, '214', 'San Juan Quiotepec', ''),
(1213, 20, '215', 'San Juan Sayultepec', ''),
(1214, 20, '216', 'San Juan Tabaá', ''),
(1215, 20, '217', 'San Juan Tamazola', ''),
(1216, 20, '218', 'San Juan Teita', ''),
(1217, 20, '219', 'San Juan Teitipac', ''),
(1218, 20, '220', 'San Juan Tepeuxila', ''),
(1219, 20, '221', 'San Juan Teposcolula', ''),
(1220, 20, '222', 'San Juan Yaeé', ''),
(1221, 20, '223', 'San Juan Yatzona', ''),
(1222, 20, '224', 'San Juan Yucuita', ''),
(1223, 20, '225', 'San Lorenzo', ''),
(1224, 20, '226', 'San Lorenzo Albarradas', ''),
(1225, 20, '227', 'San Lorenzo Cacaotepec', ''),
(1226, 20, '228', 'San Lorenzo Cuaunecuiltitla', ''),
(1227, 20, '229', 'San Lorenzo Texmelúcan', ''),
(1228, 20, '230', 'San Lorenzo Victoria', ''),
(1229, 20, '231', 'San Lucas Camotlán', ''),
(1230, 20, '232', 'San Lucas Ojitlán', ''),
(1231, 20, '233', 'San Lucas Quiaviní', ''),
(1232, 20, '234', 'San Lucas Zoquiápam', ''),
(1233, 20, '235', 'San Luis Amatlán', ''),
(1234, 20, '236', 'San Marcial Ozolotepec', ''),
(1235, 20, '237', 'San Marcos Arteaga', ''),
(1236, 20, '238', 'San Martín de los Cansecos', ''),
(1237, 20, '239', 'San Martín Huamelúlpam', ''),
(1238, 20, '240', 'San Martín Itunyoso', ''),
(1239, 20, '241', 'San Martín Lachilá', ''),
(1240, 20, '242', 'San Martín Peras', ''),
(1241, 20, '243', 'San Martín Tilcajete', ''),
(1242, 20, '244', 'San Martín Toxpalan', ''),
(1243, 20, '245', 'San Martín Zacatepec', ''),
(1244, 20, '246', 'San Mateo Cajonos', ''),
(1245, 20, '247', 'Capulálpam de Méndez', ''),
(1246, 20, '248', 'San Mateo del Mar', ''),
(1247, 20, '249', 'San Mateo Yoloxochitlán', ''),
(1248, 20, '250', 'San Mateo Etlatongo', ''),
(1249, 20, '251', 'San Mateo Nejápam', ''),
(1250, 20, '252', 'San Mateo Peñasco', ''),
(1251, 20, '253', 'San Mateo Piñas', ''),
(1252, 20, '254', 'San Mateo Río Hondo', ''),
(1253, 20, '255', 'San Mateo Sindihui', ''),
(1254, 20, '256', 'San Mateo Tlapiltepec', ''),
(1255, 20, '257', 'San Melchor Betaza', ''),
(1256, 20, '258', 'San Miguel Achiutla', ''),
(1257, 20, '259', 'San Miguel Ahuehuetitlán', ''),
(1258, 20, '260', 'San Miguel Aloápam', ''),
(1259, 20, '261', 'San Miguel Amatitlán', ''),
(1260, 20, '262', 'San Miguel Amatlán', ''),
(1261, 20, '263', 'San Miguel Coatlán', ''),
(1262, 20, '264', 'San Miguel Chicahua', ''),
(1263, 20, '265', 'San Miguel Chimalapa', ''),
(1264, 20, '266', 'San Miguel del Puerto', ''),
(1265, 20, '267', 'San Miguel del Río', ''),
(1266, 20, '268', 'San Miguel Ejutla', ''),
(1267, 20, '269', 'San Miguel el Grande', ''),
(1268, 20, '270', 'San Miguel Huautla', ''),
(1269, 20, '271', 'San Miguel Mixtepec', ''),
(1270, 20, '272', 'San Miguel Panixtlahuaca', ''),
(1271, 20, '273', 'San Miguel Peras', ''),
(1272, 20, '274', 'San Miguel Piedras', ''),
(1273, 20, '275', 'San Miguel Quetzaltepec', ''),
(1274, 20, '276', 'San Miguel Santa Flor', ''),
(1275, 20, '277', 'Villa Sola de Vega', ''),
(1276, 20, '278', 'San Miguel Soyaltepec', ''),
(1277, 20, '279', 'San Miguel Suchixtepec', ''),
(1278, 20, '280', 'Villa Talea de Castro', ''),
(1279, 20, '281', 'San Miguel Tecomatlán', ''),
(1280, 20, '282', 'San Miguel Tenango', ''),
(1281, 20, '283', 'San Miguel Tequixtepec', ''),
(1282, 20, '284', 'San Miguel Tilquiápam', ''),
(1283, 20, '285', 'San Miguel Tlacamama', ''),
(1284, 20, '286', 'San Miguel Tlacotepec', ''),
(1285, 20, '287', 'San Miguel Tulancingo', ''),
(1286, 20, '288', 'San Miguel Yotao', ''),
(1287, 20, '289', 'San Nicolás', ''),
(1288, 20, '290', 'San Nicolás Hidalgo', ''),
(1289, 20, '291', 'San Pablo Coatlán', ''),
(1290, 20, '292', 'San Pablo Cuatro Venados', ''),
(1291, 20, '293', 'San Pablo Etla', ''),
(1292, 20, '294', 'San Pablo Huitzo', ''),
(1293, 20, '295', 'San Pablo Huixtepec', ''),
(1294, 20, '296', 'San Pablo Macuiltianguis', ''),
(1295, 20, '297', 'San Pablo Tijaltepec', ''),
(1296, 20, '298', 'San Pablo Villa de Mitla', ''),
(1297, 20, '299', 'San Pablo Yaganiza', ''),
(1298, 20, '300', 'San Pedro Amuzgos', ''),
(1299, 20, '301', 'San Pedro Apóstol', ''),
(1300, 20, '302', 'San Pedro Atoyac', ''),
(1301, 20, '303', 'San Pedro Cajonos', ''),
(1302, 20, '304', 'San Pedro Coxcaltepec Cántaros', ''),
(1303, 20, '305', 'San Pedro Comitancillo', ''),
(1304, 20, '306', 'San Pedro el Alto', ''),
(1305, 20, '307', 'San Pedro Huamelula', ''),
(1306, 20, '308', 'San Pedro Huilotepec', ''),
(1307, 20, '309', 'San Pedro Ixcatlán', ''),
(1308, 20, '310', 'San Pedro Ixtlahuaca', ''),
(1309, 20, '311', 'San Pedro Jaltepetongo', ''),
(1310, 20, '312', 'San Pedro Jicayán', ''),
(1311, 20, '313', 'San Pedro Jocotipac', ''),
(1312, 20, '314', 'San Pedro Juchatengo', ''),
(1313, 20, '315', 'San Pedro Mártir', ''),
(1314, 20, '316', 'San Pedro Mártir Quiechapa', ''),
(1315, 20, '317', 'San Pedro Mártir Yucuxaco', ''),
(1316, 20, '318', 'San Pedro Mixtepec -Dto. 22 -', ''),
(1317, 20, '319', 'San Pedro Mixtepec -Dto. 26 -', ''),
(1318, 20, '320', 'San Pedro Molinos', ''),
(1319, 20, '321', 'San Pedro Nopala', ''),
(1320, 20, '322', 'San Pedro Ocopetatillo', ''),
(1321, 20, '323', 'San Pedro Ocotepec', ''),
(1322, 20, '324', 'San Pedro Pochutla', ''),
(1323, 20, '325', 'San Pedro Quiatoni', ''),
(1324, 20, '326', 'San Pedro Sochiápam', ''),
(1325, 20, '327', 'San Pedro Tapanatepec', ''),
(1326, 20, '328', 'San Pedro Taviche', ''),
(1327, 20, '329', 'San Pedro Teozacoalco', ''),
(1328, 20, '330', 'San Pedro Teutila', ''),
(1329, 20, '331', 'San Pedro Tidaá', ''),
(1330, 20, '332', 'San Pedro Topiltepec', '');
INSERT INTO `municipios` (`id`, `estado_id`, `clave`, `nombre`, `sigla`) VALUES
(1331, 20, '333', 'San Pedro Totolápam', ''),
(1332, 20, '334', 'Villa de Tututepec de Melchor Ocampo', ''),
(1333, 20, '335', 'San Pedro Yaneri', ''),
(1334, 20, '336', 'San Pedro Yólox', ''),
(1335, 20, '337', 'San Pedro y San Pablo Ayutla', ''),
(1336, 20, '338', 'Villa de Etla', ''),
(1337, 20, '339', 'San Pedro y San Pablo Teposcolula', ''),
(1338, 20, '340', 'San Pedro y San Pablo Tequixtepec', ''),
(1339, 20, '341', 'San Pedro Yucunama', ''),
(1340, 20, '342', 'San Raymundo Jalpan', ''),
(1341, 20, '343', 'San Sebastián Abasolo', ''),
(1342, 20, '344', 'San Sebastián Coatlán', ''),
(1343, 20, '345', 'San Sebastián Ixcapa', ''),
(1344, 20, '346', 'San Sebastián Nicananduta', ''),
(1345, 20, '347', 'San Sebastián Río Hondo', ''),
(1346, 20, '348', 'San Sebastián Tecomaxtlahuaca', ''),
(1347, 20, '349', 'San Sebastián Teitipac', ''),
(1348, 20, '350', 'San Sebastián Tutla', ''),
(1349, 20, '351', 'San Simón Almolongas', ''),
(1350, 20, '352', 'San Simón Zahuatlán', ''),
(1351, 20, '353', 'Santa Ana', ''),
(1352, 20, '354', 'Santa Ana Ateixtlahuaca', ''),
(1353, 20, '355', 'Santa Ana Cuauhtémoc', ''),
(1354, 20, '356', 'Santa Ana del Valle', ''),
(1355, 20, '357', 'Santa Ana Tavela', ''),
(1356, 20, '358', 'Santa Ana Tlapacoyan', ''),
(1357, 20, '359', 'Santa Ana Yareni', ''),
(1358, 20, '360', 'Santa Ana Zegache', ''),
(1359, 20, '361', 'Santa Catalina Quierí', ''),
(1360, 20, '362', 'Santa Catarina Cuixtla', ''),
(1361, 20, '363', 'Santa Catarina Ixtepeji', ''),
(1362, 20, '364', 'Santa Catarina Juquila', ''),
(1363, 20, '365', 'Santa Catarina Lachatao', ''),
(1364, 20, '366', 'Santa Catarina Loxicha', ''),
(1365, 20, '367', 'Santa Catarina Mechoacán', ''),
(1366, 20, '368', 'Santa Catarina Minas', ''),
(1367, 20, '369', 'Santa Catarina Quiané', ''),
(1368, 20, '370', 'Santa Catarina Tayata', ''),
(1369, 20, '371', 'Santa Catarina Ticuá', ''),
(1370, 20, '372', 'Santa Catarina Yosonotú', ''),
(1371, 20, '373', 'Santa Catarina Zapoquila', ''),
(1372, 20, '374', 'Santa Cruz Acatepec', ''),
(1373, 20, '375', 'Santa Cruz Amilpas', ''),
(1374, 20, '376', 'Santa Cruz de Bravo', ''),
(1375, 20, '377', 'Santa Cruz Itundujia', ''),
(1376, 20, '378', 'Santa Cruz Mixtepec', ''),
(1377, 20, '379', 'Santa Cruz Nundaco', ''),
(1378, 20, '380', 'Santa Cruz Papalutla', ''),
(1379, 20, '381', 'Santa Cruz Tacache de Mina', ''),
(1380, 20, '382', 'Santa Cruz Tacahua', ''),
(1381, 20, '383', 'Santa Cruz Tayata', ''),
(1382, 20, '384', 'Santa Cruz Xitla', ''),
(1383, 20, '385', 'Santa Cruz Xoxocotlán', ''),
(1384, 20, '386', 'Santa Cruz Zenzontepec', ''),
(1385, 20, '387', 'Santa Gertrudis', ''),
(1386, 20, '388', 'Santa Inés del Monte', ''),
(1387, 20, '389', 'Santa Inés Yatzeche', ''),
(1388, 20, '390', 'Santa Lucía del Camino', ''),
(1389, 20, '391', 'Santa Lucía Miahuatlán', ''),
(1390, 20, '392', 'Santa Lucía Monteverde', ''),
(1391, 20, '393', 'Santa Lucía Ocotlán', ''),
(1392, 20, '394', 'Santa María Alotepec', ''),
(1393, 20, '395', 'Santa María Apazco', ''),
(1394, 20, '396', 'Santa María la Asunción', ''),
(1395, 20, '397', 'Heroica Ciudad de Tlaxiaco', ''),
(1396, 20, '398', 'Ayoquezco de Aldama', ''),
(1397, 20, '399', 'Santa María Atzompa', ''),
(1398, 20, '400', 'Santa María Camotlán', ''),
(1399, 20, '401', 'Santa María Colotepec', ''),
(1400, 20, '402', 'Santa María Cortijo', ''),
(1401, 20, '403', 'Santa María Coyotepec', ''),
(1402, 20, '404', 'Santa María Chachoápam', ''),
(1403, 20, '405', 'Villa de Chilapa de Díaz', ''),
(1404, 20, '406', 'Santa María Chilchotla', ''),
(1405, 20, '407', 'Santa María Chimalapa', ''),
(1406, 20, '408', 'Santa María del Rosario', ''),
(1407, 20, '409', 'Santa María del Tule', ''),
(1408, 20, '410', 'Santa María Ecatepec', ''),
(1409, 20, '411', 'Santa María Guelacé', ''),
(1410, 20, '412', 'Santa María Guienagati', ''),
(1411, 20, '413', 'Santa María Huatulco', ''),
(1412, 20, '414', 'Santa María Huazolotitlán', ''),
(1413, 20, '415', 'Santa María Ipalapa', ''),
(1414, 20, '416', 'Santa María Ixcatlán', ''),
(1415, 20, '417', 'Santa María Jacatepec', ''),
(1416, 20, '418', 'Santa María Jalapa del Marqués', ''),
(1417, 20, '419', 'Santa María Jaltianguis', ''),
(1418, 20, '420', 'Santa María Lachixío', ''),
(1419, 20, '421', 'Santa María Mixtequilla', ''),
(1420, 20, '422', 'Santa María Nativitas', ''),
(1421, 20, '423', 'Santa María Nduayaco', ''),
(1422, 20, '424', 'Santa María Ozolotepec', ''),
(1423, 20, '425', 'Santa María Pápalo', ''),
(1424, 20, '426', 'Santa María Peñoles', ''),
(1425, 20, '427', 'Santa María Petapa', ''),
(1426, 20, '428', 'Santa María Quiegolani', ''),
(1427, 20, '429', 'Santa María Sola', ''),
(1428, 20, '430', 'Santa María Tataltepec', ''),
(1429, 20, '431', 'Santa María Tecomavaca', ''),
(1430, 20, '432', 'Santa María Temaxcalapa', ''),
(1431, 20, '433', 'Santa María Temaxcaltepec', ''),
(1432, 20, '434', 'Santa María Teopoxco', ''),
(1433, 20, '435', 'Santa María Tepantlali', ''),
(1434, 20, '436', 'Santa María Texcatitlán', ''),
(1435, 20, '437', 'Santa María Tlahuitoltepec', ''),
(1436, 20, '438', 'Santa María Tlalixtac', ''),
(1437, 20, '439', 'Santa María Tonameca', ''),
(1438, 20, '440', 'Santa María Totolapilla', ''),
(1439, 20, '441', 'Santa María Xadani', ''),
(1440, 20, '442', 'Santa María Yalina', ''),
(1441, 20, '443', 'Santa María Yavesía', ''),
(1442, 20, '444', 'Santa María Yolotepec', ''),
(1443, 20, '445', 'Santa María Yosoyúa', ''),
(1444, 20, '446', 'Santa María Yucuhiti', ''),
(1445, 20, '447', 'Santa María Zacatepec', ''),
(1446, 20, '448', 'Santa María Zaniza', ''),
(1447, 20, '449', 'Santa María Zoquitlán', ''),
(1448, 20, '450', 'Santiago Amoltepec', ''),
(1449, 20, '451', 'Santiago Apoala', ''),
(1450, 20, '452', 'Santiago Apóstol', ''),
(1451, 20, '453', 'Santiago Astata', ''),
(1452, 20, '454', 'Santiago Atitlán', ''),
(1453, 20, '455', 'Santiago Ayuquililla', ''),
(1454, 20, '456', 'Santiago Cacaloxtepec', ''),
(1455, 20, '457', 'Santiago Camotlán', ''),
(1456, 20, '458', 'Santiago Comaltepec', ''),
(1457, 20, '459', 'Santiago Chazumba', ''),
(1458, 20, '460', 'Santiago Choápam', ''),
(1459, 20, '461', 'Santiago del Río', ''),
(1460, 20, '462', 'Santiago Huajolotitlán', ''),
(1461, 20, '463', 'Santiago Huauclilla', ''),
(1462, 20, '464', 'Santiago Ihuitlán Plumas', ''),
(1463, 20, '465', 'Santiago Ixcuintepec', ''),
(1464, 20, '466', 'Santiago Ixtayutla', ''),
(1465, 20, '467', 'Santiago Jamiltepec', ''),
(1466, 20, '468', 'Santiago Jocotepec', ''),
(1467, 20, '469', 'Santiago Juxtlahuaca', ''),
(1468, 20, '470', 'Santiago Lachiguiri', ''),
(1469, 20, '471', 'Santiago Lalopa', ''),
(1470, 20, '472', 'Santiago Laollaga', ''),
(1471, 20, '473', 'Santiago Laxopa', ''),
(1472, 20, '474', 'Santiago Llano Grande', ''),
(1473, 20, '475', 'Santiago Matatlán', ''),
(1474, 20, '476', 'Santiago Miltepec', ''),
(1475, 20, '477', 'Santiago Minas', ''),
(1476, 20, '478', 'Santiago Nacaltepec', ''),
(1477, 20, '479', 'Santiago Nejapilla', ''),
(1478, 20, '480', 'Santiago Nundiche', ''),
(1479, 20, '481', 'Santiago Nuyoó', ''),
(1480, 20, '482', 'Santiago Pinotepa Nacional', ''),
(1481, 20, '483', 'Santiago Suchilquitongo', ''),
(1482, 20, '484', 'Santiago Tamazola', ''),
(1483, 20, '485', 'Santiago Tapextla', ''),
(1484, 20, '486', 'Villa Tejúpam de la Unión', ''),
(1485, 20, '487', 'Santiago Tenango', ''),
(1486, 20, '488', 'Santiago Tepetlapa', ''),
(1487, 20, '489', 'Santiago Tetepec', ''),
(1488, 20, '490', 'Santiago Texcalcingo', ''),
(1489, 20, '491', 'Santiago Textitlán', ''),
(1490, 20, '492', 'Santiago Tilantongo', ''),
(1491, 20, '493', 'Santiago Tillo', ''),
(1492, 20, '494', 'Santiago Tlazoyaltepec', ''),
(1493, 20, '495', 'Santiago Xanica', ''),
(1494, 20, '496', 'Santiago Xiacuí', ''),
(1495, 20, '497', 'Santiago Yaitepec', ''),
(1496, 20, '498', 'Santiago Yaveo', ''),
(1497, 20, '499', 'Santiago Yolomécatl', ''),
(1498, 20, '500', 'Santiago Yosondúa', ''),
(1499, 20, '501', 'Santiago Yucuyachi', ''),
(1500, 20, '502', 'Santiago Zacatepec', ''),
(1501, 20, '503', 'Santiago Zoochila', ''),
(1502, 20, '504', 'Nuevo Zoquiápam', ''),
(1503, 20, '505', 'Santo Domingo Ingenio', ''),
(1504, 20, '506', 'Santo Domingo Albarradas', ''),
(1505, 20, '507', 'Santo Domingo Armenta', ''),
(1506, 20, '508', 'Santo Domingo Chihuitán', ''),
(1507, 20, '509', 'Santo Domingo de Morelos', ''),
(1508, 20, '510', 'Santo Domingo Ixcatlán', ''),
(1509, 20, '511', 'Santo Domingo Nuxaá', ''),
(1510, 20, '512', 'Santo Domingo Ozolotepec', ''),
(1511, 20, '513', 'Santo Domingo Petapa', ''),
(1512, 20, '514', 'Santo Domingo Roayaga', ''),
(1513, 20, '515', 'Santo Domingo Tehuantepec', ''),
(1514, 20, '516', 'Santo Domingo Teojomulco', ''),
(1515, 20, '517', 'Santo Domingo Tepuxtepec', ''),
(1516, 20, '518', 'Santo Domingo Tlatayápam', ''),
(1517, 20, '519', 'Santo Domingo Tomaltepec', ''),
(1518, 20, '520', 'Santo Domingo Tonalá', ''),
(1519, 20, '521', 'Santo Domingo Tonaltepec', ''),
(1520, 20, '522', 'Santo Domingo Xagacía', ''),
(1521, 20, '523', 'Santo Domingo Yanhuitlán', ''),
(1522, 20, '524', 'Santo Domingo Yodohino', ''),
(1523, 20, '525', 'Santo Domingo Zanatepec', ''),
(1524, 20, '526', 'Santos Reyes Nopala', ''),
(1525, 20, '527', 'Santos Reyes Pápalo', ''),
(1526, 20, '528', 'Santos Reyes Tepejillo', ''),
(1527, 20, '529', 'Santos Reyes Yucuná', ''),
(1528, 20, '530', 'Santo Tomás Jalieza', ''),
(1529, 20, '531', 'Santo Tomás Mazaltepec', ''),
(1530, 20, '532', 'Santo Tomás Ocotepec', ''),
(1531, 20, '533', 'Santo Tomás Tamazulapan', ''),
(1532, 20, '534', 'San Vicente Coatlán', ''),
(1533, 20, '535', 'San Vicente Lachixío', ''),
(1534, 20, '536', 'San Vicente Nuñú', ''),
(1535, 20, '537', 'Silacayoápam', ''),
(1536, 20, '538', 'Sitio de Xitlapehua', ''),
(1537, 20, '539', 'Soledad Etla', ''),
(1538, 20, '540', 'Villa de Tamazulápam del Progreso', ''),
(1539, 20, '541', 'Tanetze de Zaragoza', ''),
(1540, 20, '542', 'Taniche', ''),
(1541, 20, '543', 'Tataltepec de Valdés', ''),
(1542, 20, '544', 'Teococuilco de Marcos Pérez', ''),
(1543, 20, '545', 'Teotitlán de Flores Magón', ''),
(1544, 20, '546', 'Teotitlán del Valle', ''),
(1545, 20, '547', 'Teotongo', ''),
(1546, 20, '548', 'Tepelmeme Villa de Morelos', ''),
(1549, 20, '549', 'Heroica Villa Tezoatlán de Segura y Luna', ''),
(1583, 20, '550', 'San Jerónimo Tlacochahuaya', ''),
(1584, 20, '551', 'Tlacolula de Matamoros', ''),
(1585, 20, '552', 'Tlacotepec Plumas', ''),
(1586, 20, '553', 'Tlalixtac de Cabrera', ''),
(1587, 20, '554', 'Totontepec Villa de Morelos', ''),
(1588, 20, '555', 'Trinidad Zaachila', ''),
(1589, 20, '556', 'La Trinidad Vista Hermosa', ''),
(1590, 20, '557', 'Unión Hidalgo', ''),
(1591, 20, '558', 'Valerio Trujano', ''),
(1592, 20, '559', 'San Juan Bautista Valle Nacional', ''),
(1593, 20, '560', 'Villa Díaz Ordaz', ''),
(1594, 20, '561', 'Yaxe', ''),
(1595, 20, '562', 'Magdalena Yodocono de Porfirio Díaz', ''),
(1596, 20, '563', 'Yogana', ''),
(1597, 20, '564', 'Yutanduchi de Guerrero', ''),
(1598, 20, '565', 'Villa de Zaachila', ''),
(1599, 20, '566', 'San Mateo Yucutindó', ''),
(1600, 20, '567', 'Zapotitlán Lagunas', ''),
(1601, 20, '568', 'Zapotitlán Palmas', ''),
(1602, 20, '569', 'Santa Inés de Zaragoza', ''),
(1603, 20, '570', 'Zimatlán de Álvarez', ''),
(1604, 21, '001', 'Acajete', ''),
(1605, 21, '002', 'Acateno', ''),
(1606, 21, '003', 'Acatlán', ''),
(1607, 21, '004', 'Acatzingo', ''),
(1608, 21, '005', 'Acteopan', ''),
(1609, 21, '006', 'Ahuacatlán', ''),
(1610, 21, '007', 'Ahuatlán', ''),
(1611, 21, '008', 'Ahuazotepec', ''),
(1612, 21, '009', 'Ahuehuetitla', ''),
(1613, 21, '010', 'Ajalpan', ''),
(1614, 21, '011', 'Albino Zertuche', ''),
(1615, 21, '012', 'Aljojuca', ''),
(1616, 21, '013', 'Altepexi', ''),
(1617, 21, '014', 'Amixtlán', ''),
(1618, 21, '015', 'Amozoc', ''),
(1619, 21, '016', 'Aquixtla', ''),
(1620, 21, '017', 'Atempan', ''),
(1621, 21, '018', 'Atexcal', ''),
(1622, 21, '019', 'Atlixco', ''),
(1623, 21, '020', 'Atoyatempan', ''),
(1624, 21, '021', 'Atzala', ''),
(1625, 21, '022', 'Atzitzihuacán', ''),
(1626, 21, '023', 'Atzitzintla', ''),
(1627, 21, '024', 'Axutla', ''),
(1628, 21, '025', 'Ayotoxco de Guerrero', ''),
(1629, 21, '026', 'Calpan', ''),
(1630, 21, '027', 'Caltepec', ''),
(1631, 21, '028', 'Camocuautla', ''),
(1632, 21, '029', 'Caxhuacan', ''),
(1633, 21, '030', 'Coatepec', ''),
(1634, 21, '031', 'Coatzingo', ''),
(1635, 21, '032', 'Cohetzala', ''),
(1636, 21, '033', 'Cohuecan', ''),
(1637, 21, '034', 'Coronango', ''),
(1638, 21, '035', 'Coxcatlán', ''),
(1639, 21, '036', 'Coyomeapan', ''),
(1640, 21, '037', 'Coyotepec', ''),
(1641, 21, '038', 'Cuapiaxtla de Madero', ''),
(1642, 21, '039', 'Cuautempan', ''),
(1643, 21, '040', 'Cuautinchán', ''),
(1644, 21, '041', 'Cuautlancingo', ''),
(1645, 21, '042', 'Cuayuca de Andrade', ''),
(1646, 21, '043', 'Cuetzalan del Progreso', ''),
(1647, 21, '044', 'Cuyoaco', ''),
(1648, 21, '045', 'Chalchicomula de Sesma', ''),
(1649, 21, '046', 'Chapulco', ''),
(1650, 21, '047', 'Chiautla', ''),
(1651, 21, '048', 'Chiautzingo', ''),
(1652, 21, '049', 'Chiconcuautla', ''),
(1653, 21, '050', 'Chichiquila', ''),
(1654, 21, '051', 'Chietla', ''),
(1655, 21, '052', 'Chigmecatitlán', ''),
(1656, 21, '053', 'Chignahuapan', ''),
(1657, 21, '054', 'Chignautla', ''),
(1658, 21, '055', 'Chila', ''),
(1659, 21, '056', 'Chila de la Sal', ''),
(1660, 21, '057', 'Honey', ''),
(1661, 21, '058', 'Chilchotla', ''),
(1662, 21, '059', 'Chinantla', ''),
(1663, 21, '060', 'Domingo Arenas', ''),
(1664, 21, '061', 'Eloxochitlán', ''),
(1665, 21, '062', 'Epatlán', ''),
(1666, 21, '063', 'Esperanza', ''),
(1667, 21, '064', 'Francisco Z. Mena', ''),
(1668, 21, '065', 'General Felipe Ángeles', ''),
(1669, 21, '066', 'Guadalupe', ''),
(1670, 21, '067', 'Guadalupe Victoria', ''),
(1671, 21, '068', 'Hermenegildo Galeana', ''),
(1672, 21, '069', 'Huaquechula', ''),
(1673, 21, '070', 'Huatlatlauca', ''),
(1674, 21, '071', 'Huauchinango', ''),
(1675, 21, '072', 'Huehuetla', ''),
(1676, 21, '073', 'Huehuetlán el Chico', ''),
(1677, 21, '074', 'Huejotzingo', ''),
(1678, 21, '075', 'Hueyapan', ''),
(1679, 21, '076', 'Hueytamalco', ''),
(1680, 21, '077', 'Hueytlalpan', ''),
(1681, 21, '078', 'Huitzilan de Serdán', ''),
(1682, 21, '079', 'Huitziltepec', ''),
(1683, 21, '080', 'Atlequizayan', ''),
(1684, 21, '081', 'Ixcamilpa de Guerrero', ''),
(1685, 21, '082', 'Ixcaquixtla', ''),
(1686, 21, '083', 'Ixtacamaxtitlán', ''),
(1687, 21, '084', 'Ixtepec', ''),
(1688, 21, '085', 'Izúcar de Matamoros', ''),
(1689, 21, '086', 'Jalpan', ''),
(1690, 21, '087', 'Jolalpan', ''),
(1691, 21, '088', 'Jonotla', ''),
(1692, 21, '089', 'Jopala', ''),
(1693, 21, '090', 'Juan C. Bonilla', ''),
(1694, 21, '091', 'Juan Galindo', ''),
(1695, 21, '092', 'Juan N. Méndez', ''),
(1696, 21, '093', 'Lafragua', ''),
(1697, 21, '094', 'Libres', ''),
(1698, 21, '095', 'La Magdalena Tlatlauquitepec', ''),
(1699, 21, '096', 'Mazapiltepec de Juárez', ''),
(1700, 21, '097', 'Mixtla', ''),
(1701, 21, '098', 'Molcaxac', ''),
(1702, 21, '099', 'Cañada Morelos', ''),
(1703, 21, '100', 'Naupan', ''),
(1704, 21, '101', 'Nauzontla', ''),
(1705, 21, '102', 'Nealtican', ''),
(1706, 21, '103', 'Nicolás Bravo', ''),
(1707, 21, '104', 'Nopalucan', ''),
(1708, 21, '105', 'Ocotepec', ''),
(1709, 21, '106', 'Ocoyucan', ''),
(1710, 21, '107', 'Olintla', ''),
(1711, 21, '108', 'Oriental', ''),
(1712, 21, '109', 'Pahuatlán', ''),
(1713, 21, '110', 'Palmar de Bravo', ''),
(1714, 21, '111', 'Pantepec', ''),
(1715, 21, '112', 'Petlalcingo', ''),
(1716, 21, '113', 'Piaxtla', ''),
(1717, 21, '114', 'Puebla', ''),
(1718, 21, '115', 'Quecholac', ''),
(1719, 21, '116', 'Quimixtlán', ''),
(1720, 21, '117', 'Rafael Lara Grajales', ''),
(1721, 21, '118', 'Los Reyes de Juárez', ''),
(1722, 21, '119', 'San Andrés Cholula', ''),
(1723, 21, '120', 'San Antonio Cañada', ''),
(1724, 21, '121', 'San Diego la Mesa Tochimiltzingo', ''),
(1725, 21, '122', 'San Felipe Teotlalcingo', ''),
(1726, 21, '123', 'San Felipe Tepatlán', ''),
(1727, 21, '124', 'San Gabriel Chilac', ''),
(1728, 21, '125', 'San Gregorio Atzompa', ''),
(1729, 21, '126', 'San Jerónimo Tecuanipan', ''),
(1730, 21, '127', 'San Jerónimo Xayacatlán', ''),
(1731, 21, '128', 'San José Chiapa', ''),
(1732, 21, '129', 'San José Miahuatlán', ''),
(1733, 21, '130', 'San Juan Atenco', ''),
(1734, 21, '131', 'San Juan Atzompa', ''),
(1735, 21, '132', 'San Martín Texmelucan', ''),
(1736, 21, '133', 'San Martín Totoltepec', ''),
(1737, 21, '134', 'San Matías Tlalancaleca', ''),
(1738, 21, '135', 'San Miguel Ixitlán', ''),
(1739, 21, '136', 'San Miguel Xoxtla', ''),
(1740, 21, '137', 'San Nicolás Buenos Aires', ''),
(1741, 21, '138', 'San Nicolás de los Ranchos', ''),
(1742, 21, '139', 'San Pablo Anicano', ''),
(1743, 21, '140', 'San Pedro Cholula', ''),
(1744, 21, '141', 'San Pedro Yeloixtlahuaca', ''),
(1745, 21, '142', 'San Salvador el Seco', ''),
(1746, 21, '143', 'San Salvador el Verde', ''),
(1747, 21, '144', 'San Salvador Huixcolotla', ''),
(1748, 21, '145', 'San Sebastián Tlacotepec', ''),
(1749, 21, '146', 'Santa Catarina Tlaltempan', ''),
(1750, 21, '147', 'Santa Inés Ahuatempan', ''),
(1751, 21, '148', 'Santa Isabel Cholula', ''),
(1752, 21, '149', 'Santiago Miahuatlán', ''),
(1753, 21, '150', 'Huehuetlán el Grande', ''),
(1754, 21, '151', 'Santo Tomás Hueyotlipan', ''),
(1755, 21, '152', 'Soltepec', ''),
(1756, 21, '153', 'Tecali de Herrera', ''),
(1757, 21, '154', 'Tecamachalco', ''),
(1758, 21, '155', 'Tecomatlán', ''),
(1759, 21, '156', 'Tehuacán', ''),
(1760, 21, '157', 'Tehuitzingo', ''),
(1761, 21, '158', 'Tenampulco', ''),
(1762, 21, '159', 'Teopantlán', ''),
(1763, 21, '160', 'Teotlalco', ''),
(1764, 21, '161', 'Tepanco de López', ''),
(1765, 21, '162', 'Tepango de Rodríguez', ''),
(1766, 21, '163', 'Tepatlaxco de Hidalgo', ''),
(1767, 21, '164', 'Tepeaca', ''),
(1768, 21, '165', 'Tepemaxalco', ''),
(1769, 21, '166', 'Tepeojuma', ''),
(1770, 21, '167', 'Tepetzintla', ''),
(1771, 21, '168', 'Tepexco', ''),
(1772, 21, '169', 'Tepexi de Rodríguez', ''),
(1773, 21, '170', 'Tepeyahualco', ''),
(1774, 21, '171', 'Tepeyahualco de Cuauhtémoc', ''),
(1775, 21, '172', 'Tetela de Ocampo', ''),
(1776, 21, '173', 'Teteles de Avila Castillo', ''),
(1777, 21, '174', 'Teziutlán', ''),
(1778, 21, '175', 'Tianguismanalco', ''),
(1779, 21, '176', 'Tilapa', ''),
(1780, 21, '177', 'Tlacotepec de Benito Juárez', ''),
(1781, 21, '178', 'Tlacuilotepec', ''),
(1782, 21, '179', 'Tlachichuca', ''),
(1783, 21, '180', 'Tlahuapan', ''),
(1784, 21, '181', 'Tlaltenango', ''),
(1785, 21, '182', 'Tlanepantla', ''),
(1786, 21, '183', 'Tlaola', ''),
(1787, 21, '184', 'Tlapacoya', ''),
(1788, 21, '185', 'Tlapanalá', ''),
(1789, 21, '186', 'Tlatlauquitepec', ''),
(1790, 21, '187', 'Tlaxco', ''),
(1791, 21, '188', 'Tochimilco', ''),
(1792, 21, '189', 'Tochtepec', ''),
(1793, 21, '190', 'Totoltepec de Guerrero', ''),
(1794, 21, '191', 'Tulcingo', ''),
(1795, 21, '192', 'Tuzamapan de Galeana', ''),
(1796, 21, '193', 'Tzicatlacoyan', ''),
(1797, 21, '194', 'Venustiano Carranza', ''),
(1798, 21, '195', 'Vicente Guerrero', ''),
(1799, 21, '196', 'Xayacatlán de Bravo', ''),
(1800, 21, '197', 'Xicotepec', ''),
(1801, 21, '198', 'Xicotlán', ''),
(1802, 21, '199', 'Xiutetelco', ''),
(1803, 21, '200', 'Xochiapulco', ''),
(1804, 21, '201', 'Xochiltepec', ''),
(1805, 21, '202', 'Xochitlán de Vicente Suárez', ''),
(1806, 21, '203', 'Xochitlán Todos Santos', ''),
(1807, 21, '204', 'Yaonáhuac', ''),
(1808, 21, '205', 'Yehualtepec', ''),
(1809, 21, '206', 'Zacapala', ''),
(1810, 21, '207', 'Zacapoaxtla', ''),
(1811, 21, '208', 'Zacatlán', ''),
(1812, 21, '209', 'Zapotitlán', ''),
(1813, 21, '210', 'Zapotitlán de Méndez', ''),
(1814, 21, '211', 'Zaragoza', ''),
(1815, 21, '212', 'Zautla', ''),
(1816, 21, '213', 'Zihuateutla', ''),
(1817, 21, '214', 'Zinacatepec', ''),
(1818, 21, '215', 'Zongozotla', ''),
(1819, 21, '216', 'Zoquiapan', ''),
(1820, 21, '217', 'Zoquitlán', ''),
(1821, 22, '001', 'Amealco de Bonfil', ''),
(1822, 22, '002', 'Pinal de Amoles', ''),
(1823, 22, '003', 'Arroyo Seco', ''),
(1824, 22, '004', 'Cadereyta de Montes', ''),
(1825, 22, '005', 'Colón', ''),
(1826, 22, '006', 'Corregidora', ''),
(1827, 22, '007', 'Ezequiel Montes', ''),
(1828, 22, '008', 'Huimilpan', ''),
(1829, 22, '009', 'Jalpan de Serra', ''),
(1830, 22, '010', 'Landa de Matamoros', ''),
(1831, 22, '011', 'El Marqués', ''),
(1832, 22, '012', 'Pedro Escobedo', ''),
(1833, 22, '013', 'Peñamiller', ''),
(1834, 22, '014', 'Querétaro', ''),
(1835, 22, '015', 'San Joaquín', ''),
(1836, 22, '016', 'San Juan del Río', ''),
(1837, 22, '017', 'Tequisquiapan', ''),
(1838, 22, '018', 'Tolimán', ''),
(1839, 23, '001', 'Cozumel', ''),
(1840, 23, '002', 'Felipe Carrillo Puerto', ''),
(1841, 23, '003', 'Isla Mujeres', ''),
(1842, 23, '004', 'Othón P. Blanco', ''),
(1843, 23, '005', 'Benito Juárez', ''),
(1844, 23, '006', 'José María Morelos', ''),
(1845, 23, '007', 'Lázaro Cárdenas', ''),
(1846, 23, '008', 'Solidaridad', ''),
(1847, 23, '009', 'Tulum', ''),
(1848, 23, '010', 'Bacalar', ''),
(1849, 24, '001', 'Ahualulco', ''),
(1850, 24, '002', 'Alaquines', ''),
(1851, 24, '003', 'Aquismón', ''),
(1852, 24, '004', 'Armadillo de los Infante', ''),
(1853, 24, '005', 'Cárdenas', ''),
(1854, 24, '006', 'Catorce', ''),
(1855, 24, '007', 'Cedral', ''),
(1856, 24, '008', 'Cerritos', ''),
(1857, 24, '009', 'Cerro de San Pedro', ''),
(1858, 24, '010', 'Ciudad del Maíz', ''),
(1859, 24, '011', 'Ciudad Fernández', ''),
(1860, 24, '012', 'Tancanhuitz', ''),
(1861, 24, '013', 'Ciudad Valles', ''),
(1862, 24, '014', 'Coxcatlán', ''),
(1863, 24, '015', 'Charcas', ''),
(1864, 24, '016', 'Ebano', ''),
(1865, 24, '017', 'Guadalcázar', ''),
(1866, 24, '018', 'Huehuetlán', ''),
(1867, 24, '019', 'Lagunillas', ''),
(1868, 24, '020', 'Matehuala', ''),
(1869, 24, '021', 'Mexquitic de Carmona', ''),
(1870, 24, '022', 'Moctezuma', ''),
(1871, 24, '023', 'Rayón', ''),
(1872, 24, '024', 'Rioverde', ''),
(1873, 24, '025', 'Salinas', ''),
(1874, 24, '026', 'San Antonio', ''),
(1875, 24, '027', 'San Ciro de Acosta', ''),
(1876, 24, '028', 'San Luis Potosí', ''),
(1877, 24, '029', 'San Martín Chalchicuautla', ''),
(1878, 24, '030', 'San Nicolás Tolentino', ''),
(1879, 24, '031', 'Santa Catarina', ''),
(1880, 24, '032', 'Santa María del Río', ''),
(1881, 24, '033', 'Santo Domingo', ''),
(1882, 24, '034', 'San Vicente Tancuayalab', ''),
(1883, 24, '035', 'Soledad de Graciano Sánchez', ''),
(1884, 24, '036', 'Tamasopo', ''),
(1885, 24, '037', 'Tamazunchale', ''),
(1886, 24, '038', 'Tampacán', ''),
(1887, 24, '039', 'Tampamolón Corona', ''),
(1888, 24, '040', 'Tamuín', ''),
(1889, 24, '041', 'Tanlajás', ''),
(1890, 24, '042', 'Tanquián de Escobedo', ''),
(1891, 24, '043', 'Tierra Nueva', ''),
(1892, 24, '044', 'Vanegas', ''),
(1893, 24, '045', 'Venado', ''),
(1894, 24, '046', 'Villa de Arriaga', ''),
(1895, 24, '047', 'Villa de Guadalupe', ''),
(1896, 24, '048', 'Villa de la Paz', ''),
(1897, 24, '049', 'Villa de Ramos', ''),
(1898, 24, '050', 'Villa de Reyes', ''),
(1899, 24, '051', 'Villa Hidalgo', ''),
(1900, 24, '052', 'Villa Juárez', ''),
(1901, 24, '053', 'Axtla de Terrazas', ''),
(1902, 24, '054', 'Xilitla', ''),
(1903, 24, '055', 'Zaragoza', ''),
(1904, 24, '056', 'Villa de Arista', ''),
(1905, 24, '057', 'Matlapa', ''),
(1906, 24, '058', 'El Naranjo', ''),
(1907, 25, '001', 'Ahome', ''),
(1908, 25, '002', 'Angostura', ''),
(1909, 25, '003', 'Badiraguato', ''),
(1910, 25, '004', 'Concordia', ''),
(1911, 25, '005', 'Cosalá', ''),
(1912, 25, '006', 'Culiacán', ''),
(1913, 25, '007', 'Choix', ''),
(1914, 25, '008', 'Elota', ''),
(1915, 25, '009', 'Escuinapa', ''),
(1916, 25, '010', 'El Fuerte', ''),
(1917, 25, '011', 'Guasave', ''),
(1918, 25, '012', 'Mazatlán', ''),
(1919, 25, '013', 'Mocorito', ''),
(1920, 25, '014', 'Rosario', ''),
(1921, 25, '015', 'Salvador Alvarado', ''),
(1922, 25, '016', 'San Ignacio', ''),
(1923, 25, '017', 'Sinaloa', ''),
(1924, 25, '018', 'Navolato', ''),
(1925, 26, '001', 'Aconchi', ''),
(1926, 26, '002', 'Agua Prieta', ''),
(1927, 26, '003', 'Alamos', ''),
(1928, 26, '004', 'Altar', ''),
(1929, 26, '005', 'Arivechi', ''),
(1930, 26, '006', 'Arizpe', ''),
(1931, 26, '007', 'Atil', ''),
(1932, 26, '008', 'Bacadéhuachi', ''),
(1933, 26, '009', 'Bacanora', ''),
(1934, 26, '010', 'Bacerac', ''),
(1935, 26, '011', 'Bacoachi', ''),
(1936, 26, '012', 'Bácum', ''),
(1937, 26, '013', 'Banámichi', ''),
(1938, 26, '014', 'Baviácora', ''),
(1939, 26, '015', 'Bavispe', ''),
(1940, 26, '016', 'Benjamín Hill', ''),
(1941, 26, '017', 'Caborca', ''),
(1942, 26, '018', 'Cajeme', ''),
(1943, 26, '019', 'Cananea', ''),
(1944, 26, '020', 'Carbó', ''),
(1945, 26, '021', 'La Colorada', ''),
(1946, 26, '022', 'Cucurpe', ''),
(1947, 26, '023', 'Cumpas', ''),
(1948, 26, '024', 'Divisaderos', ''),
(1949, 26, '025', 'Empalme', ''),
(1950, 26, '026', 'Etchojoa', ''),
(1951, 26, '027', 'Fronteras', ''),
(1952, 26, '028', 'Granados', ''),
(1953, 26, '029', 'Guaymas', ''),
(1954, 26, '030', 'Hermosillo', ''),
(1955, 26, '031', 'Huachinera', ''),
(1956, 26, '032', 'Huásabas', ''),
(1957, 26, '033', 'Huatabampo', ''),
(1958, 26, '034', 'Huépac', ''),
(1959, 26, '035', 'Imuris', ''),
(1960, 26, '036', 'Magdalena', ''),
(1961, 26, '037', 'Mazatán', ''),
(1962, 26, '038', 'Moctezuma', ''),
(1963, 26, '039', 'Naco', ''),
(1964, 26, '040', 'Nácori Chico', ''),
(1965, 26, '041', 'Nacozari de García', ''),
(1966, 26, '042', 'Navojoa', ''),
(1967, 26, '043', 'Nogales', ''),
(1968, 26, '044', 'Onavas', ''),
(1969, 26, '045', 'Opodepe', ''),
(1970, 26, '046', 'Oquitoa', ''),
(1971, 26, '047', 'Pitiquito', ''),
(1972, 26, '048', 'Puerto Peñasco', ''),
(1973, 26, '049', 'Quiriego', ''),
(1974, 26, '050', 'Rayón', ''),
(1975, 26, '051', 'Rosario', ''),
(1976, 26, '052', 'Sahuaripa', ''),
(1977, 26, '053', 'San Felipe de Jesús', ''),
(1978, 26, '054', 'San Javier', ''),
(1979, 26, '055', 'San Luis Río Colorado', ''),
(1980, 26, '056', 'San Miguel de Horcasitas', ''),
(1981, 26, '057', 'San Pedro de la Cueva', ''),
(1982, 26, '058', 'Santa Ana', ''),
(1983, 26, '059', 'Santa Cruz', ''),
(1984, 26, '060', 'Sáric', ''),
(1985, 26, '061', 'Soyopa', ''),
(1986, 26, '062', 'Suaqui Grande', ''),
(1987, 26, '063', 'Tepache', ''),
(1988, 26, '064', 'Trincheras', ''),
(1989, 26, '065', 'Tubutama', ''),
(1990, 26, '066', 'Ures', ''),
(1991, 26, '067', 'Villa Hidalgo', ''),
(1992, 26, '068', 'Villa Pesqueira', ''),
(1993, 26, '069', 'Yécora', ''),
(1994, 26, '070', 'General Plutarco Elías Calles', ''),
(1995, 26, '071', 'Benito Juárez', ''),
(1996, 26, '072', 'San Ignacio Río Muerto', ''),
(1997, 27, '001', 'Balancán', ''),
(1998, 27, '002', 'Cárdenas', ''),
(1999, 27, '003', 'Centla', ''),
(2000, 27, '004', 'Centro', ''),
(2001, 27, '005', 'Comalcalco', ''),
(2002, 27, '006', 'Cunduacán', ''),
(2003, 27, '007', 'Emiliano Zapata', ''),
(2004, 27, '008', 'Huimanguillo', ''),
(2005, 27, '009', 'Jalapa', ''),
(2006, 27, '010', 'Jalpa de Méndez', ''),
(2007, 27, '011', 'Jonuta', ''),
(2008, 27, '012', 'Macuspana', ''),
(2009, 27, '013', 'Nacajuca', ''),
(2010, 27, '014', 'Paraíso', ''),
(2011, 27, '015', 'Tacotalpa', ''),
(2012, 27, '016', 'Teapa', ''),
(2013, 27, '017', 'Tenosique', ''),
(2014, 28, '001', 'Abasolo', ''),
(2015, 28, '002', 'Aldama', ''),
(2016, 28, '003', 'Altamira', ''),
(2017, 28, '004', 'Antiguo Morelos', ''),
(2018, 28, '005', 'Burgos', ''),
(2019, 28, '006', 'Bustamante', ''),
(2020, 28, '007', 'Camargo', ''),
(2021, 28, '008', 'Casas', ''),
(2022, 28, '009', 'Ciudad Madero', ''),
(2023, 28, '010', 'Cruillas', ''),
(2024, 28, '011', 'Gómez Farías', ''),
(2025, 28, '012', 'González', ''),
(2026, 28, '013', 'Güémez', ''),
(2027, 28, '014', 'Guerrero', ''),
(2028, 28, '015', 'Gustavo Díaz Ordaz', ''),
(2029, 28, '016', 'Hidalgo', ''),
(2030, 28, '017', 'Jaumave', ''),
(2031, 28, '018', 'Jiménez', ''),
(2032, 28, '019', 'Llera', ''),
(2033, 28, '020', 'Mainero', ''),
(2034, 28, '021', 'El Mante', ''),
(2035, 28, '022', 'Matamoros', ''),
(2036, 28, '023', 'Méndez', ''),
(2037, 28, '024', 'Mier', ''),
(2038, 28, '025', 'Miguel Alemán', ''),
(2039, 28, '026', 'Miquihuana', ''),
(2040, 28, '027', 'Nuevo Laredo', ''),
(2041, 28, '028', 'Nuevo Morelos', ''),
(2042, 28, '029', 'Ocampo', ''),
(2043, 28, '030', 'Padilla', ''),
(2044, 28, '031', 'Palmillas', ''),
(2045, 28, '032', 'Reynosa', ''),
(2046, 28, '033', 'Río Bravo', ''),
(2047, 28, '034', 'San Carlos', ''),
(2048, 28, '035', 'San Fernando', ''),
(2049, 28, '036', 'San Nicolás', ''),
(2050, 28, '037', 'Soto la Marina', ''),
(2051, 28, '038', 'Tampico', ''),
(2052, 28, '039', 'Tula', ''),
(2053, 28, '040', 'Valle Hermoso', ''),
(2054, 28, '041', 'Victoria', ''),
(2055, 28, '042', 'Villagrán', ''),
(2056, 28, '043', 'Xicoténcatl', ''),
(2057, 29, '001', 'Amaxac de Guerrero', ''),
(2058, 29, '002', 'Apetatitlán de Antonio Carvajal', ''),
(2059, 29, '003', 'Atlangatepec', ''),
(2060, 29, '004', 'Atltzayanca', ''),
(2061, 29, '005', 'Apizaco', ''),
(2062, 29, '006', 'Calpulalpan', ''),
(2063, 29, '007', 'El Carmen Tequexquitla', ''),
(2064, 29, '008', 'Cuapiaxtla', ''),
(2065, 29, '009', 'Cuaxomulco', ''),
(2066, 29, '010', 'Chiautempan', ''),
(2067, 29, '011', 'Muñoz de Domingo Arenas', ''),
(2068, 29, '012', 'Españita', ''),
(2069, 29, '013', 'Huamantla', ''),
(2070, 29, '014', 'Hueyotlipan', ''),
(2071, 29, '015', 'Ixtacuixtla de Mariano Matamoros', ''),
(2072, 29, '016', 'Ixtenco', ''),
(2073, 29, '017', 'Mazatecochco de José María Morelos', ''),
(2074, 29, '018', 'Contla de Juan Cuamatzi', ''),
(2075, 29, '019', 'Tepetitla de Lardizábal', ''),
(2076, 29, '020', 'Sanctórum de Lázaro Cárdenas', ''),
(2077, 29, '021', 'Nanacamilpa de Mariano Arista', ''),
(2078, 29, '022', 'Acuamanala de Miguel Hidalgo', ''),
(2079, 29, '023', 'Natívitas', ''),
(2080, 29, '024', 'Panotla', ''),
(2081, 29, '025', 'San Pablo del Monte', ''),
(2082, 29, '026', 'Santa Cruz Tlaxcala', ''),
(2083, 29, '027', 'Tenancingo', ''),
(2084, 29, '028', 'Teolocholco', ''),
(2085, 29, '029', 'Tepeyanco', ''),
(2086, 29, '030', 'Terrenate', ''),
(2087, 29, '031', 'Tetla de la Solidaridad', ''),
(2088, 29, '032', 'Tetlatlahuca', ''),
(2089, 29, '033', 'Tlaxcala', ''),
(2090, 29, '034', 'Tlaxco', ''),
(2091, 29, '035', 'Tocatlán', ''),
(2092, 29, '036', 'Totolac', ''),
(2093, 29, '037', 'Ziltlaltépec de Trinidad Sánchez Santos', ''),
(2094, 29, '038', 'Tzompantepec', ''),
(2095, 29, '039', 'Xaloztoc', ''),
(2096, 29, '040', 'Xaltocan', ''),
(2097, 29, '041', 'Papalotla de Xicohténcatl', ''),
(2098, 29, '042', 'Xicohtzinco', ''),
(2099, 29, '043', 'Yauhquemehcan', ''),
(2100, 29, '044', 'Zacatelco', ''),
(2101, 29, '045', 'Benito Juárez', ''),
(2102, 29, '046', 'Emiliano Zapata', ''),
(2103, 29, '047', 'Lázaro Cárdenas', ''),
(2104, 29, '048', 'La Magdalena Tlaltelulco', ''),
(2105, 29, '049', 'San Damián Texóloc', ''),
(2106, 29, '050', 'San Francisco Tetlanohcan', ''),
(2107, 29, '051', 'San Jerónimo Zacualpan', ''),
(2108, 29, '052', 'San José Teacalco', ''),
(2109, 29, '053', 'San Juan Huactzinco', ''),
(2110, 29, '054', 'San Lorenzo Axocomanitla', ''),
(2111, 29, '055', 'San Lucas Tecopilco', ''),
(2112, 29, '056', 'Santa Ana Nopalucan', ''),
(2113, 29, '057', 'Santa Apolonia Teacalco', ''),
(2114, 29, '058', 'Santa Catarina Ayometla', ''),
(2115, 29, '059', 'Santa Cruz Quilehtla', ''),
(2116, 29, '060', 'Santa Isabel Xiloxoxtla', ''),
(2117, 30, '001', 'Acajete', ''),
(2118, 30, '002', 'Acatlán', ''),
(2119, 30, '003', 'Acayucan', ''),
(2120, 30, '004', 'Actopan', ''),
(2121, 30, '005', 'Acula', ''),
(2122, 30, '006', 'Acultzingo', ''),
(2123, 30, '007', 'Camarón de Tejeda', ''),
(2124, 30, '008', 'Alpatláhuac', ''),
(2125, 30, '009', 'Alto Lucero de Gutiérrez Barrios', ''),
(2126, 30, '010', 'Altotonga', ''),
(2127, 30, '011', 'Alvarado', ''),
(2128, 30, '012', 'Amatitlán', ''),
(2129, 30, '013', 'Naranjos Amatlán', ''),
(2130, 30, '014', 'Amatlán de los Reyes', ''),
(2131, 30, '015', 'Angel R. Cabada', ''),
(2132, 30, '016', 'La Antigua', ''),
(2133, 30, '017', 'Apazapan', ''),
(2134, 30, '018', 'Aquila', ''),
(2135, 30, '019', 'Astacinga', ''),
(2136, 30, '020', 'Atlahuilco', ''),
(2137, 30, '021', 'Atoyac', ''),
(2138, 30, '022', 'Atzacan', ''),
(2139, 30, '023', 'Atzalan', ''),
(2140, 30, '024', 'Tlaltetela', ''),
(2141, 30, '025', 'Ayahualulco', ''),
(2142, 30, '026', 'Banderilla', ''),
(2143, 30, '027', 'Benito Juárez', ''),
(2144, 30, '028', 'Boca del Río', ''),
(2145, 30, '029', 'Calcahualco', ''),
(2146, 30, '030', 'Camerino Z. Mendoza', ''),
(2147, 30, '031', 'Carrillo Puerto', ''),
(2148, 30, '032', 'Catemaco', ''),
(2149, 30, '033', 'Cazones de Herrera', ''),
(2150, 30, '034', 'Cerro Azul', ''),
(2151, 30, '035', 'Citlaltépetl', ''),
(2152, 30, '036', 'Coacoatzintla', ''),
(2153, 30, '037', 'Coahuitlán', ''),
(2154, 30, '038', 'Coatepec', ''),
(2155, 30, '039', 'Coatzacoalcos', ''),
(2156, 30, '040', 'Coatzintla', ''),
(2157, 30, '041', 'Coetzala', ''),
(2158, 30, '042', 'Colipa', ''),
(2159, 30, '043', 'Comapa', ''),
(2160, 30, '044', 'Córdoba', ''),
(2161, 30, '045', 'Cosamaloapan de Carpio', ''),
(2162, 30, '046', 'Cosautlán de Carvajal', ''),
(2163, 30, '047', 'Coscomatepec', ''),
(2164, 30, '048', 'Cosoleacaque', ''),
(2165, 30, '049', 'Cotaxtla', ''),
(2166, 30, '050', 'Coxquihui', ''),
(2167, 30, '051', 'Coyutla', ''),
(2168, 30, '052', 'Cuichapa', ''),
(2169, 30, '053', 'Cuitláhuac', ''),
(2170, 30, '054', 'Chacaltianguis', ''),
(2171, 30, '055', 'Chalma', ''),
(2172, 30, '056', 'Chiconamel', ''),
(2173, 30, '057', 'Chiconquiaco', ''),
(2174, 30, '058', 'Chicontepec', ''),
(2175, 30, '059', 'Chinameca', ''),
(2176, 30, '060', 'Chinampa de Gorostiza', ''),
(2177, 30, '061', 'Las Choapas', ''),
(2178, 30, '062', 'Chocamán', ''),
(2179, 30, '063', 'Chontla', ''),
(2180, 30, '064', 'Chumatlán', ''),
(2181, 30, '065', 'Emiliano Zapata', ''),
(2182, 30, '066', 'Espinal', ''),
(2183, 30, '067', 'Filomeno Mata', ''),
(2184, 30, '068', 'Fortín', ''),
(2185, 30, '069', 'Gutiérrez Zamora', ''),
(2186, 30, '070', 'Hidalgotitlán', ''),
(2187, 30, '071', 'Huatusco', ''),
(2188, 30, '072', 'Huayacocotla', ''),
(2189, 30, '073', 'Hueyapan de Ocampo', ''),
(2190, 30, '074', 'Huiloapan de Cuauhtémoc', ''),
(2191, 30, '075', 'Ignacio de la Llave', ''),
(2192, 30, '076', 'Ilamatlán', ''),
(2193, 30, '077', 'Isla', ''),
(2194, 30, '078', 'Ixcatepec', ''),
(2195, 30, '079', 'Ixhuacán de los Reyes', ''),
(2196, 30, '080', 'Ixhuatlán del Café', ''),
(2197, 30, '081', 'Ixhuatlancillo', ''),
(2198, 30, '082', 'Ixhuatlán del Sureste', ''),
(2199, 30, '083', 'Ixhuatlán de Madero', ''),
(2200, 30, '084', 'Ixmatlahuacan', ''),
(2201, 30, '085', 'Ixtaczoquitlán', ''),
(2202, 30, '086', 'Jalacingo', ''),
(2203, 30, '087', 'Xalapa', ''),
(2204, 30, '088', 'Jalcomulco', ''),
(2205, 30, '089', 'Jáltipan', ''),
(2206, 30, '090', 'Jamapa', ''),
(2207, 30, '091', 'Jesús Carranza', ''),
(2208, 30, '092', 'Xico', ''),
(2209, 30, '093', 'Jilotepec', ''),
(2210, 30, '094', 'Juan Rodríguez Clara', ''),
(2211, 30, '095', 'Juchique de Ferrer', ''),
(2212, 30, '096', 'Landero y Coss', ''),
(2213, 30, '097', 'Lerdo de Tejada', ''),
(2214, 30, '098', 'Magdalena', ''),
(2215, 30, '099', 'Maltrata', ''),
(2216, 30, '100', 'Manlio Fabio Altamirano', ''),
(2217, 30, '101', 'Mariano Escobedo', ''),
(2218, 30, '102', 'Martínez de la Torre', ''),
(2219, 30, '103', 'Mecatlán', ''),
(2220, 30, '104', 'Mecayapan', ''),
(2221, 30, '105', 'Medellín', ''),
(2222, 30, '106', 'Miahuatlán', ''),
(2223, 30, '107', 'Las Minas', ''),
(2224, 30, '108', 'Minatitlán', ''),
(2225, 30, '109', 'Misantla', ''),
(2226, 30, '110', 'Mixtla de Altamirano', ''),
(2227, 30, '111', 'Moloacán', ''),
(2228, 30, '112', 'Naolinco', ''),
(2229, 30, '113', 'Naranjal', ''),
(2230, 30, '114', 'Nautla', ''),
(2231, 30, '115', 'Nogales', ''),
(2232, 30, '116', 'Oluta', ''),
(2233, 30, '117', 'Omealca', ''),
(2234, 30, '118', 'Orizaba', ''),
(2235, 30, '119', 'Otatitlán', ''),
(2236, 30, '120', 'Oteapan', ''),
(2237, 30, '121', 'Ozuluama de Mascareñas', ''),
(2238, 30, '122', 'Pajapan', ''),
(2239, 30, '123', 'Pánuco', ''),
(2240, 30, '124', 'Papantla', ''),
(2241, 30, '125', 'Paso del Macho', ''),
(2242, 30, '126', 'Paso de Ovejas', ''),
(2243, 30, '127', 'La Perla', ''),
(2244, 30, '128', 'Perote', ''),
(2245, 30, '129', 'Platón Sánchez', ''),
(2246, 30, '130', 'Playa Vicente', ''),
(2247, 30, '131', 'Poza Rica de Hidalgo', ''),
(2248, 30, '132', 'Las Vigas de Ramírez', ''),
(2249, 30, '133', 'Pueblo Viejo', ''),
(2250, 30, '134', 'Puente Nacional', ''),
(2251, 30, '135', 'Rafael Delgado', ''),
(2252, 30, '136', 'Rafael Lucio', ''),
(2253, 30, '137', 'Los Reyes', ''),
(2254, 30, '138', 'Río Blanco', ''),
(2255, 30, '139', 'Saltabarranca', ''),
(2256, 30, '140', 'San Andrés Tenejapan', ''),
(2257, 30, '141', 'San Andrés Tuxtla', ''),
(2258, 30, '142', 'San Juan Evangelista', ''),
(2259, 30, '143', 'Santiago Tuxtla', ''),
(2260, 30, '144', 'Sayula de Alemán', ''),
(2261, 30, '145', 'Soconusco', ''),
(2262, 30, '146', 'Sochiapa', ''),
(2263, 30, '147', 'Soledad Atzompa', ''),
(2264, 30, '148', 'Soledad de Doblado', ''),
(2265, 30, '149', 'Soteapan', ''),
(2266, 30, '150', 'Tamalín', ''),
(2267, 30, '151', 'Tamiahua', ''),
(2268, 30, '152', 'Tampico Alto', ''),
(2269, 30, '153', 'Tancoco', ''),
(2270, 30, '154', 'Tantima', ''),
(2271, 30, '155', 'Tantoyuca', ''),
(2272, 30, '156', 'Tatatila', ''),
(2273, 30, '157', 'Castillo de Teayo', ''),
(2274, 30, '158', 'Tecolutla', ''),
(2275, 30, '159', 'Tehuipango', ''),
(2276, 30, '160', 'Álamo Temapache', ''),
(2277, 30, '161', 'Tempoal', ''),
(2278, 30, '162', 'Tenampa', ''),
(2279, 30, '163', 'Tenochtitlán', ''),
(2280, 30, '164', 'Teocelo', ''),
(2281, 30, '165', 'Tepatlaxco', ''),
(2282, 30, '166', 'Tepetlán', ''),
(2283, 30, '167', 'Tepetzintla', ''),
(2284, 30, '168', 'Tequila', ''),
(2285, 30, '169', 'José Azueta', ''),
(2286, 30, '170', 'Texcatepec', ''),
(2287, 30, '171', 'Texhuacán', ''),
(2288, 30, '172', 'Texistepec', ''),
(2289, 30, '173', 'Tezonapa', ''),
(2290, 30, '174', 'Tierra Blanca', ''),
(2291, 30, '175', 'Tihuatlán', ''),
(2292, 30, '176', 'Tlacojalpan', ''),
(2293, 30, '177', 'Tlacolulan', ''),
(2294, 30, '178', 'Tlacotalpan', ''),
(2295, 30, '179', 'Tlacotepec de Mejía', ''),
(2296, 30, '180', 'Tlachichilco', ''),
(2297, 30, '181', 'Tlalixcoyan', ''),
(2298, 30, '182', 'Tlalnelhuayocan', ''),
(2299, 30, '183', 'Tlapacoyan', ''),
(2300, 30, '184', 'Tlaquilpa', ''),
(2301, 30, '185', 'Tlilapan', ''),
(2302, 30, '186', 'Tomatlán', ''),
(2303, 30, '187', 'Tonayán', ''),
(2304, 30, '188', 'Totutla', ''),
(2305, 30, '189', 'Tuxpan', ''),
(2306, 30, '190', 'Tuxtilla', ''),
(2307, 30, '191', 'Ursulo Galván', ''),
(2308, 30, '192', 'Vega de Alatorre', ''),
(2309, 30, '193', 'Veracruz', ''),
(2310, 30, '194', 'Villa Aldama', ''),
(2311, 30, '195', 'Xoxocotla', ''),
(2312, 30, '196', 'Yanga', ''),
(2313, 30, '197', 'Yecuatla', ''),
(2314, 30, '198', 'Zacualpan', ''),
(2315, 30, '199', 'Zaragoza', ''),
(2316, 30, '200', 'Zentla', ''),
(2317, 30, '201', 'Zongolica', ''),
(2318, 30, '202', 'Zontecomatlán de López y Fuentes', ''),
(2319, 30, '203', 'Zozocolco de Hidalgo', ''),
(2320, 30, '204', 'Agua Dulce', ''),
(2321, 30, '205', 'El Higo', ''),
(2322, 30, '206', 'Nanchital de Lázaro Cárdenas del Río', ''),
(2323, 30, '207', 'Tres Valles', ''),
(2324, 30, '208', 'Carlos A. Carrillo', ''),
(2325, 30, '209', 'Tatahuicapan de Juárez', ''),
(2326, 30, '210', 'Uxpanapa', ''),
(2327, 30, '211', 'San Rafael', ''),
(2328, 30, '212', 'Santiago Sochiapan', ''),
(2329, 31, '001', 'Abalá', ''),
(2330, 31, '002', 'Acanceh', ''),
(2331, 31, '003', 'Akil', ''),
(2332, 31, '004', 'Baca', ''),
(2333, 31, '005', 'Bokobá', ''),
(2334, 31, '006', 'Buctzotz', ''),
(2335, 31, '007', 'Cacalchén', ''),
(2336, 31, '008', 'Calotmul', ''),
(2337, 31, '009', 'Cansahcab', ''),
(2338, 31, '010', 'Cantamayec', ''),
(2339, 31, '011', 'Celestún', ''),
(2340, 31, '012', 'Cenotillo', ''),
(2341, 31, '013', 'Conkal', ''),
(2342, 31, '014', 'Cuncunul', ''),
(2343, 31, '015', 'Cuzamá', ''),
(2344, 31, '016', 'Chacsinkín', ''),
(2345, 31, '017', 'Chankom', ''),
(2346, 31, '018', 'Chapab', ''),
(2347, 31, '019', 'Chemax', ''),
(2348, 31, '020', 'Chicxulub Pueblo', ''),
(2349, 31, '021', 'Chichimilá', ''),
(2350, 31, '022', 'Chikindzonot', ''),
(2351, 31, '023', 'Chocholá', ''),
(2352, 31, '024', 'Chumayel', ''),
(2353, 31, '025', 'Dzán', ''),
(2354, 31, '026', 'Dzemul', ''),
(2355, 31, '027', 'Dzidzantún', ''),
(2356, 31, '028', 'Dzilam de Bravo', ''),
(2357, 31, '029', 'Dzilam González', ''),
(2358, 31, '030', 'Dzitás', ''),
(2359, 31, '031', 'Dzoncauich', ''),
(2360, 31, '032', 'Espita', ''),
(2361, 31, '033', 'Halachó', ''),
(2362, 31, '034', 'Hocabá', ''),
(2363, 31, '035', 'Hoctún', ''),
(2364, 31, '036', 'Homún', ''),
(2365, 31, '037', 'Huhí', ''),
(2366, 31, '038', 'Hunucmá', ''),
(2367, 31, '039', 'Ixil', ''),
(2368, 31, '040', 'Izamal', ''),
(2369, 31, '041', 'Kanasín', ''),
(2370, 31, '042', 'Kantunil', ''),
(2371, 31, '043', 'Kaua', ''),
(2372, 31, '044', 'Kinchil', ''),
(2373, 31, '045', 'Kopomá', ''),
(2374, 31, '046', 'Mama', ''),
(2375, 31, '047', 'Maní', ''),
(2376, 31, '048', 'Maxcanú', ''),
(2377, 31, '049', 'Mayapán', ''),
(2378, 31, '050', 'Mérida', ''),
(2379, 31, '051', 'Mocochá', ''),
(2380, 31, '052', 'Motul', ''),
(2381, 31, '053', 'Muna', ''),
(2382, 31, '054', 'Muxupip', ''),
(2383, 31, '055', 'Opichén', ''),
(2384, 31, '056', 'Oxkutzcab', ''),
(2385, 31, '057', 'Panabá', ''),
(2386, 31, '058', 'Peto', ''),
(2387, 31, '059', 'Progreso', ''),
(2388, 31, '060', 'Quintana Roo', ''),
(2389, 31, '061', 'Río Lagartos', ''),
(2390, 31, '062', 'Sacalum', ''),
(2391, 31, '063', 'Samahil', ''),
(2392, 31, '064', 'Sanahcat', ''),
(2393, 31, '065', 'San Felipe', ''),
(2394, 31, '066', 'Santa Elena', ''),
(2395, 31, '067', 'Seyé', ''),
(2396, 31, '068', 'Sinanché', ''),
(2397, 31, '069', 'Sotuta', ''),
(2398, 31, '070', 'Sucilá', ''),
(2399, 31, '071', 'Sudzal', ''),
(2400, 31, '072', 'Suma', ''),
(2401, 31, '073', 'Tahdziú', ''),
(2402, 31, '074', 'Tahmek', ''),
(2403, 31, '075', 'Teabo', ''),
(2404, 31, '076', 'Tecoh', ''),
(2405, 31, '077', 'Tekal de Venegas', ''),
(2406, 31, '078', 'Tekantó', ''),
(2407, 31, '079', 'Tekax', ''),
(2408, 31, '080', 'Tekit', ''),
(2409, 31, '081', 'Tekom', ''),
(2410, 31, '082', 'Telchac Pueblo', ''),
(2411, 31, '083', 'Telchac Puerto', ''),
(2412, 31, '084', 'Temax', ''),
(2413, 31, '085', 'Temozón', ''),
(2414, 31, '086', 'Tepakán', ''),
(2415, 31, '087', 'Tetiz', ''),
(2416, 31, '088', 'Teya', ''),
(2417, 31, '089', 'Ticul', ''),
(2418, 31, '090', 'Timucuy', ''),
(2419, 31, '091', 'Tinum', ''),
(2420, 31, '092', 'Tixcacalcupul', ''),
(2421, 31, '093', 'Tixkokob', ''),
(2422, 31, '094', 'Tixmehuac', ''),
(2423, 31, '095', 'Tixpéhual', ''),
(2424, 31, '096', 'Tizimín', ''),
(2425, 31, '097', 'Tunkás', ''),
(2426, 31, '098', 'Tzucacab', ''),
(2427, 31, '099', 'Uayma', ''),
(2428, 31, '100', 'Ucú', ''),
(2429, 31, '101', 'Umán', ''),
(2430, 31, '102', 'Valladolid', ''),
(2431, 31, '103', 'Xocchel', ''),
(2432, 31, '104', 'Yaxcabá', ''),
(2433, 31, '105', 'Yaxkukul', ''),
(2434, 31, '106', 'Yobaín', ''),
(2435, 32, '001', 'Apozol', ''),
(2436, 32, '002', 'Apulco', ''),
(2437, 32, '003', 'Atolinga', ''),
(2438, 32, '004', 'Benito Juárez', ''),
(2439, 32, '005', 'Calera', ''),
(2440, 32, '006', 'Cañitas de Felipe Pescador', ''),
(2441, 32, '007', 'Concepción del Oro', ''),
(2442, 32, '008', 'Cuauhtémoc', ''),
(2443, 32, '009', 'Chalchihuites', ''),
(2444, 32, '010', 'Fresnillo', ''),
(2445, 32, '011', 'Trinidad García de la Cadena', ''),
(2446, 32, '012', 'Genaro Codina', ''),
(2447, 32, '013', 'General Enrique Estrada', ''),
(2448, 32, '014', 'General Francisco R. Murguía', ''),
(2449, 32, '015', 'El Plateado de Joaquín Amaro', ''),
(2450, 32, '016', 'General Pánfilo Natera', ''),
(2451, 32, '017', 'Guadalupe', ''),
(2452, 32, '018', 'Huanusco', ''),
(2453, 32, '019', 'Jalpa', ''),
(2454, 32, '020', 'Jerez', ''),
(2455, 32, '021', 'Jiménez del Teul', ''),
(2456, 32, '022', 'Juan Aldama', ''),
(2457, 32, '023', 'Juchipila', ''),
(2458, 32, '024', 'Loreto', ''),
(2459, 32, '025', 'Luis Moya', ''),
(2460, 32, '026', 'Mazapil', ''),
(2461, 32, '027', 'Melchor Ocampo', ''),
(2462, 32, '028', 'Mezquital del Oro', ''),
(2463, 32, '029', 'Miguel Auza', ''),
(2464, 32, '030', 'Momax', ''),
(2465, 32, '031', 'Monte Escobedo', ''),
(2466, 32, '032', 'Morelos', ''),
(2467, 32, '033', 'Moyahua de Estrada', ''),
(2468, 32, '034', 'Nochistlán de Mejía', ''),
(2469, 32, '035', 'Noria de Ángeles', ''),
(2470, 32, '036', 'Ojocaliente', ''),
(2471, 32, '037', 'Pánuco', ''),
(2472, 32, '038', 'Pinos', ''),
(2473, 32, '039', 'Río Grande', ''),
(2474, 32, '040', 'Sain Alto', ''),
(2475, 32, '041', 'El Salvador', ''),
(2476, 32, '042', 'Sombrerete', ''),
(2477, 32, '043', 'Susticacán', ''),
(2478, 32, '044', 'Tabasco', ''),
(2479, 32, '045', 'Tepechitlán', ''),
(2480, 32, '046', 'Tepetongo', ''),
(2481, 32, '047', 'Teúl de González Ortega', ''),
(2482, 32, '048', 'Tlaltenango de Sánchez Román', ''),
(2483, 32, '049', 'Valparaíso', ''),
(2484, 32, '050', 'Vetagrande', ''),
(2485, 32, '051', 'Villa de Cos', ''),
(2486, 32, '052', 'Villa García', ''),
(2487, 32, '053', 'Villa González Ortega', ''),
(2488, 32, '054', 'Villa Hidalgo', ''),
(2489, 32, '055', 'Villanueva', ''),
(2490, 32, '056', 'Zacatecas', ''),
(2491, 32, '057', 'Trancoso', ''),
(2492, 32, '058', 'Santa María de la Paz', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sin_titulo_em`
--

CREATE TABLE `sin_titulo_em` (
  `idenc` int(11) NOT NULL,
  `idemp` int(11) DEFAULT NULL,
  `atraves` varchar(50) DEFAULT NULL,
  `actualmente` varchar(50) DEFAULT NULL,
  `cuales` varchar(50) DEFAULT NULL,
  `ocupaciones` varchar(50) DEFAULT NULL,
  `causas` varchar(50) DEFAULT NULL,
  `gustaria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulado`
--

CREATE TABLE `titulado` (
  `idenc` int(11) NOT NULL,
  `idper` int(11) NOT NULL,
  `modalidad` varchar(50) NOT NULL,
  `tiempo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turismo`
--

CREATE TABLE `turismo` (
  `idenc` int(11) NOT NULL,
  `idegresado` int(11) DEFAULT NULL,
  `efectiva` varchar(50) DEFAULT NULL,
  `Creatividad` varchar(50) DEFAULT NULL,
  `Toma` varchar(50) DEFAULT NULL,
  `conflictos` varchar(50) DEFAULT NULL,
  `Operacion` varchar(50) DEFAULT NULL,
  `Manejo` varchar(50) DEFAULT NULL,
  `Identificar` varchar(50) DEFAULT NULL,
  `calificar` varchar(50) DEFAULT NULL,
  `aprovechamiento` varchar(50) DEFAULT NULL,
  `Evaluar` varchar(50) DEFAULT NULL,
  `Interpretar` varchar(50) DEFAULT NULL,
  `Tipificar` varchar(50) DEFAULT NULL,
  `actividad` varchar(50) DEFAULT NULL,
  `oportunidades` varchar(50) DEFAULT NULL,
  `Generar` varchar(50) DEFAULT NULL,
  `posibilidades` varchar(50) DEFAULT NULL,
  `tendencias` varchar(50) DEFAULT NULL,
  `Proponer` varchar(50) DEFAULT NULL,
  `politicas` varchar(50) DEFAULT NULL,
  `Definir` varchar(50) DEFAULT NULL,
  `Determinar` varchar(50) DEFAULT NULL,
  `Verificar` varchar(50) DEFAULT NULL,
  `Asignar` varchar(50) DEFAULT NULL,
  `segmento` varchar(50) DEFAULT NULL,
  `Elaborar` varchar(50) DEFAULT NULL,
  `mercado` varchar(50) DEFAULT NULL,
  `Establecer` varchar(50) DEFAULT NULL,
  `programas` varchar(50) DEFAULT NULL,
  `Dominio` varchar(50) DEFAULT NULL,
  `Autonomia` varchar(50) DEFAULT NULL,
  `Autoaprendizaje` varchar(50) DEFAULT NULL,
  `Ciudadania` varchar(50) DEFAULT NULL,
  `cultura` varchar(50) DEFAULT NULL,
  `equipo` varchar(50) DEFAULT NULL,
  `Liderazgo` varchar(50) DEFAULT NULL,
  `Eficiencia` varchar(50) DEFAULT NULL,
  `Imagen` varchar(50) DEFAULT NULL,
  `Calidad` varchar(50) DEFAULT NULL,
  `cliente` varchar(50) DEFAULT NULL,
  `Negociacion` varchar(50) DEFAULT NULL,
  `Compromiso` varchar(50) DEFAULT NULL,
  `Integridad` varchar(50) DEFAULT NULL,
  `Etica` varchar(50) DEFAULT NULL,
  `Respecto` varchar(50) DEFAULT NULL,
  `bien` varchar(50) DEFAULT NULL,
  `cuidado` varchar(50) DEFAULT NULL,
  `servicio` varchar(50) DEFAULT NULL,
  `colaboracion` varchar(50) DEFAULT NULL,
  `honestidad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turismodos`
--

CREATE TABLE `turismodos` (
  `idenc` int(11) NOT NULL,
  `idegresado` int(11) DEFAULT NULL,
  `turismo` varchar(50) DEFAULT NULL,
  `Diseno` varchar(50) DEFAULT NULL,
  `competitiva` varchar(50) DEFAULT NULL,
  `productos` varchar(50) DEFAULT NULL,
  `patrimonio` varchar(50) DEFAULT NULL,
  `Desarrollo` varchar(50) DEFAULT NULL,
  `temas` varchar(50) DEFAULT NULL,
  `evaluacion` varchar(50) DEFAULT NULL,
  `sustentable` varchar(50) DEFAULT NULL,
  `procedimientos` varchar(50) DEFAULT NULL,
  `pregn1` varchar(50) DEFAULT NULL,
  `resp2` varchar(50) DEFAULT NULL,
  `pregun2` varchar(50) DEFAULT NULL,
  `habilidades2` varchar(50) DEFAULT NULL,
  `caracteristicas2` varchar(50) DEFAULT NULL,
  `factores2` varchar(50) DEFAULT NULL,
  `estudios2` varchar(50) DEFAULT NULL,
  `uso2` varchar(50) DEFAULT NULL,
  `permiten` varchar(50) DEFAULT NULL,
  `planes` varchar(50) DEFAULT NULL,
  `organizaciones` varchar(50) DEFAULT NULL,
  `estrategias` varchar(50) DEFAULT NULL,
  `competitivas` varchar(50) DEFAULT NULL,
  `comportamiento` varchar(50) DEFAULT NULL,
  `nuevos` varchar(50) DEFAULT NULL,
  `servicios` varchar(50) DEFAULT NULL,
  `tendientes` varchar(50) DEFAULT NULL,
  `innovadores` varchar(50) DEFAULT NULL,
  `marco` varchar(50) DEFAULT NULL,
  `catalogar` varchar(50) DEFAULT NULL,
  `diversas` varchar(50) DEFAULT NULL,
  `valorizacion` varchar(50) DEFAULT NULL,
  `Capacidad` varchar(50) DEFAULT NULL,
  `aprovechamiento` varchar(50) DEFAULT NULL,
  `difundir` varchar(50) DEFAULT NULL,
  `manejo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valores_a`
--

CREATE TABLE `valores_a` (
  `idenc` int(11) NOT NULL,
  `idper` int(11) DEFAULT NULL,
  `Prudencia` varchar(50) DEFAULT NULL,
  `Tolerancia` varchar(50) DEFAULT NULL,
  `Honestidad` varchar(50) DEFAULT NULL,
  `Espiritu` varchar(50) DEFAULT NULL,
  `Respeto` varchar(50) DEFAULT NULL,
  `Empatia` varchar(50) DEFAULT NULL,
  `Equidad` varchar(50) DEFAULT NULL,
  `Justicia` varchar(50) DEFAULT NULL,
  `Discrecion` varchar(50) DEFAULT NULL,
  `Responsabilidad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `academico`
--
ALTER TABLE `academico`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `acciones_em`
--
ALTER TABLE `acciones_em`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `actitudes_a`
--
ALTER TABLE `actitudes_a`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indices de la tabla `agronomo`
--
ALTER TABLE `agronomo`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `aspectos_em`
--
ALTER TABLE `aspectos_em`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `c2alumno`
--
ALTER TABLE `c2alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `competencias_a`
--
ALTER TABLE `competencias_a`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `conempresa`
--
ALTER TABLE `conempresa`
  ADD PRIMARY KEY (`idcon`);

--
-- Indices de la tabla `contaduria`
--
ALTER TABLE `contaduria`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `cuentaegresado`
--
ALTER TABLE `cuentaegresado`
  ADD PRIMARY KEY (`idcuenta`),
  ADD KEY `fk_idegresado` (`idegresado`);

--
-- Indices de la tabla `derecho`
--
ALTER TABLE `derecho`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `descripcionempre`
--
ALTER TABLE `descripcionempre`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `desempresa`
--
ALTER TABLE `desempresa`
  ADD PRIMARY KEY (`idemp`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`iddir`);

--
-- Indices de la tabla `egresado`
--
ALTER TABLE `egresado`
  ADD PRIMARY KEY (`idegresado`),
  ADD KEY `fk_lic` (`idlic`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idempresa`);

--
-- Indices de la tabla `encuesta2`
--
ALTER TABLE `encuesta2`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `encuesta3`
--
ALTER TABLE `encuesta3`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `encuesta4`
--
ALTER TABLE `encuesta4`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `encuesta5`
--
ALTER TABLE `encuesta5`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `encuesta6`
--
ALTER TABLE `encuesta6`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `encuesta7`
--
ALTER TABLE `encuesta7`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `encuesta8`
--
ALTER TABLE `encuesta8`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estructura_em`
--
ALTER TABLE `estructura_em`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `fortalezas_em`
--
ALTER TABLE `fortalezas_em`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `integral_em`
--
ALTER TABLE `integral_em`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `licenciatura`
--
ALTER TABLE `licenciatura`
  ADD PRIMARY KEY (`idlic`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estado_id` (`estado_id`);

--
-- Indices de la tabla `sin_titulo_em`
--
ALTER TABLE `sin_titulo_em`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `titulado`
--
ALTER TABLE `titulado`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `turismo`
--
ALTER TABLE `turismo`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `turismodos`
--
ALTER TABLE `turismodos`
  ADD PRIMARY KEY (`idenc`);

--
-- Indices de la tabla `valores_a`
--
ALTER TABLE `valores_a`
  ADD PRIMARY KEY (`idenc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `agronomo`
--
ALTER TABLE `agronomo`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `c2alumno`
--
ALTER TABLE `c2alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contaduria`
--
ALTER TABLE `contaduria`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cuentaegresado`
--
ALTER TABLE `cuentaegresado`
  MODIFY `idcuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `derecho`
--
ALTER TABLE `derecho`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `iddir` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `egresado`
--
ALTER TABLE `egresado`
  MODIFY `idegresado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `encuesta2`
--
ALTER TABLE `encuesta2`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `encuesta3`
--
ALTER TABLE `encuesta3`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `encuesta4`
--
ALTER TABLE `encuesta4`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `encuesta5`
--
ALTER TABLE `encuesta5`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `encuesta6`
--
ALTER TABLE `encuesta6`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `encuesta7`
--
ALTER TABLE `encuesta7`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `encuesta8`
--
ALTER TABLE `encuesta8`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `licenciatura`
--
ALTER TABLE `licenciatura`
  MODIFY `idlic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2493;
--
-- AUTO_INCREMENT de la tabla `titulado`
--
ALTER TABLE `titulado`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `turismo`
--
ALTER TABLE `turismo`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `turismodos`
--
ALTER TABLE `turismodos`
  MODIFY `idenc` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuentaegresado`
--
ALTER TABLE `cuentaegresado`
  ADD CONSTRAINT `fk_idegresado` FOREIGN KEY (`idegresado`) REFERENCES `egresado` (`idegresado`);

--
-- Filtros para la tabla `egresado`
--
ALTER TABLE `egresado`
  ADD CONSTRAINT `fk_lic` FOREIGN KEY (`idlic`) REFERENCES `licenciatura` (`idlic`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
