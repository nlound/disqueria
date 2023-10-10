<!DOCTYPE html>
<html lang="es">

<head>
  <?php include '_inc/header.php'; ?>
  <title>Rkive Records</title>
</head>

<body>
  <?php include '_inc/datos.php'; ?>
  <div class="promo-block">
    <img src="images/icono-delivery.png" alt="Camión de delivery" class="me-3">
    <p class="m-0 p-0">Envio gratis con tu comprar superior a $25.000</p>
  </div>

  <!--Header Desktop -->
  <header class="py-3 only-desktop">
    <div class="container d-flex flex-wrap justify-content-center align-items-center">
      <a href="index.html" class="d-flex align-items-center mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
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
            <li class="nav-item nav-bar-links"><a href="#store" class="nav-link link-body-emphasis px-2"><img
                  class="icono-disco me-2" src="images/icono-disco.png" alt="Icono de disco"><strong>Comprar
                  mi
                  disco</strong><img class="icono-disco id-inverted ms-2" src="images/icono-disco.png"
                  alt="Icono de disco"></a></li>
            <li class="nav-item nav-bar-links"><a href="#about" class="nav-link link-secondary px-2">Rkive Records</a>
            </li>
            <li class="nav-item nav-bar-links"><a href="#newsletter" class="nav-link link-secondary px-2">Newsletter</a>
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
        <a class="navbar-brand no-pm" href="index.html">
          <h1>
            <span class="hidden--visually">Rkive Records</span>
            <img class="rr-logo" src="images/bc-logo.png" alt="Logo de Rkive Records">
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
                  class="icono-disco me-2" src="images/icono-disco.png" alt="Icono de disco"><strong>Comprar
                  mi
                  disco</strong><img class="icono-disco ms-2" src="images/icono-disco.png" alt="Icono de disco"></a>
            </li>
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

  <!-- Hero -->
  <div class="hero setup-background hero-src">
    <h2 class="display-3 fw-bold">El archivo de tus momentos</h2>
    <p>Discos, casettes y vinilos de tus artistas favoritos, al mejor precio y con nuestro sello de atención
      personalizada</p>
    <a href="#shop" class="btn btn-light btn-lg rounded-0 align-self-center">Comprar mi música</a>
  </div>
  <!-- Hero -->


  <!--Cards w/album -->
  <section>
    <div id="shop" class="examples-store container my-5">
      <h3 class="m-0 pb-3 text-center">¿Qué vamos a escuchar hoy?</h3>
      <p class="text-center">¡Date un paseo por nuestro e-shop! Renovado para que en cuestión de minutos completes tu
        compra <br> y
        puedas asegurarte de recibir tu pedido en menos de 24 horas &#9200; <br>Algunas de nuestras
        ofertas:</p>
      <div class="album-cards-container">
        <div class="album-cards">
          <div class="album-card card rounded-0 mb-3">
            <img src="images/cards/folklore-ts.jpeg" class="card-img-top rounded-0 img-album-covers"
              alt="Tapa del disco Folklore de Taylor Swift">
            <div class="card-shop align-items-center justify-content-center p-4">
              <h4 class="h5 text-uppercase text-center pb-2">Folklore</h4>
              <ul class="no-pm text-center p-0 py-2 mb-0 border-top">
                <li class="list-group-item">Taylor Swift</span></li>
                <li class="list-group-item">$12.000</li>
                <li class="list-group-item">
                  <div class="border-bottom align-self-center pb-2">
                    <span style="font-size: 16px"> <i class="bi me-1 bi-star-fill"></i><i
                        class="bi me-1 bi-star-fill"></i><i class="bi me-1 bi-star-fill"></i><i
                        class="bi me-1 bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                  </div>
                </li>
              </ul>
              <p class="m-0 mt-2">Octavo álbum de estudio, se aparta de los sonidos mainstream y más comerciales de los
                últimos trabajos de
                la cantante y se destaca por melodías armónicas e introspectivas, una interpretación lírica más
                trabajada y una utilización más consistente de la instrumentalización (principalmente piano, guitarra,
                violín y batería).</p>
            </div>
          </div>
          <div class="album-card card rounded-0 mb-3">
            <img src="images/cards/jitb-jhope.jpg" class="card-img-top rounded-0 img-album-covers"
              alt="Tapa del disco Jack in the Box de J-Hope">
            <div class="card-shop align-items-center justify-content-center p-4">
              <h4 class="h5 text-uppercase text-center pb-2">Jack in the Box</h4>
              <ul class="no-pm text-center p-0 py-2 mb-0 border-top">
                <li class="list-group-item">J-Hope</span></li>
                <li class="list-group-item">$15.700</li>
                <li class="list-group-item">
                  <div class="border-bottom align-self-center pb-2">
                    <span style="font-size: 16px"> <i class="bi me-1 bi-star-fill"></i><i
                        class="bi me-1 bi-star-fill"></i><i class="bi me-1 bi-star-fill"></i><i
                        class="bi me-1 bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                  </div>
                </li>
              </ul>
              <p class="m-0 mt-2">Debut álbum del rapero surcoreano J-Hope cuyo concepto se basa en la historia de la
                Caja de Pandora, se discuten
                temáticas de pasión, ambición, humanidad, insguridad, sexualidad, éxito y ansiedad sobre el futuro.
                Principalmente
                influenciado por sonidos de old-school hip-hop, el album también contiene sonidos de pop, grunge y R&B.
              </p>
            </div>
          </div>
          <div class="album-card card rounded-0 mb-3">
            <img src="images/cards/sinister-bs.jpg" class="card-img-top rounded-0 img-album-covers"
              alt="Bolsa de café Catalina">
            <div class="card-shop align-items-center justify-content-center p-4">
              <h4 class="h5 text-uppercase text-center pb-2">If you're feeling sinister</h4>
              <ul class="no-pm text-center p-0 py-2 mb-0 border-top">
                <li class="list-group-item">Belle and Sebastian</span></li>
                <li class="list-group-item">$19.200</li>
                <li class="list-group-item">
                  <div class="border-bottom align-self-center pb-2">
                    <span style="font-size: 16px"> <i class="bi me-1 bi-star-fill"></i><i
                        class="bi me-1 bi-star-fill"></i><i class="bi me-1 bi-star-fill"></i><i
                        class="bi me-1 bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                  </div>
                </li>
              </ul>
              <p class="m-0 mt-2">El álbum es ampliamente considerado como un clásico del género indie pop, y ha
                obtenido un culto entre los aficionados del grupo siendo el punto más alto de la carrera de Belle and
                Sebastian. El líder del grupo, Stuart Murdoch, ha declarado en entrevistas que este es probablemente su
                mejor colección de canciones.</p>
            </div>
          </div>
          <div class="album-card card rounded-0 mb-3">
            <img src="images/cards/thisiswhy-paramore.jpeg" class="card-img-top rounded-0 img-album-covers"
              alt="Bolsa de café Etiopía">
            <div class="card-shop align-items-center justify-content-center p-4">
              <h4 class="h5 text-uppercase text-center pb-2">This is why</h4>
              <ul class="no-pm text-center p-0 py-2 mb-0 border-top">
                <li class="list-group-item">Paramore</span></li>
                <li class="list-group-item">$13.100</li>
                <li class="list-group-item">
                  <div class="border-bottom align-self-center pb-2">
                    <span style="font-size: 16px"> <i class="bi me-1 bi-star-fill"></i><i
                        class="bi me-1 bi-star-fill"></i><i class="bi me-1 bi-star-fill"></i><i
                        class="bi me-1 bi-star-fill"></i><i class="bi bi-star-fill"></i></span>
                  </div>
                </li>
              </ul>
              <p class="m-0 mt-2">Es el primer álbum de la banda en casi seis años, después de After Laughter (2017). “Desde el primer día, Bloc
                Party fue la referencia número uno porque había tanta urgencia en su sonido que era diferente al fast
                punk o al pop punk. o similares, un fuerte muro de sonido de bandas emo que estaban sucediendo a
                principios de la década de 2000”.</p>
            </div>
          </div>
        </div>
      </div>

      <a href="shop.html" class="btn btn-lg btn-secondary align-self-center rounded-0 mt-1">Ver más
        discos</a>
    </div>
  </section>
  <!--Cards w/album -->


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



  <!--Inicio - galeria de fotos -->
  <div class="container mb-5" id="seccionGaleria">
    <div class="row">
      <h2 class="text-center">Nuestro local</h2>
      <p>Creamos un refugio de verdad para los que somos fanáticos de la música en formato analógico. Somos muy
        apasionados por los vinilos y fundamos este espacio con la idea de compartir el amor por la música con la gente
        del barrio, y seguimos a full con esa dedicación musical a través de los años.</p>
      <p>Las imágenes te van a llevar a recorrer las estanterías llenas de discos de vinilo, los rincones re copados
        donde nos juntamos los fanáticos de la música, y las sesiones de escucha que armamos y que han hecho que se
        forjen lazos musicales y amistades que duran toda la vida. Vas a ver cómo fuimos cuidando esa tradición musical
        durante décadas y cómo nos hicimos parte de la movida musical del barrio.</p>
      <?php
      foreach ($fotosLocal as $k => $imagen) {
        ?>
        <div class="col-12 col-md-3 col-lg-2">
          <div class="card">
            <img src="images/<?php echo $imagen['imagen'] ?>" class="card-img-top" alt="<?php echo $imagen['alt'] ?>"
              class="galeria-local">
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>

  <!--Inicio - formulario de contacto -->
  <div class="container" id="seccionFormulario">

    <div class="row">
      <div class="col-12 col-lg-8 offset-lg-2">
        <h2 class="text-center">No te pierdas nada</h2>
        <p>Completá este formulario con tus datos y seleccioná los géneros musicales que mas te gustan para que podamos
          enviarte, todos los meses, las novedades que tenemos.</p>

        <form action="suscripcion.php" method="POST">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
          <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <input type="submit" value="Subscribirse" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>


  <?php include '_inc/footer.php'; ?>
</body>

</html>