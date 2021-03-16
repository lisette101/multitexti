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
    <div class="row justify-content-center">
        <div class="col-md-8">
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Tus Envíos </h3>
        <div class="card-body">
        <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"><a href="e" class="text-success"></a>
                <a class="btn btn-info float-right" href="{{ route('envio') }}" role="button">Guardar</a></span>
            <table class="table table-bordered table-responsive-md table-striped text-center">
            </table>
            <div class="card-body">
                <div class="form-group">
                    <label for="nombre">Numero de compra</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="paterno">Dirección</label>
                    <input type="text" class="form-control" id="paterno" name="paterno">
                </div>
                <div class="form-group">
                    <label for="fecha_cita">Fecha de la cita</label>
                    <input type="date" class="form-control form-control-sm" id="fecha_cita" name="fecha_cita" aria-describedby="fechaHelp" min="2020-06-10">
                    <small id="fechaHelp" class="form-text text-muted">Selecciona la fecha de envio </small>
                </div>
                <div class="form-group">
                    <label for="rfc">Cliente</label>
                    <input type="text" class="form-control" id="rfc" name="rfc">
                </div>
                <div class="form-group">
                    <label for="paterno">Número de producto</label>
                    <input type="text" class="form-control" id="paterno" name="paterno">
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Editable table -->
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