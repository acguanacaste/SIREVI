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
  `nombre` VARCHAR(30) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `tipo` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `ubicacion` VARCHAR(500) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
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
  `nombre` VARCHAR(40) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `codigo` VARCHAR(15) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
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
  `nombre` VARCHAR(15) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
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
  `nombre_puesto` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL,
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
  `nombre` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `capacidad_diaria` INT(11) NOT NULL,
  `capacidad_acampar` INT(11) NOT NULL,
  `tarifa_camping` INT(11) NULL DEFAULT NULL,
  `asp` INT(11) NOT NULL,
  `adulto_nacional` INT(11) NOT NULL,
  `nino_nacional` INT(11) NOT NULL,
  `adulto_extranjero` INT(11) NOT NULL,
  `nino_extranjero` INT(11) NOT NULL,
  `estudiantes` INT(11) NOT NULL,
  `cambio_dolar` INT(10) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_asp_idx` (`asp` ASC),
  CONSTRAINT `fk_area_Silvestre_Protegida`
    FOREIGN KEY (`asp`)
    REFERENCES `sirevi`.`asp` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`sendero`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`sendero` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`sendero` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `caracterizacion_sendero` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `tipo_sendero` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `atractivo` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `distancia` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `sector` INT(11) NOT NULL,
  `tiempo_recorrido` VARCHAR(20) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `punto_alto` VARCHAR(10) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `punto_inicio` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `punto_llegada` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `descripcion` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `regulaciones` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_sector_idx` (`sector` ASC),
  CONSTRAINT `fk_sector`
    FOREIGN KEY (`sector`)
    REFERENCES `sirevi`.`sector` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `apellido` VARCHAR(40) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `cedula` VARCHAR(25) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `contrasena` VARCHAR(30) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `puesto` INT(11) NOT NULL,
  `email` VARCHAR(30) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `estado` INT(3) NOT NULL,
  `foto` VARCHAR(150) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
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
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`visitacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`visitacion` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`visitacion` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `proposito_visita` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NULL DEFAULT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `noIdentificacion` VARCHAR(30) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `nombre` VARCHAR(20) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `placa_automovil` VARCHAR(20) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NULL DEFAULT NULL,
  `referencia_visita` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `nom_referencia_visita` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NULL DEFAULT NULL,
  `sector` INT(11) NOT NULL,
  `sendero` INT(11) NULL DEFAULT NULL,
  `salida` INT(3) NULL DEFAULT NULL,
  `subSector` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NULL DEFAULT NULL,
  `dias_camping` INT(3) UNSIGNED NULL DEFAULT NULL,
  `nacional_adult` INT(11) UNSIGNED NULL DEFAULT NULL,
  `nacional_kid` INT(11) UNSIGNED NULL DEFAULT NULL,
  `estudiantes` INT(11) UNSIGNED NULL DEFAULT NULL,
  `nacional_exonerado` INT(3) UNSIGNED NULL DEFAULT NULL,
  `extranjero_adult` INT(11) UNSIGNED NULL DEFAULT NULL,
  `extranjero_kid` INT(11) UNSIGNED NULL DEFAULT NULL,
  `extranjero_exonerado` INT(3) UNSIGNED NULL DEFAULT NULL,
  `personas_surf` INT(3) UNSIGNED NOT NULL,
  `prepago` INT(3) UNSIGNED NULL DEFAULT NULL,
  `montoCancelar` INT(4) UNSIGNED NOT NULL,
  `tipo_pago` VARCHAR(40) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `moneda` VARCHAR(20) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `usuario` INT(11) NOT NULL,
  `asp` INT(11) NOT NULL,
  `horaSalida` TIME NULL DEFAULT NULL,
  `provincia_id` INT(11) NULL DEFAULT NULL,
  `pais_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuario_idx` (`usuario` ASC),
  INDEX `fk_asp_idx` (`asp` ASC),
  INDEX `fk_sector_idx` (`sector` ASC),
  INDEX `fk_sendero_idx` (`sendero` ASC),
  INDEX `fk_visitacion_provincia1_idx` (`provincia_id` ASC),
  INDEX `fk_visitacion_pais1_idx` (`pais_id` ASC),
  CONSTRAINT `fk_visit_sector`
    FOREIGN KEY (`sector`)
    REFERENCES `sirevi`.`sector` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_visit_sendero`
    FOREIGN KEY (`sendero`)
    REFERENCES `sirevi`.`sendero` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_visit_user`
    FOREIGN KEY (`usuario`)
    REFERENCES `sirevi`.`usuarios` (`id`),
  CONSTRAINT `fk_visitacion_pais1`
    FOREIGN KEY (`pais_id`)
    REFERENCES `sirevi`.`pais` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_visitacion_provincia1`
    FOREIGN KEY (`provincia_id`)
    REFERENCES `sirevi`.`provincia` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_visit_asp`
    FOREIGN KEY (`asp`)
    REFERENCES `sirevi`.`asp` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 58
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;

USE `sirevi` ;

-- -----------------------------------------------------
-- procedure ConsultaSubSectores
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`ConsultaSubSectores`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultaSubSectores`()
BEGIN
Select count(subSector) AS Registros, sum(nacional_adult+nacional_kid+extranjero_adult+extranjero_kid+prepago+exonerado) AS Personas
from visitacion where visitacion.subSector = 'Naranjo';
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure NacionalesAgrupadosXProvincia
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`NacionalesAgrupadosXProvincia`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `NacionalesAgrupadosXProvincia`( IN fechaInicio DATE, IN fechaFinal DATE)
BEGIN
SELECT visitacion.provincia as ID, provincia.nombre Provincia, visitacion.nombre As Nombre,
 
 sum(visitacion.prepago) AS Prepagos, sum(visitacion.extranjero_exonerado) AS Exonerado,
 
 sum(nacional_adult+nacional_kid+estudiantes+nacional_exonerado+extranjero_adult+extranjero_kid+extranjero_exonerado+prepago) AS CantPersonas,
 
 count(provincia.id)AS RegistrosHechos FROM visitacion
 
 INNER JOIN provincia ON visitacion.provincia = provincia.id
 
 AND visitacion.fecha BETWEEN fechaInicio AND fechaFinal 
 
 GROUP BY provincia.nombre ORDER BY id ASC;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure cant_personas_dentro_parque
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`cant_personas_dentro_parque`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `cant_personas_dentro_parque`()
BEGIN
SELECT count(salida) FROM visitacion
WHERE salida = 0;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure consulta_ReporteCampistas
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`consulta_ReporteCampistas`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `consulta_ReporteCampistas`()
BEGIN
SELECT visitacion.proposito_visita, sector.nombre, visitacion.subSector AS SubSector, monthname(fecha) as Mes,

