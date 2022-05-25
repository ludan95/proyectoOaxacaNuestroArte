<?php
  require 'conexion.php';
  
  $nombreCli= $_POST['first_name'];
  $apellidoCli= $_POST['last_name'];
  $email= $_POST['email'];
  $password;
  if(strcmp($_POST['contrasenia'], $_POST['repetirContrasenia'])===0){
    $password= $_POST['contrasenia'];
  }else{
    $password="1";
  }


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
  $dirLocal = "C:/xampp/htdocs/Programacion_Web/proyectoOaxacaNuestroArte/img/imgPerfiles_Usuarios/";
  if (!file_exists($dirLocal)) 
      mkdir($dirLocal, 0777, true);
  $miDir         = opendir($dirLocal); //Habro el directorio
  $imagenCliente = $dirLocal.'/'.$nuevoNameFoto;
  move_uploaded_file($sourceFoto, $imagenCliente);
  //!
  
  $imagDireccion= $imagenCliente;
  $password= password_hash($_POST['contrasenia'], PASSWORD_BCRYPT);
  $insertar2= "INSERT INTO cliente  VALUES (NULL, '$nombreCli', '$apellidoCli', '$email', '$imagDireccion','$password', 1)";
  $query2= mysqli_query( $conexion, $insertar2);


  if($query2){
    echo " <script> 
              alert('correcto');
              location.href= '../pages/altaUsuario.html';
           </script>";
  }else{
    echo " <script> alert('incorrecto') </script>";
  }
  mysqli_close($conexion);
?>

