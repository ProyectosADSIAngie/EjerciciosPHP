<?php

echo "yo soy el contenido original";
include "Include.php";

/*require*/
echo "yo soy el contenido original";
require "Include.php";
echo "hola soy un mensaje";
echo "<br/>";


/*includeone*/
 include_once ("origen.php");
 $fruta="pera";

 include_once ("origen.php");
 echo $fruta;
 
?>