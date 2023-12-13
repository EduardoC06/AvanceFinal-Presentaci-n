document.querySelector('input[name="nom"]').addEventListener('input', function (e) {
  this.value = this.value.replace(/[^a-zA-Z]/g, '');
});

document.querySelector('input[name="nom2"]').addEventListener('input', function (e) {
  this.value = this.value.replace(/[^a-zA-Z]/g, '');
});

document.querySelector('input[name="apel"]').addEventListener('input', function (e) {
  this.value = this.value.replace(/[^a-zA-Z]/g, '');
});

document.querySelector('input[name="apel2"]').addEventListener('input', function (e) {
  this.value = this.value.replace(/[^a-zA-Z]/g, '');
});

document.querySelector('input[name="dni"]').addEventListener('input', function (e) {
  this.value = this.value.replace(/[^0-9]/g, '');
});

document.querySelector('input[name="numC"]').addEventListener('input', function (e) {
  this.value = this.value.replace(/[^0-9]/g, '');
});


var modal = document.getElementById('miModal');
var input = document.getElementById('miEnlace');
var cerrar = document.getElementsByClassName('cerrar')[0];

input.onclick = function () {
  modal.style.display = "block";
}

cerrar.onclick = function () {
  modal.style.display = "none";
}


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

var botones = document.getElementsByClassName('btn-item');
for (var i = 0; i < botones.length; i++) {

  botones[i].addEventListener('click', function (event) {

    var button = event.target;
    var producto = button.parentElement.parentElement.parentElement;
    var imagenSrc = producto.getElementsByClassName('img-producto')[0].src;
    var titulo = producto.getElementsByClassName('nombre')[0].innerText;
    var precio = producto.getElementsByClassName('precio')[0].innerText;

    var itemCarritoContenido = `
                    <div class="carrito-items">
                        <div class="carrito-item">
                            <img src="${imagenSrc}" width="80px" alt="">
                            <div class="carrito-item-detalles">
                                <span class="carrito-item-titulo">${titulo}</span>
                                <div class="selector-cantidad">
                                    <i class="fa-solid fa-minus restar-cantidad"></i>
                                    <input type="text" value="1" class="carrito-item-cantidad" disabled>
                                    <i class="fa-solid fa-plus sumar-cantidad"></i>
                                </div>
                                <span class="carrito-item-precio">${precio}</span>
                            </div>
                            <span class="btn-eliminar">
                                <i class="fa-solid fa-trash"></i>
                            </span>
                        </div>
                    </div>`;

    var nuevoElemento = document.createElement('div');
    nuevoElemento.innerHTML = itemCarritoContenido;

    document.querySelector('.carrito-contenido').appendChild(nuevoElemento);
  });
}    
