<?php

@$tuip= getenv(REMOTE_ADDR);

echo "Tu IP es".$tuip;
echo "<br>";
 $tunavegador =$_SERVER["HTTP_USER_AGENT"];
 echo"y tu sisetama opertaivo y navegador es".$tunavegador;
?>