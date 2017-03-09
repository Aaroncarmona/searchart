<div class="container col-xs-12">
<?php 
$tam = count($datos);
echo "hola";
$i = 0;
 ?>	
	<h3>Museo</h3>
	<hr>
	
	<button type="button" class="btn btn-success b">Agregar museo <span class="glyphicon glyphicon-save"></span></button>
	<table class="table table-hover" id="myTable">
		<thead>
			<tr class="header">
				<th>NOMBRE</th>
				<th>TELEFONO</th>
				<th>CALLE Y NUMERO</th>
				<th>ESTADO</th>
				<th>ACCIONES</th>

			</tr>
		</thead>
		<tbody>
		<?php
		while($i!==$tam){
		?>
			<tr>
				<td> <?php echo $datos[$i]->getNom(); ?>   </td>
				<td> <?php echo $datos[$i]->getTel(); ?> </td>
				<td> <?php echo $datos[$i]->getCyn(); ?> </td>
				<td> <?php echo $datos[$i]->getStId(); ?> </td>
				<td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#<?php echo $datos[$i]->getId()?>"><span class="glyphicon glyphicon-expand"></span> Ver mas..</button> <td>
			</tr>

		<?php 
		$i++;
		}
		?>
		</tbody>
	</table>
</div>
