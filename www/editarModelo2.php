<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="../comandocss/fundo.css">
        
        <title> EDITAR MODELO </title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="jQuery/jquery-3.2.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>  

    </head>
    <body>
        <!--<style>
            @import url('../comandocss/fundo.css');
        </style>-->
        
        <center>

            <?php

            include 'conn.php';

            $sql = "UPDATE `banco_utfpr`.`modelo` SET `descricaoModelo`='".$_POST["descricaoModelo"]."' WHERE `idmodelo`='".$_POST["idmodelo2"]."';";

            if ($conn->query($sql) === TRUE) {
                echo '<br><br><br>';
                echo "OPERAÇÃO REALIZADA COM SUCESSO!";
            } else {
                echo '<br><br><br>';
                echo "ERRO NA OPERAÇÃO: " . $conn->error;
            }

            $conn->close();

            ?> 
            <br><br><br>
            <br><a href="visualizarModelo.php" class="btn btn-success btn-sm" role="button">VOLTAR</a>
           
        </center>
    </body>
</html>
