<?php

    include 'conn.php';

    echo $_POST["uf"] . "<br>";
    echo $_POST["cidade"];

    $sql = "INSERT INTO `banco_utfpr`.`cidade` (`descricao`, `estado_uf`) VALUES ('" . $_POST["cidade"] . "', '" . $_POST["uf"] . "');";

    if ($conn->query($sql) === TRUE) {
        echo "<br> OPERAÇÃO REALIZADA COM SUCESSO! ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
