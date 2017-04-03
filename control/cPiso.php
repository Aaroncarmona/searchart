<?php
    include "../modelo/info/InfoPiso.php";

    include "../modelo/conexiones/Conexion00.php";

    define("RUTA_EMPLEADO","../vista/empleadoInicio.php?");
    define("RUTA_ADMINISTRADOR","../vista/adminInicio.php?");

    $piso = new InfoPiso();

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
        
            $piso->inicializar( 
                NULL,   
                $_REQUEST['id'],   
                $_REQUEST['nom']
            );

            $validar = $piso->insertar($nombre);
            header("Location: ".$ruta."page=piso&id=".$_REQUEST['id']);
    }
    else if(isset($_REQUEST['eliminar']))
    {
        $validar = $piso->eliminar($nombre,$_REQUEST['pisId']);
        header("Location: ".$ruta."page=piso&id=".$_REQUEST['id']);
    }
    else if(isset($_REQUEST['actualizar']))
    {
        $piso->inicializar(
            $_REQUEST['pisId'],
            $_REQUEST['id'], 
            $_REQUEST['nom']
        );
        $validar = $piso->actualizar($nombre);
        header("Location: ".$ruta."page=piso&id=".$_REQUEST['id']);
    }       
    else
    {
        $datosPiso = $piso->getByMusId($_REQUEST['id']);

        if(count($datosPiso) !== 0 )
        {
            include "contenedores/dinamico/admin/piso.php";
        }
        else
        {
            echo '<br><br>
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPiso">
    <span class="glyphicon glyphicon-plus"></span> Agregar Piso
  </button><br>';
            include("contenedores/frm/admFrmNewPiso.php");
            include "contenedores/estatico/vacio.html";
        }
    }
?>