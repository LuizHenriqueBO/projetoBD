<html>
    <head>
        <title> DELETAR MODELO </title>
        
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

            <?php

            include 'conn.php';

            $sql = "DELETE FROM `banco_utfpr`.`modelo` WHERE `idmodelo`='".$_GET["idmodelo"]."';";

            if ($conn->query($sql) === TRUE) {
                echo '<br><br><br>';
                echo "OPERAÇÃO REALIZADA COM SUCESSO !";
            } else {
                echo '<br><br><br>';
                echo "ERRO NA OPERAÇÃO: " . $conn->error;
            }

            $conn->close();

            ?>
            <br><br><br>
            <a href="visualizarModelo.php" class="btn btn-success btn-sm" role="button">VOLTAR</a>
        </center>
    </body>
</html>

