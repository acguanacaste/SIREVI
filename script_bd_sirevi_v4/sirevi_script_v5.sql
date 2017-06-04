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
  `ubicacion` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`image`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`image` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`image` (
  `id` SMALLINT(6) NOT NULL AUTO_INCREMENT,
  `anchura` SMALLINT(6) NOT NULL,
  `altura` SMALLINT(6) NOT NULL,
  `tipo` CHAR(15) CHARACTER SET 'utf8' COLLATE 'utf8_spanish_ci' NOT NULL,
  `imagen` MEDIUMBLOB NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


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
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`provincia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`provincia` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`provincia` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `codigo` VARCHAR(10) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`sector`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`sector` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`sector` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `capacidad_diaria` INT(11) NOT NULL,
  `capacidad_acampar` INT(11) NOT NULL,
  `asp` INT(11) NOT NULL,
  `adulto_nacional` INT(11) NOT NULL,
  `nino_nacional` INT(11) NOT NULL,
  `adulto_extranjero` INT(11) NOT NULL,
  `nino_extranjero` INT(11) NOT NULL,
  `estudiantes` INT(11) NOT NULL,
  `camping_adulto_nacional` INT(11) NOT NULL,
  `camping_nino_nacional` INT(11) NOT NULL,
  `camping_estudiantes` INT(11) NOT NULL,
  `camping_adulto_extranjero` INT(11) NOT NULL,
  `camping_nino_extranjero` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_asp_idx` (`asp` ASC),
  CONSTRAINT `fk_asp`
    FOREIGN KEY (`asp`)
    REFERENCES `sirevi`.`asp` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`sendero`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`sendero` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`sendero` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `distancia` INT(11) NOT NULL,
  `latitud` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `longitud` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `sector` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_sector_idx` (`sector` ASC),
  CONSTRAINT `fk_sector`
    FOREIGN KEY (`sector`)
    REFERENCES `sirevi`.`sector` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 3
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
  `puesto` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `email` VARCHAR(30) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `imagen` SMALLINT(6) NULL DEFAULT NULL,
  `estado` INT(3) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_imagen_idx` (`imagen` ASC),
  INDEX `usuarioSec_idx` (`estado` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


-- -----------------------------------------------------
-- Table `sirevi`.`visitacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sirevi`.`visitacion` ;

CREATE TABLE IF NOT EXISTS `sirevi`.`visitacion` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `noIdentificacion` VARCHAR(30) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `nombre` VARCHAR(20) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `placa_automovil` VARCHAR(20) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NULL DEFAULT NULL,
  `pais` INT(11) NOT NULL,
  `provincia` INT(11) NULL DEFAULT NULL,
  `referencia_visita` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NULL DEFAULT NULL,
  `fecha_ingreso` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sendero` INT(11) NOT NULL,
  `acampa` VARCHAR(2) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `dias_camping` INT(3) NULL DEFAULT NULL,
  `cantidad_personas_surf` INT(3) NULL DEFAULT NULL,
  `cantidad_personas_camping` INT(11) NOT NULL,
  `total_personas` INT(11) NOT NULL,
  `exonerado` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NULL DEFAULT NULL,
  `prepago` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NULL DEFAULT NULL,
  `nacional_adult` INT(11) NULL DEFAULT NULL,
  `extranjero_adult` INT(11) NULL DEFAULT NULL,
  `nacional_kid` INT(11) NULL DEFAULT NULL,
  `extranjero_kid` INT(11) NULL DEFAULT NULL,
  `tipo_pago` VARCHAR(40) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `monto` FLOAT NULL DEFAULT NULL,
  `moneda` VARCHAR(20) CHARACTER SET 'utf8' COLLATE 'utf8_spanish2_ci' NOT NULL,
  `usuario` INT(11) NOT NULL,
  `asp` INT(11) NOT NULL,
  `sector` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuario_idx` (`usuario` ASC),
  INDEX `fk_asp_idx` (`asp` ASC),
  INDEX `fk_sector_idx` (`sector` ASC),
  INDEX `fk_sendero_idx` (`sendero` ASC),
  INDEX `fk_pais_idx` (`pais` ASC),
  INDEX `fk_provincia_idx` (`provincia` ASC),
  CONSTRAINT `fk_visit_asp`
    FOREIGN KEY (`asp`)
    REFERENCES `sirevi`.`asp` (`id`),
  CONSTRAINT `fk_visit_pais`
    FOREIGN KEY (`pais`)
    REFERENCES `sirevi`.`pais` (`id`),
  CONSTRAINT `fk_visit_provincia`
    FOREIGN KEY (`provincia`)
    REFERENCES `sirevi`.`provincia` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_visit_sector`
    FOREIGN KEY (`sector`)
    REFERENCES `sirevi`.`sector` (`id`),
  CONSTRAINT `fk_visit_sendero`
    FOREIGN KEY (`sendero`)
    REFERENCES `sirevi`.`sendero` (`id`),
  CONSTRAINT `fk_visit_user`
    FOREIGN KEY (`usuario`)
    REFERENCES `sirevi`.`usuarios` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish2_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
