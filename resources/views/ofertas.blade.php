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
                    <a class="nav-link" href="{{ route('ofertas') }}">Ofertas</a>
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
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-gem"> </i>Productos y servicios
                <h5><a class="btn btn-info float-right" href="{{ route('multitexti') }}" role="button">Regresar</a></h5>            </div>
            <div class="container ">
                <div class="row">
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/telas2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Telas de origen animal</p>
                                <button type="button"  href="formulario_compra.html" class="btn btn-dark">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/telas.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Telas de origen vegetal</p>
                                <button type="button" class="btn btn-dark">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/playera1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Playeras subliminales a ¡tú estilo!</p>
                                <button type="button" class="btn btn-dark">Comprar</button>
                            </div>
                        </div>
                    </div>
                    <div class="container ">
                        <div class="row">
                            <div class="col-md">
                                <div class="card" style="width: 19rem;">
                                    <img src="img/SB5000352596_2p.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Playeras cuello de tortuga </p>
                                        <button type="button"  href="formulario_compra.html" class="btn btn-dark">Comprar</button>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="col-md">
                                <div class="card" style="width: 18rem;">
                                    <img src="img/pans.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Pans</p>
                                        <button type="button" class="btn btn-dark">Comprar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card" style="width: 18rem;">
                                    <img src="img/Sudadera-negra-sin-personalizar.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">Sudaderas</p>
                                        <button type="button" class="btn btn-dark">Comprar</button>
                                    </div>
                                </div>
                            </div>
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

                    <script src="js/jquery-3.5.1.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/mdb.min.js"></script>
</body>
</html>
