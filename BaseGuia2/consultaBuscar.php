<?php

$buscar = $_POST["buscar"];
$opcion = $_POST["op"];

switch ($opcion) {
    case "idProducto":
        echo "Busqueda por ID <br> <br>";
        $sql = "select * from productos where idProducto = $buscar;";
        break;
    case "descripcion":
        echo "Busqueda por Descripcion <br> <br>";
        $sql = "select * from productos where descripcion = '$buscar';";
        break;
    default:
        echo "Busqueda indefinida";
}
