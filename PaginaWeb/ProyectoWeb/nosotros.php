<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="EstiloP\estilo.css">
    <link rel="stylesheet" type="text/css" href="EstiloP/estilosO.css">
    <link rel="icon" href="imagenes/log.png" type="image/x-icon">
    <script type="text/javascript" src="javascript/animated.js"></script>
    <title>Nosotros</title>
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

    <header class="tituloP">
        <h1>Sobre nosotros</h1>
    </header>
    <div class="contenedor-carrusel">
        <div class="carrusel">
            <img class="carrusel-imagen" src="imagenes/cumbres.jpg" alt="imagen nosotros" width="100%" height="100%">
            <img class="carrusel-imagen" src="imagenes/barbarin.jpg" alt="imagen nosotros" width="100%" height="100%">
        </div>
    </div>

    <div class="RectHist">
        <div class="historia">
            <h2>Nuestra historia</h2>
            <p>Somos una empresa distribuidora, de cervezas artesanales. Nuestros trabajo.....
                Somos un grupo de amigos apasionados por la cerveza artesanal que decidió emprender una aventura única
                en el
                mundo de la cerveza. Juntos, fundaron "Cap Brewery", una empresa que se convertiría en el
                destino favorito de los amantes de la cerveza en toda la región.
            </p>
        </div>
    </div>

    <div class="mision">
        <div class="textoM">
            <p>Ser reconocidos como el epicentro de la cultura cervecera artesanal, donde los
                amantes de la cerveza artesal pueden descubrir nuevos sabores, apoyar a cervecerías
                locales y crear conexiones significativas a través de la pasión compartida por la cerveza.</p>
        </div>
        <div class="imagenM">
            <p>Nuestra <br>Misión</p>
        </div>
    </div>

    <div class="vision">
        <div class="imagenV">
            <p>Nuestra <br>Visión</p>
        </div>

        <div class="textoV">
            <p>
                En Cap Brewery, nuestra misión es proporcionar una experiencia excepcional a
                todos nuestros clientes. Nos esforzamos por ofrecer la mejor selección de
                cervezas artesanales, cuidadosamente seleccionadas de proveedores locales y
                regionales. Creemos en la calidad, la autenticidad y la comunidad, para un buenos momentos con patas.
            </p>
        </div>
    </div>

    <div class="contenedor-servicios">
        <div class="principal">
            <h3>Cap Brewery</h3>
            <p>Comprometida a nuestros clientes para que tengan una experiencia con las cervezas artesanales</p>
        </div>
        <div class="contenedor-servicios2">
            <div class="servicio1">
                <h2>Entrega a tu casa</h2>
                <p>Contamos con personal motorizado para tus pedidos<br> y cuentan con la experiencia para que su pedido llegue en buen estado</p>
            </div>

            <div class="servicio2">
                <h2>Atencion las 24hrs</h2>
                <p>Tenemos atencion las 24 horas, en nuestra tienda fisica <br> ubicada en Av.Marina</p>
            </div>
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

        .principal {
            background-color: #f6f6f6;
            padding: 20px;
            height: 35%;
        }

        .principal h3 {
            color: #585651;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .principal p {
            color: #333;
            font-size: 16px;
            line-height: 1.6;
        }

        .contenedor-servicios {
            text-align: center;
        }

        .contenedor-servicios2 {
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: #f8f8f8;
            padding: 40px 20px;
        }

        .servicio1,
        .servicio2 {
            width: 45%;
            padding: 25px;
            text-align: center;
            border-radius: 8px;
            background-color: #e0d6d6;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;            
        }

        .contenedor-servicios2 h2 {
            color: #585651;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .contenedor-servicios2 p {
            color: #555;
            font-size: 16px;
            line-height: 1.6;
        }

        /*.contenedor-carrusel {
            
        }*/

        .carrusel {
            width: 90vw;
            margin: auto;
            height: 30em;
        }

        /*imagenes*/
        .imagenNos {
            background-color: red;
        }

        /*inicio de mision y vision*/
        .mision {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            justify-content: center;
            align-items: center;
            border-bottom: solid gainsboro;
        }

        .textoM {
            width: 49vw;
            height: 320px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 10px;
            max-width: 49vw;
            font-size: 20px;
            border-bottom: solid rgb(70, 55, 55)
        }

        .imagenM {
            width: 540px;
            height: 550px;
            background-size: cover;
        }

        .imagenM p {
            font-size: 72px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }


        /*Vision*/

        .vision {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            justify-content: center;
            align-items: center;
        }

        .textoV {
            width: 49vw;
            height: 320px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 10px;
            max-width: 49vw;
            font-size: 20px;
            border-bottom: solid rgb(70, 55, 55)
        }


        .imagenV {
            width: 540px;
            height: 550px;
            background-size: cover;
        }

        .imagenV p {
            font-size: 72px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        /*fin de mision y vision*/

        /*inicio de nuestra historia*/
        .RectHist {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 13em;
        }

        .historia {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f6f6f6;
            width: 80vw;
            height: 10em;
        }

        .historia p {
            padding: 5px;
            text-align: center;
        }

        /*fin de nuestra historia*/

        @media screen and (max-width: 767px) {}
    </style>

    <script>
        var indice = 0;
        var imagenes = document.querySelectorAll('.carrusel-imagen');

        function cambiarImagen() {
            for (var i = 0; i < imagenes.length; i++) {
                imagenes[i].style.display = 'none';
            }
            indice++;
            if (indice > imagenes.length) { indice = 1 }
            imagenes[indice - 1].style.display = 'block';
            setTimeout(cambiarImagen, 4000);
        }

        cambiarImagen();


    </script>

<script src="javascript/lenguajeS.js"></script>

</body>

</html>