<?php

echo "<h3> lista de todas las canciones </h3>";
echo "<table border=1><tr><td>Artista</td><td>Discos</td><td>Año
</td></tr></th>";

$conexion = new PDO('sqlite:biblioteca.sqlite');

//CONSULTA CON WHERE

//$consulta = "SELECT * FROM discos WHERE Artista='U2' ORDER BY Anio DESC;";

$consulta = "SELECT * FROM discos;";

$resultado = $conexion->query($consulta);

foreach ($resultado as $row) {

	echo "<tr><td>".$row['artista']."</td><td>".$row['disco']."
	</td><td>".$row['anio']."</td></tr>";
}
echo "</table>";


?> 