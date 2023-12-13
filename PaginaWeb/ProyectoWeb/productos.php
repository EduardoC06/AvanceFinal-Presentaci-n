<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="EstiloP\estilo.css">
    <link rel="stylesheet" type="text/css" href="EstiloP/estilosO.css">
    <link rel="icon" href="imagenes/log.png" type="image/x-icon">

    <title>Productos</title>
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

            <button class="carrito-estil" id="content"><img src="imagenes/iconos/carro.png" alt=""></button>
        </nav>
    </section>

    <h1 class="tituloP">Nuestros productos</h1>

    <header class="contenedor">
        <?php
          include "php/conexion.php";
          $sql = "select * from Productos";
          $result = $conexion->query($sql);
                  
          //$sql = "INSERT INTO Productos (nombre, precio, imagen_url) VALUES ('Cerveza', '1,', 'imagenes/Productos/')";
          while($datos = $result->fetch_object()) { ?>
        <div class="productos">
            <div class="imagenP">
                <img class="img-producto" src="<?=$datos->imagen_url?>" alt="<?=$datos->nombreP?>">
            </div>
            <div class="infoProd">
                <span class="nombre"><?=$datos->nombre?></span>
                <span class="precio">S/. <?=$datos->precio?></span>
                <div class="contenedor-info">
                    <button class="btn-item" id="agregar">Añadir</button>
                    <button class="info-cer" id="miEnlace1"><strong>!</strong></button>
                </div>
            </div>
        </div>
        <?php }

                ?>
    </header>

    <form method="POST" action="productos_Almacenado.php" id="contCarro" class="carrito">
        <div class="carrito-contenido">
            <span class="cerrar-carro">&times;</span>
            <h2>Este es el carrito</h2>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="${imagenSrc}" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">${titulo}</span>                
                        <span class="carrito-item-precio">${precio}</span>
                </div>
                <span class="btn-eliminar">
                    <i class="fa-solid fa-trash"></i>
                </span>
        </div>`
                -->
            </div>

            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        S/.0,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </form>

    <section>
        <div id="miModal" class="modal">
            <div class="modal-contenido">
                <span class="cerrar">&times;</span>
                <h2>Cerveza Melkim</h2>
                <p>Cerveza de estilo Kólsch, ligera y refrescante,
                    de color dorado claro, con aromas y sabores
                    ligeros a malta y a papaya arequipeña dándole un ligero dulzor.</p>
                <h2>Informacion Adicional</h2>
                <p>Amargor Bajo</p>
                <p>Botella 330 ml</p>
                <p>Color Rubia</p>
                <p>Grados 4,8</p>
                <p></p>
            </div>
        </div>

        <div id="info-Maddock" class="ventanaMad">
            <div class="modal-contenido">
                <span class="cerrar1">&times;</span>
                <h2>Cerveza Maddok</h2>
                <p>Es una Pale Ale clásica con un fresco aroma floral. Amargor medio, cuerpo medio. Muy refrescante.</p>
                <h2>Informacion Adicional</h2>
                <p>Amargor Medio</p>
                <p>Botella 330 ml</p>
                <p>Color Rubia</p>
                <p>Grados 5,5</p>
            </div>
        </div>

        <div id="info-Barbarin" class="ventanaMad">
            <div class="modal-contenido">
                <span class="cerrar2">&times;</span>
                <h2>Cerveza barbarian</h2>
                <p>Cerveza de carbonatación baja y color cobre intenso a marrón. Con olores a malta tostada y caramelo
                    con
                    toques ligeros de vainillla y un cierre frutal. </p>
                <h2>Informacion Adicional</h2>
                <p>Amargor Fuerte</p>
                <p>Botella 330 ml</p>
                <p>Color Roja</p>
                <p>Grados 7%</p>
            </div>
        </div>

        <div id="info-Magdalena" class="ventanaMad">
            <div class="modal-contenido">
                <span class="cerrar3">&times;</span>
                <h2>Cerveza Magdalena</h2>
                <p>Cerveza de color marrón brilloso, con una prominente espuma. Una English Porter, con adición
                    de vainilla y coco. Dos ingredientes que se hacen muy presentes desde que la cerveza la
                    destapas. Aromas a frutos secos, vainilla y toffee. De sabores dulces, muy ligeros
                    para nada empalagosas. De entrega media y un regusto a coco y vainilla bien equilibrado.</p>
                <h2>Informacion Adicional</h2>
                <p>Amargor Suave</p>
                <p>Botella 330 ml</p>
                <p>Color Negra</p>
                <p>Grados 5,8</p>
            </div>
        </div>

        <div id="info-NuevoM" class="ventanaMad">
            <div class="modal-contenido">
                <span class="cerrar4">&times;</span>
                <h2>Cerveza Nuevo Mundo</h2>
                <p>Cerveza estilo IPA de Nuevo Mundo. Una segunda incursión en el
                    terreno de las cervezas lupuladas por parte de NM (después de
                    la Barihuait). Ligero aroma a miel, ligero aroma alcohólico y
                    ligeros aromas afrutados. Amargor medio con un regusto
                    persistente. Cuerpo medio, buena carbonatación y buena espuma.</p>
                <h2>Informacion Adicional</h2>
                <p>Amargor Medio</p>
                <p>Botella 330 ml</p>
                <p>Color Rubia</p>
                <p>Grados 6,6</p>
            </div>
        </div>

        <div id="info-Cumbres" class="ventanaMad">
            <div class="modal-contenido">
                <span class="cerrar5">&times;</span>
                <h2>Cerveza Cumbres</h2>
                <p>Cerveza con alta graduación alcohólica, con mucho cuerpo, aromas y sabores
                    complejos como los tostados, chocolates, y café, con un toque dulce fina</p>
                <h2>Informacion Adicional</h2>
                <p>Amargor Fuerte</p>
                <p>Botella 330 ml</p>
                <p>Color Negra</p>
                <p>Grados 8%</p>
            </div>
        </div>

        <div id="info-BadBitch" class="ventanaMad">
            <div class="modal-contenido">
                <span class="cerrar6">&times;</span>
                <h2>Cerveza Bad Bitch</h2>
                <p>Una roja diferente, un poco más maltosa y quizás la que más se aleje del eje principal
                    de este pack. Sin embargo, en esta temporada es quizás donde más parrilla se llevan
                    acabo y este estilo es un maridaje perfecto con las carnes puestas al asador.
                    Buen equilibrio de maltas tostadas con notas a caramelo y una espuma marfil envidiable.</p>
                <h2>Informacion Adicional</h2>
                <p>Amargor Bajo</p>
                <p>Botella 330 ml</p>
                <p>Color Roja</p>
                <p>Grados 5%</p>
            </div>
        </div>

        <div id="info-7vidas" class="ventanaMad">
            <div class="modal-contenido">
                <span class="cerrar7">&times;</span>
                <h2>Cerveza 7 vidas</h2>
                <p>un color ambar de muy buena claridad. En aroma resaltan las notas de Bourbon,
                    Cognac, caramelo y vainilla. Notas suaves de coco junto a esteres frutales que
                    recuerdan a guindones y manzanas rojas. De cuerpo pleno, amargor medio-alto que
                    sirve de balance para el gran componente maltoso. Finaliza con limpias notas
                    de roble y una notable y agradable tibieza alcohólica.</p>
                <h2>Informacion Adicional</h2>
                <p>Amargor Medio</p>
                <p>Botella 330 ml</p>
                <p>Color Turbia</p>
                <p>Grados 13.3%</p>
            </div>
        </div>

        <div id="info-Fortunata" class="ventanaMad">
            <div class="modal-contenido">
                <span class="cerrar8">&times;</span>
                <h2>Cerveza Maddock</h2>
                <p>Una hazy ipa con una carga frutal increible. De una textura turbia y cremosa y con buenas notas
                    tropicales gracias a las pulpas de mango y maracuyá utilizadas en la receta.</p>
                <h2>Informacion Adicional</h2>
                <p>Amargor Bajo</p>
                <p>Botella 330 ml</p>
                <p>Color Rubia</p>
                <p>Grados 6%</p>
            </div>
        </div>

        <div id="info-Nowhere" class="ventanaMad">
            <div class="modal-contenido">
                <span class="cerrar9">&times;</span>
                <h2>Cerveza Nowhere</h2>
                <p>Una saison ultra refrescante y con toque granjeros.</p>
                <h2>Informacion Adicional</h2>
                <p>Amargor Bajo</p>
                <p>Botella 330 ml</p>
                <p>Color Turbia</p>
                <p>Grados 5,5</p>
            </div>
        </div>

        <div id="info-Invictus" class="ventanaMad">
            <div class="modal-contenido">
                <span class="cerrar10">&times;</span>
                <h2>Cerveza Maddock</h2>
                <p>Una Lager estilo bien alemán. Nueva cerveza de Invictus. Refrescante, con un cuerpo
                    medio, muy bien balanceada. Aromas herbales y picantes junto a un dulzor de malta y la presencia de
                    lúpulos muy notoria. Precisa para estos días calurosos.</p>
                <h2>Informacion Adicional</h2>
                <p>Amargor Bajo</p>
                <p>Botella 330 ml</p>
                <p>Color Rubia</p>
                <p>Grados 5%</p>
            </div>
        </div>

        <div id="info-Candelaria" class="ventanaMad">
            <div class="modal-contenido">
                <span class="cerrar11">&times;</span>
                <h2>Cerveza Candelaria</h2>
                <p>Aun sin informacion</p>
                <h2>Informacion Adicional</h2>
                <p>Amargor Medio</p>
                <p>Botella 330 ml</p>
                <p>Color Rubia</p>
                <p>Grados 6,5%</p>
            </div>
        </div>
    </section>


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
        /*Inicio de productos*/
        /*.contenedor {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .productos {
            background-color: rgba(255, 255, 255, 0.973);
            margin-bottom: 50px;
            text-align: center;
            padding: 20px;
            margin: 5px;
            width: 20%;
        }

        .imagenP img {
            width: 100%;
        }

        @media screen and (max-width:767px) {
            .contenedor {
                flex-direction: column;
            }
        }*/

        /*Fin de productos*/

        /*Informacion estilo*/

        /* */
        #idiomaLink button {
            background: transparent;
            /* Establece el fondo del botón como transparente */
            border: none;
            /* Elimina el borde del botón si es necesario */
            padding: 0;
            /* Ajusta el relleno según sea necesario */
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

        .info-cer {
            padding: 7px;
            border-radius: 4px;
            background-color: #d48e5e;
        }

        .modal-contenido {
            background-color: #f9f9f9;
            width: 80%;
            max-width: 600px;
            margin: 5% auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: #333;
            font-family: Arial, sans-serif;
        }

        .modal-contenido h2 {
            font-size: 24px;
            color: #444d57;
            margin-bottom: 10px;
        }

        .modal-contenido p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .modal-contenido .cerrar1,
        .cerrar2,
        .cerrar3,
        .cerrar4,
        .cerrar5,
        .cerrar6,
        .cerrar7,
        .cerrar8,
        .cerrar9,
        .cerrar10,
        .cerrar11 {
            float: right;
            cursor: pointer;
            font-size: 24px;
            color: #555;
        }

        .modal-contenido .cerrar1:hover,
        .cerrar2:hover,
        .cerrar3:hover,
        .cerrar4:hover,
        .cerrar5:hover,
        .cerrar6:hover,
        .cerrar7:hover,
        .cerrar8:hover,
        .cerrar9:hover,
        .cerrar10:hover,
        .cerrar11:hover {
            color: #352a29;
        }

        /*Fin de informacion*/

        strong {
            font-weight: bold;
            font-size: 15px;
        }

        .carrito-estil {
            background-color: #918475;
            ;
        }

        .carrito {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .carrito-contenido {
            position: relative;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            height: 30em;
            top: 50%;
            left: 25vw;
            transform: translate(-50%, -50%);
            background-color: #fefefe;
            overflow: auto;
        }

        .modal,
        .ventanaMad {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-contenido {
            position: relative;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            top: 50%;
            left: 25vw;
            transform: translate(-50%, -50%);
            background-color: #fefefe;
        }


        .cerrar,
        .cerrar-carro {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
        }

        .cerrar:hover,
        .cerrar:focus,
        .cerrar-carro:hover,
        .cerrar-carro:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }



        .contenedor-info {
            display: flex;
            justify-content: center;
            gap: 24px;
            align-items: center;
        }

        .contenedor-info p {
            background-color: #916f59;
            width: 20px;
            font-size: 26px;
            border-radius: 5px;
        }

        .contenedor {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .productos {
            border: 1px solid #ccc;
            margin: 10px;
            width: 250px;
            transition: all 0.5s ease;
        }

        .productos:hover {
            transform: scale(1.05);
        }

        .imagenP img {
            width: 100%;
            height: auto;
        }

        .infoProd {
            padding: 10px;
            text-align: center;
        }

        .infoProd h2 {
            margin: 0;
        }

        .infoProd .precio {
            color: rgb(0, 0, 0);
            font-weight: bold;
        }

        .infoProd #agregar {
            background-color: #d48e5e;
            border: none;
            border-radius: 25px;
            color: rgb(0, 0, 0);
            padding: 10px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .infoProd #agregar:hover {
            border: none;
            background-color: #72543f;
            color: rgb(39, 39, 39);
        }

        /*Carro */
        .carrito-item {
            display: flex;
            align-items: center;
            /* justify-content: space-between; */
            position: relative;
            border-bottom: 1px solid #666;
            padding: 20px;
        }

        .carrito-item img {
            margin-right: 20px;
        }

        .carrito-item .carrito-item-titulo {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .carrito-item .selector-cantidad {
            display: inline-block;
            margin-right: 25px;
        }

        .carrito-item .carrito-item-cantidad {
            border: none;
            font-size: 18px;
            background-color: transparent;
            display: inline-block;
            width: 30px;
            padding: 5px;
            text-align: center;
        }

        .carrito-item .selector-cantidad i {
            font-size: 18px;
            width: 32px;
            height: 32px;
            line-height: 32px;
            text-align: center;
            border-radius: 50%;
            border: 1px solid #000;
            cursor: pointer;
        }

        .carrito-item .carrito-item-precio {
            font-weight: bold;
            display: inline-block;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .carrito-item .btn-eliminar {
            position: absolute;
            right: 15px;
            top: 15px;
            color: #000;
            font-size: 20px;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            border: 1px solid #000;
            cursor: pointer;
            display: block;
            background: transparent;
            z-index: 20;
        }

        .carrito-item .btn-eliminar i {
            pointer-events: none;
        }

        .carrito-total {
            background-color: #f3f3f3;
            padding: 30px;
        }

        .carrito-total .fila {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .carrito-total .btn-pagar {
            display: block;
            width: 100%;
            border: none;
            background: #000;
            color: #fff;
            border-radius: 5px;
            font-size: 18px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: .3s;
        }

        .carrito-total .btn-pagar:hover {
            scale: 1.05;
        }
    </style>

</body>

<script src="javascript/modalPro.js"></script>
<script src="javascript/carritoPro.js"></script>
<script src="javascript/lenguajeS.js"></script>

</html>