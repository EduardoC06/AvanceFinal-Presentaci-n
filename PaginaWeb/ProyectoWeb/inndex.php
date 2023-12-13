<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAP Brewery</title>
    <link rel="stylesheet" type="text/css" href="EstiloP/estilo.css">
    <link rel="stylesheet" type="text/css" href="EstiloP/estilosO.css">
    <link rel="icon" href="imagenes/log.png" type="image/x-icon">    
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

    <div class="men">
        <div class="informacion">
            <h1>Sabor <br>que relaja</h1>
            <p>CAP Brewery es una empresa fabricadora de cervezas artesanales, dedicada y comprometida a
                nuestros clientes para que tengan una experiencia inigualable con estas bebidas.
            </p>
        </div>
        <div class="imagenSub">
            <video id="miVideo" width="560" height="315" autoplay loop muted>
                <source src="videos\Spot Publicitario  Cerveza Barbarian.mp4" type="video/mp4">
        </div>
    </div>

    <header class="container-info-principal">
        <div class="info-principal">
            <h1>
                <p style="margin-right: 10px;">Que son las </p>
                <p><span class="luz"> cervezas artesanales</span></p>
            </h1>
        </div>
    </header>


    <div class="respuesta-info">
        <p>Las cervezas artesanales son producidas por las manos de nuestros hermanos peruanos, lo que
            diferencia de las cervezas comerciales, son sus caracterizticas enfocadas en la calidad, creatividad
            y innovación.
        </p>
    </div>

    <header class="promociones">
        <h1>
            <p style="margin-right: 10px;"><span class="luz">Tenemos</span></p>
            <p style="margin-right: 10px;">las</p>
            <p style="margin-right: 10px;"><span class="luz">mejores promociones </span></p>
            <p style="margin-right: 10px;">para</p>
            <p style="margin-right: 10px;"><span class="luz">ti</span></p>

        </h1>
    </header>

    <div class="respuesta-info">
        <p>Tenemos promociones unicas para usted, gracias a nuestra recien apertura.</p>
    </div>

    <div class="container">
        <div class="item">
            <img src="imagenes\log.png" alt="Esta imagen es del logo y van con relacion de algunos tipos de cerveza."
                width="50px" height="50px">
            <h4>Magdalena</h4>
            <br>
            <p>Una cerveza doble IPA de contextura espesa y abundante espuma.</p>
            <br>
            <img src="imagenes\magdalena.jpeg" alt="Esta imagen representa la cerveza magdalena." width="270px"
                height="202px">
        </div>
        <div class="item">
            <img src="imagenes\log.png" alt="Esta imagen es del logo y van con relacion de algunos tipos de cerveza."
                width="50px" height="50px">
            <h4>Barbarian</h4>
            <br>
            <p>Su barbarian Real ale consiguio el año pasado en alemania la medalla de bronce del
                festival global de la cerveza artezanal.
            </p>
            <br>
            <img src="imagenes\barbarin.jpg" alt="Esta imagen representa la cerveza magdalena." width="270px"
                height="202px">
        </div>
        <div class="item">
            <img src="imagenes\log.png" alt="Esta imagen es del logo y van con relacion de algunos tipos de cerveza."
                width="50px" height="50px">
            <h4>Maddock</h4>
            <br>
            <p>Maddock es una cerverza que tiene una variedad de cervezas con sabor a rocoto.</p>
            <br>
            <img src="imagenes\maddock.jpg" alt="Esta imagen representa la cerveza magdalena." width="270px"
                height="202px">
        </div>
        <div class="item">
            <img src="imagenes\log.png" alt="Esta imagen es del logo y van con relacion de algunos tipos de cerveza."
                width="50px" height="50px">
            <h4>Cumbres</h4>
            <br>
            <p>Conocida por sus variedades de cerveza Kolsch con quinua y barley Wine.</p>
            <br>
            <img src="imagenes\cumbres.jpg" alt="Esta imagen representa la cerveza magdalena." width="270px"
                height="202px">
        </div>
        <div class="item">
            <img src="imagenes\log.png" alt="Esta imagen es del logo y van con relacion de algunos tipos de cerveza."
                width="50px" height="50px">
            <h4>Nuevo mundo</h4>
            <br>
            <p>Su variedad Panam Pale Ale gano la medalla de plata en el south beer cup</p>
            <br>
            <img src="imagenes\Nmundo.jpg" alt="Esta imagen representa la cerveza magdalena." width="270px"
                height="202px">
        </div>
        <div class="item">
            <img src="imagenes\log.png" alt="Esta imagen es del logo y van con relacion de algunos tipos de cerveza."
                width="50px" height="50px">
            <h4>Melkim</h4>
            <br>
            <p>Cerveza elaborada en Arequipa. Produce cervezas tipo Ale, Pale, Red y Porter</p>
            <br>
            <img src="imagenes\melkim.jpg" alt="Esta imagen representa la cerveza magdalena." width="270px"
                height="202px">
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
            <p>&copy; Derechos de autor 2023 CAP Brewery. </p>
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

        .container-info-principal {
            width: 90vw;
            margin: auto;
        }

        .info-principal {
            border-bottom: solid gainsboro;
            padding: 65px 0;
        }

        .info-principal h1 {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #b9b2a8;
        }

        .luz {
            color: #64625d;
        }

        .respuesta-info {
            width: 70vw;
            margin: auto;
            height: 14em;
            border-bottom: solid gainsboro;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .respuesta-info p {
            width: 60vw;
            margin: auto;
        }

        .promociones {
            width: 90vw;
            margin: auto;
            padding: 65px 0;
            border-bottom: solid gainsboro;
        }

        .promociones h1 {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #b9b2a8;
        }

        /*Fin de index.php*/        
    </style>

    <script src="javascript/lenguajeS.js"></script>
</body>


</html>