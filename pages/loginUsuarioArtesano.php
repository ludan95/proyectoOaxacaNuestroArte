<?php
session_start();
if (!empty($_SESSION['active'])&&$_SESSION['tipoSession']=="artesano" ) {
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!--! Scrollreveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
        <!--! iconos-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     </head>

<body class="inicioSecion2">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.html">OaxacaNuestroArte</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll m-xl-auto" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="catalogo.php">Catalogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="altaArtesano.php">Alta Artesano</a>
                    </li>
                    
                </ul>

                <form class="d-flex">
                    <input class="form-control me-3" type="search" placeholder="¿Te gustaria buscar?" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>


    <!--! Inicio del formulario-->
        <div class="label_Formulario" style="min-height: 800px;">
            <div class="imagenlogin">
                <img src="../img/imgPageLogin/logoBlanco.png" width="20%" style="margin-top:25px;">
            </div>

            <form action="../php/loginArtesano.php" class="formulario needs-validation" novalidate method="post" id="contact_form " enctype="multipart/form-data">
                <h1 class="titulologin">Inicio de Sesion</h1>
                <div class="contenedor">
                    <div class="input-contenedor">
                        <i class="fas fa-envelope icon"></i>
                        <input name="correoElectronicoA" type="email" placeholder="Correo Electronico" required >
                        <div class="invalid-feedback">Dato incorrecto</div>
                    </div>

                    <div class="input-contenedor">
                        <i class="fas fa-key icon"></i>
                        <input name="passwordA" type="password" placeholder="Contraseña" required>
                        <div class="invalid-feedback">Dato incorrecto</div>

                    </div>
                    <div class="form-group">
                        <button type="submit" class=" button">Conectar <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                    <br>
                    <p class="color-texto-blanco">¿No tienes una cuenta? <a class="link" href="altaUsuario.html" class="linkRegistrar">Registrarse </a></p>
                </div>
            </form>
        </div>
    <!--? Fin formulario -->

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
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

    <!-- ? Boostrap  Añadimos los scrips JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="js/archivo.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

</body>

</html>