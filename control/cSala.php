<?php
    include "../modelo/info/InfoSala.php";

    include "../modelo/conexiones/Conexion00.php";

    define("RUTA_EMPLEADO","../vista/empleadoInicio.php?");
    define("RUTA_ADMINISTRADOR","../vista/adminInicio.php?");

    $sala = new InfoSala();

    $conexion = new Conexion00();
    
    if(!isset($_SESSION['nombre'])){
        session_start();
    }

    $nombre = $_SESSION['nombre'] . $_SESSION['app'];

    if($_SESSION['niv'] == "1") 
    {
        $ruta = RUTA_ADMINISTRADOR;
    }
    else if($_SESSION['niv'] == "2")
    {
        $ruta = RUTA_EMPLEADO;
    }

    if(isset($_REQUEST['reg']))
    {    
        
            $sala->inicializar( 
                NULL,   
                $_REQUEST['pisoId'],   
                $_REQUEST['nom']
            );

            $validar = $sala->insertar($nombre);
            header("Location: ".$ruta."page=sala&pisoId=".$_REQUEST['pisoId']);
    }
    else if(isset($_REQUEST['eliminar']))
    {
        $validar = $sala->eliminar($nombre,$_REQUEST['id']);
        header("Location: ".$ruta."page=sala&pisoId=".$_REQUEST['pisoId']);
    }
    /*else if(isset($_REQUEST['actualizar']))
    {
        $piso->inicializar(
            $_REQUEST['pisId'],
            $_REQUEST['id'], 
            $_REQUEST['nom']
        );
        $validar = $piso->actualizar($nombre);
        header("Location: ".$ruta."page=piso&id=".$_REQUEST['id']);
    }*/      
    else
    {
        $datosSala = $sala->getByPisoId($_REQUEST['pisoId']);

        if(count($datosSala) !== 0 )
        {
            include "contenedores/dinamico/admin/sala.php";
        }
        else
        {
            echo '<br><br>
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addSala">
    <span class="glyphicon glyphicon-plus"></span> Agregar Sala
  </button><br>';
            include("contenedores/frm/admFrmNewSala.php");
            include "contenedores/estatico/vacio.html";
        }
    }
?>