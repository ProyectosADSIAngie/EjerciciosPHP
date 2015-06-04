<?php

$conexion = mysql_connect("localhost","angie","angie");

mysql_select_db("agenda",$conexion);

mysql_query("UPDATE miagenda SET Edad ='24' WHERE Nombre='Marta'AND Apellido='Lopez'");

mysql_close($conexion);
?>