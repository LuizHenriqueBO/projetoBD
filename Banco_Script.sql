drop schema if exists banco_utfpr;

-- -----------------------------------------------------
-- Schema Banco_UTFPR
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Banco_UTFPR` DEFAULT CHARACTER SET utf8 ;
USE `Banco_UTFPR` ;

-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`modelo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`modelo` (
  `idmodelo` INT(11) NOT NULL AUTO_INCREMENT,
  `descricaoModelo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idmodelo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`marca` (
  `idmarca` INT(11) NOT NULL AUTO_INCREMENT,
  `nomeMarca` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idmarca`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`carro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`carro` (
  `chassi` INT(11) NOT NULL,
  `ano` INT(11) NOT NULL,
  `descricaoCarro` VARCHAR(45) NOT NULL,
  `modelo_idmodelo` INT(11) NOT NULL,
  `marca_idmarca` INT(11) NOT NULL,
  PRIMARY KEY (`chassi`),
  INDEX `fk_carro_modelo1_idx` (`modelo_idmodelo` ASC),
  INDEX `fk_carro_marca1_idx` (`marca_idmarca` ASC),
  CONSTRAINT `fk_carro_modelo1`
    FOREIGN KEY (`modelo_idmodelo`)
    REFERENCES `Banco_UTFPR`.`modelo` (`idmodelo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_carro_marca1`
    FOREIGN KEY (`marca_idmarca`)
    REFERENCES `Banco_UTFPR`.`marca` (`idmarca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`estado` (
  `uf` CHAR(2) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`uf`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`cidade` (
  `idcidade` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  `estado_uf` CHAR(2) NOT NULL,
  PRIMARY KEY (`idcidade`),
  INDEX `fk_cidade_estado_idx` (`estado_uf` ASC),
  CONSTRAINT `fk_cidade_estado`
    FOREIGN KEY (`estado_uf`)
    REFERENCES `Banco_UTFPR`.`estado` (`uf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`endereco` (
  `idendereco` INT NOT NULL AUTO_INCREMENT,
  `rua` VARCHAR(50) NOT NULL,
  `numresid` VARCHAR(45) NULL,
  `cep` CHAR(8) NOT NULL,
  `complemento` VARCHAR(45) NULL,
  `cidade_idcidade` INT(11) NOT NULL,
  PRIMARY KEY (`idendereco`),
  INDEX `fk_endereco_cidade1_idx` (`cidade_idcidade` ASC),
  CONSTRAINT `fk_endereco_cidade1`
    FOREIGN KEY (`cidade_idcidade`)
    REFERENCES `Banco_UTFPR`.`cidade` (`idcidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`pessoa` (
  `idpessoa` INT NOT NULL AUTO_INCREMENT,
  `endereco_idendereco` INT NOT NULL,
  PRIMARY KEY (`idpessoa`),
  INDEX `fk_pessoa_endereco1_idx` (`endereco_idendereco` ASC),
  CONSTRAINT `fk_pessoa_endereco1`
    FOREIGN KEY (`endereco_idendereco`)
    REFERENCES `Banco_UTFPR`.`endereco` (`idendereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`fisica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`fisica` (
  `cpf` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `idade` VARCHAR(45) NULL,
  `sexo` VARCHAR(45) NULL,
  `rg` VARCHAR(45) NULL,
  `pessoa_idpessoa` INT NOT NULL,
  INDEX `fk_fisica_pessoa1_idx` (`pessoa_idpessoa` ASC),
  PRIMARY KEY (`pessoa_idpessoa`),
  CONSTRAINT `fk_fisica_pessoa1`
    FOREIGN KEY (`pessoa_idpessoa`)
    REFERENCES `Banco_UTFPR`.`pessoa` (`idpessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`cliente` (
  `fisica_pessoa_idpessoa` INT NOT NULL,
  INDEX `fk_cliente_fisica1_idx` (`fisica_pessoa_idpessoa` ASC),
  PRIMARY KEY (`fisica_pessoa_idpessoa`),
  CONSTRAINT `fk_cliente_fisica1`
    FOREIGN KEY (`fisica_pessoa_idpessoa`)
    REFERENCES `Banco_UTFPR`.`fisica` (`pessoa_idpessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`juridica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`juridica` (
  `cnpj` INT NOT NULL,
  `razaosocial` VARCHAR(45) NOT NULL,
  `nomefantasia` VARCHAR(45) NOT NULL,
  `inscricaoestadual` VARCHAR(45) NULL,
  `pessoa_idpessoa` INT NOT NULL,
  INDEX `fk_juridica_pessoa1_idx` (`pessoa_idpessoa` ASC),
  PRIMARY KEY (`pessoa_idpessoa`),
  CONSTRAINT `fk_juridica_pessoa1`
    FOREIGN KEY (`pessoa_idpessoa`)
    REFERENCES `Banco_UTFPR`.`pessoa` (`idpessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`fornecedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`fornecedor` (
  `juridica_pessoa_idpessoa` INT NOT NULL,
  INDEX `fk_fornecedor_juridica1_idx` (`juridica_pessoa_idpessoa` ASC),
  PRIMARY KEY (`juridica_pessoa_idpessoa`),
  CONSTRAINT `fk_fornecedor_juridica1`
    FOREIGN KEY (`juridica_pessoa_idpessoa`)
    REFERENCES `Banco_UTFPR`.`juridica` (`pessoa_idpessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`funcionario` (
  `funcao` VARCHAR(45) NULL DEFAULT NULL,
  `salario` FLOAT NULL DEFAULT NULL,
  `fisica_pessoa_idpessoa` INT NOT NULL,
  INDEX `fk_funcionario_fisica1_idx` (`fisica_pessoa_idpessoa` ASC),
  PRIMARY KEY (`fisica_pessoa_idpessoa`),
  CONSTRAINT `fk_funcionario_fisica1`
    FOREIGN KEY (`fisica_pessoa_idpessoa`)
    REFERENCES `Banco_UTFPR`.`fisica` (`pessoa_idpessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`compra` (
  `idcompra` INT(11) NOT NULL,
  `carro_chassi` INT(11) NOT NULL,
  `datacompra` DATE NOT NULL,
  `valorcompra` FLOAT NOT NULL,
  `valorUnit` FLOAT NOT NULL,
  `fornecedor_juridica_pessoa_idpessoa` INT NOT NULL,
  `funcionario_fisica_pessoa_idpessoa` INT NOT NULL,
  PRIMARY KEY (`idcompra`, `carro_chassi`),
  INDEX `fk_compra_fornecedor1_idx` (`fornecedor_juridica_pessoa_idpessoa` ASC),
  INDEX `fk_compra_funcionario1_idx` (`funcionario_fisica_pessoa_idpessoa` ASC),
  INDEX `fk_compra_carro1_idx` (`carro_chassi` ASC),
  CONSTRAINT `fk_compra_fornecedor1`
    FOREIGN KEY (`fornecedor_juridica_pessoa_idpessoa`)
    REFERENCES `Banco_UTFPR`.`fornecedor` (`juridica_pessoa_idpessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compra_funcionario1`
    FOREIGN KEY (`funcionario_fisica_pessoa_idpessoa`)
    REFERENCES `Banco_UTFPR`.`funcionario` (`fisica_pessoa_idpessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compra_carro1`
    FOREIGN KEY (`carro_chassi`)
    REFERENCES `Banco_UTFPR`.`carro` (`chassi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`venda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`venda` (
  `idvenda` INT(11) NOT NULL,
  `carro_chassi` INT(11) NOT NULL,
  `datavenda` DATE NOT NULL,
  `valorvenda` FLOAT NOT NULL,
  `valorUnit` FLOAT NOT NULL,
  `cliente_fisica_pessoa_idpessoa` INT NOT NULL,
  `funcionario_fisica_pessoa_idpessoa` INT NOT NULL,
  PRIMARY KEY (`idvenda`, `carro_chassi`),
  INDEX `fk_venda_cliente1_idx` (`cliente_fisica_pessoa_idpessoa` ASC),
  INDEX `fk_venda_funcionario1_idx` (`funcionario_fisica_pessoa_idpessoa` ASC),
  INDEX `fk_venda_carro1_idx` (`carro_chassi` ASC),
  CONSTRAINT `fk_venda_cliente1`
    FOREIGN KEY (`cliente_fisica_pessoa_idpessoa`)
    REFERENCES `Banco_UTFPR`.`cliente` (`fisica_pessoa_idpessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_venda_funcionario1`
    FOREIGN KEY (`funcionario_fisica_pessoa_idpessoa`)
    REFERENCES `Banco_UTFPR`.`funcionario` (`fisica_pessoa_idpessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_venda_carro1`
    FOREIGN KEY (`carro_chassi`)
    REFERENCES `Banco_UTFPR`.`carro` (`chassi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `Banco_UTFPR`.`telefone`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Banco_UTFPR`.`telefone` (
  `numero` INT NOT NULL,
  `ddd` CHAR(2) NOT NULL,
  `pessoa_idpessoa` INT NOT NULL,
  PRIMARY KEY (`numero`, `pessoa_idpessoa`),
  INDEX `fk_telefone_pessoa1_idx` (`pessoa_idpessoa` ASC),
  CONSTRAINT `fk_telefone_pessoa1`
    FOREIGN KEY (`pessoa_idpessoa`)
    REFERENCES `Banco_UTFPR`.`pessoa` (`idpessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

