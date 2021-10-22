-- --------------------------------------------------------
-- Host:                         192.168.1.72
-- Versión del servidor:         10.4.7-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para bd_sistemly
CREATE DATABASE IF NOT EXISTS `bd_sistemly` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bd_sistemly`;

-- Volcando estructura para tabla bd_sistemly.tbl_cuentas_usuarios
CREATE TABLE IF NOT EXISTS `tbl_cuentas_usuarios` (
  `tcu_cod_cuenta` int(11) NOT NULL AUTO_INCREMENT,
  `tcu_cod_personal` int(11) DEFAULT NULL,
  `tcu_nombre_cuenta` varchar(50) NOT NULL,
  `tcu_clave_cuenta` varchar(50) NOT NULL,
  `tcu_nivel_usuario` int(11) DEFAULT NULL,
  `tcu_fecha_alta` timestamp NOT NULL DEFAULT current_timestamp(),
  `tcu_estado` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`tcu_cod_cuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bd_sistemly.tbl_cuentas_usuarios: ~0 rows (aproximadamente)
DELETE FROM `tbl_cuentas_usuarios`;
/*!40000 ALTER TABLE `tbl_cuentas_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_cuentas_usuarios` (`tcu_cod_cuenta`, `tcu_cod_personal`, `tcu_nombre_cuenta`, `tcu_clave_cuenta`, `tcu_nivel_usuario`, `tcu_fecha_alta`, `tcu_estado`) VALUES
	(1, 1, 'CARLOS MEJIA', '12345', 2, '2020-07-05 01:27:12', 1);
/*!40000 ALTER TABLE `tbl_cuentas_usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla bd_sistemly.tbl_movimientos
CREATE TABLE IF NOT EXISTS `tbl_movimientos` (
  `tm_cod_registro` int(11) NOT NULL AUTO_INCREMENT,
  `tm_ip` varchar(50) DEFAULT NULL,
  `tm_evento` varchar(50) DEFAULT NULL,
  `tm_hora` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`tm_cod_registro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bd_sistemly.tbl_movimientos: ~0 rows (aproximadamente)
DELETE FROM `tbl_movimientos`;
/*!40000 ALTER TABLE `tbl_movimientos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_movimientos` ENABLE KEYS */;

-- Volcando estructura para tabla bd_sistemly.tbl_permisos_sistemly
CREATE TABLE IF NOT EXISTS `tbl_permisos_sistemly` (
  `tps_cod_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `tps_nombre_permiso` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`tps_cod_permiso`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bd_sistemly.tbl_permisos_sistemly: ~0 rows (aproximadamente)
DELETE FROM `tbl_permisos_sistemly`;
/*!40000 ALTER TABLE `tbl_permisos_sistemly` DISABLE KEYS */;
INSERT INTO `tbl_permisos_sistemly` (`tps_cod_permiso`, `tps_nombre_permiso`) VALUES
	(1, 'PRUEBA_1'),
	(2, 'PRUEBA_2'),
	(3, 'PRUEBA_3'),
	(4, 'PRUEBA_4'),
	(5, 'PRUEBA_5');
/*!40000 ALTER TABLE `tbl_permisos_sistemly` ENABLE KEYS */;

-- Volcando estructura para tabla bd_sistemly.tbl_personal
CREATE TABLE IF NOT EXISTS `tbl_personal` (
  `tp_cod_personal` int(11) NOT NULL AUTO_INCREMENT,
  `tp_nombre` varchar(50) NOT NULL,
  `tp_apellidos` varchar(50) NOT NULL,
  `tp_domicilio` text NOT NULL,
  `tp_ocupacion` varchar(50) NOT NULL,
  `tp_telefono` varchar(50) NOT NULL,
  `tp_email` varchar(50) NOT NULL,
  `tp_edad` varchar(50) NOT NULL,
  `tp_condicion` int(11) DEFAULT 1,
  PRIMARY KEY (`tp_cod_personal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bd_sistemly.tbl_personal: ~0 rows (aproximadamente)
DELETE FROM `tbl_personal`;
/*!40000 ALTER TABLE `tbl_personal` DISABLE KEYS */;
INSERT INTO `tbl_personal` (`tp_cod_personal`, `tp_nombre`, `tp_apellidos`, `tp_domicilio`, `tp_ocupacion`, `tp_telefono`, `tp_email`, `tp_edad`, `tp_condicion`) VALUES
	(1, 'CARLOS ALBERTO', 'MEJIA RAMOS', 'ZAPOTITLAN LA CONCHITA 14', 'ESTUDIANTE', '5554897860', 'carlos.ablues@gmail.com', '25', 1);
/*!40000 ALTER TABLE `tbl_personal` ENABLE KEYS */;

-- Volcando estructura para tabla bd_sistemly.tbl_usuario_permiso
CREATE TABLE IF NOT EXISTS `tbl_usuario_permiso` (
  `tup_cod_usuario_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `tup_cod_cuenta` int(11) DEFAULT NULL,
  `tup_cod_permiso` int(11) DEFAULT NULL,
  PRIMARY KEY (`tup_cod_usuario_permiso`),
  KEY `tup_cod_cuenta` (`tup_cod_cuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla bd_sistemly.tbl_usuario_permiso: ~0 rows (aproximadamente)
DELETE FROM `tbl_usuario_permiso`;
/*!40000 ALTER TABLE `tbl_usuario_permiso` DISABLE KEYS */;
INSERT INTO `tbl_usuario_permiso` (`tup_cod_usuario_permiso`, `tup_cod_cuenta`, `tup_cod_permiso`) VALUES
	(1, 1, 1),
	(2, 1, 2),
	(3, 1, 3),
	(4, 1, 4),
	(5, 1, 5);
/*!40000 ALTER TABLE `tbl_usuario_permiso` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
