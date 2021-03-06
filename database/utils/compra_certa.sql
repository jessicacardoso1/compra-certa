-- MySQL Script generated by MySQL Workbench
-- seg 05 jul 2021 11:13:47 -03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema compra_certa
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema compra_certa
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `compra_certa` ;
USE `compra_certa` ;

-- -----------------------------------------------------
-- Table `compra_certa`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_categoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`produto` (
  `id_produto` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NULL DEFAULT 'N/A',
  `id_categoria` INT NOT NULL,
  `preco` FLOAT NOT NULL,
  `disponivel` INT(1) NOT NULL,
  `nome_imagem` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_produto`),
  INDEX `fk_produto_categoria_idx` (`id_categoria` ASC),
  CONSTRAINT `fk_produto_categoria`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `compra_certa`.`categoria` (`id_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`estado` (
  `id_estado` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `sigla` VARCHAR(2) NOT NULL,
  PRIMARY KEY (`id_estado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`cidade` (
  `id_cidade` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `estado_id_estado` INT NOT NULL,
  PRIMARY KEY (`id_cidade`),
  INDEX `fk_cidade_estado1_idx` (`estado_id_estado` ASC),
  CONSTRAINT `fk_cidade_estado1`
    FOREIGN KEY (`estado_id_estado`)
    REFERENCES `compra_certa`.`estado` (`id_estado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`endereco` (
  `id_endereco` INT NOT NULL AUTO_INCREMENT,
  `pais` VARCHAR(45) NULL DEFAULT 'Brasil',
  `nome` VARCHAR(70) NOT NULL,
  `cep` VARCHAR(9) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(80) NOT NULL,
  `complemento` VARCHAR(60) NULL DEFAULT 'N/A',
  `id_cidade` INT NOT NULL,
  `numero` VARCHAR(5) NULL DEFAULT 'S/N',
  `status` VARCHAR(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_endereco`),
  INDEX `fk_endereco_cidade1_idx` (`id_cidade` ASC),
  CONSTRAINT `fk_endereco_cidade1`
    FOREIGN KEY (`id_cidade`)
    REFERENCES `compra_certa`.`cidade` (`id_cidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`avaliacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`avaliacao` (
  `id_avaliacao` INT NOT NULL AUTO_INCREMENT,
  `estrelas` INT(1) NOT NULL,
  `titulo` VARCHAR(25) NOT NULL,
  `comentario` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_avaliacao`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`data_setores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`data_setores` (
  `id_data_setores` INT NOT NULL AUTO_INCREMENT,
  `data` DATETIME NOT NULL,
  `setor` INT(1) NOT NULL,
  PRIMARY KEY (`id_data_setores`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`item` (
  `id_item` INT NOT NULL AUTO_INCREMENT,
  `produto_id_produto` INT NOT NULL,
  `quantidade` INT NOT NULL,
  PRIMARY KEY (`id_item`),
  INDEX `fk_item_produto1_idx` (`produto_id_produto` ASC),
  CONSTRAINT `fk_item_produto1`
    FOREIGN KEY (`produto_id_produto`)
    REFERENCES `compra_certa`.`produto` (`id_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`compra` (
  `id_compra` INT NOT NULL AUTO_INCREMENT,
  `valor_total` FLOAT NOT NULL,
  `data` DATETIME NOT NULL,
  `id_endereco` INT NOT NULL,
  `id_avaliacao` INT NOT NULL,
  PRIMARY KEY (`id_compra`),
  INDEX `fk_compra_endereco1_idx` (`id_endereco` ASC),
  INDEX `fk_compra_avaliacao1_idx` (`id_avaliacao` ASC),
  CONSTRAINT `fk_compra_endereco1`
    FOREIGN KEY (`id_endereco`)
    REFERENCES `compra_certa`.`endereco` (`id_endereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compra_avaliacao1`
    FOREIGN KEY (`id_avaliacao`)
    REFERENCES `compra_certa`.`avaliacao` (`id_avaliacao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`compra_has_item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`compra_has_item` (
  `id_compra` INT NOT NULL,
  `id_item` INT NOT NULL,
  PRIMARY KEY (`id_compra`, `id_item`),
  INDEX `fk_compra_has_item_item1_idx` (`id_item` ASC),
  INDEX `fk_compra_has_item_compra1_idx` (`id_compra` ASC),
  CONSTRAINT `fk_compra_has_item_compra1`
    FOREIGN KEY (`id_compra`)
    REFERENCES `compra_certa`.`compra` (`id_compra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compra_has_item_item1`
    FOREIGN KEY (`id_item`)
    REFERENCES `compra_certa`.`item` (`id_item`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`cliente` (
  `cpf` VARCHAR(14) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `ativo` VARCHAR(1) NOT NULL,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`cliente_has_compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`cliente_has_compra` (
  `cpf` VARCHAR(14) NOT NULL,
  `id_compra` INT NOT NULL,
  PRIMARY KEY (`cpf`, `id_compra`),
  INDEX `fk_cliente_has_compra_compra1_idx` (`id_compra` ASC),
  INDEX `fk_cliente_has_compra_cliente1_idx` (`cpf` ASC),
  CONSTRAINT `fk_cliente_has_compra_cliente1`
    FOREIGN KEY (`cpf`)
    REFERENCES `compra_certa`.`cliente` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_has_compra_compra1`
    FOREIGN KEY (`id_compra`)
    REFERENCES `compra_certa`.`compra` (`id_compra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`cliente_has_endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`cliente_has_endereco` (
  `cpf` VARCHAR(14) NOT NULL,
  `id_endereco` INT NOT NULL,
  PRIMARY KEY (`cpf`, `id_endereco`),
  INDEX `fk_cliente_has_endereco_endereco1_idx` (`id_endereco` ASC),
  INDEX `fk_cliente_has_endereco_cliente1_idx` (`cpf` ASC),
  CONSTRAINT `fk_cliente_has_endereco_cliente1`
    FOREIGN KEY (`cpf`)
    REFERENCES `compra_certa`.`cliente` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cliente_has_endereco_endereco1`
    FOREIGN KEY (`id_endereco`)
    REFERENCES `compra_certa`.`endereco` (`id_endereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`promocao_produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`promocao_produto` (
  `id_promocao` INT NOT NULL AUTO_INCREMENT,
  `id_produto` INT NOT NULL,
  `novo_valor` FLOAT NOT NULL,
  PRIMARY KEY (`id_promocao`, `id_produto`),
  INDEX `fk_promocao_produto1_idx` (`id_produto` ASC),
  CONSTRAINT `fk_promocao_produto1`
    FOREIGN KEY (`id_produto`)
    REFERENCES `compra_certa`.`produto` (`id_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`funcionario` (
  `cpf` VARCHAR(14) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `tipo` VARCHAR(1) NOT NULL,
  `cargo` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`compra_has_data_setores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`compra_has_data_setores` (
  `id_compra` INT NOT NULL,
  `id_data_setores` INT NOT NULL,
  PRIMARY KEY (`id_compra`, `id_data_setores`),
  INDEX `fk_compra_has_data_setores_data_setores1_idx` (`id_data_setores` ASC),
  INDEX `fk_compra_has_data_setores_compra1_idx` (`id_compra` ASC),
  CONSTRAINT `fk_compra_has_data_setores_compra1`
    FOREIGN KEY (`id_compra`)
    REFERENCES `compra_certa`.`compra` (`id_compra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compra_has_data_setores_data_setores1`
    FOREIGN KEY (`id_data_setores`)
    REFERENCES `compra_certa`.`data_setores` (`id_data_setores`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`promocao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`promocao` (
  `id_promocao` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_promocao`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `compra_certa`.`promocao_produto_has_promocao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `compra_certa`.`promocao_produto_has_promocao` (
  `id_promocao_produto` INT NOT NULL,
  `id_promocao` INT NOT NULL,
  PRIMARY KEY (`id_promocao_produto`, `id_promocao`),
  INDEX `fk_promocao_produto_has_promocao_promocao1_idx` (`id_promocao` ASC),
  INDEX `fk_promocao_produto_has_promocao_promocao_produto1_idx` (`id_promocao_produto` ASC),
  CONSTRAINT `fk_promocao_produto_has_promocao_promocao_produto1`
    FOREIGN KEY (`id_promocao_produto`)
    REFERENCES `compra_certa`.`promocao_produto` (`id_promocao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_promocao_produto_has_promocao_promocao1`
    FOREIGN KEY (`id_promocao`)
    REFERENCES `compra_certa`.`promocao` (`id_promocao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
