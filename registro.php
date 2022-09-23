<?php

include 'conexion.php'; /* incluye la conexion de la base de datos creada con php*/

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$clave =hash('sha512',$clave);
// $confirmar_clave=$_POST['confirmar_clave'];
//$confirmar_clave =hash('sha512',$confirmar_clave);



$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, clave) 
          VALUES('$nombre_completo','$correo', '$usuario' ,'$clave' )";



          $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo= '$correo'");

          if (mysqli_num_rows($verificar_correo) >0 ) {
            echo '
            <script> 
            alert("Correo repetido");
            window.location = "index.php";
            </script>
            ';
            exit();
            }

            
          $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario= '$usuario'");

          if (mysqli_num_rows($verificar_usuario) >0 ) {
            echo '
            <script> 
            alert("Usuario repetido");
            window.location = "index.php";
            </script>
            ';
            exit();
            }
   


/* primero ejecuto la conexion y luego la tabla */
$ejecutar = mysqli_query($conexion, $query);
if ($ejecutar) {
echo 
'
<script> 
    alert("Usuario registrado");
    window.location = "index.php";
</script>
    ';
}
else  {
    echo 
    '
    <script> 
        alert("Usuario no registrado");
        window.location = "index.php";
    </script>
        ';
    }

mysqli_close($conexion);

?>
