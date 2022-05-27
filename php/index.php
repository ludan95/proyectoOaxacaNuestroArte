<?php
session_start();
if(!empty($_SESSION['active'])){
  header("Location: ../index.html");
}else{
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section id="container">
        <form action="loginUsuario.php" method="post">
            <h3>Iniciar Sesión</h3>
            <input type="text" name="correoElectronico" placeholder="Usuario" value="mludan95@gmail.com">
            <br>
            <input type="password"name="password" placeholder="Contraseña" >
            <pclass="alert"></p>
            <input type="submit"value="INGRESAR">
        </form>
    </section>
</body>
</html>