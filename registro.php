<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Registro</title>
</head>
<body>
    <main>
        <section class="registro">
        <form action="registro.php" method="POST">
            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" placeholder="Nombres" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" placeholder="Apellidos" required>

            <label for="tipo_documento">Documento:</label>
            <select id="tipo_documento" name="tipo_documento" required>
                <option value="c.c">Cédula de Ciudadanía</option>
                <option value="c.e">Cédula extranjera</option>
            </select>
            <input type="number" name="numero_de_documento" placeholder="numero de documento" required>
            
            <label for="correo">Correo electrónico</label>
            <input type="email" name="correo" placeholder="Correo electrónico" required>

            <label for="telefono">Teléfono</label>
            <input type="tel" name="telefono" placeholder="Teléfono" required>

            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad"  placeholder="Ciudad" required>

            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" placeholder="Dirección" required>

            <label for="ocupacion">Ocupación:</label>
            <input type="text" name="ocupacion"  placeholder="Ocupación" required>
            
            <button type="submit" value="Enviar" >Enviar</button>
            <p>Gracias por registrarte ya puedes</p><a href="inicio.php">inciar sesion</a>
          </form>
        </section>
    </main>
    
</body>
</html>

<?php

$user = "root";
$pass = "";
$host = "localhost";

$connection = mysqli_connect($host, $user, $pass);

$nombres = $_POST["nombres"] ;
$apellidos = $_POST["apellidos"] ;
$tipo_documento = $_POST["tipo_documento"] ;
$numero_de_documento = $_POST["numero_de_documento"];
$correo = $_POST["correo"] ;
$telefono = $_POST["telefono"] ;
$ciudad = $_POST["ciudad"] ;
$direccion = $_POST["direccion"];
$ocupacion = $_POST["ocupacion"];

if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<script type='text/javascript'>alert('Registro exitoso');</script>";
        }

        $datab = "basemanzana";

        $db = mysqli_select_db($connection,$datab);

        $instruccion_SQL = "INSERT INTO mujer_cuidadora (Tipo_documento, Nmro_doc, Nombres, Apellidos, Telefono, Correo_electrónico, Ciudad, Direccion, Ocupacion)
                             VALUES ('$tipo_documento','$numero_de_documento','$nombres', '$apellidos', '$telefono', '$correo', '$ciudad', '$direccion', '$ocupacion')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);
        
mysqli_close( $connection );


?>

