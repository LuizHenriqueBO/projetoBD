<!DOCTYPE html>
<html>
    <head>
        <title>CARROS</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="jQuery/jquery-3.2.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        
    </head>
    <body>
    
        <style>
            @import url('../comandocss/fundo.css');
            div{
                background-color: white;
                width: 850px;
                height: 20%;
                /*padding-left: 10px;
                padding-right: 10px;*/

            }
        </style>
        <center>
        
        
        <form action="editarCarro.php" method="post">
        
            <h2> TODOS OS CARROS</h2><br>
                    
            <a href='index.html' class='btn btn-success' role='button'>VOLTAR</a>
                    
            <a href='carro.php' class='btn btn-success' role='button'>INSERIR CARRO</a>
            
            <br><br><br>
                    
            
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

                    
                    $sql = "select chassi, descricaoCarro, ano, descricaoModelo,nomeMarca from carro, marca, modelo where modelo_idmodelo = idmodelo and marca_idmarca = idmarca;";
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
    </center>
    </body>
</html>