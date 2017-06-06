<!DOCTYPE html>
<html><center>
    <head>
        <title>CARROS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="editarCarro.php" method="post">
        <div>
            <table style=" width:800px" class="table table-hover">
                <thead>
                    <tr>
                        
                        <th>CHASSI</th>
                        <th>CARRO</th>
                        <th>ANO</th>
                        <th>MODELO</th>
                        <th>MARCA</th>
                        
                        
                        <th>EDITAR</th>
                        
                        <th>EXCLUIR</th>
                        
                    </tr>
                </thead>
                <tbody>



                    <?php
                    include 'conn.php';

                    echo "<h2>" . "TODOS OS CARROS" . "</h2>" . "<br>";
                    
                    echo "<a href='index.html' class='btn btn-success' role='button'>"."VOLTAR"."</a>";
                    
                    echo "<a href='carro.php' class='btn btn-success' role='button'>"."INSERIR CARRO"."</a>";
                    
                    echo '<br><br><br>';
                    
                    $sql = "SELECT chassi,descricaoCarro,ano, descricaoModelo,nomeMarca FROM carro , modelo ,marca where modelo_idmodelo = idmodelo and marca_idmarca = idmarca;";
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
                                
                            <td>
                            
                            <a name='test' href= 'editarCarro.php?chassi=".$row["chassi"]."'><img src='../img/edit.png'></a>
                            </td>    

                             <td>
                            
                            <a name='test' href= 'deletarCarro.php?chassi=".$row["chassi"]."'><img src='../img/delete.png'></a>
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