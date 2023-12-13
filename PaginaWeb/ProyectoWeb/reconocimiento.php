<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/log.png" type="image/x-icon">
    <title>CAP Brewery</title>
</head>

<body>    
    <div class="contenedor">        
        <div id="ageConfirmation">       
            <div id="confirmationBox">
                <img src="imagenes/log.png" alt="" width="62px">
                <p>¿Eres mayor de edad?</p>
                <button onclick="confirmAge('yes')">Sí</button>
                <button onclick="confirmAge('no')">No</button>
            </div>
        </div>
    </div>

    <style>
        .contenedor {
            display: flex;
            align-items: center;
            justify-content: center;
            /*height: 47.4vw;*/
            height: 100vh;
            width: 100vw;
            position: relative;
            overflow: hidden;
        }

        .contenedor::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: #9e9783;
            /*background-image: url(imagenes/fondo2.jpeg);
            background-repeat: no-repeat;
            background-size: 100%;*/
            filter: blur(2px);
            z-index: -1;
        }


        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }



        #ageConfirmation {
            background: rgb(255, 255, 255);
            display: flex;
            justify-content: center;
            align-items: center;
            width: 70vw;
            height: auto;
            min-height: 18vw;
            margin: auto;
        }

        #confirmationBox {
            font-size: 48px;
            padding: 20px;
            text-align: center;
        }

        button {
            background-color: #e9be7f;
            color: #000000;
            padding: 10px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

    <script>
        function showAgeConfirmation() {
            document.getElementById('ageConfirmation').style.display = 'block';
        }

        function confirmAge(answer) {
            if (answer === 'yes') {               
                window.location.href = 'Login.php';
            } else {
                alert('Lo siento, debes ser mayor de edad para acceder a este contenido.');
            }
            document.getElementById('ageConfirmation').style.display = 'none';
        }
        
        window.onload = showAgeConfirmation;

    </script>
</body>

</html>