-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema bd_chamado
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bd_chamado
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_chamado` DEFAULT CHARACTER SET ascii ;
USE `bd_chamado` ;

-- -----------------------------------------------------
-- Table `bd_chamado`.`tb_chamados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_chamado`.`tb_chamados` (
  `id_chamado` INT(3) NOT NULL AUTO_INCREMENT,
  `tipo_problema` VARCHAR(75) NOT NULL,
  `descricao` VARCHAR(300) NOT NULL,
  `status` VARCHAR(10) NOT NULL DEFAULT 'pendente',
  `sala` VARCHAR(45) NULL DEFAULT NULL,
  `iditem` VARCHAR(5) NULL DEFAULT NULL,
  `data_envio` VARCHAR(18) NULL DEFAULT NULL,
  `iduser` VARCHAR(50) NULL DEFAULT NULL,
  `idtec` VARCHAR(50) NULL DEFAULT NULL,
  `iduser_adm` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id_chamado`),
  INDEX `iduser` (`iduser` ASC),
  INDEX `iditem` (`iditem` ASC),
  INDEX `idtec` (`idtec` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bd_chamado`.`tb_item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_chamado`.`tb_item` (
  `id_item` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo_item` VARCHAR(75) NOT NULL,
  `descricao_item` VARCHAR(300) NOT NULL,
  `quem_cadastrou` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_item`))
ENGINE = InnoDB
AUTO_INCREMENT = 36
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bd_chamado`.`tb_tecnico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_chamado`.`tb_tecnico` (
  `id_tec` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_tec` VARCHAR(75) NOT NULL,
  `email` VARCHAR(75) NOT NULL,
  `nivel` VARCHAR(1) NOT NULL,
  `quem_cadastrou` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_tec`),
  UNIQUE INDEX `email` (`email` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bd_chamado`.`tb_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_chamado`.`tb_usuario` (
  `id_user` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_user` VARCHAR(75) NOT NULL,
  `login` VARCHAR(50) NOT NULL,
  `email` VARCHAR(75) NOT NULL,
  `senha` VARCHAR(50) NOT NULL,
  `categoria` INT(3) NOT NULL,
  `status` VARCHAR(30) NOT NULL,
  `quem_cadastrou` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_user`))
ENGINE = InnoDB
AUTO_INCREMENT = 21
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
