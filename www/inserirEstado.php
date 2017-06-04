<html>
    <head>
        <title> INSERIR ESTADO </title>
        
    </head>
    <body>
        <?php
            include 'conn.php';
        
        echo $_POST["uf"]; 
        echo $_POST["nome"]; 
        
        $sql = "INSERT INTO `banco_utfpr`.`estado` (`uf`, `nome`) VALUES ('".$_POST["uf"]."', '".$_POST["nome"]."');";

        if ($conn->query($sql) === TRUE) {
             echo "New record created successfully";
        } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        
        
        ?>

    </body>
    
    
    
    
</html>