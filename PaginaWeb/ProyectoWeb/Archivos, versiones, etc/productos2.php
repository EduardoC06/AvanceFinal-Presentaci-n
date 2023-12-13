<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="EstiloP\estilos.css">
    <link rel="icon" href="imagenes/log.png" type="image/x-icon">

    <title>Productos</title>
</head>

<body>
    <section class="recSu">
        <div class="logo">
            <a href="#">CAP Brewery</a>
        </div>

        <nav class="enlaces">
            <a href="inndex.html">Inicio</a>
            <a href="nosotros.html">Nosotros</a>
            <a href="productos.html">Productos</a>
            <a href="servicios.html">Servicios</a>
            <a href="contactenos.html">Contactenos</a>
            <button class="carrito-estil" id="content"><img src="imagenes/iconos/carro.png" alt=""></button>
        </nav>
        </div>
    </section>

    <h1 class="tituloP">Nuestros productos</h1>
    <header class="contenedor">
        <div class="productos">
            <div class="imagenP">
                <img class="img-producto" src="imagenes/Productos/melkim.png" alt="Cerverza artezanal melkim">
            </div>
            <div class="infoProd">
                <span class="nombre">Cerveza Melkim</span>
                <span class="precio">S/. 13.5</span>
                <div class="contenedor-info">                
                    <button class="btn-item" id="agregar">Añadir</button>
                    <button class="info-cer" id="miEnlace">!</button>
                </div>
            </div>
        </div>       
        <?php
          include "php/conexion.php";
          $sql = "select * from Productos";
          $result = $conexion->query($sql);
                  
          //$sql = "INSERT INTO formulario_contacto (id, nombreP, precioP, imageURL) VALUES ('', '')";
          while($datos = $result->fetch_object()) { ?>       
        <div class="imagenP">
    <img class="img-producto" src="<?=$datos->imagen_url?>" alt="Cerverza artezanal melkim">
</div>
<div class="infoProd">
    <span class="nombre"><?=$datos->nombre?></span>
    <span class="precio"><?=$datos->precio?></span>
    <div class="contenedor-info">
        <button class="btn-item" id="agregar">Añadir</button>
        <button class="info-cer" id="miEnlace1"><strong>!</strong></button>
    </div>
</div>
</div>
        <?php }

                ?>
    </header>

    <div id="contCarro" class="carrito">
        <div class="carrito-contenido">
            <span class="cerrar-carro">&times;</span>
            <h2>Este es el carrito</h2>

            <div class="carrito-items">
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
    </div>

    <div id="miModal" class="modal">
        <div class="modal-contenido">
            <span class="cerrar">&times;</span>
            <h2>Cerveza Melkim</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem
                aperiam nisi voluptas ipsam, nam deserunt explicabo
                eligendi laborum ipsum esse totam, accusantium atque debitis
                quod itaque cupiditate illum quo perspiciatis!</p>
            <h2>Caractaristicas</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem
                aperiam nisi voluptas ipsam, nam deserunt explicabo
                eligendi laborum ipsum esse totam, accusantium atque debitis
                quod itaque cupiditate illum quo perspiciatis!</p>
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
        .info-cer {
            padding: 7px;
            border-radius: 4px;
            background-color: #d48e5e;
        }
        /*Fin de informacion*/

        .carrito-estil{
            background-color: #918475;;
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

        .modal {
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

<script>

var cerrarCar = document.getElementsByClassName('cerrar-carro')[0];
var carrito = document.getElementById('contCarro');
var Acarrito = document.getElementById('content')


Acarrito.onclick = function () {
  carrito.style.display = "block";
}

cerrarCar.onclick = function () {
  carrito.style.display = "none";
}

window.onclick = function (event2) {
  if (event2.target == carrito) {
    carrito.style.display = "none";
  }

  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function actualizarTotal() {
    var total = 0;
    var itemsCarrito = document.getElementsByClassName('carrito-item');
    for (var i = 0; i < itemsCarrito.length; i++) {
        var precio = itemsCarrito[i].getElementsByClassName('carrito-item-precio')[0];
        total += parseFloat(precio.innerText.replace('S/. ', ''));
    }
    document.getElementsByClassName('carrito-precio-total')[0].innerText = 'S/. ' + total.toFixed(2);
}

function agregarAlCarrito(event) {
    var button = event.target;
    var producto = button.parentElement.parentElement.parentElement;
    var imagenSrc = producto.getElementsByClassName('img-producto')[0].src;
    var titulo = producto.getElementsByClassName('nombre')[0].innerText;
    var precio = producto.getElementsByClassName('precio')[0].innerText;

    var itemCarritoContenido = `
        <div class="carrito-item">
            <img src="${imagenSrc}" width="80px" alt="">
            <div class="carrito-item-detalles">
                <span class="carrito-item-titulo">${titulo}</span>                
                <span class="carrito-item-precio">${precio}</span>
            </div>
            <span class="btn-eliminar">
                <i class="fa-solid fa-trash"></i>
            </span>
        </div>`;

    var nuevoElemento = document.createElement('div');
    nuevoElemento.innerHTML = itemCarritoContenido;

    document.querySelector('.carrito-contenido').appendChild(nuevoElemento);

    
    nuevoElemento.getElementsByClassName('btn-eliminar')[0].addEventListener('click', function(event) {
        var btnEliminar = event.target;
        btnEliminar.parentElement.parentElement.remove();
        actualizarTotal();
    });

    actualizarTotal();
}

var botones = document.getElementsByClassName('btn-item');        
for (var i = 0; i < botones.length; i++) {
    botones[i].addEventListener('click', agregarAlCarrito);
}
/*<div class="selector-cantidad">
<i class="fa-solid fa-minus restar-cantidad"></i>
<input type="text" value="1" class="carrito-item-cantidad" disabled>
<i class="fa-solid fa-plus sumar-cantidad"></i>
</div>
                */

var modal = document.getElementById('miModal');
var input = document.getElementById('miEnlace');
var cerrarss = document.getElementsByClassName('#miModal .cerrar');

input.onclick = function () {
  modal.style.display = "block";
}

cerrarss.onclick = function () {
  modal.style.display = "none";
}
</script>

</html>