<?php 
if (isset($_POST["btnModificar"])) {
    if (isset($_POST["NombreP"]) && !empty($_POST["PrecioP"])) {
        $id = $_POST["id"];
        $nombre = $_POST["NombreP"];
        $precio = $_POST["PrecioP"];

        // Verificar si se proporcionó una nueva imagen
        if (!empty($_FILES["NuevaImagenP"]["name"])) {
            $carpeta_destino = "../imagenes/Productos/"; 
            $nombre_archivo = $_FILES["NuevaImagenP"]["name"];
            $ruta_archivo = $carpeta_destino . $nombre_archivo;

            if (move_uploaded_file($_FILES["NuevaImagenP"]["tmp_name"], $ruta_archivo)) {
                // Si la imagen se subió correctamente, actualizar la información en la base de datos
                $ruta_en_bd = "imagenes/Productos/" . $nombre_archivo;
                $sql = $conexion->query("UPDATE Productos SET nombre='$nombre', precio='$precio', imagen_url='$ruta_en_bd' WHERE id=$id");

                if ($sql == 1) {            
                    header("location:../crud_productos.php");
                    exit();
                } else {
                    echo "<div class='alert alert_warning'>Error al modificar el producto</div>";
                }
            } else {
                echo "<div class='alert alert_warning'>Error al subir la nueva imagen al servidor</div>";
            }
        } else {            
            $sql = $conexion->query("UPDATE Productos SET nombre='$nombre', precio='$precio' WHERE id=$id");

            if ($sql == 1) {            
                header("location:../crud_productos.php");
                exit();
            } else {
                echo "<div class='alert alert_warning'>Error al modificar el producto</div>";
            }
        }
    } else {
        echo "<div class='alert alert_warning'>Campo vacío</div>";
    }
}
?>
