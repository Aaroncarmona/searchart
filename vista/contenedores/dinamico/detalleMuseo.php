<div class="container">
	<div class="col-lg-4">
		<h3>Informacion General</h3>
		<?php echo $datoMuseo->getFoto(); ?>
		<br><strong>Museo: </strong><?php echo $datoMuseo->getNom(); ?>
		<br><strong>Telefono: </strong><?php echo $datoMuseo->getTel() ?>
		<br><strong>Delegación: </strong><?php echo $datoDelegacion->getNom(); ?>
		<br><strong>Calle y Numero: </strong><?php echo $datoMuseo->getCyn() ?>
		<br><strong>Codigo Postal: </strong><?php echo $datoMuseo->getCp() ?>
		<br><strong>Costo: </strong>$<?php echo $datoMuseo->getCos() ?> MXN
		<br><strong>Estado: </strong><?php 
			echo ($datoMuseo->getSt()) ? "Activo" : "Cerrado" ; 
		?>
		
	</div>
	<div class="col-lg-8">
		<h3>Informacion del Museo</h3>
		<?php echo $datoMuseo->getMap(); ?>
		<h3>Descripcion del museo</h3>
		<h4><?php echo $datoMuseo->getDes(); ?></h4>
		<?php 
			if($datoPiso)
			{
				echo '
				<h3>Descripcion de los pisos</h3>
				<div class="container col-lg-12 bg-info">';
				
				for ($i=0; $i < count($datoPiso); $i++) 
				{
					echo ' 
					<h3><strong>Nombre del piso: </strong>' . 
					$datoPiso[$i]->getNom() . '</h3>';

					$datoSala = $sala->getByPisoId($datoPiso[$i]->getId());
					if($datoSala)
					{
						echo '<div class="container col-lg-12">';
						for ($j=0; $j < count($datoSala); $j++) 
						{ 
							echo ' 
								<h4><strong>Nombre de la sala: </strong>' . $datoSala[$j]->getNom() . '</h4>
							';
						}
						echo '
						</div>';
					}
				}
				echo "</div>";
			}
		 ?>
	</div>
</div>