<div class="modal fade" tabindex="-1" role="dialog" id="addAutor">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h3 class="modal-title"><strong>Registro de Autor</strong></h3>
      		</div>
      	<div class="modal-body">


		<form action="../control/cAutor.php" method="POST" enctype="multipart/form-data" >

			
			<div class="form-group">
				<label for="inputNom" class="control-label">Nombre(s):</label>
				<div>
					<input type="text" name="nom" id="nom" class="form-control" required="required" title="Ingresa un Nombre" placeholder="Ingresa el nombre del Autor">
				</div>
			</div>

			<div class="form-group">
				<label for="inputNom" class="control-label">Apodo:</label>
				<div>
					<input type="text" name="apodo" id="apodo" class="form-control" required="required" title="Ingresa un Apodo" placeholder="Ingresa el apodo del Autor">
				</div>
			</div>

			<div class="form-group">
				<label for="inputApp" class="control-label">Apellido Paterno:</label>
				<div>
					<input type="text" name="appat" id="appat" class="form-control" required="required" title="Ingresa el Apellido Paterno" placeholder="Ingresa el Apellido Paterno">
				</div>
			</div>

			<div class="form-group">
				<label for="inputApp" class="control-label">Apellido Materno:</label>
				<div>
					<input type="text" name="apmat" id="apmat" class="form-control" required="required" title="Ingresa el Apellido Materno" placeholder="Ingresa el Apellido Materno">
				</div>
			</div>

			
			<div class="form-group">
				<label for="input" class="control-label">Foto:</label>
				<div>
					<input type="file" accept='image/*' name="foto" id="foto" class="form-control" required="required" title="Foto del Autor">
				</div>
			</div>

			<div class="form-group">
				<label for="des" class="control-label">Descripción:</label>
				<div>
					<textarea name="des" id="des" class="form-control" rows="5" required="required" title="Ingresa informacion del Autor" placeholder="Ingresa una pequeña descripción del Autor"></textarea>	

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
