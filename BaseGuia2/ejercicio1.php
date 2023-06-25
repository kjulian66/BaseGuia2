<?php

session_start();
if (isset($_SESSION["idUsuario"]) && $_SESSION["rol"] == 3) {
} else {
  echo "ACCESO DENEGADO!!!";
  echo "<br> <a href='index.php'><button>VOLVER</button></a>";
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="estilo.css">
</head>

<body>
  <?php
  $fechaActual = date('d \d\e F \d\e Y');
  $dia = date("d");

  $diasSemana = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
  $numeroDiaSemana = date('w');
  $diaSemana = $diasSemana[$numeroDiaSemana];

  $meses = array('', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
  $numeroMes = date('n');
  $nombreMes = $meses[$numeroMes];

  echo "Hoy es $diaSemana $dia de $nombreMes de " . date('Y');
  ?>
  <a href="profesor.php">VOVLER</a>
</body>

</html>