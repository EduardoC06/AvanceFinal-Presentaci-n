/*    var video = document.getElementById('miVideo');
       
       function iniciarVideo() {
           video.play();
       }
       
       function detenerVideo() {
           video.pause();
           video.currentTime = 0; // Reinicia el video a su posición inicial
       }*/

function cambiarVideo(idioma) {
    var miVideo = document.getElementById("miVideo");
    var miVideo1 = document.getElementById("miVideo1");
    var miVideo2 = document.getElementById("miVideo2");
    var miVideo3 = document.getElementById("miVideo3");
    if (idioma === "ingles") {
        miVideo.src = "videos\\Lenguaje_Home.mp4";
        miVideo1.src = "videos\\Lenguaje_We.mp4";
        miVideo2.src = "videos\\Lenguaje_Production.mp4";
        miVideo3.src = "videos\\Lenguaje_Help.mp4";
    } else if (idioma === "espanol") {
        miVideo.src = "videos\\Lenguaje_Inicio.mp4";
        miVideo1.src = "videos\\Lenguaje_Nosotros.mp4";
        miVideo2.src = "videos\\Lenguaje_Productos.mp4";
        miVideo3.src = "videos\\Lenguaje_Ayuda.mp4";
    }

    // Reinicia el video
    miVideo.load();
    miVideo.play();

    miVideo1.load();
    miVideo1.play();

    miVideo2.load();
    miVideo2.play();

    miVideo3.load();
    miVideo3.play();

    // Oculta las opciones de idioma después de la selección
    ocultarOpcionesIdioma();
}
