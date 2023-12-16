<?php

$conexion=new mysqli("localhost","root","","basemanzana","3306");
if(!$conexion) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Bienvenido a las Manzanas del cuidado</h3></b>" ;
        }
        if (empty($_POST["docNumber"]) and empty($POST["email"])){
            echo "";
        } else{
            $docNumber=$_POST["docNumber"];
            $email=$_POST["email"];
            $sql=$conexion->query("select * from mujer_cuidadora where Nmro_doc='$docNumber' and Correo_electrónico='$email'");
            if($datos=$sql->fetch_object()){
                header("location:manzana.html");
            } else{
                echo "<h1>Acceso denegado</h1>";
            }   

        }
?>
