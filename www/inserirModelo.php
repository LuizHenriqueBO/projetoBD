
<?php
include 'conn.php';
?>

<html>
    
    <head>
        <title> INSERIR MODELO </title>
        
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
        <h3>INSERIR MODELO</h3>
        <br>
        
        <form action="inserirModelo2.php" method="post">
            MODELO:<br>
            <input type="text" name="descricaoModelo"><br><br><br>
            MARCA:
            <select name="nomeMarca">


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
                $conn->close();
                ?>

            </select>
            
            <br><br><br>
            

            <a href="visualizarModelo.php" class="btn btn-success btn-sm" role="button">VOLTAR</a>
            
            <input type="submit" value="ENVIAR " class="btn btn-primary btn-sm">
        </form>
        </center>
    </body>



    
</html>