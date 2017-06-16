CIDADE:
<select name="cidade">
    <option>SELECIONE UMA CIDADE</option>
    <?php
    // INCLUS�O DO ARQUIVOS DE CONFIGURA��O E CONEX�O COM O BANCO DE DADOS
    include "conn.php";
    //
    
    $estado = $_GET['estado'];
    
    
    $sql = "select idcidade, descricao from estado, cidade where uf= '$estado' and estado_uf = uf;";
    
    /*$sql = "select idmodelo, descricaoModelo from marca, modelo where idmarca= ".$_GET['marca']." and marca_idmarca = idmarca;";*/
    
    $result = $conn->query($sql);


    while ($row = $result->fetch_assoc()) {

        echo "<option value='" . $row["idcidade"] . "'>" . $row["descricao"] . "</option>";
    }
    ?>
    
     
</select>
<a href="inserirCidade.php" class="btn btn-danger btn-xs" role="button">...</a>