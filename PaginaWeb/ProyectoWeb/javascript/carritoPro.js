var cerrarCar = document.getElementsByClassName('cerrar-carro')[0];
var carrito = document.getElementById('contCarro');
var Acarrito = document.getElementById('content')


Acarrito.onclick = function () {
    carrito.style.display = "block";
}

cerrarCar.onclick = function () {
    carrito.style.display = "none";
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
    /*var producto = button.parentElement.parentElement.parentElement;
    var imagenSrc = producto.getElementsByClassName('img-producto')[0].src;
    var titulo = producto.getElementsByClassName('nombre')[0].innerText;
    var precioProducto = producto.getElementsByClassName('precio')[0].innerText;*/

    var button = event.target;
    var producto = button.closest('.productos'); 
    var imagenSrc = producto.querySelector('.img-producto').src;
    var titulo = producto.querySelector('.nombre').innerText;
    var precioProducto = producto.querySelector('.precio').innerText;

    /*Mandar datos a PHP*/

    const datos = {
        titulo: titulo,
        precioProducto: precioProducto
    };

    fetch('productos_Almacenado.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(datos)
    })
        .then(response => {
            // Manejar la respuesta del servidor si es necesario
        })
        .catch(error => {
            console.error('Error al enviar los datos al servidor:', error);
        });

    /*Fin de codigo Mandar datos*/

    var itemCarritoContenido = `
        <div class="carrito-item">
            <img src="${imagenSrc}" width="80px" alt="">
            <div class="carrito-item-detalles">
                <span class="carrito-item-titulo">${titulo}</span>                
                <span class="carrito-item-precio">${precioProducto}</span>
            </div>
            <span class="btn-eliminar">
                <i class="fa-solid fa-trash"></i>
            </span>
        </div>`;

    var nuevoElemento = document.createElement('div');
    nuevoElemento.innerHTML = itemCarritoContenido;

    document.querySelector('.carrito-contenido').appendChild(nuevoElemento);


    nuevoElemento.getElementsByClassName('btn-eliminar')[0].addEventListener('click', function (event) {
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


//info

window.onclick = function (event) {
    if (event.target == carrito) {
        carrito.style.display = "none";
    }
};