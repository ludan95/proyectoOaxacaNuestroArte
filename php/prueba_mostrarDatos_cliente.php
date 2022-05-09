<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Clientes</h1>

    <table border="1" width="80%" align="center">
        <tr>
            <th>Id_Cliente</th>
            <th>nombre_C</th>
            <th>apellidos</th>
            <th>Correo</th>
            <th>img</th>
            <th>contraseñaa</th>
            <th>id_direccion</th>
        </tr>
        <?php
            require 'conexion.php';
            $consulta= mysqli_query($conexion, "SELECT * FROM cliente");
            while ($fila= mysqli_fetch_array ($consulta)){
                echo '<tr>';
               echo '<td>'.$fila['id_cliente_usuario'].'</td>';
               echo '<td>'.$fila['nombre_cliente'].'</td>';
               echo '<td>'.$fila['apellidos_cliente'].'</td>';
               echo '<td>'.$fila['correo_electronico'].'</td>';
               echo '<td>'.$fila['img'].'</td>';
               echo '<td>'.$fila['contrasenia_usuario'].'</td>';
               echo '<td>'.$fila['id_direccion']. '</td>';
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>