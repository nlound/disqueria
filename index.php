<!DOCTYPE html>
<html lang="es">
<head>
  <?php include '_inc/header.php';?>
  <title>Disquería</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <img src="img/logo.png" alt="Logo" class="img-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" disabled href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#seccion-1">Seccion 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#seccion-2">Seccion 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#seccion-3">Seccion 3</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


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

