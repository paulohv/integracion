<?php 

//Parametros de conexion
$servidor = "localhost";
$usuario = "admin";
$password = "admin";
$basedatos = "bdintegracion"

$conexion = mysqli_connect($servidor,$usuario,$password) or die ("<b>No hay conexion con el servidor</b>");

mysqli_set_charset($conexion,"utf8");

$bd = mysqli_select_db($conexion,$basedatos) or die ("<b>No hay conexion con la base de datos</b>")

?>