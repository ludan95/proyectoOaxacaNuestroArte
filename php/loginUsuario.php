<?php
session_start();
if(!empty($_SESSION['active'])){
  header("Location: ../index.html");
}else{
  if(!empty($_POST)){
    if(empty($_POST['correoElectronico']||empty($_POST['password']))){
      $alert= 'ingresa usuario y clave';
    }else{
      require '../php/conexion.php';
      $user= $_POST['correoElectronico'];
      $password= md5($_POST['password']);
      $query= mysqli_query( $conexion,"SELECT * FROM cliente WHERE correo_electronico= '$user' AND contrasenia_usuario= '$password' " );
      $result= mysqli_num_rows($query);

      if($result>0){
        $data= mysqli_fetch_array($query);
        $_SESSION['active']= true;
        $_SESSION['id_cliente']= $data['id_cliente_usuario'];
        $_SESSION['nombreCliente']= $data['nombre_cliente'];
        $_SESSION['apellidoCliente']= $data['apellidos_cliente'];
        $_SESSION['emailCliente']= $data['correo_electronico'];
        $_SESSION['passwordCliente']= $data['contrasenia_usuario'];
        $_SESSION['imagen']= $data['img'];
        $_SESSION['id_direccion']= $data['id_direccion'];
        echo " <script> 
                  alert('Acceso correcto');
                  location.href='../pages/vistaPerfilUsuario.php';
              </script>";
      }else{
        echo " <script> 
          alert('usuario o contraseña incorrecto');
          location.href='../pages/loginUsuarioCliente.php';
          </script>";
        session_destroy();
      }
    }
  }
}
?>