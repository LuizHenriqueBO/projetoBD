<!DOCTYPE html>
<html><center>
    <head>
        <title>MODELOS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="editarModelo.php" method="post">
        <div>
            <table style=" width:500px" class="table table-hover">
                <thead>
                    <tr>
                        
                        <th>ID</th>
                        <th>MODELO</th>
                        
                        <th>EDITAR</th>
                        
                        <th>EXCLUIR</th>
                        
                    </tr>
                </thead>
                <tbody>



                    <?php
                    include 'conn.php';

                    echo "<h2>" . "TODOS OS MODELOS" . "</h2>" . "<br>";
                    
                    echo "<a href='index.html' class='btn btn-success' role='button'>"."VOLTAR"."</a>";
                    
                    echo "<a href='inserirModelo.html' class='btn btn-success' role='button'>"."INSERIR MODELO"."</a>";
                    
                    echo '<br><br><br>';
                    
                    $sql = "SELECT * FROM modelo";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>" . $row["idmodelo"] . "</td>
                            <td>" . $row["descricaoModelo"] . "</td>	
                                
                            <td>
                            
                            <a name='test' href= 'editarModelo.php?idmodelo=".$row["idmodelo"]."'><img src='../img/edit.png'></a>
                            </td>    

                             <td>
                            
                            <a name='test' href= 'deletarModelo.php?idmodelo=".$row["idmodelo"]."'><img src='../img/delete.png'></a>
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