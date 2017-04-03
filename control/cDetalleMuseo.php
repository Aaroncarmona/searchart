<?php
    include "../modelo/info/InfoMuseo.php";
    include "../modelo/info/InfoDelegacion.php";
    include "../modelo/info/InfoPiso.php";
    include "../modelo/info/InfoSala.php";   
    //include "../modelo/info/InfoExhibicion.php";
    //include "../modelo/info/InfoPintura.php";
    //include "../modelo/info/InfoTexhibicion.php";

    include "../modelo/conexiones/Conexion00.php";


    $conexion = new Conexion00();
    
    $museo = new InfoMuseo();
    $delegacion = new InfoDelegacion();
    $piso = new InfoPiso();
    $sala = new InfoSala();

    
    
    $datoMuseo = $museo->getById($_REQUEST['id']);
    $datoDelegacion = $delegacion->getById($datoMuseo->getDelId());
    $datoPiso = $piso->getByMusId($datoMuseo->getId());

    if ($datoMuseo) {
    	include "contenedores/dinamico/detalleMuseo.php";
    } else {
    	include "contenedores/estatico/vacio.html";
    }


?>