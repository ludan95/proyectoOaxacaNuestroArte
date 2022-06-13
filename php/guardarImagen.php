<?php
  //!
  $filename        = $_FILES['imagenUsuario']['name'];
  $sourceFoto      = $_FILES['imagenUsuario']['tmp_name'];
  $logitudPass    = 10;
  $newNameFoto    = substr( md5(microtime()), 1, $logitudPass);
  $explode        = explode('.', $filename);
  $extension_foto = array_pop($explode);
  $nuevoNameFoto  = $newNameFoto.'.'.$extension_foto;
  //Verificando si existe el directorio
  //  $dirLocal = "../img/imgPerfiles_Usuarios/";
  $dirLocal = "../img/imgArtesanias/";
  if (!file_exists($dirLocal)) 
      mkdir($dirLocal, 0777, true);
  $miDir         = opendir($dirLocal); //Habro el directorio
  $imagenCliente = $dirLocal.'/'.$nuevoNameFoto;
  move_uploaded_file($sourceFoto, $imagenCliente);
  //!
  /*

    //!
    $filename= $_FILES['imagenArtesania']['name'];
    $sourceFoto      = $_FILES['imagenArtesania']['tmp_name'];
    $logitudPass    = 10;
    $newNameFoto    = substr( md5(microtime()), 1, $logitudPass);
    $explode        = explode('.', $filename);
    $extension_foto = array_pop($explode);
    $nuevoNameFoto  = $newNameFoto.'.'.$extension_foto;
    //Verificando si existe el directorio
    $dirLocal = "C:/xampp/htdocs/Programacion_Web/proyectoOaxacaNuestroArte/";
    if (!file_exists($dirLocal)) 
        mkdir($dirLocal, 0777, true);
    $miDir         = opendir($dirLocal); //Habro el directorio
    $imagenCliente = $dirLocal.'/'.$nuevoNameFoto;
    move_uploaded_file($sourceFoto, $imagenCliente);
    //!
  



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

//  Prueba conexion
<?php

require 'conexion.php';
$conexion= Conexion();




$filename        = $_FILES['imagenUsuario']['name'];
$sourceFoto      = $_FILES['imagenUsuario']['tmp_name'];

$logitudPass    = 10;
$newNameFoto    = substr( md5(microtime()), 1, $logitudPass);

$explode        = explode('.', $filename);
$extension_foto = array_pop($explode);
$nuevoNameFoto  = $newNameFoto.'.'.$extension_foto;

//Verificando si existe el directorio
$dirLocal = "C:/xampp/htdocs/Programacion_Web/proyectoOaxacaNuestroArte/img/imgPerfiles_Usuarios/";
if (!file_exists($dirLocal)) {
    mkdir($dirLocal, 0777, true);
}

$miDir         = opendir($dirLocal); //Habro el directorio
$imagenCliente = $dirLocal.'/'.$nuevoNameFoto;

move_uploaded_file($sourceFoto, $imagenCliente);

echo " <script> 
              alert('correcto');
              location.href= 'prueba_leerImagen.html';
           </script>";
           */
?>

