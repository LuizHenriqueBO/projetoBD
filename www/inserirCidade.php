
<?php
include 'conn.php';
?>

<html>
    
    <head>
        <title> INSERIR CIDADE </title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <body>
         <style>
            @import url('../comandocss/fundo.css');
        </style>
        
        <center>
        <h3>INSERIR CIDADE</h3><br>
        
        <form action="inserirCidade2.php" method="post">
            CIDADE:<br>
            <input type="text" name="cidade"><br><br><br>
            ESTADO:
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
            
            <br><br><br>
            <a href="visualizarCidade.php" class="btn btn-success" role="button">VOLTAR</a>
            <input type="submit">
        </form>
        </center>
    </body>



    
</html>