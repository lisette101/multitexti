<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multitexti</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="diamond.html"><i class="dropdown-item" href="#"><i class="fa fa-gem"> </i> MULTITEXTI </i></a>
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
    <div class="row justify-content-center">
        <div class="col-md-8">
         <div class="card testimonial-card">
          <div class="card-up rainy-ashville-gradient">
          </div>
          <div class="avatar mx-auto"><img src="img/yo.jpg" class="rounded-circle img-responsive" alt="Example photo">
            <div class="card-body">
              </div><div class="card">
                <div class="card-header">
                  <h5><a class="btn btn-info float-right" href="perfil.html" role="button">Guardar</a>Mi informacion </h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="paterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="paterno" name="paterno">
                    </div>
                    <div class="form-group">
                        <label for="materno">Apellido Materno</label>
                        <input type="text" class="form-control" id="materno" name="materno">
                    </div>
                    <div class="form-group">
                        <label for="rfc">RFC</label>
                        <input type="text" class="form-control" id="rfc" name="rfc">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Numero de telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="correr">Correo Electronico</label>
                        <input type="email" class="form-control" id="correo" name="correo">
                    </div>
                </div>
              </div>
            </div>
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
</body>
</html>
