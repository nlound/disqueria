<?php 
// Perform query
if (!$fotosLocal = $mysqli -> query("SELECT * FROM galeria")) {
  echo "Falló la consulta!";
  exit();
}
?>
