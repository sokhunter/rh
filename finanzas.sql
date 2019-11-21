/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : finanzas

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2019-11-21 10:05:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cargo
-- ----------------------------
DROP TABLE IF EXISTS `cargo`;
CREATE TABLE `cargo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cargo
-- ----------------------------
INSERT INTO `cargo` VALUES ('1', 'Gerente');
INSERT INTO `cargo` VALUES ('2', 'Analista');
INSERT INTO `cargo` VALUES ('3', 'Asistente');

-- ----------------------------
-- Table structure for costo
-- ----------------------------
DROP TABLE IF EXISTS `costo`;
CREATE TABLE `costo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `monto` float(11,2) NOT NULL,
  `inicial` tinyint(1) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_costo_empresa_id` (`empresa_id`),
  CONSTRAINT `fk_costo_empresa_id` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of costo
-- ----------------------------
INSERT INTO `costo` VALUES ('1', 'Costo I', '100.00', '1', '17');
INSERT INTO `costo` VALUES ('2', 'Costo F', '30.00', '0', '17');
INSERT INTO `costo` VALUES ('3', 'Costo I 1', '20.00', '1', '17');
INSERT INTO `costo` VALUES ('4', 'Costo f', '20.00', '0', '2');
INSERT INTO `costo` VALUES ('6', 'Fotocopias', '5.00', '1', '2');
INSERT INTO `costo` VALUES ('7', 'Portes', '100.00', '0', '2');

-- ----------------------------
-- Table structure for empleado
-- ----------------------------
DROP TABLE IF EXISTS `empleado`;
CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `a_paterno` varchar(255) NOT NULL,
  `a_materno` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_employee_user` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of empleado
-- ----------------------------
INSERT INTO `empleado` VALUES ('3', 'Ana Mario', 'Grados', 'Vazquez');
INSERT INTO `empleado` VALUES ('5', 'Luis', 'Guada', 'Lupe');
INSERT INTO `empleado` VALUES ('8', 'Marco', 'De la Cruz', 'Rojas');
INSERT INTO `empleado` VALUES ('9', 'Renato', 'Livaque', 'Rojas');
INSERT INTO `empleado` VALUES ('11', 'Bryan', 'Cipriano', 'Tarazona');
INSERT INTO `empleado` VALUES ('24', 'nomb', 'appat', 'apmat');
INSERT INTO `empleado` VALUES ('25', 'prueba', 'pri', 'ba');
INSERT INTO `empleado` VALUES ('26', 'prupru', 'pru', 'pru');
INSERT INTO `empleado` VALUES ('32', 'Luis', 'Rodriguez', 'Tapia');
INSERT INTO `empleado` VALUES ('34', 'Nuevo', 'Empleado', 'Prueba');
INSERT INTO `empleado` VALUES ('36', 'emp', 'emp', 'emp');
INSERT INTO `empleado` VALUES ('37', 'Renato', 'Livaque', 'Rojas');

