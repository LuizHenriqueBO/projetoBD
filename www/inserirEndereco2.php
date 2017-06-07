<html>
    <head>
        <title> INSERIR ENDEREÇO </title>
        
        
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

                 $_POST["rua"]. "<br>";
                 $_POST["numresid"]. "<br>";
                 $_POST["cep"]. "<br>";
                 $_POST["complemento"]. "<br>";
                 $_POST["idcidade"];



                $sql = "INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('" . $_POST["rua"] . "', '" . $_POST["numresid"] . "', '" . $_POST["cep"] . "', '" . $_POST["complemento"] . "', '" . $_POST["idcidade"] . "');";

                if ($conn->query($sql) === TRUE) {
                    echo '<br><br><br>';
                    echo "OPERAÇÃO REALIZADA COM SUCESSO! ";
                } else {
                    echo "ERRO NA OPERAÇÃO: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            ?>
            <br><br><br>
            <a href="visualizarEndereco.php" class="btn btn-success" role="button">VOLTAR</a>
        </center>
    </body>
</html>

