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
            <th>img</th>
            <th>imagen</th>
        </tr>

        <?php
            require 'conexion.php';
            $consulta= mysqli_query($conexion, "SELECT id_cliente_usuario,img FROM cliente");
            while ($row= mysqli_fetch_array ($consulta)){
        ?>
            <tr>
                <td> <?php echo $row['id_cliente_usuario']; ?></td>
                <td> <?php echo $row['img']; ?></td>
                <td>
                    <img width="100px" src="<?php echo $row['img']?>">
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
