
<?php
include 'conn.php';
?>


<html>
    <head>
        <title> INSERIR MODELO </title>
        

    </head>
    <body>
        
        <form action="inserirCarro.php" method="post">
            
            Chassi:<br>
            <input type="text" name="chassi"><br>
            
            Ano:<br>
            <input type="text" name="ano"><br>
            
            Descrição:<br>
            <input type="text" name="descricao"><br>
            
            MODELO:<br>
            <select name="modelo">


                <?php
                $sql = "SELECT * FROM banco_utfpr.modelo;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["idmodelo"] . "'>" . $row["descricaoModelo"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
               
                ?>
                
            </select>
            
            
            
            <br><br>
            
            
            MARCA:<br>
            <select name="marca">


                <?php
                $sql = "SELECT * FROM banco_utfpr.marca;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["idmarca"] . "'>" . $row["nomeMarca"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
               
                ?>
                
            </select>
            
            <input type="submit">
        </form>
<?PHP  
     $conn->close();
?>
    </body>
    



</html>