<?php 
/*
ruta para saber donde estoy
contenedores/dinamico/admin/adminInicio.php

*/
	session_start();
	if( isset($_SESSION['usuario'] ) )
	{
	include('contenedores/estatico/admin/head.html');
	include('contenedores/estatico/admin/nav.html');
?>

			<div class="col-lg-10">
				<div class="row"> 
					<?php 
						if(isset($_REQUEST['page']))
						{
							if($_REQUEST['page'] == "bitacora")
							{
								include('../control/cBitacora.php');
							}
							else if($_REQUEST['page'] == "museo")
							{
								if ($_REQUEST['page'] == "museo" && $_REQUEST['accion'] == "mostrar")
								{
									include('../control/cMuseo.php');
								}
							}
						}
				 	?>
				</div>
			</div>

       	</div> <!-- cierra row -->
   	</div><!--cierra container -->
<?php 
	include('contenedores/estatico/admin/footer.html');
	}
	else
	{
		?>
			<script>
				alert("No se ha iniciado sesion");
				location.href = "../vista/sesion.php";
			</script>
		<?php
	}
?>