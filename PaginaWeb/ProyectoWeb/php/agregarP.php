<?php 

if (isset($_POST["btnAgregarPr"])) {
    echo "se entro a registrar";
    if (!empty($_FILES["ImagenP"]["name"])) {
        $carpeta_destino = "imagenes/Productos/"; 
        $nombre_archivo = $_FILES["ImagenP"]["name"];
        $ruta_archivo = $carpeta_destino . $nombre_archivo;

        if (move_uploaded_file($_FILES["ImagenP"]["tmp_name"], $ruta_archivo)) {
            $nombreProducto = $_POST["NombreP"];
            $precioProducto = $_POST["PrecioP"];

            echo "Archivo subido correctamente a: $ruta_archivo";
            $sql = "INSERT INTO Productos (nombre, precio, imagen_url) VALUES ('$nombreProducto', '$precioProducto', '$ruta_archivo')";
            
            if ($conexion->query($sql) === TRUE) {
                echo "Producto agregado correctamente";
                header("Location: crud_productos.php");
            exit();
            } else {
                echo "Error al agregar el producto: " . $conexion->error;
            }
        } else {
            echo "Error al subir la imagen al servidor";
        }
    } else {
        echo "Por favor, seleccione una imagen";
    }
}
/*if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombreP"]) and !empty($_POST["precioP"]))

    $nombreProducto=$_POST["nombreP"];
    $apellido=$_POST["precioP"]
}*/
?>