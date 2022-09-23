<?php

session_start();

    if(!isset($_SESSION['usuario'])) {

        echo '
        <script>   
                alert("Inicie sesión para continuar");
        window.location = "index.php";
        </script>
        ';
        session_destroy();
        die();
    }



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Museo de Bellas Artes</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="assets/js/script.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
</head>
<body>  
<header class="header">
	<div class="overlay">
<h1>Museo Bellas Artes</h1>
<h3>Museo</h3>
<p>El Museo Nacional de Bellas Artes invita a recorrer, con entrada libre y gratuita, las m&aacute;s de 30 salas de la colecci&oacute;n permanente y dos muestras temporarias</p>
	<br>
		<a href="bienvenido.php" class="link_button">Museo</a>
		<a href="Agenda.html" class="link_button">Agenda</a>
    <a href="exhibiciones.html" class="link_button">Audiogu&iacute;a</a>
		<a href="turnos.html" class="link_button">Turnos</a>
		<a href="contacto.html" class="link_button">Contacto</a>
	</div>
</header>
<table style="width:100%; margin:5%" >
    <tr>
    <th><h3>Museo</h3>
        <a href="bienvenido.php"><img src="assets/Imagenes/museoo.png" width: 40%;
          height: 40%; >
     </a>
    </th>
  <th><h3>Agenda</h3>
    <a href="Agenda.html"><img src="assets/Imagenes/agendaa.jpg" width: 40%;
      height: 40%; >
 </a>
</th>
<th><h3>Audioguia</h3>
    <a href="exhibiciones.html"><img src="assets/Imagenes/audioguia.png" width: 40%;
      height: 40%; >
 </a>
</th>
  <th><h3>Turnos</h3>
    <a href="turnos.html"><img src="assets/Imagenes/turnos.png" width: 40%;
      height: 40%;>
 </a>
</th>
  <th><h3>Contacto</h3>
    <a href="contacto.html"><img src="assets/Imagenes/contacto.png" width: 40%;
      height: 40%;>
 </a>
</th>
  </tr>
  </table>
 

<br>
<div class="estilo-parrafos">
  <h3>Visita al Museo Nacional de Bellas Artes</h3>
<hr>
<p>El Museo Nacional de Bellas Artes invita a recorrer, con entrada libre y gratuita, las más de 30 salas de la colección 
  permanente y dos muestras temporarias: "Carmelo Arden Quin, en la trama del arte constructivo", con 163 obras del maestro 
  uruguayo y de los creadores de distintos países del mundo con los que tejió vínculos artísticos a lo largo de siete décadas, 
  y "Rob Verf. Vanitas", una muestra con curaduría de Marta Penhos que reúne una serie de obras del artista nacido en los Países 
  Bajos, pero de larga trayectoria en la Argentina, vinculadas a la idea de la “vanitas” contemporánea, en diálogo con piezas 
  históricas de la colección institucional.</p>
  <br>
  <div class="imagenes" style="margin:auto; width:80%; text-align:center;">
<h3>Imagen de la planta baja del museo</h3>
<hr>
<img src="assets/Imagenes/plantabaja1.jpg" height="5%" width="70%">
<br>
<h3>Imagen del primer piso del museo</h3>
<hr>
<img src="assets/Imagenes/primerpiso.jpg" height="5%" width="70%">
<br>
<h3>Imagen del segundo piso del museo</h3>
<hr>
<img src="assets/Imagenes/segundopiso.jpg" height="5%" width="70%">
 <h3> Como llegar</h3>
 <hr>
 <img src="assets/Imagenes/comollegarr.png" height="5%" width="70%" >
 <br>

    <footer class="footer">
      <div class="container">
      <a class="cerrar" href="cerrar_sesion.php"> Cerrar Sesion </a>
    </footer>  
  </div>   
  </div>
</body>
</html>

