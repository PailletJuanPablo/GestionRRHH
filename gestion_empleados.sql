-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-05-2018 a las 04:18:11
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion_empleados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

DROP TABLE IF EXISTS `asistencias`;
CREATE TABLE IF NOT EXISTS `asistencias` (
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `empleados_id` int(11) NOT NULL,
  `fecha_asistencia` date NOT NULL,
  `horario_entrada` time NOT NULL,
  `horario_salida` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `asistencias_empleados_id_foreign` (`empleados_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ausencias`
--

DROP TABLE IF EXISTS `ausencias`;
CREATE TABLE IF NOT EXISTS `ausencias` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `empleados_id` int(11) NOT NULL,
  `fecha_ausencia` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `justificado` tinyint(1) NOT NULL,
  `observaciones` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Ninguna',
  `tipos_ausencias_id` int(11) NOT NULL,
  `inicio_ausencia` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finalizacion_ausencia` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ausencia_multiple` int(10) DEFAULT NULL,
  `dias_habiles_ausencia` int(10) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `ausencias_empleados_id_foreign` (`empleados_id`),
  KEY `ausencias_tipos_ausencias_id_foreign` (`tipos_ausencias_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ausencias`
--

INSERT INTO `ausencias` (`id`, `deleted_at`, `created_at`, `updated_at`, `empleados_id`, `fecha_ausencia`, `justificado`, `observaciones`, `tipos_ausencias_id`, `inicio_ausencia`, `finalizacion_ausencia`, `ausencia_multiple`, `dias_habiles_ausencia`) VALUES
(11, NULL, '2018-04-23 07:09:04', '2018-04-23 07:09:04', 4, 'Miercoles - 25/04/2018', 1, 'asdsad', 6, NULL, NULL, 0, 0),
(16, NULL, '2018-04-23 07:57:03', '2018-04-23 07:57:03', 5, 'Lunes - 23/04/2018', 1, 'Ausencia por capacitación en Exterior', 17, NULL, NULL, 0, 0),
(17, NULL, '2018-04-23 17:25:19', '2018-04-23 17:25:19', 4, 'Lunes - 23/04/2018', 1, 'Prueba OBservacion', 8, NULL, NULL, 0, 0),
(18, NULL, '2018-05-14 02:00:46', '2018-05-14 02:00:46', 4, 'Domingo - 13/05/2018', 0, 'asdasd', 6, NULL, NULL, 0, NULL),
(19, NULL, '2018-05-14 02:01:22', '2018-05-14 02:01:22', 5, 'Viernes - 04/05/2018', 0, 'asdsda', 6, NULL, NULL, 0, NULL),
(20, NULL, '2018-05-14 02:01:33', '2018-05-14 02:01:33', 4, 'Domingo - 13/05/2018', 0, 'asasdsa', 6, NULL, NULL, 0, NULL),
(21, NULL, '2018-05-14 02:02:36', '2018-05-14 02:02:36', 4, 'Domingo - 13/05/2018', 0, 'asdasdasd', 6, NULL, NULL, 0, NULL),
(22, NULL, '2018-05-14 02:03:21', '2018-05-14 02:03:21', 4, 'Viernes - 25/05/2018', 0, 'asdasdads', 6, NULL, NULL, 0, NULL),
(23, NULL, '2018-05-14 02:03:54', '2018-05-14 02:03:54', 4, 'Viernes - 11/05/2018', 0, 'asdsadasd', 6, NULL, NULL, 0, 1),
(24, NULL, '2018-05-14 02:04:20', '2018-05-14 02:04:20', 5, 'Domingo - 20/05/2018', 0, 'Prueba 1', 6, NULL, NULL, 0, 1),
(25, NULL, '2018-05-14 02:04:40', '2018-05-14 02:04:40', 4, 'Miercoles - 16/05/2018', 0, 'Prueba 1', 6, NULL, NULL, 0, 123),
(26, NULL, '2018-05-14 02:05:14', '2018-05-14 02:05:14', 4, 'Miercoles - 16/05/2018', 0, 'Prueba 1', 6, NULL, NULL, 0, 123),
(27, NULL, '2018-05-14 02:07:13', '2018-05-14 02:07:13', 4, NULL, 0, 'asdsa', 6, NULL, NULL, 0, 1),
(28, NULL, '2018-05-14 02:08:03', '2018-05-14 02:08:03', 4, NULL, 0, 'asdsad', 6, 'Sábado - 12/05/2018', 'Domingo - 27/05/2018', 0, 1),
(29, NULL, '2018-05-14 02:09:16', '2018-05-14 02:09:16', 4, NULL, 0, 'as', 6, 'Domingo - 13/05/2018', 'Domingo - 13/05/2018', NULL, 1),
(30, NULL, '2018-05-14 02:10:08', '2018-05-14 02:10:08', 4, NULL, 0, 'asd', 6, 'Domingo - 13/05/2018', 'Domingo - 13/05/2018', NULL, 1),
(31, NULL, '2018-05-14 02:12:05', '2018-05-14 02:12:05', 4, NULL, 0, NULL, 6, 'Domingo - 13/05/2018', 'Domingo - 27/05/2018', NULL, 12),
(32, NULL, '2018-05-14 02:13:53', '2018-05-14 02:13:53', 4, NULL, 0, 'prueba multiples ausencias', 6, 'Domingo - 13/05/2018', 'Domingo - 13/05/2018', NULL, 5),
(33, NULL, '2018-05-14 02:14:41', '2018-05-14 02:14:41', 4, NULL, 0, NULL, 6, 'Jueves - 10/05/2018', 'Domingo - 13/05/2018', NULL, 1),
(34, NULL, '2018-05-14 02:15:10', '2018-05-14 02:15:10', 4, NULL, 0, NULL, 6, 'Jueves - 31/05/2018', 'Lunes - 28/05/2018', 1, 1),
(35, NULL, '2018-05-14 02:19:50', '2018-05-14 02:19:50', 5, NULL, 0, NULL, 6, 'Sábado - 26/05/2018', 'Jueves - 31/05/2018', 1, 4),
(36, NULL, '2018-05-14 02:20:30', '2018-05-14 02:20:30', 5, NULL, 0, NULL, 6, 'Domingo - 13/05/2018', 'Jueves - 31/05/2018', 1, 1),
(37, NULL, '2018-05-14 02:20:57', '2018-05-14 02:20:57', 5, NULL, 0, NULL, 6, 'Martes - 29/05/2018', 'Jueves - 31/05/2018', 1, 12),
(38, NULL, '2018-05-14 05:12:47', '2018-05-14 05:12:47', 4, NULL, 0, 'Sumar 5 faltas', 12, 'Jueves - 17/05/2018', 'Viernes - 25/05/2018', 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condiciones`
--

DROP TABLE IF EXISTS `condiciones`;
CREATE TABLE IF NOT EXISTS `condiciones` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `condiciones`
--

INSERT INTO `condiciones` (`id`, `nombre`, `descripcion`, `deleted_at`) VALUES
(1, 'Permanente', 'Planta Permanente', NULL),
(2, 'Provisorio', 'Planta Especial para algunos empleados', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias_disponibles`
--

DROP TABLE IF EXISTS `dias_disponibles`;
CREATE TABLE IF NOT EXISTS `dias_disponibles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `periodo` int(11) NOT NULL,
  `empleados_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `dias_disponibles_empleados_id_foreign` (`empleados_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias_tomados`
--

DROP TABLE IF EXISTS `dias_tomados`;
CREATE TABLE IF NOT EXISTS `dias_tomados` (
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `empleados_id` int(10) UNSIGNED NOT NULL,
  `cantidad_dias` int(11) DEFAULT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_finalizacion` date NOT NULL,
  `observaciones` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Ninguna',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dias_tomados_empleados_id_foreign` (`empleados_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dias_tomados`
--

INSERT INTO `dias_tomados` (`deleted_at`, `id`, `empleados_id`, `cantidad_dias`, `fecha_inicio`, `fecha_finalizacion`, `observaciones`, `created_at`, `updated_at`) VALUES
(NULL, 2, 4, 13, '2018-04-06', '2018-04-19', 'ads', '2018-04-23 07:19:04', '2018-04-23 07:19:04'),
(NULL, 3, 4, 13, '2018-04-06', '2018-04-19', 'ads', '2018-04-23 07:19:27', '2018-04-23 07:19:27'),
(NULL, 6, 4, 12, '2018-05-13', '2018-05-20', 'asdasd', '2018-05-14 05:19:42', '2018-05-14 05:19:42'),
(NULL, 7, 4, 123, '2018-05-13', '2018-05-27', 'asdsad', '2018-05-14 05:20:32', '2018-05-14 05:20:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `apellido_nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `antiguedad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `situacion_revista` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cargo` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuil` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domicilio` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horario` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `apellido_nombre`, `antiguedad`, `deleted_at`, `created_at`, `updated_at`, `situacion_revista`, `cargo`, `cuil`, `tel`, `domicilio`, `horario`, `area`, `fecha_ingreso`) VALUES
(4, 'Empleado Prueba', '0', NULL, '2018-04-11 13:33:46', '2018-04-11 13:33:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(5, 'Lopez Anibal', '0', NULL, '2018-04-23 07:56:38', '2018-04-23 07:56:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00'),
(7, 'AHUMADA, Eduardo', '0', NULL, NULL, NULL, 'Permanente', 'Director de Coordinación Operativa', '23-12559499-9', '2147483647', 'Gabriel R de azua 3863 B° Urca', '8 a 14 Hs.', 'Mantenimiento', '0000-00-00'),
(8, 'AMARANTO, Larisa', '0', NULL, NULL, NULL, 'Suplente', 'Oficial Superior', '27-33414180-8', '2147483647', 'Sucre 1479 6to \"C\" B° Cofico', 'Rotativo', 'Prensa', '0000-00-00'),
(9, 'AMUCHASTEGUI, Luis', '0', NULL, NULL, NULL, 'Permanente', 'Ayudante', '20-14293631-4', '2147483647', 'Carlos Pellegrini 1626 S Vicente', '9 a 15 Hs.', 'Mantenimiento', '0000-00-00'),
(10, 'ANZAUDO, Darío Gastón', '0', NULL, NULL, NULL, 'Locación de Servicios', 'UNICEF', '31450209', '2147483647', 'Leonor de Tejeda 1670 B° Juniors', '10 a 18 Hs.', 'UNICEF', '0000-00-00'),
(11, 'AVILA, Manuela', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 5', '30969794', '2147483647', 'Juan XXIII 285 B° Romenville', 'Rotativo', 'Promoción', '0000-00-00'),
(12, 'BREMBILLA, Sofía Soledad', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 5', '27-34601779-7', '2147483647', 'Río Turbio 1516 Residencial Sur', '8 a 14 Hs.', 'Promoción', '0000-00-00'),
(13, 'BROCHERO KAISER, Carla Yanina', '0', NULL, NULL, NULL, 'Permanente', 'Supervisor', '30970348', '2147483647', 'Miradores de manantiales M 391 Lote 4 Duplex \"A\"', 'Rotativo', 'Legales', '0000-00-00'),
(14, 'BRONDINO, Alejandro', '0', NULL, NULL, NULL, 'Locación de Servicios', 'UNICEF', '35528224', '2147483647', 'Santiago Cáceres 2306 Colinas Velez Sarfield', 'Rotativo', 'UNICEF', '0000-00-00'),
(15, 'BURGOS, Juan Alejandro', '0', NULL, NULL, NULL, 'Pase en Comisión', 'Pase en Comisión', '27656986', '2147483647', 'Castelar 611 B° Alta Córdoba', 'Rotativo', 'Redes', '0000-00-00'),
(16, 'CARO, Martín', '0', NULL, NULL, NULL, 'Permanente', 'Auxiliar Encargado', '20-24094057-5', '2147483647', 'Psje Río Carcaraña 1411 B° Altamira', '8 a 14 Hs.', 'Mantenimiento', '0000-00-00'),
(17, 'CARREÑO, Dante Omar', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 7', '20-17841939-1', '2147483647', 'Ramon Barrera 6615 B° Inaudi', 'Rotativo', 'Chofer', '0000-00-00'),
(18, 'CASTILLO, Guillermo Gustavo', '0', NULL, NULL, NULL, 'Locación de Servicios', 'UNICEF', '23379360', '2147483647', '', 'Rotativo', 'UNICEF', '0000-00-00'),
(19, 'CORDOBA GENER, María Paulina', '0', NULL, NULL, NULL, 'Locación de Servicios', 'UNICEF', '28428579', '2147483647', 'Muahina 7137 B° el Refugio', 'Rotativo', 'UNICEF', '0000-00-00'),
(20, 'DI COLA, Celina', '0', NULL, NULL, NULL, 'Locación de Servicios', 'UNICEF', '28579575', '2147483647', 'Torre Molinos210 Villa Allende', 'Rotativo', 'UNICEF', '0000-00-00'),
(21, 'HAIRABEDIAN, Juan Gregorio', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 3', '20-38985465-5', '2147483647', 'M7 Lote26 B° Fincas del Sur', '12 a 18 HS.', 'Administración', '0000-00-00'),
(22, 'JAIMOVICH, Jeremías', '0', NULL, NULL, NULL, 'Permanente', 'Ayudante', '20-32926598-7', '2147483647', 'Carcano 1005 B° Balcones del Chateau', '8 a 14 Hs.', 'Administración', '0000-00-00'),
(23, 'JIMENEZ LOPEZ, Milagros', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 5', '27-39620094-0', '2147483647', '24 d Septiembre 1516 2do \"A\"', 'Rotativo', 'Promoción', '0000-00-00'),
(24, 'LOPEZ CARUSILLO, María Nelida', '0', NULL, NULL, NULL, 'Suplente', 'Oficial Superior', '27-12333584-3', '2147483647', 'David Luque 276 1ro \"E\" B° Gral Paz', 'Rotativo', 'Legales', '0000-00-00'),
(25, 'LOPEZ MENSAQUE, Belén', '0', NULL, NULL, NULL, 'Pasantía', 'Pasante', '39689403', '2147483647', 'Gay Lusac 7359 Villa Belgrano', 'Rotativo', 'Prensa', '0000-00-00'),
(26, 'LOPEZ, Amelia', '0', NULL, NULL, NULL, 'Permanente', 'Defensora de los Niños', '27-13150044-6', '2147483647', 'Pasaje Lituania 1875 Gral Paz', 'Rotativo', 'Defensora', '0000-00-00'),
(27, 'MARTINEZ, Gloria Imelda', '0', NULL, NULL, NULL, 'Pase en Comisión', 'Pase en Comisión', '27-16082184-7', '2147483647', 'Bv de los Ingleses 6120 B° Los Boulevares', '8 a 14 Hs.', 'Administración', '0000-00-00'),
(28, 'MASSARI, Fanny', '0', NULL, NULL, NULL, 'Permanente', 'Directora de Legales', '27-16508860-9', '2147483647', 'Río Turbio 1516 Residencial Sur', 'Rotativo', 'Legales', '0000-00-00'),
(29, 'MATAIX, María Victoria', '0', NULL, NULL, NULL, 'Permanente', 'Oficial', '27-41815085-3', '2147483647', 'Tabor 2245 B° Residencial San Carlos', '8 a 14 Hs.', 'Defensora', '0000-00-00'),
(30, 'MATHEU, Giselle', '0', NULL, NULL, NULL, 'Permanente', 'Oficial Defensoría', '27-32124020-3', '2147483647', 'Andres de Ceballos N° 3530', 'Rotativo', 'Legales', '0000-00-00'),
(31, 'MAUCE BARAZZATTO, Agustina Oliva', '0', NULL, NULL, NULL, 'Pasantía', 'Pasante', '38646435', '2147483647', '27 de Abril 4231 Block 9 Dto 9 B° San Salvador', 'Rotativo', 'Prensa', '0000-00-00'),
(32, 'MAZZUCHI, Franco Mariano', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 3', '20-34227032-9', '3541', 'Reguinoa 209 B° Quebrada de las Rosas', '10 a 16 Hs.', 'Administración', '0000-00-00'),
(33, 'MURÚA, Daniela Emilce', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 5', '27-25610590-1', '2147483647', 'Cuchi Leguizamon 1203, Cosquin', '8 a 14 Hs.', 'SUAC', '0000-00-00'),
(34, 'NORIEGA, Isabel ', '0', NULL, NULL, NULL, 'Suplente', 'Directora de Administración', '27-14747267-1', '2147483647', 'Pedro Cavia 8285, B° Poeta Lugones', 'Rotativo', 'Administración', '0000-00-00'),
(35, 'PAEZ, Jose Ignacio', '0', NULL, NULL, NULL, 'Locación de Servicios', 'UNICEF', '34689191', '2147483647', 'Luis Savedra 3951 Dto 7 B° Libertad', 'Rotativo', 'UNICEF', '0000-00-00'),
(36, 'PEDERNERA, Edith', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 5', '27-23105604-7', '2147483647', 'Francisco del Prado 3353 B° Gral Mosconi', '12 a 18 HS.', 'SUAC', '0000-00-00'),
(37, 'PERALTA, Vanesa Paola', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 7', '27361416290', '2147483647', 'Carabajal y Saravia 4057 B° Jose Ignacio Díaz II', '9 a 15 Hs.', 'Cocina', '0000-00-00'),
(38, 'PISCITELLI, Silvana', '0', NULL, NULL, NULL, 'Permanente', 'Jefe de Departamento de Promoción', '24691677', '2147483647', '27 de Abril 706 Planta Alta B° Alberdi', 'Rotativo', 'Promoción', '0000-00-00'),
(39, 'RIVAROLA, Graciela', '0', NULL, NULL, NULL, 'Permanente', 'Ayudante', '27-23460065-1', '2147483647', 'William Brag M346 Casa 8 B! Ituzaingo', '8 a 14 Hs.', 'Cocina', '0000-00-00'),
(40, 'ROBLEDO, Melisa', '0', NULL, NULL, NULL, 'Permanente', 'Oficial', '27-31056082-6', '2147483647', 'Ocampo 266 6to \"C\" B° Gral Paz', 'Rotativo', 'Promoción', '0000-00-00'),
(41, 'ROJAS, Bartolome', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 5', '20-32745824-9', '2147483647', 'Mauricio Fragueiro 1290 Depto 4', 'Rotativo', 'Promoción', '0000-00-00'),
(42, 'SANCHES, María Estela', '0', NULL, NULL, NULL, 'Suplente', 'Ayudante', '23-23197092-4', '2147483647', 'Ramón Barrera 6615 B° Inaudi', '14 a 18 Hs.', 'Cocina', '0000-00-00'),
(43, 'SCIACCA, Florencia', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 5', '27-39072850-1', '2147483647', 'Independencia 790 2do \"D\"', '8 a 14 Hs.', 'Administración', '0000-00-00'),
(44, 'SERRA, Maria Cristina', '0', NULL, NULL, NULL, 'Suplente', 'Oficial ', '27-14747916-1', '2147483647', 'Cabana 3238 B° Parque San Carlos ', '8 a 14 Hs.', 'Administración', '0000-00-00'),
(45, 'SPINOTTI, Alejandro', '0', NULL, NULL, NULL, 'Permanente', 'Jefe de Deparmaneto de Control y Obs.', '20-18018547-0', '2147483647', 'Juan Delebert 5640 B° Villa Belgrano', '8 a 14 Hs.', 'Legales', '0000-00-00'),
(46, 'STIMOLO, Luis Facundo', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 3', '20-32925751-8', '2147483647', 'Jacinto Rios 1145 B° Pueyrredon', 'Rotativo', 'Legales', '0000-00-00'),
(47, 'TAPIA, Mónica Graciela', '0', NULL, NULL, NULL, 'Pase en Comisión', 'Pase en Comisión', '20514152', '2147483647', 'La posta 2916 B° Alto Verde', '12 a 18 HS.', 'Legales', '0000-00-00'),
(48, 'TAVELLA, Georgina', '0', NULL, NULL, NULL, 'Pase en Comisión', 'Pase en Comisión', '29275923', '2147483647', 'Leonor de Tejeda 1670 B° Juniors', 'Rotativo', 'Promoción', '0000-00-00'),
(49, 'TRILLO, GUADALUPE', '0', NULL, NULL, NULL, 'Pase en Comisión', 'Pase en Comisión', '¡?¡?¡?', '0', '!?!?!?!?', '!?!?!?!?', '!?!?!', '0000-00-00'),
(50, 'VALENTINI, Jessica', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 1', '14622075', '2147483647', 'Lavalleja 59 8vo \"A\" - Centro', 'Rotativo', 'Coordinadora', '0000-00-00'),
(51, 'VIAL, María Fernanda', '0', NULL, NULL, NULL, 'Contratado', 'Administrativo Nivel 5', '27-17845021-8', '2147483647', 'Antonio del Viso 319 B° Alta Córdoba', 'Rotativo', 'Promoción', '0000-00-00'),
(52, 'VILLADA, Gabriela', '0', NULL, NULL, NULL, 'Permanente', 'Jefe de Sección', '18016748', '2147483647', 'Ayacucho 2405 B° Colina de Velez Sarfield', 'Rotativo', 'Prensa', '0000-00-00'),
(53, 'Raul Prueba', '0', NULL, '2018-05-14 06:57:13', '2018-05-14 07:14:20', 'Pase en Comisión', 'Directora de Administración', '12312312', '3543640112', 'Salta 110', '09:00 a 18:00', 'Legales', '2018-05-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora_extras`
--

DROP TABLE IF EXISTS `hora_extras`;
CREATE TABLE IF NOT EXISTS `hora_extras` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `empleados_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hora_extras_empleados_id_foreign` (`empleados_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `hora_extras`
--

INSERT INTO `hora_extras` (`id`, `created_at`, `updated_at`, `fecha`, `cantidad`, `empleados_id`) VALUES
(1, '2018-04-23 17:46:44', '2018-04-23 17:46:44', '2018-04-23', 12, 5),
(2, '2018-04-23 18:03:03', '2018-04-23 18:03:03', '2018-04-23', 1, 5),
(3, '2018-04-23 18:03:18', '2018-04-23 18:03:18', '2018-04-27', 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_14_051113_create_empleados_table', 1),
(4, '2018_03_14_051916_create_tipo_ausencias_table', 1),
(5, '2018_03_14_052112_create_ausencias_table', 1),
(6, '2018_03_14_052401_create_asistencias_table', 1),
(7, '2018_03_15_062637_actualizar_fechas', 2),
(8, '2018_03_15_063421_actualizar_tabla_ausencias', 3),
(9, '2018_03_15_063548_act2', 4),
(10, '2018_03_24_232535_update_empleados_table', 5),
(11, '2018_03_25_004808_ausencia_tipo', 6),
(12, '2018_04_11_110954_dias_tomados_migration', 7),
(13, '2018_04_20_044927_create_vacaciones_table', 8),
(14, '2018_04_23_142652_create_hora_extras_table', 8),
(15, '2018_05_02_040623_create_dia_disponibles_table', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_ausencias`
--

DROP TABLE IF EXISTS `tipos_ausencias`;
CREATE TABLE IF NOT EXISTS `tipos_ausencias` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remunerada` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipos_ausencias`
--

INSERT INTO `tipos_ausencias` (`id`, `deleted_at`, `nombre`, `created_at`, `updated_at`, `remunerada`) VALUES
(6, NULL, 'Matrimonio', '2018-03-26 08:01:51', '2018-03-26 08:01:51', 1),
(4, NULL, 'Accidentes de trabajo o enfermedades profesionales', '2018-03-26 07:58:59', '2018-03-26 07:58:59', 1),
(5, NULL, 'Razones de salud', '2018-03-26 07:59:25', '2018-03-26 07:59:25', 1),
(7, NULL, 'Maternidad o guarda para adopción', '2018-03-26 08:01:57', '2018-03-26 08:01:57', 1),
(8, NULL, 'Paternidad', '2018-03-26 08:02:01', '2018-03-26 08:02:01', 1),
(9, NULL, 'Enfermedad grave de familiar a cargo o cuando éste necesite atención permanente del agente', '2018-03-26 08:02:18', '2018-03-26 08:02:18', 1),
(10, NULL, 'Fallecimiento de familiar', '2018-03-26 08:02:26', '2018-03-26 08:02:26', 1),
(11, NULL, 'Examen', '2018-03-26 08:02:40', '2018-03-26 08:02:40', 1),
(12, NULL, 'Cambio de domicilio', '2018-03-26 08:02:48', '2018-03-26 08:02:48', 1),
(13, NULL, 'Donación de sangre, piel u órganos', '2018-03-26 08:02:54', '2018-03-26 08:02:54', 1),
(14, NULL, 'Participación en eventos deportivos no remunerados', '2018-03-26 08:03:00', '2018-03-26 08:03:00', 1),
(15, NULL, 'Razones gremiales', '2018-03-26 08:03:05', '2018-03-26 08:03:05', 1),
(16, NULL, 'Participación en congresos', '2018-03-26 08:03:10', '2018-03-26 08:03:10', 1),
(17, NULL, 'Capacitación', '2018-03-26 08:03:13', '2018-03-26 08:03:13', 1),
(18, NULL, 'Cargos electivos o políticos de mayor jerarquía', '2018-03-26 08:06:56', '2018-03-26 08:06:56', 0),
(19, NULL, 'Razones particulares', '2018-03-26 08:08:02', '2018-03-26 08:08:02', 0),
(20, NULL, 'Representación gremial', '2018-03-26 08:08:09', '2018-03-26 08:08:09', 0),
(21, NULL, 'Enfermedad de familiar a cargo, con licencia remunerada agotada', '2018-03-26 08:08:35', '2018-03-26 08:08:35', 0),
(22, NULL, 'Capacitación', '2018-03-26 08:08:41', '2018-03-26 08:08:41', 0),
(23, NULL, 'Participación en eventos deportivos remunerados', '2018-03-26 08:08:49', '2018-03-26 08:08:49', 0),
(24, NULL, 'Integración del grupo familiar', '2018-03-26 08:09:01', '2018-03-26 08:09:01', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Juan Pablo Paillet', 'pailletjuanpablo@gmail.com', '$2y$10$J5ZjaOxFDMmY7F0aWnIiuu./RCJHEvgRrvDPTTYOHFnlZ/pmoZzEO', 'IGUGQFhnZoP1RBuQZoJwrMhvSnIrSCGoA5eD7iyZzIiCIvjj9riTZwjrf29O', '2018-03-14 08:50:10', '2018-03-14 08:50:10', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacaciones`
--

DROP TABLE IF EXISTS `vacaciones`;
CREATE TABLE IF NOT EXISTS `vacaciones` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