-- ----------------------------
-- Table structure for empresa
-- ----------------------------
DROP TABLE IF EXISTS `empresa`;
CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `razon_social` varchar(255) NOT NULL,
  `direccion` text NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_company_user` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of empresa
-- ----------------------------
INSERT INTO `empresa` VALUES ('2', 'Plaza vea', 'Direccion 563');
INSERT INTO `empresa` VALUES ('4', 'Sevillna', 'dir');
INSERT INTO `empresa` VALUES ('6', 'Empresa bimbo', 'direccion');
INSERT INTO `empresa` VALUES ('7', 'Molitalia', 'direccion');
INSERT INTO `empresa` VALUES ('10', 'Tech', 'direccion');
INSERT INTO `empresa` VALUES ('15', 'empresa raz social', 'direccion dir');
INSERT INTO `empresa` VALUES ('17', 'mobiles rile', 'direccion');
INSERT INTO `empresa` VALUES ('19', 'mobiles rile', 'direccion');
INSERT INTO `empresa` VALUES ('27', 'prueba taza', 'direccion');
INSERT INTO `empresa` VALUES ('29', 'prueba taza', 'direccion');
INSERT INTO `empresa` VALUES ('31', 'prueba taza', 'direccion');
INSERT INTO `empresa` VALUES ('33', 'mobiles rile', 'direccion');
INSERT INTO `empresa` VALUES ('35', 'razon social', 'direccion');

-- ----------------------------
-- Table structure for empresa_empleado
-- ----------------------------
DROP TABLE IF EXISTS `empresa_empleado`;
CREATE TABLE `empresa_empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) DEFAULT NULL,
  `empleado_id` int(11) DEFAULT NULL,
  `cargo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ee_cargo_id` (`cargo_id`),
  KEY `fk_ee_empleado_id` (`empleado_id`),
  KEY `fk_ee_empresa_id` (`empresa_id`),
  CONSTRAINT `fk_ee_cargo_id` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`),
  CONSTRAINT `fk_ee_empleado_id` FOREIGN KEY (`empleado_id`) REFERENCES `empleado` (`id`),
  CONSTRAINT `fk_ee_empresa_id` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of empresa_empleado
-- ----------------------------
INSERT INTO `empresa_empleado` VALUES ('2', '2', '3', '2');
INSERT INTO `empresa_empleado` VALUES ('3', '2', '26', '1');
INSERT INTO `empresa_empleado` VALUES ('5', '2', '9', '1');
INSERT INTO `empresa_empleado` VALUES ('7', '2', '34', '1');
INSERT INTO `empresa_empleado` VALUES ('27', '2', '9', '2');

-- ----------------------------
-- Table structure for moneda
-- ----------------------------
DROP TABLE IF EXISTS `moneda`;
CREATE TABLE `moneda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `simbolo` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of moneda
-- ----------------------------
INSERT INTO `moneda` VALUES ('1', 'Soles', 'S/ ');
INSERT INTO `moneda` VALUES ('2', 'Dolares', '$');

-- ----------------------------
-- Table structure for recibo_honorario
-- ----------------------------
DROP TABLE IF EXISTS `recibo_honorario`;
CREATE TABLE `recibo_honorario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` float(10,2) NOT NULL,
  `retencion` float(10,2) NOT NULL DEFAULT '0.00',
  `tea` float(11,2) DEFAULT NULL,
  `costos_iniciales` float(11,2) DEFAULT NULL,
  `costos_finales` float(11,2) DEFAULT NULL,
  `moneda_id` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `tipo_renta` char(1) NOT NULL,
  `f_emision` date NOT NULL,
  `f_pago` date NOT NULL,
  `f_adelanto` date DEFAULT NULL,
  `observacion` text,
  `neto` float(10,2) DEFAULT NULL,
  `tcea` float(11,2) DEFAULT NULL,
  `empresa_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_fr_currency` (`moneda_id`) USING BTREE,
  KEY `fk_fr_employee` (`empleado_id`) USING BTREE,
  KEY `fk_fr_company` (`empresa_id`) USING BTREE,
  CONSTRAINT `fk_fr_company` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  CONSTRAINT `fk_fr_currency` FOREIGN KEY (`moneda_id`) REFERENCES `moneda` (`id`),
  CONSTRAINT `fk_fr_employee` FOREIGN KEY (`empleado_id`) REFERENCES `empleado` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of recibo_honorario
