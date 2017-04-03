<div class="modal fade" tabindex="-1" role="dialog" id="<?php echo $datosPiso[$i]->getId()?>">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h3 class="modal-title"><strong>Eliminar Piso</strong></h3>
      		</div>
      	<div class="modal-body">


		<form action="../control/cPiso.php" method="GET" role="form">
			<h3>
				<strong>Nombre :</strong>
				<?php 
					echo $datosPiso[$i]->getNom();
				 ?>
			</h3>
			
			<hr>
			<strong>
				¿Estas seguro que quieres eliminar?
			</strong>
			<hr>

			<div class="form-group">
				<input type="hidden" name="id" id="id" value="<?php echo $datosPiso[$i]->getMusId(); ?>">
				<input type="hidden" name="pisId" value="<?php echo $datosPiso[$i]->getId(); ?>">
				<div>
					<input type="submit" name="eliminar" id="eliminar" class="form-control btn-danger" title="Registrar" value="Eliminar">
				</div>
			</div>
		</form><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->
</div><!-- /.modal -->