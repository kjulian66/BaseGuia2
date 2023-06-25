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
  <h1>Validar fecha</h1>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="date">Ingrese una fecha (formato: AAAA-MM-DD):</label>
    <input type="text" name="fecha" id="date" required>
    <input type="submit" value="Calcular">
  </form>

  <?php

  if (isset($_POST["fecha"])) {

    $fecha = $_POST["fecha"];

    // Verificar si la fecha es válida
    if (strtotime($fecha) === false) {
      echo "<p>Fecha inválida. Por favor, ingrese una fecha válida en el formato AAAA-MM-DD.</p>";
    } else {
      // Calcular la diferencia en segundos entre la fecha actual y la fecha ingresada
      $diff = strtotime($fecha) - time();

      // Calcular los días
      $days = floor($diff / (60 * 60 * 24));

      // Verificar si la fecha es en el pasado o en el futuro
      if ($days < 0) {
        echo "<p>Han pasado " . abs($days) . " días desde la fecha ingresada.</p>";
      } elseif ($days > 0) {
        echo "<p>Faltan " . $days . " días para la fecha ingresada.</p>";
      } else {
        echo "<p>La fecha ingresada es hoy.</p>";
      }
    }
  }

  ?>

  <a href="profesor.php">VOVLER</a>
</body>

</html>