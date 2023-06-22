<?php

session_start();
if(isset($_SESSION["idUsuario"]) && $_SESSION["rol"] == 2){
    
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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="estilo.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div id="cierreSesion">
    <?php echo "Usuario: " .$_SESSION["nombre"]?>
    <a href="loggout.php"><button>CERRAR SESION</button></a>
  </div>
  <?php

  require "consultaBuscar.php";
  require "conexion.php";

  $conexion = conectar();
  $resultado = mysqli_query($conexion, $sql);

  if (mysqli_num_rows($resultado) > 0) {
  ?>
    <form method="POST">
      <table id="tablaListar">
        <tr>
          <th>ID Empleado</th>
          <th>Descripcion</th>
          <th>Precio</th>
          <th></th>
        </tr>
        <?php
        while ($registro = mysqli_fetch_assoc($resultado)) {
        ?>
          <tr>
            <td><?php echo $registro["idProducto"] ?></td>
            <td><?php echo $registro["descripcion"] ?></td>
            <td><?php echo $registro["precio"] ?></td>
          </tr>
        <?php
        }
        ?>
      </table>

    </form>
  <?php
  } else {
  ?>
    <h1>NO HAY DATOS CARGADOS</h1>
  <?php
  }
  ?>
  <br><br><br><br>


  <a href="empleado.php">VOLVER</a>

</body>

</html>