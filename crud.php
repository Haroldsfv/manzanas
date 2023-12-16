<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD MANZANAS</title>
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAP5JREFUSEvFlf0VgjAMxMMmuomO4iSMopvoKG6i/HyEV0LTD0qf/adQwl3ukraDdB5DZ3w5iuAkIhcRediELQFB9ymQH1LjOgG+5oDnDM7rW0T4xvwbliAM9ghi4ApIYjyfPYKPQxwj02QUEHDWmG9ql1VQSuDZoutNBGHmKFNbUEINd1sEEA0QgoS2aJEX/2NF9iyKgWtdbC1W9SqpQS04CrWFN21qFXjg3jrgKFoSzymIyU8p2licIyhVpL43EaQybyYIO2PV52aL71agOClwYqoJaq+L/xOUHNc5VWwyjvTofcBGGYMLJAdmv1MjTlJ3J9cCZuOPupNdou4EX5hRUxlWng/uAAAAAElFTkSuQmCC"/>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }



    </style>
</head>
<body>
    <a  href="">Editar</a> 
</body>
</html>
<?php

$conexion=new mysqli("localhost","root","","basemanzana","3306");
if(!$conexion) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h2>Bienvenido al CRUD</h2></b>" ;
            echo "<b><h3>TABLA DE REGISTRO DE MUJERES</h3></b>";
        }
        $consulta = "SELECT * FROM mujer_cuidadora";
        
        $result = mysqli_query($conexion,$consulta);
        if(!$result) 
        {
            echo "No se ha podido realizar la consulta";
        }
        echo "<table>";
        echo "<tr>";
        
        echo "<th><p>Id Mujer</th></p>";
        echo "<th><p>Tipo_documento</p></th>";
        echo "<th><p>Nmro_doc</p></th>";
        echo "<th><p>Nombre</p></th>";
        echo "<th><p>Apellido</p></th>";
        echo "<th><p>Telefono</p></th>";
        echo "<th><p>Correo Electrónico</p></th>";
        echo "<th><p>Ciudad</p></th>";
        echo "<th><p>Dirección</p></th>";
        echo "<th><p>Ocupación</p></th>";

        echo "</tr>";
        
        while ($colum = mysqli_fetch_array($result))
         {
            echo "<tr>";
        
            echo "<td><p>" . $colum['id_mujeres'] . "</td></p>";
            echo "<td><p>" . $colum['Tipo_documento']. "</td></p>";
            echo "<td><p>" . $colum['Nmro_doc'] . "</td></p>";
            echo "<td><p>" . $colum['Nombres'] . "</td></p>";
            echo "<td><p>" . $colum['Apellidos'] . "</td></p>";
            echo "<td><p>" . $colum['Telefono']. "</td></p>";
            echo "<td><p>" . $colum['Correo_electrónico'] . "</td></p>";
            echo "<td><p>" . $colum['Ciudad'] . "</td></p>";
            echo "<td><p>" . $colum['Direccion'] . "</td></p>";
            echo "<td><p>" . $colum['Ocupacion'] . "</td></p>";
            
          
            echo "</tr>";
        }
        echo "</table>";
        if(!$conexion) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>TABLA DE ESTABLECIMIENTOS</h3></b>" ;
        }
        $consulta = "SELECT * FROM establecimientos";
        
        $result = mysqli_query($conexion,$consulta);
        if(!$result) 
        {
            echo "No se ha podido realizar la consulta";
        }
        echo "<table>";
        echo "<tr>";
        
        echo "<th><p>Id Establecimiento</th></p>";
        echo "<th><p>Nombre</p></th>";
        echo "<th><p>Responsable</p></th>";
        echo "<th><p>Dirección</p></th>";
        echo "</tr>";
        
        while ($colum = mysqli_fetch_array($result))
         {
            echo "<tr>";
        
            echo "<td><p>" . $colum['Id_establecimiento'] . "</td></p>";
            echo "<td><p>" . $colum['Nombre']. "</td></p>";
            echo "<td><p>" . $colum['Responsable'] . "</td></p>";
            echo "<td><p>" . $colum['Dirección'] . "</td></p>";
          
            echo "</tr>";
        }
        echo "</table>";
        if(!$conexion) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>TABLA DE MANZANAS</h3></b>" ;
        }
        $consulta = "SELECT * FROM manzanas";
        
        $result = mysqli_query($conexion,$consulta);
        if(!$result) 
        {
            echo "No se ha podido realizar la consulta";
        }
        echo "<table>";
        echo "<tr>";
        
        echo "<th><p>Id Manzanas</th></p>";
        echo "<th><p>Nombre</p></th>";
        echo "<th><p>Localidad</p></th>";
        echo "<th><p>Dirección</p></th>";
        echo "<th><p>Municipio</p></th>";
        echo "</tr>";
        
        while ($colum = mysqli_fetch_array($result))
         {
            echo "<tr>";
        
            echo "<td><p>" . $colum['Id_manzana'] . "</td></p>";
            echo "<td><p>" . $colum['Nombre']. "</td></p>";
            echo "<td><p>" . $colum['Localidad'] . "</td></p>";
            echo "<td><p>" . $colum['Dirección'] . "</td></p>";
            echo "<td><p>" . $colum['Municipio'] . "</td></p>";
          
            echo "</tr>";
        }
        echo "</table>";
        if(!$conexion) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>TABLA DE SERVICIOS</h3></b>" ;
        }
        $consulta = "SELECT * FROM servicios";
        
        $result = mysqli_query($conexion,$consulta);
        if(!$result) 
        {
            echo "No se ha podido realizar la consulta";
        }
        echo "<table>";
        echo "<tr>";
        
        echo "<th><p>Id Servicio</th></p>";
        echo "<th><p>Nombre</p></th>";
        echo "<th><p>Descripción</p></th>";
        echo "<th><p>Categoría de servicio</p></th>";
        echo "<th><p>Tipo de servicio</p></th>";
        echo "</tr>";
        
        while ($colum = mysqli_fetch_array($result))
         {
            echo "<tr>";
        
            echo "<td><p>" . $colum['Id_servicio'] . "</td></p>";
            echo "<td><p>" . $colum['Nombre']. "</td></p>";
            echo "<td><p>" . $colum['Descripcion'] . "</td></p>";
            echo "<td><p>" . $colum['Categoria_servicio'] . "</td></p>";
            echo "<td><p>" . $colum['Tipo_servicio'] . "</td></p>";
          
            echo "</tr>";
        }
        echo "</table>";
        if(!$conexion) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>TABLA DE SOLICITUD A MANZANA</h3></b>" ;
        }
        $consulta = "SELECT * FROM manzanas_servicios";
        
        $result = mysqli_query($conexion,$consulta);
        if(!$result) 
        {
            echo "No se ha podido realizar la consulta";
        }
        echo "<table>";
        echo "<tr>";
        
        echo "<th><p>Id Manzanas</th></p>";
        echo "<th><p>Id Servicio</p></th>";
        echo "<th><p>Día</p></th>";
        echo "<th><p>Hora</p></th>";
  
        echo "</tr>";
        
        while ($colum = mysqli_fetch_array($result))
         {
            echo "<tr>";
        
            echo "<td><p>" . $colum['ManzanasId_manzana'] . "</td></p>";
            echo "<td><p>" . $colum['ServiciosId_servicio']. "</td></p>";
            echo "<td><p>" . $colum['Dia'] . "</td></p>";
            echo "<td><p>" . $colum['Hora'] . "</td></p>";
          
            echo "</tr>";
        }
        echo "</table>";
        
        mysqli_close( $conexion
     );
        
 
        
        
        ?>