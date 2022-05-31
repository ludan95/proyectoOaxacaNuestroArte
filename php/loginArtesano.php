<?php
session_start();
if(!empty($_SESSION['active'])){
  header("Location: ../index.html");
}else{
  if(!empty($_POST)){
    if(empty($_POST['correoElectronicoA']||empty($_POST['passwordA']))){
      $alert= 'ingresa usuario y clave';
    }else{
      require '../php/conexion.php';
      $user= $_POST['correoElectronicoA'];
      $password= md5($_POST['passwordA']);
      $query= mysqli_query( $conexion,"SELECT * FROM artesano WHERE correo_electronico= '$user' AND contrasenia_artesano= '$password' " );
      $result= mysqli_num_rows($query);

      if($result>0){
        $data= mysqli_fetch_array($query);
        $_SESSION['active']= true;
        $_SESSION['tipoSession']="artesano";
        $_SESSION['id_artesano']= $data['id_artesano'];
        $_SESSION['nombreArtesano']= $data['nombre_artesano'];
        $_SESSION['apellidoArtesano']= $data['apellidos_artesano'];
        $_SESSION['emailArtesano']= $data['correo_electronico'];
        $_SESSION['regionArtesano']= $data['region'];
        $_SESSION['passwordCliente']= $data['contrasenia_usuario'];
        $_SESSION['imagenArtesano']= $data['img'];
        $_SESSION['id_direccionArtesano']= $data['id_direccion'];
        $_SESSION['id_tarjetaArtesano']= $data['id_tarjeta'];
        echo " <script> 
                  alert('Acceso correcto');
                  location.href='../pages/vistaPerfilArtesano.php';
              </script>";
      }else{
        echo " <script> 
          alert('usuario o contraseña incorrecto');
          location.href='../pages/loginUsuarioArtesano.php';
          </script>";
        session_destroy();
      }
    }
  }
}
?>