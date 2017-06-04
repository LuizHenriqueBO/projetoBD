<!DOCTYPE html>
<html>
    <head>
  <title>MARCAS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div>
        <table style=" width:200px" class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>Marca</th>
	</tr>
    </thead>
<tbody>


    
<?php

include 'conn.php';

echo "<h1>"."pão com carne moida!"."</h1>"."<br>";

$sql = "SELECT idmarca, nomeMarca FROM marca";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "<tr>
<td>" . $row["idmarca"]. "</td>
<td>" . $row["nomeMarca"]. "</td>	
</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

</tbody>

</table>
    </div>
</body>
</html>