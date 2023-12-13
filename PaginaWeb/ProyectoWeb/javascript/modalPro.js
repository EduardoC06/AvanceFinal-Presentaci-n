var modal = document.getElementById('miModal');
var input = document.getElementById('miEnlace');
var cerrar = document.getElementsByClassName('#miModal .cerrar');

var modalMaddock = document.getElementById('info-Maddock');
var enlaceMaddock = document.getElementById('miEnlace1');
var cerrarMaddock = document.querySelector('#info-Maddock .cerrar1');

var modalBarbarin = document.getElementById('info-Barbarin');
var enlaceBarbarin = document.getElementById('miEnlace2');
var cerrarBarbarin = document.querySelector('#info-Barbarin .cerrar2');

var modalMagdalena = document.getElementById('info-Magdalena');
var enlaceMagdalena = document.getElementById('miEnlace3');
var cerrarMagdalena = document.querySelector('#info-Magdalena .cerrar3');

var modalNuevoM = document.getElementById('info-NuevoM');
var enlaceNuevoM = document.getElementById('miEnlace4');
var cerrarNuevoM = document.querySelector('#info-NuevoM .cerrar4');

var modalCumbres = document.getElementById('info-Cumbres');
var enlaceCumbres = document.getElementById('miEnlace5');
var cerrarCumbres = document.querySelector('#info-Cumbres .cerrar5');

enlaceCumbres.onclick = function () {
    modalCumbres.style.display = "block";
}

cerrarCumbres.onclick = function () {
    modalCumbres.style.display = "none";
}

var modalBadBitch = document.getElementById('info-BadBitch');
var enlaceBadBitch = document.getElementById('miEnlace6');
var cerrarBadBitch = document.querySelector('#info-BadBitch .cerrar6');

enlaceBadBitch.onclick = function () {
    modalBadBitch.style.display = "block";
}

cerrarBadBitch.onclick = function () {
    modalBadBitch.style.display = "none";
}

var modal7vidas = document.getElementById('info-7vidas');
var enlace7vidas = document.getElementById('miEnlace7');
var cerrar7vidas = document.querySelector('#info-7vidas .cerrar7');

enlace7vidas.onclick = function () {
    modal7vidas.style.display = "block";
}

cerrar7vidas.onclick = function () {
    modal7vidas.style.display = "none";
}

var modalFortunata = document.getElementById('info-Fortunata');
var enlaceFortunata = document.getElementById('miEnlace8');
var cerrarFortunata = document.querySelector('#info-Fortunata .cerrar8');

enlaceFortunata.onclick = function () {
    modalFortunata.style.display = "block";
}

cerrarFortunata.onclick = function () {
    modalFortunata.style.display = "none";
}

var modalNowhere = document.getElementById('info-Nowhere');
var enlaceNowhere = document.getElementById('miEnlace9');
var cerrarNowhere = document.querySelector('#info-Nowhere .cerrar9');

enlaceNowhere.onclick = function () {
    modalNowhere.style.display = "block";
}

cerrarNowhere.onclick = function () {
    modalNowhere.style.display = "none";
}

var modalInvictus = document.getElementById('info-Invictus');
var enlaceInvictus = document.getElementById('miEnlace10');
var cerrarInvictus = document.querySelector('#info-Invictus .cerrar10');

enlaceInvictus.onclick = function () {
    modalInvictus.style.display = "block";
}

cerrarInvictus.onclick = function () {
    modalInvictus.style.display = "none";
}

var modalCandelaria = document.getElementById('info-Candelaria');
var enlaceCandelaria = document.getElementById('miEnlace11');
var cerrarCandelaria = document.querySelector('#info-Candelaria .cerrar11');

enlaceCandelaria.onclick = function () {
    modalCandelaria.style.display = "block";
}

cerrarCandelaria.onclick = function () {
    modalCandelaria.style.display = "none";
}


input.onclick = function () {
    modal.style.display = "block";
}

cerrar.onclick = function () {
    modal.style.display = "none";
}

enlaceMaddock.onclick = function () {
    modalMaddock.style.display = "block";
}

cerrarMaddock.onclick = function () {
    modalMaddock.style.display = "none";
}

enlaceBarbarin.onclick = function () {
    modalBarbarin.style.display = "block";
}

cerrarBarbarin.onclick = function () {
    modalBarbarin.style.display = "none";
}

enlaceMagdalena.onclick = function () {
    modalMagdalena.style.display = "block";
}

cerrarMagdalena.onclick = function () {
    modalMagdalena.style.display = "none";
}

enlaceNuevoM.onclick = function () {
    modalNuevoM.style.display = "block";
}

cerrarNuevoM.onclick = function () {
    modalNuevoM.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }

    if (event.target == modalMaddock) {
        modalMaddock.style.display = "none";
    }

    if (event.target == modalBarbarin) {
        modalBarbarin.style.display = "none";
    }

    if (event.target == modalMagdalena) {
        modalMagdalena.style.display = "none";
    }

    if (event.target == modalNuevoM) {
        modalNuevoM.style.display = "none";
    }

    if (event.target == modalCumbres) {
        modalCumbres.style.display = "none";
    }

    if (event.target == modalBadBitch) {
        modalBadBitch.style.display = "none";
    }

    if (event.target == modal7vidas) {
        modal7vidas.style.display = "none";
    }

    if (event.target == modalFortunata) {
        modalFortunata.style.display = "none";
    }

    if (event.target == modalNowhere) {
        modalNowhere.style.display = "none";
    }

    if (event.target == modalInvictus) {
        modalInvictus.style.display = "none";
    }

    if (event.target == modalCandelaria) {
        modalCandelaria.style.display = "none";
    }
};