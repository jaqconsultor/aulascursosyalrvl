-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for orthoreport
USE `orthoreport`;

-- Dumping structure for table orthoreport.antecedentes
CREATE TABLE IF NOT EXISTS `antecedentes` (
  `codantecedente` varchar(4) DEFAULT NULL,
  `descripcion` varchar(40) DEFAULT NULL,
  `codtipo` varchar(2) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=310 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `sysopciones` (
  `id` bigint(20) NOT NULL,
  `sistema_id` bigint(20) UNSIGNED DEFAULT NULL,
  `caso` varchar(50) DEFAULT NULL,
  `contexto` varchar(50) DEFAULT NULL,
  `modulo` varchar(50) DEFAULT NULL,
  `menu` varchar(50) DEFAULT NULL,
  `submenu` varchar(50) DEFAULT NULL,
  `ordernum` int(11) DEFAULT NULL,
  `ruta` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `title` varchar(50) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sysopciones`
--

INSERT INTO `sysopciones` (`id`, `sistema_id`, `caso`, `contexto`, `modulo`, `menu`, `submenu`, `ordernum`, `ruta`, `icon`, `activo`, `title`, `imagen`, `created_at`, `updated_at`, `role`) VALUES
(1, 1, NULL, 'MenuTurbo', 'Archivo', 'Archivo', 'Pacientes', 2, '/tablas/verlistpacientes', '/bootstrap-icons/icons/menu-app.svg', 0, NULL, NULL, NULL, NULL, 'user'),
(3, NULL, NULL, 'MenuTurbo', 'De Usuarios', 'De Usuarios', 'Ver Usuarios', 2, '/usuarios/verlistusuarios', '', 0, NULL, NULL, NULL, NULL, 'user'),
(4, NULL, NULL, 'MenuTurbo', 'De Usuarios', 'De Usuarios', 'Ver Roles De Usuario', 1, '/usuarios/verlistroles', NULL, 1, NULL, NULL, NULL, NULL, 'user'),
(6, 1, NULL, 'MenuTurbo', 'Archivo', 'Archivo', 'Empresas / Seguros', NULL, '/tablas/empresas', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(7, 1, NULL, 'MenuTurbo', 'Archivo', 'Archivo', 'Especialidades Medicas', NULL, '/tablas/especialdades', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(8, 1, NULL, 'MenuTurbo', 'Archivo', 'Archivo', 'Motivos de Consulta', NULL, '/tablas/motivosdeconsulta', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(9, 1, NULL, 'MenuTurbo', 'Cita', 'Cita', 'Razon de Cita', NULL, '/citas/vercitas', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(10, 1, NULL, 'MenuTurbo', 'Archivo', 'Archivo', 'Diagnosticos', NULL, '/tablas/diagnosticos', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(11, 1, NULL, 'MenuTurbo', 'Archivo', 'Archivo', 'Tipos de Estudio', NULL, '/tablas/tiposdeestudio', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(12, 1, NULL, 'MenuTurbo', 'Archivo', 'Archivo', 'Antecedentes', NULL, '/tablas/antecedentes', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(13, 1, NULL, 'MenuTurbo', 'Archivo', 'Archivo', 'Medicos', NULL, '/tablas/medicos', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(14, 1, NULL, 'MenuTurbo', 'Archivo', 'Archivo', 'Vademecum', NULL, '/tablas/vademecum', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(15, 1, NULL, 'MenuTurbo', 'Archivo', 'Archivo', 'Clinicas/Hospitales', NULL, '/tablas/clinicas', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(16, 1, NULL, 'MenuTurbo', 'Archivo', 'Archivo', 'Ver Plantillas', NULL, '/tablas/plantillas', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(17, 1, NULL, 'MenuTurbo', 'Archivo', 'Archivo', 'Tratamientos', NULL, '/tablas/tratamientos', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(18, 1, NULL, 'MenuTurbo', 'Cita', 'Cita', 'Pacientes de Hoy Sin Atender', NULL, '/citas/vercitas', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(19, 1, NULL, 'MenuTurbo', 'Cita', 'Cita', 'Hacer una Cita', NULL, '/tablas/pacientesparahoy', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(20, 1, NULL, 'MenuTurbo', 'Consultas', 'Consultas', 'Ver Consultas Medicas', NULL, '/tablas/consultasmedicas', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(21, 1, NULL, 'MenuTurbo', 'De Usuarios', 'De Usuarios', 'Asignar Roles', NULL, '/usuarios/asignarroles', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(22, 1, NULL, 'MenuTurbo', 'Reportes', 'Reportes', 'Reporte 1', NULL, '/reportes/verreporte1', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(23, 1, NULL, 'MenuTurbo', 'Reportes', 'Reportes', 'Reporte 2', NULL, '/reportes/verreporte1', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(24, 1, NULL, 'MenuTurbo', 'Reportes', 'Reportes', 'Reporte 3', NULL, '/reportes/verreporte1', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(25, 1, NULL, 'MenuTurbo', 'Graficos', 'Graficos', 'Grafico 1', NULL, '/graficos/vergrafico1', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(26, 1, NULL, 'MenuTurbo', 'Graficos', 'Graficos', 'Grafico 2', NULL, '/graficos/vergrafico1', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(27, 1, NULL, 'MenuTurbo', 'Graficos', 'Graficos', 'Grafico 3', NULL, '/graficos/vergrafico1', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(28, 1, NULL, 'MenuTurbo', 'Administracion', 'Administracion', 'Presupuesto', NULL, '/administracion/veradministracion1', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(29, 1, NULL, 'MenuTurbo', 'Administracion', 'Administracion', 'Facturar', NULL, '/administracion/veradministracion1', NULL, 0, NULL, NULL, NULL, NULL, 'user'),
(30, 1, NULL, 'MenuTurbo', 'Administracion', 'Administracion', 'Elementos de Facturacion', NULL, '/administracion/veradministracion1', NULL, 0, NULL, NULL, NULL, NULL, 'user');

-- --------------------------

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.antece_paciente
CREATE TABLE IF NOT EXISTS `antece_paciente` (
  `numhistoria` int(11) DEFAULT NULL,
  `codeantecedente` varchar(4) DEFAULT NULL,
  `detalles` mediumtext DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `tipo` varchar(2) DEFAULT NULL,
  `tipo2` varchar(1) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.bancos
CREATE TABLE IF NOT EXISTS `bancos` (
  `cod_banco` varchar(6) DEFAULT NULL,
  `nombre_banco` varchar(150) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.baremo_quiru
CREATE TABLE IF NOT EXISTS `baremo_quiru` (
  `consecuti` int(11) DEFAULT NULL,
  `cod_inter` varchar(3) DEFAULT NULL,
  `cod_clini` varchar(3) DEFAULT NULL,
  `ced_paciente` varchar(8) DEFAULT NULL,
  `nom_interven` varchar(300) DEFAULT NULL,
  `nom_paciente` varchar(200) DEFAULT NULL,
  `fecha_creado` datetime DEFAULT NULL,
  `fecha_opera` datetime DEFAULT NULL,
  `hora_opera` time DEFAULT NULL,
  `monto_opera` double DEFAULT NULL,
  `tipo_rol` varchar(1) DEFAULT NULL,
  `pagada` varchar(1) DEFAULT NULL,
  `medico_prin` int(11) DEFAULT NULL,
  `medico_aux` int(11) DEFAULT NULL,
  `historia` int(11) DEFAULT NULL,
  `diagnostico` varchar(100) DEFAULT NULL,
  `monto_abono` double DEFAULT NULL,
  `monto_resta` double DEFAULT NULL,
  `empre` varchar(30) DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `codigo` varchar(10) DEFAULT NULL,
  `categoria` varchar(200) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.clinicas
CREATE TABLE IF NOT EXISTS `clinicas` (
  `cod_clin` varchar(3) DEFAULT NULL,
  `nom_clin` varchar(50) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.cola
CREATE TABLE IF NOT EXISTS `cola` (
  `fecha` datetime DEFAULT NULL,
  `numhistoria` int(11) DEFAULT NULL,
  `numorden` int(11) DEFAULT NULL,
  `atendido` bigint(1) DEFAULT NULL,
  `estado` bigint(1) DEFAULT NULL,
  `turno` varchar(1) DEFAULT NULL,
  `motivo` varchar(30) DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `tiempo` int(11) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `conse` int(11) DEFAULT NULL,
  `sms` varchar(1) DEFAULT NULL,
  `sms_text` varchar(160) DEFAULT NULL,
  `medico` int(11) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=877 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.cola_dia_no_labor
CREATE TABLE IF NOT EXISTS `cola_dia_no_labor` (
  `dia` datetime DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `motivo` varchar(100) DEFAULT NULL,
  `medico` int(11) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.constancia_obs
CREATE TABLE IF NOT EXISTS `constancia_obs` (
  `numhistoria` int(11) DEFAULT NULL,
  `numconsulta` int(11) DEFAULT NULL,
  `observacion` mediumtext DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `observacion01` mediumtext DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=585 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.consultas
CREATE TABLE IF NOT EXISTS `consultas` (
  `numhistoria` int(11) DEFAULT NULL,
  `nroconsulta` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `enfermedadactual` mediumtext DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `talla` double DEFAULT NULL,
  `fc` double DEFAULT NULL,
  `pp` double DEFAULT NULL,
  `circcefalica` double DEFAULT NULL,
  `circtoraxica` double DEFAULT NULL,
  `circabdominal` double DEFAULT NULL,
  `tasentado` varchar(7) DEFAULT NULL,
  `taacostado` varchar(7) DEFAULT NULL,
  `tapie` varchar(7) DEFAULT NULL,
  `resultadoexamencomp` mediumtext DEFAULT NULL,
  `eliminado` varchar(1) DEFAULT NULL,
  `faringe` mediumtext DEFAULT NULL,
  `nariz` mediumtext DEFAULT NULL,
  `oido` mediumtext DEFAULT NULL,
  `laringe` mediumtext DEFAULT NULL,
  `cuello` mediumtext DEFAULT NULL,
  `otros` mediumtext DEFAULT NULL,
  `evolucion` mediumtext DEFAULT NULL,
  `observaciones` mediumtext DEFAULT NULL,
  `medico` int(11) DEFAULT NULL,
  `receta` mediumtext DEFAULT NULL,
  `receta_indi` mediumtext DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=587 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.consultorios
CREATE TABLE IF NOT EXISTS `consultorios` (
  `codigo` varchar(10) DEFAULT NULL,
  `consultorio` varchar(100) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.cuentas_x_pagar
CREATE TABLE IF NOT EXISTS `cuentas_x_pagar` (
  `nro_cxp` double DEFAULT NULL,
  `origen_cxp` varchar(2) DEFAULT NULL,
  `fec_cxp` datetime DEFAULT NULL,
  `edo_cxp` varchar(1) DEFAULT NULL,
  `tipo_cxp` varchar(1) DEFAULT NULL,
  `conc_cxp` varchar(4) DEFAULT NULL,
  `cxp_codigo` varchar(20) DEFAULT NULL,
  `cxp_descripcion` varchar(150) DEFAULT NULL,
  `fec_docum` datetime DEFAULT NULL,
  `cxp_nro_control` varchar(25) DEFAULT NULL,
  `cxp_nro_factura` varchar(25) DEFAULT NULL,
  `cxp_referencia` varchar(25) DEFAULT NULL,
  `cxp_mto_neto` double DEFAULT NULL,
  `cxp_ret_isrl` double DEFAULT NULL,
  `cxp_m_ret_isrl` double DEFAULT NULL,
  `cxp_iva` double DEFAULT NULL,
  `cxp_mto_iva` double DEFAULT NULL,
  `cxp_mto_total` double DEFAULT NULL,
  `cxp_ret_iva` double DEFAULT NULL,
  `cxp_m_ret_iva` double DEFAULT NULL,
  `cxp_mto_total_pagar` double DEFAULT NULL,
  `cxp_saldo_a_pagar` double DEFAULT NULL,
  `cxp_chekear` varchar(1) DEFAULT NULL,
  `cxp_forma` varchar(1) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.cuentas_x_pagar_mov
CREATE TABLE IF NOT EXISTS `cuentas_x_pagar_mov` (
  `nro_registro` double DEFAULT NULL,
  `nro_cxp` double DEFAULT NULL,
  `nro_mov` double DEFAULT NULL,
  `fecha_emision` datetime DEFAULT NULL,
  `nro_documento` varchar(100) DEFAULT NULL,
  `tip_documento` varchar(2) DEFAULT NULL,
  `monto_pagar` double DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.department
CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` int(11) DEFAULT NULL,
  `dept_name` varchar(40) DEFAULT NULL,
  `dept_head_id` int(11) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.detalles_factura_cliente
CREATE TABLE IF NOT EXISTS `detalles_factura_cliente` (
  `cod_inventario` varchar(2) DEFAULT NULL,
  `numfactura` int(11) DEFAULT NULL,
  `tipo_articulo` varchar(25) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `descuento` double DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha_doc` datetime DEFAULT NULL,
  `tipo_precio` varchar(3) DEFAULT NULL,
  `total_articulo` double DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.detalles_presupuesto_plantilla
CREATE TABLE IF NOT EXISTS `detalles_presupuesto_plantilla` (
  `cod_inventario` varchar(2) DEFAULT NULL,
  `consecutivo` int(11) DEFAULT NULL,
  `tipo_articulo` varchar(25) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `descuento` double DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha_doc` datetime DEFAULT NULL,
  `tipo_documento` varchar(3) DEFAULT NULL,
  `total_articulo` double DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.diagnosticos
CREATE TABLE IF NOT EXISTS `diagnosticos` (
  `codediagnostico` varchar(5) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1060 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.diagnostico_paciente
CREATE TABLE IF NOT EXISTS `diagnostico_paciente` (
  `nrohistoria` int(11) DEFAULT NULL,
  `nroconsulta` int(11) DEFAULT NULL,
  `codediagnostico` varchar(5) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=235 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.dias_semana
CREATE TABLE IF NOT EXISTS `dias_semana` (
  `fecha` datetime DEFAULT NULL,
  `dia_semana` varchar(10) DEFAULT NULL,
  `semana` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `tipo_dia` varchar(10) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.doctores
CREATE TABLE IF NOT EXISTS `doctores` (
  `cedula` bigint(15) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `nombres` varchar(30) DEFAULT NULL,
  `clinica` varchar(60) DEFAULT NULL,
  `direccion` mediumtext DEFAULT NULL,
  `telefono` varchar(108) DEFAULT NULL,
  `ciudad` varchar(30) DEFAULT NULL,
  `nota` mediumtext DEFAULT NULL,
  `codeespecial` varchar(3) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.emision_pagos
CREATE TABLE IF NOT EXISTS `emision_pagos` (
  `nro_emision` double DEFAULT NULL,
  `fecha_emision` datetime DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `cod_banco` varchar(6) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `monto_pagar` double DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.emision_pagos_detalle
CREATE TABLE IF NOT EXISTS `emision_pagos_detalle` (
  `nro_registro` double DEFAULT NULL,
  `nro_emision` double DEFAULT NULL,
  `nro_cxp` double DEFAULT NULL,
  `nro_mov` double DEFAULT NULL,
  `origen_cxp` varchar(2) DEFAULT NULL,
  `cxp_codigo` varchar(20) DEFAULT NULL,
  `cxp_descripcion` varchar(150) DEFAULT NULL,
  `fecha_emision` datetime DEFAULT NULL,
  `nro_documento` varchar(100) DEFAULT NULL,
  `tip_documento` varchar(2) DEFAULT NULL,
  `saldo_pagar` double DEFAULT NULL,
  `monto_pagar` double DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.employee
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(11) DEFAULT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `emp_fname` varchar(30) DEFAULT NULL,
  `emp_lname` varchar(30) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `street` varchar(40) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(4) DEFAULT NULL,
  `zip_code` varchar(9) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `ss_number` varchar(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `termination_date` datetime DEFAULT NULL,
  `birth_date` datetime DEFAULT NULL,
  `bene_health_ins` varchar(1) DEFAULT NULL,
  `bene_life_ins` varchar(1) DEFAULT NULL,
  `bene_day_care` varchar(1) DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.especial
CREATE TABLE IF NOT EXISTS `especial` (
  `codeespecial` varchar(3) DEFAULT NULL,
  `especialidad` varchar(50) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.evolucion
CREATE TABLE IF NOT EXISTS `evolucion` (
  `especialidad` varchar(100) DEFAULT NULL,
  `ciudad` varchar(20) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `linea_1` varchar(90) DEFAULT NULL,
  `linea_2` varchar(90) DEFAULT NULL,
  `linea_3` varchar(90) DEFAULT NULL,
  `lineag_1` varchar(115) DEFAULT NULL,
  `lineag_2` varchar(115) DEFAULT NULL,
  `clave` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `rif` varchar(100) DEFAULT NULL,
  `reporte_vacio` varchar(1) DEFAULT NULL,
  `moneda` varchar(10) DEFAULT NULL,
  `impuesto` varchar(20) DEFAULT NULL,
  `por_impues` double DEFAULT NULL,
  `am_pm` varchar(1) DEFAULT NULL,
  `cantidad_paciente` int(11) DEFAULT NULL,
  `lunes_i` time DEFAULT NULL,
  `lunes_f` time DEFAULT NULL,
  `martes_i` time DEFAULT NULL,
  `martes_f` time DEFAULT NULL,
  `miercoles_i` time DEFAULT NULL,
  `miercoles_f` time DEFAULT NULL,
  `jueves_i` time DEFAULT NULL,
  `jueves_f` time DEFAULT NULL,
  `vienes_i` time DEFAULT NULL,
  `viernes_f` time DEFAULT NULL,
  `sabado_i` time DEFAULT NULL,
  `sabado_f` time DEFAULT NULL,
  `tiempo_paci` int(11) DEFAULT NULL,
  `domingo_i` time DEFAULT NULL,
  `domigo_f` time DEFAULT NULL,
  `lunes` varchar(1) DEFAULT NULL,
  `martes` varchar(1) DEFAULT NULL,
  `miercoles` varchar(1) DEFAULT NULL,
  `jueves` varchar(1) DEFAULT NULL,
  `viernes` varchar(1) DEFAULT NULL,
  `sabado` varchar(1) DEFAULT NULL,
  `domingo` varchar(1) DEFAULT NULL,
  `feriado` varchar(100) DEFAULT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `min_salud` varchar(20) DEFAULT NULL,
  `col_med` varchar(20) DEFAULT NULL,
  `cita_previa` varchar(1) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `cobra_honorarios` varchar(1) DEFAULT NULL,
  `por_cobranza` double DEFAULT NULL,
  `por_retención_seg` double DEFAULT NULL,
  `por_retención_part` double DEFAULT NULL,
  `accionista` varchar(1) DEFAULT NULL,
  `consultorio` varchar(10) DEFAULT NULL,
  `contrasena` varchar(20) DEFAULT NULL,
  `paga_iva` varchar(1) DEFAULT NULL,
  `sms_proveedor` varchar(1) DEFAULT NULL,
  `sms_user` varchar(20) DEFAULT NULL,
  `sms_clave` varchar(20) DEFAULT NULL,
  `sms_cantidad_total` int(11) DEFAULT NULL,
  `sms_telefono_llamada` varchar(30) DEFAULT NULL,
  `sms_sexo_medico` varchar(1) DEFAULT NULL,
  `correo_med` varchar(100) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.examenes
CREATE TABLE IF NOT EXISTS `examenes` (
  `codeexamen` varchar(8) DEFAULT NULL,
  `examen` varchar(100) DEFAULT NULL,
  `codetipo` varchar(10) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.examen_fisico
CREATE TABLE IF NOT EXISTS `examen_fisico` (
  `nrohistoria` int(11) DEFAULT NULL,
  `nroconsulta` int(11) DEFAULT NULL,
  `cardiopulmonal` mediumtext DEFAULT NULL,
  `abdomen` mediumtext DEFAULT NULL,
  `extremidades` mediumtext DEFAULT NULL,
  `otros` mediumtext DEFAULT NULL,
  `electrocardiograma` mediumtext DEFAULT NULL,
  `rx_de_torax` mediumtext DEFAULT NULL,
  `laboratorio` mediumtext DEFAULT NULL,
  `riesgo_operatorio` mediumtext DEFAULT NULL,
  `sugerencias` mediumtext DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=574 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.examen_obs
CREATE TABLE IF NOT EXISTS `examen_obs` (
  `numhistoria` int(11) DEFAULT NULL,
  `numconsulta` int(11) DEFAULT NULL,
  `observacion` mediumtext DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=585 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.examen_paciente
CREATE TABLE IF NOT EXISTS `examen_paciente` (
  `nrohistoria` int(11) DEFAULT NULL,
  `nroconsulta` int(11) DEFAULT NULL,
  `codeexamen` varchar(8) DEFAULT NULL,
  `resultado` varchar(30) DEFAULT NULL,
  `vinculante` varchar(1) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.facturas_compras
CREATE TABLE IF NOT EXISTS `facturas_compras` (
  `id_factura_compra` double DEFAULT NULL,
  `cod_prov` varchar(6) DEFAULT NULL,
  `id_tipo_concepto` varchar(4) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `nro_seniat` varchar(25) DEFAULT NULL,
  `nro_factura` varchar(25) DEFAULT NULL,
  `mto_neto` double DEFAULT NULL,
  `mto_porc_iva` double DEFAULT NULL,
  `mto_iva` double DEFAULT NULL,
  `mto_porc_ret_iva` double DEFAULT NULL,
  `mto_ret_iva` double DEFAULT NULL,
  `mto_porc_ret_isrl` double DEFAULT NULL,
  `mto_ret_isrl` double DEFAULT NULL,
  `mto_total_general` double DEFAULT NULL,
  `nro_cxp` double DEFAULT NULL,
  `mto_total` double DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.facturas_compras_detalle
CREATE TABLE IF NOT EXISTS `facturas_compras_detalle` (
  `id_registro` double DEFAULT NULL,
  `id_fac_prov` varchar(6) DEFAULT NULL,
  `des_concepto` varchar(100) DEFAULT NULL,
  `cantidad` double DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `monto_total` double DEFAULT NULL,
  `id_factura_compra` double DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.factura_cliente
CREATE TABLE IF NOT EXISTS `factura_cliente` (
  `numfactura` int(11) DEFAULT NULL,
  `cedu_rif` varchar(15) DEFAULT NULL,
  `fecha_factura` datetime DEFAULT NULL,
  `fecha_vence_fact` datetime DEFAULT NULL,
  `fecha_cance_fact` datetime DEFAULT NULL,
  `cliente` varchar(2) DEFAULT NULL,
  `status_factura` varchar(1) DEFAULT NULL,
  `tipo_factura` varchar(1) DEFAULT NULL,
  `paciente` varchar(10) DEFAULT NULL,
  `nom_paciente` varchar(60) DEFAULT NULL,
  `tipo_precio` varchar(1) DEFAULT NULL,
  `nro_orden` varchar(10) DEFAULT NULL,
  `total_costo` double DEFAULT NULL,
  `total_neto` double DEFAULT NULL,
  `total_bruto` double DEFAULT NULL,
  `total_final` double DEFAULT NULL,
  `total_descuento` double DEFAULT NULL,
  `descuento_linea` double DEFAULT NULL,
  `notas` mediumtext DEFAULT NULL,
  `hora_documento` time DEFAULT NULL,
  `monto_pac` double DEFAULT NULL,
  `monto_emp` double DEFAULT NULL,
  `numero_consulta` int(11) DEFAULT NULL,
  `numero_historia` int(11) DEFAULT NULL,
  `tipo_doc` varchar(3) DEFAULT NULL,
  `medico` int(11) DEFAULT NULL,
  `nro_cxp` double DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.formato_print
CREATE TABLE IF NOT EXISTS `formato_print` (
  `codigo` varchar(4) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.gsistema
CREATE TABLE IF NOT EXISTS `gsistema` (
  `id_medico` int(11) DEFAULT NULL,
  `nomcorto` varchar(30) DEFAULT NULL,
  `clave` varchar(6) DEFAULT NULL,
  `ulthisto` int(11) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.his_con_pre_factura
CREATE TABLE IF NOT EXISTS `his_con_pre_factura` (
  `id_registro` double DEFAULT NULL,
  `numhistoria` int(11) DEFAULT NULL,
  `nroconsulta` int(11) DEFAULT NULL,
  `codigo` varchar(8) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `cantidad` double DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.hospitalizacion
CREATE TABLE IF NOT EXISTS `hospitalizacion` (
  `nrohistoria` int(11) DEFAULT NULL,
  `nroconsulta` int(11) DEFAULT NULL,
  `diagprev` mediumtext DEFAULT NULL,
  `indiprev` mediumtext DEFAULT NULL,
  `dieta` mediumtext DEFAULT NULL,
  `habitacion` varchar(1) DEFAULT NULL,
  `hospital` varchar(60) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=573 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.imagen_consulta
CREATE TABLE IF NOT EXISTS `imagen_consulta` (
  `nrohistoria` int(11) DEFAULT NULL,
  `nroconsulta` int(11) DEFAULT NULL,
  `observacion` mediumtext DEFAULT NULL,
  `imagen` varchar(256) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.imagen_pacientes
CREATE TABLE IF NOT EXISTS `imagen_pacientes` (
  `nrohistoria` int(11) DEFAULT NULL,
  `imagen` varchar(256) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.implante
CREATE TABLE IF NOT EXISTS `implante` (
  `historia` int(11) DEFAULT NULL,
  `consulta` int(11) DEFAULT NULL,
  `fecha_reporte` datetime DEFAULT NULL,
  `fecha_opera` datetime DEFAULT NULL,
  `diagnostico` mediumtext DEFAULT NULL,
  `plan_operatorio` mediumtext DEFAULT NULL,
  `texto` mediumtext DEFAULT NULL,
  `estabilizada` varchar(1) DEFAULT NULL,
  `componente_femoral` varchar(1) DEFAULT NULL,
  `componente_tibial` varchar(10) DEFAULT NULL,
  `componente_tibial_it` varchar(10) DEFAULT NULL,
  `componente_pastelar` varchar(1) DEFAULT NULL,
  `reque_metilmeticatrilato` varchar(1) DEFAULT NULL,
  `reque_metilmeticatrilato_cant` varchar(10) DEFAULT NULL,
  `reque_steridrape` varchar(1) DEFAULT NULL,
  `reque_steridrape_cant` varchar(10) DEFAULT NULL,
  `reque_coban_esteril` varchar(1) DEFAULT NULL,
  `reque_coban_esteril_cant` varchar(10) DEFAULT NULL,
  `reque_autosutura` varchar(1) DEFAULT NULL,
  `reque_autosutura_cant` varchar(10) DEFAULT NULL,
  `reque_orthopack` varchar(1) DEFAULT NULL,
  `reque_orthopack_cant` varchar(10) DEFAULT NULL,
  `sistema` varchar(100) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `puro_texto` mediumtext DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.informe
CREATE TABLE IF NOT EXISTS `informe` (
  `nrohistoria` int(11) DEFAULT NULL,
  `nroconsulta` int(11) DEFAULT NULL,
  `para` varchar(50) DEFAULT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.intenven_servi
CREATE TABLE IF NOT EXISTS `intenven_servi` (
  `codigo` varchar(3) DEFAULT NULL,
  `nombre` varchar(300) DEFAULT NULL,
  `precio_principal` double DEFAULT NULL,
  `precio_auxiliar` double DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.interven_consulta
CREATE TABLE IF NOT EXISTS `interven_consulta` (
  `historia` int(11) DEFAULT NULL,
  `consulta` int(11) DEFAULT NULL,
  `codigo_inter` varchar(3) DEFAULT NULL,
  `detalle` mediumtext DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.listado
CREATE TABLE IF NOT EXISTS `listado` (
  `tipo` varchar(5) DEFAULT NULL,
  `descripcion_tipo` varchar(30) DEFAULT NULL,
  `segundo` varchar(5) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.motivos_consulta
CREATE TABLE IF NOT EXISTS `motivos_consulta` (
  `codemotivo` varchar(4) DEFAULT NULL,
  `descripcion` varchar(40) DEFAULT NULL,
  `tipo` varchar(2) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=428 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.motivo_cita
CREATE TABLE IF NOT EXISTS `motivo_cita` (
  `codigo` varchar(10) DEFAULT NULL,
  `tipo_atencion` varchar(100) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.motivo_consulta_paciente
CREATE TABLE IF NOT EXISTS `motivo_consulta_paciente` (
  `codemotivo` varchar(4) DEFAULT NULL,
  `nrohistoria` int(11) DEFAULT NULL,
  `nroconsulta` int(11) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.motivo_factura
CREATE TABLE IF NOT EXISTS `motivo_factura` (
  `codigo` varchar(8) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `monto_seg` double DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.motivo_factura_prov
CREATE TABLE IF NOT EXISTS `motivo_factura_prov` (
  `id_fac_prov` varchar(6) DEFAULT NULL,
  `des_concepto` varchar(100) DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.operadores
CREATE TABLE IF NOT EXISTS `operadores` (
  `primera` varchar(15) DEFAULT NULL,
  `segunda` varchar(10) DEFAULT NULL,
  `nonbre` varchar(50) DEFAULT NULL,
  `nivel` varchar(1) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.orden_ingreso
CREATE TABLE IF NOT EXISTS `orden_ingreso` (
  `historia` int(11) DEFAULT NULL,
  `consulta` int(11) DEFAULT NULL,
  `fecha_operacion` datetime DEFAULT NULL,
  `fecha_reporte` datetime DEFAULT NULL,
  `texto` mediumtext DEFAULT NULL,
  `idx` mediumtext DEFAULT NULL,
  `reco_ingresar` varchar(1) DEFAULT NULL,
  `reco_depi` varchar(1) DEFAULT NULL,
  `reco_llevar` varchar(1) DEFAULT NULL,
  `reco_cedroxin` varchar(1) DEFAULT NULL,
  `reco_ejercicios` varchar(1) DEFAULT NULL,
  `reco_terapia` varchar(1) DEFAULT NULL,
  `reco_control` varchar(1) DEFAULT NULL,
  `reco_higiene` varchar(1) DEFAULT NULL,
  `reco_ropa` varchar(1) DEFAULT NULL,
  `reco_tomar` varchar(1) DEFAULT NULL,
  `reco_clexane` varchar(1) DEFAULT NULL,
  `reco_ejercicios_res` varchar(1) DEFAULT NULL,
  `reco_sangre` varchar(1) DEFAULT NULL,
  `reco_avisar` varchar(1) DEFAULT NULL,
  `detalle` mediumtext DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.ortopedia
CREATE TABLE IF NOT EXISTS `ortopedia` (
  `nrohistoria` int(11) DEFAULT NULL,
  `nroconsulta` int(11) DEFAULT NULL,
  `botas` varchar(1) DEFAULT NULL,
  `zapatos` varchar(1) DEFAULT NULL,
  `soporte` varchar(6) DEFAULT NULL,
  `thomas` varchar(8) DEFAULT NULL,
  `normal` varchar(1) DEFAULT NULL,
  `tacon_int` varchar(5) DEFAULT NULL,
  `tacon_ext` varchar(5) DEFAULT NULL,
  `suela_int` varchar(5) DEFAULT NULL,
  `suela_ext` varchar(5) DEFAULT NULL,
  `borde_int_rect` varchar(1) DEFAULT NULL,
  `borde_int_abdu` varchar(1) DEFAULT NULL,
  `suela_normal` varchar(1) DEFAULT NULL,
  `suela_antirres` varchar(1) DEFAULT NULL,
  `aparatos` varchar(20) DEFAULT NULL,
  `observacion` mediumtext DEFAULT NULL,
  `plantilla` varchar(1) DEFAULT NULL,
  `aae` varchar(15) DEFAULT NULL,
  `api` varchar(7) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=585 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `nac` varchar(1) DEFAULT NULL,
  `cedula` varchar(8) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,
  `fnacimiento` datetime DEFAULT NULL,
  `lnacimiento` varchar(30) DEFAULT NULL,
  `codeestado` varchar(1) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `fingreso` datetime DEFAULT NULL,
  `escolaridad` varchar(60) DEFAULT NULL,
  `ocupacion` varchar(60) DEFAULT NULL,
  `codesegemp` varchar(3) DEFAULT NULL,
  `numhistoria` int(11) DEFAULT NULL,
  `foto_pac` varchar(300) DEFAULT NULL,
  `profesion` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dependencia` varchar(30) DEFAULT NULL,
  `medico` int(11) DEFAULT NULL,
  `historia_aa` varchar(10) DEFAULT NULL,
  `categoria` varchar(10) DEFAULT NULL,
  `sms` varchar(1) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=284 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.paciente_no_regi
CREATE TABLE IF NOT EXISTS `paciente_no_regi` (
  `registro` bigint(5) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `motivo` varchar(10) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `medico` int(11) DEFAULT NULL,
  `registrado` varchar(1) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.pago_quiru
CREATE TABLE IF NOT EXISTS `pago_quiru` (
  `cod_pagos` int(11) DEFAULT NULL,
  `consecuti` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `monto_total` double DEFAULT NULL,
  `abono` double DEFAULT NULL,
  `resta` double DEFAULT NULL,
  `pago` varchar(1) DEFAULT NULL,
  `hora_pago` time DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.p_ante
CREATE TABLE IF NOT EXISTS `p_ante` (
  `codante` varchar(4) DEFAULT NULL,
  `codtipo` varchar(2) DEFAULT NULL,
  `descrip` varchar(40) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.p_diagno
CREATE TABLE IF NOT EXISTS `p_diagno` (
  `codiagn` varchar(5) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=401 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.p_epecial
CREATE TABLE IF NOT EXISTS `p_epecial` (
  `codespe` varchar(3) DEFAULT NULL,
  `especiali` varchar(50) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.p_examen
CREATE TABLE IF NOT EXISTS `p_examen` (
  `codexa` varchar(8) DEFAULT NULL,
  `codetip` varchar(10) DEFAULT NULL,
  `examen` varchar(45) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.p_motic
CREATE TABLE IF NOT EXISTS `p_motic` (
  `codmoti` varchar(4) DEFAULT NULL,
  `descrip` varchar(40) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.p_seg
CREATE TABLE IF NOT EXISTS `p_seg` (
  `codeseg` varchar(3) DEFAULT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table orthoreport.p_tipoe
CREATE TABLE IF NOT EXISTS `p_tipoe` (
  `codexam` varchar(10) DEFAULT NULL,
  `descrip` varchar(40) DEFAULT NULL,
  `usercreated_at` varchar(30) DEFAULT NULL,
  `userupdated_at` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
