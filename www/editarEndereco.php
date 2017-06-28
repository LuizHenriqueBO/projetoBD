<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="../comandocss/fundo.css">
        
        <title> EDITAR ENDEREÇO </title>
        
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
            <h3>EDITAR ENDEREÇO</h3>
            <br>
            <form action="editarEndereco2.php" method="post">
            
             ID:<br>
            <?php echo "<input type='text' name='idendereco2' value='".$_GET["idendereco"]."'>";?>

            <br><br>
            
             NOME:<br>
            <input type="text" name="rua"><br><br>
            
             NUMERO:<br>
            <input type="text" name="numresid"><br><br>
            
             CEP:<br>
            <input type="text" name="cep"><br><br>
            
             COMPLEMENTO:<br>
            <input type="text" name="complemento"><br>
            
            <br><br>
            <a href="visualizarEndereco.php" class="btn btn-success btn-sm" role="button">VOLTAR</a>
            <input type="submit" value="ENVIAR " class="btn btn-primary btn-sm">
          </form>
        </center>
    </body>

</html>