<?php
    include "../modelo/info/InfoMuseo.php";
    include "../modelo/info/InfoDelegacion.php";

    include "../modelo/conexiones/Conexion00.php";

    $museo = new InfoMuseo();
    $delegacion = new InfoDelegacion();

    $conexion = new Conexion00();
    
    $datos = $museo->getAll();

    if(count($datos) !== 0 )
    {
        include "contenedores/dinamico/busqueda.php";
    }
    else
    {
        include "contenedores/estatico/vacio.html";
    }
?>