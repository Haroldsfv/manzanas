<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesion</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
  
    <form class="I_sesion" method="POST">
        <?php
         include("conexion.php");

         ?>
        <label for="N_documento">Número de Documento:</label>
        <input type="text" id="docNumber" name="docNumber" >

        <label>Correo Electrónico:</label>
        <input type="email" name="email">


        <p>¿No tienes cuenta?<a href="registro de mujer.html">Registrate Aqui</a></p>
    
        <button name="boton" type="submit">Iniciar Sesión</button>
      </form>
</body>
</html>

