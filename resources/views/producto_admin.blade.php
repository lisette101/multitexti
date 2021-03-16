<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="diamond.html"><i class="dropdown-item" href="#"><i class="fa fa-gem"> </i> DIAMOND </i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="diamond.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="envio.html">Envios</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('formulario_perfil') }}"> <i class="fa fa-user-circle"> </i>  Perfil</a>
                        <a class="dropdown-item" href="{{ route('compras') }}"><i class="fa fa-shopping-cart"> </i> Compras </a>
                        <a class="dropdown-item" href="envio.html"><i class="fa fa-shipping-fast"> </i> Envios </a>
                        <a class="dropdown-item" href="catalogo.html"><i class="fa fa-images"> </i> Catalogo </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('formulario_perfil') }}">Clientes</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h5><a class="btn btn-info float-right" href="formulario_productos.html" role="button">Nuevo producto</a>Productos </h5>
            </div>

            <div class="container ">
                <div class="row">
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/c1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Collar arabe: Lindo collar con inscripciones arabes para dama de oro de 24 kilates y peso de 280 g.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/c2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Collar CHANNEL: Lindo collar para dama de oro de 24 kilates con un peso de 200 g.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span> </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/c3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Collar monedas españolas: Collar para dama de con 24 monedas españolas de plata.</p>

                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/r1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Reloj RSW: Reloj para caballero color negro con detalles en oro de 14 kilates y correa de piel.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/r2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Reloj Pink: Lindo reloj para dama color melon con detalles en blanco hielo y correa de metal.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/p1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Pulsera DIAMOND: Linda pulsera para dama con incrustraciones de diamantes y detalles en oro.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/p2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Pulsera Plata: Linda pulsera de plata para dama con detalles en oro blanco de 8 kilates.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/p3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Pulsera Exotica: Linda pulsera con piedras exoticas talladas y pulidas con liston de oro.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/p4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Pulsera espiral: Linda pulsera en forma de espiral para dama hecha con piedras exoticas.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/a1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Anillo continente: Lindo anillo de plata para dama con piedra verde agua en forma de continente colocada en el centro.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/a2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Anillo corona: Lindo anillo de oro para dama en forma de corona con incrustaciones de piedras exoticas.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/a3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Anillo 3 caminos: Lindo anillo de plata para dama con incrustacion de 3 piedras preciosas en el centro.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/a4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Anillo Flor: Lindo anillo para dama en forma de flor con oro de 24 kilates y una perla en el centro.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/d1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Diadema reina: Linda diadema para dama bañada en oro de 14 kilates en forma de corona.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 18rem;">
                            <img src="img_productos/d2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Corona perla: Linda corona para dama en oro blanco y con incrustaciones de perlas.</p>
                                <a class="btn btn-dark float-right" href="modificar_productos.php" role="button">Modificar</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
