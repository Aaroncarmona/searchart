<div class="modal fade" tabindex="-1" role="dialog" id="addMuseo">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h3 class="modal-title"><strong>Registro de Museo</strong></h3>
      		</div>
	      	
	      	<div class="modal-body">

			<form action="../control/cMuseo.php" method="POST" enctype="multipart/form-data">
		

	
		<div class="form-group">
			<label for="del" class="control-label">Delegacion:</label>
			<div>
				<select name="del" id="del" class="form-control">
					<option value="">-- Seleccióna una delegación--</option>
					<?php 
						$j = 0;
						$con = count($todoDelegacion);
						while ($j !== $con) {
					 ?>
					<option value='<?php echo $todoDelegacion[$j]->getId(); ?>'> <?php echo $todoDelegacion[$j]->getNom(); ?> </option>
					<?php 

							$j++;
						}
					 ?>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="nom" class="control-label">Nombre:</label>
			<div>
				<input type="text" name="nom" id="nom" class="form-control" required="required" title="Ingresa un nombre" placeholder="Ingresa el nombre del Museo">
			</div>
		</div>

		<div class="form-group">
			<label for="map" class="control-label">Url mapa:</label>  <a href="http://www.maps.google.com.mx/" target="_BLANK">Ir a mapas <span class="glyphicon glyphicon-arrow-right"></span></a>
			<div>
				<input type="url" name="map" id="map" class="form-control" required="required" title="Ingresa la URL del mapa" placeholder="Ingresa el URL de Google Maps">
			</div>
			
		</div>

		<div class="form-group">
			<label for="input" class="control-label">Foto de la fachada:</label>
			<div>
				<input type="file" name="foto" id="foto" class="form-control" required="required" title="Foto de la fachada">
			</div>
		</div>

	<div class="form-group">
		<label for="tel" class="control-label">Telefono:</label>
		<div>
			<input type="tel" name="tel" id="tel" class="form-control" required="required" title="Ingresa un Numero telefonico" placeholder="Ingresa numero del telefono" pattern="[0-9]{9}">
		</div>
	</div>

	<div class="form-group">
		<label for="cyn" class="control-label">Calle y Numero:</label>
		<div>
			<input type="address" name="cyn" id="cyn" class="form-control" required="required" title="Ingresa la calle y el numero" placeholder="Ingresar Calle y Numero">
		</div>
	</div>
	
	<div class="form-group">
		<label for="cp" class="control-label">Codigo Postal</label>
		<div>
			<input type="Number" name="cp" id="cp" class="form-control" required="required" title="Ingresa el codigo postal" placeholder="Ingresa el Codigo Postal">
		</div>
	</div>
	
	<div class="form-group">
		<label for="st" class="control-label">Estado Actual</label>
		<div>
			<label class="radio-inline" for="st-2">
			<input type="radio" name="st" id="st-2" value="0">
			Cerrado
			</label>
			<label class="radio-inline" for="st-0">
			<input type="radio" name="st" id="st-0" value="1" checked="checked">
			Activo
			</label> 
		</div>
	</div>

	<div class="form-group">
		<label for="hori" class="control-label">Hora de inicio</label>
		<div>
			<input type="time" name="hori" id="hori" class="form-control" required="required" title="Ingresa la hora de inicio" placeholder="Ingresa la hora que empiezan las visitas">
		</div>
	</div>

	<div class="form-group">
		<label for="horf" class="control-label">Hora de fin</label>
		<div>
			<input type="time" name="horf" id="horf" class="form-control" required="required" title="Ingresa la hora de fin" placeholder="Ingresa la hora que terminan las visitas">
		</div>
	</div>

	<div class="form-group">
		<label for="cos" class="control-label">Costo:</label>
		<div class="input-group">
			<span class="input-group-addon">$</span>
			<input type="number" name="cos" id="cos" class="form-control" required="required" title="Ingresa el costo del museo" placeholder="Ingresa el Costo del Museo">
			<span class="input-group-addon">MXN</span>
		</div>
	</div>


	<div class="form-group">
		<label for="des" class="control-label">Descripcion:</label>
		<div>
			<textarea name="des" id="des" class="form-control" rows="5" required="required" title="Ingresa información del museo" placeholder="Escribe una descripcion del museo"></textarea>	

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
