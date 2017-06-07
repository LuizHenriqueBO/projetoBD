<html>
    <head>
        <title> INSERIR ESTADO </title>

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
        
        <CENTER>
            <?php
            include 'conn.php';

            $_POST["uf"];
            $_POST["nome"];

            $sql = "INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('" . $_POST["uf"] . "', '" . $_POST["nome"] . "');";

            if ($conn->query($sql) === TRUE) {
                echo '<br><br><br>';
                echo "OPERAÇÃO REALIZADA COM SUCESSO !";
            } else {
                echo '<br><br><br>';
                echo "ERRO NA OPERAÇÃO " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
            ?>
            
            <br><br><br>
            <a href="visualizarEstado.php" class="btn btn-success" role="button">VOLTAR</a>
        </center>
    </body>

</html>