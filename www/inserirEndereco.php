

<?php
include 'conn.php';
?>

<html>
    

    <head>
        <title> INSERIR ENDEREÇO </title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="jQuery/jquery-3.2.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        
        <script language="javascript" type="text/javascript" src="js/arquivo_ajax_Cidade.js"></script>

    </head>
    <body>
        <style>
            @import url('../comandocss/fundo.css');
        </style>
        
        <center>
            <h3>INSERIR ENDEREÇO</h3>
            <br>
            
        <form action="inserirEndereco2.php" method="post">
            
            RUA:<br>
            <input type="text" name="rua"><br><br>
            
            NUMERO:<br>
            <input type="text" name="numresid"><br><br>
            
            CEP:<br>
            <input type="text" name="cep"><br><br>
            
            COMPLEMENTO:<br>
            <input type="text" name="complemento"><br><br><br>
           
            
            
            
            ESTADO:
            <select name="estado" onchange="javascript:mudar(this.value);">

                <option> SELECIONE UM ESTADO</option>
                <?php
                $sql = "SELECT * FROM banco_utfpr.estado;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["uf"] . "'>" . $row["nome"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
                ?>
            
             </select>

            <a href="inserirEstado.html" class="btn btn-danger btn-xs" role="button">...</a>
            
            <br><br><br>

            <!--CIDADE:-->

            <div id="mostraCombo">

                <select name="cidade">
                    <option>SELECIONE UM ESTADO PRIMEIRO</option>
                </select>

            </div>
            
            <br><br><br>
            <a href="visualizarEndereco.php" class="btn btn-success btn-sm" role="button">VOLTAR</a>
            
            
            <input type="submit" value="ENVIAR " class="btn btn-primary btn-sm">
        </form>
        </center>
    </body>
</html>