<?php

include 'conn.php';

$sql = "DELETE FROM `banco_utfpr`.`cidade` WHERE `idcidade`='".$_GET["idcidade"]."';";

if ($conn->query($sql) === TRUE) {
    echo " DELETADO COM SUCESSO!";
} else {
    echo "ERRO NO PROCESSO: " . $conn->error;
}

$conn->close();

?>

