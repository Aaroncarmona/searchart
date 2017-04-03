<div class="modal fade" tabindex="-1" role="dialog" id="e<?php echo $datos[$i]->getId(); ?>">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h3 class="modal-title"><strong>Editar información del Usuario</strong></h3>
      		</div>
      	<div class="modal-body">

		<div class="alert alert-info"><strong>Información: </strong>No se muestra el <strong>usuario</strong> y <strong>contraseña</strong> por razones de seguridad</div>
		<form action="../control/cUsuario.php" method="GET" role="form">
			<input type="hidden" name="id" id="id" value="<?php echo $datos[$i]->getId(); ?>">
			<div class="form-group">
				<label for="autor" class="control-label">Tipo de usuario:</label>
				<div>
					<select name="idTu" id="autor" class="form-control">
						<option value="2">Administrador</option>
						<option value="3">Empleado</option>
					</select>
				</div>
			</div>

			
			<div class="form-group">
				<label for="inputNom" class="control-label">Nombre(s):</label>
				<div>
					<input type="text" name="nom" id="nom" class="form-control" title="Ingresa un Nombre" value="<?php echo $datos[$i]->getNom();?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputApp" class="control-label">Apellidos:</label>
				<div>
					<input type="text" name="app" id="app" class="form-control" title="Ingresa los Apellidos" value="<?php echo $datos[$i]->getApp();?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputUsername" class="control-label">Nombre de usuario:</label>
				<div>
					<input type="text"  value="<?php echo $datos[$i]->getUsername()?>" autocomplete="off" required="true" name="user" id="user" class="form-control" title="Ingresa un Nombre de Usuario" placeholder="Informacion vulnerable">
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword" class="control-label">Contraseña: <small>Informacion vulnerable</small></label>
				<div>
					<input type="password" value="<?php echo $datos[$i]->getPassword()?>" autocomplete="off" required="true" name="pass" id="pass" class="form-control" title="Ingresa una Contraseña" placeholder="Ingresa la Contraseña">
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword" class="control-label">Confirmar Contraseña: <small>Informacion vulnerable</small></label>
				<div>
					<input type="password" value="<?php echo $datos[$i]->getPassword()?>" autocomplete="off" required="true" name="rpass" id="rpass" class="form-control" title="Ingresa de Nuevo la Contraseña" placeholder="Repetir Contraseña">
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