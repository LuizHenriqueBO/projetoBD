
<html>
    <head>
        <title> EDITAR MODELO </title>
        

    </head>
    <body>
        <center>
            <h3>EDITAR MODELO</h3>
            <form action="editarModelo2.php" method="post">
            
            ID:<br>
            <?php echo "<input type='text' name='idmodelo2' value='".$_GET["idmodelo"]."'>";?>
            
            
            <br><br>
            
                
            
            MODELO:<br>
            <input type="text" name="descricaoModelo"><br><br>
            <input type="submit">
          </form>
        </center>
    </body>
    



</html>