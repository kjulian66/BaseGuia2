<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="estilo.css" rel="stylesheet">
</head>

<body>

  <h1>MOSTRAR</h1>

  <?php
  require "consultaMostrar.php";
  $conexion = conectar();
  $listar = listarDatos();


  if (mysqli_num_rows($listar) > 0) {
  ?>
    <form method="POST">
      <table id="tablaListar">
        <tr>
          <th>ID Empleado</th>
          <th>Descripcion</th>
          <th>Precio</th>
        </tr>
        <?php
        while ($registro = mysqli_fetch_assoc($listar)) {
        ?>
          <tr>
            <td><?php echo $registro["idProducto"] ?></td>
            <td><?php echo $registro["descripcion"] ?></td>
            <td><?php echo $registro["precio"] ?></td>
            <td><input type="radio" name="idProducto" required value="<?php echo $registro["idProducto"] ?>"></td>
          </tr>
        <?php
        }
        ?>
      </table>
      <button id="botonEnviar" type="submit" value="modificar" formaction="modificar.php">MODIFICAR</button>
      <button id="botonEnviar" type="submit" value="eliminar" formaction="eliminar.php">ELIMINAR</button>
    </form>
  <?php
  } else {
  ?>
    <h1>NO HAY DATOS CARGADOS</h1>
  <?php
  }
  ?>

  <br><br><br>

  <a href="admin.php">VOLVER</a>
  <a href="altas.php">ALTAS</a>
</body>



</html>