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
    <!-- Horizontal Steppers -->
 <div class="row">
    <div class="col-md-12">

    <!-- Stepers Wrapper -->
    <ul class="stepper stepper-horizontal">

        <!-- First Step -->
        <li class="warning">
        <a href="#!">
            <span class="circle"><i class="fas fa-dolly-flatbed"></i></span>
            <span class="label">En preparación </span>
        </a>
        </li>

        <!-- Second Step -->
        <li class="active">
        <a href="#!">
            <span class="circle"><i class="fas fa-truck"></i></span>
            <span class="label">En camino</span>
        </a>
        </li>

        <!-- Third Step -->
        <li class="completed">
        <a href="#!">
            <span class="circle"><i class="fas fa-check"></i></span>
            <span class="label">Entregadó</span>
        </a>
        </li>

    </ul>
    <!-- /.Stepers Wrapper -->

    </div>
</div>
<!-- /.Horizontal Steppers -->
<!-- Editable table -->
<div class="row justify-content-center">
    <div class="col-md-8">
<div class="card">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Tus Envios </h3>
    <div class="card-body">
    <div id="table" class="table-editable">
        <span class="table-add float-right mb-3 mr-2"><a href="e" class="text-success"></a>
            <a class="btn btn-info float-right" href="{{ route('envio_formulario') }}" role="button">Añadir</a></span>
        <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
            <tr>
            <th class="text-center">Numero de la compra</th>
            <th class="text-center">Dirección</th>
            <th class="text-center">Fecha </th>
            <th class="text-center">Cliente</th>
            <th class="text-center">Numero de producto</th>
            <th class="text-center">Remove</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td class="pt-3-half" contenteditable="true"></td>
            <td class="pt-3-half" contenteditable="true"> </td>
            <td class="pt-3-half" contenteditable="true"></td>
            <td class="pt-3-half" contenteditable="true"></td>
            <td class="pt-3-half" contenteditable="true"></td>
                <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                    aria-hidden="true"></i></a></span>
            </td>
            <td>
                <span class="table-remove"><button type="button"
                    class="btn btn-danger btn-rounded btn-sm my-0">Cancelar </button></span>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
    </div>
</div>
<!-- Editable table -->
</div>
</div>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mdb.min.js"></script>
