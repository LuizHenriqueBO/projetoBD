<?php

include 'conn.php';



$sql = "DELETE FROM `banco_utfpr`.`marca` WHERE `idmarca`='".$_GET["idmarca"]."';";

if ($conn->query($sql) === TRUE) {
    echo " DELETADO COM SUCESSO!";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>

