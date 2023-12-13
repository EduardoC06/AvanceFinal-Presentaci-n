<?php 
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM Productos WHERE id=$id ");

    if ($sql==1) {
        //se podria agregar para preguntar si esta seguro de borrar
        echo "<div class='alert alert_warning'>Producto eliminado</div>";
    } else {
        echo "<div class='alert alert_warning'>Error al eliminar</div>";
    }
}
?>