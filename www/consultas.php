<!DOCTYPE html>
<html>
    <head>

        <title>CONSULTAS</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"> 
        <script src="jQuery/jquery-3.2.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>    

    </head>

    <body>
        <style>
            @import url('../comandocss/fundo.css');
        </style>


        <!-- A dark one -->
        <nav class="navbar navbar-collapse" role="navigation">


            <div class="container">
                <div class="row">
                    <div class="col">

                        <div id="main-menu" class="list-group">

                            <a href="index.html" class="list-group-item" role="button" align="center">VOLTAR</a>
                            <a href="#sub-menu" class="list-group-item active" data-toggle="collapse" data-parent="#main-menu"  align="center">CONSULTAS <span class="caret"></span></a>


                        </div>
                    </div>    
                </div>
                <div class="col-md-9">

                </div>
            </div>

        </nav>


        <div class="collapse list-group-level1" id="sub-menu">

            <!--<a href="#" class="list-group-item" data-parent="#sub-menu" align="center">Sub Item 1</a>-->

            <a data-toggle="modal" class="list-group-item "data-target="#myModal1" align="center" >DDD, TELEFONE E NOME DOS CLIENTES QUE COMPRARAM CARRO MARCA FORD</a>

            <a data-toggle="modal" class="list-group-item "data-target="#myModal2" align="center" >CARRO E CLIENTE QUE COMPROU CARRRO QUE O FUNC. DANIEL ADQUIRIU</a>

            <a data-toggle="modal" class="list-group-item "data-target="#myModal3" align="center" >CARROS DISPONÍVEIS PARA VENDA</a>

            <a data-toggle="modal" class="list-group-item "data-target="#myModal4" align="center" >CARROS QUE FORAM VENDIDOS PARA O ESTADO DO PARANÁ</a>

            <a data-toggle="modal" class="list-group-item "data-target="#myModal5" align="center" >CARROS COMPRADO E VENDIDO NO ANO DE 2017</a>

            <a data-toggle="modal" class="list-group-item "data-target="#myModal6" align="center" >MÉDIA DE PREÇO DE CADA VENDA</a>

            <a data-toggle="modal" class="list-group-item "data-target="#myModal7" align="center" >RAZÃO SOCIAL DO FORNECEDOR QUE FORNECERAM CARRO DA MARCA FORD</a>

            <a data-toggle="modal" class="list-group-item "data-target="#myModal8" align="center" >NOME DOS CARROS E DOS CLIENTE QUE COMPROU CARRO QUE FOI FORNECEIDO PELA Ford & CIA LTDA</a>

            <a data-toggle="modal" class="list-group-item "data-target="#myModal9" align="center" >ENDEREÇO DO CLIENTE QUE COMPROU O CARRO FOCUS</a>

            <a data-toggle="modal" class="list-group-item "data-target="#myModal10" align="center" >NOME DOS FUNCIONÁRIOS QUE VENDERAM CARRO PARA CLIENTES DA CIDADE DE PORTO ALEGRE</a>


        </div>



        <div class="container">

            <!-- Modal -->
            <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">DDD, TELEFONE E NOME DOS CLIENTES QUE COMPRARAM CARRO MARCA FORD</h5>
                        </div>
                        <div class="modal-body">


                            <table style=" width:500px" class="table table-hover" id="tabelas">
                                <thead>
                                    <tr>

                                        <th>DDD</th>
                                        <th>TELEFONE</th>
                                        <th>NOME</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    include 'conn.php';



                                    $sql = "select distinct t.ddd, t.numero, f.nome from telefone t, pessoa p, fisica f, venda v where t.pessoa_idpessoa = p.idpessoa and f.pessoa_idpessoa = p.idpessoa and v.cliente_fisica_pessoa_idpessoa = f.pessoa_idpessoa and v.carro_chassi in (select c.chassi from carro c, marca m, modelo mo where c.modelo_idmodelo = mo.idmodelo and mo.marca_idmarca = m.idmarca and m.nomeMarca = 'ford');";


                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                                <td>" . $row["ddd"] . "</td>
                                                <td>" . $row["numero"] . "</td>
                                                <td>" . $row["nome"] . "</td>
                                        
                                                </tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>




                                </tbody>           
                            </table>        

                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">CARRO E CLIENTE QUE COMPROU CARRRO QUE O FUNC. DANIEL ADQUIRIU</h5>
                        </div>
                        <div class="modal-body">


                            <table style=" width:550px" class="table table-hover" id="tabelas">
                                <thead>
                                    <tr>

                                        <th>CARRO</th>
                                        <th>CLIENTE</th>


                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    include 'conn.php';



                                    $sql = "select c.descricaoCarro,  f.nome

                    from carro c, pessoa p, fisica f, cliente cli, venda v

                    where p.idpessoa = f.pessoa_idpessoa and 

                          cli.fisica_pessoa_idpessoa = f.pessoa_idpessoa and

                          v.cliente_fisica_pessoa_idpessoa = cli.fisica_pessoa_idpessoa and

                          c.chassi = v.carro_chassi and

                          c.chassi  in ( select c2.chassi

                                            from carro c2, funcionario fun, compra com, fisica fi
                    
					    where c2.chassi = com.carro_chassi and
                    
						   fun.fisica_pessoa_idpessoa = fi.pessoa_idpessoa and 
                        
                                                   fun.fisica_pessoa_idpessoa = com.funcionario_fisica_pessoa_idpessoa and

                                                    fi.nome = 'Daniel');";



                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                                <td>" . $row["descricaoCarro"] . "</td>
                                                <td>" . $row["nome"] . "</td>
                                       
                                                


                                                </tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>




                                </tbody>           
                            </table>        



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>




            <div class="modal fade" id="myModal3" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">CARROS DISPONÍVEIS PARA VENDA</h5>
                        </div>
                        <div class="modal-body">


                            <table style=" width:560px" class="table table-hover" id="tabelas">
                                <thead>
                                    <tr>

                                        <th>CHASSI</th>
                                        <th>CARRO</th>
                                        <th>ANO</th>
                                        <th>MODELO</th>
                                        <th>MARCA</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    include 'conn.php';



                                    $sql = "select chassi,descricaoCarro,ano, descricaoModelo,nomeMarca 

                     from carro c1, compra com, modelo mo, marca ma

                     where c1.chassi = com.carro_chassi and 

                     c1.modelo_idmodelo = mo.idmodelo and 

                     mo.marca_idmarca = ma.idmarca

                     and c1.chassi not in ( select c.chassi
                                           
                                            from carro c, venda v

                                            where c.chassi = v.carro_chassi );";



                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                                <td>" . $row["chassi"] . "</td>
                                                <td>" . $row["descricaoCarro"] . "</td>
                                                <td>" . $row["ano"] . "</td>
                                                <td>" . $row["descricaoModelo"] . "</td>
                                                <td>" . $row["nomeMarca"] . "</td>

                                                


                                                </tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>




                                </tbody>           
                            </table>        



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>





            <div class="modal fade" id="myModal4" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">CARROS QUE FORAM VENDIDOS PARA O ESTADO DO PARANÁ</h5>
                        </div>
                        <div class="modal-body">


                            <table style=" width:570px" class="table table-hover" id="tabelas">
                                <thead>
                                    <tr>

                                        <th>MARCA</th>
                                        <th>CARRO</th>
                                        <th>ANO</th>
                                        <th>MODELO</th>
                                        <th>VALOR</th>
                                        <th>DATA</th>




                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    include 'conn.php';



                                    $sql = "select ma.nomeMarca, car.descricaoCarro, car.ano, mo.descricaoModelo,  v.valorUnit, v.datavenda

                   from marca ma, modelo mo, carro car, venda v

                   where ma.idmarca = mo.marca_idmarca and car.modelo_idmodelo = mo.idmodelo and
                   
                        car.chassi = v.carro_chassi and v.cliente_fisica_pessoa_idpessoa in (
                        
                            select cli.fisica_pessoa_idpessoa
                            
                            from cliente cli, fisica f, pessoa p, endereco e, cidade c, estado es
                            
                            where cli.fisica_pessoa_idpessoa = f.pessoa_idpessoa and
                            
                                    f.pessoa_idpessoa = p.idpessoa and e.idendereco = p.endereco_idendereco and
                                    
                                    e.cidade_idcidade = c.idcidade and c.estado_uf = es.uf and es.UF = 'PR');";



                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                                
                                                <td>" . $row["nomeMarca"] . "</td>
                                                <td>" . $row["descricaoCarro"] . "</td>
                                                <td>" . $row["ano"] . "</td>
                                                <td>" . $row["descricaoModelo"] . "</td>
                                                <td>" . $row["valorUnit"] . "</td>
                                                <td>" . $row["datavenda"] . "</td>
                                                

                                                </tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>




                                </tbody>           
                            </table>        



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>





            <div class="modal fade" id="myModal5" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">CARROS COMPRADO E VENDIDO NO ANO DE 2017</h5>
                        </div>
                        <div class="modal-body">


                            <table style=" width:570px" class="table table-hover" id="tabelas">
                                <thead>
                                    <tr>


                                        <th>CHASSI</th>
                                        <th>ANO</th>
                                        <th>CARRO</th>
                                        <th>COMPRA</th>
                                        <th>VENDA</th>
                                        <th>VALOR</th>



                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    include 'conn.php';



                                    $sql = "select c.chassi,c.ano,c.descricaoCarro, com.datacompra, v.datavenda, v.valorUnit

                    from carro c, compra com, venda v

                    where c.chassi = com.carro_chassi and c.chassi = v.carro_chassi

                        and v.datavenda <  ('2017-12-31') and com.datacompra > ('2017-01-01');";



                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                                
                          
                                                <td>" . $row["chassi"] . "</td>
                                                <td>" . $row["ano"] . "</td>
                                                <td>" . $row["descricaoCarro"] . "</td>
                                                <td>" . $row["datacompra"] . "</td>
                                                <td>" . $row["datavenda"] . "</td>
                                                <td>" . $row["valorUnit"] . "</td>
                                                

                                                </tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>




                                </tbody>           
                            </table>        



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>



            <!-- PAREI AQUI, TEM QUE FAZER A CONSULTA DA MODAL 6 !-->


            <div class="modal fade" id="myModal6" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">MÉDIA DE PREÇO DE CADA VENDA</h5>
                        </div>
                        <div class="modal-body">


                            <table style=" width:570px" class="table table-hover" id="tabelas">
                                <thead>
                                    <tr>


                                        <th>ID VENDA</th>
                                        <th>MÉDIA DE PREÇO</th>


                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    include 'conn.php';



                                    $sql = "select v.idvenda,  avg(valorUnit)


                    from venda v

                    group by (idvenda)";



                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                                
                          
                                                <td>" . $row["idvenda"] . "</td>
                                                <td>" . $row["avg(valorUnit)"] . "</td>
                                               
                                                </tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>




                                </tbody>           
                            </table>        



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>






            <div class="modal fade" id="myModal7" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">RAZÃO SOCIAL DO FORNECEDOR QUE FORNECERAM CARRO DA MARCA FORD</h5>
                        </div>
                        <div class="modal-body">


                            <table style=" width:570px" class="table table-hover" id="tabelas">
                                <thead>
                                    <tr>


                                        <th>MARCA</th>
                                        <th>NOME DO FORNECEDOR</th>


                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    include 'conn.php';




                                    $sql = "select distinct ma.nomeMarca,   f.razaosocial

                from marca ma, modelo mo, carro c, compra cm, fornecedor f

                where mo.marca_idmarca = ma.idmarca and c.modelo_idmodelo = mo.idmodelo

                        and cm.carro_chassi = c.chassi and f.pessoa_idpessoa = cm.fornecedor_pessoa_idpessoa

                        and ma.nomeMarca = 'Ford';";



                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                                
                          
                                                <td>" . $row["nomeMarca"] . "</td>
                                                <td>" . $row["razaosocial"] . "</td>
                                               
                                                </tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>




                                </tbody>           
                            </table>        



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>










            <div class="modal fade" id="myModal8" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">NOME DOS CARROS E DOS CLIENTE QUE COMPROU CARRO QUE FOI FORNECEIDO PELA Ford & CIA LTDA</h5>
                        </div>
                        <div class="modal-body">


                            <table style=" width:570px" class="table table-hover" id="tabelas">
                                <thead>
                                    <tr>

                                        <th>ID DA VENDA</th>
                                        <th>NOME CLIENTE</th>
                                        <th>IDADE</th>
                                        <th>CARRO</th>
                                        <th>VALOR</th>


                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    include 'conn.php';




                                    $sql = "select v.idvenda, fi.nome, fi.idade, c.descricaoCarro, v.valorUnit

                    from fisica fi, cliente cli, venda v , carro c, compra com, fornecedor f

                    where fi.pessoa_idpessoa = cli.fisica_pessoa_idpessoa


                    and cli.fisica_pessoa_idpessoa = v.cliente_fisica_pessoa_idpessoa

                    and c.chassi = v.carro_chassi and com.carro_chassi = c.chassi

                    and f.pessoa_idpessoa = com.fornecedor_pessoa_idpessoa

                    and f.razaosocial ='Ford & CIA LTDA'
                    
                    order by v.idvenda;";



                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                                
                                                <td>" . $row["idvenda"] . "</td>
                                                <td>" . $row["nome"] . "</td>
                                                <td>" . $row["idade"] . "</td>
                                                <td>" . $row["descricaoCarro"] . "</td>
                                                <td>" . $row["valorUnit"] . "</td>
                                               
                                                </tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>




                                </tbody>           
                            </table>        



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>








            <div class="modal fade" id="myModal9" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">ENDEREÇO DO CLIENTE QUE COMPROU O CARRO FOCUS</h5>
                        </div>
                        <div class="modal-body">


                            <table style=" width:570px" class="table table-hover" id="tabelas">
                                <thead>
                                    <tr>


                                        <th>NOME CLIENTE</th>
                                        <th>RUA</th>
                                        <th>CEP</th>
                                        <th>NUMERO DA RESIDÊNCIA</th>


                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    include 'conn.php';




                                    $sql = "select fi.nome, en.rua, en.cep, en.numresid

                    from endereco en, pessoa p, fisica fi, cliente cli, venda v, carro c

                    where en.idendereco = p.endereco_idendereco

                    and p.idpessoa = fi.pessoa_idpessoa

                    and fi.pessoa_idpessoa = cli.fisica_pessoa_idpessoa

                    and cli.fisica_pessoa_idpessoa = v.cliente_fisica_pessoa_idpessoa

                    and v.carro_chassi = c.chassi

                    and c.descricaoCarro ='focus';";


                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                            
                          
                                                <td>" . $row["nome"] . "</td>
                                                <td>" . $row["rua"] . "</td>
                                                <td>" . $row["cep"] . "</td>
                                                <td>" . $row["numresid"] . "</td>
                                               
                                                </tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>




                                </tbody>           
                            </table>        



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            
            


            <div class="modal fade" id="myModal10" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">NOME DOS FUNCIONÁRIOS QUE VENDERAM CARRO PARA CLIENTES DA CIDADE DE PORTO ALEGRE</h5>
                        </div>
                        <div class="modal-body">


                            <table style=" width:570px" class="table table-hover" id="tabelas">
                                <thead>
                                    <tr>


                                        <th>FUNCIONÁRIO</th>
                                        <th>SALÁRIO</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <?php
                                    include 'conn.php';




                                    $sql = "select f.nome, fun.salario

                    from fisica f, funcionario fun,  venda v

                    where f.pessoa_idpessoa = fun.fisica_pessoa_idpessoa

                    and fun.fisica_pessoa_idpessoa = v.funcionario_fisica_pessoa_idpessoa


                    and v.idvenda in (select ven.idvenda

					from cidade cid, endereco en, pessoa p, fisica fis, cliente cli, venda ven
                    
                                        where cid.idcidade = en.cidade_idcidade

                                        and en.idendereco = p.endereco_idendereco

                                        and p.idpessoa = fis.pessoa_idpessoa

                                        and fis.pessoa_idpessoa = cli.fisica_pessoa_idpessoa

                                        and cli.fisica_pessoa_idpessoa = ven.cliente_fisica_pessoa_idpessoa

                                        and cid.descricao = 'porto alegre');";


                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>
                                            

                                                <td>" . $row["nome"] . "</td>
                                                <td>" . $row["salario"] . "</td>
                                                
                                                </tr>";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();
                                    ?>




                                </tbody>           
                            </table>        



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </body>
</html>