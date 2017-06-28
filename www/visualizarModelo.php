<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="../comandocss/fundo.css">
        
        <title>MODELOS</title>

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
        <form action="editarModelo.php" method="post">

            <h3> TODOS OS MODELOS </h3>
            <br>

            <a href='index.html' class='btn btn-success btn-sm' role='button'>VOLTAR</a>
            
 
            
            <a href='inserirModelo.php' class='btn btn-primary btn-sm' role='button'>INSERIR MODELO</a>

            <br><br><br>


            <div>
                <table style=" width:500px" class="table table-hover" id="tabelas">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>MODELO</th>
                            <th>MARCA</th>

                            <th>EDITAR</th>

                            <th>EXCLUIR</th>

                        </tr>
                    </thead>
                    <tbody>



                        <?php
                        include 'conn.php';

                        $sql = "SELECT idmodelo,descricaoModelo,nomeMarca FROM modelo, marca where marca_idmarca = idmarca order by nomeMarca;";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                            <td>" . $row["idmodelo"] . "</td>
                            <td>" . $row["descricaoModelo"] . "</td>	
                            <td>" . $row["nomeMarca"] . "</td>    
                            <td>
                            
                            <a name='test' href= 'editarModelo.php?idmodelo=" . $row["idmodelo"] . "'><img src='../img/edit.png'></a>
                            </td>    

                             <td>
                            
                            <a name='test' href= 'deletarModelo.php?idmodelo=" . $row["idmodelo"] . "'><img src='../img/delete.png'></a>
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