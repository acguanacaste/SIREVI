-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema sirevi
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sirevi
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sirevi` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `sirevi` ;

-- -----------------------------------------------------
-- Table `sirevi`.`asp`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`asp` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`asp` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  `tipo` VARCHAR(50) NOT NULL,
  `ubicacion` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`pais`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`pais` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`pais` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(40) NOT NULL,
  `codigo` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`provincia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`provincia` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`provincia` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(15) NOT NULL,
  `id_lista` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`puestos_institucion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`puestos_institucion` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`puestos_institucion` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_puesto` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`sector`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`sector` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`sector` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `capacidad_diaria` INT(11) NOT NULL,
  `capacidad_acampar` INT(11) NOT NULL,
  `tarifa_camping` INT(11) NULL DEFAULT NULL,
  `asp` INT(11) NOT NULL,
  `adulto_nacional` INT(11) NOT NULL,
  `nino_nacional` INT(11) NOT NULL,
  `estudiantes` INT(11) NOT NULL,
  `surf_nacional` INT(5) NULL DEFAULT NULL,
  `adulto_extranjero` INT(11) NOT NULL,
  `nino_extranjero` INT(11) NOT NULL,
  `surf_extranjero` INT(10) NULL DEFAULT NULL,
  `cambio_dolar` INT(10) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_asp_idx` (`asp` ASC),
  CONSTRAINT `fk_area_Silvestre_Protegida`
    FOREIGN KEY (`asp`)
    REFERENCES `sirevi`.`asp` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`sendero`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`sendero` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`sendero` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  `caracterizacion_sendero` VARCHAR(50) NOT NULL,
  `tipo_sendero` VARCHAR(100) NOT NULL,
  `atractivo` VARCHAR(50) NOT NULL,
  `distancia` VARCHAR(45) NOT NULL,
  `sector` INT(11) NOT NULL,
  `tiempo_recorrido` VARCHAR(20) NOT NULL,
  `punto_alto` VARCHAR(10) NOT NULL,
  `punto_inicio` VARCHAR(45) NOT NULL,
  `punto_llegada` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(100) NOT NULL,
  `regulaciones` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_sector_idx` (`sector` ASC),
  CONSTRAINT `fk_sector`
    FOREIGN KEY (`sector`)
    REFERENCES `sirevi`.`sector` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `apellido` VARCHAR(40) NOT NULL,
  `cedula` VARCHAR(25) NOT NULL,
  `contrasena` VARCHAR(30) NOT NULL,
  `puesto` INT(11) NOT NULL,
  `email` VARCHAR(30) NOT NULL,
  `estado` INT(3) NOT NULL,
  `foto` VARCHAR(150) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_imagen_idx` (`foto` ASC),
  INDEX `usuarioSec_idx` (`estado` ASC),
  INDEX `fk__cargo_institucion_idx` (`puesto` ASC),
  CONSTRAINT `fk__cargo_institucion`
    FOREIGN KEY (`puesto`)
    REFERENCES `sirevi`.`puestos_institucion` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`visitacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`visitacion` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`visitacion` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` INT(11) NULL DEFAULT NULL,
  `proposito_visita` VARCHAR(50) NULL DEFAULT NULL,
  `subSector` VARCHAR(45) NULL DEFAULT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `noIdentificacion` VARCHAR(30) NOT NULL,
  `nombre` VARCHAR(20) NOT NULL,
  `placa_automovil` VARCHAR(20) NULL DEFAULT NULL,
  `provincia_id` INT(11) NULL DEFAULT NULL,
  `pais_id` INT(11) NULL DEFAULT NULL,
  `referencia_visita` VARCHAR(50) NOT NULL,
  `nom_referencia_visita` VARCHAR(45) NULL DEFAULT NULL,
  `asp` INT(11) NOT NULL,
  `sector` INT(11) NOT NULL,
  `sendero` INT(11) NOT NULL,
  `salida` INT(3) NULL DEFAULT NULL,
  `dias_camping` INT(3) UNSIGNED NULL DEFAULT NULL,
  `personas_acampando` INT(11) NULL DEFAULT NULL,
  `nacional_adult` INT(4) UNSIGNED NULL DEFAULT NULL,
  `nacional_kid` INT(4) UNSIGNED NULL DEFAULT NULL,
  `estudiantes` INT(4) UNSIGNED NULL DEFAULT NULL,
  `nacional_surf` INT(4) UNSIGNED NULL DEFAULT NULL,
  `nacional_prepago` INT(4) UNSIGNED NULL DEFAULT NULL,
  `nacional_exonerado` INT(4) UNSIGNED NULL DEFAULT NULL,
  `extranjero_adult` INT(4) UNSIGNED NULL DEFAULT NULL,
  `extranjero_kid` INT(4) UNSIGNED NULL DEFAULT NULL,
  `extranjero_surf` INT(4) UNSIGNED NULL DEFAULT NULL,
  `extranjero_prepago` INT(4) UNSIGNED NULL DEFAULT NULL,
  `extranjero_exonerado` INT(4) UNSIGNED NULL DEFAULT NULL,
  `tipo_pago` VARCHAR(40) NOT NULL,
  `moneda` VARCHAR(20) NOT NULL,
  `montoCancelar` INT(4) UNSIGNED NOT NULL,
  `horaSalida` TIME NULL DEFAULT NULL,
  `personas_surf` INT(4) NULL DEFAULT NULL,
  `prepago` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuario_idx` (`usuario` ASC),
  INDEX `fk_asp_idx` (`asp` ASC),
  INDEX `fk_sector_idx` (`sector` ASC),
  INDEX `fk_sendero_idx` (`sendero` ASC),
  INDEX `fk_visitacion_provincia1_idx` (`provincia_id` ASC),
  INDEX `fk_visitacion_pais1_idx` (`pais_id` ASC),
  CONSTRAINT `fk_visit_user`
    FOREIGN KEY (`usuario`)
    REFERENCES `sirevi`.`usuarios` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_visitacion_asp`
    FOREIGN KEY (`asp`)
    REFERENCES `sirevi`.`asp` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_visitacion_pais1`
    FOREIGN KEY (`pais_id`)
    REFERENCES `sirevi`.`pais` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_visitacion_provincia1`
    FOREIGN KEY (`provincia_id`)
    REFERENCES `sirevi`.`provincia` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_visitacion_sector`
    FOREIGN KEY (`sector`)
    REFERENCES `sirevi`.`sector` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_visitacion_sendero`
    FOREIGN KEY (`sendero`)
    REFERENCES `sirevi`.`sendero` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 33
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;

USE `sirevi` ;

-- -----------------------------------------------------
-- procedure NacionalesAgrupadosXProvincia
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`NacionalesAgrupadosXProvincia`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `NacionalesAgrupadosXProvincia`( IN fechaInicio DATE, IN fechaFinal DATE)
BEGIN
SELECT provincia.nombre AS Provincia, sector.nombre AS Sector, subSector AS SubSector, count(visitacion.subSector) AS Registros_SubSector,
SUM(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes) AS Pagos,
SUM(visitacion.prepago) AS Prepagos,
SUM(visitacion.nacional_exonerado) AS Exonerados,
SUM(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes+visitacion.prepago+visitacion.nacional_exonerado) AS Total
FROM visitacion
INNER JOIN provincia ON visitacion.provincia_id = provincia.id
INNER JOIN sector ON visitacion.sector = sector.id
WHERE visitacion.fecha BETWEEN fechaInicio AND fechaFinal
GROUP BY provincia.nombre ORDER BY sector.id ;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure Total_Ingresos
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`Total_Ingresos`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Total_Ingresos`()
BEGIN
SELECT count(visitacion.id) AS Cantidad FROM visitacion where DATE(fecha) = DATE(noW());
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure cant_personas_dentro_parque
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`cant_personas_dentro_parque`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `cant_personas_dentro_parque`(IN fechaInicio VARCHAR(50), IN fechaFinal VARCHAR(50))
BEGIN
SELECT sum(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes
+visitacion.nacional_exonerado+visitacion.nacional_prepago
+visitacion.extranjero_adult+visitacion.extranjero_kid
+visitacion.extranjero_prepago+visitacion.extranjero_exonerado) AS Cantidad 
FROM visitacion
WHERE salida = 0 AND fecha BETWEEN fechaInicio AND fechaFinal;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure consulta_Campistas
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`consulta_Campistas`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `consulta_Campistas`( In fechaInicio DATE, IN fechaFinal DATE, IN pSector INT)
BEGIN
SELECT monthname(fecha) as Mes, dayname(fecha) AS Dia, time(fecha) AS Hora_Ingreso, visitacion.dias_camping AS Dias_Acampando,
visitacion.proposito_visita, sector.nombre AS Sector, visitacion.subSector AS SubSector,

