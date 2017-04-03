<?php
    include "../modelo/info/InfoUsuario.php";
    include "../modelo/info/InfoTipoUsuario.php";
    include "../modelo/conexiones/Conexion00.php";

    $usuario = new InfoUsuario();
    $tipoUsuario = new InfoTipoUsuario();
    $conexion = new Conexion00();
    
    if(!isset($_SESSION['nombre'])){
        session_start();
    }
    
    $nombre = $_SESSION['nombre'] . $_SESSION['app'];
        
    if(isset($_REQUEST['reg']))
    {    
        if($_REQUEST['pass'] == $_REQUEST['rpass'])
        {

            $usuario->inicializar( null , $_REQUEST['idTu'],$_REQUEST['nom'],$_REQUEST['app'],$_REQUEST['user'],$_REQUEST['pass'] );
            $validar = $usuario->insertar($nombre);
            if( $validar ) {
                ?>
                    <script>
                    alert("Se ha agregado el nuevo Usuario satisfactoriamente");
                    location.href = "../vista/adminInicio.php?page=usuario&accion=mostrar";
                    </script>
                <?php
            }else{
                ?>
                    <script>
                    alert("No se ha podido registrar el nuevo usuario");
                    location.href = "../vista/adminInicio.php?page=usuario&accion=mostrar";
                    </script>
                <?php
            }
        }
        else
        {
            ?>
                <script>
                    alert("Contraseñas no cohenciden");
                </script>
            <?php
        }
    }
    else if(isset($_REQUEST['eliminar']))
    {
        $validar = $usuario->eliminar($nombre,$_REQUEST['id']);
        if($validar)
        {
            ?>
                <script>
                alert("Se ha eliminado el Usuario satisfactoriamente");
                location.href = "../vista/adminInicio.php?page=usuario&accion=mostrar";
                </script>
            <?php
        }
        else
        {
            ?>
                <script>
                alert("No se ha podido eliminar el Usuario Usuario");
                location.href = "../vista/adminInicio.php?page=usuario&accion=mostrar";
                </script>
            <?php
        }
    }
    else if(isset($_REQUEST['actualizar']))
    {
        if($_REQUEST['pass'] == $_REQUEST['rpass'])
        {

            $usuario->inicializar( $_REQUEST['id'] , $_REQUEST['idTu'],$_REQUEST['nom'],$_REQUEST['app'],$_REQUEST['user'],$_REQUEST['pass'] );
            $validar = $usuario->actualizar($nombre);
            if( $validar ) 
            {
                ?>
                    <script>
                    alert("Se ha actualizado el Usuario satisfactoriamente");
                    location.href = "../vista/adminInicio.php?page=usuario&accion=mostrar";
                    </script>
                <?php
            }
            else
            {
                ?>
                    <script>
                    alert("No se ha podido actualizar la información del Usuario");
                    location.href = "../vista/adminInicio.php?page=usuario&accion=mostrar";
                    </script>
                <?php
            }
        }
    }       
    else
    {
        $datos = $usuario->getAll();

        if(count($datos) !== 0 )
        {
            include "contenedores/dinamico/admin/usuario.php";
        }
        else
        {
            include "contenedores/estatico/vacio.html";
        }
    }
?>