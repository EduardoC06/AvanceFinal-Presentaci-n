<?php 

include "conexion.php";

$idP = $_GET["id"];

$sql = $conexion->query("SELECT * FROM Productos WHERE id = $idP");

// Obtener el primer resultado fuera del bucle
if ($producto = $sql->fetch_object()) {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificar Producto</title>
</head>

<body>
  <form class="col-4 p-3" method='POST' enctype="multipart/form-data">
    <h2>Modificar productos</h2>
    <input type="hidden" name="id" value="<?= $producto->id ?>">
    <?php 
    include "ModificarProducto.php";

    // Volver al inicio del conjunto de resultados para el bucle while
    $sql->data_seek(0);

    while ($datos = $sql->fetch_object()) { ?>
    <div class="mb-3">
      <label class="form-label">Nombre del producto</label>
      <input type="text" class="form-control" name="NombreP" value="<?= $datos->nombre ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Precio del producto</label>
      <input type="text" class="form-control" name="PrecioP" value="<?= $datos->precio ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Imagen</label>
      <input type="file" class="form-control" name="NuevaImagenP" value="<?= $datos->imagen_url ?>">
    </div>
    <button type="submit" class="btn-primary" name="btnModificar">Modificar</button>
    <?php } ?>
  </form>
</body>

<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
  }

  h2 {
    color: #007bff;
  }

  .contenedor-floatval {
    display: flex;
    justify-content: space-between;
    margin-bottom: 5px;
  }

  .col-4 {
    background-color: #ffffff;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    padding: 25px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .mb-3 {
    margin-bottom: 25px;
  }

  .col-4 label {
    display: block;
    /* Hace que el label sea un bloque */
    margin-bottom: 5px;
    /* Agrega un pequeño espacio entre el label y el input */
  }

  .col-4 input[type="text"],
  .col-4 input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ced4da;
    border-radius: 5px;
  }


  .btn-primary {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    padding: 10px 15px;
    margin-right: 5px;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
  }
</style>

</html>
<?php
} else {
    // Manejar el caso en que no hay resultados
    echo "No se encontraron datos para la ID proporcionada.";
}
?>