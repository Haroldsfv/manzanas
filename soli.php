<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Manzanas del Cuidado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <img src="descarga.jpg" alt="">

    <nav >

      <ul class="inicio">
          <li>
            <a href="manzana.html">Inicio</a>
          </li>
          <li>
              <a href="mapas.html">Donde Encontrarnos</a>
          </li>
          
      </ul>
  </nav>
  </header>
  <main>
    <section class="informacion">
      <div class="p1">
      <h2>¿Que son las Manzanas del Cuidado</h2>
      
      <img id="img1" src="60f9c2b8b5d37.jpeg" alt="">

      <p> Las Manzanas son una de las formas de operación del Sistema Distrital de Cuidado. Son áreas de la ciudad en las que concentramos infraestructura y servicios para atender de manera próxima y simultánea a las cuidadoras y a sus familias.</p>

      <br>
      <br>
    </div>
    <div class="p2">
      <h2>¿Cómo acceder a las Manzanas de cuidado?</h2>

      <img id="img2" src="foto_noticia-alcaldia-manzanacuidado-29mar2023.jpg" alt="">

      <p>Todos los servicios del Sistema Distrital de Cuidado (Manzanas del Cuidado, Buses del Cuidado y Asistencia Casa a Casa) son totalmente gratuitos. Lo único que deben hacer las cuidadoras o personas interesadas es ir a la Manzana más cercana, contactar a la líder y empezar a disfrutar toda la oferta.</p>

      <br>
      <br>
    </div>
    <div class="p3">
      <h2>¿Qué ofrece la manzana del cuidado en Bogotá?</h2>

      <img id="img3" src="laud-manzana-del-cuidado-alcaldiadebogota (1).jpeg" alt="">
      <p>Servicios gratuitos para ti y tu familia.
        <br>
        <br>
        Aquí encontrarás actividades de crecimiento personal, físico e intelectual; puedes terminar de cursar su bachillerato, tomar clases de yoga, recibir consultas médicas, asesoría psico jurídica y mucho más, mientras cuidamos a quienes tú cuidas.</p>
 
        <br>
      </div>
    </section>
    <section class="video1">
      <iframe  src="https://www.youtube.com/embed/YxMWtz4jCF4?si=L4W-daFAsTk_W0-f" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </section>
  </main>
  <footer>
    
  </footer>
</body>
</html>


<?php

$user = "root";
$pass = "";
$host = "localhost";


$connection = mysqli_connect($host, $user, $pass);

$localidades = $_POST["localidades"] ;
$servicio = $_POST["servicio"] ;
$dia = $_POST["dia"] ;
$hora = $_POST["hora"];

        $datab = "basemanzana";

        $db = mysqli_select_db($connection,$datab);

        $instruccion_SQL = "INSERT INTO manzanas_servicios (ManzanasId_manzana, ServiciosId_servicio, Dia, Hora)
                             VALUES ('$localidades','$servicio', '$dia', '$hora')";              
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

mysqli_close( $connection );

?>

