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
    <title>Nuestro Taller</title>

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
                                <a class="nav-link active fuente-menu" style="font-size: 1.5rem" href="taller">Nuesto
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
        <br>

        <!-- TITULO -->
        <div class="container">
            <br>
            <h2 class="titulo-pagina">Nuestro <span style="color: red">Taller</span></h1>
                <hr style="background-color: black">
        </div>
        <br>


        <!-- GALERIA FOTOS TALLER -->
        <div class="gallery container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/01.jpg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/02.jpg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/03.jpg" width="100%" data-lity></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/04.jpg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/05.jpg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/06.jpg" width="100%" data-lity></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/07.jpg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/08.jpg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/09.jpg" width="100%" data-lity></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/010.jpg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/011.jpg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/012.jpg" width="100%" data-lity></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/013.jpg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/014.jpg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/015.jpeg" width="100%" data-lity></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/016.jpg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/017.jpeg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/018.jpeg" width="100%" data-lity></a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/019.jpg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/020.jpg" width="100%" data-lity></a>
                </div>
                <div class="col-md-4 col-sm-auto img-contenedor">
                    <a href=""><img src="static/img/taller/021.jpg" width="100%" data-lity></a>
                </div>
            </div>
        </div>
        <br>



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