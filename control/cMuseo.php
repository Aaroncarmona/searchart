<?php
    include "../modelo/info/InfoMuseo.php";
    include "../modelo/info/InfoDelegacion.php";

    include "../modelo/conexiones/Conexion00.php";

    define("RUTA_EMPLEADO","../vista/empleadoInicio.php?");
    define("RUTA_ADMINISTRADOR","../vista/adminInicio.php?");
    define("RUTA_ARCHIVOS","../vista/recursos/img/museo/");

    $museo = new InfoMuseo();
    $delegacion = new InfoDelegacion();

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
        $img = RUTA_ARCHIVOS . basename($_FILES['foto']['name']);
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $img))
        {
            $museo->inicializar( 
                NULL,   
                $_REQUEST['del'],   
                $_REQUEST['nom'],  
                $_REQUEST['map'], 
                $img,
                $_REQUEST['tel'],  
                $_REQUEST['cyn'],  
                $_REQUEST['des'],  
                $_REQUEST['cp'],   
                $_REQUEST['hori'], 
                $_REQUEST['horf'], 
                $_REQUEST['cos'],  
                $_REQUEST['st']
            );

            $validar = $museo->insertar($nombre);
            header("Location: ".$ruta."page=museo");
        }else{
            header("Location: ".$ruta."page=museo");
        }
    }
    else if(isset($_REQUEST['eliminar']))
    {
        $validar = $museo->eliminar($nombre,$_REQUEST['id']);
        header("Location: ".$ruta."page=museo");
    }
    else if(isset($_REQUEST['actualizar']))
    {
        $img = RUTA_ARCHIVOS . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $img);

        $museo->inicializar( 
            $_REQUEST['id'],
            $_REQUEST['del'],
            $_REQUEST['nom'],
            $_REQUEST['map'],
            $img,
            $_REQUEST['tel'],
            $_REQUEST['cyn'],
            $_REQUEST['des'],
            $_REQUEST['cp'],
            $_REQUEST['hori'],
            $_REQUEST['horf'],
            $_REQUEST['cos'],
            $_REQUEST['st']
        );
        $validar = $museo->actualizar($nombre);
        header("Location: ".$ruta."page=museo");
    }       
    else
    {
        $datos = $museo->getAll();
        $todoDelegacion = $delegacion->getAll();

        if(count($datos) !== 0 )
        {
            include "contenedores/dinamico/admin/museo.php";
        }
        else
        {
            include "contenedores/estatico/vacio.html";
        }
    }
?>