MODELO:
<select name="modelo">
    <option>SELECIONE UM MODELO</option>
    <?php
    // INCLUS�O DO ARQUIVOS DE CONFIGURA��O E CONEX�O COM O BANCO DE DADOS
    include "conn.php";
    //
    $sql = "select idmodelo, descricaoModelo from marca, modelo where idmarca= ".$_GET['marca']." and marca_idmarca = idmarca;";
    
    $result = $conn->query($sql);


    while ($row = $result->fetch_assoc()) {

        echo "<option value='" . $row["idmodelo"] . "'>" . $row["descricaoModelo"] . "</option>";
    }
    ?>
    
     
</select>
<a href="inserirModelo.php" class="btn btn-danger btn-xs" role="button">...</a>