<div class="modal fade" tabindex="-1" role="dialog" id="prueba">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h3 class="modal-title"><strong>Registro de Usuario</strong></h3>
      		</div>
      	<div class="modal-body">


		<form action="../control/cUsuario.php" method="GET" role="form">
			
			<div class="form-group">
				<label for="autor" class="control-label">Tipo de usuario:</label>
				<div>
					<select name="idTu" id="autor" class="form-control">
						<option value="">-- Selecciona uno --</option>
						<option value="2">Administrador</option>
						<option value="3">Empleado</option>
					</select>
				</div>
			</div>

			
			<div class="form-group">
				<label for="inputNom" class="control-label">Nombre(s):</label>
				<div>
					<input type="text" name="nom" id="nom" class="form-control" required="required" title="Ingresa un Nombre" placeholder="Ingresa el nombre del usuario">
				</div>
			</div>

			<div class="form-group">
				<label for="inputApp" class="control-label">Apellidos:</label>
				<div>
					<input type="text" name="app" id="app" class="form-control" required="required" title="Ingresa los Apellidos" placeholder="Ingresa el Apellido">
				</div>
			</div>

			<div class="form-group">
				<label for="inputUsername" class="control-label">Nombre de usuario:</label>
				<div>
					<input type="text" name="user" id="user" class="form-control" required="required" title="Ingresa un Nombre de Usuario" placeholder="Nombre de usuario">
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword" class="control-label">Contraseña:</label>
				<div>
					<input type="password" name="pass" id="pass" class="form-control" required="required" title="Ingresa una Contraseña" placeholder="Ingresa la Contraseña">
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword" class="control-label">Confirmar Contraseña:</label>
				<div>
					<input type="password" name="rpass" id="rpass" class="form-control" required="required" title="Ingresa de Nuevo la Contraseña" placeholder="Repetir Contraseña">
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
