<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: /../../pages/loginUsuarioCliente.html");
}

require '../php/conexion.php';

if (!empty($_POST['correoElectronico']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id_cliente_usuario, correo_electronico, contrasenia_usuario FROM cliente WHERE correo_electronico = :email');
  $records->bindParam(':email', $_POST['correoElectronico']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['contrasenia_usuario'])) {
    $_SESSION['user_id'] = $results['id_cliente_usuario'];
    header("Location: /../../pages/loginUsuarioCliente.html");
  } else {
    echo " <script> alert('Usuario o contraseña incorrecta, intentalo nuevamente') </script>";
  }
}

/*

https://www.youtube.com/watch?v=37IN_PW5U8E

https://github.com/FaztWeb/php-login-simple/blob/master/login.php

*/

?>

