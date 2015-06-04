<?php
$conexion = mysql_connect("localhost","angie","angie");

if (!$conexion) {
die ("No he podido conectar por la siguiente razon:".mysql_error());
}

mysql_select_db("agenda",$conexion);

mysql_query("INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono)
VALUES ('Jose Viciente','Carratala',32,'00001')");

mysql_query("INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono)
VALUES ('Miguel','Sanchez',40,'000011')");

mysql_close($conexion);

?>