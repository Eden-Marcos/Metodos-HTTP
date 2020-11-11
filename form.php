<?php 
 $usuario ="root";
 $password ="";
 $host="localhost";
 $db="compra";
 $conexion=mysqli_connect($host,$usuario,$password,$db) or die("No se a podido conectar");
 //inicio de variables con los valores de un formulario
 $idprod= $_POST["CTidprod"];
 $cupon= $_POST["CTcupon"];
 $precio= $_POST["CTprecio"];
 $piezas= $_POST["CTpiezas"];
 //insertar el registro
$resIns=$conexion->query("INSERT INTO pedidos VALUES ($idprod,'$cupon',$precio,$piezas)");

$resultado = $conexion->query("select * from pedidos");
echo "<link rel='stylesheet' href='estilos.css'>";
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>cupon </th>";
echo "<th>precio </th>";
echo "<th>piezas </th>";
echo "</tr>";
echo "<thead>";
echo "<tbody>";
while ($columna=mysqli_fetch_array($resultado)){ 
	echo "<tr>"; 
	echo "<tr>"; 
	echo "<td>". $columna ["idprod"]. "</td>"; 
	echo "<td>". $columna ["cupon"]. "</td>"; 
	echo "<td>". $columna ["precio"]. "</td>"; 
	echo "<td>". $columna ["piezas"]. "</td>";  
	echo "</tr>";
 } 
 echo "</tbody>";
 echo "</table>"; 
 echo "<p>Total de registros:" . $resultado ->num_rows ;


 ?>