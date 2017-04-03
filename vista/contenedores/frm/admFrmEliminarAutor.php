<div class="modal fade" tabindex="-1" role="dialog" id="<?php echo $datos[$i]->getId()?>">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h3 class="modal-title"><strong>Eliminar Autor</strong></h3>
      		</div>
      	<div class="modal-body">


		<form action="../control/cAutor.php" method="GET" role="form">
			<?php 
				echo $datos[$i]->getFoto();
			 ?>
			<h4>
				<strong>Apodo:</strong>
				<?php 
					echo $datos[$i]->getApodo();
				 ?>
			</h4>
			<h4>
				<strong>Nombre :</strong>
				<?php 
					echo $datos[$i]->getNom();
				 ?>
			</h4>
			<h4>
				<strong>Apellidos: </strong>
				<?php 
					echo $datos[$i]->getAppat() . " " . $datos[$i]->getApmat();
				 ?>
			</h4>
			<h4>
				<strong>
					Descripción
				</strong>
				<?php 
					echo $datos[$i]->getDes();
				 ?>
			</h4>
			<hr>
			<strong>
				¿Estas seguro que quieres eliminar?
			</strong>
			<hr>

			<div class="form-group">
				<input type="hidden" name="id" id="id" value="<?php echo $datos[$i]->getId(); ?>">
				<div>
					<input type="submit" name="eliminar" id="eliminar" class="form-control btn-danger" title="Registrar" value="Eliminar">
				</div>
			</div>
		</form><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->
</div><!-- /.modal -->