sum(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes+visitacion.nacional_exonerado) AS Nacionales,
sum(visitacion.extranjero_adult+visitacion.extranjero_kid+visitacion.extranjero_exonerado) AS Extranjeros,
sum(visitacion.prepago) AS Prepagos

FROM visitacion

INNER JOIN sector ON visitacion. sector = sector.id

WHERE (proposito_visita = 'Acampando' AND visitacion.sector = pSector) AND (visitacion.fecha between fechaInicio AND fechaFinal)

GROUP BY fecha;

END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure consulta_Paises
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`consulta_Paises`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `consulta_Paises`()
BEGIN
SELECT pais.nombre, 

sum(visitacion.extranjero_adult+visitacion.extranjero_kid) AS Extranjeros_Pago,
sum(visitacion.extranjero_exonerado) AS Extranjero_Exonerados,
count(visitacion.pais_id) AS Registros

FROM visitacion
INNER JOIN pais ON visitacion.pais_id = pais.id
WHERE visitacion.pais_id != 1

GROUP BY pais.nombre;

#=====================================================================================================

SELECT provincia.nombre,

sum(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes) AS Nacionales_Pago,
sum(visitacion.nacional_exonerado) AS Nacionales_Exonerados,
count(visitacion.provincia_id) AS Registros

