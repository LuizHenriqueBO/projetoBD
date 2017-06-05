<html>
    <head>
        <title> INSERIR ESTADO </title>

    </head>
    <body>
        <center>
            <?php
            include 'conn.php';

            echo $_POST["nomeMarca"];

            $sql = "INSERT INTO `banco_utfpr`.`marca` (`nomeMarca`) VALUES ('".$_POST["nomeMarca"]."');";

            if ($conn->query($sql) === TRUE) {
                echo "Gravação de Marca Realizada com sucesso ! ";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
            ?>
        </center>
    </body>

</html>