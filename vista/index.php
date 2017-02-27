<?php
	if(isset($_REQUEST['sesion'])){ //se verifica que tipo de usuario esta entrando al sistema
		if ($_REQUEST['sesion'] == "admin") {
			include('contenedores/estaticoadm/head.html');
			include('contenedores/estaticoadm/nav.html');
			include('contenedores/estaticoadm/contenedor.php');
			include('contenedores/estaticoadm/footer.html');
			
		
		}

	}else{
		include('contenedores/estatico/head.html');
		include('contenedores/estatico/nav.html');
		include('contenedores/dinamico/barra.php');
		include('contenedores/dinamico/contenido.php');
		include('contenedores/estatico/footer.html');
	}

	
?>