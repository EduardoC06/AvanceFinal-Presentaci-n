<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="page">
        <div class="container">
            <div class="left">
                <div class="login">Iniciar Sesion</div>
                <div class="eula">Al iniciar sesion aceptas los terminos y condiciones
                </div>
            </div>
            <div class="right">

                <form class="form" method="POST">
                    <?php 
                    include "php/conexion.php";
                    include "php/logearse.php";
                    ?>
                    <label for="email">Usuario</label>
                    <input type="text" id="email" name="usuario">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password">
                    <input type="submit" id="submit" name="btnIngresar" value="iniciar Sesion">
                    <input type="button" id="submit" onclick="location.href='registro.php';" value="registrarse">
            </div>
        </div>
    </div>
</body>

<style>
    body {
        background: #836a49;
        font-family: 'Inter UI', sans-serif;
        margin: 0;
        padding: 20px;
        overflow: hidden;
    }

    .page {
        background: #f7e0b6;        
        display: flex;
        flex-direction: column;
        height: calc(100% - 40px);
        position: absolute;
        place-content: center;
        width: calc(100% - 40px);
        z-index: 0;
    }

    .container {
        display: flex;
        height: 320px;
        margin: 0 auto;
        width: 640px;
    }

    .left {
        background: #ffffff;
        /* Fondo blanco para la sección izquierda */
        height: calc(100% - 40px);
        top: 20px;
        position: relative;
        width: 50%;
    }

    .login {
        font-size: 44px;
        font-weight: 800;
        margin: 30px 20px 40px;
        color: #8d5934;
    }

    .eula {
        color: #4d4d4d;
        font-size: 14px;
        line-height: 1.5;
        margin: 50px 40px;
    }

    .right {
        background: #a1937e;
        box-shadow: 0px 0px 40px 16px rgba(0, 0, 0, 0.22);
        color: #fff;
        position: relative;
        width: 50%;
    }

    .form {
        margin: 40px;
        position: absolute;
    }

    label {
        color: #ffffff;
        /* Un gris oscuro para las etiquetas */
        display: block;
        font-size: 14px;
        height: 16px;
        margin-top: 20px;
        margin-bottom: 5px;
    }

    input {
        background: #fff;
        /* Fondo blanco para los campos de entrada */
        border: 0;
        /* Borde en el tono de marrón claro */
        color: #4d4d4d;
        /* Texto gris oscuro para mayor contraste */
        font-size: 20px;
        height: 30px;
        line-height: 30px;
        outline: none !important;
        width: 100%;
    }

    #submit,
    #btnRegistro {
        background: #927764;
        /* Un tono de marrón más oscuro para el botón */
        color: #fff;
        margin-top: 25px;
        transition: background 300ms, color 300ms;
    }

    #submit:focus,
    #btnRegistro:focus {
        background: #6e5d4f;
        /* Un tono más oscuro al enfocar el botón */
    }

    #submit:active,
    #btnRegistro:active {
        background: #86634c;
        /* Un tono más claro al hacer clic en el botón */
        color: #ddd;
        /* Texto más claro al hacer clic en el botón */
    }

    /*Nieve*/
    .snowflake {
        position: absolute;
        width: 10px;
        height: 10px;
        background-color: #fff;
        border-radius: 50%;
        animation: fall linear infinite;
        z-index: -1;
    }

    @keyframes fall {
        to {
            transform: translateY(100vh);
        }
    }
</style>


</html>