FROM visitacion
INNER JOIN pais ON visitacion.pais_id = pais.id
INNER JOIN provincia ON visitacion.provincia_id = provincia.id
WHERE visitacion.pais_id = 1
GROUP BY provincia.nombre;

END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure consulta_ReporteDiario
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`consulta_ReporteDiario`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `consulta_ReporteDiario`(IN fechaStart DATE, IN pSector INT)
BEGIN
/*------- ESTA ES MI CONSULTA PARA EL REPORTE DIARIO*/
SELECT count(fecha) AS Registros, time(fecha) AS Hora_Entrada, visitacion.horaSalida AS Hora_Salida,
visitacion.nombre AS Nombre, visitacion.noIdentificacion, visitacion.placa_automovil,

visitacion.subSector AS SubSector, sector.nombre AS Sector,

pais.nombre AS Pais,

sum(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes) AS Nacionales,

sum(visitacion.extranjero_adult+visitacion.extranjero_kid) AS Extranjeros,

sum(visitacion.extranjero_exonerado+visitacion.nacional_exonerado) AS Total_exonerados,

sum(visitacion.prepago) AS Prepago,

sum(visitacion.montoCancelar) AS Total_Pago

FROM sirevi.visitacion

INNER JOIN sector ON visitacion.sector= sector.id
INNER JOIN pais on visitacion.pais_id = pais.id

 where sector.id = pSector AND DATE(fecha) = DATE(noW())

GROUP BY visitacion.noIdentificacion;

END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure consulta_SEMEC
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`consulta_SEMEC`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `consulta_SEMEC`( IN fechaStart DATE, IN fechaEnd DATE )
BEGIN
 
