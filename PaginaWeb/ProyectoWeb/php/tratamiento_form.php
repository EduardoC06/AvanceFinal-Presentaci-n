<?php

$usuario = "u35rpuls5faxhv5c";
$password = "BKuyShq5kt0yuVJ4ez49";
$servidor = "bx7ca7rkazragihan4yp-mysql.services.clever-cloud.com";
$basedatos = "bx7ca7rkazragihan4yp";


$conexion = new mysqli($servidor, $usuario, $password, $basedatos);


if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}


$primerNombre = $_POST['nom'];
//$segundoNombre = $_POST['nom2'];
$primerApellido = $_POST['apel'];
$segundoApellido = $_POST['apel2'];
$dni = $_POST['dni'];
$correo = $_POST['corr'];
$numCelular = $_POST['numC'];
$estadoCivil = $_POST['Estado'];
$tipoMensaje = $_POST['Mensaje']; 
$comentario = $_POST['Comentario'];


$sql = "INSERT INTO formulario_contacto (primer_nombre, primer_apellido, segundo_apellido, dni, 
correo, num_celular, estado_civil, tipo_mensaje, comentario) VALUES ('$primerNombre', 
'$primerApellido', '$segundoApellido', '$dni', '$correo', '$numCelular', 
'$estadoCivil', '$tipoMensaje', '$comentario')";

if ($conexion->query($sql) === TRUE) {   
} else {
    echo "Error al insertar datos: " . $conexion->error;
}


$conexion->close();

header("Location: /ProyectoWeb/contactenos.php");
exit;
?>