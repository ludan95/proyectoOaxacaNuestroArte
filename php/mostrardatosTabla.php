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
            <th>precio</th>
            <th>imagen</th>
        </tr>

        <?php
            require 'conexion.php';
            $consulta= mysqli_query($conexion, "SELECT id_artesania,img,precio FROM artesania");
            while ($row= mysqli_fetch_array ($consulta)){
        ?>
            <tr>
                <td> <?php echo $row['id_artesania']; ?></td>
                <td> <?php echo $row['img']; ?></td>
                <td> <?php echo $row['precio']; ?></td>
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
