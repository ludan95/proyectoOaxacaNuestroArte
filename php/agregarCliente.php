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
  $dirLocal = "../img/imgPerfiles_Usuarios/";
  if (!file_exists($dirLocal)) 
      mkdir($dirLocal, 0777, true);
  $miDir         = opendir($dirLocal); //Habro el directorio
  $imagenCliente = $dirLocal.'/'.$nuevoNameFoto;
  move_uploaded_file($sourceFoto, $imagenCliente);
  //!
  
  $imagDireccion= $imagenCliente;
  //$password= password_hash($_POST['contrasenia'], PASSWORD_BCRYPT);
  $password= md5($_POST['contrasenia']);
  $insertar2= "INSERT INTO cliente  VALUES (NULL, '$nombreCli', '$apellidoCli', '$email', '$imagDireccion','$password', 1)";
  $query2= mysqli_query( $conexion, $insertar2);


  if($query2){
    session_start();
    $query= mysqli_query( $conexion,"SELECT * FROM cliente WHERE correo_electronico= '$email' AND contrasenia_usuario= '$password' " );
    $result= mysqli_num_rows($query);

    if($result>0){
      $data= mysqli_fetch_array($query);
      $_SESSION['active']= true;
      $_SESSION['tipoSession']="usuario";
      $_SESSION['id_cliente']= $data['id_cliente_usuario'];
      $_SESSION['nombreCliente']= $data['nombre_cliente'];
      $_SESSION['apellidoCliente']= $data['apellidos_cliente'];
      $_SESSION['emailCliente']= $data['correo_electronico'];
      $_SESSION['passwordCliente']= $data['contrasenia_usuario'];
      $_SESSION['imagen']= $data['img'];
      $_SESSION['id_direccion']= $data['id_direccion'];
    echo " <script> 
              alert('Bienvenido a OaxacaNuestroArte');
              location.href= '../pages/vistaPerfilUsuario.php';
           </script>";
    }
  }else{
    echo " <script> alert('incorrecto') </script>";
  }
  mysqli_close($conexion);

?>