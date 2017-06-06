<?php

include 'conn.php';

$sql = "UPDATE `banco_utfpr`.`endereco` SET `rua`='".$_POST["rua"]."', `numresid`='".$_POST["numresid"]."', `cep`='".$_POST["cep"]."', `complemento`='".$_POST["complemento"]."' WHERE `idendereco`='".$_POST["idendereco2"]."';";

if ($conn->query($sql) === TRUE) {
    echo "OPERAÇÃO REALIZADA COM SUCESSO!";
} else {
    echo "ERRO NO PROCESSO: " . $conn->error;
}

$conn->close();


?>