-- ----------------------------
INSERT INTO `recibo_honorario` VALUES ('1', '1200.00', '10.00', '10.00', null, null, '1', '', 'A', '2019-10-18', '2019-10-25', '2019-10-20', null, '1190.00', '0.00', '2', '3');
INSERT INTO `recibo_honorario` VALUES ('2', '1300.00', '10.00', '10.00', null, null, '1', '', 'A', '2019-10-18', '2019-10-29', null, null, '0.00', '0.00', '4', '3');
INSERT INTO `recibo_honorario` VALUES ('3', '1400.00', '10.00', '10.00', null, null, '1', '', 'A', '2019-10-18', '2019-10-31', '2019-10-25', null, '1390.00', '0.00', '2', '5');
INSERT INTO `recibo_honorario` VALUES ('5', '100.00', '0.00', '10.00', null, null, '1', 'as', 'B', '2019-11-01', '2019-11-12', '2019-11-29', 'as', '100.00', '0.00', '2', '3');
INSERT INTO `recibo_honorario` VALUES ('6', '100.00', '8.00', '10.00', null, null, '1', 'as', 'B', '2019-11-01', '2019-11-12', '2019-11-29', 'as', '92.00', '0.00', '2', '3');
INSERT INTO `recibo_honorario` VALUES ('7', '100.00', '8.00', '10.00', null, null, '1', 'as', 'B', '2019-11-01', '2019-11-12', '2019-11-29', 'as', '92.00', '0.00', '2', '3');
INSERT INTO `recibo_honorario` VALUES ('8', '1500.00', '0.00', '10.00', '120.00', '30.00', '1', 'asd', 'A', '2019-10-30', '2019-11-21', '2019-11-21', '', '1500.00', '0.00', '17', '3');
INSERT INTO `recibo_honorario` VALUES ('9', '1500.00', '0.00', '15.45', '0.00', '0.00', '1', 'descripcion', 'A', '2019-11-21', '2019-11-26', '2019-11-30', '', '0.00', '0.00', '2', '3');
INSERT INTO `recibo_honorario` VALUES ('10', '1500.00', '0.00', '15.45', '0.00', '0.00', '1', 'descripcion', 'A', '2019-11-21', '2019-11-26', '2019-11-30', '', '1454.05', '0.00', '2', '3');
INSERT INTO `recibo_honorario` VALUES ('11', '1700.00', '136.00', '15.45', '0.00', '10.00', '1', 'asasd', 'A', '2019-11-07', '2019-11-12', '2019-11-28', '', '1501.06', '23.64', '2', '3');
INSERT INTO `recibo_honorario` VALUES ('12', '1700.00', '136.00', null, '0.00', '0.00', '1', 'desc', 'A', '2019-11-01', '2019-11-30', '0000-00-00', '', '1564.00', null, '2', '3');
INSERT INTO `recibo_honorario` VALUES ('13', '1800.00', '144.00', '10.00', '0.00', '0.00', '1', 'desc', 'A', '2019-11-01', '2019-11-30', '2019-11-15', '', '1628.85', '12.71', '4', '3');
INSERT INTO `recibo_honorario` VALUES ('14', '1700.00', '136.00', null, '0.00', '0.00', '1', 'desss', 'A', '2019-11-01', '2019-11-30', null, '', '1564.00', null, '4', '3');

-- ----------------------------
-- Table structure for rol
-- ----------------------------
DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rol
-- ----------------------------
INSERT INTO `rol` VALUES ('1', 'admin');
INSERT INTO `rol` VALUES ('2', 'empresa');
INSERT INTO `rol` VALUES ('3', 'empleado');

-- ----------------------------
-- Table structure for tasa_descuento
-- ----------------------------
DROP TABLE IF EXISTS `tasa_descuento`;
CREATE TABLE `tasa_descuento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(11,7) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_td_empresa_id` (`empresa_id`),
  CONSTRAINT `fk_td_empresa_id` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tasa_descuento
