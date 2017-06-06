<?php

include 'conn.php';

$sql = "DELETE FROM `banco_utfpr`.`carro` WHERE `chassi`='".$_GET["chassi"]."';";

if ($conn->query($sql) === TRUE) {
    echo " DELETADO COM SUCESSO!";
} else {
    echo "ERRO NO PROCESSO: " . $conn->error;
}

$conn->close();

?>

