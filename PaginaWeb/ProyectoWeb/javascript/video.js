var video = document.getElementById('miVideo');

    function iniciarVideo() {
        video.play();
    }

    function detenerVideo() {
        video.pause();
        video.currentTime = 0; // Reinicia el video a su posición inicial
    }