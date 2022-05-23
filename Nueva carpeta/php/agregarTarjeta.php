<?php

    require 'conexion.php';

    $numeroTarjeta= $_POST['numero_Tarjeta'];
    $nombreTitular= $_POST['nombre_Titular'];
    $mesCaducidad= $_POST['mes_Caducidad'];
    $aniosCaducidad= $_POST['anio_Caducidad'];
    $numeroSeguridad= $_POST['numero_Seguridad'];
    $banco= $_POST['entidad_bancaria'];
    $tipoTajeta= $_POST['tipo_tarjeta'];

    $insertar= "INSERT INTO tarjeta VALUES (NULL, '$numeroTarjeta', '$nombreTitular', '$mesCaducidad', '$aniosCaducidad', MD5('$numeroSeguridad'), '$banco', '$tipoTajeta')";
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

