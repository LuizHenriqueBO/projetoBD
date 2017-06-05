

<?php
include 'conn.php';
?>

<html>
    <center>

    <head>
        <title> INSERIR CIDADE </title>

    </head>
    <body>
        <form action="inserirCidade2.php" method="post">
            CIDADE:<br>
            <input type="text" name="cidade"><br>
            ESTADO:<br>
            <select name="uf">


                <?php
                $sql = "SELECT * FROM banco_utfpr.estado;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["uf"] . "'>" . $row["uf"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>

            </select>
            <input type="submit">
        </form>
    </body>



    </center>
</html>