<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formularioDNI">
        <label for="dni">Ingrese el DNI:</label>
        <input type="text" id="dni" name="dni" oninput="consultarDNI()">
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" readonly>
    </form>

    <script>
        function consultarDNI() {
            var dniInput = document.getElementById('dni');
            var nombresInput = document.getElementById('nombres');

            var dni = dniInput.value.trim();

            if (dni.length === 8) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'ScriptConsulta.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var respuesta = JSON.parse(xhr.responseText);

                        // Asignar el valor al campo de nombres
                        nombresInput.value = respuesta.nombres;
                    }
                };

                xhr.send('DNI=' + dni);
            } else {
                // Limpiar el campo de nombres si el DNI no es válido
                nombresInput.value = '';
            }
        }
    </script>
</body>
</html>