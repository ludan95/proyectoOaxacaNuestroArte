<?php
session_start();
if(!empty($_SESSION['active'])&& $_SESSION['tipoSession']=="artesano"){
      require 'conexion.php';
    date_default_timezone_set("America/Mexico_City");
    $nombreArt= $_POST['nombreArtesania'];
    $materialArt= $_POST['materialArtesania'];
    $colorArt= $_POST['colorArtesania'];
    $precioArt= $_POST['precioArtesania'];
    $cantidadArt= $_POST['cantidadVenderArtesania'];
    $categoriaArt= $_POST['categoriaArtesania'];
    $ofertaArt= $_POST['ofertaArtesania'];
    $descripcionArtesania= $_POST['descripcionArtesania'];

  //!
  $filename= $_FILES['imagenArtesania']['name'];
  $sourceFoto      = $_FILES['imagenArtesania']['tmp_name'];
  $logitudPass    = 10;
  $newNameFoto    = substr( md5(microtime()), 1, $logitudPass);
  $explode        = explode('.', $filename);
  $extension_foto = array_pop($explode);
  $nuevoNameFoto  = $newNameFoto.'.'.$extension_foto;
  //Verificando si existe el directorio
  $dirLocal = "../img/imgArtesanias";
  if (!file_exists($dirLocal)) 
      mkdir($dirLocal, 0777, true);
  $miDir         = opendir($dirLocal); //Habro el directorio
  $imagenCliente = $dirLocal.'/'.$nuevoNameFoto;
  move_uploaded_file($sourceFoto, $imagenCliente);
  //!

    $imagDireccion= $imagenCliente;
    $insertar= "INSERT INTO artesania  VALUES (NULL, '$nombreArt', '$materialArt', '$colorArt', '$precioArt', '$cantidadArt', '$categoriaArt', '$imagDireccion', '$descripcionArtesania', '$ofertaArt');";
    $query= mysqli_query( $conexion, $insertar);

    $id_artesaniaValor=mysqli_query( $conexion, "Select * from artesania");
    $id_artesaniaValor= mysqli_num_rows($id_artesaniaValor);

    $id_artesano= $_SESSION['id_artesano'];
    $id_artesano=intval($id_artesano);

    $insertar2= "INSERT INTO detalle_artesania VALUES ( $id_artesano, $id_artesaniaValor, '$cantidadArt', '$precioArt', current_date )"; 
    $query2= mysqli_query( $conexion, $insertar2);

      if($query&&$query2){
      echo " <script> 
                alert('<?php echo $insertar2 ?>');
                location.href= '../pages/vistaPerfilArtesano.php';
            </script>";
    }else{
      echo " <script> alert('incorrecto') </script>";
    }
    mysqli_close($conexion);
}
else{
  header("Location: ../index.html");
}
?>