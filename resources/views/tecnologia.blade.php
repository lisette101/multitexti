<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multitexti</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
</head>
<body  background="img/fondo-abstracto-formas-blancas_79603-1362.jpg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('multitexti') }}"><i class="dropdown-item" href="#"><i class="fa fa-gem"> </i> MULTITEXTI</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('multitexti') }}" >Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tecnologia') }}" >Tecnología</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorías
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('perfil') }}"> <i class="fa fa-user-circle"> </i>  Perfil</a>
                        <a class="dropdown-item" href="{{ route('compras') }}"><i class="fa fa-shopping-cart"> </i> Compras </a>
                        <a class="dropdown-item" href="{{ route('envio') }}"><i class="fa fa-shipping-fast"> </i> Envío </a>
                        <a class="dropdown-item" href="{{ route('catalogo') }}"><i class="fa fa-images"> </i> Catálogo </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registro') }}">Registrarse</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Búsqueda " aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Búsqueda</button>
            </form>
        </div>
    </nav>
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-carousel">
                        <ul>
                            <li>
                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                    </ol>


                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <img src="img/telas-inteligentes-futuro-generos-textiles.jpg" class="d-block w-100" alt="..." width="400" height="350">
                                        <div class="carousel-caption d-none d-md-block">
                                          <h1>Tecnología </h1>
                                          <font color="Negro">

                                        </font>
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <img src="img/descarga.jpg" class="d-block w-100" alt="..." width="400" height="350">
                                        <div class="carousel-caption d-none d-md-block">



                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <img src="img/Pailungmachine.jpg" class="d-block w-100" alt="..."width="400" height="350">
                                        <div class="carousel-caption d-none d-md-block">

                                        </div>
                                      </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="row">

                              <!-- Grid column -->
                              <div class="col-lg-4 col-md-12">

                                <!--Card Wider-->
                                <div class="card card-cascade">

                                  <!--Card image-->
                                </div>
                              </div>
                            </div>




                                        <h5 align="right">¿Cómo trabajamos en Multitexti?</h5>
                                        <p align="right">Tenemos una evolución en el proceso de corte y  una revolución en el sistema</p>
                                           <p align="right"> con
                                            la nueva máquina automática de corte para telas Audaces Neocut A20
                                            </p>
                                        <img src="img/p-image-02.png" alt="" >
                                        <p align="left">El tiempo se volvió un aliado, y el aumento de la productividad una consecuencia.</p>
                                        <p align="left">  Reduce el desperdicio de material; la agilidad y la calidad</p>
                                        <p align="left"> ganaron niveles altísimos, las tizadas son más precisas y compactas.
                                        </p >
                                    </div>

                                    <img src="img/Techtextil-620x330.jpg" alt="" align="right">

    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    &copy; <a href="{{ route('multitexti') }}">Multitexti</a> 2021
                    <!-- Don't Remove/Edit this. If you remove this you don't have permission to use this template. -->
                    Diseñado por <a href="">EL PEPE</a>
                    <!-- So Please don't remove this -->
                </div>
            </div>
        </div>
    </footer>

</body>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mdb.min.js"></script>


</html>
