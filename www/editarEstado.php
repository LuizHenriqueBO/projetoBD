
<html>
    <head>
        <title> EDITAR ESTADO </title>
        

    </head>
    <body>
        <center>
            <h3>EDITAR ESTADO</h3>
            <form action="editarEstado2.php" method="post">
            
            UF:<br>
            <?php echo "<input type='text' name='uf2' value='".$_GET["uf"]."'>";?>
            
            
            <br><br>
            
                
            
            ESTADO:<br>
            <input type="text" name="nome"><br><br>
            <input type="submit">
          </form>
        </center>
    </body>
    



</html>