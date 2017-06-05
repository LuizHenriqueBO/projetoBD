<!DOCTYPE html>
<html><center>
    <head>
        <title>MARCAS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="editarMarca.php" method="post">
        <div>
            <table style=" width:200px" class="table table-hover">
                <thead>
                    <tr>
                        
                        <th>ID</th>
                        <th>Marca</th>
                        
                        <th>Editar</th>
                        
                        <th>Excluir</th>
                        
                    </tr>
                </thead>
                <tbody>



                    <?php
                    include 'conn.php';

                    echo "<h2>" . "TODAS AS MARCAS" . "</h2>" . "<br>";
                    
                    echo "<a href='index.html' class='btn btn-success' role='button'>"."VOLTAR"."</a>";
                    
                    echo "<a href='inserirMarca.html' class='btn btn-success' role='button'>"."INSERIR MARCA"."</a>";
                    
                    $sql = "SELECT idmarca, nomeMarca FROM marca";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $row["idmarca"] . "</td>
                            <td>" . $row["nomeMarca"] . "</td>	
                                
                            <td>
                            
                            <a name='test' href= 'editarMarca.php?idmarca=".$row["idmarca"]."'><img src='../img/edit.png'></a>
                            </td>    

                             <td>
                            
                            <a name='test' href= 'deletarMarca.php?idmarca=".$row["idmarca"]."'><img src='../img/delete.png'></a>
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