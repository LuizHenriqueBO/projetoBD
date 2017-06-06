
<html>
    <head>
        <title> EDITAR CIDADE </title>
        

    </head>
    <body>
        <center>
            <h3>EDITAR CIDADE</h3>
            <form action="editarCidade2.php" method="post">
            
            ID:<br>
            <?php echo "<input type='text' name='idcidade2' value='".$_GET["idcidade"]."'>";?>
            
            <br><br>

            NOME:<br>
            <input type="text" name="descricao"><br><br>
            <input type="submit">
          </form>
        </center>
    </body>
    



</html>