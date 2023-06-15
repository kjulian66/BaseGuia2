<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="estilo.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <?php
  if (isset($_POST["ENVIAR"])) {

    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];

    $sql = "insert into productos (
      descripcion,
      precio
      )
      values (
        '$descripcion',
        '$precio'
      );";

    require "conexion.php";
    $conexion = conectar();

    mysqli_query($conexion, $sql);

    if (mysqli_affected_rows($conexion) > 0) {
      echo "Se cargo producto <br>";
      echo "<a href='altas.php'>VOLVER</a>";
    } else {
      echo "No se cargo producto <br>";
      echo "<a href='altas.php'>VOLVER</a>";
    }
  }
  ?>
</body>

</html>