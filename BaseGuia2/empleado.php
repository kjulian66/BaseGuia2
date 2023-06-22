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
    <title>Administrador</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body onload="<?php echo isset($_SESSION["usuario"]) ? 'alert(\'¡Bienvenido, ' . $_SESSION["nombre"] . '!\');' : '' ?>">
    <div id="cierreSesion">
        <?php echo "Usuario: " .$_SESSION["nombre"]?>
        <a href="loggout.php"><button>CERRAR SESION</button></a>
    </div>
    <h1>Pagina de Administrador</h1>    
    <div class="admin">
        <ul>
            <li>
                <form method="POST" action="empleadoBuscar.php">
                    <!-- generar la busqueda dependiendo de la opcion ingresada
            por el usuario, puede ser en la misma pag o en otra-->
                    <input type="text" placeholder="Buscar" name="buscar" maxlength="10" required>

                    <input type="radio" name="op" value="idProducto" required>ID
                    <input type="radio" name="op" value="descripcion" required>Descripcion

                    <input type="submit" value="Buscar" name="ENVIAR">

                </form>
            </li>
            <li>
                <a href="empleadoMostrar.php"><button>Mostrar Productos</button></a>
            </li>
        </ul>
    </div>
</body>

</html>