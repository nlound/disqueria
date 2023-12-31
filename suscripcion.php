<?php $title = "Rkive Records - Suscripción"; ?>
<?php include '_inc/datos.php'; ?>
<?php include '_inc/discos.php'; ?>
<?php include '_inc/header.php'; ?>

<body>

  <?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];


    $generos = array(
      "rock" => isset($_POST['rock']),
      "pop" => isset($_POST['pop']),
      "metal" => isset($_POST['metal']),
      "kpop" => isset($_POST['kpop']),
    );


    $titulo = "";
    $feedback = "";
    $linkEscape = "";
    $generosSeleccionados = "";

    if (empty($nombre) || empty($apellido) || empty($email)) {
      $titulo = "Error";
      $feedback = "¿Te olvidaste de completar algún campo?";
      $linkEscape = "<button onclick='history.back()' class='btn btn-danger'>Volver</button>";
    } else {
      $titulo = "Muchas gracias por suscribirte &#128512;";
      $feedback = "¡Hola " . $nombre . " " . $apellido . "! Te mandamos un mail a tu correo (" . $email . "),";
      $recordatorio = "confirmá tu suscripcion para recibir promociones y novedades.";

      foreach ($generos as $genero => $valor) {
        if ($valor > 0) {
          $generosSeleccionados = $generosSeleccionados . $genero . ". ";
        }
      }

      $linkEscape = "<button onclick='history.back()' class='btn btn-dark'>Ir a la página principal</button>";
    }
  } else {
    // si entro de otra pagina que no venga del formulario lo mando a la home
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'index.php';
    header("Location: http://$host$uri/$extra");
  }
  ?>


  <div class="container py-4">
    <div class="row">
  <div class="col">
    <img src="images/logo-rkive-big.png" alt="Logo de Rkive Records">
      <h1 class="my-4">
        <?php echo $titulo ?>
      </h1>

      <p>
        Mi mensaje:  
        <?php echo empty($mensaje) ? "Ninguno": $mensaje ?>
      </p>

      <p>
        Mis estilos musicales favoritos son:  
        <?php echo empty($generosSeleccionados) ? "Ninguno": $generosSeleccionados ?>
      </p>

      <p>
        <?php echo $feedback ?>
        <span class="font-weight-bold">
        <?php echo $recordatorio ?>
      </span>
      </p>


      <div class="mb-3">
        <?php echo $linkEscape ?>
      </div>
      </div>
      </div>
  </div>
</body>

</html>