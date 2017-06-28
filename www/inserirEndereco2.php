<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="../comandocss/fundo.css">
        
        <title> INSERIR ENDEREÇO </title>
        
        
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

                 $_POST["rua"]. "<br>";
                 $_POST["numresid"]. "<br>";
                 $_POST["cep"]. "<br>";
                 $_POST["complemento"]. "<br>";
                 $_POST["cidade"];



                $sql = "INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('" . $_POST["rua"] . "', '" . $_POST["numresid"] . "', '" . $_POST["cep"] . "', '" . $_POST["complemento"] . "', '" . $_POST["cidade"] . "');";

                if ($conn->query($sql) === TRUE) {
                    echo '<br><br><br>';
                    echo "OPERAÇÃO REALIZADA COM SUCESSO! ";
                } else {
                    echo "ERRO NA OPERAÇÃO: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            ?>
            <br><br><br>
            <a href="visualizarEndereco.php" class="btn btn-success btn-sm" role="button">VOLTAR</a>
        </center>
    </body>
</html>

