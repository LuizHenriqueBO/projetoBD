<html>
    <head>
        <title> INSERIR MARCA </title>
        
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

            $_POST["nomeMarca"];

            $sql = "INSERT INTO `banco_utfpr`.`marca` (`nomeMarca`) VALUES ('".$_POST["nomeMarca"]."');";

            if ($conn->query($sql) === TRUE) {
                echo '<br><br><br>';
                echo "OPERAÇÃO REALIZADA COM SUCESSO ! ";
            } else {
                echo '<br><br><br>';
                echo "ERRO NA OPERAÇÃO: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
            
            echo '<br><br><br>';
            echo "<a href='visualizarMarca.php' class='btn btn-success' role='button'>"."VOLTAR"."</a>";
            
            ?>
        </center>
    </body>

</html>