<?php 

    include "../modelo/info/InfoMuseo.php";
    include "../modelo/conexiones/Conexion00.php";

    $museo = new InfoMuseo();
    $conexion = new Conexion00();

    $datos = $museo->getAll();

    include "contenedores/dinamico/admin/museo.php";
?>