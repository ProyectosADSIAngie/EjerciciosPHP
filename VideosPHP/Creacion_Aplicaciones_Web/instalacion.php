<?php

//CREAR TABLA DE FAVORITOS------------------------------------------------------------------------------------------------
//conexion------------------------------------
$conexion = new PDO('sqlite:favoritos.sqlite');
//crear tabla------------------------------------
$consulta = 'CREATE TABLE favorito(
usuario char(40) Not Null,
contrasena char (40) Not Null,
titulo char (40) Not Null,
direccion char (100) Not Null,     
categoria char (40),
comentario char (200),
valoracion int 
)';
//insertar contenido en la tabla-----------------
$conexion = $conexion -> exec($consulta);
//cerrar la conexion-----------------------------
$conexion = null;



//CONTENIDO DE PRUEBA PARA LA TABLA DE FAVORITOS----------------------------------------------------------------------------
//Establecer
$conexion = new PDO('sqlite:favoritos.sqlite');
//preparar
$count = $conexion->exec("INSERT INTO favorito(usuario,contrasena,titulo,direccion,categoria,comentario,valoracion)
VALUES ('jocarsa','jocarsa','Google','http://www.google.com','tecnologia','este es un buscador muy famoso',10)");
//insertar
$conexion = $conexion -> exec($consulta);
//cerrar
$conexion = null;


//CREAR TABLA DE USUARIOS----------------------------------------------------------------------------------------------------
//conexion-------------------------------------
$conexion = new PDO('sqlite:favoritos.sqlite');
//crear tabla-----------------------------------
$consulta = 'CREATE TABLE usuarios(
usuario char(40) Not Null,
contrasena char (40) Not Null,
nombre char (40) Not Null,
apellido char (100) Not Null,   
edad int ,
permisos int 
)';
//insertar contenido en la tabla----------------
$conexion = $conexion -> exec($consulta);
//cerrar la conexion----------------------------
$conexion = null;


//CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS-------------------------------------------------------------------------------
//Establecer
$conexion = new PDO('sqlite:favoritos.sqlite');
//preparar
$count = $conexion->exec("INSERT INTO usuarios(usuario,contrasena,nombre,apellido,edad,permisos)
VALUES ('jocarsa','jocarsa','Jose vicente','carratala',32,1)");
//insertar
$conexion = $conexion -> exec($consulta);
//cerrar
$conexion = null;

//CREAR UNA TABLA DE LOGS-------------------------------------------------------------------------------------------------------
//conexion-------------------------------------
$conexion = new PDO('sqlite:favoritos.sqlite');
//crear tabla-----------------------------------
$consulta = 'CREATE TABLE logs(
utc Int ,
anio int,
mes int,
dia int,   
hora int,
minuto int,
segundo int,
ip char (50),
navegador char (100),
usuario char (40),
contrasena char (40),
)';
//insertar contenido en la tabla----------------
$conexion = $conexion -> exec($consulta);
//cerrar la conexion----------------------------
$conexion = null;


//CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS---------------------------------------------------------------------------------
//Establecer
$conexion = new PDO('sqlite:favoritos.sqlite');
//preparar
$count = $conexion->exec("INSERT INTO logs (utc,anio,mes,dia,hora,minuto,segundo,ip,navegador,usuario,contrasena)
VALUES (0000000,2011,02,07,21,03,00,'127.0.0.1','chrome','jocarsa','jocarsa')");
//insertar
$conexion = $conexion -> exec($consulta);
//cerrar
$conexion= null;

?>