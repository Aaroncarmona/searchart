<div class="modal fade" tabindex="-1" role="dialog" id="<?php echo $datosSala[$i]->getId(); ?>">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h3 class="modal-title"><strong>Eliminar Sala</strong></h3>
      		</div>
      	<div class="modal-body">


		<form action="../control/cSala.php" method="GET" role="form">
			<h3>
				<strong>Nombre :</strong>
				<?php 
					echo $datosSala[$i]->getNom();
				 ?>
			</h3>
			
			<hr>
			<strong>
				¿Estas seguro que quieres eliminar?
			</strong>
			<hr>

			<div class="form-group">
				<input type="hidden" name="pisoId" id="pisoId" value="<?php echo $datosSala[$i]->getPisId(); ?>">
				<input type="hidden" name="id" value="<?php echo $datosSala[$i]->getId(); ?>">
				<div>
					<input type="submit" name="eliminar" id="eliminar" class="form-control btn-danger" title="Registrar" value="Eliminar">
				</div>
			</div>
		</form><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->
</div><!-- /.modal -->