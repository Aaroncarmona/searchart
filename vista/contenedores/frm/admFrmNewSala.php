<div class="modal fade" tabindex="-1" role="dialog" id="addSala">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h3 class="modal-title"><strong>Registro de la Sala</strong></h3>
      		</div>
      	<div class="modal-body">


		<form action="../control/cSala.php" method="get" >
			<input type="hidden" name="pisoId" value="<?php echo $_REQUEST['pisoId'] ?>">
			<div class="form-group">
				<label for="input" class="control-label">Nombre:</label>
				<div>
					<input type="text" name="nom" id="nom" class="form-control" required="required" title="Nombre" placeholder="Nombre de la sala">
				</div>
			</div>
					
			

			<div class="form-group">
				<div>
					<input type="submit" name="reg" id="reg" class="form-control btn-success" required="required" title="Registrar" value="Registrar">
				</div>
			</div>
		</form><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->
</div><!-- /.modal -->


