<?php 
    include "../modelo/info/InfoBitacora.php";
    include "../modelo/conexiones/Conexion00.php";

    $bitacora = new InfoBitacora();
    $conexion = new Conexion00();

    $datos = $bitacora->getAll();

    if(count($datos) == 0 ){
    	include "contenedores/estatico/vacio.html";
    }else{
    	include "contenedores/dinamico/admin/bitacora.php";
    	
    }
?>