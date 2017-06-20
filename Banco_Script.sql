drop schema if exists banco_utfpr;
-- -----------------------------------------------------
-- Schema banco_utfpr
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `banco_utfpr` DEFAULT CHARACTER SET utf8 ;
USE `banco_utfpr` ;

-- -----------------------------------------------------
-- Table `banco_utfpr`.`marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`marca` (
  `idmarca` INT(11) NOT NULL AUTO_INCREMENT,
  `nomeMarca` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idmarca`))
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `banco_utfpr`.`modelo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`modelo` (
  `idmodelo` INT(11) NOT NULL AUTO_INCREMENT,
  `descricaoModelo` VARCHAR(45) NOT NULL,
  `marca_idmarca` INT(11) NOT NULL,
  PRIMARY KEY (`idmodelo`),
  INDEX `fk_modelo_marca1_idx` (`marca_idmarca` ASC),
  CONSTRAINT `fk_modelo_marca1`
    FOREIGN KEY (`marca_idmarca`)
    REFERENCES `banco_utfpr`.`marca` (`idmarca`))
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `banco_utfpr`.`carro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`carro` (
  `chassi` INT(11) NOT NULL,
  `ano` INT(11) NOT NULL,
  `descricaoCarro` VARCHAR(45) NOT NULL,
  `modelo_idmodelo` INT(11) NOT NULL,
  PRIMARY KEY (`chassi`),
  INDEX `fk_carro_modelo1_idx` (`modelo_idmodelo` ASC),
  CONSTRAINT `fk_carro_modelo1`
    FOREIGN KEY (`modelo_idmodelo`)
    REFERENCES `banco_utfpr`.`modelo` (`idmodelo`))
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `banco_utfpr`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`estado` (
  `uf` CHAR(2) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`uf`))
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `banco_utfpr`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`cidade` (
  `idcidade` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NOT NULL,
  `estado_uf` CHAR(2) NOT NULL,
  PRIMARY KEY (`idcidade`),
  INDEX `fk_cidade_estado_idx` (`estado_uf` ASC),
  CONSTRAINT `fk_cidade_estado`
    FOREIGN KEY (`estado_uf`)
    REFERENCES `banco_utfpr`.`estado` (`uf`))
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `banco_utfpr`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`endereco` (
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
    REFERENCES `banco_utfpr`.`cidade` (`idcidade`));


-- -----------------------------------------------------
-- Table `banco_utfpr`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`pessoa` (
  `idpessoa` INT NOT NULL AUTO_INCREMENT,
  `endereco_idendereco` INT NOT NULL,
  PRIMARY KEY (`idpessoa`),
  INDEX `fk_pessoa_endereco1_idx` (`endereco_idendereco` ASC),
  CONSTRAINT `fk_pessoa_endereco1`
    FOREIGN KEY (`endereco_idendereco`)
    REFERENCES `banco_utfpr`.`endereco` (`idendereco`));


-- -----------------------------------------------------
-- Table `banco_utfpr`.`fisica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`fisica` (
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
    REFERENCES `banco_utfpr`.`pessoa` (`idpessoa`));


-- -----------------------------------------------------
-- Table `banco_utfpr`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`cliente` (
  `fisica_pessoa_idpessoa` INT NOT NULL,
  PRIMARY KEY (`fisica_pessoa_idpessoa`),
  CONSTRAINT `fk_cliente_fisica1`
    FOREIGN KEY (`fisica_pessoa_idpessoa`)
    REFERENCES `banco_utfpr`.`fisica` (`pessoa_idpessoa`))
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `banco_utfpr`.`fornecedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`fornecedor` (
  `cnpj` INT NOT NULL,
  `razaosocial` VARCHAR(45) NOT NULL,
  `nomefantasia` VARCHAR(45) NOT NULL,
  `inscricaoestadual` VARCHAR(45) NULL,
  `pessoa_idpessoa` INT NOT NULL,
  INDEX `fk_juridica_pessoa1_idx` (`pessoa_idpessoa` ASC),
  PRIMARY KEY (`pessoa_idpessoa`),
  CONSTRAINT `fk_juridica_pessoa1`
    FOREIGN KEY (`pessoa_idpessoa`)
    REFERENCES `banco_utfpr`.`pessoa` (`idpessoa`));


