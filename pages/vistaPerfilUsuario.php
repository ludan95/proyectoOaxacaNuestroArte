<?php
session_start();
if (!empty($_SESSION['active'])) {
} else {
  header("Location:../index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>proyectoOaxacaNuestroArte</title>
  <!--! Fuente-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
  <!--! Boostrap  Añadimos el link al archivo-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--! Archivo css local-->
  <link rel="stylesheet" href="../css/styles.css">
  <!--! Scrollreveal-->
  <script src="https://unpkg.com/scrollreveal"></script>
  <!--! iconos-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>
  <!--! Agregamnos las opciones de navegacion-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">OaxacaNuestroArte</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll m-xl-auto" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link ">Login</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="¿Qué te gustaria buscar?" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
  <!--! termina donde se agrega la barra de navegacion-->
  <header style="min-height: 800px;" class="tituloCatalogo ">
    <div class="row justify-content-md-center ">
      <div class="col col-lg-2 row-cols-6">
        <div class="estilo_borde1 ">
          <div class="div_imagen ">
            <!--<img src="../img/imgPerfiles_Usuarios/2691f5da63.jpg" alt="" style="width:100%; height:100%;">-->
            <img width="250px" src="<?php echo $_SESSION['imagen']; ?>">
          </div>

          <div>
            <h5><?php echo $_SESSION['nombreCliente']; ?></h5>
          </div>
        </div>
      </div>

      <div class="col col-lg-5 estilo_completo ">
        <div class="estilo_borde2 row-cols-1">
          <h4>Perfil publico</h4>
          <h5>Informacion personal</h5>
        </div>

        <div class="estilo_borde3 tamanio_alto2 row-cols-5 color-texto-blanco">
          <br>
          <label style="margin-left: 20px;">Nombre </label>
          <br>
          <input style="margin-left: 30px;" type="text" readonly=»readonly» value="<?php echo $_SESSION['nombreCliente']; ?>" />
          <br>
          <br>
          <label style="margin-left: 20px;">Apellido </label>
          <br>
          <input style="margin-left: 30px;" type="text" readonly=»readonly» value="<?php echo $_SESSION['apellidoCliente']; ?>" />
          <br>
          <br>
          <label style="margin-left: 20px;">correo electronico </label>
          <br>
          <input style="margin-left: 30px;" type="text" readonly=»readonly» value="<?php echo $_SESSION['emailCliente']; ?>" />
          <br>
          <br>
          <label style="margin-left: 20px;">Contraseña </label>
          <br>
          <input style="margin-left: 30px;" type="text" readonly=»readonly» value="********" />
        </div>

        <div class="estilo_borde2 row-cols-1 css_centrar">
          <div style="margin-top: 5px;">
            <form action="../php/cerrarSesion.php">
              <button type="submit" class="btn btn-light col-md-4" ">Desconectar <span class=" glyphicon glyphicon-send"></span></button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </header>
  <!-- Section-->
  <!-- Footer
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer> -->
  <!-- Bootstrap core JS-->

  <!--? inicio Footer -->

  <footer class="bg-light text-black container-fluid text-center">
    <nav class="row ">
      <ul class="col-3" style="margin-top:25px; margin-bottom: -30px;">
        <a href="">
          <img width="175px" src="../img/iconosinfondo.png" class="mr-2" alt="Logo NuestroArte">
        </a>
      </ul>

      <ul class="col-6 " style="margin-top:25px;">
        <p class="text-black">Ubicacion</p>
        <a href=""><i class="fa-solid fa-location-dot"></i> Oaxaca, Mexico</a>
        <br>
        <a href=""><i class="fa-solid fa-phone"></i> 00-0000-000-000</a>
        <br>
        <a href=""><i class="fa-solid fa-envelope"></i> Prueba@gmail.com</a>
      </ul>

      <ul class="col-3" style="margin-top:25px;">
        <p class="text-black">Redes SoCiales</p>
        <a href=""><i class="fa-brands fa-facebook"></i> Facebook</a>
        <br>
        <a href=""><i class="fa-brands fa-twitter"></i> Twitter</a>
        <br>
        <a href=""><i class="fa-brands fa-instagram"></i> Instagram</a>
        <br>
        <a href=""><i class="fa-brands fa-pinterest"></i> Pinterest</a>
      </ul>
      <font size="2"">&#169; 2022. Programacion Web, ITSTE.</font>    
                    </nav>               
  </footer>
        <!--? Fin footer-->

    <!--! Boostrap  Añadimos los scrips JS-->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>