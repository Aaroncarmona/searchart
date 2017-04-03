
<?php
    include "../modelo/info/InfoAutor.php";
    include "../modelo/conexiones/Conexion00.php";
    
    define("RUTA_EMPLEADO","../vista/empleadoInicio.php?");
    define("RUTA_ADMINISTRADOR","../vista/adminInicio.php?");
    define("RUTA_ARCHIVOS","../vista/recursos/img/autor/");

    $autor = new InfoAutor();
    $conexion = new Conexion00();
    
    $ruta = "";
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
         //echo $_FILES['foto']['tmp_name'];
        $img = RUTA_ARCHIVOS . basename($_FILES['foto']['name']);
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $img))
        {
            $autor->inicializar( null , 
                $_REQUEST['nom'],
                $_REQUEST['apodo'],
                $_REQUEST['appat'],
                $_REQUEST['apmat'],
                $img,
                $_REQUEST['des'] );

            $validar = $autor->insertar($nombre);

            if( $validar ) 
            {
                ?>
                    <script>
                    alert("Se ha agregado el nuevo Autor satisfactoriamente");
                    </script>
                <?php
            }
        }
        else
        {
           	?>
                <script>
                alert("No se ha podido registrar el nuevo Autor");
                </script>
            <?php
        }
        header("Location: ".$ruta."page=autor");
    }
    else if(isset($_REQUEST['eliminar']))
    {
        $validar = $autor->eliminar($nombre,$_REQUEST['id']);
        header("Location: ".$ruta."page=autor");
    }
    else if(isset($_REQUEST['actualizar']))
    {
        
        $img = RUTA_ARCHIVOS . basename($_FILES['foto']['name']);
        if($_FILES['foto']['name'] !== "")
        {
            move_uploaded_file($_FILES['foto']['tmp_name'], $img);
        }

        $autor->inicializar( 
            $_REQUEST['id'] , 
            $_REQUEST['nom'],
            $_REQUEST['apodo'],
            $_REQUEST['appat'],
            $_REQUEST['apmat'],
            $img,
            $_REQUEST['des'] );

            $validar = $autor->actualizar($nombre);
       header("Location: ".$ruta."page=autor");
    }       
    else
    {
        $datos = $autor->getAll();

        if(count($datos) !== 0 )
        {
            include "contenedores/dinamico/admin/autor.php";
        }
        else
        {
            include "contenedores/estatico/vacio.html";
        }
    }
?>