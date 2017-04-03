<div class="container col-xs-12">
<?php 
  $tam = count($datos);
  $i = 0;
?>	
	<h3>Bitacora</h3>
	<hr>
	<div class="alert alert-info"><span class="glyphicon glyphicon-info-sign"></span><strong>Informacion:</strong> Se muestra toda la actividad de las transacciones realizadas por los empleados.</div>
  
  <div class="form-group">
    <input type="text" class="search form-control" placeholder="Ingresa cualquier palabra">
  </div>
  <span class="counter"></span>
<div class="table-responsive">
    <table class="table table-bordered table-hover results ">
      <thead>
        <tr>
          <th>#</th>
          <th>USUARIO</th>
          <th>TABLA</th>
          <th>TRANSACCION</th>
          <th>DESCRIPCIÓN</th>
          <th>FECHA</th>
          <th>ACCIONES</th>
        </tr>
        <tr class="warning no-result">
          <td colspan="7"><i class="fa fa-warning"></i> No result</td>
        </tr>
      </thead>
      <tbody>
      <?php
      while($i!==$tam)
      {
      ?>
        <tr>
          <th scope="row"> <?php echo $datos[$i]->getId(); ?> </th>
          <td> <?php echo $datos[$i]->getUsu(); ?>   </td>
          <td> <?php echo $datos[$i]->getTabla(); ?> </td>
          <td> <?php echo $datos[$i]->getTran()  ?>  </td>
          <td> <?php echo substr($datos[$i]->getDesc(), 0 , 15) . "..."?> </td>
          <td> <?php echo $datos[$i]->getFecha(); ?> </td>
          <td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#<?php echo $datos[$i]->getId()?>"><span class="glyphicon glyphicon-expand"></span> Ver mas..</button> 
          </td>
        </tr>
      <?php
        $i++;
      }
  ?>
      </tbody>
    </table>
    <?php 
      $i=0;
      while($i!==$tam)
      {
        include("contenedores/dinamico/admin/modalBitacora.php");
        $i++;
      }
     ?>
  </div>
</div>