<!DOCTYPE html>
<html>
    <head>
        <title>ENDEREÇO</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="jQuery/jquery-3.2.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    </head>
    <body>
        <style>
            @import url('../comandocss/fundo.css');

            #tabelas{
                background-color: white;
                width: 100%;
                height: 100%;
                /*padding-left: 10px;
                padding-right: 10px;*/

            }            

        </style>

    <center>
        <form action="editarEndereco.php" method="post">


            <h3> TODOS OS ENDEREÇOS </h3>
            <br>

            <a href='index.html' class='btn btn-success btn-sm' role='button'>VOLTAR</a>

            <a href='inserirEndereco.php' class='btn btn-primary btn-sm' role='button'>INSERIR ENDEREÇO</a>

            <br><br><br>


            <div>
                <table style=" width:800px" class="table table-hover" id="tabelas">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>RUA</th>
                            <th>NUMERO</th>
                            <th>CEP</th>
                            <th>COMPLEMENTO</th>
                            <th>CIDADE</th>


                            <th>EDITAR</th>

                            <th>EXCLUIR</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        include 'conn.php';

                        $sql = "select idendereco,rua,numresid,cep,complemento, descricao from endereco, cidade where cidade_idcidade = idcidade;";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                            <td>" . $row["idendereco"] . "</td>
                            <td>" . $row["rua"] . "</td>
                            <td>" . $row["numresid"] . "</td>
                            <td>" . $row["cep"] . "</td>
                            <td>" . $row["complemento"] . "</td>
                            <td>" . $row["descricao"] . "</td>
                      
                      
                            <td>
                            <a name='test' href= 'editarEndereco.php?idendereco=" . $row["idendereco"] . "'><img src='../img/edit.png'></a>
                            </td>    
                            
                            <td>
                            <a name='test' href= 'deletarEndereco.php?idendereco=" . $row["idendereco"] . "'><img src='../img/delete.png'></a>
                            </td>  
                            
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
        </form>
    </body>
</center>
</html>