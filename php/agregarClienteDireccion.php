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

  
  $id_direccion= $conexion->query(" SELECT *  FROM direccion ");
  $id_direccion=  $id_direccion->num_rows;
  //? -----------------------------------------
  
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
  $dirLocal = "C:/xampp/htdocs/Programacion_Web/proyectoOaxacaNuestroArte/img/imgPerfiles_Usuarios/";
  if (!file_exists($dirLocal)) 
      mkdir($dirLocal, 0777, true);
  $miDir         = opendir($dirLocal); //Habro el directorio
  $imagenCliente = $dirLocal.'/'.$nuevoNameFoto;
  move_uploaded_file($sourceFoto, $imagenCliente);
  

  //!
  $imagDireccion= $imagenCliente;

  $insertar2= "INSERT INTO cliente  VALUES (NULL, '$nombreCli', '$apellidoCli', '$email', '$imagDireccion',MD5('$password'), '$id_direccion')";
  $query2= mysqli_query( $conexion, $insertar2);


  if($query2){
    echo " <script> 
              alert('correcto');
              location.href= '../pages/altaUsuario.html';
           </script>";
  }else{
    echo " <script> alert('incorrecto') </script>";
  }

?>

