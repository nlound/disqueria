<?php include '_inc/header.php';?>

<body>

  <?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];

    $titulo = "";
    $feedback = "";
    $linkEscape = "";

    if (empty($nombre) || empty($apellido) || empty($email)) {
      $titulo = "Error";
      $feedback = "¿Olvidó completar algún campo?";
      $linkEscape = "<button onclick='history.back()' class='btn btn-danger'>Volver</button>";
    } else {
      $titulo = "Gracias";
      $feedback = $nombre . " " . $apellido . " revisa tu correo (" . $email . ") y confirmá tu suscripcion.";
      $linkEscape = "<button onclick='history.back()' class='btn btn-primary'>Ir a la página principal.</button>";
    }
  } else {
    // si entro de otra pagina que no venga del formulario lo mando a la home
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'index.php';
    header("Location: http://$host$uri/$extra");
  }
  ?>


  <div class="container">
    <div class="row">
      <h1 class="my-5">
        <?php echo $titulo ?>
      </h1>
      <p>
        <?php echo $feedback ?>
      </p>
      <div class="mb-3">
        <?php echo $linkEscape ?>
      </div>
    </div>
  </div>



</body>

</html>