<?php

session_start();

echo "Tu usuario es:".$_SESSION 
['usuario']."<br/> Tu contrasena es:".
$_SESSION['contrasena'];

//crear conexion
$conexion = new PDO('sqlite:favoritos.sqlite');

//establecer una consulta
$consulta = "SELECT * FROM favorito WHERE usuario='jocarsa' AND contrasena='jocarsa';";

//ejecutar la consulta
$resultado = $conexion->query($consulta);

//imprimir la consulta
echo "
<table border=1 width=100%>
<tr>
<td>Titulo</td>
<td>Direccion</td>
<td>Categoria</td>
<td>Comentario</td>
<td>Valoracion</td>
</tr>
";

foreach ($resultado as $fila){

echo "<tr><td>".$fila['titulo']."</td><td>".$fila['direccion']."</
td><td>".$fila['categoria']."</td><td>".$fila['comentario']."</td><td>".
$fila['valorcion']."</td></tr>";
}

echo "</table>";

//cerramos la conexion 
$conexion = null;

?>