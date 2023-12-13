<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $primerNombre = $_POST['nom'];
    $segundoNombre = $_POST['nom2'];
    $primerApellido = $_POST['apel'];
    $segundoApellido = $_POST['apel2'];
    $dni = $_POST['dni'];
    $correo = $_POST['corr'];
    $numC = $_POST['numC'];
    $estadoCivil = $_POST['Estado'];
    $mensaje = $_POST['Mensaje'];
    $comentario = $_POST['Comentario:'];

    echo "Primer Nombre: " . $primerNombre . "<br>";
    echo "Segundo Nombre: " . $segundoNombre . "<br>";
    echo "Primer Apellido: " . $primerApellido . "<br>";
    echo "Segundo Apellido: " . $segundoApellido . "<br>";
    echo "DNI: " . $dni . "<br>";
    echo "Correo: " . $correo . "<br>";
    echo "Número de Celular: " . $numC . "<br>";
    echo "Estado Civil: " . $estadoCivil . "<br>";
    echo "Mensaje: " . $mensaje . "<br>";
    echo "Comentario: " . $comentario;
}
?>
