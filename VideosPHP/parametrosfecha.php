<?php
echo date ("d");//dia del mes
echo date ("j");//dia sin cero
echo date ("D");//texto
echo date ("l");//texto completo
echo date ("N");//DIA 
echo date ("w");//umero del dia
echo date ("z");//dias que han pasado dede que empezo el año
echo date ("W");//texto completo
echo date ("F");//MESES
echo date ("Y");//Año completo
echo date ("y");//Año dos ultimos dijitos del año
echo date ("c");//fecha en año-mes-dia-hora-min-seg

//PARAMETROS DE TIEPO
echo date ("a");//am o pm
echo date ("A");//mayuscula am o pm
echo date ("B");//HORA EN FORMATO S
echo date ("g");//formato 
echo date ("G");//FORMATO DE 1 a 24
echo date ("u");//microsegundos

echo date ("e");//zona horaria
echo date ("I");//HORIA DEL SOL
echo date ("O");//MEDIDIANO
 echo "<br>";
//FORMULcion de fechas
echo "hoy es ".date("1").",".date("F")."de".date("Y");

//fechas en castellano

function dametiempo(){

	switch (date("1")) {
		case "monday":
		$dia="lunes";
			break;
		
	    case "tuesday":
		$dia="martes";
			break;

		case "wednesday":
		$dia="miercoles";
			break;

		case "thursday":
		$dia="jueves";
			break;
	
		case "friday":
		$dia="viernes";
			break;	
		
		case "saturday":
		$dia="sabado";
			break;
		
		case "sunday":
		$dia="domingo";
			break;	
	}
}
?>