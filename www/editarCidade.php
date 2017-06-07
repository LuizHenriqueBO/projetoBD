
<html>
    <head>
        <title> EDITAR CIDADE </title>
        
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
            <h3>EDITAR CIDADE</h3>
            <form action="editarCidade2.php" method="post">
            
            ID:<br>
            <?php echo "<input type='text' name='idcidade2' value='".$_GET["idcidade"]."'>";?>
            
            <br><br>

            NOME:<br>
            <input type="text" name="descricao"><br>
            <br><br><br>
            <a href="visualizarCidade.php" class="btn btn-success" role="button">VOLTAR</a>
            <input type="submit">
          </form>
        </center>
    </body>
</html>