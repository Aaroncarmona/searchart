<?php /*donde se realiza todo*/

    include "../modelo/info/InfoUsuario.php";
    include "../modelo/info/InfoTipoUsuario.php";
    include "../modelo/conexiones/Conexion00.php";

    $conexion = new Conexion00();
    
    $usuario = new InfoUsuario();
    $tipoUsuario = new InfoTipoUsuario();
    $idUsuario = $usuario->iniciarSesion($_REQUEST['usu'],$_REQUEST['pass']);

    $dUsuario = $usuario->getById($idUsuario);


    $dTipoUsuario = $tipoUsuario->getById($dUsuario->getTuId());

    
    
    /*
		Primero se obtiene el id en caso de que este registrador mediante el usuario y la contraseña que se ingrese en el formulario

		Posteriormente se obtine todo el objeto del usuario el proceso consiste en buscar al usuario mediante el id que se obtuvo del pl sql LOGIN

		Al tener la verificacion del login y los datos del usuario se mandara a llamar el pl sql donde vamos a obtener el detalle de que tipo de usuario es el que esta accediendo al sistema para posterirmente redirijirlo a la pagina correcta

    */

    if ( $dTipoUsuario )
    {
		session_start();
		$_SESSION['usuario'] = $dUsuario->getId();
		$_SESSION['tipo'] = $dTipoUsuario->getId();
	    
	    if($dTipoUsuario->getNiv() == '0')
	    {
	    	echo "nivel systema";
	    }
	    else if($dTipoUsuario->getNiv() == '1')
	    {
	    	header("Location: ../vista/adminInicio.php");
	    }
	    else if($dTipoUsuario->getNiv() == '2')
	    {
	    	echo "nivel empleado";
	    }
	    else
	    {
	    	echo "No existe ese tipo de usuario";
	    }
    }
    else
    {
		?>
	    	<script>
	    		alert("Favor de revisar el usuario y/o contraseña");
	    		location.href = "../vista/sesion.php";
	    	</script>
    	<?php
    	
    }
    
?>
