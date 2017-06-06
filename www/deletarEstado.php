<?php

include 'conn.php';


$sql = "DELETE FROM `banco_utfpr`.`estado` WHERE `uf`='".$_GET["uf"]."';";

if ($conn->query($sql) === TRUE) {
    echo " DELETADO COM SUCESSO!";
} else {
    echo "ERRO NO PROCESSO: " . $conn->error;
}

$conn->close();

?>

