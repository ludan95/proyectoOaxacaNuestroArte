<?php

    $host= 'localhost';
    $user='prueba_ecommerce';
    $pass= 'prueba';
    $db='ecommerceartesanias';
/*
    $host= 'sql102.epizy.com';
    $user='epiz_31761970';
    $pass= 'HP6h3YF8n5ASXR';
    $db='epiz_31761970_ecommerceartesanias';
*/
        $conexion= new mysqli($host,$user,$pass,$db);
        mysqli_query( $conexion, 'SET NAMES utf8');
        //Si tenemos un posible error en la conexión lo mostramos
        if (mysqli_connect_errno())
        {
            printf("Falló conexiónala base de datos: %s\n",
                mysqli_connect_error());
            exit();
        }
?>