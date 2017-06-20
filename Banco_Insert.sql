INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('AM', 'Amazonas');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('pr', 'ParanÃ¡');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('rs', 'Rio Grande do Sul');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('sc', 'Santa Catarina');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('sp', 'SÃ£o Paulo');


INSERT INTO `banco_utfpr`.`cidade` (`idcidade`, `descricao`, `estado_uf`) VALUES ('1', 'Campo MourÃ£o', 'pr');
INSERT INTO `banco_utfpr`.`cidade` (`idcidade`, `descricao`, `estado_uf`) VALUES ('2', 'SÃ£o Paulo', 'sp');
INSERT INTO `banco_utfpr`.`cidade` (`idcidade`, `descricao`, `estado_uf`) VALUES ('3', 'FlorianÃ³polis', 'sc');
INSERT INTO `banco_utfpr`.`cidade` (`idcidade`, `descricao`, `estado_uf`) VALUES ('4', 'porto alegre', 'rs');
INSERT INTO `banco_utfpr`.`cidade` (`idcidade`, `descricao`, `estado_uf`) VALUES ('8', 'MANAUS', 'AM');


INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('1', 'GetÃºlio Vargas ', '1313', '8756', 'casa', '1');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('2', 'rua manoel mendes camargo', '100', '8720', 'kitnet', '1');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('3', 'av. joÃ£o XXIII', '542', '8857', 'apart. 54', '2');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('4', 'rua miranda', '125', '9578', 'casa', '3');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('5', 'rua esmeralda', '256', '6524', 'casa', '4');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('6', 'rua florisbela', '1865', '8632', 'empresa', '2');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('7', 'av. monte negro', '4528', '9624', 'empresa', '4');
INSERT INTO `banco_utfpr`.`endereco` (`idendereco`, `rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('8', 'rua edmundo merce', '5486', '3256', 'empresa', '3');


INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('1', '1');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('2', '2');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('3', '3');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('4', '4');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('5', '5');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('6', '6');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('7', '7');
INSERT INTO `banco_utfpr`.`pessoa` (`idpessoa`, `endereco_idendereco`) VALUES ('8', '8');


INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('11111111', '55', '3');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('22222222', '18', '2');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('33333333', '44', '4');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('56542545', '65', '5');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('99999999', '44', '1');


INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('64225', 'Luiz Henrique', '23', 'masculino', '16549', '1');
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('5795', 'Daniel', '18', 'masculino', '18654', '2');
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('64858', 'Michel', '22', 'masculino', '19452', '3');
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('24318', 'Juliano', '20', 'masculino', '12644', '4');
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('46928', 'camila', '21', 'feminino', '24321', '5');


INSERT INTO `banco_utfpr`.`funcionario` (`funcao`, `salario`, `fisica_pessoa_idpessoa`) VALUES ('compra/venda', '1800', '2');
INSERT INTO `banco_utfpr`.`funcionario` (`funcao`, `salario`, `fisica_pessoa_idpessoa`) VALUES ('compra/venda', '1850', '4');


INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('1');
INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('3');
INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('5');


INSERT INTO `banco_utfpr`.`fornecedor` (`cnpj`, `razaosocial`, `nomefantasia`, `inscricaoestadual`, `pessoa_idpessoa`) VALUES ('5155212', 'Rivel Fiet LTDA', 'Rivel', '545421', '6');
INSERT INTO `banco_utfpr`.`fornecedor` (`cnpj`, `razaosocial`, `nomefantasia`, `inscricaoestadual`, `pessoa_idpessoa`) VALUES ('6005141', ' New Car & CIA LTDA', 'New Car', '362155', '7');
INSERT INTO `banco_utfpr`.`fornecedor` (`cnpj`, `razaosocial`, `nomefantasia`, `inscricaoestadual`, `pessoa_idpessoa`) VALUES ('9422121', 'Fancar Ford LTDA', 'Fancar', '621518', '8');


INSERT INTO `banco_utfpr`.`marca` (`idmarca`, `nomeMarca`) VALUES ('1', 'Ford');
INSERT INTO `banco_utfpr`.`marca` (`idmarca`, `nomeMarca`) VALUES ('2', 'Chevrolet');
INSERT INTO `banco_utfpr`.`marca` (`idmarca`, `nomeMarca`) VALUES ('3', 'FIAT');
INSERT INTO `banco_utfpr`.`marca` (`idmarca`, `nomeMarca`) VALUES ('4', 'BMW');


INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('1', 'M3 TURBO', '4');
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('2', 'Sedan 4 portas flex 2.0', '1');
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('3', 'hatch 4 portas 1.0', '3');
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('4', 'sedan 4 portas 2.0', '2');
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('5', 'hatch 2 portas 1.8', '2');
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('6', 'hatch 4 portas 1.6 trail', '1');
INSERT INTO `banco_utfpr`.`modelo` (`idmodelo`, `descricaoModelo`, `marca_idmarca`) VALUES ('7', 'hatch 2 portas 1.0', '3');


INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('1253', '2017', 'fiesta', '6');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('1455', '2017', 'focus', '2');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('1515', '2002', 'MONZA', '4');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('2534', '2017', 'cruze', '4');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('2598', '2017', 'M3 turbo', '1');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('4265', '2017', 'palio', '3');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('6534', '2017', 'uno', '7');


INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('1', '4265', '2017-01-12', '83500', '48000', '6', '2');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('1', '6534', '2017-01-12', '83500', '35500', '6', '2');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('2', '2598', '2017-03-25', '135000', '135000', '7', '4');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('3', '1253', '2017-04-16', '119900', '51900', '8', '4');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `carro_chassi`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('3', '1455', '2017-04-16', '119900', '68000', '8', '4');


INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `carro_chassi`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('1', '1253', '2017-05-02', '60000', '60000', '1', '2');
INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `carro_chassi`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('2', '1455', '2017-05-05', '80000', '80000', '3', '4');
INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `carro_chassi`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('3', '6534', '2017-05-16', '45900', '45900', '5', '4');





