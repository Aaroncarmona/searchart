<?php 
/*
ruta para saber donde estoy
contenedores/dinamico/emp/adminInicio.php

*/
	session_start();
	if( isset($_SESSION['id'] ) )
	{
	include('contenedores/estatico/emp/head.html');
	include('contenedores/estatico/emp/nav.html');
?>

			<div class="col-lg-10">
				<div class="row"> 
					<?php 
						if(isset($_REQUEST['page']))
						{
							
							if($_REQUEST['page'] == "autor")
							{
								include('../control/cAutor.php');
							}
							else if($_REQUEST['page'] == "museo")
							{
								include('../control/cMuseo.php');
							}
							else if($_REQUEST['page'] == "museo")
							{
								include('../control/cMuseo.php');
							}
							else if($_REQUEST['page'] == "piso")
							{
								include('../control/cPiso.php');
							}
							else if($_REQUEST['page'] == "sala")
							{
								include('../control/cSala.php');
							}
						}
						else
						{
							include('contenedores/dinamico/admin/bienvenida.php');
						}
				 	?>
				</div>
			</div>

       	</div> <!-- cierra row -->
   	</div><!--cierra container -->
<?php 
	include('contenedores/estatico/emp/footer.html');
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