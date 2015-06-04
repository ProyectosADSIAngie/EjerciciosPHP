<?php
/**
* 
*//*
class primerobjeto{
	var $variableuno;
	var $variabledos;

	function metodo1()
	{
		
	}

	function metodo2($parametro1,parametro2){


	}
}*/


//primer objeto

/**
* 
*/
class dimealgo{
	
	function dimealgo($algo)
	{
		echo "lo que te voy a decir es esto:".$algo;
	}
}
$decir = new dimealgo("hola");

//METODOS
/**
* 
*/
?>
<?php
class dimealg{
	
	var $atributo;
	function dimealg($alg)
	{
		$this->atributo = $alg;
		echo $this->atributo;
	}
}
$deci = new dimealg("<br> hola <br>");
?>
<?php
/**
* 
*/
class saluda{
	
	function saludo(){
		echo "yo te saludo";
	}
	function adios(){
		echo "yo te digo adios";
	}
}
//herencia de clases
class subsaluda extends saluda{
	var $atributos;
	function holados(){

	}
}

$instancia = new saluda();
$ins = $instancia->adios();


?>
