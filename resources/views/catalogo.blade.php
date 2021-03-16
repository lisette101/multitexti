
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
    <body>
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
                        <a class="nav-link" href="{{ route('ofertas') }}" >Ofertas</a>
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
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!--Grid row-->

    <div class="row mb-5">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <!--Grid column-->

        <div class="col-lg-3 col-md-6 mb-4">

            <!--Collection card-->

            <div class="card collection-card z-depth-1-half">
                <!--Card image-->
                <div class="view zoom">
                    <img src="img/fb-de-tela-erp-textil-control-de-almacenes-350x500.jpg" class="img-fluid" alt=""  width="425" height="350">
                    <div class="stripe dark">
                        <a href="{{ route('produccion') }}">
                            <p>Producción
                                <i class="fas fa-angle-right"></i>
                            </p>
                        </a>
                    </div>
                </div>
                <!--Card image-->
            </div>
            <!--Collection card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-80 mb-10">

            <!--Collection card-->
            <div class="card collection-card z-depth-1-half">
                <!--Card image-->
                <div class="view zoom">
                    <img src="img/sudadera.png" class="img-fluid" alt=""  align="center" width="350" height="100" >
                    <div class="stripe dark">
                        <a href="{{ route('especiales') }}">
                            <p>Diseños especiales

                                <i class="fas fa-angle-right"></i>
                            </p>
                        </a>
                    </div>
                </div>
                <!--Card image-->
            </div>
            <!--Collection card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-80 mb-10">

            <!--Collection card-->
            <div class="card collection-card z-depth-1-half">
                <!--Card image-->
                <div class="view zoom">
                    <img src="img/171023Calle-VeinteBlog1.png" class="img-fluid" alt="" align="center"  width="425" height="350">
                    <div class="stripe light">
                        <a href="{{ route('telas') }}">
                            <p>Telas sintéticas
                                <i class="fas fa-angle-right"></i>
                            </p>

                        </a>
                    </div>
                </div>
                <!--Card image-->
            </div>

        </div>
        <!--Grid column-->
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


        <!--Fourth column-->
        <div class="col-lg-3 col-md-6 mb-4">

            <!--Collection card-->
            <div class="card collection-card z-depth-1-half">
                <!--Card image-->
                <div class="view zoom">
                    <img src="img/D-CRC-BC.png" class="img-fluid" alt="">
                    <div class="stripe light">
                        <a href="{{ route('playeras') }}">
                            <p>Playeras
                                <i class="fas fa-angle-right"></i>
                            </p>
                        </a>
                    </div>
                </div>
                <!--Card image-->
            </div>
            <!--Collection card-->

        </div>

        <div class="col-lg-3 col-md-6">

            <!--Collection card-->
            <div class="card collection-card z-depth-1-half">
                <!--Card image-->
                <div class="view zoom">
                    <img src="img/roto.jpg" class="img-fluid" alt=""  width="350" height="50">
                    <div class="stripe dark">
                        <a href="{{ route('pantalones') }}">
                            <p>Pantalones
                                <i class="fas fa-angle-right"></i>
                            </p>
                        </a>
                    </div>
                </div>
                <!--Card image-->
            </div>
            <!--Collection card-->
        </div>
        <!--Fourth column-->
        <div class="col-lg-3 col-md-6ñ">

            <!--Collection card-->
            <div class="card collection-card z-depth-1-half">
                <!--Card image-->
                <div class="view zoom">
                    <img src="img/chamarras.jpg" class="img-fluid" alt=""  width="425" height="350">
                    <div class="stripe light">
                        <a href="{{ route('sudaderas') }}">
                            <p>Chamarras y sudaderas
                                <i class="fas fa-angle-right"></i>
                            </p>
                        </a>
                    </div>
                </div>
                <!--Card image-->
            </div>
            <!--Collection card-->

        </div>
        <!--Five column-->
    </div>

    <body background="img/diamonds-2142417_1280.jpg"></body>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mdb.min.js"></script>
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
</html>
