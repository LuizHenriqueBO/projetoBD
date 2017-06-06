<?php

include 'conn.php';

$sql = "UPDATE `banco_utfpr`.`modelo` SET `descricaoModelo`='".$_POST["descricaoModelo"]."' WHERE `idmodelo`='".$_POST["idmodelo2"]."';";

if ($conn->query($sql) === TRUE) {
    echo "OPERAÇÃO REALIZADA COM SUCESSO!";
} else {
    echo "ERRO NO PROCESSO: " . $conn->error;
}

$conn->close();

?>

