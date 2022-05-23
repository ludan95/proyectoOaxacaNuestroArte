<?php

require 'conexion.php';

$estado= $_POST['estado'];
$municipio= $_POST['municipio'];
$localidad= $_POST['localidad'];
$calle= $_POST['calle'];
$numero= $_POST['numeroCasa'];
$codigo_postal= $_POST['codigoPostal'];
$telefono= $_POST['phone'];

$insertar= " INSERT INTO direccion  VALUES (NULL, '$estado','$municipio','$localidad','$calle','$numero','$codigo_postal','$telefono')";
$query= mysqli_query( $conexion, $insertar);

if($query){
    echo " <script> 
              alert('correcto');
              location.href= '../index.html';
           </script>";
  }else{
    echo " <script> alert('incorrecto') </script>";
  }
  mysqli_close($conexion);
?>