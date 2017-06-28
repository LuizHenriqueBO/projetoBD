INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('AM', 'Amazonas');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('pr', 'ParanÃ¡');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('rs', 'Rio Grande do Sul');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('sc', 'Santa Catarina');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('sp', 'SÃ£o Paulo');


INSERT INTO `banco_utfpr`.`cidade` (`idcidade`, `descricao`, `estado_uf`) VALUES ('1', 'Campo MourÃ£o', 'pr');
INSERT INTO `banco_utfpr`.`cidade` (`idcidade`, `descricao`, `estado_uf`) VALUES ('2', 'SÃ£o Paulo', 'sp');
INSERT INTO `banco_utfpr`.`cidade` (`idcidade`, `descricao`, `estado_uf`) VALUES ('3', 'FlorianÃ³polis', 'sc');
INSERT INTO `banco_utfpr`.`cidade` (`idcidade`, `descricao`, `estado_uf`) VALUES ('4', 'porto alegre', 'rs');
INSERT INTO `banco_utfpr`.`cidade` (`idcidade`, `descricao`, `estado_uf`) VALUES ('5', 'MANAUS', 'AM');



/*ENDEREÇO DOS CLIENTES*/
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('1', 'GetÃºlio Vargas ', '1313', '8756', 'casa', '1');

/*ENDEREÇO FUNCIONÁRO*/
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('2', 'Av. Manoel mendes camargo', '100', '8720', 'kitnet', '1');

/*ENDERECO CLIENTE*/
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('3', 'Av. JoÃ£o XXIII', '542', '8857', 'apart. 54', '2');

/*ENDEREÇO FUNCIONÁRO*/
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('4', 'Rua Miranda', '125', '9578', 'casa', '3');


/*ENDERECO CLIENTE*/
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('5', 'Rua Esmeralda', '256', '6524', 'casa', '4');

/*ENDEREÇO FORNECEDOR*/
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('6', 'Rua Florisbela', '1865', '8632', 'empresa', '2');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('7', 'Av. Monte Negro', '4528', '9624', 'empresa', '4');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('8', 'Rua Edmundo Merce', '5486', '3256', 'empresa', '3');


/*ENDERECO CLIENTE*/
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('9', 'Rua Tiradentes', '384', '8543', 'casa', '4');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('10', 'Rua Duque De Caxias', '329', '1457', 'apart.', '4');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('11', 'Rua Santos Dumont', '306', '3306', 'casa', '1');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('12', 'Rua Bela Vista', '6524', '8442', 'kitnet', '5');


/*ENDEREÇO DOS FUNFIONÁRIOS*/
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('13', 'Av. Iguaçu', '7544', '3554', 'casa', '4');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('14', 'Av. Cândido de Abreu', '7541', '8422', 'apart.', '1');


/*ENDEREÇO DOS FORNECEDORES*/
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('15', 'Av. Paraná', '5421', '5311', 'empresa', '1');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('16', 'Rua Tiradentes', '415', '8543', 'empresa', '4');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('17', 'Av. Manoel mendes camargo', '325', '8720', 'empresa', '1');





INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('1', '1');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('2', '2');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('3', '3');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('4', '4');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('5', '5');

INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('6', '6');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('7', '7');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('8', '8');

INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('9', '9');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('10', '10');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('11', '11');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('12', '12');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('13', '13');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('14', '14');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('15', '15');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('16', '16');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('17', '17');


INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('99999999', '44', '1');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('22222222', '18', '2');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('11111111', '55', '3');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('33333333', '44', '4');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('56542545', '65', '5');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('52131111', '35', '6');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('16161164', '44', '7');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('51555151', '51', '8');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('65161615', '44', '9');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('16511151', '32', '10');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('99999999', '14', '11');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('21515115', '21', '12');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('51611614', '75', '13');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('61519151', '84', '14');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('75919161', '81', '15');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('36151518', '45', '16');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('84515184', '65', '17');




/*CLIENTE*/
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('64225', 'Luiz Henrique', '23', 'masculino', '16549', '1');

/*FUNCIONARIO*/
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('5795', 'Daniel', '18', 'masculino', '18654', '2');

/*CLIENTE*/
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('64858', 'Junior', '18', 'masculino', '19452', '3');

/*FUNCIONARIO*/
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('24318', 'Juliano', '20', 'masculino', '12644', '4');

/*CLIENTE*/
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('46928', 'Camila', '21', 'feminino', '24321', '5');

