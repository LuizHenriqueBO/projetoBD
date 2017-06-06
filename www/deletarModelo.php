<?php

include 'conn.php';

$sql = "DELETE FROM `banco_utfpr`.`modelo` WHERE `idmodelo`='".$_GET["idmodelo"]."';";

if ($conn->query($sql) === TRUE) {
    echo " DELETADO COM SUCESSO!";
} else {
    echo "ERRO NO PROCESSO: " . $conn->error;
}

$conn->close();

?>

