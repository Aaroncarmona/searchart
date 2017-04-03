<div class="modal fade" tabindex="-1" role="dialog" id="e<?php echo $datos[$i]->getId(); ?>">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h3 class="modal-title"><strong>Editar información de Museo</strong></h3>
      		</div>
	      	
	      	<div class="modal-body">
			<form action="../control/cMuseo.php" method="POST" enctype="multipart/form-data" >
				<input type="hidden" name="id" id="id" value="<?php echo $datos[$i]->getId(); ?>">

	
			<div class="form-group">
				<label for="del" class="control-label">Delegacion:</label>
				<div>
					<?php 
						$del = $delegacion->getById($datos[$i]->getDelid());
					?>
					<select name="del" id="del" class="form-control">
						<option value="<?php echo $del->getId(); ?>"><?php echo $del->getNom(); ?>  </option>
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
				<input type="text" name="nom" id="nom" class="form-control" title="Ingresa un nombre" value="<?php echo $datos[$i]->getNom(); ?>">
			</div>
		</div>

		<div class="form-group">
			<label for="map" class="control-label">Url mapa:</label>  <a href="http://www.maps.google.com.mx/" target="_BLANK">Ir a mapas <span class="glyphicon glyphicon-arrow-right"></span></a>
			<div>
				<input type="url" name="map" id="map" class="form-control" title="Ingresa la URL del mapa" value="<?php echo $datos[$i]->getMap(); ?>">
			</div>
			
		</div>

		<div class="form-group">
			<label for="input" class="control-label">Foto de la fachada:</label>
			<div>
				<input type="file" name="foto" required="true" id="foto" class="form-control" title="Foto de la fachada">
			</div>
		</div>

	<div class="form-group">
		<label for="tel" class="control-label">Telefono:</label>
		<div>
			<input type="tel" name="tel" id="tel" class="form-control" title="Ingresa un Numero telefonico" value="<?php echo $datos[$i]->getTel(); ?>" pattern="[0-9]{9}">
		</div>
	</div>

	<div class="form-group">
		<label for="cyn" class="control-label">Calle y Numero:</label>
		<div>
			<input type="address" name="cyn" id="cyn" class="form-control" title="Ingresa la calle y el numero" value="<?php echo $datos[$i]->getCyn(); ?>">
		</div>
	</div>
	
	<div class="form-group">
		<label for="cp" class="control-label">Codigo Postal</label>
		<div>
			<input type="Number" name="cp" id="cp" class="form-control" title="Ingresa el codigo postal" value="<?php echo $datos[$i]->getCp(); ?>">
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
			<input type="time" name="hori" id="hori" class="form-control" title="Ingresa la hora de inicio" value="<?php echo $datos[$i]->getHori(); ?>">
		</div>
	</div>

	<div class="form-group">
		<label for="horf" class="control-label">Hora de fin</label>
		<div>
			<input type="time" name="horf" id="horf" class="form-control" title="Ingresa la hora de fin" value="<?php echo $datos[$i]->getHorf(); ?>">
		</div>
	</div>

	<div class="form-group">
		<label for="cos" class="control-label">Costo:</label>
		<div class="input-group">
			<span class="input-group-addon">$</span>
			<input type="number" name="cos" id="cos" class="form-control" title="Ingresa el costo del museo" value="<?php echo $datos[$i]->getCos(); ?>">
			<span class="input-group-addon">MXN</span>
		</div>
	</div>

	<div class="form-group">
		<label for="des" class="control-label">Descripcion:</label>
		<div>
			<textarea name="des" id="des" class="form-control" rows="5"  title="Ingresa información del museo"><?php echo $datos[$i]->getDes(); ?></textarea>	

		</div>
	</div>
		
			<div class="form-group">
				<div>
					<input type="submit" name="actualizar" id="actualizar" class="form-control btn-success" title="actualizar" value="Actualizar">
				</div>
			</div>
		</form><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->
</div><!-- /.modal -->
