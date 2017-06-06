<!DOCTYPE html>
<html><center>
    <head>
        <title>CIDADE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="editarCidade.php" method="post">
        <div>
            <table style=" width:500px" class="table table-hover">
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

                    echo "<h2>" . "TODAS AS CIDADES" . "</h2>" . "<br>";
                    
                    echo "<a href='index.html' class='btn btn-success' role='button'>"."VOLTAR"."</a>";
                    
                    echo "<a href='inserirCidade.php' class='btn btn-success' role='button'>"."INSERIR CIDADE"."</a>";
                    
                    echo '<br><br><br>';
                    
                    $sql = "SELECT idcidade,descricao,estado_uf FROM banco_utfpr.cidade;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $row["idcidade"] . "</td>
                            <td>" . $row["descricao"] . "</td>
                            <td>" . $row["estado_uf"] . "</td>
                      
                            <td>
                            
                            <a name='test' href= 'editarCidade.php?idcidade=".$row["idcidade"]."'><img src='../img/edit.png'></a>
                            </td>    

                             <td>
                            
                            <a name='test' href= 'deletarCidade.php?idcidade=".$row["idcidade"]."'><img src='../img/delete.png'></a>
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