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
  <title>Document</title>
  <link href="estilo.css" rel="stylesheet">
</head>

<body>
  <div id="cierreSesion">
    <?php echo "Usuario: " .$_SESSION["nombre"]?>
    <a href="loggout.php"><button>CERRAR SESION</button></a>
  </div>
  <h1>Altas</h1>
  <form method="POST" action="consultaAltas.php">
    <table>
      <tr>
        <td><input type="text" placeholder="Descripcion" name="descripcion" maxlength="10" required></td>
      </tr>
      <tr>
        <td><input type="number" placeholder="Precio" name="precio" minlength="1" maxlength="8" required></td>
      </tr>
      <tr>
        <td><button id="botonEnviar" type="submit" name="ENVIAR">ENVIAR</button></td>
      </tr>
    </table>
  </form>

  <a href="admin.php">VOLVER</a>
  <a href="mostrar.php">MOSTRAR</a>

</body>

</html>