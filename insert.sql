INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`) VALUES ('123456', '2017', 'corsa');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`) VALUES ('123457', '2017', 'fiesta');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`) VALUES ('123458', '2017', 'cruze');
INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`) VALUES ('123459', '2017', 'fusion');




INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('PR', 'Paraná');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('SP', 'São Paulo');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('RS', 'Rio Grande do Sul');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('MG', 'Minas Gerais');
INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('SC', 'Santa Catarina');



INSERT INTO `banco_utfpr`.`cidade` (`descricao`, `estado_uf`) VALUES ('Iporã', 'PR');
INSERT INTO `banco_utfpr`.`cidade` (`descricao`, `estado_uf`) VALUES ('Umuarama', 'PR');
INSERT INTO `banco_utfpr`.`cidade` (`descricao`, `estado_uf`) VALUES ('Curitiba', 'PR');
INSERT INTO `banco_utfpr`.`cidade` (`descricao`, `estado_uf`) VALUES ('Campo Mourão', 'PR');
INSERT INTO `banco_utfpr`.`cidade` (`descricao`, `estado_uf`) VALUES ('São Paulo', 'SP');



INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `bairro`, `complemento`, `cidade_idcidade`) VALUES ('Getulio Vargas', '1313', '87302080', 'centro', 'kit net 4', '1');
INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `bairro`, `complemento`, `cidade_idcidade`) VALUES ('Av. Paraná', '1234', '87560000', 'maracanã', 'casa', '3');
INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `bairro`, `complemento`, `cidade_idcidade`) VALUES ('rua: Brasil', '1212', '65868425', 'pacaimbu', 'apartamento 53', '4');


INSERT INTO `banco_utfpr`.`marca` (`nomeMarca`) VALUES ('ford');
INSERT INTO `banco_utfpr`.`marca` (`nomeMarca`) VALUES ('chevrolet');


INSERT INTO `banco_utfpr`.`modelo` (`descricaoModelo`, `marca_idmarca`, `carro_chassi`) VALUES ('sedan 4 portas flex', '2', '123456');
INSERT INTO `banco_utfpr`.`modelo` (`descricaoModelo`, `marca_idmarca`, `carro_chassi`) VALUES ('hatch 4 portas gasolina', '1', '123457');
INSERT INTO `banco_utfpr`.`modelo` (`descricaoModelo`, `marca_idmarca`, `carro_chassi`) VALUES ('hatch 4 portas', '2', '123458');
INSERT INTO `banco_utfpr`.`modelo` (`descricaoModelo`, `marca_idmarca`, `carro_chassi`) VALUES ('sedan 4 portas ', '1', '123459');


INSERT INTO `banco_utfpr`.`pessoa` (`endereco_idendereco`) VALUES ('1');
INSERT INTO `banco_utfpr`.`pessoa` (`endereco_idendereco`) VALUES ('2');
INSERT INTO `banco_utfpr`.`pessoa` (`endereco_idendereco`) VALUES ('3');


INSERT INTO `banco_utfpr`.`telefone` (`numero`, `ddd`, `pessoa_idpessoa`) VALUES ('9999955', '44', '1');


INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('00033215', 'luiz Henrique', '23', 'masculino', '15445', '2');
INSERT INTO `banco_utfpr`.`fisica` (`cpf`, `nome`, `idade`, `sexo`, `rg`, `pessoa_idpessoa`) VALUES ('15151', 'Lauber', '19', 'masculino', '14526', '3');


UPDATE `banco_utfpr`.`funcionario` SET `funcao`='venda' WHERE `fisica_pessoa_idpessoa`='2';
UPDATE `banco_utfpr`.`funcionario` SET `funcao`='compra' WHERE `fisica_pessoa_idpessoa`='3';


INSERT INTO `banco_utfpr`.`juridica` (`cnpj`, `razaosocial`, `nomefantasia`, `inscricaoestadual`, `pessoa_idpessoa`) VALUES ('54454', 'fagundes&cristovam e cia ltda', 'newCar', '125151', '1');


INSERT INTO `banco_utfpr`.`fornecedor` (`juridica_pessoa_idpessoa`) VALUES ('1');


INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('2');
INSERT INTO `banco_utfpr`.`cliente` (`fisica_pessoa_idpessoa`) VALUES ('3');


INSERT INTO `banco_utfpr`.`compra` (`datacompra`, `valorcompra`, `valorUnit`, `modelo_idmodelo`, `fornecedor_juridica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('2017-02-25', '45000.00', '45000.00', '1', '1', '2');
INSERT INTO `banco_utfpr`.`compra` (`datacompra`, `valorcompra`, `valorUnit`, `modelo_idmodelo`, `fornecedor_juridica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('2017-01-13', '56000.00', '56000.00', '4', '1', '2');


INSERT INTO `banco_utfpr`.`venda` (`datavenda`, `valorvenda`, `valorUnit`, `modelo_idmodelo`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('2017-03-17', '84000.00', '84000.00', '2', '2', '3');
INSERT INTO `banco_utfpr`.`venda` (`datavenda`, `valorvenda`, `valorUnit`, `modelo_idmodelo`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('2017-04-25', '95000.00', '95000.00', '4', '2', '3');
INSERT INTO `banco_utfpr`.`venda` (`datavenda`, `valorvenda`, `valorUnit`, `modelo_idmodelo`, `cliente_fisica_pessoa_idpessoa`, `funcionario_fisica_pessoa_idpessoa`) VALUES ('2017-05-15', '64000.00', '64000.00', '1', '2', '3');
