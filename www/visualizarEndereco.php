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
        </style>
        
        <center>
        <form action="editarEndereco.php" method="post">
        <div>
            <table style=" width:800px" class="table table-hover">
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

                    echo "<h2>" . "TODOS OS ENDEREÇOS" . "</h2>" . "<br>";
                    
                    echo "<a href='index.html' class='btn btn-success' role='button'>"."VOLTAR"."</a>";
                    
                    echo "<a href='inserirEndereco.php' class='btn btn-success' role='button'>"."INSERIR ENDEREÇO"."</a>";
                    
                    echo '<br><br><br>';
                    
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
                            <a name='test' href= 'editarEndereco.php?idendereco=".$row["idendereco"]."'><img src='../img/edit.png'></a>
                            </td>    
                            
                            <td>
                            <a name='test' href= 'deletarEndereco.php?idendereco=".$row["idendereco"]."'><img src='../img/delete.png'></a>
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