<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="../comandocss/fundo.css">
        
        <title>CIDADE</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="jQuery/jquery-3.2.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    </head>
    <body>
        <!--<style>
            @import url('../comandocss/fundo.css');

            #tabelas{
                background-color: white;
                width: 100%;
                height: 100%;
                /*padding-left: 10px;
                padding-right: 10px;*/

            }
        </style>-->

    <center>
        <form action="editarCidade.php" method="post">


            <h3> TODAS AS CIDADES </h3>
            <br>

            <a href="index.html" class="btn btn-success btn-sm" role="button">VOLTAR</a>

            <a href="inserirCidade.php" class="btn btn-primary btn-sm" role="button">INSERIR CIDADE</a>

            <br><br><br>

            <div>
                <table style=" width:450px" class="table table-hover" id="tabelas" >
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>NOME</th>
                            <th>UF</th>

                            <th>EDITAR</th>

                            <th>EXCLUIR</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        include 'conn.php';



                        
                        $sql = "SELECT idcidade,descricao,estado_uf FROM banco_utfpr.cidade order by estado_uf;";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                            <td>" . $row["idcidade"] . "</td>
                            <td>" . $row["descricao"] . "</td>
                            <td>" . $row["estado_uf"] . "</td>
                      
                            <td>
                            
                            <a name='test' href= 'editarCidade.php?idcidade=" . $row["idcidade"] . "'><img src='../img/edit.png'></a>
                            </td>    

                             <td>
                            
                            <a name='test' href= 'deletarCidade.php?idcidade=" . $row["idcidade"] . "'><img src='../img/delete.png'></a>
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