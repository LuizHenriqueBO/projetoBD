
<?php
include 'conn.php';
?>


<html>
    <head>
        <title>INSERIR CARRO</title>
        
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
            <h3>INSERIR CARRO</h3><br>
        <form action="inserirCarro.php" method="post">
            
            CHASSI:<br>
            <input type="text" name="chassi"><br><br>
            
            ANO:<br>
            <input type="text" name="ano"><br><br>
            
            NOME:<br>
            <input type="text" name="descricao"><br><br><br>
            
            
            MARCA:
            <select name="marca">


                <?php
                $sql = "SELECT * FROM banco_utfpr.marca;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["idmarca"] . "'>" . $row["nomeMarca"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
               
                ?>
            
                
            </select>
            
            <a href="inserirMarca.html" class="btn btn-success" role="button">...</a>
            <br><br><br>
            
             MODELO:
            <select name="modelo">


                <?php
                $sql = "SELECT * FROM banco_utfpr.modelo;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["idmodelo"] . "'>" . $row["descricaoModelo"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
               
                ?>
                
            </select>
             
             <a href="inserirModelo.html" class="btn btn-success" role="button">...</a>
            
             <br><br><br>
             <a href="visualizarCarro.php" class="btn btn-success" role="button">VOLTAR</a>
            <input type="submit">
            
            
        </form>
        </center>
<?PHP  
     $conn->close();
?>
    </body>
    
</html>