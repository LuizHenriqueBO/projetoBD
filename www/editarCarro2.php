<?php

include 'conn.php';



$sql = "UPDATE `banco_utfpr`.`carro` SET `descricaoCarro`='".$_POST["descricaoCarro"]."' WHERE `chassi`='".$_POST["chassi2"]."';";

if ($conn->query($sql) === TRUE) {
    echo "OPERAÇÃO REALIZADA COM SUCESSO!";
} else {
    echo "ERRO NO PROCESSO: " . $conn->error;
}

$conn->close();


?>

