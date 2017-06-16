<html>
    <head>
        <title> EDITAR MODELO </title>
        
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
            <h3>EDITAR MODELO</h3>
            <br>
            <form action="editarModelo2.php" method="post">
            
            ID:<br>
            <?php echo "<input type='text' name='idmodelo2' value='".$_GET["idmodelo"]."'>";?>
            
            
            <br><br>

            MODELO:<br>
            <input type="text" name="descricaoModelo"><br>
            <br><br><br>
            <br><a href="visualizarModelo.php" class="btn btn-success btn-sm" role="button">VOLTAR</a>
            
            <input type="submit" value="ENVIAR" class="btn btn-primary btn-sm">
          </form>
        </center>
    </body>
    
</html>