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
  <h1>Eliminar producto</h1>
  <?php

  $idProducto = $_POST["idProducto"];
  echo "Seguro que desea eliminar producto con ID " . $idProducto;

  ?>
  <br><br><br><br>

  <form method="POST" action="consultaEliminar.php">
    <input type="hidden" name="idProducto" required value="<?php echo $idProducto ?>">
    <button id="botonEnviar" type="submit" value="eliminar">ELIMINAR</button>
  </form>

  <br><br><br><br>


  <a href="admin.php">VOLVER</a>

</body>

</html>