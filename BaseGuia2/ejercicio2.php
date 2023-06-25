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
  <h1>Determinar Estación del Año</h1>

  <form method="post" action="ejercicio2.php">
    <label for="fecha">Ingrese una fecha:</label>
    <input type="date" name="fecha" required>
    <br><br>
    <input type="submit" value="Determinar Estación">
  </form>

  <?php

  if (isset($_POST["fecha"])) {

    $fechaIngresada = $_POST['fecha'];

    $timestamp = strtotime($fechaIngresada);

    $mes = date('n', $timestamp);
    $dia = date('j', $timestamp);

    if (($mes == 12 && $dia >= 21) || ($mes >= 1 && $mes <= 2) || ($mes == 3 && $dia <= 20)) {
      $estacion = 'Verano';
    } elseif (($mes == 3 && $dia >= 21) || ($mes >= 4 && $mes <= 5) || ($mes == 6 && $dia <= 20)) {
      $estacion = 'Otoño';
    } elseif (($mes == 6 && $dia >= 21) || ($mes >= 7 && $mes <= 8) || ($mes == 9 && $dia <= 20)) {
      $estacion = 'Invierno';
    } else {
      $estacion = 'Primavera';
    }

    echo "La fecha $fechaIngresada corresponde a la estación: $estacion";
  }

  ?>

  <a href="profesor.php">VOVLER</a>
</body>

</html>