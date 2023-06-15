<?php
require "conexion.php";
function listarDatos()
{
  $conexion = conectar();
  $sql = "select * from productos;";
  $resulset = mysqli_query($conexion, $sql);
  return $resulset;
}