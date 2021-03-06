<?php
session_start();
if (!empty($_SESSION['active']) && $_SESSION['tipoSession'] == "artesano") {
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
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../index.html">Oaxaca Nuestro Arte</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Mis productos
                        <span class="badge bg-dark text-white ms-1
                                rounded-pill">6</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Product section-->
    <header style="min-height: 750px;" class="tituloCatalogo ">
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../img/imgPageAltaProducto/bordado.jpg" alt="..." /></div>

                    <!-- Agregar datos-->
                    <div class="col-md-6 mt-1 m-lg-auto">
                        <div class="header-content-right">
                            <h1 class="display-7 fw-bolder">Añadir Nuevo producto</h1>
                            <form class="needs-validation" action="../php/agregarArtesania.php" method="POST" enctype="multipart/form-data" novalidate>
                                <fieldset>
                                    <br>
                                    <label class="col-md-4 control-label label_Formulario">Imagen de Perfil</label>
                                    <br>
                                    <div class="custom-file">
                                        <input type="file" name="imagenUsuario" accept=,.jpg,.png" class="custom-file-input" multiple>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="col-md-4 control-label
                                            label_Formulario">Nombre</label>
                                        <div class="col-md-11 inputGroupContainer">
                                            <input name="nombreArtesania" placeholder="Nombre de la artesania Ej. Flor" class="form-control" type="text" required>
                                            <div class="invalid-feedback">Dato incorrecto</div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="col-md-4 control-label
                                            label_Formulario">Material</label>
                                        <div class="col-md-11 inputGroupContainer">
                                            <input name="materialArtesania" placeholder="Material de elaboración" class="form-control" type="text" required>
                                            <div class="invalid-feedback">Dato incorrecto</div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="col-md-4 control-label
                                            label_Formulario">Color</label>
                                        <div class="col-md-11 inputGroupContainer">
                                            <input name="colorArtesania" placeholder="Color predominante" class="form-control" type="text" required>
                                            <div class="invalid-feedback">Dato incorrecto</div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="col-md-4 control-label
                                            label_Formulario">Precio</label>
                                        <div class="col-md-11 inputGroupContainer">
                                            <input name="precioArtesania" placeholder="Precio del producto P/U" class="form-control" type="number" required>
                                            <div class="invalid-feedback">Dato incorrecto</div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="col-md-4 control-label
                                            label_Formulario">Cantidad en almacen:</label>
                                        <div class="col-md-11 inputGroupContainer">
                                            <input name="cantidadVenderArtesania" placeholder="No de piezas en exitencia" class="form-control" type="number" required>
                                            <div class="invalid-feedback">Dato incorrecto</div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="col-md-4 control-label
                                            label_Formulario">Categoria: </label>
                                        <div class="col-md-11 inputGroupContainer">
                                            <select name="categoriaArtesania" class="form-control selectpicker" required>
                                                <option value='' disabled selected>Selecciona el tipo de artesania</option>
                                                <option>Madera</option>
                                                <option>Ceramica</option>
                                                <option>Palma</option>
                                                <option>Textil</option>
                                                <option>Joyeria</option>
                                            </select>
                                            <div class="invalid-feedback">Dato incorrecto</div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="col-md-4 control-label
                                            label_Formulario">Oferta: </label>
                                        <div class="col-md-11 inputGroupContainer">
                                            <input name="ofertaArtesania" placeholder="Cantidad de descuento en %" class="form-control" type="number" required>
                                            <div class="invalid-feedback">Dato incorrecto</div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label class="col-md-4 control-label
                                            label_Formulario">Descripcion: </label>
                                        <div class="col-md-11 inputGroupContainer">
                                            <input name="descripcionArtesania" placeholder="Breve descripción del  producto" class="form-control" type="text" style=" HEIGHT: 75px;" required>
                                            <div class="invalid-feedback">Dato incorrecto</div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label
                                            label_Formulario"></label>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn
                                                btn-light">Agregar <span class="glyphicon
                                                    glyphicon-send"></span></button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>

                            <br>


                        </div>

                    </div>

                </div>
            </div>
        </section>
    </header>
    <!--? inicio Footer -->

    <footer class="bg-light text-black container-fluid text-center">
        <nav class="row ">
            <ul class="col-3" style="margin-top:25px; margin-bottom: -30px;">
                <a href="">
                    <img width="175px" src="../img/iconosinfondo.png" class="mr-2" alt="Logo NuestroArte">
                </a>
            </ul>

            <ul class="col-6 ">
                Ubicacion
                <br>
                <br>
                <a href=""><i class="fa-solid fa-location-dot"></i> Oaxaca, Mexico</a>
                <br>
                <a href=""><i class="fa-solid fa-phone"></i> 00-0000-000-000</a>
                <br>
                <a href=""><i class="fa-solid fa-envelope"></i> Prueba@gmail.com</a>
            </ul>

            <ul class="col-3">
                Redes SoCiales
                <br>
                <br>
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
            (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
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
        <!-- Bootstrap core JS-->
        <script
            src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
                </script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>

</body>

</html>