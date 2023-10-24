<?php
if (!$fotosDiscos = $mysqli -> query("SELECT * FROM productos")) {
  echo "Falló la consulta!";
  exit();
}
?>