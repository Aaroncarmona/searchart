<?php 

    include "../modelo/info/InfoBitacora.php";
    include "../modelo/conexiones/Conexion00.php";

    $bitacora = new InfoBitacora();
    $conexion = new Conexion00();

    $datos = $bitacora->getAll();

    include "contenedores/dinamico/admin/bitacora.php";
?>