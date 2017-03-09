<?php /*donde se realiza todo*/

    include "../modelo/info/InfoUsuario.php";
    include "../modelo/conexiones/Conexion00.php";

    $conexion = new Conexion00();
    
    $usuario = new InfoUsuario();
    
    $nivel = $usuario->iniciarSesion($_REQUEST['usu'],$_REQUEST['pass']);

    if ($nivel !== -1 ){
		session_start();
		$_SESSION['usuario'] = $_REQUEST['usu'];
		$_SESSION['tipo'] = $nivel;
	    
	    if($nivel == '0'){
	    	echo "nivel systema";
	    }else if($nivel == '1'){
	    	header("Location: ../vista/adminInicio.php");
	    }else if($nivel == '2'){
	    	echo "nivel empleado";
	    }else{
	    	echo "No existe ese tipo de usuario";
	    }
    }else{
    	?>
	    	<script>
	    		alert("Favor de revisar el usuario y/o contraseña");
	    		location.href = "../vista/sesion.php";
	    	</script>
    	<?php
    	
    }
    
?>
