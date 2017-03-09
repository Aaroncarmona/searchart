<div class="container col-xs-12">
<?php 
$tam = count($datos);
$i = 0;
 ?>	
	<h3>Bitacora</h3>
	<hr>
	<div class="alert alert-info"><span class="glyphicon glyphicon-info-sign"></span><strong>Informacion:</strong> Se muestra toda la actividad de las transacciones realizadas por los empleados.</div>
	
	<input type="text" id="myInput" onkeyup="myFunction()"  class="form-control " placeholder="Busca alguna transaccion..">

	<table class="table table-hover" id="myTable">
		<thead>
			<tr class="header">
				<th>USUARIO</th>
				<th>TABLA</th>
				<th>TRANSACCION</th>
				<th>FECHA</th>
				<th>ACCIONES</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while($i!==$tam){
		?>
			<tr>
				<td> <?php echo $datos[$i]->getUsu(); ?>   </td>
				<td> <?php echo $datos[$i]->getTabla(); ?> </td>
				<td> <?php echo substr($datos[$i]->getTran(), 0 , 30) . "..." ;  ?>  </td>
				<td> <?php echo $datos[$i]->getFecha(); ?> </td>
				<td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#<?php echo $datos[$i]->getId()?>"><span class="glyphicon glyphicon-expand"></span> Ver mas..</button> <td>
			</tr>

		<?php
		include("contenedores/dinamico/admin/modalBitacora.php"); 
		$i++;
		}
		?>
		</tbody>
	</table>
</div>
