<?php
$hostname="localhost";
$username="prog5a";
$password="jospital1!";
$basededatos="db_hospital";
//$GLOBAL ["conexion"];
$conexion = mysqli_connect($hostname,$username,$password,$basededatos) or 
die ("No se ha podido conectar al servidor");
/* 
$db = mysqli_select_db($conexion,) or 
die("No se ha podido conectar al servidor de Base de Datos"); */
