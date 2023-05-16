<?php
    require("conexion.php");
?>

<?php
// Create the SQL query
$sql = 'INSERT INTO pacientes (id, nombre, apellidoP, apellidoM, genero, curp, fechaN, email, fechaR, areas)
VALUES (:idex, :nombre, :apeP, :apeM, :genero, :curp, :fechaN, :correo, :fechaR, :areaOp)';

// Prepare the statement
$stmt = $db->prepare($sql);

// Bind the values from the form
$stmt->bindValue(':id', $_POST['idex']);
$stmt->bindValue(':nombre', $_POST['nombre']);
$stmt->bindValue(':apeP', $_POST['apeP']);
$stmt->bindValue(':apeM', $_POST['apeM']);
$stmt->bindValue(':genero', $_POST['genero']);
$stmt->bindValue(':curp', $_POST['curp']);
$stmt->bindValue(':fechaN', $_POST['fechaN']);
$stmt->bindValue(':correo', $_POST['correo']);
$stmt->bindValue(':fechaR', $_POST['fechoR']);
$stmt->bindValue(':areaOp', $_POST['opciones']);

// Execute the statement
$stmt->execute();

// Check if the query was successful
if ($stmt->rowCount() > 0) {
    echo 'Data inserted successfully!';
} else {
    echo 'Error inserting data: ' . $stmt->errorInfo();
}

// Close the connection
$db = null;

?>