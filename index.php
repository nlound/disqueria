<!DOCTYPE html>
<html lang="es">
<head>
  <?php include '_inc/header.php';?>
  <title>Disquería</title>
</head>
<body>
<div class="promo-block">
        <img src="images/icono-delivery.png" alt="Camión de delivery" class="me-3">
        <p class="m-0 p-0">Envio gratis con tu comprar superior a $25.000</p>
    </div>
    
    <!--Header Desktop -->
    <header class="py-3 only-desktop">
        <div class="container d-flex flex-wrap justify-content-center align-items-center">
            <a href="index.html"
                class="d-flex align-items-center mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                <h1>
                    <span class="hidden--visually">Rkive Records</span>
                    <img class="rr-logo" src="images/rr-logo.png" alt="Logo de Rkive Records">
                </h1>
            </a>
            <nav class="">
                <div class="container d-flex flex-wrap">
                    <ul class="nav me-auto">
                        <li class="nav-item"><a href="#discoMes" class="nav-link link-secondary px-2 active"
                                aria-current="page">Disco del Mes</a></li>
                                <li class="nav-item nav-bar-links"><a href="#store"
                                    class="nav-link link-body-emphasis px-2"><img class="icono-disco me-2"
                                        src="images/icono-disco.png" alt="Icono de disco"><strong>Comprar
                                        mi
                                        disco</strong><img class="icono-disco id-inverted ms-2"
                                        src="images/icono-disco.png" alt="Icono de disco"></a></li>
                        <li class="nav-item nav-bar-links"><a href="#about"
                                class="nav-link link-secondary px-2">Rkive Records</a></li>
                        <li class="nav-item nav-bar-links"><a href="#newsletter"
                                class="nav-link link-secondary px-2">Newsletter</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--Header Desktop-->

    <!--Header Mobile-->
    <header class="only-mobile">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand no-pm" href="index.html">
                    <h1>
                        <span class="hidden--visually">Rkive Records</span>
                        <img class="rr-logo" src="images/bc-logo.png" alt="Logo de Rkive Records">
                    </h1>
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#discoMes">Disco del Mes</a>
                        </li>
                        <li class="nav-item nav-bar-links"><a href="#store"
                                class="nav-link link-body-emphasis px-2"><img class="icono-disco me-2"
                                    src="images/icono-disco.png" alt="Icono de disco"><strong>Comprar
                                    mi
                                    disco</strong><img class="icono-disco ms-2" src="images/icono-disco.png"
                                    alt="Icono de disco"></a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Rkive Records</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#newsletter">Newsletter</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!--Header Mobile-->


<div class="container" id="seccion-1">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-4">COLUMNA</div>
    <div class="col-12 col-md-6 col-lg-4">COLUMNA</div>
    <div class="col-12 col-md-6 col-lg-4">COLUMNA</div>
  </div>
</div>


<div class="container" id="seccion-2">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-4">COLUMNA</div>
    <div class="col-12 col-md-6 col-lg-4">COLUMNA</div>
    <div class="col-12 col-md-6 col-lg-4">COLUMNA</div>
  </div>
</div>

<div class="container" id="seccion-3">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-4">COLUMNA</div>
    <div class="col-12 col-md-6 col-lg-4">COLUMNA</div>
    <div class="col-12 col-md-6 col-lg-4">COLUMNA</div>
  </div>
</div>

<?php include '_inc/footer.php';?>



</body>
</html>

