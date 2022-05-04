<?php

    function Conexion(){
        $host= 'localhost';
        $user='prueba_ecommerce';
        $pass= 'prueba';
        $db='ecommerceartesanias';

        $conexion= mysqli_connect($host,$user,$pass,$db);
        if($conexion){
            echo "Base de Datos Conectada";   
        }else{
            echo 'No se pudo establecer la coneccion';
        }

        return $conexion;
        }

?>