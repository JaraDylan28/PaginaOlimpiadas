<?php
    session_start();

    include 'conexion.php';

    $usuario =$_POST['usuario'];
    $clave =$_POST['clave'];
    $clave =hash('sha512',$clave);
    
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'");
    
    if(mysqli_num_rows($validar_login)> 0) {
        $_SESSION['usuario'] =$usuario;
        header("location: bienvenido.php");
        
        exit;
    } else {
        echo '
        <script>
            alert("el usuario o contraseña es incorrecto");
            window.location = "index.php";
            </script>
            ';
        exit;
    }
?>