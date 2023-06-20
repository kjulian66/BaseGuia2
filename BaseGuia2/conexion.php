<?php

function conectar(){

    $serv="localhost";
    $usr="root";
    $pss="";
    $bd="julianbianchiguia2";

    $c=mysqli_connect($serv, $usr, $pss, $bd) or die ("No se pudo cargar la base de datos");
    return $c;
}
