<?php
$server = 'localhost';
$nombre ='id19598803_login';
$usuario ='id19598803_loginn';
$clave ='SlO}Nor$KRC|G5IR';

$conexion = mysqli_connect($server, $usuario, $clave, $nombre);
  
if ($conexion) {
echo 'Conectado a la base de datos';
}else {
echo 'error';
}
?>

