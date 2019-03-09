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
    ?>

    <!-- NOMBRE PESTAÑA -->
    <title>Bienvenidos a ArendPro</title>

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
                                <a class="nav-link active fuente-menu" style="font-size: 1.5rem" href="index">Inicio</a>
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
                                <a class="nav-link fuente-menu" style="font-size: 1.5rem" href="contactanos">Contactanos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- CAROUSEL -->
        <div id="carousel_1" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="static/img/carousel/1.jpg" class="d-block w-100 oscurecer-imagen">
                    <div class="carousel-caption">
                        <div class="full-width text-center">
                            <h2 class="borde-titulo text-white">BIENVENIDO</h2>
                            <h3 class="borde-texto text-white">Te Esperamos</h3>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="static/img/carousel/2.jpg" class="d-block w-100 oscurecer-imagen">
                    <div class="carousel-caption">
                        <div class="full-width text-center">
                            <span>
                                <h2 class="borde-titulo text-white">IMPRESIONAR</h2>
                            </span>
                            <span>
                                <h3 class="borde-texto text-white"> Lo mejor para tu hogar</h3>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="static/img/carousel/3.jpg" class="d-block w-100 oscurecer-imagen">
                    <div class="carousel-caption">
                        <div class="full-width text-center">
                            <span>
                                <h2 class="borde-titulo text-white">PIENSA EN GRANDE</h2>
                            </span>
                            <span>
                                <h3 class="borde-texto text-white">Un sueño hecho realidad</h3>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="static/img/carousel/4.jpg" class="d-block w-100 oscurecer-imagen">
                    <div class="carousel-caption">
                        <div class="full-width text-center">
                            <span>
                                <h2 class="borde-titulo text-white">INNOVAR</h2>
                            </span>
                            <span>
                                <h3 class="borde-texto text-white">Ven y renueva tus cuadros</h3>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel_1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel_1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>


        <!-- CUERPO PAGINA WEB -->
        <!----------------------->
        <!-- TITULO (QUIENES SOMOS) -->
        <div class="container">
            <h2 class="titulo-pagina">Quienes Somos</h2>
            <hr style="background-color: black">
        </div>

        <!--QUIENES SOMOS -->
        <div class="row container">
            <!-- TEXTO (QUIENES SOMOS) -->
            <div class="col-md-6">
                <h4 class="texto">
                    Somos una Empresa con más de 30 Años en el <span style="color: red">
                        Arte de las Enmarcaciones y Decoraciones
                    </span>. Seguimos pensando y creando para ti, haciendo realidad tus sueños y tus
                    proyectos, creemos en que nada es imposible, todo es posible cuando logramos el resultado final que
                    es
                    <span style="color: red">Tu Proyecto hecho Realidad</span>.</h4>
            </div>
            <!-- LOGO (QUIENES SOMOS) -->
            <div class="col-md-auto">
                <img src="static/img/logo_2.jpg" width="40%">
            </div>
        </div>
        <br>


        <!-- NUESTROS CLIENTES-->
        <div class="texto" style="background-color: #D0C7C7">
            <div class="container-fluid">
                <br>
                <h2 class="titulo-pagina">Nuestros Clientes</h2>
                <hr style="background-color: black">
            </div>

            <!-- TEXTO -->
            <div class="col-md-8 container-fluid">
                <h4 class="texto">Agradecemos a todos <span style="color: red">Nuestros Clientes</span> por
                    ser parte de nuestro rubro
                    laboral, Gracias a Ustedes nos complace seguir trabajando en esta hermosa area y asi nosotros
                    seguiremos
                    trabajando para que usted pueda sacar su lado Imaginativo y así <span style="color: red">Nosotros
                        poder
                        hacerlos Realidad</span>.</h4>
            </div>
            <br>
        </div>




        <!-- MEDIOS DE PAGO -->
        <!-- TITULO (MEDIOS DE PAGO) -->
        <div class="container">
            <br>
            <h2 class="titulo-pagina">Medios de Pago</h2>
            <hr style="background-color: black">
        </div>

        <!-- IMAGENES (MEDIOS DE PAGO) -->
        <div class="row container">
            <div class="col-md-4">
                <img src="static/img/pagos/01.png" width="100%">
            </div>
            <div class="col-md-4">
                <img src="static/img/pagos/02.png" width="60%">
            </div>
            <div class="col-md-4">
                <img src="static/img/pagos/03.png" width="110%">
            </div>
        </div>


        <!-- LOGO -->
        <div class="nav">
            <div class="container-fluid col-md-auto">
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