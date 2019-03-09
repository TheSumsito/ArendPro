<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- BUSQUEDA -->
    <meta name="keywords" content="Tipos: Enmarcaciones Cuadros Cajas_Decorativas Arte Renovación Pinturas Oleo Retratos Crewuel Marcos">
    <meta name="description" content="Somos una Empresa con más de 30 Años en el Arte de las Enmarcaciones y Decoraciones . Seguimos pensando y creando para ti, haciendo realidad tus sueños y tus proyectos">
    <meta name="author" content="Marcelo Jara">


    <!-- COMPLEMENTOS -->
    <?php

        # IMPORTACION BOOTSTRAP
        include_once("complementos/complementos.php");

        # VALIDACIONES
        include_once("acciones/validaciones.php");
    ?>


    <!-- NOMBRE PESTAÑA -->
    <title>Contactanos</title>

</head>

<body>

    <!-- ENCABEZADO -->
    <?php   
        include_once("complementos/encabezado.php")
    ?>

    <center>
        <!-- MENU -->
        <div class="fixed-top position-sticky">
            <nav class="navbar navbar-expand-sm navbar-dark bg-danger" data-toggle="affix">
                <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample11"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-center" id="navbarsExample11">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link fuente-menu" style="font-size: 1.5rem" href="index">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fuente-menu" style="font-size: 1.5rem" href="marcos">Marcos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fuente-menu" style="font-size: 1.5rem" href="molduras">Molduras</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fuente-menu" style="font-size: 1.5rem" href="#" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Nuestro Trabajo
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item texto" style="font-size: 1.2rem" href="crewuel">En Crewuel</a>
                                    <a class="dropdown-item texto" style="font-size: 1.2rem" href="oleo">En Oleo</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item texto" style="font-size: 1.2rem" href="cajas">Cajas Decorativas</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item texto" style="font-size: 1.2rem" href="retratos">Retratos</a>
                                    <a class="dropdown-item texto" style="font-size: 1.2rem" href="cuadros">Cuadros</a>
                                </div>
                            </li>
                            <li clas="nav-item">
                                <a class="nav-link fuente-menu" style="font-size: 1.5rem" href="taller">Nuesto
                                    Taller</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fuente-menu" style="font-size: 1.5rem" href="contactanos">Contactanos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <!-- MAPA GOOGLE -->
        <nav class="nav">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.635369160498!2d-70.70373428484103!3d-33.58881538073453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d9597df10583%3A0x344e466a4b081b88!2sFreire+191%2C+San+Bernardo%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1547171142884"
                width="1530" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </nav>
        <br>


        <!-- FORMULARIO -->
        <form id="formulario" method="POST" action="acciones/enviar_correo.php" autocomplete="off">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6">
                        <div class="col-md-12">

                            <!-- SOLO INGRESO DE LETRAS EN LAS CAJAS, NADA DE NUMEROS -->
                            <script>
                            function val(e) {
                                tecla = (document.all) ? e.keyCode : e.which;
                                if (tecla == 8) return true;
                                patron = /[A-Za-z ]/;
                                te = String.fromCharCode(tecla);
                                return patron.test(te);
                            }
                            </script>

                            <!-- TITULO  -->
                            <br>
                            <h3 class="text-center titulo-pagina"><span style="color: red">Contactanos</span> Para Mas
                                Información</h3>
                            <hr style="background-color: black">
                            <br>

                            <!-- NOMBRE -->
                            <div class="form-group">
                                <div class="col-8">
                                    <p class="texto" style="font-size: 1.5rem">Nombre (<span style="color: red">Obligatorio</span>):</p>
                                    <input type="text" name="txtNombre" id="txtNombre" class="form-control"
                                        style="text-align: center" placeholder="Ingrese su nombre"
                                        onkeypress="return val(event)">
                                </div>
                            </div>
                            <br>

                            <!-- APELLIDO -->
                            <div class="form-group">
                                <div class="col-8">
                                    <p class="texto" style="font-size: 1.5rem">Apellido (<span style="color: red">Obligatorio</span>):</p>
                                    <input type="text" name="txtApellido" id="txtApellido" class="form-control"
                                        style="text-align: center" placeholder="Ingrese su apellido"
                                        onkeypress="return val(event)">
                                </div>
                            </div>
                            <br>

                            <!-- TELEFONO CONTACTO -->
                            <div class="form-group">
                                <div class="col-8">
                                    <p class="texto" style="font-size: 1.5rem">Telefono de contacto (<span style="color: red">Obligatorio</span>):</p>
                                    <input type="number" class="form-control" style="text-align: center"
                                        name="txtTelefono" id="txtTelefono" placeholder="Casa/Celular/Oficina">
                                </div>
                            </div>
                            <br>

                            <!-- CORREO ELECTRONICO -->
                            <div class="form-group">
                                <div class="col-8">
                                    <p class="texto" style="font-size: 1.5rem">Correo electronico (<span style="color: red">Obligatorio</span>):</p>
                                    <input type="text" class="form-control" style="text-align: center" name="txtCorreo"
                                        id="txtCorreo" placeholder="Ingrese su correo">
                                </div>
                            </div>
                            <br>

                            <!-- MENSAJE -->
                            <div class="form-group">
                                <div class="col-8">
                                    <p class="texto" style="font-size: 1.5rem">Mensaje (<span style="color: red">Obligatorio</span>):</p>
                                    <textarea type="text" name="txtMensaje" id="txtMensaje" rows="4"
                                        class="form-control" style="text-align: center"
                                        placeholder="Ingrese un mensaje"></textarea>
                                </div>
                            </div>
                            <br>

                            <!-- BOTON ENVIAR -->
                            <input type="submit" class="btn btn-danger" value="Enviar">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br>



        <!-- LOGO -->
        <div class="nav">
            <div class="container-fluid col-md-auto">
                <br>
                <img src="static/img/logo_2.jpg" width="40%">
            </div>
        </div>
        <br>

        <!-- FOOTER -->
        <?php
            include_once("complementos/footer.php")
        ?>
    </center>

</body>

</html>