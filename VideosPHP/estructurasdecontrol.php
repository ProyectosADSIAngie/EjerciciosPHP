<?php
/*If*/
$mivariable="rojo";

if ($mivariable =="rojo") {

	echo "el color i que es rojo";
}else{
	echo "el color parece que no coincide";
}

/*FOR*/

for ($numero=0; $numero <=10 ; $numero++) {

	echo "hace".$numero."veces que paso aqui <br>";
}
echo "la operacion ha finalizado";

/*switch*/
$variable =3;

switch ($variable) {
	case (1):
		echo "la variable es igual a 1";
		break;

	case (2):
		echo "la variable es igual a 2";
		break;

	case (3):
		echo "la variable es igual a Hola Mundo";
		break;
	}

/*WHILE*/
$mvariable =0;
while ($mvariable <= 10) {
	echo $mvariable."Hola <br>";
	$mvariable=$mvariable+1;
}

/*DO WHILE*/
$dvariable=1;

do{
	echo "Hola";

}while ($dvariable >2);

 echo "ya he finalizado";


 /*GOTO*/
 goto marca;
 echo "este texto me lo salto";

 marca:
 echo "este es el texto que te muestro";

 /*FOR EACH*/
 $matriz = array
 ("coche","casa","moto","ciudad","mundo");
 foreach ($matriz as $valor) {
 	echo $valor."<br/>";
 }
?>