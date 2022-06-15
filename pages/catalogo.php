<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>proyectoOaxacaNuestroArte</title>
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!--! Fuente-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet" />
  <!--! Boostrap  Añadimos el link al archivo-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!--! Archivo css local-->
  <link rel="stylesheet" href="../css/styles.css" />
  <!--! Scrollreveal-->
  <script src="https://unpkg.com/scrollreveal"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="catalogo">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.html">OaxacaNuestroArte</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarScroll" aria-controls="navbarScroll"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll
          m-xl-auto" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="catalogo.php">Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pages/prueba3d.html">Prueba3D</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
              href="#" role="button" aria-expanded="false">Unirse</a>
            <ul class="dropdown-menu">
              <li><a href="pages/altaUsuario.php">Cliente</a></li>
              <li><a href="pages/altaArtesano.php">Artesano</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
              href="#" role="button" aria-expanded="false">Login</a>
            <ul class="dropdown-menu">
              <li><a href="pages/loginUsuarioCliente.php">Cliente</a></li>
              <li><a href="pages/loginUsuarioArtesano.php">Artesano</a></li>
            </ul>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
              href="#" role="button" aria-expanded="false">Perfil</a>
            <ul class="dropdown-menu">
              <li><a href="pages/vistaPerfilUsuario.php">Cliente</a></li>
              <li><a href="pages/vistaPerfilArtesano.php">Artesano</a></li>
            </ul>
          </li>
        </ul>

        <form class="d-flex">
          <input class="form-control me-3" type="search" placeholder="¿Te gustaria buscar?" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Header-->
  <header class="tituloCatalogo">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">ARTESANIAS DE OAXACA</h1>
        <p class="lead fw-normal text-white-50 mb-0">
          "Regalar algo hecho a mano, significa que no ha sido fabricado en
          serie, por eso cada producto que encuentres aqui es diferente y
          unico"
        </p>
      </div>
    </div>
  </header>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php
            require '../php/conexion.php';
            $consulta= mysqli_query($conexion, "SELECT * FROM artesania");
            while ($row= mysqli_fetch_array ($consulta)){
        ?>  
        <!--? Mostrar Artesania -->
          <div class="col mb-5">
            <div class="card h-100">
              <!-- Product image-->
              <div class="row">
                <!--! ImagenArtesania  -->
                <div class="row-5">
                <?php if($row['img_3d']!='no'){ ?>
                    <div class="caja">
                      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="staticBackdropLabel" style="color: black;">Observar Artesania</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <model-viewer bounds="tight" enable-pan src="<?php echo $row['img_3d']?>" ar
                              ar-modes="scene-viewer webxr quick-look" camera-controls environment-image="neutral"
                              poster="poster.webp" shadow-intensity="1">
                              <div class="progress-bar hide" slot="progress-bar">
                                <div class="update-bar"></div>
                              </div>
                              <div id="ar-prompt">
                                <img src="https://modelviewer.dev/shared-assets/icons/hand.png">
                              </div>
                            </model-viewer>
                          </div>
                        </div>
                      </div>
                    <?php }?>
                    <img class="card-img-top"  src="<?php echo $row['img']?>" />
                    <?php if($row['img_3d']!='no'){ ?>
                    
                    <div class="texto">
                      <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Ver 3D
                      </button>
                      Esta artesania permite una vista en 3D
                    </div>
                  </div>
                  <?php }?>
                </div>
                <!--! ImagenArtesania  -->
                <!--? Descripcion Artesania -->
                <?php if($row['img_3d']!='no'){ ?>
                  <div class="row-6" style="margin: 200px 0 0 10px;">
                <?php }else{?>
                  <div class="row-6">
                  <?php }?>
                  <div class="card-body p-4">
                    <div class="text-center">
                      <!-- Product name-->
                      <h5 class="subtitulo"><?php echo $row['nombre']?></h5>

                      <!-- Product price-->
                      $<?php echo $row['precio']?>.00
                    </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                      <a class="btn btn-outline-dark mt-auto" href="productoCompra.php">Detalles</a>
                    </div>
                  </div>
                </div>
                <!--? Descripcion Artesania -->
              </div>
            </div>
          </div>
        <!--? Mostrar Artesania -->
        <?php
            }
        ?>
      </div>
    </div>
  </section>
  <!-- Footer
            <!--? inicio Footer -->

  <footer class="bg-light text-black container-fluid text-center">
    <nav class="row">
      <ul class="col-3" style="margin-top:25px; margin-bottom: -30px;">
        <a href="">
          <img width="155px" src="../img/iconosinfondo.png" class="mr-2" alt="Logo NuestroArte">
        </a>
      </ul>

      <ul class="col-6" style="margin-top:25px;">
        <p class="text-black">Ubicacion</p>
        <a href=""><i class="fa-solid fa-location-dot"></i> Oaxaca, Mexico</a>
        <br>
        <a href=""><i class="fa-solid fa-phone"></i> 00-0000-000-000</a>
        <br>
        <a href=""><i class="fa-solid fa-envelope"></i> Prueba@gmail.com</a>
      </ul>

      <ul class="col-3" style="margin-top:25px;">
        <p class="text-black">Redes Sociales</p>
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
    <!-- Bootstrap core JS-->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

</body>

</html>