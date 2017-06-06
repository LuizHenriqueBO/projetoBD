<!DOCTYPE html>
<html><center>
    <head>
        <title>ESTADOS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="editarEstado.php" method="post">
        <div>
            <table style=" width:500px" class="table table-hover">
                <thead>
                    <tr>
                        
                        <th>UF</th>
                        <th>ESTADO</th>
                        
                        <th>EDITAR</th>
                        
                        <th>EXCLUIR</th>
                        
                    </tr>
                </thead>
                <tbody>



                    <?php
                    include 'conn.php';

                    echo "<h2>" . "TODOS OS ESTADOS" . "</h2>" . "<br>";
                    
                    echo "<a href='index.html' class='btn btn-success' role='button'>"."VOLTAR"."</a>";
                    
                    echo "<a href='inserirEstado.html' class='btn btn-success' role='button'>"."INSERIR ESTADO"."</a>";
                    
                    echo '<br><br><br>';
                    
                    $sql = "SELECT * FROM estado";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $row["uf"] . "</td>
                            <td>" . $row["nome"] . "</td>	
                                
                            <td>
                            
                            <a name='test' href= 'editarEstado.php?uf=".$row["uf"]."'><img src='../img/edit.png'></a>
                            </td>    

                             <td>
                            
                            <a name='test' href= 'deletarEstado.php?uf=".$row["uf"]."'><img src='../img/delete.png'></a>
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