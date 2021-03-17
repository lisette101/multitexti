<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multitexti</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,400italic,600,300italic,300|Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">


		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.css" rel="stylesheet">
		<link href="css/owl.transitions.css" rel="stylesheet">

		<link href="css/style.css" rel="stylesheet">
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
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/bannertelas1.jpg" class="d-block w-100" alt="..." width="500" height="500">
            <div class="carousel-caption d-none d-md-block">
              <h1>Un mundo en telas</h1>
              <font color="Negro">
              <h2>Tecnología de punta </h2>
            </font>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/banner2maquiladora.jpg" class="d-block w-100" alt="..." width="500" height="500">
            <div class="carousel-caption d-none d-md-block">
                <font color="Negro">
                    <h1 class="text-dark"></h1>
                <h2 class="text-white bg-dark">Somos la primer maquiladora automática de corte textil en México</h2>


                    </font>


            </div>
          </div>
          <div class="carousel-item">
            <img src="img/productos.jpg" class="d-block w-100" alt="..."width="500" height="500">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="text-dark">Agiliza tu producción.</h1>
              <h2 >Contamos con 4 diseñadores listos para asesorarte.</h2>
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

      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="c2a">
                    <h2>Acerca de Multitexti</h2>
                    <p>Somos la primer maquiladora automática de corte textil en México, tizadas más precisas y compactas logrando aumentar productividad y a la vez reducir costos y tiempos.
                        Contamos con servicio para toda la República Mexicana.</p>
                        <p >Nuestra máquina además de lo textil puede cortar para:
                            <img src="img/banner3telas.jpg"  alt="..."width="400" height="350" align="right">
                           <li >Industria Automotriz: ViniL, forros plásticos, forros de piel, telas de interiores.</li>
                            <li>Marroquinería: Todo tipo de forro interior de bolsa, exteriores o ciertas telas de bolsas.</li>
                            <li >Ramo para madera: Vinil, telas.</li>
                            <li >Calzado: Forro y vinil.</li>
                            <li >Industrial: Foaming</li>
                        </p>

                    <a href="# class="btn btn-main btn-lg">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
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
                                        <img src="img/Techtextil-620x330.jpg" alt="" align="right">
                                        <p align="left">  Reduce el desperdicio de material; la agilidad y la calidad</p>
                                        <p align="left"> ganaron niveles altísimos, las tizadas son más precisas y compactas.
                                        </p >
                                    </div>



    </section>
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12">

    <!--Card Wider-->
    <div class="card card-cascade">

      <!--Card image-->
      <div class="view view-cascade overlay">
        <img src="img/banner3subli.jpg" class="card-img-top"
          alt="wider"  width="250" height="350" >
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Tú los diseñas </strong></h4>
        <h5 class="indigo-text"><strong>Sublimación</strong></h5>

        <p class="card-text">Podrás ser el diseñador de tus productos, a través de nuestro sublimado para todo tipo de prendas</p>
        <a class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a>
        <!--Dribbble-->
        <a href="https://www.facebook.com/SamHiterx"class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a>

      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6">
    <div class="card card-cascade">


      <div class="view view-cascade overlay">
        <img src="img/telas4.jpg" class="card-img-top"
          alt="narrower" >
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <div class="card-body card-body-cascade text-center">
        <h5 class="pink-text"><i class="fas fa-ring"></i><strong>Corte para producción</strong></h5>
        <!--Title-->
        <h4 class="card-title"></h4>
        <!--Text-->
        <p class="card-text">Optimiza tu tela y utiliza la variedad de tallas que necesites. Beneficios: mayor ahorro en material por el acomodo de piezas, corte textil exacto y en un menor tiempo y puntualidad en la entrega de su trabajo</p>
        <a href="{{ route('telas') }}" class="btn btn-unique">Ver</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6">

    <!--Card Regular-->
    <div class="card card-cascade">

      <!--Card image-->
      <div class="view view-cascade overlay">
        <img src="img/jeans.jpg" class="card-img-top" alt="normal"  width="250" height="350">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--/.Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Muestras
            </strong></h4>
        <h5 class="indigo-text">Mujeres y Hombres</h5>

        <p class="card-text">Olvidate de sorpresas,encontraras los mejores estilos de prendas en el mercado, teniendo una calidad de punta
        </p>

        <!--Facebook-->
        <a href="" type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
        <!--Twitter-->
        <a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>

      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card Regular-->

  </div>
  <!-- Grid column -->

</div>


<a href="" type="button" class="btn btn-fb"><i class="fab fa-facebook-f"></i></a> <button href=""type="button" class="btn btn-ins"><i class="fab fa-instagram"></i></button>

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
