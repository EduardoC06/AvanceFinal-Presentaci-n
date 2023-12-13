<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="EstiloP\estilo.css">
    <link rel="stylesheet" type="text/css" href="EstiloP/estilosO.css">
    <link rel="icon" href="imagenes/log.png" type="image/x-icon">
    <title>Contactenos</title>
</head>

<body>
<section class="recSu">        
        <div class="logo">        
            <a href="inndex.php">CAP Brewery</a>            
        </div>
        <nav class="enlaces">
        <div id="idiomaLink" class="dropdownboton">
            <a href="inndex.php"><img src="imagenes/iconos/accesibilidad.png" alt="" width="24px"></a>
            <div id="opcionesIdioma" class="dropdown-content-boton">
                <span onclick="cambiarVideo('ingles')">Inglés</span>
                <span onclick="cambiarVideo('espanol')">Español</span>
            </div>
        </div>

        <div class="dropdown"> 
            <a href="inndex.php">Inicio</a>
            <div class="dropdown-content">
                <video id="miVideo" width="148" height="110" autoplay loop muted>
                    <source src="videos\Lenguaje_Inicio.mp4" type="video/mp4">                    
                </video>
            </div>
        </div>

        <div class="dropdown"> 
            <a href="nosotros.php">Nosotros</a>
            <div class="dropdown-content">
                <video id="miVideo1" width="220" height="110" autoplay loop muted>
                    <source src="videos\Lenguaje_Nosotros.mp4" type="video/mp4">                    
                </video>
            </div>
        </div>

        <div class="dropdown"> 
            <a href="productos.php">Productos</a>
            <div class="dropdown-content">
                <video id="miVideo2" width="220" height="110" autoplay loop muted>
                    <source src="videos\Lenguaje_Productos.mp4" type="video/mp4">                    
                </video>
            </div>
        </div>

        <div class="dropdown"> 
            <a href="contactenos.php">Contactenos</a>
            <div class="dropdown-content2">
                <video id="miVideo3" width="220" height="110" autoplay loop muted>
                    <source src="videos\Lenguaje_Ayuda.mp4" type="video/mp4">                    
                </video>
            </div>
        </div>
    </nav>
    </section>

    <h1 class="tituloP">Contacto</h1>

    <div class="contenedor-general">
        <div class="sub-contenedor">
            <div class="info-contacto">
                <h2>¿Tienes algun <br>problema?</h2>
                <p>Por favor, cuéntame cuál es tu 
                    problema o pregunta en el formulario, y estaré encantado de responder. 
                    ¡No dudes en compartir los detalles que necesito saber para brindarte la mejor ayuda posible!</p>
            </div>
            <div class="imagen-contacto">
                <img src="imagenes/contacto2.jpeg" alt="" width="100%" height="100%">
            </div>
        </div>  

        <div class="sub-contenedor2">
            <form class="formulario2" action="php/tratamiento_form.php" method="post">        
                 
                <label>Nombres</label>
                <div class="nombres-formulario">
                    <input type="text" id="nombres" name="nom" placeholder="Primer nombre">
                </div>

                <label>Apellidos</label>    
                <div class="apellidos-formulario">
                    <input type="text" id="apellidoP" name="apel" placeholder="Primer apellido" >
                    <input type="text" id="apellidoM" name="apel2" placeholder="Segundo apellido">
                </div>               
                

                <div class="d-c-formulario">
                    <label>DNI</label>
                    <label>Correo</label>
                </div>

                <div class="d-c-formulario2">
                    <div class="dni-formulario">
                        <input type="text" id="dni" name="dni" placeholder="#######" oninput="consultarDNI()">
                    </div>
                    <div class="correo-formulario">
                        <input type="gmail" name="corr" placeholder="abcd1234@gmail.com">
                    </div>
                </div>

                <label>Num celular</label>

                <div class="num-formulario">
                    <input type="text" name="numC" placeholder="#########">
                </div>

                <label>Estado civil</label>

                <div class="E-T-formulario">
                    <div class="estadoC-formulario">
                        <select id="estadC" name="Estado">
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                        </select>
                    </div>

                    <div class="tipoM-formulario">
                        <select id="tipoM" name="Mensaje">
                            <option value="Consulta">Consulta</option>
                            <option value="Solicitud"> Solicitud</option>
                            <option value="Reclamo">Reclamo</option>
                        </select>
                    </div>
                </div>

                <label>Comentario</label>

                <div class="comentario-formulario">
                    <textarea name="Comentario"></textarea>
                </div>
                <input type="reset" name="Limpiar" value="Limpiar">
                <input type="submit" name="enviar" value="Enviar">
            </form>
        </div>
    </div>


    <footer class="Consejo">
        <h3>Tomar bebidas alcolicas en exceso es dañino <br> Esta prohibido el consumo y venta de alcohol a menores de
            18 años</h3>
    </footer>

    <footer class="copyr">
        <div class="logcop">
            <img src="imagenes\log.png" alt="Esta imagen representa el logo de la empresa" width="60px" height="60px">
            <br>
            <a href="#">CAP Brewery</a>
            <br>
            <a href="#">Terminos y condiciones</a>
            <br>
            <p>&copy; Derechos de autor 2023 CAP Brewery.</p>
        </div>

        <div class="enc">
            <p>Encuentranos en</p>
            <br>
            <a href="https://www.facebook.com" target="_blank">
                <img src="imagenes/iconos/facebook.png" width="32px" height="32px">
            </a>
            <a href="https://www.whatsapp.com/?lang=es_LA" target="_blank">
                <img src="imagenes/iconos/whatsapp.png" width="32px" height="32px">
            </a>
            <a href="https://twitter.com/?lang=es" target="_blank">
                <img src="imagenes/iconos/twitter.png" width="32px" height="32px">
            </a>
        </div>
    </footer>
