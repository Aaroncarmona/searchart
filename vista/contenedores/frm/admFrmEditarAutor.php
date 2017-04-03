<div class="modal fade" tabindex="-1" role="dialog" id="e<?php echo $datos[$i]->getId(); ?>">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h3 class="modal-title"><strong>Modificar informacion del Autor</strong></h3>
      		</div>
      	<div class="modal-body">


		<form action="../control/cAutor.php" method="POST" enctype="multipart/form-data" >
			<input type="hidden" name="id" id="id" value="<?php echo $datos[$i]->getId(); ?>">
			
			<h4>
				<strong>Foto actual</strong>
			</h4>
			<?php echo $datos[$i]->getFoto(); ?>

			<div class="form-group">
				<label for="input" class="control-label">Foto:</label>
				<div>
					<input type="file" required="true" accept='image/*' name="foto" id="foto" class="form-control" title="Foto del Autor">
				</div>
			</div>

			
			<div class="form-group">
				<label for="inputNom" class="control-label">Nombre(s):</label>
				<div>
					<input type="text" name="nom" id="nom" class="form-control"  title="Ingresa un Nombre" value="<?php echo $datos[$i]->getNom() ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputNom" class="control-label">Apodo:</label>
				<div>
					<input type="text" name="apodo" id="apodo" class="form-control" title="Ingresa un Apodo" value="<?php echo $datos[$i]->getApodo() ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputApp" class="control-label">Apellido Paterno:</label>
				<div>
					<input type="text" name="appat" id="appat" class="form-control" title="Ingresa el Apellido Paterno" value="<?php echo $datos[$i]->getAppat() ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputApp" class="control-label">Apellido Materno:</label>
				<div>
					<input type="text" name="apmat" id="apmat" class="form-control" title="Ingresa el Apellido Materno" value="<?php echo $datos[$i]->getApmat() ?>">
				</div>
			</div>

			
			
			<div class="form-group">
				<label for="des" class="control-label">Descripción:</label>
				<div>
					<textarea name="des" id="des" class="form-control" rows="5" title="Ingresa informacion del Autor"><?php echo $datos[$i]->getDes() ?></textarea>	

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
