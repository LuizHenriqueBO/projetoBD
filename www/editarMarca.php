
<html>
    <head>
        <title> EDITAR MARCA </title>
        

    </head>
    <body>
        <center>
            <h3>EDITAR MARCA</h3>
        <form action="editarMarca2.php" method="post">
            
            ID:<br>
            <?php echo "<input type='text' name='idmarca2' value='".$_GET["idmarca"]."'>";?>
            
            
            <br><br>
            
                
            
            Marca:<br>
            <input type="text" name="nomeMarca"><br><br>
            <input type="submit">
          </form>
        </center>
    </body>
    



</html>