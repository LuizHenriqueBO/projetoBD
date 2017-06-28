<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="../comandocss/fundo.css">
        
        <title> INSERIR CARRO </title>


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
        
    <CENTER>
        <?php
        include 'conn.php';

        $_POST["chassi"];
        $_POST["ano"];
        $_POST["descricao"];
        $_POST["modelo"];
     
        
        $sql = "INSERT INTO `banco_utfpr`.`carro` (`chassi`, `ano`, `descricaoCarro`, `modelo_idmodelo`) VALUES ('". $_POST["chassi"]."', '".$_POST["ano"]."', '".$_POST["descricao"]."', '".$_POST["modelo"]."');";

        if ($conn->query($sql) === TRUE) {
            echo '<br><br><br>';
            echo "OPERAÇÃO REALIZADA COM SUCESSO !";
        } else {
            echo '<br><br><br>';
            echo "ERRO NA OPERAÇÃO: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>


        <br><br><br>
        <a href="visualizarCarro.php" class="btn btn-success btn-sm" role="button">VOLTAR</a>
    </center>
</body>

</html>