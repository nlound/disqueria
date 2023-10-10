<!DOCTYPE html>
<html lang="es">

<head>
  <?php include '_inc/header.php'; ?>
  <title>Rkive Records</title>
</head>

<body>
  <?php include '_inc/datos.php'; ?>
  <?php include '_inc/discos.php'; ?>

  <div class="promo-block">
    <img src="images/icono-delivery.png" alt="Camión de delivery" class="me-3">
    <p class="m-0 p-0">Envio gratis con tu comprar superior a $25.000</p>
  </div>

  <!--Header Desktop -->
  <header class="only-desktop">
    <div class="container d-flex flex-wrap justify-content-center align-items-center">
      <a href="#hero" class="d-flex align-items-center mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
        <h1>
          <span class="hidden--visually">Rkive Records</span>
          <img class="rr-logo py-2" src="images/logo-rkive.png" alt="Logo de Rkive Records">
        </h1>
      </a>
      <nav class="">
        <div class="container d-flex flex-wrap">
          <ul class="nav me-auto">
            <li class="nav-item"><a href="#discoMes" class="nav-link link-secondary px-2 active"
                aria-current="page">Disco del Mes</a></li>
            <li class="nav-item nav-bar-links"><a href="#store" class="nav-link link-body-emphasis px-2"><img
                  class="icono-disco me-2" src="images/icono-disco.png" alt="Icono de disco"><strong>Comprar
                  mi
                  disco</strong><img class="icono-disco id-inverted ms-2" src="images/icono-disco.png"
                  alt="Icono de disco"></a></li>
            <li class="nav-item nav-bar-links"><a href="#galeria" class="nav-link link-secondary px-2">Rkive Records</a>
            </li>
            <li class="nav-item nav-bar-links"><a href="#seccionFormulario"
                class="nav-link link-secondary px-2">Newsletter</a>
            </li>
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
        <a class="navbar-brand no-pm" href="#hero">
          <h1>
            <span class="hidden--visually">Rkive Records</span>
            <img class="rr-logo py-2" src="images/logo-rkive.png" alt="Logo de Rkive Records">
          </h1>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#discoMes">Disco del Mes</a>
            </li>
            <li class="nav-item nav-bar-links"><a href="#store" class="nav-link link-body-emphasis px-2"><img
                  class="icono-disco me-2" src="images/icono-disco.png" alt="Icono de disco"><strong>Comprar mi
                  disco</strong><img class="icono-disco ms-2" src="images/icono-disco.png" alt="Icono de disco"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galeria">Rkive Records</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#seccionFormulario">Newsletter</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>
  <!--Header Mobile-->

  <!-- Hero -->
  <div id="hero" class="hero setup-background hero-src">
    <h2 class="display-3 fw-bold">El archivo de tus momentos</h2>
    <p>Discos, casettes y vinilos de tus artistas favoritos, al mejor precio y con nuestro sello de atención
      personalizada</p>
    <a href="#shop" class="btn btn-light btn-lg rounded-0 align-self-center">Comprar mi música</a>
  </div>
  <!-- Hero -->

  <!-- Disco del mes -->

  <section class="my-5">
    <div id="discoMes" class="examples-store container">
      <div>
        <h3 class="m-0 pb-3 text-center">Disco del mes</h3>
      </div>
      <div class="card mb-3 border-0">
        <div class="row g-0 flex justify-content-center">
          <div class="col-md-4">
            <img src="images/disco-mes/1989-ts.jpg" class="img-fluid rounded-start"
              alt="Tapa del vinilo de 1989 de Taylor Swift">
          </div>
          <div class="col-md-5">
            <div class="card-body">
              <h5 class="card-title">1989 (Taylor's Version) por Taylor Swift</h5>
              <p class="card-text">Es el próximo cuarto álbum de estudio regrabado de la cantautora estadounidense
                Taylor
                Swift, será lanzado el 27 de octubre de 2023 a través de Republic Records. Es una regrabación de su
                quinto álbum de estudio 1989 (2014) y sigue la contramedida de Swift contra el cambio de propiedad de
                los másteres de sus primeros seis álbumes musicales. La cantante anunció el lanzamiento el día 9 de
                agosto de 2023 en Los Ángeles, durante el final de la primera etapa de su sexta gira musical The Eras
                Tour por Estados Unidos, que va a continuar a partir del 9 de Diciembre en Buenos Aires, Argentina.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Disco del mes -->

  <!--Cards w/album -->
  <section class="disco-del-mes py-5">
    <div id="store" class="examples-store container">
      <h3 class="m-0 pb-3 text-center">¿Qué vamos a escuchar hoy?</h3>
      <p class="text-center">¡Date un paseo por nuestro e-shop! Renovado para que en cuestión de minutos completes tu
        compra <br> y
        puedas asegurarte de recibir tu pedido en menos de 24 horas &#9200; <br>Algunas de nuestras
        ofertas:</p>
      <div class="album-cards-container">
        <div class="album-cards">

          <?php
          foreach ($fotosDiscos as $k => $disco) {
            ?>
            <div class="album-card card rounded-0 mb-3">
              <img src="images/<?php echo $disco['disco'] ?>" class="card-img-top rounded-0 img-album-covers"
                alt="<?php echo $disco['alt'] ?>">
              <div class="card-shop align-items-center justify-content-center p-4">
                <h4 class="h5 text-uppercase text-center pb-2">
                  <?php echo $disco['titulo'] ?>
                </h4>
                <ul class="no-pm text-center p-0 py-2 mb-0 border-top">
                  <li class="list-group-item">
                    <?php echo $disco['artista'] ?></span>
                  </li>
                  <li class="list-group-item">
                    <?php echo $disco['precio'] ?>
                  </li>
                  <li class="list-group-item">
                    <div class="border-bottom align-self-center pb-2">
                      <span style="font-size: 16px"> <i class="bi me-1 bi-star-fill"></i><i
                          class="bi me-1 bi-star-fill"></i><i class="bi me-1 bi-star-fill"></i><i
                          class="bi me-1 bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                    </div>
                  </li>
                </ul>
                <p class="m-0 mt-2">
                  <?php echo $disco['descripcion'] ?>
                </p>
              </div>
            </div>

            <?php
          }
          ?>
        </div>
      </div>

      <a href="shop.html" class="btn btn-lg btn-secondary align-self-center rounded-0 mt-1">Ver más
        discos</a>
    </div>
  </section>
  <!--Cards w/album -->

  <!--Inicio - galeria de fotos -->
  <section id="galeria" class="galeria">
    <div class="container mb-5 py-5" id="seccionGaleria">
      <div class="row text-center">
        <h2 class="m-0 pb-3 text-center">Rkive Records: nuestro local</h2>
        <p>Creamos un refugio de verdad para los que somos fanáticos de la música en formato <span class="highlight">
            analógico</span>. Somos muy
          apasionados por los vinilos y fundamos este espacio con la idea de compartir el amor por la música con la
          gente
          del barrio, y seguimos a full con esa dedicación musical a través de los años.</p>
        <p>Vení a buscar tu vinilo favorito entre nuestras bandejas, disfrutar alguno de nuestros eventos de literatura
          y música o venir a
          las jam de jazz que organizamos todos los meses, <span class="highlight">¿conocés nuestro espacio?</span> Te
          mostramos un poco:</p>
        <?php
        foreach ($fotosLocal as $k => $imagen) {
          ?>
          <div class="col-12 col-md-6 col-lg-3 m-0 p-1 border-0">
            <div class="card">
              <img src="images/<?php echo $imagen['imagen'] ?>" class="card-img-top rounded-0 border-0"
                alt="<?php echo $imagen['alt'] ?>" class="galeria-local">
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </section>


  <!--Inicio - formulario de contacto -->
  <div class="container" id="seccionFormulario">

    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">
        <h2 class="text-center">No te pierdas nuestra promociones 😄</h2>
        <p>Completá este formulario con tus datos, seleccioná tus géneros musicales favoritos y preparate para recibir las mejores promociones de tu amigo Rkive Records 🫂</p>

        <form action="suscripcion.php" method="POST">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
          <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>


          <div class="mb-3">
            <div class="row">
              <div class="col-6">
                <label for="mensaje" class="form-label">Tu mensaje <span class="text-muted">(Opcional)</span></label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
              </div>

              <div class="col-6">
                <p>¿Cuáles son tus géneros favoritos?</p>

                <div class="row">
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="rock" id="rock">
                      <label class="form-check-label" for="rock">
                        Rock
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="pop" id="pop">
                      <label class="form-check-label" for="pop">
                        Pop
                      </label>
                    </div>

                  </div>
                  <div class="col-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="metal" id="metal">
                      <label class="form-check-label" for="metal">
                        Metal
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="kpop" id="kpop">
                      <label class="form-check-label" for="kpop">
                        K-Pop
                      </label>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <input type="submit" value="Subscribirse" class="btn btn-dark mt-3">
          </div>
        </form>
      </div>
    </div>
  </div>


  <?php include '_inc/footer.php'; ?>
</body>

</html>