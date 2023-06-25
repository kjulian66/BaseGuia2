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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <link href="estilo.css" rel="stylesheet">
</head>

<body onload="<?php echo isset($_SESSION["usuario"]) ? 'alert(\'¡Bienvenido, ' . $_SESSION["nombre"] . '!\');' : '' ?>">
  <div id="cierreSesion">
    <?php echo "Usuario: " . $_SESSION["nombre"] ?>
    <a href="loggout.php"><button>CERRAR SESION</button></a>
  </div>
  <h1>Pagina de Profesor</h1>
  <div class="admin">
    <ul>
      <li>
        <a href="ejercicio1.php"><button>Ejercicio 1</button></a>
      </li>
      <li>
        <a href="ejercicio2.php"><button>Ejercicio 2</button></a>
      </li>
      <li>
        <a href="ejercicio3.php"><button>Ejercicio 3</button></a>
      </li>
    </ul>
  </div>
</body>

</html>