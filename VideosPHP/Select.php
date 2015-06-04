<?php
//Realizamos la conexion
$conexion = mysql_connect("localhost","angie","angie");
//Estructura de control por si falla
if (!$conexion) {
die ("No he podido conectar porque:".mysql_error());
}
//seleccion de la base de datos
mysql_select_db("agenda",$conexion);

//realizo la peticion
$peticion = mysql_query("SELECT * FROM miagenda");

//listolos elementos de la base de datos
while ($fila = mysql_fetch_array($peticion)) 
{
	echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".
	$fila['Telefono'];
	echo "<br>";
}

//cerrar la conexion
mysql_close($conexion);

?>