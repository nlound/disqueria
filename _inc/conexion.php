<?php 
include 'credenciales.php';

$enlace = mysqli_connect($host, $user, $pass, $db);

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . mysqli_connect_errno();
    exit;
}

$mysqli = new mysqli("localhost","root","","disqueria");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Falló la conexión a MySQL: " . $mysqli -> connect_error;
  exit();
}

?>