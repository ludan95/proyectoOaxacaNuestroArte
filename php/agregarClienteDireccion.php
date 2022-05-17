<?php
    require 'conexion.php';
    $imagen='';
   if (isset($_FILES["foto"])){
        $file= $_FILES["foto"];
        $nombre= $file["name"];
        $tipo= $file["type"];
        $ruta_provisional= $file["tmp_name"];
        $size= $file["size"];
        $dimensiones= getimagesize($ruta_provisional);
        $width= $dimensiones[0];
        $height= $dimensiones[1];
        $carpeta= "C:/xampp/htdocs/Programacion_Web/proyectoOaxacaNuestroArte/img/imgPerfiles_Usuarios/";
      if ($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
      {
          echo "Error el Archivo no es una imagen";
      }else 
      if ($size>3*1024*1024){
         echo "Error, el tamaño máximo permitido es un 3MB";
      }
      else{
            $src=$carpeta.$nombre;
            move_uploaded_file($ruta_provisional, $src);
            $imagen= "C:/xampp/htdocs/Programacion_Web/proyectoOaxacaNuestroArte/img/imgPerfiles_Usuarios/".$nombre;
      }
    }
?>

