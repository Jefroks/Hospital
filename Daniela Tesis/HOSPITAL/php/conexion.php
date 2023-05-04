<?php
$usuario="root";
$contrasena="";
$servidor="127.0.0.1";
$basededatos="db_hospital";
//$GLOBAL ["conexion"];
$conexion = mysqli_connect($servidor,$usuario,$contrasena) or 
die ("No se ha podido conectar al servidor de Base de Datos");

$db = mysqli_select_db($conexion,$basededatos) or 
die("No se ha podido conectar al servidor de Base de Datos");
