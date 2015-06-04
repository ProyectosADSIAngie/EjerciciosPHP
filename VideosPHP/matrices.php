<?php
$fruta[0] = "manzana";
$fruta[1] = "pera";
$fruta[2] = "platano";

for ($numero=0; $numero <=2 ; $numero++) { 
	echo $fruta[$numero]."<br>";
}
/*matrices asociativas y multidimencionales*/
$agenda[0]['nombre'] = "luis";
$agenda[0]['telefono'] = "33435";
$agenda[0]['email'] = "luis@mdn";

$agenda[1]['nombre'] = "miguel";
$agenda[1]['telefono'] = "5467";
$agenda[1]['email'] = "hvhbh@vd";

$agenda[2]['nombre'] = "marta";
$agenda[2]['telefono'] = "5566";
$agenda[2]['email'] = "lhsdj@s";

echo $agenda[2]['nombre'];

/*listar elementos de una matriz*/

for ($indice=0; $indice <=2 ; $indice++) {
echo '
<table border=1 width=300px>
   <tr>
      <td>
        nombre:
      </td>
      <td>'.$agenda[$indice]['nombre'].'
      </td>  
    </tr>   

<tr>
      <td>
        apellido:
      </td>
      <td>'.$agenda[$indice]['telefono'].'
      </td>  
    </tr>

<tr>
      <td>
        email:
      </td>
      <td>'.$agenda[$indice]['email'].'
      </td>  
    </tr>
	';
}
?>
