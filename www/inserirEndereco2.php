<?php

    include 'conn.php';

     $_POST["rua"]. "<br>";
     $_POST["numresid"]. "<br>";
     $_POST["cep"]. "<br>";
     $_POST["complemento"]. "<br>";
     $_POST["idcidade"];
    

    
    $sql = "INSERT INTO `banco_utfpr`.`endereco` (`rua`, `numresid`, `cep`, `complemento`, `cidade_idcidade`) VALUES ('" . $_POST["rua"] . "', '" . $_POST["numresid"] . "', '" . $_POST["cep"] . "', '" . $_POST["complemento"] . "', '" . $_POST["idcidade"] . "');";
    
    if ($conn->query($sql) === TRUE) {
        echo "<br> OPERAÇÃO REALIZADA COM SUCESSO! ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
