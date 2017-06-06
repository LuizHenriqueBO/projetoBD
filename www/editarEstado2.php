<?php

include 'conn.php';

$sql = "UPDATE `banco_utfpr`.`estado` SET `nome`='".$_POST["nome"]."' WHERE `uf`='".$_POST["uf2"]."';";

if ($conn->query($sql) === TRUE) {
    echo "OPERAÇÃO REALIZADA COM SUCESSO!";
} else {
    echo "ERRO NO PROCESSO: " . $conn->error;
}

$conn->close();


?>

