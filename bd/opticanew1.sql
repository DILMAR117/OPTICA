-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.17-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para opticanew
CREATE DATABASE IF NOT EXISTS `opticanew` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `opticanew`;

-- Volcando estructura para tabla opticanew.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) CHARACTER SET utf8 NOT NULL,
  `apellido_paterno` varchar(25) CHARACTER SET utf8 NOT NULL,
  `apellido_materno` varchar(25) CHARACTER SET utf8 NOT NULL,
  `dir` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telefono` varchar(10) NOT NULL DEFAULT '',
  `sexo` enum('Femenino','Masculino') CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla opticanew.clientes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT IGNORE INTO `clientes` (`id_cli`, `nombre`, `apellido_paterno`, `apellido_materno`, `dir`, `telefono`, `sexo`, `email`) VALUES
	(1, 'dilmar', 'gonzalez', 'hernandez', '12 sureste', '1234567899', 'Masculino', 'Dilmargonzalez@gmail.com'),
	(6, 'olivia', 'rodrigo', 'rodrigo', 'love', '2147483647', 'Femenino', 'paudio@gmail.com'),
	(7, 'neuropath', 'Hernandez', 'Morales', 'asad', '2147483647', 'Masculino', 'kratosedu18@gmail.com');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Volcando estructura para tabla opticanew.empleado
CREATE TABLE IF NOT EXISTS `empleado` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) CHARACTER SET utf8 NOT NULL,
  `apellido_paterno` varchar(25) CHARACTER SET utf8 NOT NULL,
  `apellido_materno` varchar(25) CHARACTER SET utf8 NOT NULL,
  `cargo` enum('Gerente comercial','Gerente de ventas') NOT NULL,
  `telefono` varchar(10) NOT NULL DEFAULT '',
  `sexo` enum('Masculino','Femenino') NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla opticanew.empleado: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT IGNORE INTO `empleado` (`codigo`, `nombre`, `apellido_paterno`, `apellido_materno`, `cargo`, `telefono`, `sexo`, `direccion`) VALUES
	(3, 'sarai', 'navarrete', 'hernandez', 'Gerente comercial', '2147483647', 'Femenino', 'nicaragua'),
	(6, 'Traitor', 'sour', 'sour', 'Gerente comercial', '2147483647', 'Femenino', 'LA');
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;

-- Volcando estructura para tabla opticanew.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `idpro` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `tipo` enum('Contacto','Solares','Oftalmicos') CHARACTER SET utf8 NOT NULL,
  `tipo_armazon` enum('Armazón de plastico','Armazón metalico') CHARACTER SET utf8 NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idpro`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla opticanew.productos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT IGNORE INTO `productos` (`idpro`, `codigo`, `tipo`, `tipo_armazon`, `cantidad`, `precio`, `descripcion`) VALUES
	(23, 1, 'Contacto', 'Armazón de plastico', 1, 1, '1'),
	(31, 12, 'Solares', 'Armazón metalico', 12, 10.5, 'herrramienta');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla opticanew.proveedor
CREATE TABLE IF NOT EXISTS `proveedor` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) CHARACTER SET utf8 NOT NULL,
  `direccion` varchar(25) NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `empresa` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla opticanew.proveedor: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT IGNORE INTO `proveedor` (`codigo`, `nombre`, `direccion`, `telefono`, `correo`, `empresa`) VALUES
	(3, 'ana paola12', 'El porvenir', 2147483647, 'dilmar@gmail.com', 'Optica Solares'),
	(8, 'ewar', 'avenida 12', 1234567890, 'kratosedu18@mail.com', 'cool');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
