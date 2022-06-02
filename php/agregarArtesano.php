<?php
session_start();
if(!empty($_SESSION['active'])){
  header("Location: ../index.html");
}else{
    require 'conexion.php';
  
  $nombreArt= $_POST['first_name'];
  $apellidoArt= $_POST['last_name'];
  $emailArt= $_POST['email'];
  $passwordArt;
  if(strcmp($_POST['contrasenia'], $_POST['repetirContrasenia'])===0){
    $passwordArt= $_POST['contrasenia'];
  }else{
    $passwordArt="1";
  }

  $regionZona= $_POST['region'];

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
  $dirLocal = "../img/imgPerfiles_Artesanos/";
  if (!file_exists($dirLocal)) 
      mkdir($dirLocal, 0777, true);
  $miDir         = opendir($dirLocal); //Habro el directorio
  $imagenCliente = $dirLocal.'/'.$nuevoNameFoto;
  move_uploaded_file($sourceFoto, $imagenCliente);
  //!
  
  $imagDireccion= $imagenCliente;
  //$password= password_hash($_POST['contrasenia'], PASSWORD_BCRYPT);
  $passwordArt= md5($_POST['contrasenia']);
  $insertar= "INSERT INTO artesano  VALUES (NULL, '$nombreArt', '$apellidoArt', '$emailArt', '$regionZona', '$imagDireccion','$passwordArt', 1, 1);";
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
}
?>