<html>
    <head>
        <title> EDITAR MODELO </title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   

    </head>
    <body>
        <style>
            @import url('../comandocss/fundo.css');
        </style>
        
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
            <br><a href="visualizarModelo.php" class="btn btn-success" role="button">VOLTAR</a>
           
        </center>
    </body>
</html>
