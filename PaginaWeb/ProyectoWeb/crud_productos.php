<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>Agregar Productos</title>
</head>

<body>
  <h2>Productos</h2>
  <?php 
  include "php/conexion.php";
  include "php/BorrarProducto.php";
  ?>
  <div class="contenedor-floatval rom">
    <form class="col-4 " method='POST' enctype="multipart/form-data">

    <?php 
    include "php/conexion.php";
    include "php/agregarP.php";
    ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del producto</label>
        <input type="text" class="form-control" name="NombreP">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Precio del producto</label>
        <input type="text" class="form-control" name="PrecioP">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Imagen</label>
        <input type="file" class="form-control" name="ImagenP">
      </div>
      <button type="submit" class="btn btn-primary" name="btnAgregarPr">Agregar</button>
    </form>
  </div>
  <div class="col-8 p-4">
    <table class="table">
      <thead class="bg-info">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">Precio</th>
          <th scope="col">URL IMAGEN</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include "php/conexion.php";
          $sql = "select * from Productos";
          $result = $conexion->query($sql);
                  
          //$sql = "INSERT INTO formulario_contacto (id, nombreP, precioP, imageURL) VALUES ('', '')";
          while($datos = $result->fetch_object()) { ?>
        <tr>
          <td><?=$datos->id?></td>
          <td><?=$datos->nombre?></td>
          <td><?=$datos->precio?></td>
          <td><?=$datos->imagen_url?></td>
        </tr>
        <td>
          <a href="php/modificarP.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning">Editar</a>
          <a href="crud_productos.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger">Borrar</a>
        </td>
        <?php }

                ?>
      </tbody>
    </table>
  </div>
  <style>
    /*body {
      background-color: #f8f9fa;
    }

    h2 {
      color: #343a40;
    }

    .contenedor-floatval {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }

    .form-container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table-container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }*/
  
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
    padding-right: 45px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .mb-3 {
    margin-bottom: 25px;
  }

  .col-4 label {
    display: block; /* Hace que el label sea un bloque */
    margin-bottom: 5px; /* Agrega un pequeño espacio entre el label y el input */
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
    padding: 5px 10px;
    margin-right: 5px;    
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
  }

  .col-8 {
    background-color: #ffffff;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .bg-info {
    background-color: #17a2b8;
    color: #ffffff;
  }

  .btn-warning,
  .btn-danger {
    padding: 5px 10px;
    margin-right: 5px;
    margin-top: 4px;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
  }

  .btn-warning {
    background-color: #ffc107;
    color: #212529;
  }

  .btn-danger {
    background-color: #dc3545;
    color: #ffffff;
  }

  .table {
    width: 100%;
  }  
  </style>
</body>

</html>