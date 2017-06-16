
<html>
    <head>
        <title> EDITAR ESTADO </title>
        
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
            <h3>EDITAR ESTADO</h3>
            <br>
            <form action="editarEstado2.php" method="post">
            
            UF:<br>
            <?php echo "<input type='text' name='uf2' value='".$_GET["uf"]."'>";?>
        
            <br><br>
     
            ESTADO:<br>
            <input type="text" name="nome"><br>
            <br><br><br>
            <a href="visualizarEstado.php" class="btn btn-success btn-sm" role="button">VOLTAR</a>
            <input type="submit" value="ENVIAR " class="btn btn-primary btn-sm">
          </form>
        </center>
    </body>
    
</html>