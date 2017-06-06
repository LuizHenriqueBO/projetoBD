<?php

include 'conn.php';


$sql = "DELETE FROM `banco_utfpr`.`endereco` WHERE `idendereco`='".$_GET["idendereco"]."';";

if ($conn->query($sql) === TRUE) {
    echo " DELETADO COM SUCESSO!";
} else {
    echo "ERRO NO PROCESSO: " . $conn->error;
}

$conn->close();

?>

