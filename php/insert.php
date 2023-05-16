<?php
$servername="localhost";
$username="hospital";
$password="jospital1!";
$dbname="db_hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Create the SQL query
$stmt = $conn->prepare ("INSERT INTO pacientes (id, nombre, apellidoP, apellidoM, genero, curp, fechaN, dir, tel, email, fechaR, areas)
VALUES (:idex, :nombre, :apeP, :apeM, :genero, :curp, :fechaN, :dir, :tel, :correo, :fechaR, :areaOp);");

$stmt->bind_param("ssssssssss", $field1, $field2, $field3, $field4, $field5, $field6, $field7, $field8, $field9, $field10);


// Bind the values from the form
$id = $_POST['idex'];
$nombre = $_POST['nombre'];
$apeP = $_POST['apeP'];
$apeM = $_POST['apeM'];
$genero = $_POST['genero'];
$curp = $_POST['curp'];
$fechaN = $_POST['fechaN'];
$dir = $_POST['dir'];
$tel = $_POST['tel'];
$correo = $_POST['correo'];
$fechaR = $_POST['fechoR'];
$areaOp = $_POST['opciones'];

// Execute the statement
$stmt->execute();

// Check if the query was successful
if ($stmt->execute()) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

header("Location: index.html");
?>