-- -----------------------------------------------------
-- Table `banco_utfpr`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`funcionario` (
  `funcao` VARCHAR(45) NULL DEFAULT NULL,
  `salario` FLOAT NULL DEFAULT NULL,
  `fisica_pessoa_idpessoa` INT NOT NULL,
  PRIMARY KEY (`fisica_pessoa_idpessoa`),
  CONSTRAINT `fk_funcionario_fisica1`
    FOREIGN KEY (`fisica_pessoa_idpessoa`)
    REFERENCES `banco_utfpr`.`fisica` (`pessoa_idpessoa`))
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `banco_utfpr`.`compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`compra` (
  `idcompra` INT(11) NOT NULL AUTO_INCREMENT,
  `carro_chassi` INT(11) NOT NULL,
  `datacompra` DATE NOT NULL,
  `valorcompra` FLOAT NOT NULL,
  `valorUnit` FLOAT NOT NULL,
  `fornecedor_pessoa_idpessoa` INT NOT NULL,
  `funcionario_fisica_pessoa_idpessoa` INT NOT NULL,
  PRIMARY KEY (`idcompra`, `carro_chassi`),
  INDEX `fk_compra_carro1_idx` (`carro_chassi` ASC),
  INDEX `fk_compra_fornecedor1_idx` (`fornecedor_pessoa_idpessoa` ASC),
  INDEX `fk_compra_funcionario1_idx` (`funcionario_fisica_pessoa_idpessoa` ASC),
  CONSTRAINT `fk_compra_carro1`
    FOREIGN KEY (`carro_chassi`)
    REFERENCES `banco_utfpr`.`carro` (`chassi`),
  CONSTRAINT `fk_compra_fornecedor1`
    FOREIGN KEY (`fornecedor_pessoa_idpessoa`)
    REFERENCES `banco_utfpr`.`fornecedor` (`pessoa_idpessoa`),
  CONSTRAINT `fk_compra_funcionario1`
    FOREIGN KEY (`funcionario_fisica_pessoa_idpessoa`)
    REFERENCES `banco_utfpr`.`funcionario` (`fisica_pessoa_idpessoa`))
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `banco_utfpr`.`venda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`venda` (
  `idvenda` INT(11) NOT NULL AUTO_INCREMENT,
  `carro_chassi` INT(11) NOT NULL,
  `datavenda` DATE NOT NULL,
  `valorvenda` FLOAT NOT NULL,
  `valorUnit` FLOAT NOT NULL,
  `cliente_fisica_pessoa_idpessoa` INT NOT NULL,
  `funcionario_fisica_pessoa_idpessoa` INT NOT NULL,
  PRIMARY KEY (`idvenda`, `carro_chassi`),
  INDEX `fk_venda_carro1_idx` (`carro_chassi` ASC),
  INDEX `fk_venda_cliente1_idx` (`cliente_fisica_pessoa_idpessoa` ASC),
  INDEX `fk_venda_funcionario1_idx` (`funcionario_fisica_pessoa_idpessoa` ASC),
  CONSTRAINT `fk_venda_carro1`
    FOREIGN KEY (`carro_chassi`)
    REFERENCES `banco_utfpr`.`carro` (`chassi`),
  CONSTRAINT `fk_venda_cliente1`
    FOREIGN KEY (`cliente_fisica_pessoa_idpessoa`)
    REFERENCES `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`),
  CONSTRAINT `fk_venda_funcionario1`
    FOREIGN KEY (`funcionario_fisica_pessoa_idpessoa`)
    REFERENCES `banco_utfpr`.`funcionario` (`fisica_pessoa_idpessoa`))
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `banco_utfpr`.`telefone`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `banco_utfpr`.`telefone` (
  `numero` INT NOT NULL,
  `ddd` CHAR(2) NOT NULL,
  `pessoa_idpessoa` INT NOT NULL,
  PRIMARY KEY (`numero`, `pessoa_idpessoa`),
  INDEX `fk_telefone_pessoa1_idx` (`pessoa_idpessoa` ASC),
  CONSTRAINT `fk_telefone_pessoa1`
    FOREIGN KEY (`pessoa_idpessoa`)
    REFERENCES `banco_utfpr`.`pessoa` (`idpessoa`));
