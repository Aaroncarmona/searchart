<div class="modal fade" tabindex="-1" role="dialog" id="e<?php echo $datosPiso[$i]->getId(); ?>">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h3 class="modal-title"><strong>Editar informacion del Piso</strong></h3>
      		</div>
      	<div class="modal-body">


		<form action="../control/cPiso.php" method="get" >
			<input type="hidden" name="id" value="<?php echo $_REQUEST['id'] ?>">
			<input type="hidden" name="pisId" value="<?php echo $datosPiso[$i]->getId(); ?>">
			<div class="form-group">
				<label for="input" class="control-label">Nombre:</label>
				<div>
					<input type="text" name="nom" id="nom" class="form-control" required="required" title="Nombre" value="<?php echo $datosPiso[$i]->getNom(); ?>">
				</div>
			</div>
					
			<div class="form-group">
				<div>
					<input type="submit" name="actualizar" id="actualizar" class="form-control btn-success" title="Actualizar" value="Actualizar informacion">
				</div>
			</div>
		</form><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->
</div><!-- /.modal -->