sum(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes+visitacion.nacional_exonerado) AS Nacionales,
sum(visitacion.extranjero_adult+visitacion.extranjero_kid+visitacion.extranjero_exonerado) AS Extranjeros,
sum(visitacion.prepago) AS Prepagos

FROM visitacion

INNER JOIN sector ON visitacion. sector = sector.id

WHERE proposito_visita = 'Acampando' OR proposito_visita = 'Hospedado Estacion biologica' AND visitacion.fecha between '2018-01-01' AND '2018-01-31'

GROUP BY sector.nombre;

END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure consulta_ReporteDiario
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`consulta_ReporteDiario`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `consulta_ReporteDiario`(IN fechaStart DATE, IN fechaEnd DATE, IN pSector INT)
BEGIN
/*------- ESTA ES MI CONSULTA PARA EL REPORTE DIARIO*/
SELECT count(fecha) AS Registros, time(fecha) AS Hora_Entrada, visitacion.horaSalida AS Hora_Salida,
visitacion.nombre AS Nombre, visitacion.noIdentificacion, visitacion.placa_automovil,

visitacion.subSector AS SubSector,
sector.nombre AS Sector,

pais.nombre AS Pais,

sum(visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes) AS Nacionales,
sum(visitacion.extranjero_adult+visitacion.extranjero_kid) AS Extranjeros,
sum(visitacion.extranjero_exonerado+visitacion.nacional_exonerado) AS Total_exonerados,
sum(visitacion.prepago) AS Prepago,
sum(visitacion.montoCancelar) AS Total_Pago

FROM sirevi.visitacion

INNER JOIN sector ON visitacion.sector= sector.id
INNER JOIN pais on visitacion.pais_id = pais.id

WHERE fecha BETWEEN fechaStart and fechaEnd AND sector.nombre = pSector

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
 
 SELECT count(sector.nombre) as numero_Reg, visitacion.nombre, asp.nombre as AC,sector.nombre as Centro_operativo,
 
 month(fecha) AS Mes, asp.tipo as Tipo_ASP, asp.nombre as ASP,
	
    sum( prepago) AS Prepagos,
	
    sum( nacional_adult+nacional_kid+visitacion.estudiantes) AS Nacionales_Pago,
	
    sum( nacional_exonerado) AS Nacionales_Exonerado,
	
    sum( visitacion.nacional_adult+visitacion.nacional_kid+visitacion.estudiantes+visitacion.nacional_exonerado) AS Total_Nacionales,
	
    sum( visitacion.extranjero_adult+visitacion.extranjero_kid) AS Extranjeros_Pago,
	
    sum( extranjero_exonerado) AS Extranjeros_Exonerados,
	
    sum( extranjero_adult+extranjero_kid+visitacion.extranjero_exonerado) AS Total_Extranjeros,
	
    sum(montoCancelar) AS Monto_Total

	FROM visitacion

	INNER JOIN sector on visitacion.sector = sector.id
	INNER JOIN asp on visitacion.asp =  asp.id

	WHERE visitacion.fecha BETWEEN fechaStart AND fechaEnd

	GROUP BY sector.nombre ORDER BY month(fecha), sector.nombre DESC;
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

-- -----------------------------------------------------
-- procedure totalMensualSectores
-- -----------------------------------------------------

USE `sirevi`;
DROP procedure IF EXISTS `sirevi`.`totalMensualSectores`;

DELIMITER $$
USE `sirevi`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `totalMensualSectores`(IN fechaStart DATE, IN fechaEnd DATE)
BEGIN
select sector.nombre,sum(nacional_adult+nacional_kid+visitacion.estudiantes+visitacion.nacional_exonerado+extranjero_kid+prepago+extranjero_exonerado+visitacion.prepago) as Cant_Personas,
monthname(fecha), visitacion.noIdentificacion AS chequeo_campo_notValid
from visitacion
inner join sector on visitacion.sector = sector.id
WHERE fecha BETWEEN '2018-05-01' AND '2018-05-31'
group by sector.nombre
order by fecha ASC;
-- En esta sentencia me esta mostrando cuantas veces el sector ha sido ingresado y no la cantidad de personas que ingresaron al sector --/
/*select visitacion.sector, sector.nombre from visitacion inner join sector on visitacion.sector = sector.id;*/
END$$

DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
