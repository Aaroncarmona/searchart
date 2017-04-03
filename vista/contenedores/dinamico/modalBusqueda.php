<div class="modal fade" tabindex="-1" role="dialog" id="<?php echo $datos[$i]->getId()?>">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h3 class="modal-title"><strong>Detalles del Museo</strong></h3>
				<a href="index.php?id=<?php echo $datos[$i]->getId()?>">Mostrar información completa del museo.</a>
      		</div>
      	<div class="modal-body">


		<form action="../control/cMuseo.php" method="GET" role="form">
			<?php 
				echo $datos[$i]->getFoto();
			 ?>
			<h4>
				<strong>Nombre:</strong>
				<?php 
					echo $datos[$i]->getNom();
				 ?>
			</h4>
			<h4>
				<strong>Telefono :</strong>
				<?php 
					echo $datos[$i]->getTel();
				 ?>
			</h4>
			<h4>
				<strong>Calle y numero :</strong>
				<?php 
					echo $datos[$i]->getCyn();
				 ?>
			</h4>
			<h4>
				<strong>Hora : </strong>
				<?php 
					echo $datos[$i]->getHori();
				 ?>
			</h4>
			<h4>
				<strong>Hora :</strong>
				<?php 
					echo $datos[$i]->getHorf();
				 ?>
			</h4>
			<h4>
				<strong>Costo : $</strong>
				<?php 
					echo $datos[$i]->getCos();
				 ?>
			</h4>
			<h4>
				<strong>Descripción: </strong>
				<?php 
					echo $datos[$i]->getDes();
				 ?>
			</h4>
			<h4><strong>Ubicacion del Museo:</strong></h4>
			

			<iframe src="<?php echo $datos[$i]->getMap(); ?>" width="100%" frameborder="0" allowfullscreen></iframe>

		</form><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->
</div><!-- /.modal -->