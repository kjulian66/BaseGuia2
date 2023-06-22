<?php

session_start();
if(isset($_SESSION["idUsuario"]) && $_SESSION["rol"] == 1){
    
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

  $idProducto = $_POST["idProducto"];
  $descripcion = $_POST["descripcion"];
  $precio = $_POST["precio"];

  require "conexion.php";
  $conexion = conectar();

  $sql = "update productos set descripcion = '$descripcion', precio = $precio where idProducto = $idProducto;";

  mysqli_query($conexion, $sql);

  if (mysqli_affected_rows($conexion) > 0) {
    echo "Modificacion realizada";
  } else {
    echo "No se pudo realizar la modificacion";
  }
  ?>
  <br><br><br>
  <a href="admin.php">VOLVER</a>
</body>

</html>