-- ----------------------------
INSERT INTO `tasa_descuento` VALUES ('1', '15.4534534', '2');
INSERT INTO `tasa_descuento` VALUES ('2', '10.0000000', '4');
INSERT INTO `tasa_descuento` VALUES ('3', '10.0000000', '6');
INSERT INTO `tasa_descuento` VALUES ('4', '10.0000000', '7');
INSERT INTO `tasa_descuento` VALUES ('5', '10.0000000', '10');
INSERT INTO `tasa_descuento` VALUES ('6', '10.0000000', '15');
INSERT INTO `tasa_descuento` VALUES ('7', '10.0000000', '17');
INSERT INTO `tasa_descuento` VALUES ('8', '10.0000000', '19');
INSERT INTO `tasa_descuento` VALUES ('16', '10.0000000', '27');
INSERT INTO `tasa_descuento` VALUES ('17', '10.0000000', '29');
INSERT INTO `tasa_descuento` VALUES ('18', '10.0000000', '31');
INSERT INTO `tasa_descuento` VALUES ('19', '10.0000000', '33');
INSERT INTO `tasa_descuento` VALUES ('20', '10.0000000', '35');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `rol_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_documento` (`documento`) USING BTREE,
  KEY `fk_user_rol` (`rol_id`),
  CONSTRAINT `fk_user_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '10237865334', null, '1');
INSERT INTO `usuario` VALUES ('2', 'plaza', 'empresa', '21232f297a57a5a743894a0e4a801fc3', '10237865348', null, '2');
INSERT INTO `usuario` VALUES ('3', 'ana', 'empleado', '21232f297a57a5a743894a0e4a801fc3', '23456789', null, '3');
INSERT INTO `usuario` VALUES ('4', 'sevillana', 'empresa1', '', '19237635348', null, '2');
INSERT INTO `usuario` VALUES ('5', 'luis', 'empleado1', '', '12234885344', null, '3');
INSERT INTO `usuario` VALUES ('6', 'bimbo', 'bimboo@hotmail.com', 'c3ce9a8cd42836d9c5cd22ec5b6a683f', '10127865348', null, '2');
INSERT INTO `usuario` VALUES ('7', 'bimbo', 'moli@admin.com', 'c3ce9a8cd42836d9c5cd22ec5b6a683f', '1217488134198', null, '2');
INSERT INTO `usuario` VALUES ('8', 'madero', 'marc@hotmail.com', '4e42dc5ce7f59628bb21039c28c20856', '56337482', null, '3');
INSERT INTO `usuario` VALUES ('9', 'reliro', 'liv@hotmail.com', '76b336a41c8d34c3f10d170af8edeb0e', '72075075', null, '3');
INSERT INTO `usuario` VALUES ('10', 'bimbo', 'sac@hotmail.com', '7920fa2676393faba2cf6b19b96a2344', '22288839456', null, '2');
INSERT INTO `usuario` VALUES ('11', 'brcita', 'bryan@hotmail.com', '3a08b895c59a5ec3fe14349017c8b795', '76348293', null, '3');
INSERT INTO `usuario` VALUES ('15', 'empres', 'raz@hotmail.com', '6c7a073abf9e853252efb7a26d434a10', '123456789009', null, '2');
INSERT INTO `usuario` VALUES ('17', 'mobile', 'josue@hotmail.com', '4d3d93252a7a435242b711cbf71b2129', '23456723456', null, '2');
INSERT INTO `usuario` VALUES ('19', 'mobile', 'josue@hotmail.com', '7d2797366e09c428478e41cbec0e3d64', '23456723452', null, '2');
INSERT INTO `usuario` VALUES ('20', 'noapap', 'nompm@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '12345678', null, '3');
INSERT INTO `usuario` VALUES ('22', 'noapap', 'nompm@hotmail.com', 'c0e5c22fbcba35bfcc27ed6bd3362d3e', '12345674', null, '3');
INSERT INTO `usuario` VALUES ('24', 'noapap', 'nompm@hotmail.com', 'ec0ce0f72b2fd35652800c787e003871', '12345672', null, '3');
INSERT INTO `usuario` VALUES ('25', 'prprba', 'prur@hotmail.com', '87220e0ecccb566a7b0c7da6322e133c', '98765409', null, '3');
INSERT INTO `usuario` VALUES ('26', 'prprpr', 'ba@hotmail.com', 'fbaa62e865f71cafb6d5b5daa57f7eaf', '77638495', null, '3');
INSERT INTO `usuario` VALUES ('27', 'prueba', 'correo@bimbo.com', '10df406cff28fe92aa6f305d03742f19', '28345609231', null, '2');
INSERT INTO `usuario` VALUES ('29', 'prueba', 'correo@bimbo.com', 'c4731235ed752b7fbf3b1f318bdba408', '28345009231', null, '2');
INSERT INTO `usuario` VALUES ('31', 'prueba', 'correo@bimbo.com', 'aeff094d0f400bd5b5cc0813d63c0bef', '28345009233', null, '2');
INSERT INTO `usuario` VALUES ('32', 'lurota', 'lusi@hotmail.com', '8cb4a621789bf3584be26327ac963d1d', '76348294', null, '3');
INSERT INTO `usuario` VALUES ('33', 'mobile', 'josue@hotmail.com', '579436acaefc7f3e938683303aa22dde', '10127865343', null, '2');
INSERT INTO `usuario` VALUES ('34', 'nuempr', 'emp@hotmail.com', '32f618a3d661282dabe8d3fd5277740a', '0220304', null, '3');
INSERT INTO `usuario` VALUES ('35', 'razon', 'correo@bimbo.com', 'd2848cd318f2eb68066e14c1c77c626f', '0023945738', null, '2');
INSERT INTO `usuario` VALUES ('36', 'emp', 'emp@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '23456756', null, '3');
INSERT INTO `usuario` VALUES ('37', 'reliro', 'liv@hotmail.com', 'ec13703192c067e21da571fd518beefe', '72075070', null, '3');
