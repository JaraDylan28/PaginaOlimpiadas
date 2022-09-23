<?php

session_start();
if(isset($_session['usuario'])) {

        header("location: bienvenido.php");
}

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body class="form">
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-registro">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-registro">
                    <!--Login-->
                    <form action="login.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Usuario" name="usuario"  required>
                        <input type="password" placeholder="Contraseña" name="clave"  required>
                        <button> Entrar </button>
                    </form>

                    <!--Register--><!-- action= boton de accion para hacer referencia a nuestra conexion -->
                    <form action="registro.php" method= "POST" class="formulario__registro">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo"required>
                        <input type="email" placeholder="Correo Electronico" name="correo"required>
                        <input type="text" placeholder="Usuario" name="usuario"required>
                        <input type="password" placeholder="Contraseña" name="clave"required>
                        <input type="password" placeholder="Confirmar Contraseña" name="confirmar_clave"  required>

                        <button>Regístrarse</button>
                    </form>
                </div>




                
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>