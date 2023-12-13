<?php

//revisar que los campos esten completos si o si
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $usuarioD = $_POST['usuario'];
    $passwordd = $_POST['password'];

    $sql = "INSERT INTO DatosInicio (usuario, PASSWORD) VALUES ('$usuarioD', '$passwordd')";

    if ($conexion->query($sql) === TRUE) {
        // Éxito en la inserción, puedes realizar acciones adicionales si es necesario
    } else {
        echo "Error al insertar datos: " . $conexion->error;
    }

    $conexion->close();
    
    header("Location:Login.php");
    exit;
}
?>