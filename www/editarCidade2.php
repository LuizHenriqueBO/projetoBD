<?php

include 'conn.php';

$sql = "UPDATE `banco_utfpr`.`cidade` SET `descricao`='".$_POST["descricao"]."' WHERE `idcidade`='".$_POST["idcidade2"]."';";

if ($conn->query($sql) === TRUE) {
    echo "OPERAÇÃO REALIZADA COM SUCESSO!";
} else {
    echo "ERRO NO PROCESSO: " . $conn->error;
}

$conn->close();


?>