/*CLIENTES*/
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('46928', 'Juarez', '54', 'masculino', '615151', '9');
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('46928', 'Luiz Paulo', '23', 'masculino', '214751', '10');
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('46928', 'Jean', '22', 'masculino', '812151', '11');
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('46928', 'Milton', '48', 'masculino', '184844', '12');

/*FUNCIONARIO*/
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('46928', 'Michel', '22', 'masculino', '258115', '13');
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('46928', 'Danilo', '21', 'masculino', '548451', '14');



/*TABELA DE FUNCIONÁRIOS*/

INSERT INTO `banco_utfpr`.`funcionario` (`funcao`, `salario`, `fisica_pessoa_idpessoa`) VALUES ('compra/venda', '1800.00', '2');
INSERT INTO `banco_utfpr`.`funcionario` (`funcao`, `salario`, `fisica_pessoa_idpessoa`) VALUES ('compra/venda', '1850.00', '4');
INSERT INTO `banco_utfpr`.`funcionario` (`funcao`, `salario`, `fisica_pessoa_idpessoa`) VALUES ('compra/venda', '1980.00', '13');
INSERT INTO `banco_utfpr`.`funcionario` (`funcao`, `salario`, `fisica_pessoa_idpessoa`) VALUES ('compra/venda', '1900.00', '14');


/*TABELA DE CLIENTES*/
INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('1');
INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('3');
INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('5');
INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('9');
INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('10');
INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('11');
INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('12');


/*TABELA DE FORNECEDORES*/
INSERT INTO `banco_utfpr`.`fornecedor` (`cnpj`, `razaosocial`, `nomefantasia`, `inscricaoestadual`, `pessoa_idpessoa`) VALUES ('9422121', 'Ford & CIA LTDA', 'Ford', '621518', '6');
INSERT INTO `banco_utfpr`.`fornecedor` (`cnpj`, `razaosocial`, `nomefantasia`, `inscricaoestadual`, `pessoa_idpessoa`) VALUES ('5548439', 'Chevrolet & CIA LTDA', 'Chevrolet', '615155', '7');
INSERT INTO `banco_utfpr`.`fornecedor` (`cnpj`, `razaosocial`, `nomefantasia`, `inscricaoestadual`, `pessoa_idpessoa`) VALUES ('5155212', 'Fiat & CIA LTDA', '	Fiat', '545421', '8');
INSERT INTO `banco_utfpr`.`fornecedor` (`cnpj`, `razaosocial`, `nomefantasia`, `inscricaoestadual`, `pessoa_idpessoa`) VALUES ('6005141', 'Peugeot & CIA LTDA ', 'Peugeot', '362155', '15');
INSERT INTO `banco_utfpr`.`fornecedor` (`cnpj`, `razaosocial`, `nomefantasia`, `inscricaoestadual`, `pessoa_idpessoa`) VALUES ('6005141', 'Renault & CIA LTDA ', 'Renault', '15151', '16');
INSERT INTO `banco_utfpr`.`fornecedor` (`cnpj`, `razaosocial`, `nomefantasia`, `inscricaoestadual`, `pessoa_idpessoa`) VALUES ('9422121', 'Toyota Motor & CIA LTDA', 'Toyota', '59847', '17');


/*MARCAS*/
INSERT INTO `banco_utfpr`.`marca` (`idmarca`, `nomeMarca`) VALUES ('1', 'Ford');
INSERT INTO `banco_utfpr`.`marca` (`idmarca`, `nomeMarca`) VALUES ('2', 'Chevrolet');
INSERT INTO `banco_utfpr`.`marca` (`idmarca`, `nomeMarca`) VALUES ('3', 'Fiat');
INSERT INTO `banco_utfpr`.`marca` (`idmarca`, `nomeMarca`) VALUES ('4', 'Peugeot');
INSERT INTO `banco_utfpr`.`marca` (`idmarca`, `nomeMarca`) VALUES ('5', 'Renault');
INSERT INTO `banco_utfpr`.`marca` (`idmarca`, `nomeMarca`) VALUES ('6', 'Toyota');


/*FORD*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('1', 'sedan SEL 2.0 Ecoboost', '1'); /*FUSION*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('2', 'Sedan 1.6 titanium', '1');/*KA*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('3', 'hatch 1.6 trail', '1');/*FIESTA*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('4', 'sedan 2.0 SE AT Fastback', '1');/*FOCUS*/

