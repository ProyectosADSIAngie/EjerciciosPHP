<?php
$conexion = new PDO('sqlite:biblioteca.sqlite');

$consulta = "DELETE FROM discos WHERE artista ='Silvestre';";

$resultado = $conexion->query($consulta);

?>