<?php
require 'conexion.php';
$artesania=$_POST['id_artesaniaCompra'];
$insertar2= "INSERT INTO compratemporal	VALUES ('$artesania')";

$query2= mysqli_query( $conexion, $insertar2);


if($query2){
echo " <script> 
        location.href= '../pages/productoCompra.php';
        </script>";
  }else{
     echo " <script> 
        location.href= '../pages/catalogo.php';
        </script>";
   }

//   delete from compratemporal;

?>