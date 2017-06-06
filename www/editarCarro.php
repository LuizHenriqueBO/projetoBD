
<html>
    <head>
        <title> EDITAR CARRO </title>
        

    </head>
    <body>
        <center>
            <h3>EDITAR CARRO</h3>
            <form action="editarCarro2.php" method="post">
            
            CHASSI:<br>
            <?php echo "<input type='text' name='chassi2' value='".$_GET["chassi"]."'>";?>
            
            
            <br><br>
            
                
            
            CARRO:<br>
            <input type="text" name="descricaoCarro"><br><br>
            <input type="submit">
          </form>
        </center>
    </body>
    



</html>