<?php

include 'conn.php';

$sql = "UPDATE `banco_utfpr`.`marca` SET `nomeMarca`='".$_POST["nomeMarca"]."' WHERE `idmarca`='".$_POST["idmarca2"]."';";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>

