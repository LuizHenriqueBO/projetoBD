<html>
    <head>
        <title> INSERIR CIDADE </title>
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

                $_POST["nome"] . "<br>";
                $_POST["cidade"];

                $sql = "INSERT INTO `banco_utfpr`.`cidade` (`descricao`, `estado_uf`) VALUES ('" . $_POST["cidade"] . "', '" . $_POST["nome"] . "');";

                if ($conn->query($sql) === TRUE) {
                    echo '<br><br><br>';
                    echo "<br> OPERAÇÃO REALIZADA COM SUCESSO! ";
                } else {
                    echo '<br><br><br>';
                    echo "ERRO NA OPERAÇÃO: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            ?>
            <br><br><br>
            <a href="visualizarCidade.php" class="btn btn-success" role="button">VOLTAR</a>
        </center>
    </body>
</html>

