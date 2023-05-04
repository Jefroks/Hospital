<?php
$usuario="prog5a";
$contrasena="jospital1!";
$servidor="localhost";
$basededatos="db_hospital";
//$GLOBAL ["conexion"];
$conexion = mysqli_connect($servidor,$usuario,$contrasena) or 
die ("No se ha podido conectar al servidor de Base de Datos");

$db = mysqli_select_db($conexion,$basededatos) or 
die("No se ha podido conectar al servidor de Base de Datos");
