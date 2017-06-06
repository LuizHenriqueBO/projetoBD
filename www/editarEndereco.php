
<html>
    <head>
        <title> EDITAR ENDERECO </title>
        

    </head>
    <body>
        <center>
            <h3>EDITAR ENDERECO</h3>
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
            <input type="text" name="complemento"><br><br>
            
            <input type="submit">
          </form>
        </center>
    </body>

</html>