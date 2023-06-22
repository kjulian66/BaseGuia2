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
    <h1>Modificar producto</h1>
    <?php

    $idProducto = $_POST["idProducto"];
    echo "Modificar producto con ID " . $idProducto;

    require "conexion.php";
    $conexion = conectar();

    $sql = "select * from productos where idProducto = $idProducto;";

    $resultado = mysqli_query($conexion, $sql);

    $registro = mysqli_fetch_assoc($resultado);

    ?>
    <br><br><br><br>

    <form method="POST" action="consultaModificar.php">
        <input type="hidden" name="idProducto" required value="<?php echo $registro["idProducto"] ?>">
        <input type="text" name="descripcion" required value="<?php echo $registro["descripcion"] ?>">
        <input type="number" name="precio" required value="<?php echo $registro["precio"] ?>">
        <button id="botonEnviar" type="submit" value="guardarCambios">GUARDAR CAMBIOS</button>
    </form>

    <br><br><br><br>


    <a href="admin.php">VOLVER</a>

</body>

</html>