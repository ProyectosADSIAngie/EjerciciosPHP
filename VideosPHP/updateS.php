<?php
$conexion = new PDO('sqlite:biblioteca.sqlite');

$consulta = "UPDATE discos SET artista ='Silvestre' 
WHERE artista ='Silvestre Dangond';";

$resultado = $conexion->query($consulta);

?>
