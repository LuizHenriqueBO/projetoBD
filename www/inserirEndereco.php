

<?php
include 'conn.php';
?>

<html>
    

    <head>
        <title> INSERIR ENDEREÇO </title>
        
        
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
            <h3>INSERIR ENDEREÇO</h3><br>
            
        <form action="inserirEndereco2.php" method="post">
            
            RUA:<br>
            <input type="text" name="rua"><br><br>
            
            NUMERO:<br>
            <input type="text" name="numresid"><br><br>
            
            CEP:<br>
            <input type="text" name="cep"><br><br>
            
            COMPLEMENTO:<br>
            <input type="text" name="complemento"><br><br><br>
           
            
            CIDADE:
            <select name="idcidade">


                <?php
                $sql = "SELECT * FROM banco_utfpr.cidade;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["idcidade"] . "'>" . $row["descricao"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>

            </select>
            
            <br><br><br>
            <a href="visualizarEndereco.php" class="btn btn-success" role="button">VOLTAR</a>
            
            
            <input type="submit">
        </form>
        </center>
    </body>
</html>