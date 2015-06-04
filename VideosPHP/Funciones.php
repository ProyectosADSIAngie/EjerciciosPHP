<?php

function mifuncion(){

	echo "yo soy yo";
	echo "<br>";
	echo "tu eres tu";
	echo "<br>";
	echo "nosotros somos nosotros<br>";
}

mifuncion();
mifuncion();
mifuncion();
mifuncion();
mifuncion();

/*FUNCIONES CON PARAMETROS*/

//tabla de multiplicar
function mitabla($numero){
	for ($multiplicador=0; $multiplicador <=10 ; $multiplicador++) {
		echo $numero."x".$multiplicador."=".$numero
		*$multiplicador."<br>";
	}
}
//todas las tablas de multiplicar
for ($otronumero=0; $otronumero <=10 ; $otronumero++) { 
	echo "tabla del".$otronumero.":<br>";
}
mitabla($otronumero)

/*Ambitos*/
/*$variable = "hola";

function hola(){
	global $variable;
	echo $variable;
}
hola();*/
?>