/*CHEVROLET*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('5', 'hatch 1.4 sport', '2');/*CRUZE*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('6', 'hatch 1.6 LTZ', '2');/*COBALT*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('7', 'hatch 1.0 LTZ', '2');/*SELTA*/

/*FIAT*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('8', 'hatch 1.0 Attractive', '3');/*uno*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('9', 'hatch 1.6 Easy', '3');/*Mobi*/

/*PEUGEOT*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('10', 'hatch 1.8 GTi', '4');/*208*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('11', 'hatch 1.6 Allure. ', '4');/*308*/

/*RENAULT*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('12', 'hatch 1.6 Stepway', '5');/*sandero*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('13', 'sedan 1.0 Authentique', '5');/*logan*/

/*TOYOTA*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('14', 'hatch 1.3 Platinium', '6');/*etios*/
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('15', 'sedan 1.5 Platinium', '6');/*etios*/







/*carros da ford*/
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('1553', '2017', 'Fusion', '1');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('1151', '2017', 'Ka', '2');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('1451', '2017', 'Fiesta', '3');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('1264', '2017', 'Focus', '4');

/*carros da chevrolet*/
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('2151', '2017', 'Cruze', '5');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('2874', '2017', 'Cobalt', '6');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('2484', '2017', 'Selta', '7');

/*carros da fiat*/
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('3144', '2017', 'Uno', '8');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('3655', '2017', 'Mobi', '9');

/*carros da peugeot*/
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('4215', '2017', 'Peugeot 208', '10');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('4984', '2017', 'Peugeot 308', '11');

/*carros da renault*/
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('5146', '2017', 'Sandero', '12');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('5698', '2017', 'Logan', '13');

/*carros da toyota*/
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('6181', '2017', 'Etios', '14');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('6849', '2017', 'Etios', '15');



/*compra da ford*/
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('1', '1553', '2017-01-02', '310000.00', '120000.00', '6', '2');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('1', '1151', '2017-01-02', '310000.00', '45000.00', '6', '2');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('1', '1451', '2017-01-02', '310000.00', '60000.00', '6', '2');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('1', '1264', '2017-01-02', '310000.00', '85000.00', '6', '2');


/*compra da chevrolet*/
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('2', '2151', '2017-01-05', '193000.00', '80000.00', '7', '14');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('2', '2874', '2017-01-05', '193000.00', '75000.00', '7', '14');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('2', '2484', '2017-01-05', '193000.00', '38000.00', '7', '14');


/*carros da fiat*/
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('3', '3144', '2017-02-08', '81000.00', '36000.00', '8', '13');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('3', '3655', '2017-02-08', '81000.00', '45000.00', '8', '13');


/*compra da peugeot*/
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('4', '4215', '2017-02-22', '140000.00', '65000.00', '15', '4');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('4', '4984', '2017-02-22', '140000.00', '75000.00', '15', '4');


/*compra da renault*/
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('5', '5146', '2017-03-15', '120000.00', '52000.00', '16', '4');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('5', '5698', '2017-03-15', '120000.00', '68000.00', '16', '4');


/*compra da toyota*/
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('6', '6181', '2017-03-23', '110000.00', '45000.00', '17', '2');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('6', '6849', '2017-03-23', '110000.00', '65000.00', '17', '2');







/*venda para luiz henrique*/
INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `carro_chassi`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('1', '1451', '2017-02-13', '174000.00', '78000.00', '1', '4');
INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `carro_chassi`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('1', '1264', '2017-02-13', '174000.00', '96000.00', '1', '4');

/*venda para junior*/
INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `carro_chassi`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('2', '2484', '2017-03-06', '45000.00', '45000.00', '3', '2');

/*venda para Camila*/
INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `carro_chassi`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('3', '1151', '2017-03-12', '55000.00', '55000.00', '5', '14');

/*venda para Juarez*/
INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `carro_chassi`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('4', '2474', '2017-04-02', '85000.00', '85000.00', '9', '13');

/*venda para Luiz Paulo*/
INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `carro_chassi`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('5', '1553', '2017-04-07', '130000.00', '130000.00', '10', '4');

/*venda para Jean*/
INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `carro_chassi`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('6', '4984', '2017-04-15', '86000.00', '86000.00', '11', '4');

/*venda para Jean*/
INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `carro_chassi`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('7', '2151', '2017-05-10', '96000.00', '96000.00', '12', '2');













