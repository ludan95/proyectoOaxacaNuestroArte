<?php
    require '../php/conexion.php';
    $consulta = mysqli_query($conexion, "SELECT * FROM compratemporal");
    while ($row = mysqli_fetch_array ($consulta)) {
        $id_artesania_Buscar = $row['id_artesania'];
    }
    
// <?php
// require '../php/conexion.php';
// $consulta = mysqli_query($conexion, "SELECT cantidad_vender FROM artesania WHERE id_artesania=1");
// $row = mysqli_fetch_array($consulta);
// echo $row['cantidad_vender'];
// 
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Paypal -->
    <script src="https://www.paypal.com/sdk/js?client-id=AaJWlsiPqIvYIoWdeFdgqnQc-K_BpXz01lT6OwSTP19XA6aRFTNV9rVYd3x-unt3iTcvTtGWKMryTLmU&components=YOUR_COMPONENTS&currency=MXN"></script>
</head>

<body>
    <!--! Agregamnos las opciones de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.html">OaxacaNuestroArte</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll
          m-xl-auto" style="--bs-scroll-height: 100px;">
           <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="catalogo.php">Catalogo</a>
          </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Unirse</a>
                        <ul class="dropdown-menu">
                            <li><a href="pages/altaUsuario.php">Cliente</a></li>
                            <li><a href="pages/altaArtesano.php">Artesano</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Login</a>
                        <ul class="dropdown-menu">
                            <li><a href="pages/loginUsuarioCliente.php">Cliente</a></li>
                            <li><a href="pages/loginUsuarioArtesano.php">Artesano</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Perfil</a>
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
    <!--! termina donde se agrega la barra de navegacion-->

    <!--! ventana dque muestra el producto a comprar-->
    <section id="Compra_producto" class="tituloCatalogo py-5 ">
        <?php
        require '../php/conexion.php';
        $consulta = mysqli_query($conexion, "SELECT * FROM artesania WHERE id_artesania='$id_artesania_Buscar'");
        while ($row = mysqli_fetch_array($consulta)) {
        ?>
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col">
                        <br>
                        <?php if ($row['img_3d'] != 'no') { ?>
                            <div class="caja">
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel" style="color: black;">Observar Artesania</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <model-viewer bounds="tight" enable-pan src="<?php echo $row['img_3d'] ?>" ar ar-modes="scene-viewer webxr quick-look" camera-controls environment-image="neutral" poster="poster.webp" shadow-intensity="1">
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
                            <?php } ?>
                            <img src="<?php echo $row['img'] ?>" width="400" height="400" />
                            <?php if ($row['img_3d'] != 'no') { ?>

                                <div class="texto">
                                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Ver 3D
                                    </button>
                                    Esta artesania permite una vista en 3D
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    
                    <div class="col">
                        <br>
                        <H2 class=""><?php echo $row['nombre'] ?></H2>
                        <h5 class="">Calificacion</h5>
                        <hr>
                        <h4 class="">$<?php echo $row['precio'] ?>.00</h4>
                        <hr>
                        <ul>
                            <li> Color: <?php echo $row['color_predominante'] ?></li>
                            <li> Material: <?php echo $row['material'] ?> </li>
                            <li> Categoria: <?php echo $row['categoria'] ?> </li>
                        </ul>
                        <hr>
                        <p class="color-texto-blanco"><?php echo $row['descripcion'] ?></p>
                    </div>

                    <div class="col">
                        <br>
                        <div class="card">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="">$<?php echo $row['precio'] ?>.00 </h3>
                                    <div id="apartado1"></div>
                                    <br>
                                    <input class="form-control text-center me-3" id="inputQuantity" type="number" value="1" style="max-width: 5rem" max="<?php require '../php/conexion.php';
                                                                                                                                                            $consulta = mysqli_query($conexion, "SELECT cantidad_vender FROM artesania WHERE id_artesania='$id_artesania_Buscar'");
                                                                                                                                                            $row = mysqli_fetch_array($consulta);
                                                                                                                                                            echo $row['cantidad_vender']; ?>" min="1" pattern="^[0-9]+" />
                                    <br>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Comprar
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel" style="color: black;">Observar Artesania</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div id="paypal-buttom-conteiner"></div>
                                                

                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php
        }
        ?>
    </section>

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
    
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
                <!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<script>
    paypal.Buttons().render('#paypal-buttom-container')
</script>
                

</body>

</html>