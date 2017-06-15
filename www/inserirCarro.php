<html>
    <head>
        <title> INSERIR CARRO </title>


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
        
    <CENTER>
        <?php
        include 'conn.php';

        $_POST["chassi"];
        $_POST["ano"];
        $_POST["descricao"];
        $_POST["modelo"];
        $_POST["marca"];

        $sql = "INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`,`marca_idmarca`) VALUES ('". $_POST["chassi"]."', '".$_POST["ano"]."', '".$_POST["descricao"]."', '".$_POST["modelo"]."','".$_POST["marca"]."');";

        if ($conn->query($sql) === TRUE) {
            echo '<br><br><br>';
            echo "OPERAÇÃO REALIZADA COM SUCESSO !";
        } else {
            echo '<br><br><br>';
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>


        <br><br><br>
        <a href="visualizarCarro.php" class="btn btn-success" role="button">VOLTAR</a>
    </center>
</body>

</html>