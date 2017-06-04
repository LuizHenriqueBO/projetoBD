INSERT INTO `banco_utfpr`.`marca` (`nomeMarca`) VALUES ('Ford');
INSERT INTO `banco_utfpr`.`marca` (`nomeMarca`) VALUES ('Chevrolet');
INSERT INTO `banco_utfpr`.`marca` (`nomeMarca`) VALUES ('Fiet');
INSERT INTO `banco_utfpr`.`marca` (`nomeMarca`) VALUES ('BMW');

INSERT INTO `banco_utfpr`.`modelo` (`descricaoModelo`) VALUES ('Sedan 4 portas flex 1.6');
INSERT INTO `banco_utfpr`.`modelo` (`descricaoModelo`) VALUES ('hatch 4 portas 1.0');
INSERT INTO `banco_utfpr`.`modelo` (`descricaoModelo`) VALUES ('sedan 4 portas 2.0');
INSERT INTO `banco_utfpr`.`modelo` (`descricaoModelo`) VALUES ('hatch 2 portas 1.8');
INSERT INTO `banco_utfpr`.`modelo` (`descricaoModelo`) VALUES ('hatch 2 portas 1.6 trail');
INSERT INTO `banco_utfpr`.`modelo` (`descricaoModelo`) VALUES ('hatch 2 portas 1.0');

INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`,`marca_idmarca`) VALUES ('1253', '2017', 'fiesta', '1','1');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`,`marca_idmarca`) VALUES ('2534', '2017', 'cruze', '2','2');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`,`marca_idmarca`) VALUES ('6534', '2017', 'uno', '6','3');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`,`marca_idmarca`) VALUES ('4265', '2017', 'palio', '3', '3');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`,`marca_idmarca`) VALUES ('2598', '2017', 'M3 turbo', '4','4');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`,`marca_idmarca`) VALUES ('1455', '2017', 'focus', '1', '1');

INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('pr', 'parana');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('sp', 'são paulo');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('sc', 'santa catarina');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('rs', 'rio grande do sul');

INSERT INTO `banco_utfpr`.`cidade` (`descricao`, `estado_uf`) VALUES ('campo mourão', 'pr');
INSERT INTO `banco_utfpr`.`cidade` (`descricao`, `estado_uf`) VALUES ('são paulo', 'sp');
INSERT INTO `banco_utfpr`.`cidade` (`descricao`, `estado_uf`) VALUES ('florianópolis', 'sc');
INSERT INTO `banco_utfpr`.`cidade` (`descricao`, `estado_uf`) VALUES ('porto alegre', 'rs');

INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('rua getúlio vargas', '1313', '8756', 'casa', '1');
INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('rua manoel mendes camargo', '100', '8720', 'kitnet', '1');
INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('av. joão XXIII', '542', '8857', 'apart. 54', '2');
INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('rua miranda', '125', '9578', 'casa', '3');
INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('rua esmeralda', '256', '6524', 'casa', '4');
INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('rua florisbela', '1865', '8632', 'empresa', '2');
INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('av. monte negro', '4528', '9624', 'empresa', '4');
INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('rua edmundo merce', '5486', '3256', 'empresa', '3');


INSERT INTO `banco_utfpr`.`pessoa` (`endereco_idendereco`) VALUES ('1');
INSERT INTO `banco_utfpr`.`pessoa` (`endereco_idendereco`) VALUES ('2');
INSERT INTO `banco_utfpr`.`pessoa` (`endereco_idendereco`) VALUES ('3');
INSERT INTO `banco_utfpr`.`pessoa` (`endereco_idendereco`) VALUES ('4');
INSERT INTO `banco_utfpr`.`pessoa` (`endereco_idendereco`) VALUES ('5');
INSERT INTO `banco_utfpr`.`pessoa` (`endereco_idendereco`) VALUES ('6');
INSERT INTO `banco_utfpr`.`pessoa` (`endereco_idendereco`) VALUES ('7');
INSERT INTO `banco_utfpr`.`pessoa` (`endereco_idendereco`) VALUES ('8');


INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('064225', 'Luiz Henrique', '23', 'masculino', '16549', '1');
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('5795', 'Daniel', '18', 'masculino', '18654', '2');
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('64858', 'Michel', '22', 'masculino', '19452', '3');
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('24318', 'Juliano', '20', 'masculino', '12644', '4');
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('46928', 'camila', '21', 'feminino', '24321', '5');

INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('99999999', '44', '1');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('22222222', '18', '2');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('11111111', '55', '3');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('33333333', '44', '4');
INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('56542545', '65', '5');


INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('1');
INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('3');
INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('5');

INSERT INTO `banco_utfpr`.`funcionario` (`funcao`, `salario`, `fisica_pessoa_idpessoa`) VALUES ('compra/venda', '1800.00', '2');
INSERT INTO `banco_utfpr`.`funcionario` (`funcao`, `salario`, `fisica_pessoa_idpessoa`) VALUES ('compra/venda', '1850.00', '4');

INSERT INTO `banco_utfpr`.`juridica` (`cnpj`, `razaosocial`, `nomefantasia`, `inscricaoestadual`, `pessoa_idpessoa`) VALUES ('5155212', 'Rivel Fiet LTDA', 'Rivel', '545421', '6');
INSERT INTO `banco_utfpr`.`juridica` (`cnpj`, `razaosocial`, `nomefantasia`, `inscricaoestadual`, `pessoa_idpessoa`) VALUES ('6005141', ' New Car & CIA LTDA', 'New Car', '362155', '7');
INSERT INTO `banco_utfpr`.`juridica` (`cnpj`, `razaosocial`, `nomefantasia`, `inscricaoestadual`, `pessoa_idpessoa`) VALUES ('9422121', 'Fancar Ford LTDA', 'Fancar', '621518', '8');

INSERT INTO `banco_utfpr`.`fornecedor` (`juridica_pessoa_idpessoa`) VALUES ('6');
INSERT INTO `banco_utfpr`.`fornecedor` (`juridica_pessoa_idpessoa`) VALUES ('7');
INSERT INTO `banco_utfpr`.`fornecedor` (`juridica_pessoa_idpessoa`) VALUES ('8');

INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_juridica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`, `carro_chassi`) VALUES ('1', '2017-01-12', '83500.00', '48000.00', '6', '2', '4265');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_juridica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`, `carro_chassi`) VALUES ('1', '2017-01-12', '83500.00', '35500.00', '6', '2', '6534');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_juridica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`, `carro_chassi`) VALUES ('2', '2017-03-25', '135000.00', '135000.00', '7', '4', '2598');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_juridica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`, `carro_chassi`) VALUES ('3', '2017-04-16', '119900.00', '51900.00', '8', '4', '1253');
INSERT INTO `banco_utfpr`.`compra` (`idcompra`, `datacompra`, `valorcompra`, `valorUnit`, `fornecedor_juridica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`, `carro_chassi`) VALUES ('3', '2017-04-16', '119900.00', '68000.00', '8', '4', '1455');

INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`, `carro_chassi`) VALUES ('1', '2017-05-02', '60000.00', '60000.00', '1', '2', '1253');
INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`, `carro_chassi`) VALUES ('2', '2017-05-05', '80000.00', '80000.00', '3', '4', '1455');
INSERT INTO `banco_utfpr`.`venda` (`idvenda`, `datavenda`, `valorvenda`, `valorUnit`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`, `carro_chassi`) VALUES ('3', '2017-05-16', '45900.00', '45900.00', '5', '4', '6534');