</body>
<style>
/* */
#idiomaLink button {
            background: transparent; /* Establece el fondo del botón como transparente */
            border: none; /* Elimina el borde del botón si es necesario */
            padding: 0; /* Ajusta el relleno según sea necesario */
        }

        /* */
        #idiomaLink {
    position: relative;
    display: inline-block;
}

#idiomaLink img {
    cursor: pointer;
}

.dropdown-content-boton {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content-boton span {
    color: black;
    padding: 12px 16px;
    display: block;
    cursor: pointer;
}

.dropdown-content-boton span:hover {
    background-color: #ddd;
}

#idiomaLink:hover .dropdown-content-boton {
    display: block;
}
/* */

    .info-contacto {
        width: 98%;
        margin: auto;
        height: 14em;  
        padding: 10px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        max-height: 14em;
    }

    .info-contacto h2 {
        font-size: 48px;
        color: #443a32;
    }

    .info-contacto p {
        font-size: 18px;
        color: #4e4e4e;
    }

    .imagen-contacto {
        width: 98%;
        margin: auto;
        height: 34em;      
        max-height: 34em;
    }

    .contenedor-general {
        width: 98vw;      
        height: 50em;
        max-height: 60em;
        max-width: 98vw;
        margin: auto;   
        display: flex;
    }

    .sub-contenedor,
    .sub-contenedor2 {
        width: 50vw;
        height: 50em;
    }

    .sub-contenedor {
        
    }

    .sub-contenedor2 {      
    }

    .formulario2 {
        justify-content: center;
        width: 35vw;
        margin: 10px auto;
        padding: 30px;
        background-color: rgb(223, 212, 186);
        /*background-image: url(imagenes/FondoForm.jpeg);*/
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    input::placeholder {
        color: rgba(0, 0, 0, 0.5);
        /* Cambia el color y la transparencia como desees */
    }

    .nombres-formulario,
    .apellidos-formulario,
    .num-formulario {
        display: flex;
        justify-content: left;
        align-items: center;
        gap: 1em;
        padding-top: 10px;
    }

    .d-c-formulario2,
    .E-T-formulario {
        display: flex;
    }

    .estadoC-formulario {
        width: 50%;
    }

    .tipoM-formulario {
        width: 50%;
    }

    .estadoC-formulario,
    .tipoM-formulario {
        padding-top: 10px;
    }

    .dni-formulario {
        width: 30%;
    }

    .correo-formulario {
        width: 70%;
    }

    .dni-formulario,
    .correo-formulario {
        padding-top: 10px;
    }

    input[name='corr'] {
        width: 20em;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[name='dni'] {
        width: 8em;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }


    input[name='nom'],
    input[name='nom2'],
    input[name='apel'],
    input[name='apel2'],
    input[name='numC'] {
        width: 35%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    #tipoM option[value="opt"],
    #estadC option[value="opt"] {
        background-color: #FF0000;
        color: #420d0d;
    }

    #estadC,
    #tipoM {
        width: 40%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /*.comentario-formulario {} 
    */

    .comentario-formulario textarea {
        width: 95%;
        height: 80px;
        max-width: 95%;
        min-width: 95%;

        max-height: 90px;
        min-height: 45px;

        border: 1px solid #ccc;
        border-radius: 5px;
    }

    label {
        color: rgb(0, 0, 0);
        font-weight: bold;
    }

    input[type="reset"],
    input[type="submit"] {
        background-color: #e9be7f;
        color: #000000;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="reset"]:hover,
    input[type="submit"]:hover {
        background-color: #ebb079;
    }   
</style>

<script>
    // Función para consultar el DNI
    function consultarDNI() {
        var dniInput = document.getElementById('dni');
        var nombresInput = document.getElementById('nombres');
        var apellidoPInput = document.getElementById('apellidoP');
        var apellidoMInput = document.getElementById('apellidoM');

        var dni = dniInput.value.trim();

        if (dni.length === 8) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'ScriptConsulta.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);

                    // Asignar los valores a los campos correspondientes
                    nombresInput.value = respuesta.nombres;
                    apellidoPInput.value = respuesta.apellidoP;
                    apellidoMInput.value = respuesta.apellidoM;
                }
            };

            xhr.send('DNI=' + dni);
        } else {
            // Limpiar los campos si el DNI no es válido
            nombresInput.value = '';
            apellidoPInput.value = '';
            apellidoMInput.value = '';
        }
    }
</script>

<script src="javascript/animated.js"></script>
<script src="javascript/lenguajeS.js"></script>

</html>