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
