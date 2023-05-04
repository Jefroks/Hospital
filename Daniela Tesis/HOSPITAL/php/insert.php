<?php
    require("conexion.php");
?>
<?php
    
    if (isset($_POST["nombre"], $_POST["apellido"], $_POST["edad"], $_POST["genero"], $_POST["fecha"], $_POST["telefono"],$_POST["email"], $_POST["opciones"], $_POST["comentario"]) and $_POST["nombre"] !="" and $_POST["apellido"]!="" and $edad = $_POST["edad"]!="" and $_POST["genero"]!="" and $_POST["fecha"]!="" and $_POST["telefono"]!="" and $_POST["email"]!="" and $_POST["opciones"]!="" and $_POST["comentario"]!=""){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $genero = $_POST["genero"];
        $nacimiento = $_POST["fecha"];
        $tel = $_POST["telefono"];
        $email = $_POST["email"];
        $area = $_POST["opciones"];
        $descripcion = $_POST["comentario"];
        $inserta = "INSERT INTO `prueba`(`Nombre`, `Apellido`, 'Edad', 'Genero', 'Nacimiento, 'Tel',`email`, `area`, `Descripcion`) VALUES ('$nombre','$apellido', '$edad', ''$genero, '$nacimiento', '$tel','$email', '$area', '$descripcion);";
    } 
    else{
    echo '<p>Por favor, complete el <a href="Generar_Registro.html">formulario</a></p>';
    }
        
?> 