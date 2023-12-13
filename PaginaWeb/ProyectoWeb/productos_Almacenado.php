<?php

    $data = json_decode(file_get_contents('php://input'), true);


    $usuario = "u35rpuls5faxhv5c";
    $password = "BKuyShq5kt0yuVJ4ez49";
    $servidor = "bx7ca7rkazragihan4yp-mysql.services.clever-cloud.com";
    $basedatos = "bx7ca7rkazragihan4yp";
    
    $conexion = new mysqli($servidor, $usuario, $password, $basedatos);
    
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }
    
    $titulo = $data['titulo'];
    $precio = $data['precioProducto'];

    $sql = "INSERT INTO encargos (titulo, precio_total) VALUES ('$titulo', '$precio')";

    if ($conexion->query($sql) === TRUE) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . $conexion->error;
    }

    header("Location: productos.php");
    exit;

    $conexion->close();


?>