SELECT count(visitacion.id) as Cant_Registros, asp.nombre as AC, sector.nombre as Centro_operativo,
 
  asp.tipo as Tipo_ASP, monthname(fecha) AS Mes,
	
    sum( visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes) AS Nacionales_Pago,
    
    sum( visitacion.nacional_prepago) AS Nac_Prepago,
	
    sum( nacional_exonerado) AS Nacionales_Exonerado,
	
    sum( visitacion.nacional_adult+ visitacion.nacional_kid+ visitacion.estudiantes
    + visitacion.nacional_prepago+ visitacion.nacional_exonerado) AS Total_Nacionales,
	
    sum( visitacion.extranjero_adult+ visitacion.extranjero_kid) AS Extranjeros_Pago,
    
    sum( visitacion.extranjero_prepago) AS Extranjero_Prepago,
	
    sum( visitacion.extranjero_exonerado) AS Extranjeros_Exonerados,
    	
    sum( visitacion.extranjero_adult+ visitacion.extranjero_kid
    + visitacion.extranjero_prepago+ visitacion.extranjero_exonerado) AS Total_Extranjeros,
	
    sum(montoCancelar) AS Monto_Total

	FROM visitacion

	INNER JOIN sector on visitacion.sector = sector.id
	INNER JOIN asp on visitacion.asp =  asp.id


	WHERE visitacion.fecha BETWEEN fechaStart AND fechaEnd

	GROUP BY visitacion.fecha ORDER BY month(fecha) DESC;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure consulta_SubSectores
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`consulta_SubSectores`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `consulta_SubSectores`(IN fechaInicio DATE, IN fechaFinal DATE, IN pSubSector VARCHAR(50))
BEGIN
SELECT count(subSector) AS Registros, sector.nombre, subSector AS SubSector, visitacion.fecha AS Fecha,

sum(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes) AS Nacionales,

sum(visitacion.nacional_exonerado) AS Nacional_Exonerado,

sum(visitacion.extranjero_adult+visitacion.extranjero_kid) AS Extranjeros,

sum(visitacion.extranjero_exonerado) AS Extranjero_Exonerado,

sum(visitacion.prepago) AS Prepago
 
FROM visitacion

INNER JOIN sector ON visitacion.sector = sector.id

WHERE (fecha BETWEEN fechaInicio AND fechaFinal) AND (visitacion.salida = 0) AND (visitacion.subSector = pSubSector)

GROUP BY subSector ORDER BY fecha;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure consulta_Total_Mensual_Sectores
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`consulta_Total_Mensual_Sectores`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `consulta_Total_Mensual_Sectores`(IN fechaStart DATE, IN fechaEnd DATE, IN pSector INT)
BEGIN
SELECT sector.nombre AS Sector, visitacion.subSector AS SubSector, monthname(fecha) AS Mes,

sum(visitacion.nacional_adult+ visitacion.nacional_kid+ visitacion.estudiantes) as Nacional_No_Exonerado,

sum(visitacion.nacional_exonerado) AS Nacional_Exonerado,

sum(visitacion.nacional_adult+ visitacion.nacional_kid+visitacion.estudiantes+visitacion.nacional_exonerado) AS SubTotal,

sum(visitacion.extranjero_adult+ visitacion.extranjero_kid) AS Extranjero_No_Exonerado,

sum(visitacion.extranjero_exonerado) AS Extranjero_Exonerado,

sum(visitacion.extranjero_adult+ visitacion.extranjero_kid+ visitacion.extranjero_exonerado) AS SubTotal,

sum(visitacion.prepago) AS Prepagos,

sum(visitacion.nacional_adult+ visitacion.nacional_kid+visitacion.estudiantes+visitacion.nacional_exonerado
+visitacion.extranjero_adult+ visitacion.extranjero_kid+ visitacion.extranjero_exonerado
+visitacion.prepago) AS Total


FROM visitacion

INNER JOIN sector ON visitacion.sector = sector.id

WHERE fecha BETWEEN fechaStart and fechaEnd AND sector.id = pSector

GROUP BY fecha ORDER BY fecha ASC;

END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure conteoRegistrosDiarios
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`conteoRegistrosDiarios`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `conteoRegistrosDiarios`( )
BEGIN
select count(visitacion.id) AS Total_Ingresos from visitacion where LEFT(fecha, 10) = curdate();
END$$

DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
